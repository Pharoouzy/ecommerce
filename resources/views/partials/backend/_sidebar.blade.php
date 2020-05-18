<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
      <img class="app-sidebar__user-avatar" width="40px" src="{{ asset('backend/images/avatar3.jpg') }}" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{ auth()->user()->first_name }}</p>
      <p class="app-sidebar__user-designation"></p>
    </div>
  </div>
  <ul class="app-menu">
    <li>
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="app-menu__icon fa fa-dashboard"></i>
            <span class="app-menu__label">Dashboard</span>
        </a>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label"> Admin Users</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Roles</a>
            </li>
            <li>
                <a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Permissions</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
            <i class="app-menu__icon fa fa-tags"></i>
            <span class="app-menu__label">Categories</span>
        </a>
    </li>
    <li>
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
            <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Settings</span>
        </a>
    </li>
    <li>
        <a class="app-menu__item" href="{{ route('admin.logout') }}">
            <i class="app-menu__icon fa fa-sign-out"></i>
            <span class="app-menu__label">Logout</span>
        </a>
    </li>
  </ul>
</aside>
