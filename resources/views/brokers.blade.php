@extends('theme')

@section('content')
<style>
    /* Premium style enhancements for the dashboard */
    .metric-gradient-card {
        border-radius: 1.25rem;
        padding: 1.5rem;
        color: #ffffff;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.12);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .metric-gradient-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 24px -6px rgba(0, 0, 0, 0.15) !important;
    }
    .metric-card-1 {
        background: linear-gradient(185deg, #214FA4 0%, #0A265B 100%);
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04), 0px 0px 15px 2px rgba(25, 140, 255, 0.25);
    }
    .metric-card-2 {
        background: linear-gradient(185deg, #10B981 0%, #059669 100%);
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04), 0px 0px 15px 2px rgba(16, 185, 129, 0.25);
    }
    .metric-card-3 {
        background: linear-gradient(185deg, #F59E0B 0%, #B1730B 100%);
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04), 0px 0px 15px 2px rgba(245, 158, 11, 0.25);
    }
    .metric-card-4 {
        background: linear-gradient(185deg, #3C6588 0%, #1E3950 100%);
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04), 0px 0px 15px 2px rgba(60, 101, 136, 0.25);
    }
    .metric-card-5 {
        background: linear-gradient(185deg, #7C3AED 0%, #513581 100%);
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04), 0px 0px 15px 2px rgba(124, 58, 237, 0.25);
    }
    .metric-card-6 {
        background: linear-gradient(185deg, #F89090 0%, #925555 100%);
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04), 0px 0px 15px 2px rgba(248, 144, 144, 0.25);
    }

    .stat-card-accent {
        position: relative;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        border-radius: 1rem;
        background: #ffffff;
        cursor: pointer;
        transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }
    .stat-card-accent:hover {
        transform: translateY(-2px);
        border-color: transparent;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.18) !important;
    }
    .stat-card-accent::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 4px;
        border-top-left-radius: 1rem;
        border-bottom-left-radius: 1rem;
        transition: opacity 0.2s ease;
    }
    .stat-card-accent:hover::before { opacity: 0; }
    .stat-card-blue::before { background-color: #0B4F8A; }
    .stat-card-green::before { background-color: #059669; }
    .stat-card-orange::before { background-color: #D97706; }

    .stat-card-blue:hover { background: linear-gradient(270deg, #0B4F8A 0.08%, #072E51 99.92%); }
    .stat-card-green:hover { background: linear-gradient(270deg, #059669 0.03%, #026244 99.97%); }
    .stat-card-orange:hover { background: linear-gradient(90deg, #BC5308 0.06%, #D97706 99.94%); }

    .stat-icon-box { transition: background 0.2s ease, color 0.2s ease; }
    .stat-value { transition: color 0.2s ease; }
    .stat-label { transition: color 0.2s ease; }
    .stat-badge { transition: background 0.2s ease, color 0.2s ease; }

    .stat-card-accent:hover .stat-icon-box {
        background: rgba(255, 255, 255, 0.2) !important;
        color: #ffffff !important;
    }
    .stat-card-accent:hover .stat-value { color: #ffffff !important; }
    .stat-card-accent:hover .stat-label { color: rgba(255, 255, 255, 0.85) !important; }
    .stat-card-accent:hover .stat-badge {
        background: rgba(255, 255, 255, 0.18) !important;
        color: #ffffff !important;
    }

    .banner-illus-box {
        background: linear-gradient(90deg, #e2e8f0 0%, #f1f5f9 100%);
        border-radius: 24px;
        min-height: 220px;
        position: relative;
        overflow: hidden;
    }

    @keyframes illus-slide-up-a {
        0% { opacity: 0; transform: translateY(14px); }
        6% { opacity: 1; transform: translateY(0); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes illus-slide-up-b {
        0% { opacity: 0; transform: translateY(14px); }
        7% { opacity: 1; transform: translateY(0); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes illus-pop-scale {
        0% { opacity: 0; transform: scale(0.75); }
        9% { opacity: 1; transform: scale(1); }
        100% { opacity: 1; transform: scale(1); }
    }
    @keyframes illus-pop-circle {
        0% { opacity: 0; transform: scale(0.8); }
        5% { opacity: 1; transform: scale(1); }
        100% { opacity: 1; transform: scale(1); }
    }
    .illus-anim-a { animation: illus-slide-up-a 9s ease-out infinite; }
    .illus-anim-b { animation: illus-slide-up-b 9s ease-out infinite; }
    .illus-anim-icon { animation: illus-pop-scale 9s ease-out infinite; }
    .illus-anim-circle { animation: illus-pop-circle 9s ease-out infinite; }

    .btn-empty-state-cta {
        display: flex;
        width: 100%;
        height: 48px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 12px;
        background-color: #0B4F8A;
        border-color: #0B4F8A;
        color: #ffffff;
        box-shadow: 0 10px 24px -10px rgba(11, 79, 138, 0.20);
        transition: background-color 0.2s ease, border-color 0.2s ease;
    }
    .btn-empty-state-cta:hover,
    .btn-empty-state-cta:focus {
        background-color: #112127;
        border-color: #112127;
        color: #ffffff;
        box-shadow: 0 10px 24px -10px rgba(11, 79, 138, 0.20);
    }

    .icon-wrapper-glass {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.25);
    }

    .card-dashboard {
        border-radius: 1rem;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
    }

    .donut-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .donut-center-text {
        position: absolute;
        text-align: center;
    }

    /* Timeline style */
    .timeline-dashboard {
        position: relative;
        padding-left: 20px;
    }
    .timeline-dashboard::before {
        content: '';
        position: absolute;
        left: 4px;
        top: 8px;
        bottom: 8px;
        width: 2px;
        background-color: #e2e8f0;
    }
    .timeline-item-dash {
        position: relative;
        margin-bottom: 1.25rem;
    }
    .timeline-item-dash:last-child {
        margin-bottom: 0;
    }
    .timeline-marker {
        position: absolute;
        left: -20px;
        top: 6px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    /* Tabs nav bar styling */
    .nav-pill-tab {
        border-radius: 999px;
        padding: 0.5rem 1.25rem;
        font-weight: 600;
        font-size: 0.875rem;
        color: #111827;
        background-color: #ffffff;
        border: 1px solid #e5e7eb;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.2s ease;
        white-space: nowrap;
    }
    .nav-pill-tab:hover {
        background-color: #f8fafc;
        color: #0B4F8A;
    }
    .nav-pill-tab.active {
        background: linear-gradient(90deg, #015AA8 0%, #0B3E69 100%);
        color: #ffffff;
        border-color: transparent;
        box-shadow: 0px 10px 22px -10px rgba(37, 99, 235, 0.15);
    }
    .nav-pill-tab-badge {
        padding: 0.15rem 0.6rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 700;
        background-color: #f3f4f6;
        color: #6b7280;
    }
    .nav-pill-tab.active .nav-pill-tab-badge {
        background-color: rgba(255, 255, 255, 0.15);
        color: #ffffff;
        outline: 1px solid #ffffff;
    }
    a.custom-filter-pill:not(.active):hover {
        background: #EFF6FF !important;
        color: #0B4F8A !important;
        border-color: #0B4F8A !important;
        text-decoration: none !important;
        cursor: pointer !important;
    }
    a.custom-filter-pill {
        cursor: pointer;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        var HOVER_BG    = 'linear-gradient(90deg, #0B4F8A 0.06%, #052A4A 93%)';
        var HOVER_COLOR = '#FFF';
        var HOVER_BORDER = 'transparent';

        function applyHover(el, bgDefault, borderDefault, colorDefault) {
            el.style.transition = 'all 0.2s ease';
            el.addEventListener('mouseenter', function() {
                this.style.setProperty('background', HOVER_BG, 'important');
                this.style.setProperty('color', HOVER_COLOR, 'important');
                this.style.setProperty('border-color', HOVER_BORDER, 'important');
                this.style.setProperty('text-decoration', 'none', 'important');
            });
            el.addEventListener('mouseleave', function() {
                this.style.setProperty('background', bgDefault, 'important');
                this.style.setProperty('color', colorDefault, 'important');
                this.style.setProperty('border-color', borderDefault, 'important');
            });
        }

        // Filter pills
        document.querySelectorAll('a.custom-filter-pill:not(.active)').forEach(function(pill) {
            applyHover(pill, '#FFF', '#EEF0F4', '#1E293B');
        });

        // Outline buttons (Filter, Export, Refresh)
        document.querySelectorAll('.btn-outline-secondary').forEach(function(btn) {
            applyHover(btn, '#FFF', '#dee2e6', '#4A5568');
        });

        // Broker stat cards
        document.querySelectorAll('.metric-gradient-card').forEach(function(card) {
            card.style.cursor = 'pointer';
            card.style.transition = 'all 0.2s ease';
            card.addEventListener('mouseenter', function() {
                this.style.setProperty('box-shadow', '0 8px 24px rgba(11,79,138,0.35)', 'important');
                this.style.setProperty('transform', 'translateY(-2px)', 'important');
                this.style.setProperty('opacity', '0.92', 'important');
            });
            card.addEventListener('mouseleave', function() {
                this.style.removeProperty('box-shadow');
                this.style.removeProperty('transform');
                this.style.removeProperty('opacity');
            });
        });

    });
</script>

<div class="container-fluid px-0">
    <!-- Header Area -->
    <div class="page-header-bar d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-light d-lg-none" id="sidebarToggleBtn">
                <i class="bi bi-list fs-4"></i>
            </button>
            <div>
                <h1 class="page-header-title mb-1">Partner Management</h1>
                <p class="page-header-subtitle mb-0">Manage relationships with insurance providers, brokers, and third-party administrators</p>
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center gap-2">
            <div class="search-input-wrapper">
                <i class="bi bi-search" style="color: #757575;"></i>
                <input type="text" placeholder="Search partners...">
            </div>
            <button class="btn btn-primary d-inline-flex align-items-center gap-2 fw-semibold px-3 py-2" style="background-color: #0B4F8A; border-color: #0B4F8A;" onclick="window.location.href='{{ route('add-partner') }}'">
                <i class="bi bi-plus-lg"></i>
                <span>Add Partner</span>
            </button>
            <button class="btn btn-outline-secondary d-inline-flex align-items-center gap-2 fw-semibold px-3 py-2 bg-white" onclick="window.location.reload()">
                <i class="bi bi-arrow-clockwise"></i>
                <span>Refresh</span>
            </button>
            <button class="btn btn-outline-secondary d-inline-flex align-items-center justify-content-center bg-white" style="width: 40px; height: 40px;">
                <i class="bi bi-bell"></i>
            </button>
        </div>
    </div>

    <!-- Filter Pills & Tools Bar -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-3 d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3">
            <!-- Filter Pills -->
            <div class="d-flex flex-wrap align-items-center gap-2 overflow-auto py-1">
                <a href="{{ route('partnermanagement') }}" class="custom-filter-pill">
                    All Partners <span class="badge-count">{{ $countpartner }}</span>
                </a>
                <a href="{{ route('partnermanagement.insurance') }}" class="custom-filter-pill">
                    Insurance <span class="badge-count">{{ $totalProviders }}</span>
                </a>
                <a href="{{ route('partnermanagement.brokers') }}" class="custom-filter-pill active">
                    Brokers <span class="badge-count">{{ $totalBrokers }}</span>
                </a>
                <a href="{{ route('partnermanagement') }}" class="custom-filter-pill">
                    TPAs <span class="badge-count">{{ $totalTpas }}</span>
                </a>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex align-items-center gap-2 ms-lg-auto">
                <button class="btn btn-outline-secondary d-inline-flex align-items-center gap-2 fw-semibold px-3 py-2 bg-white rounded-3">
                    <i class="bi bi-funnel"></i>
                    <span>Filter</span>
                </button>
                <button class="btn btn-outline-secondary d-inline-flex align-items-center gap-2 fw-semibold px-3 py-2 bg-white rounded-3">
                    <i class="bi bi-box-arrow-up-right"></i>
                    <span>Export</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Broker Statistics Card Container -->
    <div class="card border-0 shadow-sm rounded-4 mb-4" style="background-color: #F8FAFC;">
        <div class="card-body p-4">
            <!-- Card Header -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2 mb-4">
                <h6 class="fw-bold text-uppercase tracking-wide text-secondary mb-0" style="font-size: 0.85rem;">
                    Insurance Broker Statistics
                </h6>
                <div>
                    <span class="badge rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2" style="background-color: #EFF6FF; color: #0B4F8A; border: 1px solid #BFDBFE;">
                        <i class="bi bi-calendar3"></i>
                        Last 30 days
                        <i class="bi bi-chevron-down ms-1"></i>
                    </span>
                </div>
            </div>

            <!-- Stat Cards Row -->
            <div class="row g-3">
                <!-- Card 1: Total Broker Partnerships -->
                <div class="col-12 col-md-4">
                    <div class="stat-card-accent stat-card-blue p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="stat-icon-box d-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 40px; height: 40px; background-color: #DBEAFE; color: #0B4F8A;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                    <path d="M13.3336 17.5V15.8333C13.3336 14.9493 12.9824 14.1014 12.3572 13.4763C11.7321 12.8512 10.8841 12.5 10 12.5H4.99962C4.11549 12.5 3.26758 12.8512 2.6424 13.4763C2.01723 14.1014 1.66602 14.9493 1.66602 15.8333V17.5M13.3336 2.60661C14.0485 2.79192 14.6816 3.20933 15.1335 3.79333C15.5854 4.37733 15.8306 5.09485 15.8306 5.83327C15.8306 6.5717 15.5854 7.28922 15.1335 7.87322C14.6816 8.45722 14.0485 8.87463 13.3336 9.05994M18.334 17.4999V15.8332C18.3335 15.0947 18.0876 14.3772 17.6351 13.7935C17.1826 13.2098 16.549 12.7929 15.8338 12.6082M10.8334 5.83333C10.8334 7.67428 9.34091 9.16667 7.49982 9.16667C5.65872 9.16667 4.16622 7.67428 4.16622 5.83333C4.16622 3.99238 5.65872 2.5 7.49982 2.5C9.34091 2.5 10.8334 3.99238 10.8334 5.83333Z"/>
                                </svg>
                            </div>
                            <div class="stat-value display-5 fw-extrabold mb-1" style="color: #0B4F8A; font-weight: 800;">
                                {{ $totalBroker }}
                            </div>
                            <div class="stat-label fw-semibold text-secondary mb-3" style="font-size: 0.9rem;">
                                Total broker partnerships
                            </div>
                        </div>
                        <div>
                            <span class="stat-badge badge rounded-pill px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #DBEAFE; color: #0B4F8A;">
                                <i class="bi bi-dash"></i> No change
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Currently Live and Producing -->
                <div class="col-12 col-md-4">
                    <div class="stat-card-accent stat-card-green p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="stat-icon-box d-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 40px; height: 40px; background-color: #D1FAE5; color: #059669;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                            </div>
                            <div class="stat-value display-5 fw-extrabold mb-1" style="color: #059669; font-weight: 800;">
                                {{ $activeBroker }}
                            </div>
                            <div class="stat-label fw-semibold text-secondary mb-3" style="font-size: 0.9rem;">
                                Currently live and producing
                            </div>
                        </div>
                        <div>
                            <span class="stat-badge badge rounded-pill px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #D1FAE5; color: #059669;">
                                <i class="bi bi-shield-check"></i> Healthy
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Awaiting Review or Onboarding -->
                <div class="col-12 col-md-4">
                    <div class="stat-card-accent stat-card-orange p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="stat-icon-box d-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 40px; height: 40px; background-color: #FFEDD5; color: #D97706;">
                                <i class="bi bi-clock-history fs-5"></i>
                            </div>
                            <div class="stat-value display-5 fw-extrabold mb-1" style="color: #D97706; font-weight: 800;">
                                {{ $awaitingBroker }}
                            </div>
                            <div class="stat-label fw-semibold text-secondary mb-3" style="font-size: 0.9rem;">
                                Awaiting review or onboarding
                            </div>
                        </div>
                        <div>
                            <span class="stat-badge badge rounded-pill px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #FFEDD5; color: #D97706;">
                                <i class="bi bi-hourglass-split"></i> Pending
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($totalBroker == 0)
    <!-- Empty State Callout Banner -->
    <div class="card border border-light-subtle shadow-sm rounded-4 mb-5">
        <div class="card-body p-4 p-lg-5">
            <div class="row align-items-center g-4">
                <!-- Left Decorative Banner Box -->
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="banner-illus-box d-flex flex-column justify-content-between p-3 position-relative">
                        <!-- Floating graphic element shapes -->
                        <div class="illus-anim-circle position-absolute rounded-circle" style="width: 220px; height: 220px; right: -40px; bottom: -60px; background: rgba(11, 79, 138, 0.08);"></div>
                        <div class="illus-anim-a position-absolute bg-white shadow-sm" style="width: 72px; height: 72px; top: 18px; left: 18px; border-radius: 20px; opacity: 0.9;"></div>
                        <div class="illus-anim-b position-absolute bg-white shadow-sm" style="width: 92px; height: 92px; bottom: 18px; right: 18px; border-radius: 24px; opacity: 0.85;"></div>

                        <div class="illus-anim-icon d-flex align-items-center justify-content-center bg-white rounded-4 shadow-sm mx-auto my-auto position-relative z-1" style="width: 72px; height: 72px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <div class="mt-auto position-relative z-1">
                            <span class="badge text-secondary fw-semibold bg-white-50 px-2 py-1" style="font-size: 0.75rem;">
                                Insurance Brokers
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Text & Action Content -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <h2 class="fw-bold text-dark mb-2" style="font-size: 1.75rem;">No insurance brokers yet</h2>
                            <p class="text-secondary mb-0" style="font-size: 1.05rem; line-height: 1.6;">
                                Add your first broker to start managing relationships, documents, and communication in one place.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('add-partner') }}" class="btn btn-empty-state-cta fw-bold shadow-sm">
                                <i class="bi bi-plus-circle-fill"></i>
                                <span>Add Insurance Broker</span>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="text-decoration-none fw-semibold d-inline-flex align-items-center gap-1" style="color: #0B4F8A;">
                                <span>Learn more</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Middle Section: Partner Overview, Distribution, and Activity -->
    <div class="row g-4 mb-4">
        <!-- Partner Overview Column -->
        <div class="col-12 col-xl-6">
            <div class="card card-dashboard h-100">
                <div class="card-header bg-white border-0 py-3 px-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-card-list text-primary fs-5"></i>
                        <h5 class="fw-bold text-dark mb-0">Partner Overview</h5>
                    </div>
                    <a href="{{ route('partnermanagement') }}" class="text-decoration-none fw-semibold text-primary small">View All</a>
                </div>
                <div class="card-body p-4 pt-0">
                    <div class="d-flex flex-column gap-3">
                        <!-- Partner 1 -->
                        <div class="card border border-light-subtle rounded-3 p-3 shadow-sm bg-white">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px; background-color: #EDE9FE; color: #7C3AED;">
                                        S
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">Sunrise Insurance Group</h6>
                                        <div class="d-flex align-items-center gap-2 flex-wrap text-muted small">
                                            <span class="badge rounded-pill bg-danger-subtle text-danger px-2.5 py-1 fw-bold">Inactive</span>
                                            <span>•</span>
                                            <span>North America</span>
                                            <span>•</span>
                                            <span>45 days ago</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="badge rounded-pill px-3 py-1.5 fw-bold" style="background-color: #F5F3FF; color: #7C3AED;">TPA</span>
                            </div>
                        </div>

                        <!-- Partner 2 -->
                        <div class="card border border-light-subtle rounded-3 p-3 shadow-sm bg-white">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px; background-color: #DBEAFE; color: #1D4ED8;">
                                        M
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">Metro Health Brokers</h6>
                                        <div class="d-flex align-items-center gap-2 flex-wrap text-muted small">
                                            <span class="badge rounded-pill bg-warning-subtle text-warning-emphasis px-2.5 py-1 fw-bold">Inactive</span>
                                            <span>•</span>
                                            <span>East Coast</span>
                                            <span>•</span>
                                            <span>12 days ago</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="badge rounded-pill px-3 py-1.5 fw-bold" style="background-color: #DBEAFE; color: #1D4ED8;">Broker</span>
                            </div>
                        </div>

                        <!-- Add Broker Placeholder/Callout -->
                        <div class="card border-0 rounded-3 p-3" style="background-color: #F8FAFC; border: 1px dashed #cbd5e1 !important;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-secondary-subtle" style="width: 44px; height: 44px;">
                                    <i class="bi bi-briefcase text-secondary fs-5"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-0">No active brokers</h6>
                                    <p class="text-secondary mb-0 small">Add your first broker to start building your distribution network.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partner Distribution Column -->
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card card-dashboard h-100">
                <div class="card-header bg-white border-0 py-3 px-4">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-pie-chart text-primary fs-5"></i>
                        <h5 class="fw-bold text-dark mb-0">Partner Distribution</h5>
                    </div>
                </div>
                <div class="card-body p-4 pt-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="donut-container mb-4">
                        <!-- Premium SVG Donut Chart representing distribution -->
                        <svg viewBox="0 0 36 36" style="width: 140px; height: 140px;">
                            <!-- Gray background track -->
                            <circle cx="18" cy="18" r="15.915" fill="none" stroke="#e2e8f0" stroke-width="3.5"></circle>
                            <!-- TPA segment (purple) - 50% -->
                            <circle cx="18" cy="18" r="15.915" fill="none" stroke="#7C3AED" stroke-width="3.5" stroke-dasharray="50 100" stroke-dashoffset="25"></circle>
                            <!-- Inactive/Other segment (grey) - 50% -->
                            <circle cx="18" cy="18" r="15.915" fill="none" stroke="#9CA3AF" stroke-width="3.5" stroke-dasharray="50 100" stroke-dashoffset="75"></circle>
                        </svg>
                        <div class="donut-center-text">
                            <span class="text-muted small d-block">Total</span>
                            <span class="fs-4 fw-bold text-dark">2</span>
                        </div>
                    </div>
                    <!-- Legend -->
                    <div class="w-100 d-flex flex-column gap-2 mt-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <span class="d-inline-block rounded-1" style="width: 16px; height: 16px; background-color: #7C3AED;"></span>
                                <span class="fw-semibold text-secondary">TPA</span>
                            </div>
                            <span class="fw-bold text-dark">1</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <span class="d-inline-block rounded-1" style="width: 16px; height: 16px; background-color: #9CA3AF;"></span>
                                <span class="fw-semibold text-secondary">Inactive</span>
                            </div>
                            <span class="fw-bold text-dark">1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Column -->
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card card-dashboard h-100">
                <div class="card-header bg-white border-0 py-3 px-4">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-clock-history text-primary fs-5"></i>
                        <h5 class="fw-bold text-dark mb-0">Recent Activity</h5>
                    </div>
                </div>
                <div class="card-body p-4 pt-0">
                    <div class="timeline-dashboard">
                        <!-- Activity 1 -->
                        <div class="timeline-item-dash">
                            <span class="timeline-marker bg-primary"></span>
                            <h6 class="fw-bold text-dark mb-0 small" style="font-size: 0.85rem;">Partner onboarding initiated</h6>
                            <span class="text-muted small" style="font-size: 0.75rem;">Metro Health Brokers • 2h ago</span>
                        </div>
                        <!-- Activity 2 -->
                        <div class="timeline-item-dash">
                            <span class="timeline-marker bg-secondary"></span>
                            <h6 class="fw-bold text-dark mb-0 small" style="font-size: 0.85rem;">Status changed to inactive</h6>
                            <span class="text-muted small" style="font-size: 0.75rem;">Sunrise Insurance • 1d ago</span>
                        </div>
                        <!-- Activity 3 -->
                        <div class="timeline-item-dash">
                            <span class="timeline-marker bg-success"></span>
                            <h6 class="fw-bold text-dark mb-0 small" style="font-size: 0.85rem;">Profile updated</h6>
                            <span class="text-muted small" style="font-size: 0.75rem;">System Admin • 3d ago</span>
                        </div>
                        <!-- Activity 4 -->
                        <div class="timeline-item-dash">
                            <span class="timeline-marker bg-warning"></span>
                            <h6 class="fw-bold text-dark mb-0 small" style="font-size: 0.85rem;">Verification pending</h6>
                            <span class="text-muted small" style="font-size: 0.75rem;">New broker request • 5d ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partner Statistics & Analytics Header -->
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-3">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-graph-up text-primary fs-5"></i>
            <div>
                <h5 class="fw-bold text-dark mb-0">Partner Statistics & Analytics</h5>
                <span class="text-muted small">Comprehensive overview of your partner network performance</span>
            </div>
        </div>
        <button class="btn btn-outline-secondary btn-sm bg-white d-inline-flex align-items-center gap-2 rounded-3 px-3 py-2 fw-semibold">
            <i class="bi bi-box-arrow-up-right"></i>
            <span>Export</span>
        </button>
    </div>

    <!-- Analytics Cards Row -->
    <div class="row g-4 mb-4">
        <!-- Total Partners Card -->
        <div class="col-12 col-md-4">
            <div class="card card-dashboard p-4 border-top border-primary border-4 shadow-sm h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center gap-2 text-muted fw-semibold">
                        <i class="bi bi-globe2 text-primary"></i>
                        <span>Total Partners</span>
                    </div>
                    <span class="fs-2 fw-bold text-dark">2</span>
                </div>
                <p class="text-secondary small mb-0">Across all categories</p>
            </div>
        </div>

        <!-- Active Partners Card -->
        <div class="col-12 col-md-4">
            <div class="card card-dashboard p-4 border-top border-success border-4 shadow-sm h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center gap-2 text-muted fw-semibold">
                        <i class="bi bi-check-circle text-success"></i>
                        <span>Active Partners</span>
                    </div>
                    <span class="fs-2 fw-bold text-dark">0</span>
                </div>
                <p class="text-secondary small mb-0">Last activity within 30 days</p>
            </div>
        </div>

        <!-- Inactive Partners Card -->
        <div class="col-12 col-md-4">
            <div class="card card-dashboard p-4 border-top border-danger border-4 shadow-sm h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center gap-2 text-muted fw-semibold">
                        <i class="bi bi-exclamation-triangle text-danger"></i>
                        <span>Inactive Partners</span>
                    </div>
                    <span class="fs-2 fw-bold text-dark">1</span>
                </div>
                <p class="text-secondary small mb-0">Needs attention or follow-up</p>
            </div>
        </div>
    </div>

    <!-- Alert Messages Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-6">
            <div class="alert border-0 py-3 px-4 d-flex align-items-center gap-3 rounded-3" style="background-color: #FFFBEB; border: 1px solid #FDE68A !important;">
                <i class="bi bi-exclamation-circle-fill text-warning fs-5"></i>
                <div class="text-warning-emphasis small fw-medium">
                    1 partner is inactive and may need follow-up. Review partner status.
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="alert border-0 py-3 px-4 d-flex align-items-center gap-3 rounded-3" style="background-color: #EFF6FF; border: 1px solid #BFDBFE !important;">
                <i class="bi bi-info-circle-fill text-primary fs-5"></i>
                <div class="text-primary-emphasis small fw-medium">
                    No active brokers configured. Add brokers to expand your distribution network.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection