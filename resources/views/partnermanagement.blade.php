@extends('theme')

@section('content')
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
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
                        <input type="text" id="customSearchBox" placeholder="Search partners...">
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
                        <a class="nav-link active" href="#">All Partners <span class="badge">{{$countpartner}}</span></a>
                    </li>
                    <li class="nav-item">
    <a class="nav-link" href="#">
        Insurance <span class="badge">{{ $countInsuranceProvider }}</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        Brokers <span class="badge">{{ $countInsuranceBroker }}</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        TPAs <span class="badge">{{ $countTPA }}</span>
    </a>
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
        <div class="row g-3 mb-4">
            @foreach($stats as $stat)
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card stat-{{ $stat['default_color'] }} clickable-stat" 
                         onclick="selectStatCard(this, '{{ $stat['default_color'] }}', '{{ $stat['filter'] }}')"
                         data-default-color="{{ $stat['default_color'] }}">
                        
                        <div class="stat-border border-{{ $stat['default_color'] }}"></div>
                        
                        <div class="stat-icon {{ $stat['default_color'] }}">
                            {!! $stat['svg'] !!}
                        </div>
                        
                        <div class="stat-content">
                            <h3 class="stat-value text-{{ $stat['default_color'] }}">{{ $stat['value'] }}</h3>
                            <p class="stat-label">{{ $stat['title'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <script>
            let partnerDataTable = null;

            function selectStatCard(element, defaultColor, filter) {
                // Remove active classes from all cards
                document.querySelectorAll('.stat-card').forEach(card => {
                    card.classList.remove('active-blue', 'active-green', 'active-yellow', 'active-red');
                });
                
                // Add active class to clicked card
                element.classList.add('active-' + defaultColor);
                
                // Filter rows in the table
                filterPartners(filter);
            }

            function filterPartners(filter) {
                if (partnerDataTable) {
                    if (filter === 'all') {
                        partnerDataTable.column(3).search('').draw();
                    } else {
                        // Exact match for the status column
                        partnerDataTable.column(3).search('^' + filter + '$', true, false).draw();
                    }
                } else {
                    const rows = document.querySelectorAll('.partner-row');
                    rows.forEach(row => {
                        if (filter === 'all' || row.getAttribute('data-status') === filter) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
            }
        </script>
        <!-- End Statistics -->

        <div class="row g-4">
            <!-- Start Partner List Column -->
            <div class="col-lg-8 col-12">
                <div id="partner-list-card" class="partner-list-container">
                    <div class="partner-list-header">
                        <h5 class="mb-0 fw-bold">Partner List</h5>
                        <span class="text-muted-custom fs-7">{{$countpartner}} partners</span>
                    </div>
                    <div class="table-responsive">
                        <table id="partnerDataTable" class="table partner-table mb-0 align-middle w-100">
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

                                @foreach($partners as $partner)
                                    <tr class="partner-row" data-status="{{ $partner['status'] }}" style="cursor: pointer;" onclick="openPartnerDetails({{ json_encode($partner) }})">
                                        <td style="min-width: 350px;">
                                            <div class="d-flex gap-3">
                                                <div class="partner-logo" style="overflow: hidden; padding: 0;">
                                                    @if($partner['logo_url'])
                                                        <img src="{{ $partner['logo_url'] }}" alt="{{ $partner['name'] }}" style="width: 100%; height: 100%; object-fit: contain; border-radius: 10px;">
                                                    @else
                                                        {{ $partner['logo'] }}
                                                    @endif
                                                </div>
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
                                            <a href="#" onclick="displayEdit({{ json_encode($partner) }}); event.stopPropagation();" class="edit-partner-btn mt-2">
                                                Edit Partner
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <g clip-path="url(#clip0_1249_184)">
                                                        <path d="M8.75027 2.91623L11.0838 5.24952M12.3521 3.97343C12.6605 3.6651 12.8338 3.24689 12.8339 2.81079C12.8339 2.37468 12.6607 1.95642 12.3523 1.64802C12.044 1.33961 11.6257 1.16631 11.1896 1.16626C10.7534 1.16621 10.3351 1.33939 10.0267 1.64772L2.24082 9.43451C2.10537 9.56955 2.0052 9.73581 1.94912 9.91866L1.17847 12.4573C1.1634 12.5077 1.16226 12.5613 1.17518 12.6124C1.1881 12.6634 1.2146 12.71 1.25186 12.7472C1.28912 12.7844 1.33577 12.8108 1.38683 12.8237C1.4379 12.8365 1.49149 12.8353 1.54192 12.8201L4.0814 12.0501C4.2641 11.9946 4.43036 11.895 4.56561 11.7602L12.3521 3.97343Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1249_184">
                                                            <rect width="14" height="14" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
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
                        <div class="d-flex justify-content-between align-items-center" style="height: 56px; padding: 0 20px; border-radius: 12px 12px 0 0; background: #0B4F8A;">
                            <div class="d-flex align-items-center" style="gap: 10px;">
                                <div class="d-flex align-items-center justify-content-center" style="height: 28px; padding: 5px 3px 5px 7px; border-radius: 8px; background: rgba(255, 255, 255, 0.12); gap: 4px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="flex-shrink:0;">
                                        <path d="M12.75 15.75V14.25C12.75 13.4544 12.4339 12.6913 11.8713 12.1287C11.3087 11.5661 10.5456 11.25 9.75 11.25H3.75C2.95435 11.25 2.19129 11.5661 1.62868 12.1287C1.06607 12.6913 0.75 13.4544 0.75 14.25V15.75" stroke="white" stroke-width="1.5"/>
                                        <path d="M6.75 8.25C8.40685 8.25 9.75 6.90685 9.75 5.25C9.75 3.59315 8.40685 2.25 6.75 2.25C5.09315 2.25 3.75 3.59315 3.75 5.25C3.75 6.90685 5.09315 8.25 6.75 8.25Z" stroke="white" stroke-width="1.5"/>
                                    </svg>
                                </div>
                                <h5 class="mb-0" style="color: #FFF; font-family: 'Inter', sans-serif; font-size: 16px; font-weight: 700;">Partner Details</h5>
                            </div>
                            <button type="button" class="btn text-white p-0 border-0 d-flex align-items-center" onclick="showPartnerList(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" style="flex-shrink:0;">
                                    <g opacity="0.9" clip-path="url(#clip0_1007_538)">
                                        <path d="M12.5002 7.49982L7.49982 12.5002M7.49982 7.49982L12.5002 12.5002M18.334 10C18.334 14.6028 14.6028 18.334 10 18.334C5.39727 18.334 1.66602 14.6028 1.66602 10C1.66602 5.39727 5.39727 1.66602 10 1.66602C14.6028 1.66602 18.334 5.39727 18.334 10Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1007_538">
                                            <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>

                        <div class="card-body p-4 bg-white">

                            <!-- Top Partner Banner Box -->
                            <div class="rounded-4 bg-white mb-4" style="border: 1px solid #E2E8F0; box-shadow: 0 6px 16px -8px rgba(0, 0, 0, 0.04); padding: 16px;">
                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                    <!-- Left: Logo & Info -->
                                    <div class="d-flex align-items-center gap-3">
                                        <div id="detail_logo_box" class="d-flex flex-column justify-content-center align-items-center text-white fw-bold flex-shrink-0" style="width: 56px; height: 56px; border-radius: 14px; background: linear-gradient(90deg, #015AA7 0%, #1C4E7A 100%); font-family: 'Inter', sans-serif; font-size: 24px;">
                                            AP
                                        </div>
                                        <div class="d-flex flex-column" style="gap: 7px;">
                                            <h4 id="detail_partner_name" class="mb-0" style="font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 600; color: #1A202C;">
                                                Allianz Partners Middle East & Africa
                                            </h4>
                                            <div class="d-flex align-items-center flex-wrap" style="gap: 6px;">
                                                <span id="detail_partner_type_badge" class="d-inline-flex align-items-center" style="padding: 6px 10px; gap: 6px; border-radius: 999px; border: 1px solid #E2E8F0; background: #FFF;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none" style="flex-shrink:0;">
                                                        <g clip-path="url(#clip0_1009_403_badge)">
                                                            <path d="M6.99994 5.8333H7.00577M6.99994 8.16682H7.00577M6.99994 3.49978H7.00577M9.33304 5.8333H9.33887M9.33304 8.16682H9.33887M9.33304 3.49978H9.33887M4.66684 5.8333H4.67267M4.66684 8.16682H4.67267M4.66684 3.49978H4.67267M5.25012 12.8339V11.0837C5.25012 10.929 5.31157 10.7806 5.42095 10.6712C5.53034 10.5618 5.6787 10.5003 5.83339 10.5003H8.16649C8.32118 10.5003 8.46954 10.5618 8.57893 10.6712C8.68831 10.7806 8.74976 10.929 8.74976 11.0837V12.8339M3.50029 1.16626H10.4996C11.1439 1.16626 11.6661 1.68864 11.6661 2.33302V11.6671C11.6661 12.3115 11.1439 12.8339 10.4996 12.8339H3.50029C2.85602 12.8339 2.33374 12.3115 2.33374 11.6671V2.33302C2.33374 1.68864 2.85602 1.16626 3.50029 1.16626Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1009_403_badge">
                                                                <rect width="14" height="14" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span id="detail_partner_type_text" style="color: #0B4F8A; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 700;">Insurance Provider</span>
                                                </span>
                                                <span id="detail_partner_code" style="color: #64748B; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 400;">Partner ID: <span id="detail_partner_code_value">STA-INS-002</span></span>
                                            </div>
                                            <div>
                                                <a href="#" onclick="displayEdit(currentPartnerData)" class="d-inline-flex align-items-center text-decoration-none" style="width: 110px; padding: 6px 10px; gap: 6px; border-radius: 999px; background: rgba(25, 94, 153, 0.18); color: #0B4F8A; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 700;">
                                                    Edit Partner
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none" style="flex-shrink:0;">
                                                        <g clip-path="url(#clip0_1375_1067)">
                                                            <path d="M8.75027 2.91623L11.0838 5.24952M12.3521 3.97343C12.6605 3.6651 12.8338 3.24689 12.8339 2.81079C12.8339 2.37468 12.6607 1.95642 12.3523 1.64802C12.044 1.33961 11.6257 1.16631 11.1896 1.16626C10.7534 1.16621 10.3351 1.33939 10.0267 1.64772L2.24082 9.43451C2.10537 9.56955 2.0052 9.73581 1.94912 9.91866L1.17847 12.4573C1.1634 12.5077 1.16226 12.5613 1.17518 12.6124C1.1881 12.6634 1.2146 12.71 1.25186 12.7472C1.28912 12.7844 1.33577 12.8108 1.38683 12.8237C1.4379 12.8365 1.49149 12.8353 1.54192 12.8201L4.0814 12.0501C4.2641 11.9946 4.43036 11.895 4.56561 11.7602L12.3521 3.97343Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1375_1067">
                                                                <rect width="14" height="14" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right: Status & Population Metrics -->
                                    <div class="d-flex flex-column align-items-start" style="gap: 10px; width: 260px; max-width: 100%;">
                                        <span id="detail_status_badge" class="d-inline-flex align-items-center" style="padding: 6px 10px; gap: 8px; border-radius: 999px; border: 1px solid #A7F3D0; background: #D1FAE5;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none" style="flex-shrink:0;">
                                                <g clip-path="url(#clip0_1009_406)">
                                                    <path d="M12.7168 5.83345C12.9832 7.14087 12.7934 8.50011 12.1789 9.6845C11.5644 10.8689 10.5625 11.8068 9.3402 12.3419C8.1179 12.877 6.7491 12.9768 5.46208 12.6248C4.17505 12.2728 3.0476 11.4903 2.26773 10.4076C1.48786 9.32496 1.10272 8.00767 1.17654 6.67542C1.25036 5.34318 1.77867 4.0765 2.67337 3.08663C3.56807 2.09676 4.77508 1.44353 6.09311 1.23588C7.41114 1.02823 8.76053 1.2787 9.91624 1.94553M5.2498 6.4165L6.9998 8.1665L12.8331 2.33317" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1009_406">
                                                        <rect width="14" height="14" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span id="detail_status_badge_text" style="color:#065F46; font-family:'Inter', sans-serif; font-size:12px; font-weight:700;">Active</span>
                                        </span>

                                        <div class="d-flex align-items-start" style="gap: 10px; width: 100%;">
                                            <div class="d-flex flex-column align-items-start" style="padding: 10px; gap: 2px; flex: 1 0 0; border-radius: 10px; border: 1px solid #E2E8F0; background: #F8FAFC;">
                                                <div style="color:#64748B; font-family:'Inter', sans-serif; font-size:11px; font-weight:600;">TOTAL POPULATION</div>
                                                <div id="detail_total_population" style="color:#0F172A; font-family:'Inter', sans-serif; font-size:16px; font-weight:800;">1</div>
                                            </div>

                                            <div class="d-flex flex-column align-items-start" style="padding: 10px; gap: 2px; flex: 1 0 0; border-radius: 10px; border: 1px solid #E2E8F0; background: #F8FAFC;">
                                                <div style="color:#64748B; font-family:'Inter', sans-serif; font-size:11px; font-weight:600;">ACTIVE POPULATION</div>
                                                <div id="detail_active_population" style="color:#0F172A; font-family:'Inter', sans-serif; font-size:16px; font-weight:800;">1</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Info Sections -->
                            <div class="row g-4">

                                <!-- 1. Contract Info Card -->
                                <div class="col-lg-6">
                                    <div class="border rounded-4 p-4 h-100 bg-white" style="border-color: #E2E8F0 !important;">
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background-color: #DBEAFE; color: #2563EB;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="flex-shrink:0;">
                                                    <path d="M10.4997 1.49951H4.50034C4.10255 1.49951 3.72106 1.65756 3.43978 1.93889C3.15851 2.22022 3.00049 2.60178 3.00049 2.99963V15.0006C3.00049 15.3984 3.15851 15.78 3.43978 16.0613C3.72106 16.3427 4.10255 16.5007 4.50034 16.5007H13.4994C13.8972 16.5007 14.2787 16.3427 14.56 16.0613C14.8413 15.78 14.9993 15.3984 14.9993 15.0006V5.99987M10.4997 1.49951C10.7371 1.49913 10.9723 1.54572 11.1916 1.6366C11.4109 1.72748 11.61 1.86086 11.7776 2.02906L14.4683 4.72027C14.637 4.88791 14.7707 5.08731 14.8618 5.30694C14.953 5.52657 14.9997 5.76208 14.9993 5.99987M10.4997 1.49951V5.24981C10.4997 5.44874 10.5787 5.63952 10.7194 5.78018C10.86 5.92085 11.0508 5.99987 11.2497 5.99987L14.9993 5.99987M7.50004 6.74993H6.00019M11.9996 9.75017H6.00019M11.9996 12.7504H6.00019" stroke="#1D4ED8" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h5 class="fw-bold mb-0 text-dark" style="font-size: 15px;">Contract Info</h5>
                                                <div class="text-muted" style="font-size: 12px;">Key contract details and billing settings</div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column gap-2">
                                            <!-- Contract Start -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M5.33333 1.33276V3.99964M10.6667 1.33276V3.99964M2 6.66652H14M3.33333 2.6662H12.6667C13.403 2.6662 14 3.26321 14 3.99964V13.3337C14 14.0702 13.403 14.6672 12.6667 14.6672H3.33333C2.59695 14.6672 2 14.0702 2 13.3337V3.99964C2 3.26321 2.59695 2.6662 3.33333 2.6662Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT START</div>
                                                    <div id="detail_contract_start" class="fw-semibold" style="font-size: 13px; color: #334155;">2025-10-01</div>
                                                </div>
                                            </div>
                                            <!-- Contract End -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M5.33333 1.33276V3.99964M10.6667 1.33276V3.99964M2 6.66652H14M3.33333 2.6662H12.6667C13.403 2.6662 14 3.26321 14 3.99964V13.3337C14 14.0702 13.403 14.6672 12.6667 14.6672H3.33333C2.59695 14.6672 2 14.0702 2 13.3337V3.99964C2 3.26321 2.59695 2.6662 3.33333 2.6662Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT END</div>
                                                    <div id="detail_contract_end" class="fw-semibold" style="font-size: 13px; color: #334155;">2029-12-02</div>
                                                </div>
                                            </div>
                                            <!-- Contract No -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M9.33323 1.33277H4.00044C3.64685 1.33277 3.30774 1.47325 3.05772 1.72332C2.8077 1.97339 2.66724 2.31256 2.66724 2.66621V13.3337C2.66724 13.6874 2.8077 14.0265 3.05772 14.2766C3.30774 14.5267 3.64685 14.6672 4.00044 14.6672H11.9996C12.3532 14.6672 12.6923 14.5267 12.9423 14.2766C13.1924 14.0265 13.3328 13.6874 13.3328 13.3337V5.33309M9.33323 1.33277C9.54425 1.33242 9.75325 1.37384 9.94819 1.45462C10.1431 1.53541 10.3202 1.65396 10.4691 1.80347L12.8609 4.19566C13.0108 4.34468 13.1296 4.52192 13.2106 4.71714C13.2916 4.91237 13.3332 5.12171 13.3328 5.33309M9.33323 1.33277V4.66636C9.33323 4.84319 9.40347 5.01277 9.52848 5.1378C9.65349 5.26284 9.82304 5.33308 9.99983 5.33308L13.3328 5.33309" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT NO.</div>
                                                    <div id="detail_contract_no" class="fw-semibold" style="font-size: 13px; color: #334155;">CONTRACT2025</div>
                                                </div>
                                            </div>
                                            <!-- Contract File -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M9.33323 1.33277H4.00044C3.64685 1.33277 3.30774 1.47325 3.05772 1.72332C2.8077 1.97339 2.66724 2.31256 2.66724 2.66621V13.3337C2.66724 13.6874 2.8077 14.0265 3.05772 14.2766C3.30774 14.5267 3.64685 14.6672 4.00044 14.6672H11.9996C12.3532 14.6672 12.6923 14.5267 12.9423 14.2766C13.1924 14.0265 13.3328 13.6874 13.3328 13.3337V5.33309M9.33323 1.33277C9.54425 1.33242 9.75325 1.37384 9.94819 1.45462C10.1431 1.53541 10.3202 1.65396 10.4691 1.80347L12.8609 4.19566C13.0108 4.34468 13.1296 4.52192 13.2106 4.71714C13.2916 4.91237 13.3332 5.12171 13.3328 5.33309M9.33323 1.33277V4.66636C9.33323 4.84319 9.40347 5.01277 9.52848 5.1378C9.65349 5.26284 9.82304 5.33308 9.99983 5.33308L13.3328 5.33309" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTRACT FILE</div>
                                                    <a id="detail_contract_file" href="#" target="_blank" class="fw-bold" style="font-size: 13px; display: none;"></a>
                                                    <div id="detail_contract_file_empty" class="fw-semibold" style="font-size: 13px; color: #334155;">-</div>
                                                </div>
                                            </div>
                                            <!-- Billing Type -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <g clip-path="url(#clip0_1009_427)">
                                                        <path d="M11.3333 6.66652L14 3.99964L11.3333 1.33276M14 3.99964H4.66667C3.95942 3.99964 3.28115 4.28062 2.78105 4.78075C2.28095 5.28089 2 5.95922 2 6.66652V7.33324M4.66667 9.3334L2 12.0003L4.66667 14.6672M2 12.0003H11.3333C12.0406 12.0003 12.7189 11.7193 13.219 11.2192C13.719 10.719 14 10.0407 14 9.3334V8.66668" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1009_427">
                                                            <rect width="16" height="16" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">BILLING TYPE</div>
                                                    <div id="detail_billing_type" class="fw-semibold" style="font-size: 13px; color: #334155;">Per Member</div>
                                                </div>
                                            </div>
                                            <!-- Default Currency -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M3.99964 8H4.00631M12.0003 8H12.007M2.6662 4H13.3337C14.0702 4 14.6672 4.59695 14.6672 5.33333V10.6667C14.6672 11.403 14.0702 12 13.3337 12H2.6662C1.92977 12 1.33276 11.403 1.33276 10.6667V5.33333C1.33276 4.59695 1.92977 4 2.6662 4ZM9.3334 8C9.3334 8.73638 8.7364 9.33333 7.99996 9.33333C7.26353 9.33333 6.66652 8.73638 6.66652 8C6.66652 7.26362 7.26353 6.66667 7.99996 6.66667C8.7364 6.66667 9.3334 7.26362 9.3334 8Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">DEFAULT CURRENCY</div>
                                                    <div id="detail_currency" class="fw-semibold" style="font-size: 13px; color: #334155;">tnd</div>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="flex-shrink:0;">
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
                                                <h5 class="fw-bold mb-0 text-dark" style="font-size: 15px;">Contact Info</h5>
                                                <div class="text-muted" style="font-size: 12px;">Primary contact details for communication</div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column gap-2">
                                            <!-- Contact Person -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M12.6672 14V12.6667C12.6672 11.9594 12.3862 11.2811 11.886 10.781C11.3859 10.281 10.7075 10 10.0002 10H5.99974C5.29241 10 4.61406 10.281 4.1139 10.781C3.61375 11.2811 3.33276 11.9594 3.33276 12.6667V14M10.6669 4.66667C10.6669 6.13943 9.47289 7.33333 7.99996 7.33333C6.52704 7.33333 5.33299 6.13943 5.33299 4.66667C5.33299 3.19391 6.52704 2 7.99996 2C9.47289 2 10.6669 3.19391 10.6669 4.66667Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">CONTACT PERSON</div>
                                                    <div id="detail_contact_person" class="fw-semibold" style="font-size: 13px; color: #334155;">Mr X</div>
                                                </div>
                                            </div>
                                            <!-- Designation -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M10.6668 13.3328V2.6661C10.6668 2.31248 10.5264 1.97334 10.2763 1.72329C10.0262 1.47324 9.68705 1.33276 9.3334 1.33276H6.66652C6.31287 1.33276 5.97371 1.47324 5.72364 1.72329C5.47357 1.97334 5.33308 2.31248 5.33308 2.6661V13.3328M2.6662 3.99943H13.3337C14.0702 3.99943 14.6672 4.59638 14.6672 5.33276V11.9994C14.6672 12.7358 14.0702 13.3328 13.3337 13.3328H2.6662C1.92977 13.3328 1.33276 12.7358 1.33276 11.9994V5.33276C1.33276 4.59638 1.92977 3.99943 2.6662 3.99943Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">DESIGNATION</div>
                                                    <div id="detail_contact_designation" class="fw-semibold" style="font-size: 13px; color: #334155;">CEO</div>
                                                </div>
                                            </div>
                                            <!-- Email -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M14.6672 4.66704L8.67268 8.48465C8.46926 8.60278 8.23821 8.66501 8.00296 8.66501C7.76772 8.66501 7.53666 8.60278 7.33324 8.48465L1.33276 4.66704M2.6662 2.66724H13.3337C14.0702 2.66724 14.6672 3.26413 14.6672 4.00044V11.9996C14.6672 12.7359 14.0702 13.3328 13.3337 13.3328H2.6662C1.92977 13.3328 1.33276 12.7359 1.33276 11.9996V4.00044C1.33276 3.26413 1.92977 2.66724 2.6662 2.66724Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">EMAIL</div>
                                                    <div id="detail_contact_email" class="fw-semibold" style="font-size: 13px; color: #334155;">MrX@star.com</div>
                                                </div>
                                            </div>
                                            <!-- Invoice Email -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <path d="M14.6672 4.66704L8.67268 8.48465C8.46926 8.60278 8.23821 8.66501 8.00296 8.66501C7.76772 8.66501 7.53666 8.60278 7.33324 8.48465L1.33276 4.66704M2.6662 2.66724H13.3337C14.0702 2.66724 14.6672 3.26413 14.6672 4.00044V11.9996C14.6672 12.7359 14.0702 13.3328 13.3337 13.3328H2.6662C1.92977 13.3328 1.33276 12.7359 1.33276 11.9996V4.00044C1.33276 3.26413 1.92977 2.66724 2.6662 2.66724Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">INVOICE EMAIL</div>
                                                    <div id="detail_invoice_email" class="fw-semibold" style="font-size: 13px; color: #334155;">Invoice@star.com</div>
                                                </div>
                                            </div>
                                            <!-- Phone -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <g clip-path="url(#clip0_1009_448)">
                                                        <path d="M9.66122 11.0865C9.51422 11.1232 9.35909 11.1088 9.2214 11.0455C7.36953 10.1367 5.87091 8.63993 4.95972 6.7892C4.89224 6.65077 4.87476 6.49325 4.91024 6.3434C4.94573 6.19354 5.032 6.06059 5.1544 5.96713L5.46643 5.73312C5.63204 5.60891 5.76645 5.44785 5.85903 5.2627C5.95161 5.07754 5.9998 4.87337 5.9998 4.66636V2.6662C5.9998 2.31255 5.85932 1.97339 5.60925 1.72332C5.35918 1.47325 5.02001 1.33276 4.66636 1.33276H2.6662C2.31255 1.33276 1.97339 1.47325 1.72332 1.72332C1.47325 1.97339 1.33276 2.31255 1.33276 2.6662C1.33276 5.84906 2.59715 8.90155 4.84776 11.1522C7.09838 13.4028 10.1509 14.6672 13.3337 14.6672C13.6874 14.6672 14.0265 14.5267 14.2766 14.2766C14.5267 14.0265 14.6672 13.6874 14.6672 13.3337V11.3336C14.6672 10.9799 14.5267 10.6407 14.2766 10.3907C14.0265 10.1406 13.6874 10.0001 13.3337 10.0001H11.3336C11.1266 10.0001 10.9224 10.0483 10.7372 10.1409C10.5521 10.2335 10.391 10.3679 10.2668 10.5335L10.0301 10.8435C9.93834 10.9641 9.80823 11.0498 9.66122 11.0865Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1009_448">
                                                            <rect width="16" height="16" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">PHONE</div>
                                                    <div id="detail_contact_phone" class="fw-semibold" style="font-size: 13px; color: #334155;">0021671225566</div>
                                                </div>
                                            </div>
                                            <!-- Alt Phone -->
                                            <div class="bg-light border rounded-3 p-2.5 px-3 d-flex align-items-center gap-3" style="background-color: #F8FAFC;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;">
                                                    <g clip-path="url(#clip0_1009_448_alt)">
                                                        <path d="M9.66122 11.0865C9.51422 11.1232 9.35909 11.1088 9.2214 11.0455C7.36953 10.1367 5.87091 8.63993 4.95972 6.7892C4.89224 6.65077 4.87476 6.49325 4.91024 6.3434C4.94573 6.19354 5.032 6.06059 5.1544 5.96713L5.46643 5.73312C5.63204 5.60891 5.76645 5.44785 5.85903 5.2627C5.95161 5.07754 5.9998 4.87337 5.9998 4.66636V2.6662C5.9998 2.31255 5.85932 1.97339 5.60925 1.72332C5.35918 1.47325 5.02001 1.33276 4.66636 1.33276H2.6662C2.31255 1.33276 1.97339 1.47325 1.72332 1.72332C1.47325 1.97339 1.33276 2.31255 1.33276 2.6662C1.33276 5.84906 2.59715 8.90155 4.84776 11.1522C7.09838 13.4028 10.1509 14.6672 13.3337 14.6672C13.6874 14.6672 14.0265 14.5267 14.2766 14.2766C14.5267 14.0265 14.6672 13.6874 14.6672 13.3337V11.3336C14.6672 10.9799 14.5267 10.6407 14.2766 10.3907C14.0265 10.1406 13.6874 10.0001 13.3337 10.0001H11.3336C11.1266 10.0001 10.9224 10.0483 10.7372 10.1409C10.5521 10.2335 10.391 10.3679 10.2668 10.5335L10.0301 10.8435C9.93834 10.9641 9.80823 11.0498 9.66122 11.0865Z" stroke="#C2410C" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1009_448_alt">
                                                            <rect width="16" height="16" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <div>
                                                    <div class="text-muted text-uppercase" style="font-size: 9px; font-weight: 700;">ALT PHONE</div>
                                                    <div id="detail_alt_phone" class="fw-semibold" style="font-size: 13px; color: #334155;">-</div>
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
                        <div class="fs-2 fw-bold text-primary lh-1">{{ $totalPartners }}</div>
                    </div>

                    <!-- Quick stats are passed from controller -->

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

                    <!-- Activities are passed from controller -->

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

        <!-- Start Edit Partner Form -->
        <div id="edit-partner-form" style="display: none;">
            @include('edit-partner-form')
        </div>
        <!-- End Edit Partner Form -->

        

    </div>

    <script>
        var currentPartnerData = null;

        function display() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('add-partner-form').style.display = 'block';
            document.getElementById('edit-partner-form').style.display = 'none';
        }

        function hideDisplay(e) {
            if(e) e.preventDefault();
            document.getElementById('main-content').style.display = 'block';
            document.getElementById('add-partner-form').style.display = 'none';
            document.getElementById('edit-partner-form').style.display = 'none';
            showPartnerList();
        }

        function displayEdit(partner) {
            if (!partner) return;
            currentPartnerData = partner;

            document.getElementById('main-content').style.display = 'none';
            document.getElementById('add-partner-form').style.display = 'none';
            document.getElementById('edit-partner-form').style.display = 'block';

            // Pre-fill the edit form fields
            document.getElementById('edit_partner_id').value = partner.id || '';
            document.getElementById('edit_partner_name').value = partner.name || '';

            var typeSelect = document.getElementById('edit_partner_type');
            var pt = partner.partner_type || partner.type || '';
            for (var i = 0; i < typeSelect.options.length; i++) {
                if (typeSelect.options[i].value === pt) { typeSelect.selectedIndex = i; break; }
            }

            document.getElementById('edit_internal_code').value = (partner.internal_code && partner.internal_code !== 'N/A') ? partner.internal_code : '';

            var statusSelect = document.getElementById('edit_status');
            var sr = (partner.status_raw || partner.status || '').toLowerCase();
            for (var i = 0; i < statusSelect.options.length; i++) {
                if (statusSelect.options[i].value === sr) { statusSelect.selectedIndex = i; break; }
            }

            document.getElementById('edit_logo_link').value = partner.logo_link || '';
            document.getElementById('edit_website').value = (partner.website && partner.website !== 'N/A') ? partner.website : '';
            document.getElementById('edit_linkedin').value = partner.linkedin || '';
            document.getElementById('edit_description').value = partner.description || '';

            // Address fields
            document.getElementById('edit_address_line1').value = partner.address_line1 || '';
            document.getElementById('edit_address_line2').value = partner.address_line2 || '';
            document.getElementById('edit_city').value = (partner.city && partner.city !== 'N/A') ? partner.city : '';
            document.getElementById('edit_state').value = partner.state || '';
            document.getElementById('edit_country').value = (partner.country && partner.country !== 'N/A') ? partner.country : '';
            document.getElementById('edit_postal_code').value = partner.postal_code || '';

            // Contact fields
            document.getElementById('edit_contact_name').value = (partner.contact_name && partner.contact_name !== 'N/A') ? partner.contact_name : '';
            document.getElementById('edit_contact_email').value = (partner.contact_email && partner.contact_email !== 'N/A') ? partner.contact_email : '';
            document.getElementById('edit_contact_phone').value = (partner.contact_phone && partner.contact_phone !== 'N/A') ? partner.contact_phone : '';
            document.getElementById('edit_country_code').value = partner.country_code || '';

            // Contract fields
            document.getElementById('edit_contract_start').value = (partner.contract_start && partner.contract_start !== 'N/A') ? partner.contract_start : '';
            document.getElementById('edit_contract_end').value = (partner.contract_end && partner.contract_end !== 'N/A') ? partner.contract_end : '';
            document.getElementById('edit_contract_notes').value = partner.contract_notes || '';

            // Reset to step 1
            editGoToStep(1);
        }

        function hideEditDisplay(e) {
            if(e) e.preventDefault();
            document.getElementById('main-content').style.display = 'block';
            document.getElementById('edit-partner-form').style.display = 'none';
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
            currentPartnerData = partner;
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

                let logoBox = document.getElementById('detail_logo_box');
                if (partner.logo_url) {
                    logoBox.innerHTML = `<img src="${partner.logo_url}" alt="${name}" style="width: 100%; height: 100%; object-fit: contain; border-radius: inherit;">`;
                } else {
                    logoBox.innerHTML = '';
                    logoBox.innerText = logo;
                }
                document.getElementById('detail_partner_name').innerText = name;
                document.getElementById('detail_partner_type_text').innerText = type;
                document.getElementById('detail_partner_code_value').innerText = code;
                
                let statusBadgeText = document.getElementById('detail_status_badge_text');
                if (statusBadgeText) {
                    statusBadgeText.innerText = status;
                }

                // Contact Info
                if (partner.contact_name) document.getElementById('detail_contact_person').innerText = partner.contact_name;
                if (partner.contact_email) document.getElementById('detail_contact_email').innerText = partner.contact_email;
                if (partner.contact_phone) document.getElementById('detail_contact_phone').innerText = partner.contact_phone;

                // Contract Info
                if (partner.contract_start) document.getElementById('detail_contract_start').innerText = partner.contract_start;
                if (partner.contract_end) document.getElementById('detail_contract_end').innerText = partner.contract_end;

                let contractFileLink = document.getElementById('detail_contract_file');
                let contractFileEmpty = document.getElementById('detail_contract_file_empty');
                if (partner.contract_file_url) {
                    contractFileLink.href = partner.contract_file_url;
                    contractFileLink.innerText = partner.contract_file_name || 'View file';
                    contractFileLink.style.display = 'inline';
                    contractFileEmpty.style.display = 'none';
                } else {
                    contractFileLink.style.display = 'none';
                    contractFileEmpty.style.display = 'block';
                }
            }
        }
    </script>

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            partnerDataTable = $('#partnerDataTable').DataTable({
                "dom": '<"top">rt<"bottom d-flex justify-content-between align-items-center mt-4"ip><"clear">',
                "pageLength": 10,
                "language": {
                    "info": "Showing _START_ to _END_ of _TOTAL_ partners",
                    "infoEmpty": "Showing 0 to 0 of 0 partners",
                    "paginate": {
                        "previous": '<i class="bi bi-chevron-left" style="font-size: 12px; stroke-width: 2px;"></i>',
                        "next": '<i class="bi bi-chevron-right" style="font-size: 12px; stroke-width: 2px;"></i>'
                    }
                }
            });

            // Bind custom search box to DataTables search
            $('#customSearchBox').on('keyup', function() {
                partnerDataTable.search(this.value).draw();
            });
        });
    </script>
@endsection
