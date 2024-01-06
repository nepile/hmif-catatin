<aside id="sidebar" class="fixed-sidebar" style="height: 100vh">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <img src="{{ asset('img/logo-sidebar-kedua.png') }}" alt="" />
        </button>
        <div class="sidebar-logo">
            <a href="#">CATATIN</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item {{ $id_page == 'core-overview' ? 'sidebar-active' : null }}">
            <a href="{{ route('overview') }}" class="sidebar-link">
                <i class="lni lni-home"></i>
                <span>Catatin Overview</span>
            </a>
        </li>
        <li class="sidebar-item {{ $id_page == 'core-coordinator' ? 'sidebar-active' : null }}">
            <a href="{{ route('coordinator') }}" class="sidebar-link">
                <i class="lni lni-coral"></i>
                <span>Catatin Coordinators</span>
            </a>
        </li>
        <li class="sidebar-item {{ $id_page == 'core-committee' ? 'sidebar-active' : null }}">
            <a href="{{ route('committee') }}" class="sidebar-link">
                <i class="lni lni-users"></i>
                <span>Catatin Committees</span>
            </a>
        </li>
        <li class="sidebar-item {{ $id_page == 'core-leaderboard' ? 'sidebar-active' : null }}">
            <a href="{{ route('leaderboard') }}" class="sidebar-link">
                <i class="lni lni-graduation"></i>
                <span>Catatin Leaderboard</span>
            </a>
        </li>
        <li class="sidebar-item {{ $id_page == 'core-interview' ? 'sidebar-active' : null }}">
            <a href="{{ route('interview') }}" class="sidebar-link">
                <i class="lni lni-clipboard"></i>
                <span>Catatin Interview</span>
            </a>
        </li>
        <li class="sidebar-item {{ $id_page == 'core-setting' ? 'sidebar-active' : null }}">
            <a href="{{ route('setting') }}" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Catatin Setting</span>
            </a>
        </li>
        <li class="sidebar-item mt-5">
            <a href="#" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>