<?php

namespace App\Http\Controllers;

use App\Models\AccountEmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.login', [
            'title' => 'SIMAK-KATA'
        ]);
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'nip' => ['required'],
            'password' => ['required']
        ], [
            'nip.required' => 'NIP harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);

        $data = [
            'nip' => $request->nip,
            'password' => $request->password
        ];
        // Cek Is Aktif
        $is_aktif = AccountEmployeeModel::where('nip', $request->nip)->first();
        if ($is_aktif->is_aktif == 1) {
            if (Auth::attempt($data)) {
                return redirect(route('dashboard.index'));
            }
            return redirect(route('login'))->with('error', 'Nip dan password yang anda masukan salah!');
        } else {
            return redirect(route('login'))->with('error', 'Akun anda tidak aktif!');
        }
    }

    public function lupaPassword()
    {
        return view('pages.lupaPassword', [
            'title' => 'Lupa Password'
        ]);
    }
}
