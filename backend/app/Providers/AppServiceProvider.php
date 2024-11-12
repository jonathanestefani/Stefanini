<?php

namespace App\Providers;

use App\Application\Contracts\CepProviderInterface;
use App\Infrastructure\Adapters\ViaCepAdapter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CepProviderInterface::class, ViaCepAdapter::class);
    }

    public function boot(): void
    {
    }
}
