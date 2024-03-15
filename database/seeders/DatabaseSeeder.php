<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Maharani Sekar Hapsari',
            'email' => 'maharani.22037@mhs.unesa.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Tiger Wong',
            'email' => 'tigerwong.22117@mhs.unesa.ac.id',
            'password' => bcrypt('54321')
        ]);

        User::create([
            'name' => 'Alex Marquez',
            'email' => 'alexmarquez.22221@mhs.unesa.ac.id',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Sandy Walsh',
            'email' => 'sandywalsh.22120@mhs.unesa.ac.id',
            'password' => bcrypt('87654321')
        ]);

        User::create([
            'name' => 'Thom Haye',
            'email' => 'thomhaye.22180@mhs.unesa.ac.id',
            'password' => bcrypt('13579')
        ]);

    }
}