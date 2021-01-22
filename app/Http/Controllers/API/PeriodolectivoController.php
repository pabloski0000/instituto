<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Periodolectivo;
use Illuminate\Http\Request;
use App\Http\Resources\PeriodolectivoResource;

class PeriodolectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PeriodolectivoResource::collection(Periodolectivo::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodolectivo = json_decode($request->getContent(), true);

        $periodolectivo = Periodolectivo::create($periodolectivo);

        return new PeriodolectivoResource($periodolectivo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodolectivo  $periodolectivo
     * @return \Illuminate\Http\Response
     */
    public function show(Periodolectivo $periodolectivo)
    {
          return new PeriodolectivoResource($periodolectivo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodolectivo  $periodolectivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodolectivo $periodolectivo)
    {
        $periodolectivoData = json_decode($request->getContent(), true);
        $periodolectivo->update($periodolectivoData);

        return new PeriodolectivoResource($periodolectivo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodolectivo  $periodolectivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodolectivo $periodolectivo)
    {
        $periodolectivo->delete();
    }
}
