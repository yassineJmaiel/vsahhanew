@extends('theme')

@section('content')
    <div class="container-fluid py-4">

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

        <!-- Start Main Content Area -->
        <div id="main-content">
        <!-- Start Filters -->
        <div class="row mb-4 align-items-center">
            <div class="col-lg-8 col-12 mb-3 mb-lg-0">
                <ul class="nav nav-pills filter-pills gap-2 flex-nowrap overflow-auto pb-2 pb-lg-0"
                    style="white-space: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All Partners <span class="badge">3</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Insurance <span class="badge">2</span></a>
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
                    'value' => '3',
                    'color' => 'blue',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.16662 14.1675L10.8334 15.8342C10.9976 15.9984 11.1925 16.1286 11.407 16.2174C11.6215 16.3063 11.8514 16.352 12.0835 16.352C12.3157 16.352 12.5456 16.3063 12.7601 16.2174C12.9746 16.1286 13.1694 15.9984 13.3336 15.8342C13.4978 15.6701 13.628 15.4752 13.7168 15.2607C13.8057 15.0462 13.8514 14.8164 13.8514 14.5842C13.8514 14.3521 13.8057 14.1222 13.7168 13.9077C13.628 13.6932 13.4978 13.4984 13.3336 13.3342M11.667 11.6671L13.7505  13.7505C14.0821 14.082 14.5317 14.2683 15.0006 14.2683C15.4695 14.2683 15.9192 14.082 16.2507 13.7505C16.5823 13.419 16.7685 12.9693 16.7685 12.5005C16.7685 12.0316 16.5823 11.582 16.2507 11.2505L13.0171 8.01712C12.5483 7.54895 11.9129 7.28598 11.2503 7.28598C10.5877 7.28598 9.95228 7.54895 9.4835 8.01712L8.7501 8.75046C8.41856 9.08198 7.96888 9.26823 7.5 9.26823C7.03113 9.26823 6.58145 9.08198 6.2499 8.75046C5.91836 8.41893 5.7321 7.96929 5.7321 7.50045C5.7321 7.0316 5.91836 6.58196 6.2499 6.25044L8.59176 3.90876C9.35202 3.15054 10.3435 2.66755 11.4092 2.53623C12.4749 2.40491 13.554 2.63278 14.4756 3.18376L14.8673 3.41709C15.2221 3.63125 15.644 3.70552 16.0507 3.62543L17.5008 3.33376M17.5006 2.50081L18.334 11.6675H16.6672M2.49942 2.50081L1.66602 11.6675L7.08312 17.0842C7.41466 17.4158 7.86434 17.602 8.33322 17.602C8.80209 17.602 9.25177 17.4158 9.58332 17.0842C9.91486 16.7527 10.1011 16.3031 10.1011 15.8342C10.1011 15.3654 9.91486 14.9157 9.58332 14.5842M2.49942 3.33415H9.16662" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                    'border' => '#0B4F8A'
                ],
                [
                    'title' => 'Active Partners',
                    'value' => '2',
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
                <div class="partner-list-container">
                    <div class="partner-list-header">
                        <h5 class="mb-0 fw-bold">Partner List</h5>
                        <span class="text-muted-custom fs-7">3 partners</span>
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
                                        ]
                                    ];
                                @endphp

                                @foreach($partners as $partner)
                                    <tr>
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
                        <div class="fs-2 fw-bold text-primary lh-1">3</div>
                    </div>

                    @php
                        $quickStats = [
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9.25499 16.4627C12.3747 15.3752 14.9994 13.5001 14.9994 9.74999V4.49982C14.9994 4.30091 14.9204 4.11013 14.7798 3.96948C14.6391 3.82882 14.4484 3.7498 14.2495 3.7498C12.7496 3.7498 10.8823 2.85727 9.56995 1.70973C9.41108 1.57398 9.20897 1.49939 9.00001 1.49939C8.79105 1.49939 8.58894 1.57398 8.43007 1.70973C7.1252 2.84977 5.25039 3.7498 3.75054 3.7498C3.55164 3.7498 3.3609 3.82882 3.22026 3.96948C3.07962 4.11013 3.00061 4.30091 3.00061 4.49982V9.74999C3.00061 13.5001 5.62535 15.3752 8.75254 16.4552C8.91417 16.5154 9.09162 16.5181 9.25499 16.4627Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/></svg>',
                                'color' => 'blue',
                                'name' => 'Insurance Providers',
                                'count' => '2 partners',
                                'pct' => '66%',
                                'frac' => '2 / 3',
                                'bg' => '#DBEAFE',
                                'text' => '#2563EB'
                            ],
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M12.0002 14.9994V2.99939C12.0002 2.60156 11.8422 2.22003 11.5609 1.93873C11.2795 1.65742 10.898 1.49939 10.5001 1.49939H7.49987C7.10201 1.49939 6.72045 1.65742 6.43912 1.93873C6.1578 2.22003 5.99975 2.60156 5.99975 2.99939V14.9994M2.99951 4.49939H15.0005C15.829 4.49939 16.5006 5.17096 16.5006 5.99939V13.4994C16.5006 14.3278 15.829 14.9994 15.0005 14.9994H2.99951C2.17102 14.9994 1.49939 14.3278 1.49939 13.4994V5.99939C1.49939 5.17096 2.17102 4.49939 2.99951 4.49939Z" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg>',
                                'color' => 'green',
                                'name' => 'Brokers',
                                'count' => '0 partners',
                                'pct' => '0%',
                                'frac' => '0 / 3',
                                'bg' => '#D1FAE5',
                                'text' => '#10B981'
                            ],
                            [
                                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M7.49987 9H10.5001M7.49987 6H10.5001M10.5001 15.75V13.5C10.5001 13.1022 10.3421 12.7206 10.0607 12.4393C9.77941 12.158 9.39785 12 8.99999 12C8.60213 12 8.22057 12.158 7.93924 12.4393C7.65792 12.7206 7.49987 13.1022 7.49987 13.5V15.75M4.49963 7.5H2.99951C2.60165 7.5 2.22009 7.65804 1.93876 7.93934C1.65744 8.22064 1.49939 8.60218 1.49939 9V14.25C1.49939 14.6478 1.65744 15.0294 1.93876 15.3107C2.22009 15.592 2.60165 15.75 2.99951 15.75H15.0005C15.3983 15.75 15.7799 15.592 16.0612 15.3107C16.3425 15.0294 16.5006 14.6478 16.5006 14.25V6.75C16.5006 6.35218 16.3425 5.97064 16.0612 5.68934C15.7799 5.40804 15.3983 5.25 15.0005 5.25H13.5003M4.49963 15.75V3.75C4.49963 3.35218 4.65768 2.97064 4.939 2.68934C5.22033 2.40804 5.60189 2.25 5.99975 2.25H12.0002C12.3981 2.25 12.7796 2.40804 13.061 2.68934C13.3423 2.97064 13.5003 3.35218 13.5003 3.75V15.75" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/></svg>',
                                'color' => 'yellow',
                                'name' => 'TPAs',
                                'count' => '1 partner',
                                'pct' => '33%',
                                'frac' => '1 / 3',
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
            <div class="card shadow-sm border-0" style="border-radius: 12px;">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold mb-4">Add New Partner</h5>
                    <!-- The form goes here -->
                    <p class="text-muted">Formulaire d'ajout de partenaire (à compléter par vous-même)</p>
                    <div class="mt-4">
                        <button class="btn btn-outline-secondary" onclick="hideDisplay()">Cancel / Retour</button>
                        <button class="btn btn-custom-primary ms-2">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Partner Form -->

    </div>

    <script>
        function display() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('add-partner-form').style.display = 'block';
        }

        function hideDisplay() {
            document.getElementById('main-content').style.display = 'block';
            document.getElementById('add-partner-form').style.display = 'none';
        }
    </script>
@endsection