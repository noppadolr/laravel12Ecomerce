<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [
               'name' => 'Admin',
               'username' => 'admin',
               'email' => 'admin@gmail.com',
               'password' => Hash::make('111'),
               'role' => 'admin',
               'status' => 'active',
               'created_at' => Carbon::now(),
               'email_verified_at' => Carbon::now(),
           ],
           [
               'name' => 'Vendor',
               'username' => 'vendor',
               'email' => 'vendor@gmail.com',
               'password' => Hash::make('111'),
               'role' => 'vendor',
               'status' => 'active',
               'created_at' => Carbon::now(),
               'email_verified_at' => Carbon::now(),
           ],
           [
               'name' => 'User',
               'username' => 'user',
               'email' => 'user@gmail.com',
               'password' => Hash::make('111'),
               'role' => 'user',
               'status' => 'active',
               'created_at' => Carbon::now(),
               'email_verified_at' => Carbon::now(),
           ],
        ]);
    }
}
