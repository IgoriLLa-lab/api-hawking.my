<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreMortgageRequest;
use App\Http\Requests\Api\V1\UpdateMortgageRequest;
use App\Models\Api\V1\Mortgage;

class MortgageController extends Controller
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
     * @param  \App\Http\Requests\Api\V1\StoreMortgageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMortgageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function show(Mortgage $mortgage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function edit(Mortgage $mortgage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\V1\UpdateMortgageRequest  $request
     * @param  \App\Models\Api\V1\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMortgageRequest $request, Mortgage $mortgage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mortgage $mortgage)
    {
        //
    }
}
