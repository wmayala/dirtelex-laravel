<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use LdapRecord\Models\ActiveDirectory\User as LdapUser;
use LdapRecord\Query\Model\Builder;
use LdapRecord\Models\Model;

class UserController extends Controller
{
    protected $ad;

    public function __construct(LdapUser $ad)
    {
        $this->ad = $ad;
    }

    public function login2()
    {
        return view('auth.login2');
    }

    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        dd($email, $password);

        $auth = $this->ad->auth()->attempt($email, $password);

        if ($auth) {
            $user = $this->getLdapUser($email);

            if ($user) {
                $laravelUser = User::firstOrCreate(
                    //['username' => $user['username']],
                    [
                        //'name' => $user['name'],
                        'email' => $user['email'],
                        'password' => bcrypt($user['username']),
                    ]
                );

                auth()->login($laravelUser);

                return response()->json([
                    'success' => true,
                    'user' => $laravelUser,
                ]);
            }
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials',
        ], 401);
    }

    public function getLdapUser($email)
    {
        return $this->ad->search()->where('email', $email)->first();
    }











    public function index(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $users=User::where('name','like','%'.$search.'%')->get();
            return view('users.index')
                ->with('users', $users);
        }
        else
        {
            $users=User::get();
            return view('users.index')
                ->with('users', $users);
        }
    }



    /**
     * Show the form for creating a new resource.
     */
    /*public function create(Request $request)
    {
        if($request)
        {
            $email=$request->input('search');
            $user=LdapUser::where('mail',$email)->first();



            if($user)
            {

                $data=[
                    $username=$user->getFirstAttribute('displayname'),
                    $email=$user->getFirstAttribute('mail'),

                ];
            }
            else
            { $data=[]; }
        }
        return view('users.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store($data)
    {
        dd($data);


        $email=$request->input('email');
        $us=LdapUser::where('mail',$email)->first();

        //dd($us);

        $usr=[
            $username=$us->getFirstAttribute('displayname'),
            $email=$us->getFirstAttribute('mail'),
        ];

        $user=new User([
            'name'=>$usr->username,
            'email'=>$usr->email,
        ]);

        $user->save();

        return redirect()->route('user.index')
            ->with('success','Usuario agregado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
