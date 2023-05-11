<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("artist")->insert([
           [
               "artist_name" => "Doja Cat",
               "artist_email" => "name@example.com"],
           [
               "artist_name" => "Uniqlo",
               "arist_email" => "name@example.com"]
        ]);
    }
}
