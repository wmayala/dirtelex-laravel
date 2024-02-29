<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DirectoryTree\Watchdog\Ldap\Ldap;
use App\Models\User;

class SyncLdapUsers extends Command
{
    protected $signature = 'ldap:sync-ldap-users';
    protected $description = 'Synchronize LDAP users to the local database';

    public function handle()
    {
        $ldap=new Ldap();
        $ldapUsers=$ldap->search()->users()->get();

        foreach($ldapUsers as $ldapuser)
        {
            User::updateOrCreate(
                [
                    'name'=>$ldapuser->displayname[0],
                    'email'=>$ldapuser->mail[0],
                    'password'=>$ldapuser->password[0],
                    'guid'=>$ldapuser->guid[0],
                    'domain'=>$ldapuser->domain[0],
                ]
            );
        }
        $this->info('Users synchronized successfuuly!');
    }
}
