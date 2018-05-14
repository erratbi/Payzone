<?php

namespace erratbi\Payzone;

use erratbi\Payzone\Payzone;
use Illuminate\Support\ServiceProvider;

class PayzoneServiceProvider extends ServiceProvider {
    
    public function boot() {

    }


    public function register() {
        $this->app->bind('erratbi-payzone', function() {
            return new Payzone();
        });
        
        $this->publishes([
            __DIR__.'/../config.php' => config_path('payzone.php'),
        ]);
        
        // $this->mergeConfigFrom(__DIR__.'/../config.php', 'payzone');
    }

}