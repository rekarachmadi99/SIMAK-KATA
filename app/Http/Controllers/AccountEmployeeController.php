<?php

namespace App\Http\Controllers;

use App\Models\AccountEmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AccountEmployeeController extends Controller
{
    public function index()
    {
        return view('pages.akun.akunPegawai', [
            'title' => 'Akun Pegawai',
            'akun' => AccountEmployeeModel::all()
        ]);
    }

    public function nonAktifAccount(Request $request)
    {
        $nonAktif = new AccountEmployeeModel();

        $sumAccount = AccountEmployeeModel::sum('id');
        $minAccount = AccountEmployeeModel::min('id');
        $nonAktif = new AccountEmployeeModel();
        for ($i = $minAccount; $i < $sumAccount; $i++) {
            $find = $nonAktif->find($i)->first();
            if ($find->role != 1) {
                $nonAktif->find($i)->update([
                    'is_aktif' => $request->is_aktif
                ]);
            }
        }
        return redirect()->route('akun.pegawai.index')->with('success', 'Semua akun berhasil di nonaktifkan!');
    }

    public function resetPasswordDefault(Request $request)
    {
        $sumAccount = AccountEmployeeModel::sum('id');
        $minAccount = AccountEmployeeModel::min('id');
        $resetPasswordDefault = new AccountEmployeeModel();
        for ($i = $minAccount; $i < $sumAccount; $i++) {
            $password = $resetPasswordDefault->find($i)->first();
            $resetPasswordDefault->find($i)->update([
                'password' => bcrypt($password->nip)
            ]);
        }

        return redirect()->route('akun.pegawai.index')->with('success', 'Password berhasil di update!');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nip' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'same:konfirmasiPassword'],
            'konfirmasiPassword' => ['required', 'min:6'],
        ], [
            'required.nip' => 'NIP jangan kosong!',
            'required.email' => 'Email jangan kosong!',
            'required.password' => 'Password jangan kosong!',
            'required.konfirmasiPassword' => 'Konfirmasi password jangan kosong'
        ]);

        $store = new AccountEmployeeModel();
        $store->nip = $request->nip;
        $store->email = $request->email;
        $store->password = bcrypt($request->password);
        $store->is_aktif = $request->is_aktif;
        $store->role = $request->role;
        $store->save();

        return redirect(route('akun.pegawai.index'))->with('success', 'Data berhasil ditambah!');
    }


    public function edit($id)
    {
        return view('pages.akun.editAkunPegawai', [
            'title' => 'Edit Akun Pegawai',
            'id' => $id
        ]);
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
