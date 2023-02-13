<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('pages.pegawai.dataPegawai', [
            'title' => 'Pegawai',
            'data' => EmployeeModel::all()
        ]);
    }

    public function create()
    {
        return view('pages.pegawai.tambahPegawai', [
            'title' => 'Tambah Pegawai',
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
}
