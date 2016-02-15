<?php
namespace App\Application\Web\Business\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class BusinessServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Application\Web\Business\Http\Controllers';
    protected $path      = 'Application/Web/Business/Http/Routes/routes.php';
    protected $prefix    = 'business';


    public function boot(Router $router)
    {
        parent::boot($router);
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', $this->prefix);
    }


    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace, 'prefix' => $this->prefix, 'as' => $this->prefix.'.'], function ($router) {

            require app_path($this->path);

        });
    }
}
