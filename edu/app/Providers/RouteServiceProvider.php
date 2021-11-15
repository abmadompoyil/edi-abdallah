<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    public function getHome(){
        if (Auth::user()->isAdmin()){
            return redirect('\admin');

        }elseif (Auth::user()->isAdmin()) {
            return redirect('\admin');

        }elseif (Auth::user()->isSuperVisor()) {
            return redirect('\supervisor');

        }elseif (Auth::user()->isSchool()) {
            return redirect('\school');

        }
    }


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapDelRoutes();
        $this->mapEduRoutes();
        $this->mapSchoolRoutes();
        $this->mapSuperVisorRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }
    protected function mapSchoolRoutes()
    {
        Route::prefix('school')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/school.php'));
    }
    protected function mapSuperVisorRoutes()
    {
        Route::prefix('supervisor')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/supervisor.php'));
    }
    protected function mapDelRoutes()
    {
        Route::prefix('api/delivery')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/del.php'));
    }
    protected function mapEduRoutes()
    {
        Route::prefix('api/edu')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/edu.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
