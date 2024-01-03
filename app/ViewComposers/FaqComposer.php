<?php

namespace App\ViewComposers;

use App\Models\Faq;
use Illuminate\View\View;

class FaqComposer
{
    public function compose(View $view)
    {
        $view->with('faqData', Faq::isActive()->isGlobal()->take(3)->get());
    }
}