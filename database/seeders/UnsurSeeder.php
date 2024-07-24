<?php

namespace Database\Seeders;

use App\Models\Unsur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UnsurSeeder extends Seeder
{
    public function run(): void
    {
        $unsurs = [
            'Pertanyaan Umum',
            'Tour Leader',
            'Mutowif',
            'Mutowif',
            'Lainnya',

        ];

        foreach ($unsurs as $unsur) {
            Unsur::create([
                'unsur' => $unsur
            ]);
        }
    }
}
