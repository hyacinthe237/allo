<div id="sidebar-wrapper">
    <ul class="sidebar-nav">

        <li class="{{ Request::is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin') }}">
                <i class="ion-speedometer"></i>
                Dashboard
            </a>
        </li>

        {{-- @if (Auth::user()->role->name === 'admin') --}}
            <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
                <a href="/admin/users">
                    <i class="ion-android-people"></i>
                    Utilisateurs
                </a>
            </li>
        {{-- @endif --}}

        {{-- @if (Auth::user()->role->name === 'editor') --}}
            <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
              <a href="{{ route('users.show', Auth::user()->number) }}">
                  <i class="ion-android-people"></i>
                  Mon Profil
              </a>
            </li>
        {{-- @endif --}}

        <li class="separer"></li>

        <li>
            <a href="/" target="_blank">
                <i class="ion-ios-world-outline"></i>
                Aller sur le site
            </a>
        </li>

        <li>
            <a href="{{ route('admin.logout') }}">
                <i class="ion-power"></i>
                Déconnexion
            </a>
        </li>
    </ul>
</div>
