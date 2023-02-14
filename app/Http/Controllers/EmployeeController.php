<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('pages.pegawai.index', [
            'title' => 'Pegawai',
            'data' => EmployeeModel::all()
        ]);
    }

    public function create()
    {
        return view('pages.pegawai.create', [
            'title' => 'Tambah Pegawai',
        ]);
    }

    public function store(Request $request)
    {
        $store = new EmployeeModel();
        $store->nip = $request->nip;
        $store->nama = $request->nama;
        $store->jabatan = $request->jabatan;
        $store->golongan = $request->golongan;
        $store->status = $request->status;
        if ($request->hasFile('foto')) {
            $nama_foto = $request->nip . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(public_path('img/pegawai/'), $nama_foto);
            $store->foto = $nama_foto;
        } else {
            $store->foto = 'default.jpg';
        }
        $store->save();
        return redirect()->route('pegawai.index')->with('toas_success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        return view('pages.pegawai.edit', [
            'title' => 'Edit Pegawai',
            'edit' => EmployeeModel::where('nip', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nip' => ['required'],
            'nama' => ['required'],
            'golongan' => ['required'],
            'foto' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120']
        ]);
        $update = new EmployeeModel();

        $find = $update->where('nip', $id)->first();
        if ($request->hasFile('foto')) {
            if ($find->foto != 'default.jpg') {
                Storage::delete('/img/pegawai/' . $find->foto);
                $request->file('foto')->store('public/img');
                $nama_foto = $request->nip . '.' . $request->file('foto')->getClientOriginalExtension();
                $request->file('foto')->move(public_path('img/pegawai/'), $nama_foto);
                $data = [
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    'status' => $request->status,
                    'foto' => $nama_foto
                ];
            }
        } else {
            $data = [
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'status' => $request->status,
                'foto' => $find->foto
            ];
        }
        $update->where('nip', $id)->update($data);

        return redirect()->route('pegawai.index')->with('toas_success', 'Data berhasil diupdate!');
    }
}
