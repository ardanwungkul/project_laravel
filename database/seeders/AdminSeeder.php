<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'no' => 'ADM',
            'username' => 'Ardan Yafi Hamam',
            'email' => 'ardanwungkul14@gmail.com',
            'password' => bcrypt('611525aa'),
            'role' => 'admin'
        ]);
    }
}
