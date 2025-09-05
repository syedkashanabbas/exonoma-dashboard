<aside id="sidebar" class="border-end">
    <section id="sidebar_header">
        <div class="d-flex align-items-center justify-content-between">
            <img src="{{ asset('assets/img/abdul_ahad_logo.png') }}" width="35" alt="academy logo">
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
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-home"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">My Dashboard</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="{{ route('dashboard.myCourses') }}" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.myCourses') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-book"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">My Courses</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.learningPath') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-road"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Learning Path</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.assignments') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-tasks"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Assignments & Quizzes</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.certificates') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-certificate"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Certificates</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.resources') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-folder-open"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Resources</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.performance') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-chart-bar"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Performance</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.announcements') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-bullhorn"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Announcements</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.community') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-users"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Community</span>
                </a>
            </li>

            <li class="sidebar_item">
                <a href="#" 
                   class="sidebar_link d-flex align-items-center text-decoration-none {{ request()->routeIs('dashboard.profile') ? 'active' : '' }}">
                    <span class="sidebar_link_icon"><i class="fas fa-user"></i></span>
                    <span class="sidebar_link_text fs_7 fw-medium">Profile & Settings</span>
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
