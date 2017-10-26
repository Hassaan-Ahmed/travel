<?php

namespace App\Providers;

use App\About;
use App\Contact;
use App\Continent;
use App\Photo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);
        View::composer('*',function ($view){
            $view->with('about',About::all());
        });
        View::composer('*',function ($view){
            $view->with('contact',Contact::all());
        });
        View::composer('*',function ($view){
            $view->with('continents',Continent::all());
        });
        View::composer('*',function ($view){
            $view->with('photo',Photo::all('id','file'));
        });
//        View::composer('admin.continent.continent','App\Http\Controllers\AdminContinentController');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
