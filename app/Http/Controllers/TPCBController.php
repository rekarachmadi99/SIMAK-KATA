<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TPCBController extends Controller
{
    public function index()
    {
        return view('pages.tpcb.index', [
            'title' => 'Tim Pembina Cabang Binaan'
        ]);
    }
}
