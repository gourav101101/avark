<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') — Avark Admin</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/vandor/bootstrap/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/vandor/fontawesome/fontawesome-pro.min.css') }}">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    @stack('styles')
</head>
<body>

    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-header">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
                <img src="{{ asset('assets/imgs/logo/kp-avark-logo.png') }}" alt="Avark" class="sidebar-logo">
                <span class="sidebar-brand-text">Avark Admin</span>
            </a>
            <button class="sidebar-close d-lg-none" id="sidebarClose">
                <i class="fa-regular fa-xmark"></i>
            </button>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-section-title">Main</div>
            <ul class="nav-list">
                <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link-item">
                        <i class="fa-regular fa-grid-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>

            <div class="nav-section-title">Content Management</div>
            <ul class="nav-list">
                <li class="nav-item {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.blogs.index') }}" class="nav-link-item">
                        <i class="fa-regular fa-newspaper"></i>
                        <span>Blogs</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.testimonials.index') }}" class="nav-link-item">
                        <i class="fa-regular fa-quote-left"></i>
                        <span>Testimonials</span>
                    </a>
                </li>
            </ul>

            <div class="nav-section-title">Quick Links</div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('home') }}" target="_blank" class="nav-link-item">
                        <i class="fa-regular fa-globe"></i>
                        <span>View Website</span>
                        <i class="fa-regular fa-arrow-up-right-from-square ms-auto" style="font-size: 11px; opacity: 0.5;"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="user-avatar">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="user-info">
                    <span class="user-name">{{ Auth::user()->name ?? 'Admin' }}</span>
                    <span class="user-role">Administrator</span>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="admin-main" id="adminMain">
        <!-- Top Navbar -->
        <header class="admin-topbar">
            <div class="topbar-left">
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fa-regular fa-bars"></i>
                </button>
                <div class="topbar-breadcrumb">
                    <h5 class="page-title">@yield('page_title', 'Dashboard')</h5>
                </div>
            </div>
            <div class="topbar-right">
                <div class="topbar-actions">
                    <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn-topbar-action" title="Logout">
                            <i class="fa-regular fa-right-from-bracket"></i>
                            <span class="d-none d-sm-inline ms-1">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="admin-content">
            <!-- Flash Messages -->
            @if(session('success'))
                <div class="alert-admin alert-success-admin" id="flashAlert">
                    <i class="fa-regular fa-circle-check"></i>
                    <span>{{ session('success') }}</span>
                    <button class="alert-close" onclick="this.parentElement.remove()">
                        <i class="fa-regular fa-xmark"></i>
                    </button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert-admin alert-danger-admin" id="flashAlert">
                    <i class="fa-regular fa-circle-exclamation"></i>
                    <span>{{ session('error') }}</span>
                    <button class="alert-close" onclick="this.parentElement.remove()">
                        <i class="fa-regular fa-xmark"></i>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert-admin alert-danger-admin">
                    <i class="fa-regular fa-circle-exclamation"></i>
                    <div>
                        <strong>Please fix the following errors:</strong>
                        <ul class="mb-0 mt-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <!-- Scripts -->
    <script src="{{ asset('assets/vandor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vandor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Sidebar toggle
        const sidebar = document.getElementById('adminSidebar');
        const main = document.getElementById('adminMain');
        const toggle = document.getElementById('sidebarToggle');
        const close = document.getElementById('sidebarClose');

        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            main.classList.toggle('expanded');
            // On mobile, show overlay
            if (window.innerWidth < 992) {
                sidebar.classList.toggle('mobile-open');
            }
        });

        if (close) {
            close.addEventListener('click', () => {
                sidebar.classList.remove('mobile-open');
            });
        }

        // Auto-dismiss flash messages
        setTimeout(() => {
            const flash = document.getElementById('flashAlert');
            if (flash) {
                flash.style.opacity = '0';
                flash.style.transform = 'translateY(-10px)';
                setTimeout(() => flash.remove(), 300);
            }
        }, 4000);

        // Delete confirmation
        document.querySelectorAll('.btn-delete').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (!confirm('Are you sure you want to delete this item? This action cannot be undone.')) {
                    e.preventDefault();
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
