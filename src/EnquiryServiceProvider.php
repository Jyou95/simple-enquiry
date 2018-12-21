<?php

namespace Jyou\Enquiry;

use Illuminate\Support\ServiceProvider;

class EnquiryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
    	$this->loadViewsFrom(__DIR__.'/views', 'enquiry');
    	$this->loadMigrationsFrom(__DIR__.'/database/migrations');
    	$this->mergeConfigFrom(
	        __DIR__.'/config/enquiry.php', 'enquiry'
	    );
    	$this->publishes([
    		__DIR__.'/config/enquiry.php' => config_path('enquiry.php'),
    		__DIR__.'/views' => base_path('resources/views/vendor'),
    	]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
