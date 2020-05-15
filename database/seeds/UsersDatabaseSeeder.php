<?php

use Illuminate\Database\Seeder;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'1',


        ]);
        \App\User::create([
            'name'=>'anas',
            'email'=>'anas@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'0',


        ]);
        \App\User::create([
            'name'=>'mahmoud',
            'email'=>'mahmoud@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'0',


        ]);
        \App\User::create([
            'name'=>'saad',
            'email'=>'saad@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'0',


        ]);
        \App\User::create([
            'name'=>'ibrahim',
            'email'=>'ibrahim@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'0',


        ]);
        \App\User::create([
            'name'=>'ali',
            'email'=>'ali@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'0',


        ]);
        \App\User::create([
            'name'=>'mohamed',
            'email'=>'mohamed@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'0',


        ]);
        \App\User::create([
            'name'=>'ahmed',
            'email'=>'ahmed@admin.com',
            'password'=>bcrypt('admin'),
            'admin'=>'0',


        ]);
    }
}
