<?php namespace Msenl\Providers;

use Illuminate\Support\ServiceProvider;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

/**
 * Class ErrorServiceProvider
 * @package Msenl\Providers
 */
class ErrorServiceProvider extends ServiceProvider
{

    /**
     * Register any error handlers.
     *
     * @return void
     */
    public function boot()
    {
        $whoops = new Run;
        $whoops->pushHandler(new PrettyPageHandler);
        $whoops->register();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
