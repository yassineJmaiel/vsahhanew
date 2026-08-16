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
</style>

<div class="container-fluid px-0">
    <!-- Header Area -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Partner Overview</h1>
            <p class="text-muted mb-0">View metrics, recent activity and network status for all business partners</p>
        </div>
        <div class="d-flex flex-wrap align-items-center gap-2">
            <a href="{{ route('add-partner') }}" class="btn btn-primary d-inline-flex align-items-center gap-2 fw-semibold px-3 py-2" style="background-color: #015AA8; border-color: #015AA8;">
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
                <a href="{{ route('partnermanagement') }}" class="nav-pill-tab">
                    <span>All Partners</span>
                    <span class="nav-pill-tab-badge">{{ $totalPartners ?? 3 }}</span>
                </a>
                <a href="{{ route('partnermanagement.insurance') }}" class="nav-pill-tab">
                    <span>Insurance</span>
                    <span class="nav-pill-tab-badge">{{ $totalProviders ?? 2 }}</span>
                </a>
                <a href="{{ route('partnermanagement.brokers') }}" class="nav-pill-tab active">
                    <span>Brokers</span>
                    <span class="nav-pill-tab-badge">{{ $totalBrokers ?? 0 }}</span>
                </a>
                <a href="{{ route('partnermanagement') }}" class="nav-pill-tab">
                    <span>TPAs</span>
                    <span class="nav-pill-tab-badge">{{ $totalTpas ?? 1 }}</span>
                </a>
                <a href="{{ route('partnermanagement') }}" class="nav-pill-tab">
                    <span>Private Company</span>
                    <span class="nav-pill-tab-badge">1</span>
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

    <!-- Metric Cards Grid -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-6 g-3 mb-4">
        <!-- 1. Total Partners -->
        <div class="col">
            <div class="metric-gradient-card metric-card-1 h-100 d-flex flex-column justify-content-between">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <span class="fw-semibold text-white-90 small">Total Partners</span>
                    <div class="icon-wrapper-glass text-white">
                        <i class="bi bi-building fs-5"></i>
                    </div>
                </div>
                <div>
                    <h2 class="display-6 fw-bold mb-2">{{ $totalPartners ?? 2 }}</h2>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge rounded-pill bg-white text-primary fw-bold px-2 py-1 small">+0%</span>
                        <span class="text-white-50 small">this month</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Active Brokers -->
        <div class="col">
            <div class="metric-gradient-card metric-card-2 h-100 d-flex flex-column justify-content-between">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <span class="fw-semibold text-white-90 small">Active Brokers</span>
                    <div class="icon-wrapper-glass text-white">
                        <i class="bi bi-shield-check fs-5"></i>
                    </div>
                </div>
                <div>
                    <h2 class="display-6 fw-bold mb-2">{{ $activeBroker ?? 0 }}</h2>
                    <span class="text-white-80 small">Partners ready for distribution</span>
                </div>
            </div>
        </div>

        <!-- 3. Pending Approval -->
        <div class="col">
            <div class="metric-gradient-card metric-card-3 h-100 d-flex flex-column justify-content-between">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <span class="fw-semibold text-white-90 small">Pending Approval</span>
                    <div class="icon-wrapper-glass text-white">
                        <i class="bi bi-clock fs-5"></i>
                    </div>
                </div>
                <div>
                    <h2 class="display-6 fw-bold mb-2">{{ $awaitingBroker ?? 0 }}</h2>
                    <span class="text-white-80 small">Awaiting verification</span>
                </div>
            </div>
        </div>

        <!-- 4. Insurance Providers -->
        <div class="col">
            <div class="metric-gradient-card metric-card-4 h-100 d-flex flex-column justify-content-between">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <span class="fw-semibold text-white-90 small">Insurance Providers</span>
                    <div class="icon-wrapper-glass text-white">
                        <i class="bi bi-file-earmark-text fs-5"></i>
                    </div>
                </div>
                <div>
                    <h2 class="display-6 fw-bold mb-2">{{ $totalProviders ?? 0 }}</h2>
                    <span class="text-white-80 small">Provider network</span>
                </div>
            </div>
        </div>

        <!-- 5. TPAs -->
        <div class="col">
            <div class="metric-gradient-card metric-card-5 h-100 d-flex flex-column justify-content-between">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <span class="fw-semibold text-white-90 small">TPAs</span>
                    <div class="icon-wrapper-glass text-white">
                        <i class="bi bi-diagram-3 fs-5"></i>
                    </div>
                </div>
                <div>
                    <h2 class="display-6 fw-bold mb-2">{{ $totalTpas ?? 1 }}</h2>
                    <span class="text-white-80 small">Third-party administrators</span>
                </div>
            </div>
        </div>

        <!-- 6. Inactive Partners -->
        <div class="col">
            <div class="metric-gradient-card metric-card-6 h-100 d-flex flex-column justify-content-between">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <span class="fw-semibold text-white-90 small">Inactive Partners</span>
                    <div class="icon-wrapper-glass text-white">
                        <i class="bi bi-exclamation-triangle fs-5"></i>
                    </div>
                </div>
                <div>
                    <h2 class="display-6 fw-bold mb-2">1</h2>
                    <span class="text-white-80 small">Needs attention</span>
                </div>
            </div>
        </div>
    </div>

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