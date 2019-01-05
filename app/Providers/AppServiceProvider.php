<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
            \URL::forceScheme('https');

            // fix Specified key was too long; max key length is 767 bytes error
            \Schema::defaultStringLength(191);

            // set db config
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

            $host = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $database = substr($url["path"], 1);


            config([
                'database.connections.mysql.host' => $host,
                'database.connections.mysql.username' => $username,
                'database.connections.mysql.password' => $password,
                'database.connections.mysql.database' => $database,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if($this->app->environment('production')) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
