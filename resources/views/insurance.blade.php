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
</style>

<div class="container-fluid px-0">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Partner Management</h1>
            <p class="text-muted mb-0">Manage relationships with insurance providers, brokers, and third-party administrators</p>
        </div>
        <div class="d-flex flex-wrap align-items-center gap-2">
            <a href="{{ route('add-partner') }}" class="btn btn-primary d-inline-flex align-items-center gap-2 fw-semibold px-3 py-2" style="background-color: #0B4F8A; border-color: #0B4F8A;">
                <i class="bi bi-plus-lg"></i>
                <span>Add Partner</span>
            </a>
            <button class="btn btn-outline-secondary d-inline-flex align-items-center gap-2 fw-semibold px-3 py-2 bg-white" onclick="window.location.reload()">
                <i class="bi bi-arrow-clockwise"></i>
                <span>Refresh</span>
            </button>
        </div>
    </div>

    <!-- Filter Pills & Tools Bar -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-3 d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3">
            <!-- Filter Pills -->
            <div class="d-flex flex-wrap align-items-center gap-2 overflow-auto py-1">
                <a href="{{ route('partnermanagement') }}" class="nav-pill-custom">
                    <span>All Partners</span>
                    <span class="nav-pill-badge">{{ $totalPartners ?? ($countpartner ?? 3) }}</span>
                </a>
                <a href="{{ route('partnermanagement.insurance') }}" class="nav-pill-custom {{ $isInsurance ? 'active' : '' }}">
                    <span>Insurance</span>
                    <span class="nav-pill-badge">{{ $totalInsurance ?? ($countInsuranceProvider ?? 2) }}</span>
                </a>
                <a href="{{ route('partnermanagement.brokers') }}" class="nav-pill-custom {{ !$isInsurance ? 'active' : '' }}">
                    <span>Brokers</span>
                    <span class="nav-pill-badge">{{ $totalBroker ?? ($countInsuranceBroker ?? 0) }}</span>
                </a>
                <a href="{{ route('partnermanagement') }}" class="nav-pill-custom">
                    <span>TPAs</span>
                    <span class="nav-pill-badge">{{ $totalTpas ?? ($countTPA ?? 1) }}</span>
                </a>
                <a href="{{ route('partnermanagement') }}" class="nav-pill-custom">
                    <span>Private Company</span>
                    <span class="nav-pill-badge">1</span>
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
                                <i class="bi bi-building fs-5"></i>
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
                                <i class="bi bi-check-circle fs-5"></i>
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
                            <i class="bi bi-briefcase fs-2" style="color: #0B4F8A;"></i>
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
            <i class="bi bi-graph-up-arrow fs-5" style="color: #0B4F8A;"></i>
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
                        <i class="bi bi-building text-white"></i>
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
                        <i class="bi bi-briefcase text-white"></i>
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