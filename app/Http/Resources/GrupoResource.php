<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GrupoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'curso' => $this->curso,
            'letra' => $this->letra,
            'nombre' => $this->nombre,
            'tutor' => $this->tutor,
            'anyoescolar' => $this->anyoescolar,
            'nivel' => $this->nivelEstudios,
            'creador' => $this->creador,
        ];
    }
}
