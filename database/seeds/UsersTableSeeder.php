<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Thiago Silva',
            'email' => 'thiago.oliveira208@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
