<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreComparisonRequest;
use App\Http\Requests\Api\V1\UpdateComparisonRequest;
use App\Http\Resources\Api\V1\ComparisonResource;
use App\Http\Resources\Api\V1\RoomResource;
use App\Models\Api\V1\Comparison;
use App\Models\Api\V1\Room;
use Illuminate\Support\Facades\Cache;

class ComparisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Cache::forget('rooms');

        Cache::forever('rooms', RoomResource::collection(Room::with('city')->
        with('area')->
        with('street')->
        with('seller')->
        with('image')->
        with('property')->
        with('mortgage')->
        paginate()));

        return Cache::get('rooms');
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
     * @param \App\Http\Requests\Api\V1\StoreComparisonRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComparisonRequest $request)
    {
        $comparisonData = $request->all();

        Comparison::create($comparisonData);

        return response([
            'Add with compare' => new ComparisonResource($comparisonData),
            'message' => 'Добавлено в сравнение'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Api\V1\Comparison $comparison
     * @return \Illuminate\Http\Response
     */
    public function show(Comparison $comparison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Api\V1\Comparison $comparison
     * @return \Illuminate\Http\Response
     */
    public function edit(Comparison $comparison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Api\V1\UpdateComparisonRequest $request
     * @param \App\Models\Api\V1\Comparison $comparison
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComparisonRequest $request, Comparison $comparison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Api\V1\Comparison $comparison
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comparison $comparison)
    {
        //
    }
}
