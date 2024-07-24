<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responden>
 */
class RespondenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'age' => fake()->numberBetween(15, 100),
            'tempat_tinggal' => fake()->name(),
            'tempat_mendaftar' => fake()->name(),
            'tanggal_keberangkatan' => fake()->name(),
            'paket_dilih' => fake()->name(),
            'nama_tl' => fake()->name(),
            'mutowif' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'telp' => fake()->e164PhoneNumber() ,
        ];
    }
}
