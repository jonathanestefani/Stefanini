<?php

namespace App\Domain\DTOs;

class CepData
{
    public function __construct(
        public string $cep,
        public string $logradouro,
        public string $complemento,
        public string $bairro,
        public string $cidade,
        public string $estado
    ) {}

    public static function fromApiResponse(array $data): self
    {
        return new self(
            cep: $data['cep'] ?? '',
            logradouro: $data['logradouro'] ?? '',
            complemento: $data['complemento'] ?? '',
            bairro: $data['bairro'] ?? '',
            cidade: $data['localidade'] ?? '',
            estado: $data['uf']
        );
    }
}
