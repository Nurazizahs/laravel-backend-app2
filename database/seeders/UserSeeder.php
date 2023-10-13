<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::factory(5)->create();
         User::create([
             'name'=>'sabil',
             'email'=>'sabil@gmail.com',
             'email_verified_at'=> now(),
             'role'=>'admin',
             'password'=> Hash::make('123456'),
         ]);

         User::create([
            'name'=>'super admin',
            'email'=>'superadmin@gmail.com',
            'email_verified_at'=> now(),
            'role'=>'superadmin',
            'password'=> Hash::make('123456'),
        ]);
    }
}
