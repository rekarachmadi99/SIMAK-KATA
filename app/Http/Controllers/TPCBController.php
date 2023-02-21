<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use App\Models\TPCBModel;
use Illuminate\Http\Request;

class TPCBController extends Controller
{
    public function index()
    {
        return view('pages.tpcb.index', [
            'title' => 'Tim Pembina Cluster Binaan',
            'data' => TPCBModel::select('employee.nip as nip', 'employee.nama as nama', 'tpcb.jabatan as jabatan')->join('employee', 'employee.nip', '=', 'tpcb.nip')
        ]);
    }

    public function view($nip)
    {
        return view('pages.tpcb.view', [
            'title' => 'Tim Pembina Cluster Binaan',
            'data' => EmployeeModel::join('account_employee', 'account_employee.nip', '=', 'employee.nip')->where('employee.nip', $nip)->first()
        ]);
    }

    public function edit()
    {
        return view('pages.tpcb.edit', [
            'title' => 'Tim Pembina Cluster Binaan',
        ]);
    }
}
