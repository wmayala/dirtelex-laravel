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
        {   $users=User::get();
            return view('users.index')
                ->with('users', $users);
        }
    }

    public function searchEmail($email)
    {
        $user=LdapUser::where('mail',$email)->first();

        // AQUI SE DEBE EXTRAER EL USUARIO Y RETORNARLO

        if($user)
        {
            $username=$user->getFirstAttribute('cn');
            if($username)
            { return $username; }
            else
            { return 'NO disponible'; }
        }
        else
        { return 'No disponible'; }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        // UNA VEZ RETORNADO EL USUARIO, EXTARER TODOS LOS DATOS NECESARIOS PARA LA TABLA USER
        // PARA PODER HACER EL STORE 

        if($request)
        {
            $userName=$this->searchEmail($request->input('search'));
            //dd($userName);
            if($userName)
            {
                return view('users.create', compact('userName'));
            }

        }
        else
        {
            return view('users.create');
        }



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


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
