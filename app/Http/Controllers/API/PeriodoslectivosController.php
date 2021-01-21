<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Periodoslectivos;
use Illuminate\Http\Request;
use App\Http\Resources\PeriodoslectivosResource;

class PeriodoslectivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CentroResource::collection(Periodoslectivos::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodoslectivos = json_decode($request->getContent(), true);

        $periodoslectivos = Periodoslectivos::create($periodoslectivos);

        return new PeriodoslectivosResource($periodoslectivos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodoslectivos  $periodoslectivos
     * @return \Illuminate\Http\Response
     */
    public function show(Periodoslectivos $periodoslectivos)
    {
          return new PeriodoslectivosResource($periodoslectivos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodoslectivos  $periodoslectivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodoslectivos $periodoslectivos)
    {
        $periodoslectivosData = json_decode($request->getContent(), true);
        $periodoslectivos->update($periodoslectivosData);

        return new PeriodoslectivosResource($periodoslectivos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodoslectivos  $periodoslectivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodoslectivos $periodoslectivos)
    {
        $periodoslectivos->delete();
    }
}
