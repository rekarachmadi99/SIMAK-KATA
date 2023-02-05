<?php

namespace App\Http\Controllers;

use App\Models\employeModel;
use App\Http\Requests\StoreemployeModelRequest;
use App\Http\Requests\UpdateemployeModelRequest;

class EmployeModelController extends Controller
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
     * @param  \App\Http\Requests\StoreemployeModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employeModel  $employeModel
     * @return \Illuminate\Http\Response
     */
    public function show(employeModel $employeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employeModel  $employeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(employeModel $employeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeModelRequest  $request
     * @param  \App\Models\employeModel  $employeModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeModelRequest $request, employeModel $employeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employeModel  $employeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(employeModel $employeModel)
    {
        //
    }
}
