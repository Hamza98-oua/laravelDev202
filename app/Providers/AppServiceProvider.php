<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void { /* ... */ }

    public function boot(): void
    {
        // 1. On charge le fichier de données
        require_once app_path('data.php');

        // 2. On partage les variables avec TOUTES les vues Blade
        // Cela évite l'erreur "Undefined variable" dans le header
        View::share('navigation', $GLOBALS['navigation']);
        View::share('config', $GLOBALS['config']);
        View::share('categories', $GLOBALS['categories']);
    }
}
