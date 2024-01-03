<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Interfaces\Admin\ManageDashboardRepositoryInterface;

class ManageDashboardRepository implements ManageDashboardRepositoryInterface
{
    public function getCountData() {

        $admins = Admin::count();
        $labels = User::where('role_id', User::LABEL_ID)->count();
        $artists = User::where('role_id', User::ARTIST_ID)->count();
        $curators = User::where('role_id', User::CURATOR_ID)->count();
        $influencers = User::where('role_id', User::INFLUENCER_ID)->count();
        $totalUsers = ($admins + $labels + $artists + $curators + $influencers);
        
        return (object)[
            'admins' => $admins,
            'labels' => $labels,
            'artists' => $artists,
            'curators' => $curators,
            'influencers' => $influencers,
            'total_users' => $totalUsers,
        ];
            
    } 
}
