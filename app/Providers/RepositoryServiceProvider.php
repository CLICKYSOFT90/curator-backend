<?php

namespace App\Providers;



use App\Interfaces\Admin\AuthenticationRepositoryInterface as AdminAuthenticationRepositoryInterface;
use App\Interfaces\Admin\ManageUserRepositoryInterface;
use App\Interfaces\Admin\ManageAdminRepositoryInterface;
use App\Interfaces\Admin\ManageDashboardRepositoryInterface;
use App\Interfaces\Admin\ManageAboutUsRepositoryInterface;
use App\Interfaces\Admin\ManageFaqRepositoryInterface;
use App\Interfaces\Admin\ManageGlobalSettingRepositoryInterface;
use App\Interfaces\Admin\ManagePrivacyPolicyRepositoryInterface;
use App\Interfaces\Admin\ManageTermAndConditionRepositoryInterface;

use App\Repositories\Admin\AuthenticationRepository as AdminAuthenticationRepository;
use App\Repositories\Admin\ManageUserRepository;
use App\Repositories\Admin\ManageAboutUsRepository;
use App\Repositories\Admin\ManageFaqRepository;
use App\Repositories\Admin\ManageGlobalSettingRepository;
use App\Repositories\Admin\ManagePrivacyPolicyRepository;
use App\Repositories\Admin\ManageTermAndConditionRepository;
use App\Repositories\Admin\ManageAdminRepository;
use App\Repositories\Admin\ManageDashboardRepository;

use App\Interfaces\Front\AuthenticationRepositoryInterface;
use App\Interfaces\Front\HomepageRepositoryInterface;

use App\Repositories\Front\AuthenticationRepository;
use App\Repositories\Front\HomepageRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //ADMIN REPOSITORIES
        $this->app->bind(AdminAuthenticationRepositoryInterface::class, AdminAuthenticationRepository::class);
        $this->app->bind(ManageAdminRepositoryInterface::class, ManageAdminRepository::class);
        $this->app->bind(ManageUserRepositoryInterface::class, ManageUserRepository::class);
        $this->app->bind(ManageDashboardRepositoryInterface::class, ManageDashboardRepository::class);
        $this->app->bind(ManageFaqRepositoryInterface::class, ManageFaqRepository::class);
        $this->app->bind(ManageAboutUsRepositoryInterface::class, ManageAboutUsRepository::class);
        $this->app->bind(ManageTermAndConditionRepositoryInterface::class, ManageTermAndConditionRepository::class);
        $this->app->bind(ManagePrivacyPolicyRepositoryInterface::class, ManagePrivacyPolicyRepository::class);
        $this->app->bind(ManageGlobalSettingRepositoryInterface::class, ManageGlobalSettingRepository::class);

        //FRONT REPOSITORIES
        $this->app->bind(AuthenticationRepositoryInterface::class, AuthenticationRepository::class);
        $this->app->bind(HomepageRepositoryInterface::class, HomepageRepository::class);
    }
}