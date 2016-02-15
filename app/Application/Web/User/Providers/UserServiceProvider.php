<?php
namespace App\Application\Web\User\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Application\Web\User\Http\Controllers';
    protected $path      = 'Application/Web/User/Http/Routes/';
    protected $prefix    = 'user';


    public function boot(Router $router)
    {
        parent::boot($router);
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', $this->prefix);
    }

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace, 'prefix' => $this->prefix, 'as' => $this->prefix.'.', 'middleware' => ['web'] ], function ($router)
        {
            require app_path($this->path.'routes.php');

            $router->group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth.'], function($router)
            {
                require app_path($this->path.'auths.php');
            });

            $router->group(['namespace' => 'Profile', 'prefix' => 'profiles', 'as' => 'profile.', 'middleware' => ['auth:user']], function($router)
            {
                require app_path($this->path.'profiles.php');
            });

            $router->group(['namespace' => 'Group', 'prefix' => 'groups', 'as' => 'group.', 'middleware' => ['auth:user']], function($router)
            {
                require app_path($this->path.'groups.php');
            });

            $router->group(['namespace' => 'Post', 'prefix' => 'posts', 'as' => 'post.', 'middleware' => ['auth:user']], function($router)
            {
                require app_path($this->path.'posts.php');
            });

            $router->group(['namespace' => 'Comment', 'prefix' => 'comments', 'as' => 'comment.', 'middleware' => ['auth:user']], function($router)
            {
                require app_path($this->path.'comments.php');
            });

            $router->group(['namespace' => 'Participant', 'prefix' => 'participants', 'as' => 'participant.', 'middleware' => ['auth:user']], function($router)
            {
                require app_path($this->path.'participants.php');
            });

        });
    }
}
