<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'prueba',
                'email' => 'prueba@example.com',
                'password' => Hash::make('prueba1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
