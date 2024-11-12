<?php 

namespace App\Services\Cep;

use App\Application\Contracts\CepProviderInterface;

class CepService
{
    private CepProviderInterface $cepProvider;

    public function __construct(CepProviderInterface $cepProvider)
    {
        $this->cepProvider = $cepProvider;
    }

    public function findAddressByCep(string $cep): array
    {
        return $this->cepProvider->getCepData($cep);
    }
}
