<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class changealluserrole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
     DB::table('model_has_roles')->update(['role_id' => 2]);   
     DB::table('model_has_roles')->where('model_id',1031)->update(['role_id' => 1]);   
    }
}
