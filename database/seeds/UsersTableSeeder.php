<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'name' => 'Nom' . $i,
                'email' => 'email' . $i . '@example.com',
                'password' => bcrypt('password' . $i),
                'admin' => rand(0, 1)
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Olivier',
            'email' => 'merlin.olivier71@gmail.com',
            'password' => bcrypt('03011997'),
            'admin' => true
        ]);
    }
}