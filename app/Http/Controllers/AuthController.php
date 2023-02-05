<?php

namespace App\Http\Controllers;

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
            'password' => bcrypt($request->nip)
        ];
        dd(Auth::attempt($data));
        if (Auth::attempt($data)) {
        }
    }

    public function lupaPassword()
    {
        return view('pages.lupaPassword', [
            'title' => 'Lupa Password'
        ]);
    }
}
