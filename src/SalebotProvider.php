<?php namespace professionalweb\salebot\SalebotProvider;

use Illuminate\Support\ServiceProvider;
use professionalweb\salebot\Services\Salebot;
use professionalweb\salebot\Services\SalebotProtocol;
use professionalweb\salebot\Interfaces\Services\SalebotService;
use professionalweb\salebot\Interfaces\Services\SalebotProtocol as ISalebotProtocol;

class SalebotProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/salebot.php' => config_path('salebot.php'),
        ]);
    }

    public function register(): void
    {
        $this->app->singleton(ISalebotProtocol::class, function ($app) {
            return new SalebotProtocol(config('salebot.apiKey'));
        });

        $this->app->singleton(SalebotService::class, Salebot::class);
    }
}
