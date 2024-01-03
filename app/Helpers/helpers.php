<?php

use App\Models\Chat;
use Illuminate\Support\Facades\Route;

if (!function_exists('isRouteActive')) {
    function isRouteActive($routes = []): bool
    {
        return in_array(Route::currentRouteName(), $routes);
    }
}

if (!function_exists('getUnreadMessages')) {
    function getUnreadMessages()
    {
        if (auth()->check()) {
            return Chat::with('getSenderCustomer')->where([
                'receiver_id' => auth()->id(),
                'seen'        => 0
            ])->get();
        }
        return [];
    }
}