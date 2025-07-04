
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
    <span class="align-middle">ProEnergi</span>
    </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            @if(auth()->user()->role === 'admin')
             <li class="sidebar-item {{ request()->is('*management*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('user-management')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">User Management</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->role === 'article' || auth()->user()->role === 'admin')
            <li class="sidebar-item {{ request()->is('*-article*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin-articles')}}">
                <i class="align-middle" data-feather="book"></i> <span class="align-middle">Articles</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->role === 'content' || auth()->user()->role === 'admin')
            <li class="sidebar-item {{ request()->is('*-product*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin-products')}}">
                <i class="align-middle" data-feather="droplet"></i> <span class="align-middle">Product</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->role === 'hr' || auth()->user()->role === 'admin')
            <li class="sidebar-item {{ request()->is('*-department*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin-department')}}">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Department</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('*-vacanc*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin-vacancies')}}">
                <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Vacancy</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('*-candidate*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin-candidates')}}">
                <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Candidates</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('*-testimonial*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin-testimonials')}}">
                <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Testimonials</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('*-activit*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin-activities')}}">
                <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Activities</span>
                </a>
            </li>
            @endif
 
        </ul>

    </div>
</nav>