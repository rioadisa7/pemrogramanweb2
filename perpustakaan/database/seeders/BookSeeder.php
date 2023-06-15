<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import model buku
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat data sempel
        Book::create([
            'title' => 'Filosofi Teras',
            'isbn' => 987382121,
            'stok' => 20,
        ]);
    }
}
