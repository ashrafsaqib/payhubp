<?php

namespace PayHubP;

use Illuminate\Support\ServiceProvider;

class PayHubPServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load Routes
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Load Classess
        $this->app->make('PayHubP\Params');
        $this->app->make('PayHubP\Responses');
        $this->app->make('PayHubP\flexport_API');
    }
}
