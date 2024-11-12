<?php

namespace App\Infrastructure\Adapters;

use App\Application\Contracts\CepProviderInterface;
use Illuminate\Support\Facades\Http;

class ViaCepAdapter implements CepProviderInterface
{
    public function getCepData(string $cep): array
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->failed()) {
            throw new \Exception('CEP não encontrado ou erro na API');
        }

        $data = $response->json();

        return [
            'cep' => $data['cep'],
            'logradouro' => $data['logradouro'],
            'bairro' => $data['bairro'],
            'cidade' => $data['localidade'],
            'estado' => $data['uf'],
        ];
    }
}
