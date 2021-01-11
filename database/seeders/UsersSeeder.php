<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nombre' => 'Lucio Ivan Benito Marquez',
            'numero_empleado' => 996242,
            'password' => Hash::make('root'),
            'email' => 'lucio_21@live.com.mx'
        ]);
    }
}
