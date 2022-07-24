<nav class="side-nav">
    <ul>
        @can('admin')
        <li>
            <a href="/dashboard/admin" class="side-menu {{ Request::is('dashboard/admin*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        @endcan

        @can('pengaju')
        <li>
            <a href="/dashboard/pengajuan" class="side-menu {{ Request::is('dashboard/pengajuan*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="side-menu__title"> Pengajuan </div>
            </a>
        </li>
        @endcan
        
        <li class="side-nav__devider my-6"></li>
    </ul>
</nav>