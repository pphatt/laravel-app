<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            VariantSeeder::class,
            VariantOptionSeeder::class,
            ArtistSeeder::class,
            ProductSeeder::class,
            ProductItemSeeder::class,
            ProductVariantSeeder::class,
        ]);
    }
}
