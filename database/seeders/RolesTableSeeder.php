<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }

    public function run()
    {
        DB::table('roles')->insert([
        	'name'=>'Admin',
        	'slug'=>'admin',
        ]);

        DB::table('roles')->insert([
        	'name'=>'Author',
        	'slug'=>'author',
        ]);

        DB::table('roles')->insert([
            'name'=>'User',
            'slug'=>'user',
        ]);
    }
    
}
