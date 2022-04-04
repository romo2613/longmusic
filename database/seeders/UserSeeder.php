<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Javi Romero';
        $user->username = 'romo2613';
        $user->email = 'javi.romero2613@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();

        $user->assignRole('super-admin');
    }
}
