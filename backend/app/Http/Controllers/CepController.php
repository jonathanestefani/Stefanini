<?php

namespace App\Http\Controllers;

use App\Resources\CepResource;
use App\Services\Cep\CepService;

class CepController extends Controller
{
    private CepService $cepService;

    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

    public function consultaCep($cep)
    {
        $addressData = $this->cepService->findAddressByCep($cep);

        return new CepResource($addressData);
    }
}
