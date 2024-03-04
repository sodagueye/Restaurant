<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([

            'nom'=>'Gueye',
            'prenom'=>'soda',
            'telephone'=>'782623868',
            'adresse'=>'sodagueye',
            'role'=>'admin',
            'email'=>'gueyesoda56@gmail.com',
            'password'=>'sodagueye',

        ]);
    }
}
