<?php

namespace ZYKUtil\UniSn;

use Illuminate\Support\ServiceProvider;

class UniSnServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/unisn.php' => config_path('unisn.php'),
        ], 'zykutil-unisn');
    }

    public function register()
    {
        $configPath = __DIR__ . '/config/unisn.php';
        $this->mergeConfigFrom($configPath, 'unisn');

        $this->app->singleton(DPUniSnService::class, function () {
            return new DPUniSnService;
        });
    }
}
