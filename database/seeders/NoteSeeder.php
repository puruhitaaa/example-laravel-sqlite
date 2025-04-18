<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Note::create([
            'title' => 'Sample Note 1',
            'body'  => 'This is a sample note created for testing.',
        ]);
        \App\Models\Note::create([
            'title' => 'Sample Note 2',
            'body'  => 'This is another sample note.',
        ]);
    }
}
