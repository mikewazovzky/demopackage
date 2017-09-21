<?php
namespace Mikewazovzky\Demopackage;

use Illuminate\Support\ServiceProvider;

class DemopackageServiceProvider extends ServiceProvider
{
    
	public function boot()
	{
		//  load and make available to the application package routes
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        //  load and make available to the application package views
        $this->loadViewsFrom(__DIR__ . '/../views', 'mikewazovzky-demo');
        //  load and make available to the application package migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        //  Make available to the application package factories
        $this->app->make('Illuminate\Database\Eloquent\Factory')->load(__DIR__ . '/../database/factories');
        // Allow application to publish and modify package assets grouped by asset type tag
        // php artisan vendor:publish --tag=sometag --force
        // --tag=config
        $this->publishes([
            __DIR__ . '/../config/main.php' => config_path('mikewazovzky-demo.php'),
        ], 'config');
        // --tag=view
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/mikewazovzky-demo')
        ], 'view');  
        // --tag=migrations
        $this->publishes([
            __DIR__ . '/../database/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');  
        // --tag=public
		$this->publishes([
			__DIR__.'/../assets' => public_path('vendor/mikewazovzky'),
		], 'public');		
	}
	
	public function register()
    {		
		// load and make available to the application package configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/main.php', 'mikewazovzky-demo'
        );        
        // load and make available to the application package facade
        $this->app->bind('mikewazovzky-demo', function() {
            return new Demopackage;
        });
    }	
}