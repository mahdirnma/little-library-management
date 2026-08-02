<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'firstName' => 'ali',
            'lastName' => 'azizi',
            'birthYear' => '1998',
            'birthCountry' => 'US',
            'biography' => 'lorem ipsum',
        ]);
        Author::create([
            'firstName' => 'zahra',
            'lastName' => 'nemati',
            'birthYear' => '1995',
            'birthCountry' => 'UK',
            'biography' => 'lorem ipsum',
        ]);

    }
}
