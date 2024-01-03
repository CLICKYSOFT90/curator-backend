<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background: white !important;">
    <div class="app-brand demo">
        <a href="{{route('admin.dashboard')}}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold ms-2" style="color: #516377">{{config('app.name')}}</span>
        </a>
        
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>
    
    <div class="menu-divider mt-0"></div>
    
    <div class="menu-inner-shadow"></div>
    
    <ul class="menu-inner py-1">
        <li class="menu-item {{ (request()->is('admin')) ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        
        <li class="menu-item {{ (request()->is('admin/users/*')) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Manage Users">Manage Users</div>
            </a>
            
            <ul class="menu-sub">
                <li class="menu-item {{ (request()->routeIs('manage.admin') || request()->routeIs('add.admin') || request()->routeIs('admin.detail') || request()->routeIs('update.admin')) ? 'active' : '' }}">
                    <a href="{{ route('manage.admin') }}" class="menu-link">
                        <div data-i18n="Admin">Admin</div>
                    </a>
                </li>
                <li class="menu-item {{ (request()->routeIs('manage.artist') || request()->routeIs('add.artist') || request()->routeIs('artist.detail') || request()->routeIs('update.artist')) ? 'active' : '' }}">
                    <a href="{{ route('manage.artist') }}" class="menu-link">
                        <div data-i18n="Artists">Artists</div>
                    </a>
                </li>
                <li class="menu-item {{ (request()->routeIs('manage.label') || request()->routeIs('add.label') || request()->routeIs('label.detail') || request()->routeIs('update.label')) ? 'active' : '' }}">
                    <a href="{{ route('manage.label') }}" class="menu-link">
                        <div data-i18n="Labels">Labels</div>
                    </a>
                </li>
                <li class="menu-item {{ (request()->routeIs('manage.curator') || request()->routeIs('add.curator') || request()->routeIs('curator.detail') || request()->routeIs('update.curator')) ? 'active' : '' }}">
                    <a href="{{ route('manage.curator') }}" class="menu-link">
                        <div data-i18n="Curators">Curators</div>
                    </a>
                </li>
                <li class="menu-item {{ (request()->routeIs('manage.influencer') || request()->routeIs('add.influencer') || request()->routeIs('influencer.detail') || request()->routeIs('update.influencer')) ? 'active' : '' }}">
                    <a href="{{ route('manage.influencer') }}" class="menu-link">
                        <div data-i18n="Influencers">Influencers</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Content Management</span></li>

        <li class="menu-item {{ (request()->routeIs('manage.faq') || request()->routeIs('add.faq') || request()->routeIs('faq.detail') || request()->routeIs('update.faq')) ? 'active' : '' }}">
            <a href="{{ route('manage.faq') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Manage Faq">Manage Faq</div>
            </a>
        </li>

        <li class="menu-item {{ (request()->routeIs('manage.about.us')) ? 'active' : '' }}">
            <a href="{{ route('manage.about.us') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Manage About Us">Manage About Us</div>
            </a>
        </li>

        <li class="menu-item {{ (request()->routeIs('manage.term.and.condition')) ? 'active' : '' }}">
            <a href="{{ route('manage.term.and.condition') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Manage Term & Condition">Manage Term & Condition</div>
            </a>
        </li>

        <li class="menu-item {{ (request()->routeIs('manage.privacy.policy')) ? 'active' : '' }}">
            <a href="{{ route('manage.privacy.policy') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Manage Privacy Policy">Manage Privacy Policy</div>
            </a>
        </li>

        <li class="menu-item {{ (request()->routeIs('manage.global.setting.data')) ? 'active' : '' }}">
            <a href="{{ route('manage.global.setting.data') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Manage Global Setting">Manage Global Setting</div>
            </a>
        </li>
    </ul>
</aside>
