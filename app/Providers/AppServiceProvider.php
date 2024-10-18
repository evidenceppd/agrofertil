<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        // Descomentar código abaixo assim que inserir site na hospedagem...

        // $this->app->bind('path.public', function() {
        //     return base_path('public_html');
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        \Illuminate\Pagination\Paginator::useBootstrap();
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
    }
}
    