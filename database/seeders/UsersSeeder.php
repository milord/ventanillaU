<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'milord',
            'email' => 'milord@mail.com',
            'email_verified_at' => '2023-04-30 01:01:01',
            'password' => '$2y$10$VM.1c.PBxtwHZ.M5tS0aAO2zYwc9Is4JU/S9Y8ffyyj8rzQbePI8K',
            'role' => '1',
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Auxiliar',
            'email' => 'auxiliar@mail.com',
            'email_verified_at' => '2023-04-30 01:01:01',
            'password' => '$2y$10$RB.P.QAkYweKzlUSx.eaeePMlRbes0a35Y0KVdNKz5ftDPMW3SPbO',
            'role' => '6',
        ]);
    }
}
