<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer(['*'],function($view){
            $vc_blogs = Blog::orderBy('created_at','desc')->get()->take(3);
            $view->with('vc_blogs',$vc_blogs);
        });
    }
}
