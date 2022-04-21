<?php

namespace App\Http\View\Composser;

use App\Models\CompanyPlan;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Ticket;
use App\Models\Txtdese;
use Illuminate\Contracts\View\View;

class Menuindex2{
    public function compose(View $view){

        $listpages=Page::idDescending()->get();
        $listplanes=CompanyPlan::all();
        $setting=Setting::find(1);


$view->with(['listpages' => $listpages , 'setting' => $setting , 'listplanes' => $listplanes ]);


    }
}
