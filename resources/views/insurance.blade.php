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
    @property --fill-color-1 {
        syntax: '<color>';
        initial-value: transparent;
        inherits: false;
    }
    @property --fill-color-2 {
        syntax: '<color>';
        initial-value: transparent;
        inherits: false;
    }
    @keyframes shimmer-fill-color-1 {
        0% { animation-timing-function: linear; --fill-color-1: rgba(13, 184, 184, 0.28); }
        16.667% { animation-timing-function: linear; --fill-color-1: rgba(38, 89, 229, 0.28); }
        33.333% { animation-timing-function: linear; --fill-color-1: rgba(128, 31, 199, 0.28); }
        50% { --fill-color-1: rgba(13, 184, 184, 0.28); }
        100% { --fill-color-1: rgba(13, 184, 184, 0.28); }
    }
    @keyframes shimmer-fill-color-2 {
        0% { animation-timing-function: ease-in-out; --fill-color-2: rgba(0, 217, 229, 0.28); }
        11.111% { animation-timing-function: ease-in-out; --fill-color-2: rgba(38, 97, 140, 0.35); }
        22.222% { animation-timing-function: ease-in-out; --fill-color-2: rgba(0, 140, 217, 0.28); }
        33.333% { --fill-color-2: rgba(0, 217, 229, 0.28); }
        100% { --fill-color-2: rgba(0, 217, 229, 0.28); }
    }
    .text-white-90 { color: rgba(255, 255, 255, 0.9); }
    .text-white-80 { color: rgba(255, 255, 255, 0.8); }

    .metric-value {
        display: flex;
        align-items: flex-end;
        gap: 10px;
        color: #FFFFFF;
        font-family: Inter, sans-serif;
        font-size: 56px;
        font-weight: 800;
        line-height: 110%;
    }
    .metric-trend-badge {
        display: inline-flex;
        padding: 6px 10px;
        align-items: center;
        gap: 6px;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, 0.20);
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        color: #FFFFFF;
        font-family: Inter, sans-serif;
        font-size: 12px;
        line-height: 1;
        font-weight: 700;
        align-self: center;
        height: auto;
        flex-shrink: 0;
        white-space: nowrap;
        min-width: max-content;
        animation:
            kf_trend_opacity_ins 9s linear infinite,
            kf_trend_translate_ins 9s linear infinite;
    }
    @keyframes kf_trend_opacity_ins {
        0%       { opacity: 0; }
        0.889%   { animation-timing-function: cubic-bezier(0, 0, 0.2, 1); opacity: 0; }
        5%       { opacity: 1; }
        100%     { opacity: 1; }
    }
    @keyframes kf_trend_translate_ins {
        0%       { translate: 0px 6px; }
        0.889%   { animation-timing-function: cubic-bezier(0, 0, 0.2, 1); translate: 0px 6px; }
        5%       { translate: 0px 0px; }
        100%     { translate: 0px 0px; }
    }
    .metric-badge {
        display: flex;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        padding: 10px 14px;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(4px);
    }
    .metric-badge-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.2);
        color: #ffffff;
    }
    .metric-footer {
        display: flex;
        padding: 10px 12px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        border-radius: 14px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        background: rgba(255, 255, 255, 0.12);
        color: rgba(255, 255, 255, 0.80);
        font-family: Inter, sans-serif;
        font-size: 13px;
        font-weight: 400;
    }
    .gradient-card-1 {
        background:
            linear-gradient(var(--fill-color-2), var(--fill-color-2)),
            linear-gradient(var(--fill-color-1), var(--fill-color-1)),
            linear-gradient(90deg, #0B4F8A 0%, #1E40AF 100%);
        box-shadow: 0 6px 16px -6px rgba(11, 79, 138, 0.08), 0 18px 40px -12px rgba(11, 79, 138, 0.15);
        animation: shimmer-fill-color-1 9s linear infinite, shimmer-fill-color-2 9s linear infinite;
    }
    .gradient-card-2 {
        background:
            linear-gradient(var(--fill-color-2), var(--fill-color-2)),
            linear-gradient(var(--fill-color-1), var(--fill-color-1)),
            linear-gradient(90deg, #7C3AED 0%, #1E40AF 100%);
        box-shadow: 0 6px 16px -6px rgba(124, 58, 237, 0.12), 0 18px 40px -12px rgba(124, 58, 237, 0.20);
        animation: kf_card2_fill1 9s linear infinite, kf_card2_fill2 9s linear infinite;
    }
    @keyframes kf_card2_fill1 {
        0%       { animation-timing-function: step-end;  --fill-color-1: rgba(38, 89, 229, 0.28); }
        6.009%   { animation-timing-function: linear;    --fill-color-1: rgba(38, 89, 229, 0.28); }
        16.104%  { animation-timing-function: linear;    --fill-color-1: rgba(128, 31, 199, 0.28); }
        26.198%  { animation-timing-function: linear;    --fill-color-1: rgba(13, 184, 184, 0.28); }
        36.292%  { animation-timing-function: step-end;  --fill-color-1: rgba(38, 89, 229, 0.28); }
        44.932%  { animation-timing-function: linear;    --fill-color-1: rgba(38, 89, 229, 0.28); }
        55.026%  { animation-timing-function: linear;    --fill-color-1: rgba(128, 31, 199, 0.28); }
        65.12%   { animation-timing-function: linear;    --fill-color-1: rgba(13, 184, 184, 0.28); }
        75.214%  { animation-timing-function: step-end;  --fill-color-1: rgba(38, 89, 229, 0.28); }
        86.998%  { animation-timing-function: linear;    --fill-color-1: rgba(38, 89, 229, 0.28); }
        97.092%  { animation-timing-function: linear;    --fill-color-1: rgba(128, 31, 199, 0.28); }
        100%     { --fill-color-1: rgba(38, 89, 229, 0.28); }
    }
    @keyframes kf_card2_fill2 {
        0%       { animation-timing-function: step-end;    --fill-color-2: rgba(115, 46, 242, 0.28); }
        5%       { animation-timing-function: ease-in-out; --fill-color-2: rgba(115, 46, 242, 0.28); }
        11.729%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(140, 71, 128, 0.35); }
        18.459%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(38, 46, 229, 0.28); }
        25.188%  { animation-timing-function: step-end;    --fill-color-2: rgba(115, 46, 242, 0.28); }
        43.922%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(115, 46, 242, 0.28); }
        50.652%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(140, 71, 128, 0.35); }
        57.381%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(38, 46, 229, 0.28); }
        64.111%  { animation-timing-function: step-end;    --fill-color-2: rgba(115, 46, 242, 0.28); }
        85.989%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(115, 46, 242, 0.28); }
        92.718%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(140, 71, 128, 0.35); }
        99.448%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(38, 46, 229, 0.28); }
        100%     { --fill-color-2: rgba(115, 46, 242, 0.28); }
    }

    .gradient-card-3 {
        background:
            linear-gradient(var(--fill-color-2), var(--fill-color-2)),
            linear-gradient(var(--fill-color-1), var(--fill-color-1)),
            linear-gradient(90deg, #10B981 0%, #0B4F8A 100%);
        box-shadow: 0 6px 16px -6px rgba(16, 185, 129, 0.12), 0 18px 40px -12px rgba(16, 185, 129, 0.20);
        animation: kf_card3_fill1 9s linear infinite, kf_card3_fill2 9s linear infinite;
    }
    @keyframes kf_card3_fill1 {
        0%       { animation-timing-function: step-end;  --fill-color-1: rgba(128, 31, 199, 0.28); }
        11.715%  { animation-timing-function: linear;    --fill-color-1: rgba(128, 31, 199, 0.28); }
        20.288%  { animation-timing-function: linear;    --fill-color-1: rgba(13, 184, 184, 0.28); }
        28.861%  { animation-timing-function: linear;    --fill-color-1: rgba(38, 89, 229, 0.28); }
        37.434%  { animation-timing-function: step-end;  --fill-color-1: rgba(128, 31, 199, 0.28); }
        53.522%  { animation-timing-function: linear;    --fill-color-1: rgba(128, 31, 199, 0.28); }
        62.095%  { animation-timing-function: linear;    --fill-color-1: rgba(13, 184, 184, 0.28); }
        70.668%  { animation-timing-function: linear;    --fill-color-1: rgba(38, 89, 229, 0.28); }
        79.241%  { animation-timing-function: step-end;  --fill-color-1: rgba(128, 31, 199, 0.28); }
        90.671%  { animation-timing-function: linear;    --fill-color-1: rgba(128, 31, 199, 0.28); }
        99.525%  { animation-timing-function: linear;    --fill-color-1: rgba(13, 184, 184, 0.28); }
        100%     { --fill-color-1: rgba(128, 31, 199, 0.28); }
    }
    @keyframes kf_card3_fill2 {
        0%       { animation-timing-function: step-end;    --fill-color-2: rgba(13, 199, 153, 0.28); }
        10%      { animation-timing-function: ease-in-out; --fill-color-2: rgba(13, 199, 153, 0.28); }
        15.715%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(71, 128, 102, 0.35); }
        21.431%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(0, 115, 191, 0.28); }
        27.146%  { animation-timing-function: step-end;    --fill-color-2: rgba(13, 199, 153, 0.28); }
        51.807%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(13, 199, 153, 0.28); }
        57.522%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(71, 128, 102, 0.35); }
        63.238%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(0, 115, 191, 0.28); }
        68.953%  { animation-timing-function: step-end;    --fill-color-2: rgba(13, 199, 153, 0.28); }
        88.9%    { animation-timing-function: ease-in-out; --fill-color-2: rgba(13, 199, 153, 0.28); }
        94.803%  { animation-timing-function: ease-in-out; --fill-color-2: rgba(71, 128, 102, 0.35); }
        100%     { --fill-color-2: rgba(13, 199, 153, 0.28); }
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

    /* ── Figma action buttons (Filter / Export) ─────────────────────────── */
    .figma-action-btn {
        display: inline-flex;
        height: 48px;
        padding: 14px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 12px;
        border: 1px solid #E5E7EB;
        background: transparent;
        color: #4A5568;
        font-family: Inter, sans-serif;
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .figma-action-btn:hover {
        background: linear-gradient(90deg, #0B4F8A 0.06%, #052A4A 93%);
        color: #FFF;
        border-color: transparent;
    }

    /* ── Figma date badge (Last 30 days) ────────────────────────────────── */
    .figma-date-badge {
        display: flex;
        height: 40px;
        padding: 10px 14px;
        align-items: center;
        gap: 10px;
        border-radius: 999px;
        border: 1px solid #BFDBFE;
        background: #EFF6FF;
        color: #0B4F8A;
        font-family: Inter, sans-serif;
        font-size: 13px;
        font-weight: 600;
        line-height: 1;
        cursor: pointer;
        transition: all 0.2s ease;
        white-space: nowrap;
    }
    .figma-date-badge:hover {
        background: #DBEAFE;
        border-color: #93C5FD;
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
                <button class="figma-action-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M8.45744 17.1053C8.37603 16.9736 8.33295 16.8218 8.33302 16.6669V11.6668C8.33284 11.2538 8.17929 10.8556 7.90215 10.5493L1.88074 3.89169C1.77275 3.77205 1.70177 3.62366 1.6764 3.46451C1.65104 3.30535 1.67237 3.14226 1.73781 2.99498C1.80325 2.8477 1.91 2.72255 2.04513 2.6347C2.18025 2.54685 2.33795 2.50006 2.49913 2.5H17.5006C17.6616 2.50038 17.8191 2.5474 17.954 2.63538C18.0888 2.72336 18.1953 2.84852 18.2606 2.99574C18.3258 3.14295 18.347 3.30592 18.3216 3.46492C18.2961 3.62392 18.2252 3.77215 18.1173 3.89169L12.0976 10.5493C11.8204 10.8556 11.6669 11.2538 11.6667 11.6668V17.5003C11.6667 17.6423 11.6305 17.7821 11.5613 17.9062C11.4922 18.0303 11.3925 18.1347 11.2717 18.2094C11.1508 18.2841 11.0129 18.3267 10.871 18.3331C10.729 18.3396 10.5878 18.3096 10.4607 18.2461L8.7939 17.4128C8.65536 17.3435 8.53885 17.2371 8.45744 17.1053Z"/>
                    </svg>
                    Filter
                </button>
                <button class="figma-action-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M10 7.5L10 17.5M5.83333 11.6667L10 7.5L14.1667 11.6667M2.5 7.5L2.5 4.16667C2.5 3.72464 2.6756 3.30072 2.98816 2.98816C3.30072 2.6756 3.72464 2.5 4.16667 2.5L15.8333 2.5C16.2754 2.5 16.6993 2.6756 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667L17.5 7.5"/>
                    </svg>
                    Export
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
                    <span class="figma-date-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="12" height="11" rx="1.5"/>
                            <path d="M2 6.5h12"/>
                            <path d="M5.5 1.5v3"/>
                            <path d="M10.5 1.5v3"/>
                        </svg>
                        Last 30 days
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 6l4 4 4-4"/>
                        </svg>
                    </span>
                </div>
            </div>

            <!-- Stat Cards Row -->
            <div class="row g-3">
                <!-- Card 1: Total Partnerships -->
                <div class="col-12 col-md-4">
                    <div class="stat-card-accent stat-card-blue p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="stat-icon-box d-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 40px; height: 40px; background-color: #DBEAFE; color: #0B4F8A;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                    <path d="M13.3336 17.5V15.8333C13.3336 14.9493 12.9824 14.1014 12.3572 13.4763C11.7321 12.8512 10.8841 12.5 10 12.5H4.99962C4.11549 12.5 3.26758 12.8512 2.6424 13.4763C2.01723 14.1014 1.66602 14.9493 1.66602 15.8333V17.5M13.3336 2.60661C14.0485 2.79192 14.6816 3.20933 15.1335 3.79333C15.5854 4.37733 15.8306 5.09485 15.8306 5.83327C15.8306 6.5717 15.5854 7.28922 15.1335 7.87322C14.6816 8.45722 14.0485 8.87463 13.3336 9.05994M18.334 17.4999V15.8332C18.3335 15.0947 18.0876 14.3772 17.6351 13.7935C17.1826 13.2098 16.549 12.7929 15.8338 12.6082M10.8334 5.83333C10.8334 7.67428 9.34091 9.16667 7.49982 9.16667C5.65872 9.16667 4.16622 7.67428 4.16622 5.83333C4.16622 3.99238 5.65872 2.5 7.49982 2.5C9.34091 2.5 10.8334 3.99238 10.8334 5.83333Z"/>
                                </svg>
                            </div>
                            <div class="stat-value display-5 fw-extrabold mb-1" style="color: #0B4F8A; font-weight: 800;">
                                {{ $isInsurance ? ($totalInsurance ?? 2) : ($totalBroker ?? 5) }}
                            </div>
                            <div class="stat-label fw-semibold text-secondary mb-3" style="font-size: 0.9rem;">
                                Total {{ strtolower($partnerTypeLabel) }} partnerships
                            </div>
                        </div>
                        <div>
                            <span class="stat-badge badge rounded-pill px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #DBEAFE; color: #0B4F8A;">
                                <i class="bi bi-dash"></i> {{ $isInsurance ? '+12%' : 'No change' }}
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
                                {{ $isInsurance ? ($activeInsurance ?? 1) : ($activeBroker ?? 1) }}
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
                                {{ $isInsurance ? ($awaitingInsurance ?? 1) : ($awaitingBroker ?? 2) }}
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
                            <a href="{{ route('add-partner') }}" class="btn btn-empty-state-cta fw-bold shadow-sm">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round">
                <path d="M13.3336 17.5V15.8333C13.3336 14.9493 12.9824 14.1014 12.3572 13.4763C11.7321 12.8512 10.8841 12.5 10 12.5H4.99962C4.11549 12.5 3.26758 12.8512 2.6424 13.4763C2.01723 14.1014 1.66602 14.9493 1.66602 15.8333V17.5M13.3336 2.60661C14.0485 2.79192 14.6816 3.20933 15.1335 3.79333C15.5854 4.37733 15.8306 5.09485 15.8306 5.83327C15.8306 6.5717 15.5854 7.28922 15.1335 7.87322C14.6816 8.45722 14.0485 8.87463 13.3336 9.05994M18.334 17.4999V15.8332C18.3335 15.0947 18.0876 14.3772 17.6351 13.7935C17.1826 13.2098 16.549 12.7929 15.8338 12.6082M10.8334 5.83333C10.8334 7.67428 9.34091 9.16667 7.49982 9.16667C5.65872 9.16667 4.16622 7.67428 4.16622 5.83333C4.16622 3.99238 5.65872 2.5 7.49982 2.5C9.34091 2.5 10.8334 3.99238 10.8334 5.83333Z"/>
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
                    <div class="metric-badge mb-3">
                        <div class="metric-badge-icon">
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
                        <span class="fw-bold text-white-90">Insurance Providers</span>
                    </div>
                    <div class="metric-value mb-2">
                        {{ $totalProviders ?? 2 }}
                        <span class="metric-trend-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
                                <polyline points="16 7 22 7 22 13"/>
                            </svg>
                            +12%
                        </span>
                    </div>
                </div>
                <div class="metric-footer mt-2">
                    Active providers connected to the platform
                </div>
            </div>
        </div>

        <!-- Brokers Metric Card -->
        <div class="col-12 col-md-4">
            <div class="gradient-metric-card gradient-card-2 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="metric-badge mb-3">
                        <div class="metric-badge-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                                <rect width="20" height="14" x="2" y="6" rx="2"/>
                            </svg>
                        </div>
                        <span class="fw-bold text-white-90">Insurance Brokers</span>
                    </div>
                    <div class="metric-value mb-2">
                        {{ $totalBroker ?? 0 }}
                        <span class="metric-trend-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
                                <polyline points="16 7 22 7 22 13"/>
                            </svg>
                            +0%
                        </span>
                    </div>
                </div>
                <div class="metric-footer mt-2">
                    Broker accounts onboarded this period
                </div>
            </div>
        </div>

        <!-- TPAs Metric Card -->
        <div class="col-12 col-md-4">
            <div class="gradient-metric-card gradient-card-3 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="metric-badge mb-3">
                        <div class="metric-badge-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                                <rect width="8" height="4" x="8" y="2" rx="1"/>
                            </svg>
                        </div>
                        <span class="fw-bold text-white-90">Third Party Administrators</span>
                    </div>
                    <div class="metric-value mb-2">
                        {{ $totalTpas ?? 1 }}
                        <span class="metric-trend-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
                                <polyline points="16 7 22 7 22 13"/>
                            </svg>
                            +8%
                        </span>
                    </div>
                </div>
                <div class="metric-footer mt-2">
                    TPA integrations currently active
                </div>
            </div>
        </div>
    </div>
</div>
@endsection