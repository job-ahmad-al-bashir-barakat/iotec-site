<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->environment('production')) {
            // force https
            if(\Request::isSecure())
                \URL::forceScheme('https');

            // fix Specified key was too long; max key length is 767 bytes error
            \Schema::defaultStringLength(191);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            // register providers
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

        if($this->app->environment('production')) {

            if(\Request::isSecure())
                $this->app['request']->server->set('HTTPS', true);

            // set db config
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

            $host = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $database = substr($url["path"], 1);

            Config::set('database.connections.mysql.host',$host);
            Config::set('database.connections.mysql.username',$username);
            Config::set('database.connections.mysql.password',$password);
            Config::set('database.connections.mysql.database',$database);
        }
    }
}
