<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(5)->create();
        DB::table('products')->insert (
            [
                'id' => '1',
                'img' => '/assets/img/portfolio/1.jpg',
                'productName' => 'Bracelet',
                 'desc' => 'Nice',
            ]
        );
        DB::table('products')->insert (
            [
                'id' => '2',
                'img' => '/assets/img/portfolio/1.jpg',
                'productName' => 'Bracelet',
                 'desc' => 'Nice',
            ]
        );
    }
}
