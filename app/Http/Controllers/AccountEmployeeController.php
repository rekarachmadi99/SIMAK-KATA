<?php

namespace App\Http\Controllers;

use App\Models\AccountEmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        DB::statement("ALTER TABLE account_employee DROP id");
        DB::statement("ALTER TABLE account_employee ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
        $sumAccount = AccountEmployeeModel::count('id');
        $minAccount = AccountEmployeeModel::min('id');
        $nonAktif = new AccountEmployeeModel();

        $is_aktif = $request->is_aktif;
        for ($i = $minAccount; $i <= $sumAccount; $i++) {
            $find = $nonAktif->where('id', $i)->first();

            if ($find->role != 1) {
                $nonAktif->where('id', $i)->update([
                    'is_aktif' => $is_aktif
                ]);
            }
        }
        if ($is_aktif == 1) {
            $message = 'Semua akun berhasil diaktifkan!';
        } else {
            $message = 'Semua akun berhasil dinonaktifkan!';
        }

        return redirect()->route('akun.pegawai.index')->with('toast_success', $message);
    }

    public function resetPasswordDefault()
    {
        DB::statement("ALTER TABLE account_employee DROP id");
        DB::statement("ALTER TABLE account_employee ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
        $sumAccount = AccountEmployeeModel::sum('id');
        $minAccount = AccountEmployeeModel::min('id');
        $resetPasswordDefault = new AccountEmployeeModel();
        for ($i = $minAccount; $i < $sumAccount; $i++) {
            $password = $resetPasswordDefault->where('id', $i)->first();
            if ($password->role != 1) {
                $resetPasswordDefault->where('id', $i)->update([
                    'password' => bcrypt($password->nip)
                ]);
            }
        }

        return redirect()->route('akun.pegawai.index')->with('toast_success', 'Password berhasil dikembalikan kesetelan default!');
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
            'data' => AccountEmployeeModel::where('id', $id)->first()
        ]);
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => ['same:konfirmasi_password']
        ]);
        $update = AccountEmployeeModel::where('nip', $request->nip);
        if ($request->password == NULL) {
            $update->update([
                'nip' => $request->nip,
                'email' => $request->email,
                'is_aktif' => $request->is_aktif,
                'role' => $request->role
            ]);
            return redirect()->route('akun.pegawai.index')->with('toast_success', 'Akun pegawai berhasil diupdate!');
        }
        $update->update([
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_aktif' => $request->is_aktif,
            'role' => $request->role
        ]);
        return redirect()->route('akun.pegawai.index')->with('toast_success', 'Akun pegawai berhasil diupdate!');
    }

    public function destroy($id)
    {
        $destroy = new AccountEmployeeModel();
        $destroy->where('id', $id)->delete();

        return redirect()->route('akun.pegawai.index')->with('toast_success', 'Akun pegawai berhasil dihapus!');
    }
}
