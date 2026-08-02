<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'book 1',
            'ISBN' => '1234567894562',
            'publishedYear' => 1905,
            'pageCount' => '125',
            'summary' => 'lorem ipsum',
            'price' => '250',
            'stock' => '22',
        ]);
        Book::create([
            'title' => 'book 2',
            'ISBN' => '6958567894562',
            'publishedYear' => 1950,
            'pageCount' => '93',
            'summary' => 'lorem ipsum 2',
            'price' => '950',
            'stock' => '5',
        ]);

    }
}
