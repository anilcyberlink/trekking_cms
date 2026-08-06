<?php

namespace App\Providers;

use App\Models\Posts\PostTypeModel;
use App\Models\Settings\SettingModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $setting = SettingModel::find(1);
        $posttype = PostTypeModel::orderBy('ordering')->get();

        View::share([
            'setting' => $setting,
            'posttype' => $posttype,
        ]);
    }
}
