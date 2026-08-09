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
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            style="flex-shrink: 0;">
                            <path
                                d="M6.875 11.875C9.63642 11.875 11.875 9.63642 11.875 6.875C11.875 4.11358 9.63642 1.875 6.875 1.875C4.11358 1.875 1.875 4.11358 1.875 6.875C1.875 9.63642 4.11358 11.875 6.875 11.875Z"
                                stroke="#9CA3AF" stroke-width="1.25" />
                            <path d="M13.125 13.125L10.4062 10.4062" stroke="#9CA3AF" stroke-width="1.25" />
                        </svg>
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
                                                <span id="detail_partner_type_badge" class="badge rounded-pill px-2.5 py-1 fw-medium" style="background: #F3E8FF; color: #7C3AED !important; border: 1px solid #DDD6FE;">
                                                    <i class="bi bi-shield me-1"></i> <span id="detail_partner_type_text">Insurance Provider</span>
                                                </span>
                                                <span id="detail_partner_code" class="text-muted" style="font-size: 13px;">
                                                    Partner ID: STA-INS-002
                                                </span>
                                            </div>
                                            <div>
                                                <a href="#" onclick="displayEdit(currentPartnerData)" class="edit-partner-btn-purple">
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
                                                    <a id="detail_contract_file" href="#" target="_blank" class="fw-bold" style="font-size: 13px; display: none;"></a>
                                                    <div id="detail_contract_file_empty" class="fw-bold text-dark" style="font-size: 13px;">-</div>
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
                if (partner.address) {
                    let parts = partner.address.split(',');
                    document.getElementById('detail_address1').innerText = parts[0] ? parts[0].trim() : 'Eiffel 2';
                    document.getElementById('detail_address2').innerText = parts[1] ? parts[1].trim() : 'Le kram';
                }
                if (partner.city) document.getElementById('detail_city').innerText = partner.city;
                if (partner.country) document.getElementById('detail_country').innerText = partner.country;

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
