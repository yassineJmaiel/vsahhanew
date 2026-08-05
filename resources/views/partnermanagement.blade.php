@extends('theme')

@section('content')
    <div class="container-fluid py-4">
        <!-- Start Main Content Area -->
        <div id="main-content">

        <!-- Start Header Section -->
        <div class="row mb-4 align-items-center">
            <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                <h1 class="page-header-title">Partner Management</h1>
                <p class="page-header-subtitle mb-0">Manage relationships with insurance providers, brokers, and third-party
                    administrators</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="d-flex flex-wrap justify-content-lg-end gap-3 align-items-center">
                    <div class="search-input-wrapper flex-grow-1 flex-lg-grow-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            style="flex-shrink: 0;">
                            <path
                                d="M6.875 11.875C9.63642 11.875 11.875 9.63642 11.875 6.875C11.875 4.11358 9.63642 1.875 6.875 1.875C4.11358 1.875 1.875 4.11358 1.875 6.875C1.875 9.63642 4.11358 11.875 6.875 11.875Z"
                                stroke="#9CA3AF" stroke-width="1.25" />
                            <path d="M13.125 13.125L10.4062 10.4062" stroke="#9CA3AF" stroke-width="1.25" />
                        </svg>
                        <input type="text" placeholder="Search metrics...">
                    </div>
                    <button class="btn btn-custom-primary d-flex align-items-center gap-2" onclick="display()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"
                            style="flex-shrink: 0;">
                            <path d="M3.33276 7.99996H12.6672M7.99996 3.33276V12.6672" stroke="white" stroke-width="2"
                                stroke-linecap="round" />
                        </svg> Add Partner
                    </button>
                    <button class="btn action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"
                            style="flex-shrink: 0;">
                            <path
                                d="M2 8C2 6.4087 2.63214 4.88258 3.75736 3.75736C4.88258 2.63214 6.4087 2 8 2C9.67737 2.00631 11.2874 2.66082 12.4933 3.82667L14 5.33333M10.6667 5.33333H14V2M14 8C14 9.5913 13.3679 11.1174 12.2426 12.2426C11.1174 13.3679 9.5913 14 8 14C6.32263 13.9937 4.71265 13.3392 3.50667 12.1733L2 10.6667M2 14V10.6667H5.33333"
                                stroke="#1E293B" stroke-width="2" stroke-linecap="round" />
                        </svg> Refresh
                    </button>
                    <button class="btn action-btn d-flex align-items-center justify-content-center p-0"
                        style="width: 37px; height: 37px; border-radius: 8px; padding: 0 !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            style="flex-shrink: 0;">
                            <g clip-path="url(#clip0_369_14)">
                                <path
                                    d="M12.75 5.66663C12.75 4.53946 12.3022 3.45845 11.5052 2.66142C10.7082 1.86439 9.62717 1.41663 8.5 1.41663C7.37283 1.41663 6.29183 1.86439 5.4948 2.66142C4.69777 3.45845 4.25 4.53946 4.25 5.66663C4.25 10.625 2.125 12.0416 2.125 12.0416H14.875C14.875 12.0416 12.75 10.625 12.75 5.66663Z"
                                    stroke="#4A5568" stroke-width="1.41667" />
                                <path
                                    d="M9.72537 14.875C9.60084 15.0897 9.42209 15.2679 9.20703 15.3918C8.99197 15.5156 8.74814 15.5808 8.49995 15.5808C8.25177 15.5808 8.00794 15.5156 7.79288 15.3918C7.57781 15.2679 7.39907 15.0897 7.27454 14.875"
                                    stroke="#4A5568" stroke-width="1.41667" />
                            </g>
                            <defs>
                                <clipPath id="clip0_369_14">
                                    <rect width="17" height="17" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Header Section -->

        <!-- Start Filters -->
        <div class="row mb-4 align-items-center">
            <div class="col-lg-8 col-12 mb-3 mb-lg-0">
                <ul class="nav nav-pills filter-pills gap-2 flex-nowrap overflow-auto pb-2 pb-lg-0"
                    style="white-space: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All Partners <span class="badge">4</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Insurance <span class="badge">3</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Brokers <span class="badge">0</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TPAs <span class="badge">1</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-12">
                <div class="d-flex justify-content-lg-end gap-2">
                    <button class="btn filter-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            style="flex-shrink: 0;">
                            <path
                                d="M8.45744 17.1053C8.37603 16.9736 8.33295 16.8218 8.33302 16.6669V11.6668C8.33284 11.2538 8.17929 10.8556 7.90215 10.5493L1.88074 3.89169C1.77275 3.77205 1.70177 3.62366 1.6764 3.46451C1.65104 3.30535 1.67237 3.14226 1.73781 2.99498C1.80325 2.8477 1.91 2.72255 2.04513 2.6347C2.18025 2.54685 2.33795 2.50006 2.49913 2.5H17.5006C17.6616 2.50038 17.8191 2.5474 17.954 2.63538C18.0888 2.72336 18.1953 2.84852 18.2606 2.99574C18.3258 3.14295 18.347 3.30592 18.3216 3.46492C18.2961 3.62392 18.2252 3.77215 18.1173 3.89169L12.0976 10.5493C11.8204 10.8556 11.6669 11.2538 11.6667 11.6668V17.5003C11.6667 17.6423 11.6305 17.7821 11.5613 17.9062C11.4922 18.0303 11.3925 18.1347 11.2717 18.2094C11.1508 18.2841 11.0129 18.3267 10.871 18.3331C10.729 18.3396 10.5878 18.3096 10.4607 18.2461L8.7939 17.4128C8.65536 17.3435 8.53885 17.2371 8.45744 17.1053Z"
                                stroke="#4A5568" stroke-width="2" stroke-linecap="round" />
                        </svg> Filter
                    </button>
                    <button class="btn filter-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            style="flex-shrink: 0;">
                            <path
                                d="M10 7.5L10 17.5M5.83333 11.6667L10 7.5L14.1667 11.6667M2.5 7.5L2.5 4.16667C2.5 3.72464 2.6756 3.30072 2.98816 2.98816C3.30072 2.6756 3.72464 2.5 4.16667 2.5L15.8333 2.5C16.2754 2.5 16.6993 2.6756 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667L17.5 7.5"
                                stroke="#4A5568" stroke-width="2" stroke-linecap="round" />
                        </svg> Export
                    </button>
                </div>
            </div>
        </div>
        <!-- End Filters -->

        <!-- Start Statistics -->
        @php
            $stats = [
                [
                    'title' => 'Total Partners',
                    'value' => '4',
                    'color' => 'blue',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.16662 14.1675L10.8334 15.8342C10.9976 15.9984 11.1925 16.1286 11.407 16.2174C11.6215 16.3063 11.8514 16.352 12.0835 16.352C12.3157 16.352 12.5456 16.3063 12.7601 16.2174C12.9746 16.1286 13.1694 15.9984 13.3336 15.8342C13.4978 15.6701 13.628 15.4752 13.7168 15.2607C13.8057 15.0462 13.8514 14.8164 13.8514 14.5842C13.8514 14.3521 13.8057 14.1222 13.7168 13.9077C13.628 13.6932 13.4978 13.4984 13.3336 13.3342M11.667 11.6671L13.7505  13.7505C14.0821 14.082 14.5317 14.2683 15.0006 14.2683C15.4695 14.2683 15.9192 14.082 16.2507 13.7505C16.5823 13.419 16.7685 12.9693 16.7685 12.5005C16.7685 12.0316 16.5823 11.582 16.2507 11.2505L13.0171 8.01712C12.5483 7.54895 11.9129 7.28598 11.2503 7.28598C10.5877 7.28598 9.95228 7.54895 9.4835 8.01712L8.7501 8.75046C8.41856 9.08198 7.96888 9.26823 7.5 9.26823C7.03113 9.26823 6.58145 9.08198 6.2499 8.75046C5.91836 8.41893 5.7321 7.96929 5.7321 7.50045C5.7321 7.0316 5.91836 6.58196 6.2499 6.25044L8.59176 3.90876C9.35202 3.15054 10.3435 2.66755 11.4092 2.53623C12.4749 2.40491 13.554 2.63278 14.4756 3.18376L14.8673 3.41709C15.2221 3.63125 15.644 3.70552 16.0507 3.62543L17.5008 3.33376M17.5006 2.50081L18.334 11.6675H16.6672M2.49942 2.50081L1.66602 11.6675L7.08312 17.0842C7.41466 17.4158 7.86434 17.602 8.33322 17.602C8.80209 17.602 9.25177 17.4158 9.58332 17.0842C9.91486 16.7527 10.1011 16.3031 10.1011 15.8342C10.1011 15.3654 9.91486 14.9157 9.58332 14.5842M2.49942 3.33415H9.16662" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                    'border' => '#0B4F8A'
                ],
                [
                    'title' => 'Active Partners',
                    'value' => '3',
                    'color' => 'green',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none"><path d="M17.4989 7.66951C17.8795 9.53725 17.6082 11.479 16.7304 13.171C15.8526 14.863 14.4213 16.2029 12.6751 16.9673C10.929 17.7317 8.97357 17.8743 7.13496 17.3715C5.29636 16.8686 3.68571 15.7507 2.57161 14.204C1.45752 12.6574 0.907317 10.7755 1.01277 8.87233C1.11822 6.96912 1.87295 5.15958 3.15109 3.74548C4.42923 2.33138 6.15353 1.3982 8.03644 1.10155C9.91934 0.804903 11.847 1.16272 13.498 2.11534M6.83171 8.50244L9.33171 11.0024L17.665 2.66911" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                    'border' => '#00A878'
                ],
                [
                    'title' => 'Pending Approvals',
                    'value' => '0',
                    'color' => 'yellow',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 4.99962V10L13.3336 11.6668M18.334 10C18.334 14.6028 14.6028 18.334 10 18.334C5.39727 18.334 1.66602 14.6028 1.66602 10C1.66602 5.39727 5.39727 1.66602 10 1.66602C14.6028 1.66602 18.334 5.39727 18.334 10Z" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                    'border' => '#F59E0B'
                ],
                [
                    'title' => 'Incomplete',
                    'value' => '1',
                    'color' => 'red',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.99996 7.49943V10.8328M9.99996 14.1661H10.0083M18.1086 14.9996L11.442 3.33295C11.2966 3.07645 11.0858 2.86311 10.8311 2.71467C10.5763 2.56624 10.2868 2.48804 9.99197 2.48804C9.69715 2.48804 9.4076 2.56624 9.15287 2.71467C8.89814 2.86311 8.68734 3.07645 8.54197 3.33295L1.87531 14.9996C1.72838 15.2541 1.65133 15.5429 1.65198 15.8367C1.65263 16.1305 1.73096 16.419 1.87901 16.6728C2.02707 16.9266 2.2396 17.1368 2.49505 17.282C2.75051 17.4272 3.03981 17.5023 3.33364 17.4996H16.667C16.9594 17.4993 17.2466 17.4221 17.4997 17.2757C17.7528 17.1293 17.963 16.9189 18.1091 16.6655C18.2551 16.4122 18.332 16.1249 18.3319 15.8325C18.3319 15.5401 18.2548 15.2529 18.1086 14.9996Z" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                    'border' => '#EF4444'
                ],
            ];
        @endphp
        <div class="row g-3 mb-4">
            @foreach($stats as $stat)
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-border" style="background: {{ $stat['border'] }};"></div>
                        <div class="stat-icon {{ $stat['color'] }}">
                            {!! $stat['svg'] !!}
                        </div>
                        <div>
                            <h3 class="stat-value text-{{ $stat['color'] }}">{{ $stat['value'] }}</h3>
                            <p class="stat-label">{{ $stat['title'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Statistics -->

        <div class="row g-4">
            <!-- Start Partner List Column -->
            <div class="col-lg-8 col-12">
                <div id="partner-list-card" class="partner-list-container">
                    <div class="partner-list-header">
                        <h5 class="mb-0 fw-bold">Partner List</h5>
                        <span class="text-muted-custom fs-7">4 partners</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table partner-table mb-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Partner</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Contract</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $partners = [
                                        [
                                            'logo' => 'AP',
                                            'name' => 'Allianz Partners Middle East & Africa',
                                            'desc' => 'Provides travel and health insurance solutions for corporate clients across the MENA region.',
                                            'contact_name' => 'Amira Hassan',
                                            'contact_email' => 'amira.hassan@allianz.com',
                                            'coverage' => 'MENA',
                                            'specialty' => 'Travel & Health',
                                            'policies' => '12,480',
                                            'members' => '38,200',
                                            'type' => 'Insurance Provider',
                                            'type_icon' => 'bi-shield',
                                            'location' => 'Eiffel 2, Sheikh Zayed Road, Dubai, AE',
                                            'status' => 'Active',
                                            'contract' => 'N/A - Ongoing'
                                        ],
                                        [
                                            'logo' => 'AE',
                                            'name' => 'Allianz Partners Europe',
                                            'desc' => 'Offers employee benefits and travel insurance programs for multinational employers across Europe.',
                                            'contact_name' => 'Luca Rossi',
                                            'contact_email' => 'luca.rossi@allianz.eu',
                                            'coverage' => 'Europe',
                                            'specialty' => 'Employee Benefits',
                                            'policies' => '9,120',
                                            'members' => '24,900',
                                            'type' => 'Insurance Provider',
                                            'type_icon' => 'bi-shield',
                                            'location' => '15 Joyce Way, Parkwest Business Campus...',
                                            'status' => 'Active',
                                            'contract' => 'N/A - Ongoing'
                                        ],
                                        [
                                            'logo' => 'TPA',
                                            'name' => 'TPA Solutions',
                                            'desc' => 'Third-party administrator focused on claims processing and provider network management for health plans.',
                                            'contact_name' => 'Omar Al-Khateeb',
                                            'contact_email' => 'omar@tpasolutions.ae',
                                            'coverage' => 'UAE',
                                            'specialty' => 'Claims & Network',
                                            'policies' => '4,300',
                                            'members' => '11,600',
                                            'type' => 'TPA',
                                            'type_icon' => 'bi-shield-shaded',
                                            'location' => 'Dubai, UAE',
                                            'status' => 'Pending',
                                            'contract' => 'Draft'
                                        ],
                                        [
                                            'logo' => 'HA',
                                            'name' => 'HAKA',
                                            'desc' => 'Strategic partner for comprehensive insurance services.',
                                            'contact_name' => 'HAKA Representative',
                                            'contact_email' => 'info@haka.com',
                                            'coverage' => 'Global',
                                            'specialty' => 'Insurance Services',
                                            'policies' => '2,500',
                                            'members' => '8,000',
                                            'type' => 'Insurance Provider',
                                            'type_icon' => 'bi-shield',
                                            'location' => 'Global',
                                            'status' => 'Active',
                                            'contract' => 'Draft'
                                        ]
                                    ];
                                @endphp

                                @foreach($partners as $partner)
                                    <tr style="cursor: pointer;" onclick="openPartnerDetails({{ json_encode($partner) }})">
                                        <td style="min-width: 350px;">
                                            <div class="d-flex gap-3">
                                                <div class="partner-logo">{{ $partner['logo'] }}</div>
                                                <div>
                                                    <h6 class="partner-name">{{ $partner['name'] }}</h6>
                                                    <p class="partner-desc">{{ $partner['desc'] }}</p>
                                                    <ul class="partner-meta-list">
                                                        <li class="partner-meta-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 14 14" fill="none">
                                                                <path
                                                                    d="M11.0839 12.25V11.0833C11.0839 10.4645 10.838 9.871 10.4004 9.43342C9.96273 8.99583 9.36917 8.75 8.75026 8.75H5.24986C4.63095 8.75 4.03739 8.99583 3.59976 9.43342C3.16212 9.871 2.91626 10.4645 2.91626 11.0833V12.25M9.33366 4.08333C9.33366 5.372 8.28887 6.41667 7.00006 6.41667C5.71125 6.41667 4.66646 5.372 4.66646 4.08333C4.66646 2.79467 5.71125 1.75 7.00006 1.75C8.28887 1.75 9.33366 2.79467 9.33366 4.08333Z"
                                                                    stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" />
                                                            </svg>
                                                            <div><span
                                                                    style="color: #4A5568">{{ $partner['contact_name'] }}</span>
                                                                <span style="color: #9CA3AF">•
                                                                    {{ $partner['contact_email'] }}</span></div>
                                                        </li>
                                                        <li class="partner-meta-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 14 14" fill="none">
                                                                <g clip-path="url(#clip0_49_1593)">
                                                                    <path
                                                                        d="M12.8339 7.00006C12.8339 10.222 10.222 12.8339 7.00006 12.8339M12.8339 7.00006C12.8339 3.77814 10.222 1.16626 7.00006 1.16626M12.8339 7.00006H1.16626M7.00006 12.8339C3.77814 12.8339 1.16626 10.222 1.16626 7.00006M7.00006 12.8339C5.50208 11.261 4.66654 9.17214 4.66654 7.00006C4.66654 4.82798 5.50208 2.73914 7.00006 1.16626M7.00006 12.8339C8.49804 11.261 9.33358 9.17214 9.33358 7.00006C9.33358 4.82798 8.49804 2.73914 7.00006 1.16626M7.00006 1.16626C3.77814 1.16626 1.16626 3.77814 1.16626 7.00006"
                                                                        stroke="#9CA3AF" stroke-width="2"
                                                                        stroke-linecap="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_49_1593">
                                                                        <rect width="14" height="14" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <div><span style="color: #9CA3AF">Coverage:</span> <span
                                                                    style="color: #4A5568">{{ $partner['coverage'] }}</span>
                                                                <span style="color: #9CA3AF">• Specialty:</span> <span
                                                                    style="color: #4A5568">{{ $partner['specialty'] }}</span>
                                                            </div>
                                                        </li>
                                                        <li class="partner-meta-item">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 14 14" fill="none">
                                                                <g clip-path="url(#clip0_49_1597)">
                                                                    <path
                                                                        d="M9.33358 12.25V11.0833C9.33358 10.4645 9.08773 9.871 8.65011 9.43342C8.21249 8.99583 7.61895 8.75 7.00006 8.75H3.49978C2.88089 8.75 2.28735 8.99583 1.84973 9.43342C1.41211 9.871 1.16626 10.4645 1.16626 11.0833V12.25M9.33358 1.82463C9.83398 1.95434 10.2771 2.24653 10.5935 2.65533C10.9099 3.06413 11.0815 3.56639 11.0815 4.08329C11.0815 4.60019 10.9099 5.10246 10.5935 5.51126C10.2771 5.92005 9.83398 6.21224 9.33358 6.34196M12.8339 12.2499V11.0833C12.8335 10.5663 12.6614 10.064 12.3446 9.65545C12.0278 9.24685 11.5843 8.95501 11.0837 8.82576M7.58344 4.08333C7.58344 5.372 6.53869 6.41667 5.24992 6.41667C3.96115 6.41667 2.9164 5.372 2.9164 4.08333C2.9164 2.79467 3.96115 1.75 5.24992 1.75C6.53869 1.75 7.58344 2.79467 7.58344 4.08333Z"
                                                                        stroke="#9CA3AF" stroke-width="2"
                                                                        stroke-linecap="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_49_1597">
                                                                        <rect width="14" height="14" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <div><span style="color: #4A5568">{{ $partner['policies'] }}</span>
                                                                <span style="color: #9CA3AF">active policies •</span> <span
                                                                    style="color: #4A5568">{{ $partner['members'] }}</span>
                                                                <span style="color: #9CA3AF">members covered</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="detail-cell">
                                                <div class="detail-icon-wrapper">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M6.66652 8H9.3334M6.66652 5.33333H9.3334M9.3334 14V12C9.3334 11.6464 9.19292 11.3072 8.94285 11.0572C8.69278 10.8071 8.35361 10.6667 7.99996 10.6667C7.64631 10.6667 7.30715 10.8071 7.05708 11.0572C6.80701 11.3072 6.66652 11.6464 6.66652 12V14M3.99964 6.66667H2.6662C2.31255 6.66667 1.97339 6.80714 1.72332 7.05719C1.47325 7.30724 1.33276 7.64638 1.33276 8V12.6667C1.33276 13.0203 1.47325 13.3594 1.72332 13.6095C1.97339 13.8595 2.31255 14 2.6662 14H13.3337C13.6874 14 14.0265 13.8595 14.2766 13.6095C14.5267 13.3594 14.6672 13.0203 14.6672 12.6667V6C14.6672 5.64638 14.5267 5.30724 14.2766 5.05719C14.0265 4.80714 13.6874 4.66667 13.3337 4.66667H12.0003M3.99964 14V3.33333C3.99964 2.97971 4.14013 2.64057 4.3902 2.39052C4.64027 2.14048 4.97943 2 5.33308 2H10.6668C11.0205 2 11.3597 2.14048 11.6097 2.39052C11.8598 2.64057 12.0003 2.97971 12.0003 3.33333V14"
                                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <span>{{ $partner['type'] }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="detail-cell">
                                                <i class="bi bi-geo-alt"></i> {{ Str::limit($partner['location'], 40) }}
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="status-badge {{ strtolower($partner['status']) }}">{{ $partner['status'] }}</span>
                                        </td>
                                        <td>
                                            <div class="detail-cell">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <path
                                                        d="M9.33323 1.33277H4.00044C3.64685 1.33277 3.30774 1.47325 3.05772 1.72332C2.8077 1.97339 2.66724 2.31256 2.66724 2.66621V13.3337C2.66724 13.6874 2.8077 14.0265 3.05772 14.2766C3.30774 14.5267 3.64685 14.6672 4.00044 14.6672H11.9996C12.3532 14.6672 12.6923 14.5267 12.9423 14.2766C13.1924 14.0265 13.3328 13.6874 13.3328 13.3337V5.33309M9.33323 1.33277C9.54425 1.33242 9.75325 1.37384 9.94819 1.45462C10.1431 1.53541 10.3202 1.65396 10.4691 1.80347L12.8609 4.19566C13.0108 4.34468 13.1296 4.52192 13.2106 4.71714C13.2916 4.91237 13.3332 5.12171 13.3328 5.33309M9.33323 1.33277V4.66636C9.33323 4.84319 9.40347 5.01277 9.52848 5.1378C9.65349 5.26284 9.82304 5.33308 9.99983 5.33308L13.3328 5.33309M6.66684 5.9998H5.33364M10.6664 8.66668H5.33364M10.6664 11.3336H5.33364"
                                                        stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                <span>{{ $partner['contract'] }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Start Partner Details View -->
                <div id="partner-details-view" style="display: none;">
                    <!-- Back to Partners Link Header -->
                    <div class="mb-3">
                        <a href="#" onclick="showPartnerList(event)" class="text-decoration-none fw-semibold d-inline-flex align-items-center gap-2" style="color: #0B4F8A; font-size: 14px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8.00021 3.33276L3.33301 7.99996L8.00021 12.6672M3.33301 7.99996H12.6674" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Back to Partners
                        </a>
                    </div>

                    <!-- Main Card Container -->
                    <div class="card shadow-sm border-0 rounded-4 overflow-hidden mb-4">
                        <!-- Top Dark Blue Card Header -->
                        <div style="display: flex; height: 56px; padding: 0 20px; justify-content: space-between; align-items: center; background: #0B4F8A;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div style="display: flex; height: 28px; padding: 5px 3px 5px 7px; justify-content: flex-end; align-items: center; border-radius: 8px; background: rgba(255, 255, 255, 0.12);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="width: 18px; height: 18px;">
                                        <path d="M12.75 15.75V14.25C12.75 13.4544 12.4339 12.6913 11.8713 12.1287C11.3087 11.5661 10.5456 11.25 9.75 11.25H3.75C2.95435 11.25 2.19129 11.5661 1.62868 12.1287C1.06607 12.6913 0.75 13.4544 0.75 14.25V15.75" stroke="white" stroke-width="1.5"/>
                                        <path d="M6.75 8.25C8.40685 8.25 9.75 6.90685 9.75 5.25C9.75 3.59315 8.40685 2.25 6.75 2.25C5.09315 2.25 3.75 3.59315 3.75 5.25C3.75 6.90685 5.09315 8.25 6.75 8.25Z" stroke="white" stroke-width="1.5"/>
                                    </svg>
                                </div>
                                <h5 class="mb-0" style="color: #FFF; font-family: Inter, sans-serif; font-size: 16px; font-weight: 700; line-height: normal;">
                                    Partner Details
                                </h5>
                            </div>
                            <button type="button" class="btn text-white p-0 border-0 d-flex align-items-center" onclick="showPartnerList(event)" style="opacity: 0.85; background: transparent;">
                                <i class="bi bi-x-circle-fill fs-5"></i>
                            </button>
                        </div>

                        <div class="card-body p-4 bg-white">

                            <!-- Top Partner Banner Box -->
                            <div class="mb-4" style="display: flex; padding: 16px; justify-content: space-between; align-items: flex-start; gap: 16px; align-self: stretch; border-radius: 12px; border: 1px solid #E2E8F0; background: #FFF; box-shadow: 0 6px 16px -8px rgba(0, 0, 0, 0.04); flex-wrap: wrap;">
                                <!-- Left: Logo & Info -->
                                <div class="d-flex align-items-start gap-3 flex-wrap flex-grow-1" style="max-width: 100%;">
                                    <!-- Logo Box -->
                                    <div id="detail_logo_box" style="display: flex; width: 56px; height: 56px; flex-direction: column; justify-content: center; align-items: center; flex-shrink: 0; border-radius: 14px; background: linear-gradient(90deg, #015AA7 0%, #1C4E7A 100%); color: #FFF; font-family: Inter, sans-serif; font-size: 24px; font-weight: 700;">
                                        AP
                                    </div>

                                    <div class="flex-grow-1" style="min-width: 250px;">
                                        <h4 id="detail_partner_name" class="mb-2" style="color: #1A202C; font-family: Inter, sans-serif; font-size: 14px; font-weight: 600; line-height: normal;">
                                            Allianz Partners Middle East & Africa
                                        </h4>
                                        <div class="d-flex align-items-center flex-wrap gap-2 mb-2">
                                            <!-- Partner Type Badge -->
                                            <div style="display: flex; padding: 6px 10px; align-items: center; gap: 6px; border-radius: 999px; border: 1px solid #E2E8F0; background: #FFF;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <g clip-path="url(#clip0_1009_403)">
                                                        <path d="M6.99994 5.8333H7.00577M6.99994 8.16682H7.00577M6.99994 3.49978H7.00577M9.33304 5.8333H9.33887M9.33304 8.16682H9.33887M9.33304 3.49978H9.33887M4.66684 5.8333H4.67267M4.66684 8.16682H4.67267M4.66684 3.49978H4.67267M5.25012 12.8339V11.0837C5.25012 10.929 5.31157 10.7806 5.42095 10.6712C5.53034 10.5618 5.6787 10.5003 5.83339 10.5003H8.16649C8.32118 10.5003 8.46954 10.5618 8.57893 10.6712C8.68831 10.7806 8.74976 10.929 8.74976 11.0837V12.8339M3.50029 1.16626H10.4996C11.1439 1.16626 11.6661 1.68864 11.6661 2.33302V11.6671C11.6661 12.3115 11.1439 12.8339 10.4996 12.8339H3.50029C2.85602 12.8339 2.33374 12.3115 2.33374 11.6671V2.33302C2.33374 1.68864 2.85602 1.16626 3.50029 1.16626Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1009_403">
                                                            <rect width="14" height="14" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span id="detail_partner_type_text" style="color: #0B4F8A; font-family: Inter, sans-serif; font-size: 12px; font-weight: 700;">Insurance Provider</span>
                                            </div>

                                            <!-- Partner ID Badge -->
                                            <div style="display: flex; padding: 6px 10px; align-items: center; gap: 6px; border-radius: 999px; background: #FFF;">
                                                <span id="detail_partner_code" style="color: #64748B; font-family: Inter, sans-serif; font-size: 12px; font-weight: 400;">Partner ID: STA-INS-002</span>
                                            </div>
                                        </div>

                                        <!-- Edit Partner Link -->
                                        <div>
                                            <a href="#" onclick="display()" class="text-decoration-none d-inline-flex align-items-center gap-1.5" style="color: #0B4F8A; font-family: Inter, sans-serif; font-size: 12px; font-weight: 700;">
                                                Edit Partner
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none" style="width: 14px; height: 14px; flex-shrink: 0;">
                                                    <g clip-path="url(#clip0_1148_684)">
                                                        <path d="M8.75027 2.91623L11.0838 5.24952M12.3521 3.97343C12.6605 3.6651 12.8338 3.24689 12.8339 2.81079C12.8339 2.37468 12.6607 1.95642 12.3523 1.64802C12.044 1.33961 11.6257 1.16631 11.1896 1.16626C10.7534 1.16621 10.3351 1.33939 10.0267 1.64772L2.24082 9.43451C2.10537 9.56955 2.0052 9.73581 1.94912 9.91866L1.17847 12.4573C1.1634 12.5077 1.16226 12.5613 1.17518 12.6124C1.1881 12.6634 1.2146 12.71 1.25186 12.7472C1.28912 12.7844 1.33577 12.8108 1.38683 12.8237C1.4379 12.8365 1.49149 12.8353 1.54192 12.8201L4.0814 12.0501C4.2641 11.9946 4.43036 11.895 4.56561 11.7602L12.3521 3.97343Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1148_684">
                                                            <rect width="14" height="14" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right: Status Badge & Population Metrics -->
                                <div style="display: flex; width: 260px; flex-direction: column; align-items: flex-start; gap: 10px;">
                                    <!-- Status Badge -->
                                    <div style="display: flex; padding: 6px 10px; align-items: center; gap: 8px; border-radius: 999px; border: 1px solid #A7F3D0; background: #D1FAE5;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_1009_406)">
                                                <path d="M12.7168 5.83345C12.9832 7.14087 12.7934 8.50011 12.1789 9.6845C11.5644 10.8689 10.5625 11.8068 9.3402 12.3419C8.1179 12.877 6.7491 12.9768 5.46208 12.6248C4.17505 12.2728 3.0476 11.4903 2.26773 10.4076C1.48786 9.32496 1.10272 8.00767 1.17654 6.67542C1.25036 5.34318 1.77867 4.0765 2.67337 3.08663C3.56807 2.09676 4.77508 1.44353 6.09311 1.23588C7.41114 1.02823 8.76053 1.2787 9.91624 1.94553M5.2498 6.4165L6.9998 8.1665L12.8331 2.33317" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1009_406">
                                                    <rect width="14" height="14" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span id="detail_status_badge_text" style="color: #065F46; font-family: Inter, sans-serif; font-size: 12px; font-weight: 700;">Active</span>
                                    </div>

                                    <!-- Row for Metrics -->
                                    <div style="display: flex; gap: 10px; align-self: stretch;">
                                        <!-- Total Population Box -->
                                        <div style="display: flex; padding: 10px; flex-direction: column; align-items: flex-start; gap: 2px; flex: 1 0 0; border-radius: 10px; border: 1px solid #E2E8F0; background: #F8FAFC;">
                                            <div style="color: #64748B; font-family: Inter, sans-serif; font-size: 11px; font-weight: 600;">Total Population</div>
                                            <div id="detail_total_population" style="color: #0F172A; font-family: Inter, sans-serif; font-size: 16px; font-weight: 800;">1</div>
                                        </div>

                                        <!-- Active Population Box -->
                                        <div style="display: flex; padding: 10px; flex-direction: column; align-items: flex-start; gap: 2px; flex: 1 0 0; border-radius: 10px; border: 1px solid #E2E8F0; background: #F8FAFC;">
                                            <div style="color: #64748B; font-family: Inter, sans-serif; font-size: 11px; font-weight: 600;">Active Population</div>
                                            <div id="detail_active_population" style="color: #0F172A; font-family: Inter, sans-serif; font-size: 16px; font-weight: 800;">1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4 Grid Sections (2x2) -->
                            <div class="row g-4">

                                <!-- 1. Contract Info Card -->
                                <div class="col-lg-6">
                                    <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important; font-family: 'Inter', sans-serif;">
                                        <div class="d-flex align-items-center gap-3 mb-4">
                                            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px; background-color: #DBEAFE; border-radius: 12px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M10.4997 1.49951H4.50034C4.10255 1.49951 3.72106 1.65756 3.43978 1.93889C3.15851 2.22022 3.00049 2.60178 3.00049 2.99963V15.0006C3.00049 15.3984 3.15851 15.78 3.43978 16.0613C3.72106 16.3427 4.10255 16.5007 4.50034 16.5007H13.4994C13.8972 16.5007 14.2787 16.3427 14.56 16.0613C14.8413 15.78 14.9993 15.3984 14.9993 15.0006V5.99987M10.4997 1.49951C10.7371 1.49913 10.9723 1.54572 11.1916 1.6366C11.4109 1.72748 11.61 1.86086 11.7776 2.02906L14.4683 4.72027C14.637 4.88791 14.7707 5.08731 14.8618 5.30694C14.953 5.52657 14.9997 5.76208 14.9993 5.99987M10.4997 1.49951V5.24981C10.4997 5.44874 10.5787 5.63952 10.7194 5.78018C10.86 5.92085 11.0508 5.99987 11.2497 5.99987L14.9993 5.99987M7.50004 6.74993H6.00019M11.9996 9.75017H6.00019M11.9996 12.7504H6.00019" stroke="#1D4ED8" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h5 class="mb-0" style="color: #0F172A; font-size: 16px; font-weight: 800;">Contract Info</h5>
                                                <div style="color: #64748B; font-size: 12px;">Key contract details and billing settings</div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column gap-3">
                                            <!-- Contract Start -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M5.33333 1.33276V3.99964M10.6667 1.33276V3.99964M2 6.66652H14M3.33333 2.6662H12.6667C13.403 2.6662 14 3.26321 14 3.99964V13.3337C14 14.0702 13.403 14.6672 12.6667 14.6672H3.33333C2.59695 14.6672 2 14.0702 2 13.3337V3.99964C2 3.26321 2.59695 2.6662 3.33333 2.6662Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Contract Start</div>
                                                    <div id="detail_contract_start" style="color: #334155; font-size: 14px; font-weight: 600;">2025-10-01</div>
                                                </div>
                                            </div>

                                            <!-- Contract End -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                                        <path d="M4.33333 1V3.66688M9.66667 1V3.66688M1 6.33376H13M2.33333 2.33344H11.6667C12.403 2.33344 13 2.93044 13 3.66688V13.001C13 13.7374 12.403 14.3344 11.6667 14.3344H2.33333C1.59695 14.3344 1 13.7374 1 13.001V3.66688C1 2.93044 1.59695 2.33344 2.33333 2.33344Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Contract End</div>
                                                    <div id="detail_contract_end" style="color: #334155; font-size: 14px; font-weight: 600;">2029-12-02</div>
                                                </div>
                                            </div>

                                            <!-- Contract No. -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                                        <path d="M8.49925 1H2.49985C2.10206 1 1.72057 1.15805 1.4393 1.43938C1.15802 1.7207 1 2.10227 1 2.50012V14.5011C1 14.8989 1.15802 15.2805 1.4393 15.5618C1.72057 15.8432 2.10206 16.0012 2.49985 16.0012H11.4989C11.8967 16.0012 12.2782 15.8432 12.5595 15.5618C12.8408 15.2805 12.9988 14.8989 12.9988 14.5011V5.50036M8.49925 1C8.73664 0.999618 8.97176 1.04621 9.19108 1.13709C9.41039 1.22797 9.60956 1.36135 9.77712 1.52954L12.4679 4.22076C12.6365 4.3884 12.7702 4.5878 12.8613 4.80743C12.9525 5.02706 12.9992 5.26257 12.9988 5.50036M8.49925 1V4.7503C8.49925 4.94923 8.57826 5.14001 8.7189 5.28067C8.85953 5.42133 9.05028 5.50036 9.24917 5.50036L12.9988 5.50036M5.49955 6.25042H3.9997M9.9991 9.25066H3.9997M9.9991 12.2509H3.9997" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Contract No.</div>
                                                    <div id="detail_contract_no" style="color: #334155; font-size: 14px; font-weight: 600;">CONTRACT2025</div>
                                                </div>
                                            </div>

                                            <!-- Contract File -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M9.33323 1.33277H4.00044C3.64685 1.33277 3.30774 1.47325 3.05772 1.72332C2.8077 1.97339 2.66724 2.31256 2.66724 2.66621V13.3337C2.66724 13.6874 2.8077 14.0265 3.05772 14.2766C3.30774 14.5267 3.64685 14.6672 4.00044 14.6672H11.9996C12.3532 14.6672 12.6923 14.5267 12.9423 14.2766C13.1924 14.0265 13.3328 13.6874 13.3328 13.3337V5.33309M9.33323 1.33277C9.54425 1.33242 9.75325 1.37384 9.94819 1.45462C10.1431 1.53541 10.3202 1.65396 10.4691 1.80347L12.8609 4.19566C13.0108 4.34468 13.1296 4.52192 13.2106 4.71714C13.2916 4.91237 13.3332 5.12171 13.3328 5.33309M9.33323 1.33277V4.66636C9.33323 4.84319 9.40347 5.01277 9.52848 5.1378C9.65349 5.26284 9.82304 5.33308 9.99983 5.33308L13.3328 5.33309" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Contract File</div>
                                                    <div id="detail_contract_file" style="color: #334155; font-size: 14px; font-weight: 600;">-</div>
                                                </div>
                                            </div>

                                            <!-- Billing Type -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_1009_427)">
                                                            <path d="M11.3333 6.66652L14 3.99964L11.3333 1.33276M14 3.99964H4.66667C3.95942 3.99964 3.28115 4.28062 2.78105 4.78075C2.28095 5.28089 2 5.95922 2 6.66652V7.33324M4.66667 9.3334L2 12.0003L4.66667 14.6672M2 12.0003H11.3333C12.0406 12.0003 12.7189 11.7193 13.219 11.2192C13.719 10.719 14 10.0407 14 9.3334V8.66668" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1009_427">
                                                                <rect width="16" height="16" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Billing Type</div>
                                                    <div id="detail_billing_type" style="color: #334155; font-size: 14px; font-weight: 600;">Per Member</div>
                                                </div>
                                            </div>

                                            <!-- Default Currency -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                                        <path d="M3.66688 5H3.67355M11.6675 5H11.6742M2.33344 1H13.001C13.7374 1 14.3344 1.59695 14.3344 2.33333V7.66667C14.3344 8.40305 13.7374 9 13.001 9H2.33344C1.597 9 1 8.40305 1 7.66667V2.33333C1 1.59695 1.597 1 2.33344 1ZM9.00064 5C9.00064 5.73638 8.40364 6.33333 7.6672 6.33333C6.93076 6.33333 6.33376 5.73638 6.33376 5C6.33376 4.26362 6.93076 3.66667 7.6672 3.66667C8.40364 3.66667 9.00064 4.26362 9.00064 5Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Default Currency</div>
                                                    <div id="detail_currency" style="color: #334155; font-size: 14px; font-weight: 600;">tnd</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2. Contact Info Card -->
                                <div class="col-lg-6">
                                    <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important; font-family: 'Inter', sans-serif;">
                                        <div class="d-flex align-items-center gap-3 mb-4">
                                            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px; background-color: #FFEDD5; border-radius: 12px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <g clip-path="url(#clip0_1009_436)">
                                                        <path d="M10.869 12.4725C10.7036 12.5138 10.5291 12.4975 10.3742 12.4264C8.29087 11.4039 6.60493 9.72007 5.57984 7.638C5.50392 7.48227 5.48425 7.30506 5.52418 7.13648C5.5641 6.96789 5.66116 6.81832 5.79886 6.71318L6.14988 6.44991C6.33619 6.31018 6.48741 6.12899 6.59156 5.92069C6.69571 5.71239 6.74993 5.4827 6.74993 5.24981V2.99963C6.74993 2.60178 6.59188 2.22021 6.31056 1.93889C6.02923 1.65756 5.64767 1.49951 5.24981 1.49951H2.99963C2.60178 1.49951 2.22021 1.65756 1.93889 1.93889C1.65756 2.22021 1.49951 2.60178 1.49951 2.99963C1.49951 6.58034 2.92194 10.0144 5.45389 12.5463C7.98583 15.0783 11.4199 16.5007 15.0006 16.5007C15.3984 16.5007 15.78 16.3427 16.0613 16.0613C16.3427 15.78 16.5007 15.3984 16.5007 15.0006V12.7504C16.5007 12.3526 16.3427 11.971 16.0613 11.6897C15.78 11.4083 15.3984 11.2503 15.0006 11.2503H12.7504C12.5175 11.2503 12.2878 11.3045 12.0795 11.4087C11.8712 11.5128 11.69 11.664 11.5503 11.8503L11.284 12.1991C11.1808 12.3347 11.0344 12.4312 10.869 12.4725Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1009_436">
                                                            <rect width="18" height="18" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div>
                                                <h5 class="mb-0" style="color: #0F172A; font-size: 16px; font-weight: 800;">Contact Info</h5>
                                                <div style="color: #64748B; font-size: 12px;">Primary contact details for communication</div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column gap-3">
                                            <!-- Contact Person -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M12.6672 14V12.6667C12.6672 11.9594 12.3862 11.2811 11.886 10.781C11.3859 10.281 10.7075 10 10.0002 10H5.99974C5.29241 10 4.61406 10.281 4.1139 10.781C3.61375 11.2811 3.33276 11.9594 3.33276 12.6667V14M10.6669 4.66667C10.6669 6.13943 9.47289 7.33333 7.99996 7.33333C6.52704 7.33333 5.33299 6.13943 5.33299 4.66667C5.33299 3.19391 6.52704 2 7.99996 2C9.47289 2 10.6669 3.19391 10.6669 4.66667Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Contact Person</div>
                                                    <div id="detail_contact_person" style="color: #334155; font-size: 14px; font-weight: 600;">Mr X</div>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M10.6668 13.3328V2.6661C10.6668 2.31248 10.5264 1.97334 10.2763 1.72329C10.0262 1.47324 9.68705 1.33276 9.3334 1.33276H6.66652C6.31287 1.33276 5.97371 1.47324 5.72364 1.72329C5.47357 1.97334 5.33308 2.31248 5.33308 2.6661V13.3328M2.6662 3.99943H13.3337C14.0702 3.99943 14.6672 4.59638 14.6672 5.33276V11.9994C14.6672 12.7358 14.0702 13.3328 13.3337 13.3328H2.6662C1.92977 13.3328 1.33276 12.7358 1.33276 11.9994V5.33276C1.33276 4.59638 1.92977 3.99943 2.6662 3.99943Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Designation</div>
                                                    <div id="detail_contact_designation" style="color: #334155; font-size: 14px; font-weight: 600;">CEO</div>
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M14.6672 4.66704L8.67268 8.48465C8.46926 8.60278 8.23821 8.66501 8.00296 8.66501C7.76772 8.66501 7.53666 8.60278 7.33324 8.48465L1.33276 4.66704M2.6662 2.66724H13.3337C14.0702 2.66724 14.6672 3.26413 14.6672 4.00044V11.9996C14.6672 12.7359 14.0702 13.3328 13.3337 13.3328H2.6662C1.92977 13.3328 1.33276 12.7359 1.33276 11.9996V4.00044C1.33276 3.26413 1.92977 2.66724 2.6662 2.66724Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Email</div>
                                                    <div id="detail_contact_email" style="color: #334155; font-size: 14px; font-weight: 600;">MrX@star.com</div>
                                                </div>
                                            </div>

                                            <!-- Invoice Email -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                                        <path d="M14.3346 2.9998L8.34016 6.81742C8.13674 6.93555 7.90569 6.99777 7.67044 6.99777C7.4352 6.99777 7.20414 6.93555 7.00072 6.81742L1.00024 2.9998M2.33368 1H13.0012C13.7376 1 14.3346 1.59689 14.3346 2.3332V10.3324C14.3346 11.0687 13.7376 11.6656 13.0012 11.6656H2.33368C1.59725 11.6656 1.00024 11.0687 1.00024 10.3324V2.3332C1.00024 1.59689 1.59725 1 2.33368 1Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Invoice Email</div>
                                                    <div id="detail_invoice_email" style="color: #334155; font-size: 14px; font-weight: 600;">Invoice@star.com</div>
                                                </div>
                                            </div>

                                            <!-- Phone -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_1009_445)">
                                                            <path d="M9.66122 11.0865C9.51422 11.1232 9.35909 11.1088 9.2214 11.0455C7.36953 10.1367 5.87091 8.63993 4.95972 6.7892C4.89224 6.65077 4.87476 6.49325 4.91024 6.3434C4.94573 6.19354 5.032 6.06059 5.1544 5.96713L5.46643 5.73312C5.63204 5.60891 5.76645 5.44785 5.85903 5.2627C5.95161 5.07754 5.9998 4.87337 5.9998 4.66636V2.6662C5.9998 2.31255 5.85932 1.97339 5.60925 1.72332C5.35918 1.47325 5.02001 1.33276 4.66636 1.33276H2.6662C2.31255 1.33276 1.97339 1.47325 1.72332 1.72332C1.47325 1.97339 1.33276 2.31255 1.33276 2.6662C1.33276 5.84906 2.59715 8.90155 4.84776 11.1522C7.09838 13.4028 10.1509 14.6672 13.3337 14.6672C13.6874 14.6672 14.0265 14.5267 14.2766 14.2766C14.5267 14.0265 14.6672 13.6874 14.6672 13.3337V11.3336C14.6672 10.9799 14.5267 10.6407 14.2766 10.3907C14.0265 10.1406 13.6874 10.0001 13.3337 10.0001H11.3336C11.1266 10.0001 10.9224 10.0483 10.7372 10.1409C10.5521 10.2335 10.391 10.3679 10.2668 10.5335L10.0301 10.8435C9.93834 10.9641 9.80823 11.0498 9.66122 11.0865Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1009_445">
                                                                <rect width="16" height="16" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Phone</div>
                                                    <div id="detail_contact_phone" style="color: #334155; font-size: 14px; font-weight: 600;">0021671225566</div>
                                                </div>
                                            </div>

                                            <!-- Alt Phone -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M9.32846 10.7537C9.18146 10.7905 9.02633 10.776 8.88863 10.7128C7.03677 9.8039 5.53815 8.30716 4.62696 6.45644C4.55947 6.31801 4.54199 6.16049 4.57748 6.01063C4.61297 5.86078 4.69924 5.72783 4.82164 5.63437L5.13366 5.40035C5.29927 5.27615 5.43369 5.11509 5.52627 4.92993C5.61884 4.74478 5.66704 4.54061 5.66704 4.3336V2.33344C5.66704 1.97979 5.52655 1.64062 5.27648 1.39056C5.02642 1.14049 4.68725 1 4.3336 1H2.33344C1.97979 1 1.64062 1.14049 1.39056 1.39056C1.14049 1.64062 1 1.97979 1 2.33344C1 5.51629 2.26438 8.56878 4.515 10.8194C6.76562 13.07 9.81811 14.3344 13.001 14.3344C13.3546 14.3344 13.6938 14.1939 13.9438 13.9438C14.1939 13.6938 14.3344 13.3546 14.3344 13.001V11.0008C14.3344 10.6472 14.1939 10.308 13.9438 10.0579C13.6938 9.80785 13.3546 9.66736 13.001 9.66736H11.0008C10.7938 9.66736 10.5896 9.71556 10.4045 9.80814C10.2193 9.90071 10.0583 10.0351 9.93405 10.2007L9.69736 10.5108C9.60558 10.6313 9.47547 10.717 9.32846 10.7537Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Alt Phone</div>
                                                    <div id="detail_alt_phone" style="color: #334155; font-size: 14px; font-weight: 600;">-</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3. Location Info Card -->
                                <div class="col-lg-6">
                                    <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important; font-family: 'Inter', sans-serif;">
                                        <div class="d-flex align-items-center gap-3 mb-4">
                                            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px; background-color: #F3E8FF; border-radius: 12px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 22 22" fill="none">
                                                  <path d="M11.5509 19.9833C13.2558 18.511 18.3327 13.7439 18.3327 9.16653C18.3327 7.22143 17.5601 5.356 16.185 3.9806C14.8099 2.60521 12.9448 1.83252 11.0001 1.83252C9.05535 1.83252 7.19028 2.60521 5.81515 3.9806C4.44002 5.356 3.66748 7.22143 3.66748 9.16653C3.66748 13.7439 8.74439 18.511 10.4492 19.9833C10.608 20.1027 10.8014 20.1673 11.0001 20.1673C11.1988 20.1673 11.3921 20.1027 11.5509 19.9833Z" stroke="#7E22CE" stroke-width="2" stroke-linecap="round"/>
                                                  <circle cx="11" cy="9.166" r="3.5" stroke="#7E22CE" stroke-width="2"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h5 class="mb-0" style="color: #0F172A; font-size: 16px; font-weight: 800;">Location Info</h5>
                                                <div style="color: #64748B; font-size: 12px;">Primary contact details for Location</div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column gap-3">
                                            <!-- Address 1 -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 17 21" fill="none">
                                                      <path d="M8.88346 19.1508C10.5883 17.6785 15.6652 12.9114 15.6652 8.33401C15.6652 6.38891 14.8927 4.52348 13.5175 3.14808C12.1424 1.77269 10.2773 1 8.3326 1C6.38787 1 4.5228 1.77269 3.14767 3.14808C1.77254 4.52348 1 6.38891 1 8.33401C1 12.9114 6.07691 17.6785 7.78174 19.1508C7.94056 19.2702 8.13389 19.3348 8.3326 19.3348C8.53131 19.3348 8.72464 19.2702 8.88346 19.1508Z" stroke="#7E22CE" stroke-width="2" stroke-linecap="round"/>
                                                      <circle cx="8.33" cy="8.33" r="2.5" stroke="#7E22CE" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Address 1</div>
                                                    <div id="detail_address1" style="color: #334155; font-size: 14px; font-weight: 600;">Eiffel 2</div>
                                                </div>
                                            </div>

                                            <!-- Address 2 -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 17 21" fill="none">
                                                      <path d="M8.88346 19.1508C10.5883 17.6785 15.6652 12.9114 15.6652 8.33401C15.6652 6.38891 14.8927 4.52348 13.5175 3.14808C12.1424 1.77269 10.2773 1 8.3326 1C6.38787 1 4.5228 1.77269 3.14767 3.14808C1.77254 4.52348 1 6.38891 1 8.33401C1 12.9114 6.07691 17.6785 7.78174 19.1508C7.94056 19.2702 8.13389 19.3348 8.3326 19.3348C8.53131 19.3348 8.72464 19.2702 8.88346 19.1508Z" stroke="#7E22CE" stroke-width="2" stroke-linecap="round"/>
                                                      <circle cx="8.33" cy="8.33" r="2.5" stroke="#7E22CE" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Address 2</div>
                                                    <div id="detail_address2" style="color: #334155; font-size: 14px; font-weight: 600;">Le kram</div>
                                                </div>
                                            </div>

                                            <!-- City -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 17 21" fill="none">
                                                      <path d="M8.88346 19.1508C10.5883 17.6785 15.6652 12.9114 15.6652 8.33401C15.6652 6.38891 14.8927 4.52348 13.5175 3.14808C12.1424 1.77269 10.2773 1 8.3326 1C6.38787 1 4.5228 1.77269 3.14767 3.14808C1.77254 4.52348 1 6.38891 1 8.33401C1 12.9114 6.07691 17.6785 7.78174 19.1508C7.94056 19.2702 8.13389 19.3348 8.3326 19.3348C8.53131 19.3348 8.72464 19.2702 8.88346 19.1508Z" stroke="#7E22CE" stroke-width="2" stroke-linecap="round"/>
                                                      <circle cx="8.33" cy="8.33" r="2.5" stroke="#7E22CE" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">City</div>
                                                    <div id="detail_city" style="color: #334155; font-size: 14px; font-weight: 600;">cheikh zayed</div>
                                                </div>
                                            </div>

                                            <!-- Postal Code -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M2.66724 6H13.3328M2.66724 10H13.3328M6.66684 2L5.33364 14M10.6664 2L9.33324 14" stroke="#7E22CE" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Postal Code</div>
                                                    <div id="detail_postal_code" style="color: #334155; font-size: 14px; font-weight: 600;">2021</div>
                                                </div>
                                            </div>

                                            <!-- Country -->
                                            <div class="d-flex align-items-center gap-3 p-2 px-3" style="background-color: #F9FAFB; border: 1px solid #E5E7EB; border-radius: 12px;">
                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #FFF; border: 1px solid #E5E7EB; border-radius: 10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <g clip-path="url(#clip0_1009_466)">
                                                        <path d="M14.6672 7.99996C14.6672 11.6822 11.6822 14.6672 7.99996 14.6672M14.6672 7.99996C14.6672 4.31777 11.6822 1.33276 7.99996 1.33276M14.6672 7.99996H1.33276M7.99996 14.6672C4.31777 14.6672 1.33276 11.6822 1.33276 7.99996M7.99996 14.6672C6.28798 12.8696 5.33308 10.4823 5.33308 7.99996C5.33308 5.51759 6.28798 3.13034 7.99996 1.33276M7.99996 14.6672C9.71194 12.8696 10.6668 10.4823 10.6668 7.99996C10.6668 5.51759 9.71194 3.13034 7.99996 1.33276M7.99996 1.33276C4.31777 1.33276 1.33276 4.31777 1.33276 7.99996" stroke="#7E22CE" stroke-width="2" stroke-linecap="round"/>
                                                      </g>
                                                      <defs>
                                                        <clipPath id="clip0_1009_466">
                                                          <rect width="16" height="16" fill="white"/>
                                                        </clipPath>
                                                      </defs>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column gap-1">
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 700;">Country</div>
                                                    <div id="detail_country" style="color: #334155; font-size: 14px; font-weight: 600;">UAE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4. Statistics Card -->
                                <div class="col-lg-6">
                                    <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important; font-family: 'Inter', sans-serif;">
                                        <div class="d-flex align-items-center gap-3 mb-4">
                                            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; background-color: #ECFDF5; border-radius: 10px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                  <path d="M2.25 2.25V14.25C2.25 14.6478 2.40804 15.0294 2.68934 15.3107C2.97064 15.592 3.35218 15.75 3.75 15.75H15.75M13.5 12.75V6.75M9.75 12.75V3.75M6 12.75V10.5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <h5 class="mb-0" style="color: #0F172A; font-size: 14px; font-weight: 800;">Statistics</h5>
                                        </div>

                                        <div class="d-flex w-100" style="gap: 8px;">
                                            <!-- Total -->
                                            <div class="d-flex flex-column" style="padding: 12px; align-items: flex-start; gap: 12px; flex: 1 0 0; border-radius: 16px; border: 1px solid #E2E8F0; background: linear-gradient(90deg, #FFF 0%, #ECFDF5 100%); box-shadow: 0 8px 20px -10px rgba(0, 0, 0, 0.04); min-width: 0;">
                                                <div style="display: flex; justify-content: space-between; align-items: center; align-self: stretch;">
                                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border-radius: 10px; border: 1px solid #E2E8F0; background: #FFF;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                          <path d="M10.6668 14V12.6667C10.6668 11.9594 10.3859 11.2811 9.88573 10.781C9.3856 10.281 8.70726 10 7.99996 10H3.99964C3.29234 10 2.61401 10.281 2.11387 10.781C1.61374 11.2811 1.33276 11.9594 1.33276 12.6667V14M10.6668 2.08529C11.2387 2.23353 11.7452 2.56746 12.1067 3.03466C12.4683 3.50186 12.6645 4.07588 12.6645 4.66662C12.6645 5.25736 12.4683 5.83138 12.1067 6.29858C11.7452 6.76578 11.2387 7.09971 10.6668 7.24795M14.6672 13.9999V12.6666C14.6667 12.0757 14.4701 11.5018 14.108 11.0348C13.746 10.5678 13.2391 10.2343 12.667 10.0866M8.66668 4.66667C8.66668 6.13943 7.47268 7.33333 5.9998 7.33333C4.52693 7.33333 3.33292 6.13943 3.33292 4.66667C3.33292 3.19391 4.52693 2 5.9998 2C7.47268 2 8.66668 3.19391 8.66668 4.66667Z" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                    </div>
                                                    <span style="display: flex; padding: 2px 8px; align-items: center; border-radius: 999px; border: 1px solid #A7F3D0; background: #ECFDF5; color: #065F46; font-size: 11px; font-weight: 800; line-height: normal;">100%</span>
                                                </div>
                                                <div class="d-flex flex-column align-items-start align-self-stretch" style="gap: 2px;">
                                                    <div id="stat_total" style="color: #0F172A; font-size: 28px; font-weight: 800; line-height: normal;">1</div>
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 600; line-height: normal;">Total</div>
                                                </div>
                                                <div class="align-self-stretch" style="border-radius: 999px; background: #10B981; height: 5px;"></div>
                                            </div>

                                            <!-- Active -->
                                            <div class="d-flex flex-column" style="padding: 12px; align-items: flex-start; gap: 12px; flex: 1 0 0; border-radius: 16px; border: 1px solid #E2E8F0; background: linear-gradient(90deg, #FFF 0%, #FFEDD5 100%); box-shadow: 0 8px 20px -10px rgba(0, 0, 0, 0.04); min-width: 0;">
                                                <div style="display: flex; justify-content: space-between; align-items: center; align-self: stretch;">
                                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border-radius: 10px; border: 1px solid #E2E8F0; background: #FFF;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                          <g clip-path="url(#clip0_1010_214)">
                                                            <path d="M14.6672 7.99996H13.0137C12.7223 7.99934 12.4388 8.09418 12.2064 8.26996C11.974 8.44575 11.8056 8.69282 11.7269 8.97337L10.1601 14.5472C10.15 14.5818 10.129 14.6122 10.1001 14.6338C10.0713 14.6555 10.0362 14.6672 10.0001 14.6672C9.96406 14.6672 9.92897 14.6555 9.90012 14.6338C9.87126 14.6122 9.85021 14.5818 9.84011 14.5472L6.15982 1.45277C6.14972 1.41815 6.12866 1.38774 6.09981 1.3661C6.07096 1.34446 6.03587 1.33276 5.9998 1.33276C5.96374 1.33276 5.92865 1.34446 5.8998 1.3661C5.87094 1.38774 5.84989 1.41815 5.83979 1.45277L4.273 7.02655C4.19464 7.30601 4.02723 7.55227 3.7962 7.72795C3.56517 7.90363 3.28313 7.99913 2.9929 7.99996H1.33276" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                          </g>
                                                          <defs>
                                                            <clipPath id="clip0_1010_214">
                                                              <rect width="16" height="16" fill="white"/>
                                                            </clipPath>
                                                          </defs>
                                                        </svg>
                                                    </div>
                                                    <span style="display: flex; padding: 2px 8px; align-items: center; border-radius: 999px; border: 1px solid #FDBA74; background: #FFF7ED; color: #9A3412; font-size: 11px; font-weight: 800; line-height: normal;">100%</span>
                                                </div>
                                                <div class="d-flex flex-column align-items-start align-self-stretch" style="gap: 2px;">
                                                    <div id="stat_active" style="color: #0F172A; font-size: 28px; font-weight: 800; line-height: normal;">1</div>
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 600; line-height: normal;">Active</div>
                                                </div>
                                                <div class="align-self-stretch" style="border-radius: 999px; background: #F97316; height: 5px;"></div>
                                            </div>

                                            <!-- Group Policy -->
                                            <div class="d-flex flex-column" style="padding: 12px; align-items: flex-start; gap: 12px; flex: 1 0 0; border-radius: 16px; border: 1px solid #E2E8F0; background: linear-gradient(90deg, #FFF 0%, #F5F3FF 100%); box-shadow: 0 8px 20px -10px rgba(0, 0, 0, 0.04); min-width: 0;">
                                                <div style="display: flex; justify-content: space-between; align-items: center; align-self: stretch;">
                                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border-radius: 10px; border: 1px solid #E2E8F0; background: #FFF;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                          <path d="M2.66724 6H13.3328M2.66724 10H13.3328M6.66684 2L5.33364 14M10.6664 2L9.33324 14" stroke="#7E22CE" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                    </div>
                                                    <span style="display: flex; padding: 2px 8px; align-items: center; border-radius: 999px; border: 1px solid #C4B5FD; background: #F5F3FF; color: #5B21B6; font-size: 11px; font-weight: 800; line-height: normal;">100%</span>
                                                </div>
                                                <div class="d-flex flex-column align-items-start align-self-stretch" style="gap: 2px;">
                                                    <div id="stat_group_policy" style="color: #0F172A; font-size: 28px; font-weight: 800; line-height: normal;">1</div>
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 600; line-height: normal;">Group Policy</div>
                                                </div>
                                                <div class="align-self-stretch" style="border-radius: 999px; background: #8B5CF6; height: 5px;"></div>
                                            </div>

                                            <!-- Total Accounts -->
                                            <div class="d-flex flex-column" style="padding: 12px; align-items: flex-start; gap: 12px; flex: 1 0 0; border-radius: 16px; border: 1px solid #E2E8F0; background: linear-gradient(90deg, #FFF 0%, #EFF6FF 100%); box-shadow: 0 8px 20px -10px rgba(0, 0, 0, 0.04); min-width: 0;">
                                                <div style="display: flex; justify-content: space-between; align-items: center; align-self: stretch;">
                                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border-radius: 10px; border: 1px solid #E2E8F0; background: #FFF;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                          <g clip-path="url(#clip0_1010_236)">
                                                            <path d="M1.33277 7.9998C1.33245 8.12732 1.36871 8.25225 1.43725 8.35979C1.50579 8.46732 1.60373 8.55295 1.71946 8.6065L7.45319 11.2133C7.62601 11.2916 7.81353 11.332 8.00323 11.332C8.19294 11.332 8.38046 11.2916 8.55327 11.2133L14.2737 8.61317C14.3917 8.56013 14.4917 8.47389 14.5616 8.36498C14.6314 8.25607 14.6681 8.12918 14.667 7.9998M1.33277 11.3333C1.33245 11.4608 1.36871 11.5858 1.43725 11.6933C1.50579 11.8008 1.60373 11.8865 1.71946 11.94L7.45319 14.5468C7.62601 14.6251 7.81353 14.6656 8.00323 14.6656C8.19294 14.6656 8.38046 14.6251 8.55327 14.5468L14.2737 11.9467C14.3917 11.8936 14.4917 11.8074 14.5616 11.6985C14.6314 11.5896 14.6681 11.4627 14.667 11.3333M8.55357 1.45301C8.37985 1.37377 8.19114 1.33276 8.0002 1.33276C7.80926 1.33276 7.62055 1.37377 7.44683 1.45301L1.73309 4.05315C1.61478 4.10532 1.5142 4.19076 1.44358 4.29907C1.37297 4.40738 1.33537 4.53389 1.33537 4.66319C1.33537 4.79248 1.37297 4.91899 1.44358 5.0273C1.5142 5.13562 1.61478 5.22106 1.73309 5.27322L7.45349 7.88003C7.62721 7.95927 7.81593 8.00028 8.00687 8.00028C8.19781 8.00028 8.38652 7.95927 8.56024 7.88003L14.2806 5.27989C14.3989 5.22772 14.4995 5.14228 14.5702 5.03397C14.6408 4.92566 14.6784 4.79915 14.6784 4.66985C14.6784 4.54056 14.6408 4.41405 14.5702 4.30574C14.4995 4.19743 14.3989 4.11199 14.2806 4.05982L8.55357 1.45301Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/>
                                                          </g>
                                                          <defs>
                                                            <clipPath id="clip0_1010_236">
                                                              <rect width="16" height="16" fill="white"/>
                                                            </clipPath>
                                                          </defs>
                                                        </svg>
                                                    </div>
                                                    <span style="display: flex; padding: 2px 8px; align-items: center; border-radius: 999px; border: 1px solid #93C5FD; background: #EFF6FF; color: #1E40AF; font-size: 11px; font-weight: 800; line-height: normal;">100%</span>
                                                </div>
                                                <div class="d-flex flex-column align-items-start align-self-stretch" style="gap: 2px;">
                                                    <div id="stat_total_accounts" style="color: #0F172A; font-size: 28px; font-weight: 800; line-height: normal;">1</div>
                                                    <div style="color: #64748B; font-size: 12px; font-weight: 600; line-height: normal;">Total Accounts</div>
                                                </div>
                                                <div class="align-self-stretch" style="border-radius: 999px; background: #3B82F6; height: 5px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Partner Details View -->
            </div>
            <!-- End Partner List Column -->

            <!-- Start Right Sidebar Column -->
            <div class="col-lg-4 col-12">

                <!-- Quick Stats -->
                <div class="widget-card">
                    <div class="widget-header">
                        <h5 class="widget-title">Quick Stats</h5>
                        <span class="widget-subtitle">Partner type distribution</span>
                    </div>

                    <div class="quick-stats-row">
                        <div class="text-muted-custom fs-7">Total partners</div>
                        <div class="fs-2 fw-bold text-primary lh-1">4</div>
                    </div>

                    @php
                        $quickStats = [
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9.25499 16.4627C12.3747 15.3752 14.9994 13.5001 14.9994 9.74999V4.49982C14.9994 4.30091 14.9204 4.11013 14.7798 3.96948C14.6391 3.82882 14.4484 3.7498 14.2495 3.7498C12.7496 3.7498 10.8823 2.85727 9.56995 1.70973C9.41108 1.57398 9.20897 1.49939 9.00001 1.49939C8.79105 1.49939 8.58894 1.57398 8.43007 1.70973C7.1252 2.84977 5.25039 3.7498 3.75054 3.7498C3.55164 3.7498 3.3609 3.82882 3.22026 3.96948C3.07962 4.11013 3.00061 4.30091 3.00061 4.49982V9.74999C3.00061 13.5001 5.62535 15.3752 8.75254 16.4552C8.91417 16.5154 9.09162 16.5181 9.25499 16.4627Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/></svg>',
                                'color' => 'blue',
                                'name' => 'Insurance Providers',
                                'count' => '3 partners',
                                'pct' => '75%',
                                'frac' => '3 / 4',
                                'bg' => '#DBEAFE',
                                'text' => '#2563EB'
                            ],
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M12.0002 14.9994V2.99939C12.0002 2.60156 11.8422 2.22003 11.5609 1.93873C11.2795 1.65742 10.898 1.49939 10.5001 1.49939H7.49987C7.10201 1.49939 6.72045 1.65742 6.43912 1.93873C6.1578 2.22003 5.99975 2.60156 5.99975 2.99939V14.9994M2.99951 4.49939H15.0005C15.829 4.49939 16.5006 5.17096 16.5006 5.99939V13.4994C16.5006 14.3278 15.829 14.9994 15.0005 14.9994H2.99951C2.17102 14.9994 1.49939 14.3278 1.49939 13.4994V5.99939C1.49939 5.17096 2.17102 4.49939 2.99951 4.49939Z" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg>',
                                'color' => 'green',
                                'name' => 'Brokers',
                                'count' => '0 partners',
                                'pct' => '0%',
                                'frac' => '0 / 4',
                                'bg' => '#D1FAE5',
                                'text' => '#10B981'
                            ],
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M7.49987 9H10.5001M7.49987 6H10.5001M10.5001 15.75V13.5C10.5001 13.1022 10.3421 12.7206 10.0607 12.4393C9.77941 12.158 9.39785 12 8.99999 12C8.60213 12 8.22057 12.158 7.93924 12.4393C7.65792 12.7206 7.49987 13.1022 7.49987 13.5V15.75M4.49963 7.5H2.99951C2.60165 7.5 2.22009 7.65804 1.93876 7.93934C1.65744 8.22064 1.49939 8.60218 1.49939 9V14.25C1.49939 14.6478 1.65744 15.0294 1.93876 15.3107C2.22009 15.592 2.60165 15.75 2.99951 15.75H15.0005C15.3983 15.75 15.7799 15.592 16.0612 15.3107C16.3425 15.0294 16.5006 14.6478 16.5006 14.25V6.75C16.5006 6.35218 16.3425 5.97064 16.0612 5.68934C15.7799 5.40804 15.3983 5.25 15.0005 5.25H13.5003M4.49963 15.75V3.75C4.49963 3.35218 4.65768 2.97064 4.939 2.68934C5.22033 2.40804 5.60189 2.25 5.99975 2.25H12.0002C12.3981 2.25 12.7796 2.40804 13.061 2.68934C13.3423 2.97064 13.5003 3.35218 13.5003 3.75V15.75" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/></svg>',
                                'color' => 'yellow',
                                'name' => 'TPAs',
                                'count' => '1 partner',
                                'pct' => '25%',
                                'frac' => '1 / 4',
                                'bg' => '#FFFBEB',
                                'text' => '#F59E0B'
                            ],
                        ];
                    @endphp

                    @foreach($quickStats as $qs)
                        <div class="quick-stat-item">
                            <div class="quick-stat-icon stat-icon {{ $qs['color'] }}"
                                style="background-color: {{ $qs['bg'] }}; color: {{ $qs['text'] }};">
                                {!! $qs['svg'] !!}
                            </div>
                            <div class="quick-stat-info">
                                <div class="quick-stat-name">{{ $qs['name'] }}</div>
                                <div class="quick-stat-count">{{ $qs['count'] }}</div>
                            </div>
                            <div>
                                <div class="quick-stat-percent" style="color: {{ $qs['text'] }};">{{ $qs['pct'] }}</div>
                                <div class="quick-stat-total">{{ $qs['frac'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Recent Activity -->
                <div class="widget-card">
                    <div class="widget-header">
                        <h5 class="widget-title">Recent Activity</h5>
                        <span class="widget-subtitle">Last 24h</span>
                    </div>

                    @php
                        $activities = [
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M3.74939 8.99999H14.2506M8.99999 3.74939V14.2506" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/></svg>',
                                'bg' => '#DBEAFE',
                                'title' => 'Partner added: Allianz Partners Europe',
                                'time' => '2 hours ago'
                            ],
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><g clip-path="url(#clip0_49_1827)"><path d="M9.75013 15.7491H15.7507M15.8811 5.10861C16.2777 4.71219 16.5005 4.17448 16.5006 3.61378C16.5007 3.05308 16.278 2.51531 15.8815 2.11879C15.485 1.72226 14.9473 1.49946 14.3865 1.49939C13.8257 1.49932 13.2879 1.72199 12.8914 2.11841L2.88096 12.13C2.70681 12.3036 2.57802 12.5174 2.50593 12.7525L1.51509 16.0164C1.49571 16.0813 1.49424 16.1502 1.51085 16.2158C1.52747 16.2814 1.56154 16.3413 1.60945 16.3892C1.65736 16.437 1.71733 16.471 1.78298 16.4875C1.84864 16.504 1.91755 16.5024 1.98238 16.4829L5.24742 15.4929C5.48232 15.4215 5.69609 15.2935 5.86998 15.1202L15.8811 5.10861Z" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_49_1827"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>',
                                'bg' => '#D1FAE5',
                                'title' => 'Contract updated: Allianz Partners Middle East & Africa',
                                'time' => '6 hours ago'
                            ],
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><g clip-path="url(#clip0_49_1834)"><path d="M8.99999 4.49975V9.00011L12.0002 10.5002M16.5006 9.00011C16.5006 13.1426 13.1425 16.5007 8.99999 16.5007C4.85752 16.5007 1.49939 13.1426 1.49939 9.00011C1.49939 4.85764 4.85752 1.49951 8.99999 1.49951C13.1425 1.49951 16.5006 4.85764 16.5006 9.00011Z" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_49_1834"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>',
                                'bg' => '#FFFBEB',
                                'title' => 'Approval pending: TPA Solutions',
                                'time' => '1 day ago'
                            ],
                        ];
                    @endphp

                    @foreach($activities as $act)
                        <div class="activity-item">
                            <div class="activity-icon" style="background-color: {{ $act['bg'] }};">
                                {!! $act['svg'] !!}
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">{{ $act['title'] }}</div>
                                <div class="activity-time">{{ $act['time'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <!-- End Right Sidebar Column -->
        </div>
        </div>
        <!-- End Main Content Area -->

        <!-- Start Add Partner Form -->
        <div id="add-partner-form" style="display: none;">
            @include('add-partner-form')
        </div>
        <!-- End Add Partner Form -->

        <!-- Start Partner Details View -->
        <div id="partner-details-view" style="display: none;">
            <!-- Back to Partners Link Header -->
            <div class="mb-3">
                <a href="#" onclick="showPartnerList(event)" class="text-decoration-none fw-semibold d-inline-flex align-items-center gap-2" style="color: #0B4F8A; font-size: 14px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8.00021 3.33276L3.33301 7.99996L8.00021 12.6672M3.33301 7.99996H12.6674" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Back to Partners
                </a>
            </div>

            <!-- Main Card Container -->
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden mb-4">
                <!-- Top Dark Blue Card Header -->
                <div class="px-4 py-3 d-flex justify-content-between align-items-center" style="background-color: #0B4F8A;">
                    <div class="d-flex align-items-center gap-2 text-white">
                        <div class="d-flex align-items-center justify-content-center rounded-circle" style="width: 28px; height: 28px; background-color: rgba(255, 255, 255, 0.2);">
                            <i class="bi bi-person fs-6"></i>
                        </div>
                        <h5 class="mb-0 fw-bold fs-6">Partner Details</h5>
                    </div>
                    <button type="button" class="btn text-white p-0 border-0 d-flex align-items-center" onclick="showPartnerList(event)" style="opacity: 0.85;">
                        <i class="bi bi-x-circle-fill fs-5"></i>
                    </button>
                </div>

                <div class="card-body p-4 bg-white">

                    <!-- Top Partner Banner Box -->
                    <div class="bg-white border rounded-4 p-4 mb-4">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                            <!-- Left: Logo & Info -->
                            <div class="d-flex align-items-center gap-3">
                                <div id="detail_logo_box" class="rounded-3 d-flex align-items-center justify-content-center text-white fw-bold fs-4 flex-shrink-0" style="width: 56px; height: 56px; background-color: #0B4F8A;">
                                    AP
                                </div>
                                <div>
                                    <h4 id="detail_partner_name" class="fw-bold text-dark mb-1" style="font-size: 18px; color: #1E293B;">
                                        Allianz Partners Middle East & Africa
                                    </h4>
                                    <div class="d-flex align-items-center flex-wrap gap-2 mb-1">
                                        <span id="detail_partner_type_badge" class="badge rounded-pill bg-light border px-2.5 py-1 fw-medium" style="color: #0B4F8A !important; border-color: #CBD5E1 !important;">
                                            <i class="bi bi-shield me-1"></i> <span id="detail_partner_type_text">Insurance Provider</span>
                                        </span>
                                        <span id="detail_partner_code" class="text-muted" style="font-size: 13px;">
                                            Partner ID: STA-INS-002
                                        </span>
                                    </div>
                                    <div>
                                        <a href="#" onclick="display()" class="text-decoration-none fw-semibold d-inline-flex align-items-center gap-1" style="font-size: 13px; color: #0B4F8A;">
                                            Edit Partner <i class="bi bi-pencil ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Right: Status & Population Metrics -->
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <span id="detail_status_badge" class="badge rounded-pill px-3 py-1.5 fw-semibold d-inline-flex align-items-center gap-1" style="background-color: #D1FAE5; color: #10B981; font-size: 13px;">
                                    <i class="bi bi-check-circle-fill"></i> Active
                                </span>

                                <div class="bg-light border rounded-3 p-2 px-3 text-center" style="min-width: 100px; background-color: #F8FAFC;">
                                    <div class="text-muted" style="font-size: 10px; font-weight: 700;">TOTAL POPULATION</div>
                                    <div id="detail_total_population" class="fw-bold text-dark fs-5">1</div>
                                </div>

                                <div class="bg-light border rounded-3 p-2 px-3 text-center" style="min-width: 100px; background-color: #F8FAFC;">
                                    <div class="text-muted" style="font-size: 10px; font-weight: 700;">ACTIVE POPULATION</div>
                                    <div id="detail_active_population" class="fw-bold text-dark fs-5">1</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 Grid Sections (2x2) -->
                    <div class="row g-4">

                        <!-- 1. Contract Info Card -->
                        <div class="col-lg-6">
                            <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important;">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background-color: #DBEAFE; color: #2563EB;">
                                        <i class="bi bi-file-earmark-text fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark" style="font-size: 15px;">Contract Info</h5>
                                        <div class="text-muted" style="font-size: 12px;">Key contract details and billing settings</div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column gap-2">
                                    <!-- Contract Start -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-calendar-event text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT START</div>
                                            <div id="detail_contract_start" class="fw-bold text-dark" style="font-size: 13px;">2025-10-01</div>
                                        </div>
                                    </div>
                                    <!-- Contract End -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-calendar-event text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT END</div>
                                            <div id="detail_contract_end" class="fw-bold text-dark" style="font-size: 13px;">2029-12-02</div>
                                        </div>
                                    </div>
                                    <!-- Contract No -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-file-earmark text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT NO.</div>
                                            <div id="detail_contract_no" class="fw-bold text-dark" style="font-size: 13px;">CONTRACT2025</div>
                                        </div>
                                    </div>
                                    <!-- Contract File -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-file-earmark-arrow-down text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT FILE</div>
                                            <div id="detail_contract_file" class="fw-bold text-dark" style="font-size: 13px;">-</div>
                                        </div>
                                    </div>
                                    <!-- Billing Type -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-arrow-repeat text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">BILLING TYPE</div>
                                            <div id="detail_billing_type" class="fw-bold text-dark" style="font-size: 13px;">Per Member</div>
                                        </div>
                                    </div>
                                    <!-- Default Currency -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-cash-stack text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">DEFAULT CURRENCY</div>
                                            <div id="detail_currency" class="fw-bold text-dark" style="font-size: 13px;">tnd</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Contact Info Card -->
                        <div class="col-lg-6">
                            <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important;">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background-color: #FFEDD5; color: #EA580C;">
                                        <i class="bi bi-telephone fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark" style="font-size: 15px;">Contact Info</h5>
                                        <div class="text-muted" style="font-size: 12px;">Primary contact details for communication</div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column gap-2">
                                    <!-- Contact Person -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-person text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTACT PERSON</div>
                                            <div id="detail_contact_person" class="fw-bold text-dark" style="font-size: 13px;">Mr X</div>
                                        </div>
                                    </div>
                                    <!-- Designation -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-briefcase text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">DESIGNATION</div>
                                            <div id="detail_contact_designation" class="fw-bold text-dark" style="font-size: 13px;">CEO</div>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-envelope text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">EMAIL</div>
                                            <div id="detail_contact_email" class="fw-bold text-dark" style="font-size: 13px;">MrX@star.com</div>
                                        </div>
                                    </div>
                                    <!-- Invoice Email -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-envelope-check text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">INVOICE EMAIL</div>
                                            <div id="detail_invoice_email" class="fw-bold text-dark" style="font-size: 13px;">Invoice@star.com</div>
                                        </div>
                                    </div>
                                    <!-- Phone -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-telephone text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">PHONE</div>
                                            <div id="detail_contact_phone" class="fw-bold text-dark" style="font-size: 13px;">0021671225566</div>
                                        </div>
                                    </div>
                                    <!-- Alt Phone -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-telephone-plus text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">ALT PHONE</div>
                                            <div id="detail_alt_phone" class="fw-bold text-dark" style="font-size: 13px;">-</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Location Info Card -->
                        <div class="col-lg-6">
                            <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important;">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background-color: #F3E8FF; color: #9333EA;">
                                        <i class="bi bi-geo-alt fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark" style="font-size: 15px;">Location Info</h5>
                                        <div class="text-muted" style="font-size: 12px;">Primary contact details for Location</div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column gap-2">
                                    <!-- Address 1 -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-geo-alt text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">ADDRESS 1</div>
                                            <div id="detail_address1" class="fw-bold text-dark" style="font-size: 13px;">Eiffel 2</div>
                                        </div>
                                    </div>
                                    <!-- Address 2 -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-geo-alt text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">ADDRESS 2</div>
                                            <div id="detail_address2" class="fw-bold text-dark" style="font-size: 13px;">Le kram</div>
                                        </div>
                                    </div>
                                    <!-- City -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-building text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CITY</div>
                                            <div id="detail_city" class="fw-bold text-dark" style="font-size: 13px;">cheikh zayed</div>
                                        </div>
                                    </div>
                                    <!-- Postal Code -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-hash text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">POSTAL CODE</div>
                                            <div id="detail_postal_code" class="fw-bold text-dark" style="font-size: 13px;">2021</div>
                                        </div>
                                    </div>
                                    <!-- Country -->
                                    <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                        <i class="bi bi-globe text-secondary fs-6"></i>
                                        <div>
                                            <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">COUNTRY</div>
                                            <div id="detail_country" class="fw-bold text-dark" style="font-size: 13px;">UAE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Statistics Card -->
                        <div class="col-lg-6">
                            <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important;">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background-color: #DCFCE7; color: #16A34A;">
                                        <i class="bi bi-bar-chart-line fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark" style="font-size: 15px;">Statistics</h5>
                                    </div>
                                </div>

                                <div class="row g-2 pt-2">
                                    <!-- Total -->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 rounded-3 border d-flex flex-column justify-content-between" style="background-color: #F0FDF4; border-color: #DCFCE7 !important; height: 135px;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <i class="bi bi-people text-success fs-5"></i>
                                                <span class="badge rounded-pill bg-success-subtle text-success" style="font-size: 10px;">100%</span>
                                            </div>
                                            <div>
                                                <div id="stat_total" class="fw-bold text-dark fs-3 lh-1 mb-1">1</div>
                                                <div class="text-muted" style="font-size: 11px;">Total</div>
                                            </div>
                                            <div class="w-100 rounded-pill" style="height: 4px; background-color: #10B981;"></div>
                                        </div>
                                    </div>

                                    <!-- Active -->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 rounded-3 border d-flex flex-column justify-content-between" style="background-color: #FFF7ED; border-color: #FFEDD5 !important; height: 135px;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <i class="bi bi-activity text-warning fs-5" style="color: #F97316 !important;"></i>
                                                <span class="badge rounded-pill" style="font-size: 10px; color: #EA580C !important; background-color: #FFEDD5 !important;">100%</span>
                                            </div>
                                            <div>
                                                <div id="stat_active" class="fw-bold text-dark fs-3 lh-1 mb-1">1</div>
                                                <div class="text-muted" style="font-size: 11px;">Active</div>
                                            </div>
                                            <div class="w-100 rounded-pill" style="height: 4px; background-color: #F97316;"></div>
                                        </div>
                                    </div>

                                    <!-- Group Policy -->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 rounded-3 border d-flex flex-column justify-content-between" style="background-color: #F5F3FF; border-color: #DDD6FE !important; height: 135px;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <i class="bi bi-hash fs-5" style="color: #8B5CF6;"></i>
                                                <span class="badge rounded-pill" style="font-size: 10px; color: #7C3AED; background-color: #DDD6FE;">100%</span>
                                            </div>
                                            <div>
                                                <div id="stat_group_policy" class="fw-bold text-dark fs-3 lh-1 mb-1">1</div>
                                                <div class="text-muted" style="font-size: 11px;">Group Policy</div>
                                            </div>
                                            <div class="w-100 rounded-pill" style="height: 4px; background-color: #8B5CF6;"></div>
                                        </div>
                                    </div>

                                    <!-- Total Accounts -->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 rounded-3 border d-flex flex-column justify-content-between" style="background-color: #EFF6FF; border-color: #DBEAFE !important; height: 135px;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <i class="bi bi-layers text-primary fs-5"></i>
                                                <span class="badge rounded-pill bg-primary-subtle text-primary" style="font-size: 10px;">100%</span>
                                            </div>
                                            <div>
                                                <div id="stat_total_accounts" class="fw-bold text-dark fs-3 lh-1 mb-1">1</div>
                                                <div class="text-muted" style="font-size: 11px;">Total Accounts</div>
                                            </div>
                                            <div class="w-100 rounded-pill" style="height: 4px; background-color: #3B82F6;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- End Partner Details View -->

    </div>

    <script>
        function display() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('add-partner-form').style.display = 'block';
        }

        function hideDisplay(e) {
            if(e) e.preventDefault();
            document.getElementById('main-content').style.display = 'block';
            document.getElementById('add-partner-form').style.display = 'none';
            showPartnerList();
        }

        function showPartnerList(e) {
            if(e) e.preventDefault();
            let detailsView = document.getElementById('partner-details-view');
            let listCard = document.getElementById('partner-list-card');
            if (detailsView) detailsView.style.display = 'none';
            if (listCard) listCard.style.display = 'block';
        }

        function openPartnerDetails(partner) {
            let detailsView = document.getElementById('partner-details-view');
            let listCard = document.getElementById('partner-list-card');
            let addForm = document.getElementById('add-partner-form');
            let mainContent = document.getElementById('main-content');

            if (addForm) addForm.style.display = 'none';
            if (mainContent) mainContent.style.display = 'block';
            if (listCard) listCard.style.display = 'none';
            if (detailsView) detailsView.style.display = 'block';

            if (partner) {
                let name = partner.name || 'Allianz Partners Middle East & Africa';
                let logo = partner.logo || (name ? name.split(' ').map(w => w[0]).join('').substring(0, 2).toUpperCase() : 'AP');
                let type = partner.type || 'Insurance Provider';
                let code = partner.internal_code || partner.code || 'STA-INS-002';
                let status = partner.status || 'Active';

                document.getElementById('detail_logo_box').innerText = logo;
                document.getElementById('detail_partner_name').innerText = name;
                document.getElementById('detail_partner_type_text').innerText = type;
                document.getElementById('detail_partner_code').innerText = 'Partner ID: ' + code;
                
                let statusBadgeText = document.getElementById('detail_status_badge_text');
                if (statusBadgeText) {
                    statusBadgeText.innerText = status;
                }

                // Contact Info
                if (partner.contact_name) document.getElementById('detail_contact_person').innerText = partner.contact_name;
                if (partner.contact_email) document.getElementById('detail_contact_email').innerText = partner.contact_email;
                if (partner.contact_phone) document.getElementById('detail_contact_phone').innerText = partner.contact_phone;
                
                // Location Info
                if (partner.location) {
                    let parts = partner.location.split(',');
                    document.getElementById('detail_address1').innerText = parts[0] ? parts[0].trim() : 'Eiffel 2';
                    document.getElementById('detail_address2').innerText = parts[1] ? parts[1].trim() : 'Le kram';
                    document.getElementById('detail_city').innerText = parts[2] ? parts[2].trim() : 'cheikh zayed';
                }
                if (partner.city) document.getElementById('detail_city').innerText = partner.city;
                if (partner.country) document.getElementById('detail_country').innerText = partner.country;
            }
        }
    </script>
@endsection