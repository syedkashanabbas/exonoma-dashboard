<aside id="sidebar" class="border-end">
    <section id="sidebar_header">
        <div class="d-flex align-items-center justify-content-between">
            <img src="{{ asset('assets/img/logo.png') }}" width="150" alt="logo">
            <button class="btn_transparent d-inline-flex align-items-center" id="closeSidebar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" fill="white">
                    <path d="M21,15.61L19.59,17L14.58,12L19.59,7L21,8.39L17.44,12L21,15.61M3,6H16V8H3V6M3,13V11H13V13H3M3,18V16H16V18H3Z"/>
                </svg>
            </button>
        </div>
    </section>

    <section id="sidebar_body">
      <ul class="sidebar_list list-unstyled">

    <li class="sidebar_item">
        <a href="{{ route('dashboard') }}" 
           class="sidebar_link {{ request()->routeIs('dashboard') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <span class="sidebar_link_icon"><i class="fas fa-chart-pie"></i></span>
            <span class="sidebar_link_text fs_7 fw-medium">Portfolio Overview</span>
        </a>

        
    </li>

         {{-- New Routes --}}
            <li class="sidebar_item">
                <a href="{{ route('dashboard.integrations') }}"
                   class="sidebar_link {{ request()->routeIs('dashboard.integrations') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
                    <span class="sidebar_link_icon"><i class="fas fa-plug"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Integrations</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="{{ route('dashboard.shop') }}"
                   class="sidebar_link {{ request()->routeIs('dashboard.shop') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
                    <span class="sidebar_link_icon"><i class="fas fa-store"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Shop</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="{{ route('dashboard.community') }}"
                   class="sidebar_link {{ request()->routeIs('dashboard.community') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
                    <span class="sidebar_link_icon"><i class="fas fa-users"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Community</span>
                </a>
            </li>

            <!--<li class="sidebar_item">-->
            <!--    <a href="{{ route('dashboard.connect-meta-trader') }}"-->
            <!--       class="sidebar_link {{ request()->routeIs('dashboard.connect-meta-trader') ? 'active' : '' }} d-flex align-items-center text-decoration-none">-->
            <!--        <span class="sidebar_link_icon"><i class="fas fa-link"></i></span>-->
            <!--        <span class="sidebar_link_text fs_7 fw-medium">Connect Meta Trader</span>-->
            <!--    </a>-->
            <!--</li>-->

            <li class="sidebar_item">
                <a href="{{ route('dashboard.commission') }}"
                   class="sidebar_link {{ request()->routeIs('dashboard.commission') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
                    <span class="sidebar_link_icon"><i class="fas fa-coins"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Commission</span>
                </a>
            </li>

        <li class="sidebar_item">
            <a href="{{ route('dashboard.plans') }}" 
               class="sidebar_link {{ request()->routeIs('dashboard.plans') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
                <span class="sidebar_link_icon"><i class="fas fa-layer-group"></i></span>
                <span class="sidebar_link_text fs_7 fw-medium">Plans Management</span>
            </a>
        </li>


    <!--<li class="sidebar_item">-->
    <!--    <a href="{{ route('dashboard.ai-signals') }}" -->
    <!--       class="sidebar_link {{ request()->routeIs('dashboard.ai-signals') ? 'active' : '' }} d-flex align-items-center text-decoration-none">-->
    <!--        <span class="sidebar_link_icon"><i class="fas fa-robot"></i></span>-->
    <!--        <span class="sidebar_link_text fs_7 fw-medium">AI Signals</span>-->
    <!--    </a>-->
    <!--</li>-->

    <!--<li class="sidebar_item">-->
    <!--    <a href="{{ route('dashboard.risk-hedging') }}" -->
    <!--       class="sidebar_link {{ request()->routeIs('dashboard.risk-hedging') ? 'active' : '' }} d-flex align-items-center text-decoration-none">-->
    <!--        <span class="sidebar_link_icon"><i class="fas fa-shield-alt"></i></span>-->
    <!--        <span class="sidebar_link_text fs_7 fw-medium">Risk & Hedging</span>-->
    <!--    </a>-->
    <!--</li>-->

    <!--<li class="sidebar_item">-->
    <!--    <a href="{{ route('dashboard.transactions-history') }}" -->
    <!--       class="sidebar_link {{ request()->routeIs('dashboard.transactions-history') ? 'active' : '' }} d-flex align-items-center text-decoration-none">-->
    <!--        <span class="sidebar_link_icon"><i class="fas fa-exchange-alt"></i></span>-->
    <!--        <span class="sidebar_link_text fs_7 fw-medium">Transactions History</span>-->
    <!--    </a>-->
    <!--</li>-->

    <!--<li class="sidebar_item">-->
    <!--    <a href="{{ route('dashboard.performance-analytics') }}" -->
    <!--       class="sidebar_link {{ request()->routeIs('dashboard.performance-analytics') ? 'active' : '' }} d-flex align-items-center text-decoration-none">-->
    <!--        <span class="sidebar_link_icon"><i class="fas fa-chart-line"></i></span>-->
    <!--        <span class="sidebar_link_text fs_7 fw-medium">Performance Analytics</span>-->
    <!--    </a>-->
    <!--</li>-->

    <li class="sidebar_item">
        <a href="{{ route('dashboard.reports-compliance') }}" 
           class="sidebar_link {{ request()->routeIs('dashboard.reports-compliance') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <span class="sidebar_link_icon"><i class="fas fa-file-alt"></i></span>
            <span class="sidebar_link_text fs_7 fw-medium">Reports & Compliance</span>
        </a>
    </li>

    <!--<li class="sidebar_item">-->
    <!--    <a href="{{ route('dashboard.notifications-center') }}" -->
    <!--       class="sidebar_link {{ request()->routeIs('dashboard.notifications-center') ? 'active' : '' }} d-flex align-items-center text-decoration-none">-->
    <!--        <span class="sidebar_link_icon"><i class="fas fa-bell"></i></span>-->
    <!--        <span class="sidebar_link_text fs_7 fw-medium">Notifications Center</span>-->
    <!--    </a>-->
    <!--</li>-->

    <!--<li class="sidebar_item">-->
    <!--    <a href="{{ route('dashboard.multi-account') }}" -->
    <!--       class="sidebar_link {{ request()->routeIs('dashboard.multi-account') ? 'active' : '' }} d-flex align-items-center text-decoration-none">-->
    <!--        <span class="sidebar_link_icon"><i class="fas fa-users-cog"></i></span>-->
    <!--        <span class="sidebar_link_text fs_7 fw-medium">Multi-Account Management</span>-->
    <!--    </a>-->
    <!--</li>-->

    <li class="sidebar_item">
        <a href="{{ route('dashboard.market') }}" 
           class="sidebar_link {{ request()->routeIs('dashboard.market') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <span class="sidebar_link_icon"><i class="fas fa-globe"></i></span>
            <span class="sidebar_link_text fs_7 fw-medium">Market Dashboard</span>
        </a>
    </li>

    <li class="sidebar_item">
        <a href="{{ route('dashboard.user-security') }}" 
           class="sidebar_link {{ request()->routeIs('dashboard.user-security') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <span class="sidebar_link_icon"><i class="fas fa-user-shield"></i></span>
            <span class="sidebar_link_text fs_7 fw-medium">User & Security</span>
        </a>
    </li>

    <li class="sidebar_item">
        <a href="{{ route('dashboard.support-help') }}" 
           class="sidebar_link {{ request()->routeIs('dashboard.support-help') ? 'active' : '' }} d-flex align-items-center text-decoration-none">
            <span class="sidebar_link_icon"><i class="fas fa-life-ring"></i></span>
            <span class="sidebar_link_text fs_7 fw-medium">Support & Help Center</span>
        </a>
    </li>

</ul>

    </section>

    <section id="sidebar_footer">
        <form action="{{ route('logout') }}" method="POST" class="w-100">
            @csrf
            <button type="submit" id="logout" class="my-2 rounded btn_primary d-flex align-items-center justify-content-center w-100">
                <span class="fs_7">Signout</span>
            </button>
        </form>
    </section>
</aside>
