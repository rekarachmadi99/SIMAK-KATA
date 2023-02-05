<?php

namespace App\Http\Controllers;

use App\Models\accountEmployee;
use App\Http\Requests\StoreaccountEmployeeRequest;
use App\Http\Requests\UpdateaccountEmployeeRequest;

class AccountEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaccountEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaccountEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accountEmployee  $accountEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(accountEmployee $accountEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accountEmployee  $accountEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(accountEmployee $accountEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaccountEmployeeRequest  $request
     * @param  \App\Models\accountEmployee  $accountEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaccountEmployeeRequest $request, accountEmployee $accountEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accountEmployee  $accountEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(accountEmployee $accountEmployee)
    {
        //
    }
}
