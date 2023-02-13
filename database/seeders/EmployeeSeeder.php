<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new \App\Models\EmployeeModel();
        $data->create([
            'nip' => 1,
            'nama' => 'Admin',
            'jabatan' => 'Admin',
            'golongan' => 'IV-B',
            'status' => 1,
            'foto' => 'default.jpg'
        ]);
    }
}
