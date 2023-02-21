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
        $data->nip = 1;
        $data->nama = 'Admin';
        $data->jabatan = 'Administrator';
        $data->golongan = 'IV-B';
        $data->status = 1;
        $data->no_telepon = '082311129049';
        $data->foto = 'default.jpg';
        $data->save();
    }
}
