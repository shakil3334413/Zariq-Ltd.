 <!-- BEGIN: Main Menu-->
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                    <div class="brand-logo"><img class="logo" src="{{ asset('app-assets/images/logo/logo.png') }}" /></div>
                    <h2 class="brand-text mb-0">Frest</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
            <li class=" navigation-header"><span>Apps</span>
            </li>
            @role('admin')
            <li class=" nav-item"><a href="{{ route('roles.index') }}"><i class="bx bx-envelope"></i><span class="menu-title" data-i18n="Email">Role</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('permissions.index') }}"><i class="bx bx-envelope"></i><span class="menu-title" data-i18n="Email">Permission</span></a>
            </li>
            @endrole
            <li class=" nav-item"><a href="{{ route('complains.index') }}"><i class="bx bx-envelope"></i><span class="menu-title" data-i18n="Email">Complain</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('teams.index') }}"><i class="bx bx-envelope"></i><span class="menu-title" data-i18n="Email">Team</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
