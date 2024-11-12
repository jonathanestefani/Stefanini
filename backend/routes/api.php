<?php

use App\Http\Controllers\CepController;
use Illuminate\Support\Facades\Route;

Route::get('/consulta-cep/{cep}', [CepController::class, 'consultaCep']);
