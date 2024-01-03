<?php

namespace App\ViewComposers;

use App\Models\GlobalSetting;
use Illuminate\View\View;

class GlobalSettingComposer
{
    public function compose(View $view)
    {
        $view->with('globalSettingData', GlobalSetting::first());
    }
}