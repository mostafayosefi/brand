<?php

namespace App\Providers;

use App\Http\View\Composser\Menuindex;
use App\Http\View\Composser\Menuindex2;
use Illuminate\Support\ServiceProvider;

class MenuindexProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer(['index.master', 'index.layouts.elementor.warp' , 'index.layouts.elementor.widget'
        , 'index.support.index' , 'index.layouts.elementor.txtdese' , 'index.layouts.elementor.txtalert'
         , 'custome.layouts.sidebar'  , 'admin.layouts.sidebar' ], Menuindex::class);


       view()->composer(['index.brand.master', 'index.brand.layouts.menulist',  'index.brand.layouts.footer',   'index.brand.layouts.sidebar',  ], Menuindex2::class);
    }
}
