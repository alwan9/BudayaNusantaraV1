<?php

namespace App\Console\Commands;

use App\Models\ModelHasRoles;
use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class MakeAdmin extends Command
{
     protected $signature = 'shield:make-admin {email}';
    protected $description = 'Assign Admin role to a user';

    public function handle()
    {
        $email = $this->argument('email');
        $user = User::where('email', $email)->first();
        $modelhasrole=ModelHasRoles::where('model_id',$user->id);
        if(isset($modelhasrole)){
            $modelhasrole->delete();
        }
        //if modelhasrole avail delete 
        if (! $user) {
            $this->error("User with email {$email} not found!");
            return;
        }
 
        $user->assignRole('admin');

        $this->info("User {$email} is now an Admin ✅");
    }
}