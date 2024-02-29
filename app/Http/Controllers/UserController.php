<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use LdapRecord\Models\ActiveDirectory\User as LdapUser;
use LdapRecord\Query\Model\Builder;
use LdapRecord\Models\Model;

class UserController extends Controller
{
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

    /* public function searchEmail($email)
    {
        $user=LdapUser::where('mail',$email)->first();

        // AQUI SE DEBE EXTRAER EL USUARIO Y RETORNARLO
        //dd($user);

        if($user)
        {
            $data=[
                $username=$user->getFirstAttribute('displayname'),
                $email=$user->getFirstAttribute('mail'),
            ];

            if($data)
            { return $data; }
            else
            { return 'NO disponible'; }
        }
        else
        { return 'No disponible'; }
    } */
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request)
        {
            $email=$request->input('search');
            $user=LdapUser::where('mail',$email)->first();



            if($user)
            {
                //dd($user->physicaldeliveryofficename);
                $data=[
                    $username=$user->getFirstAttribute('displayname'),
                    $email=$user->getFirstAttribute('mail'),
                    //$unit=$user->getFirstAttribute('physicaldeliveryofficename'),
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
    public function store(Request $request)
    {
        dd($request);
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
