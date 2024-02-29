<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class SyncLdapUserController extends Controller
{
    public function sync()
    {
        Artisan::call('ldap:sync-ldap-users');

        return redirect()->back()->with('success','Usuarios sincronizado');
    }
}
