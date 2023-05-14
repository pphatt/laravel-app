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
            UserSeeder::class,
            CategorySeeder::class,
            VariantSeeder::class,
            VariantOptionSeeder::class,
            ArtistSeeder::class,
            ProductSeeder::class,
            ProductItemSeeder::class,
            ProductVariantSeeder::class,
            PaymentMethodSeeder::class,
            ShippingMethodSeeder::class,
            OrderStatusSeeder::class,
            ShopOrderSeeder::class,
            PromotionSeeder::class,
            PromotionCategorySeeder::class
        ]);
    }
}
