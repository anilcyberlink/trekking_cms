<?php

namespace App\Providers;

use App\Models\Destinations\DestinationModel;
use App\Models\Posts\PostModel;
use App\Models\Posts\PostTypeModel;
use App\Models\Settings\SettingModel;
use App\Models\Travels\RegionModel;
use App\Models\Travels\TripModel;
use Illuminate\Support\Facades\Cache;
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
        $setting = Cache::rememberForever('setting', function () {
            return SettingModel::find(1);
        });

        $company = Cache::rememberForever('company', function () {
            return PostModel::where([
                'post_type' => 1,
                'post_parent' => 0,
            ])->get();
        });

        $expeditions = Cache::rememberForever('expeditions', function () {
            return DestinationModel::all();
        });

        $regions = Cache::rememberForever('regions', function () {
            return RegionModel::all();
        });

        $partners = Cache::rememberForever('partners', function () {
            return PostModel::where('post_type', 6)->get();
        });

        $footers = Cache::rememberForever('footers', function () {
            return PostModel::where('post_type', 7)->get();
        });

        $popular = Cache::rememberForever('popular_trips', function () {
            return TripModel::where('visiter', '>', 0)
                ->orderByDesc('visiter')
                ->limit(5)
                ->get();
        });

        $posttype = Cache::rememberForever('post_types', function () {
            return PostTypeModel::orderBy('ordering')->get();
        });

        View::share([
            'setting' => $setting,
            'company' => $company,
            'expeditions' => $expeditions,
            'regions' => $regions,
            'partners' => $partners,
            'footers' => $footers,
            'popular' => $popular,
            'posttype' => $posttype,
        ]);
    }
}
