<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('products')->insert([
            [
                'name' => 'Black T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/1.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'White T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/2.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'White T-shirt 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/3.jpg',
                'price' => '6800'
            ],
            [
                'name' => 'Black T-shirt Plain',
                'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
                'image' => '/images/4.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'Black T-shirt 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/5.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'Navy T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/6.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'Border T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/7.jpg',
                'price' => '6800'
            ],
            [
                'name' => 'Border Long Sleeve T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/8.jpg',
                'price' => '7800'
            ],
            [
                'name' => 'Gray T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/9.jpg',
                'price' => '3000'
            ],
            [
                'name' => 'Border T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/10.jpg',
                'price' => '2800'
            ],
            [
                'name' => 'Border Long Sleeve T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/11.jpg',
                'price' => '3800'
            ],
            [
                'name' => 'Gray T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/12.jpg',
                'price' => '2500'
            ],
        ]);
    }
}
