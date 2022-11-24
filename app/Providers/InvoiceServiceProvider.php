<?php

namespace App\Providers;

use App\Facades\Invoice;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\App;

class InvoiceServiceProvider extends ServiceProvider
{

    // public $bindings = [
    //     "Invoice" => Invoice::class
    // ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind('Invoice', function($app){
            return new Invoice();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
