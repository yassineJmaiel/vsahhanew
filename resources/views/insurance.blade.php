@extends('theme')



@section('content')
@php
    $isInsurance = request()->routeIs('partnermanagement.insurance');
    $partnerTypeLabel = $isInsurance ? 'Insurance Provider' : 'Insurance Broker';
    $partnerTypePlural = $isInsurance ? 'Insurance Providers' : 'Insurance Brokers';
@endphp

<style>
    /* Custom styling for Insurance Broker View */
    .stat-card-accent {
        position: relative;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        border-radius: 1rem;
        background: #ffffff;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .stat-card-accent:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08) !important;
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
    }
    .stat-card-blue::before { background-color: #0B4F8A; }
    .stat-card-green::before { background-color: #059669; }
    .stat-card-orange::before { background-color: #D97706; }

    .nav-pill-custom {
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
    .nav-pill-custom:hover {
        background-color: #f8fafc;
        color: #0B4F8A;
    }
    .nav-pill-custom.active {
        background: linear-gradient(90deg, #015AA8 0%, #0D4271 100%);
        color: #ffffff;
        border-color: transparent;
    }
    .nav-pill-badge {
        padding: 0.15rem 0.6rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 700;
        background-color: #f3f4f6;
        color: #6b7280;
    }
    .nav-pill-custom.active .nav-pill-badge {
        background-color: #0B4F8A;
        color: #ffffff;
        outline: 1px solid #ffffff;
    }

    .banner-illus-box {
        background: linear-gradient(135deg, #e2e8f0 0%, #f1f5f9 100%);
        border-radius: 1.25rem;
        min-height: 220px;
        position: relative;
        overflow: hidden;
    }

    .gradient-metric-card {
        border-radius: 1.25rem;
        padding: 1.5rem;
        color: #ffffff;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.15);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .gradient-metric-card:hover {
        transform: translateY(-3px);
    }
    .gradient-card-1 {
        background: linear-gradient(135deg, #0B4F8A 0%, #1E40AF 100%);
        box-shadow: 0px 18px 40px -12px rgba(11, 79, 138, 0.25);
    }
    .gradient-card-2 {
        background: linear-gradient(135deg, #7C3AED 0%, #1E40AF 100%);
        box-shadow: 0px 18px 40px -12px rgba(124, 58, 237, 0.25);
    }
    .gradient-card-3 {
        background: linear-gradient(135deg, #10B981 0%, #0B4F8A 100%);
        box-shadow: 0px 18px 40px -12px rgba(16, 185, 129, 0.25);
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

        // Color definitions for insurance stat cards
        var ACCENT_COLORS = {
            'stat-card-blue': {
                bg: '#EFF6FF',
                border: '#0B4F8A',
                shadow: '0 8px 24px rgba(11, 79, 138, 0.18)'
            },
            'stat-card-green': {
                bg: '#ECFDF5',
                border: '#059669',
                shadow: '0 8px 24px rgba(5, 150, 105, 0.18)'
            },
            'stat-card-orange': {
                bg: '#FFFBEB',
                border: '#D97706',
                shadow: '0 8px 24px rgba(217, 119, 6, 0.18)'
            }
        };

        // Stat cards - hover according to each card's color
        document.querySelectorAll('.stat-card-accent').forEach(function(card) {
            card.style.transition = 'all 0.2s ease';
            card.style.cursor = 'pointer';
            var cfg = null;
            if (card.classList.contains('stat-card-blue')) cfg = ACCENT_COLORS['stat-card-blue'];
            else if (card.classList.contains('stat-card-green')) cfg = ACCENT_COLORS['stat-card-green'];
            else if (card.classList.contains('stat-card-orange')) cfg = ACCENT_COLORS['stat-card-orange'];

            if (cfg) {
                card.addEventListener('mouseenter', function() {
                    this.style.setProperty('background', cfg.bg, 'important');
                    this.style.setProperty('border-color', cfg.border, 'important');
                    this.style.setProperty('box-shadow', cfg.shadow, 'important');
                    this.style.setProperty('transform', 'translateY(-2px)', 'important');
                });
                card.addEventListener('mouseleave', function() {
                    this.style.removeProperty('background');
                    this.style.removeProperty('border-color');
                    this.style.removeProperty('box-shadow');
                    this.style.removeProperty('transform');
                });
            }
        });

    });
</script>

<div class="container-fluid px-0">
    <!-- Header Section -->
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
                <a href="{{ route('partnermanagement.insurance') }}" class="custom-filter-pill {{ $isInsurance ? 'active' : '' }}">
                    Insurance <span class="badge-count">{{ $totalProviders }}</span>
                </a>
                <a href="{{ route('partnermanagement.brokers') }}" class="custom-filter-pill {{ !$isInsurance ? 'active' : '' }}">
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

    <!-- Insurance Partner Statistics Card Container -->
    <div class="card border-0 shadow-sm rounded-4 mb-4" style="background-color: #F8FAFC;">
        <div class="card-body p-4">
            <!-- Card Header -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2 mb-4">
                <h6 class="fw-bold text-uppercase tracking-wide text-secondary mb-0" style="font-size: 0.85rem;">
                    {{ $partnerTypeLabel }} Statistics
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
                <!-- Card 1: Total Partnerships -->
                <div class="col-12 col-md-4">
                    <div class="stat-card-accent stat-card-blue p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 40px; height: 40px; background-color: #DBEAFE; color: #0B4F8A;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/>
                                    <path d="M10 6h4"/>
                                    <path d="M10 10h4"/>
                                    <path d="M10 14h4"/>
                                    <path d="M10 18h4"/>
                                </svg>
                            </div>
                            <div class="display-5 fw-extrabold mb-1" style="color: #0B4F8A; font-weight: 800;">
                                {{ $isInsurance ? ($totalInsurance ?? 2) : ($totalBroker ?? 5) }}
                            </div>
                            <div class="fw-semibold text-secondary mb-3" style="font-size: 0.9rem;">
                                Total {{ strtolower($partnerTypeLabel) }} partnerships
                            </div>
                        </div>
                        <div>
                            <span class="badge rounded-pill px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #DBEAFE; color: #0B4F8A;">
                                <i class="bi bi-dash"></i> {{ $isInsurance ? '+12%' : 'No change' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Currently Live and Producing -->
                <div class="col-12 col-md-4">
                    <div class="stat-card-accent stat-card-green p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 40px; height: 40px; background-color: #D1FAE5; color: #059669;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                            </div>
                            <div class="display-5 fw-extrabold mb-1" style="color: #059669; font-weight: 800;">
                                {{ $isInsurance ? ($activeInsurance ?? 1) : ($activeBroker ?? 1) }}
                            </div>
                            <div class="fw-semibold text-secondary mb-3" style="font-size: 0.9rem;">
                                Currently live and producing
                            </div>
                        </div>
                        <div>
                            <span class="badge rounded-pill px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #D1FAE5; color: #059669;">
                                <i class="bi bi-shield-check"></i> Healthy
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Awaiting Review or Onboarding -->
                <div class="col-12 col-md-4">
                    <div class="stat-card-accent stat-card-orange p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 40px; height: 40px; background-color: #FFEDD5; color: #D97706;">
                                <i class="bi bi-clock-history fs-5"></i>
                            </div>
                            <div class="display-5 fw-extrabold mb-1" style="color: #D97706; font-weight: 800;">
                                {{ $isInsurance ? ($awaitingInsurance ?? 1) : ($awaitingBroker ?? 2) }}
                            </div>
                            <div class="fw-semibold text-secondary mb-3" style="font-size: 0.9rem;">
                                Awaiting review or onboarding
                            </div>
                        </div>
                        <div>
                            <span class="badge rounded-pill px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #FFEDD5; color: #D97706;">
                                <i class="bi bi-hourglass-split"></i> Pending
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Empty State Callout Banner -->
    <div class="card border border-light-subtle shadow-sm rounded-4 mb-5">
        <div class="card-body p-4 p-lg-5">
            <div class="row align-items-center g-4">
                <!-- Left Decorative Banner Box -->
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="banner-illus-box d-flex flex-column justify-content-between p-3 position-relative">
                        <!-- Floating graphic element shapes -->
                        <div class="position-absolute rounded-circle opacity-10 bg-primary" style="width: 140px; height: 140px; right: -20px; bottom: -20px;"></div>
                        <div class="position-absolute bg-white rounded-4 shadow-sm opacity-75" style="width: 60px; height: 60px; top: 15px; left: 15px;"></div>
                        
                        <div class="d-flex align-items-center justify-content-center bg-white rounded-4 shadow-sm mx-auto my-auto position-relative z-1" style="width: 72px; height: 72px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                                <rect width="20" height="14" x="2" y="6" rx="2"/>
                            </svg>
                        </div>
                        <div class="mt-auto position-relative z-1">
                            <span class="badge text-secondary fw-semibold bg-white-50 px-2 py-1" style="font-size: 0.75rem;">
                                {{ $partnerTypePlural }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Text & Action Content -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <h2 class="fw-bold text-dark mb-2" style="font-size: 1.75rem;">No {{ strtolower($partnerTypeLabel) }}s yet</h2>
                            <p class="text-secondary mb-0" style="font-size: 1.05rem; line-height: 1.6;">
                                Add your first {{ strtolower($partnerTypeLabel) }} to start managing relationships, documents, and communication in one place.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('add-partner') }}" class="btn btn-primary btn-lg fw-bold px-4 py-2.5 rounded-3 d-inline-flex align-items-center gap-2 shadow-sm" style="background-color: #0B4F8A; border-color: #0B4F8A;">
                                <i class="bi bi-plus-circle-fill"></i>
                                <span>Add {{ $partnerTypeLabel }}</span>
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

    <!-- Partner Statistics Header -->
    <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-2 mb-3">
        <div class="d-flex align-items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 3v16a2 2 0 0 0 2 2h16"/>
                <path d="M18 17V9"/>
                <path d="M13 17V5"/>
                <path d="M8 17v-3"/>
            </svg>
            <h5 class="fw-bold text-dark mb-0">Partner Statistics</h5>
        </div>
        <span class="text-muted d-none d-sm-inline">•</span>
        <span class="text-muted small">Partner relationship metrics and policy distribution</span>
    </div>

    <!-- Gradient Metric Cards Row -->
    <div class="row g-4 mb-4">
        <!-- Providers Metric Card -->
        <div class="col-12 col-md-4">
            <div class="gradient-metric-card gradient-card-1 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-3 mb-3" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(4px);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/>
                            <path d="M10 6h4"/>
                            <path d="M10 10h4"/>
                            <path d="M10 14h4"/>
                            <path d="M10 18h4"/>
                        </svg>
                        <span class="fw-bold small text-white-90">Insurance Providers</span>
                    </div>
                    <div class="d-flex align-items-baseline gap-3 mb-2">
                        <span class="display-4 fw-extrabold text-white" style="font-weight: 800;">
                            {{ $totalProviders ?? 2 }}
                        </span>
                        <span class="badge rounded-pill px-2.5 py-1 text-white fw-bold d-inline-flex align-items-center gap-1" style="background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="bi bi-arrow-up-short"></i> +12%
                        </span>
                    </div>
                </div>
                <div class="text-white-80 small mt-2">
                    Active providers connected to the platform
                </div>
            </div>
        </div>

        <!-- Brokers Metric Card -->
        <div class="col-12 col-md-4">
            <div class="gradient-metric-card gradient-card-2 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-3 mb-3" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(4px);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                            <rect width="20" height="14" x="2" y="6" rx="2"/>
                        </svg>
                        <span class="fw-bold small text-white-90">Insurance Brokers</span>
                    </div>
                    <div class="d-flex align-items-baseline gap-3 mb-2">
                        <span class="display-4 fw-extrabold text-white" style="font-weight: 800;">
                            {{ $totalBroker ?? 0 }}
                        </span>
                        <span class="badge rounded-pill px-2.5 py-1 text-white fw-bold d-inline-flex align-items-center gap-1" style="background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="bi bi-dash"></i> +0%
                        </span>
                    </div>
                </div>
                <div class="text-white-80 small mt-2">
                    Broker accounts onboarded this period
                </div>
            </div>
        </div>

        <!-- TPAs Metric Card -->
        <div class="col-12 col-md-4">
            <div class="gradient-metric-card gradient-card-3 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-3 mb-3" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(4px);">
                        <i class="bi bi-diagram-3 text-white"></i>
                        <span class="fw-bold small text-white-90">Third Party Administrators</span>
                    </div>
                    <div class="d-flex align-items-baseline gap-3 mb-2">
                        <span class="display-4 fw-extrabold text-white" style="font-weight: 800;">
                            {{ $totalTpas ?? 1 }}
                        </span>
                        <span class="badge rounded-pill px-2.5 py-1 text-white fw-bold d-inline-flex align-items-center gap-1" style="background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="bi bi-arrow-up-short"></i> +8%
                        </span>
                    </div>
                </div>
                <div class="text-white-80 small mt-2">
                    TPA integrations currently active
                </div>
            </div>
        </div>
    </div>
</div>
@endsection