<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\ManageDashboardRepositoryInterface;

class DashboardController extends Controller
{
    private ManageDashboardRepositoryInterface $manageDashboardRepository;

    public function __construct(ManageDashboardRepositoryInterface $manageDashboardRepository)
    {
        $this->manageDashboardRepository = $manageDashboardRepository;
    }

    public function index() {
        
        $data = $this->manageDashboardRepository->getCountData();
        
        return view('admin.dashboard', compact('data'));
        
    }
}
