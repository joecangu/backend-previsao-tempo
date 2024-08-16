<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HistoricoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return [
        //     'data' => $this->data,
        //     'hora' => $this->hora,
        //     'cidade' => $this->cidade,
        //     'temperatura' => $this->temperatura,
        //     'descricao' => $this->descricao
        // ];

        return $this->resource->toArray();
    }
}
