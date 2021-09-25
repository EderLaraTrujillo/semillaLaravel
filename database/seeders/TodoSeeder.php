<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userAdmin=User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
        ]);
        $userPublic=User::create([
            'name' => 'eder',
            'email' => 'user@mail.com',
            'password' => Hash::make('user'),
            'fullacces' => 'no',
            'codigo' => 'public',
        ]);
    }
}
