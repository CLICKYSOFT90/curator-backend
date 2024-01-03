<?php

namespace App\Providers;

use App\ViewComposers\FaqComposer;
use App\ViewComposers\GlobalSettingComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('front.partials.faq', FaqComposer::class);
        View::composer('front.layouts.master', GlobalSettingComposer::class);
        View::composer('front.pages.help', GlobalSettingComposer::class);
    }
}