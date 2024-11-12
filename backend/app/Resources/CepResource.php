<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CepResource extends JsonResource
{
    /**
     * Transforma o array de dados em um array JSON.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'cep' => $this->resource['cep'],
            'logradouro' => $this->resource['logradouro'],
            'bairro' => $this->resource['bairro'],
            'cidade' => $this->resource['cidade'],
            'estado' => $this->resource['estado'],
        ];
    }
}