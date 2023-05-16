<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Laravel",
                "email" => "name@example.com",
                "password" => Hash::make("123"),
                "first_name" => "laravel",
                "last_name" => "laravel",
                "age" => "20",
                "address" => "Somewhere Q5",
                "phone_number" => "0123456789",
                "sex" => "Male",
                "is_admin" => 0
            ]
        ]);
    }
}
