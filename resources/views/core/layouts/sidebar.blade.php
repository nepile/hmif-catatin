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
        <li class="sidebar-item sidebar-active">
            <a href="{{ route('overview') }}" class="sidebar-link">
                <i class="lni lni-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-coral"></i>
                <span>Coordinators</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-users"></i>
                <span>Committees</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-graduation"></i>
                <span>Leaderboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-clipboard"></i>
                <span>Interview</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Setting</span>
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