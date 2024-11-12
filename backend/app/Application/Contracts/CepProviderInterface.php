<?php

namespace App\Application\Contracts;

interface CepProviderInterface
{
    public function getCepData(string $cep): array;
}
