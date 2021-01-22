<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Anyoescolar;
use Illuminate\Http\Request;
use App\Http\Resources\AnyoescolarResource;

class AnyoescolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AnyoescolarResource::collection(Anyoescolar::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anyoescolar = json_decode($request->getContent(), true);

        $anyoescolar = Anyoescolar::create($anyoescolar);

        return new AnyoescolarResource($anyoescolar);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anyoescolar  $anyoescolar
     * @return \Illuminate\Http\Response
     */
    public function show(Anyoescolar $anyoescolar)
    {
        return new AnyoescolarResource($anyoescolar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anyoescolar  $anyoescolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anyoescolar $anyoescolar)
    {
        $anyoescolarData = json_decode($request->getContent(), true);
        $anyoescolar->update($anyoescolarData);

        return new AnyoescolarResource($anyoescolar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anyoescolar  $anyoescolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anyoescolar $anyoescolar)
    {
        $anyoescolar->delete();
    }
}
