<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new \App\Models\AccountEmployeeModel();
        $data->create([
            'nip' => 1,
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'is_aktif' => 1,
            'role' => 1
        ]);
    }
}
