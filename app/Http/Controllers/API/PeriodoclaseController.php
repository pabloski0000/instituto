<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periodoclase;
use App\Http\Resources\PeriodoclaseResource;

class PeriodoclaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PeriodoclaseResource::collection(Periodoclase::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodoclase = Periodoclase::create(json_decode($request->getContent(), true));

        /*$periodoclase = json_decode($request->getContent(), true);
        $periodoclase = Periodoclase::create([$periodoclase]);*/

        /*$periodoclaseCrear = new Periodoclase();
        $periodoclaseCrear->save();*/

        return new PeriodoclaseResource($periodoclase);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodoclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function show(Periodoclase $periodoclase)
    {
        return new PeriodoclaseResource($periodoclase);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodoclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodoclase $periodoclase)
    {
        $periodoclase->update(json_decode($request->getContent(), true));

        return new PeriodoclaseResource($periodoclase);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodoclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodoclase $periodoclase)
    {
        $periodoclase->delete();
    }
}
