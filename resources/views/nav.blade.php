<div class="header-container container">
    <div class="header-row">
        <div class="header-column">
            <div class="header-row">
                <div class="header-logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('/assets/img/demos/law-firm-2/logo.png') }}" class="img-fluid" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <div class="header-column justify-content-end">
            <div class="header-row">
                <div class="header-nav header-nav-links">
                    <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                        <nav class="collapse">
                            <ul class="nav nav-pills" id="mainNav">
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('services') }}" class="dropdown-item dropdown-toggle {{ request()->routeIs('services') ? 'active' : '' }}">Practice Areas</a>
                                    <ul class="dropdown-menu border-radius-0">
                                        <li>
                                            <a href="{{ route('services') }}" class="nav-link">Corporate Law & Business Setup</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}" class="nav-link">Mergers & Acquisitions</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}" class="nav-link">Dispute Resolution</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}" class="nav-link">Intellectual Property Protection</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}" class="nav-link">Immigration & Visa Services</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}" class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}">Our Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-nav-features header-nav-features-no-border">
                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                        <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search">
                            <i class="icons icon-magnifier header-nav-top-icon font-weight-bold text-4 top-2 text-color-hover-primary"></i>
                        </a>
                        <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                            <form role="search" action="page-search-results.html" method="get">
                                <div class="simple-search input-group">
                                    <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                    <button class="btn" type="submit" aria-label="Search">
                                        <i class="icons icon-magnifier header-nav-top-icon font-weight-bold text-color-dark text-4 text-color-hover-primary top-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</div>