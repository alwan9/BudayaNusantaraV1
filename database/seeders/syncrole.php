<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class syncrole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
      {
        // Ensure the 'admin' role exists
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Assign the 'admin' role to all users
        User::all()->each(function ($user) use ($adminRole) {
            $user->syncRoles([$adminRole]); // Replace existing roles with 'admin'
        });

        $this->command->info('✅ All users have been assigned the "admin" role successfully.');
    }
}
