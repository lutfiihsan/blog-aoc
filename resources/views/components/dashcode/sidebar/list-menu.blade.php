<ul class="sidebar-menu">

    @can('lihat_dashboard')
        <li class="nav-item">
            <a href="{{ route('backend.dashboard.index') }}"
                class="navItem {{ Request::is('backend/dashboard') ? 'active' : '' }}">
                <span class="flex items-center">
                    <iconify-icon class=" nav-icon" icon="mdi:speedometer"></iconify-icon>
                    <span>
                        {{ __('Dashboard') }}
                    </span>
                </span>
            </a>
        </li>
    @endcan

    <li class="sidebar-menu-title">MASTER DATA</li>
    @can('lihat_kategori')
        <li class="nav-item">
            <a href="{{ route('backend.categories.index') }}"
                class="navItem {{ Request::is('backend/categories') || Request::is('backend/categories/*') ? 'active' : '' }}">
                <span class="flex items">
                    <iconify-icon class=" nav-icon" icon="mdi:format-list-bulleted"></iconify-icon>
                    <span>Kategori</span>
                </span>
            </a>
        </li>
    @endcan

    <li class="nav-item">
        <a href="{{ route('backend.articles.index') }}"
            class="navItem {{ Request::is('backend/articles') || Request::is('backend/articles/*') ? 'active' : '' }}">
            <span class="flex items">
                <iconify-icon class=" nav-icon" icon="mdi:file-document"></iconify-icon>
                <span>Artikel</span>
            </span>
        </a>
    </li>

    @can('lihat_pengguna')
        <li class="nav-item">
            <a href="{{ route('backend.users.index') }}" 
               class="navItem {{ Request::is('backend/users') || Request::is('backend/users/*') ? 'active' : '' }}">
                <span class="flex items-center">
                    <iconify-icon class=" nav-icon" icon="mdi:user-group"></iconify-icon>
                    <span>Pengguna</span>
                </span>
            </a>
        </li>
    @endcan

    <li class="sidebar-menu-title">SISTEM</li>

    @can(['lihat_role', 'lihat_permission', 'lihat_assign_permission'])
        <li class="nav-item {{ Request::is('backend/roles') ? 'active' : null }}
            {{ Request::is('backend/roles/*') ? 'active' : null }}
            {{ Request::is('backend/permissions') ? 'active' : null }}
            {{ Request::is('backend/permissions/*') ? 'active' : null }}
            {{ Request::is('backend/assignpermission') ? 'active' : null }}
            {{ Request::is('backend/assignpermission/*') ? 'active' : null }}">
            <a href="javascript:void(0)" class="navItem 
            {{ Request::is('backend/roles') ? 'active' : null }}
            {{ Request::is('backend/roles/*') ? 'active' : null }}
            {{ Request::is('backend/permissions') ? 'active' : null }}
            {{ Request::is('backend/permissions/*') ? 'active' : null }}
            {{ Request::is('backend/assignpermission') ? 'active' : null }}
            {{ Request::is('backend/assignpermission/*') ? 'active' : null }}
                 ">
                <span class="flex items-center">
                    <iconify-icon class="nav-icon" icon="mdi:shield-link-variant"></iconify-icon>
                    <span>Role & Permission</span>
                </span>
                <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu {{ Request::is('backend/roles') ? 'menu-open"' : null }}
            {{ Request::is('backend/roles/*') ? 'menu-open"' : null }}
            {{ Request::is('backend/permissions') ? 'menu-open"' : null }}
            {{ Request::is('backend/permissions/*') ? 'menu-open"' : null }}
            {{ Request::is('backend/assignpermission') ? 'menu-open"' : null }}
            {{ Request::is('backend//*') ? 'menu-open"' : null }}">
                <li>
                    <a href="{{ route('backend.roles.index') }}"
                        class="
                        {{ Request::is('backend/roles') ? 'active' : null }}
                        {{ Request::is('backend/roles/*') ? 'active' : null }}">
                        Role
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.permissions.index') }}"
                        class="
                        {{ Request::is('backend/permissions') ? 'active' : null }}
                        {{ Request::is('backend/permissions/*') ? 'active' : null }}">Permission</a>
                </li>
                <li>
                    <a href="{{ route('backend.assignpermission.index') }}"
                        class="
                        {{ Request::is('backend/assignpermission') ? 'active' : null }}
                        {{ Request::is('backend/assignpermission/*') ? 'active' : null }}">Assign Permission</a>
                </li>
            </ul>
        </li>
    @endcan

    @can('lihat_pengaturan_web')
        <li class="nav-item">
            <a href="{{ route('backend.setting.index') }}"
                class="navItem {{ Request::is('backend/settings/*') ? 'active' : '' }}">
                <span class="flex items-center">
                    <iconify-icon class=" nav-icon" icon="mdi:cogs"></iconify-icon>
                    <span>Pengaturan</span>
                </span>
            </a>
        </li>
    @endcan

    <li class="nav-item">
        <a href="{{ route('backend.profile.index') }}"
            class="navItem {{ Request::is('backend/profile') ? 'active' : '' }}">
            <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="mdi:user"></iconify-icon>
                <span>
                    {{ __('Profil') }}
                </span>
            </span>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="navItem">
            <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="mdi:logout"></iconify-icon>
                <span>Keluar</span>
            </span>
        </a>
    </li>

</ul>
