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
                <i class="lni lni-stats-up"></i>
                <span>Analytics</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-calendar"></i>
                <span>Calendar</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-layout"></i>
                <span>Events</span>
            </a>
            <ul class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Porsi</a>
                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Panitia</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Peserta</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-coin"></i>
                <span>Keuangan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Setting</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-protection"></i>
                <span>Account</span>
            </a>
            <ul class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Login</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Register</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item mt-5">
            <a href="#" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>