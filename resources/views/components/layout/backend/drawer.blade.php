<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('backend.dashboard') }}">
        <img class="navbar-brand-dark" src="{{ asset('assets/backend/assets/img/brand/light.svg') }}" alt="Logo" />
        <img class="navbar-brand-light" src="{{ asset('assets/backend/assets/img/brand/dark.svg') }}" alt="Logo" />
    </a>

    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img class="card-img-top rounded-circle border-white" src="{{ auth()->user()->profileImage }}" alt="Image" />
                </div>

                <div class="d-block">
                    <h2 class="h5 mb-3">{{ auth()->user()->name ?? '' }}</h2>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>

                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>

            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="{{ route('backend.dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="{{ asset(setting('logo', 'https://via.placeholder.com/20?text=A')) }}" height="20" width="20" alt="Logo" />
                    </span>

                    <span class="mt-1 ms-1 sidebar-text">{{ __('Admin Panel') }}</span>
                </a>
            </li>

            <li class="nav-item active ">
                <a href="{{ route('backend.dashboard') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-gauge fs-4"></i>
                    <span class="sidebar-text">{{ __('Dashboard') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.hero-sections.create') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-monitor fs-4"></i>
                    <span class="sidebar-text">{{ __('Hero Section') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.about-sections.create') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-info fs-4"></i>
                    <span class="sidebar-text">{{ __('About Section') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.skills.index') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-database fs-4"></i>
                    <span class="sidebar-text">{{ __('Skills') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.experiences.index') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-brain fs-4"></i>
                    <span class="sidebar-text">{{ __('Experiences') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.educations.index') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-graduation-cap fs-4"></i>
                    <span class="sidebar-text">{{ __('Educations') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.services.index') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-package fs-4"></i>
                    <span class="sidebar-text">{{ __('Services') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-components">
                    <span class="d-flex align-items-center">
                        <i class="sidebar-icon ph-kanban fs-4"></i>
                        <span class="sidebar-text">{{ __('Projects') }}</span>
                    </span>

                    <span class="link-arrow">
                        <i class="ph-caret-right fw-bold"></i>
                    </span>
                </span>

                <div class="multi-level collapse " role="list" id="submenu-components" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="{{ route('backend.categories.index') }}">
                                <span class="sidebar-text">{{ __('Categories') }}</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center" href="{{ route('backend.projects.index') }}">
                                <span class="sidebar-text">{{ __('Projects') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.teams.index') }}" class="nav-link d-flex align-items-center">
                    <i class="sidebar-icon ph-users-three fs-4"></i>
                    <span class="sidebar-text">{{ __('Teams') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.testimonials.index') }}" class="nav-link d-flex align-items-center">
                <i class="sidebar-icon ph-aperture fs-4"></i>
                    <span class="sidebar-text">{{ __('Testimonials') }}</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
