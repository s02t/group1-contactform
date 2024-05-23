<?php

namespace group3\contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes, views, and migrations
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contactForm');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Publish views
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/contactform'),
        ], 'views');

        // Publish migrations
        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'migrations');
    }


    public function register()
    {
        // Register package services here
    }
}
