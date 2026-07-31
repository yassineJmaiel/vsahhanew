@extends('theme')


@section('content')
    <div class="container-fluid p-0">
        <!-- Page Title & Actions Row -->
        <div class="group-page-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            <div class="header-title-section">
                <h1 class="header-main-title">Group Management</h1>
                <p class="header-sub-title">Manage relationships with insurance providers, brokers, and third-party administrators</p>
            </div>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <!-- Search -->
                <div class="search-input-wrapper me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                      <path d="M6.875 11.875C9.63642 11.875 11.875 9.63642 11.875 6.875C11.875 4.11358 9.63642 1.875 6.875 1.875C4.11358 1.875 1.875 4.11358 1.875 6.875C1.875 9.63642 4.11358 11.875 6.875 11.875Z" stroke="#9CA3AF" stroke-width="1.25"/>
                      <path d="M13.125 13.125L10.4062 10.4062" stroke="#9CA3AF" stroke-width="1.25"/>
                    </svg>
                    <input type="text" placeholder="Search metrics...">
                </div>

                <!-- Notification -->
                <button class="btn btn-header-square me-2" title="Notifications">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M7.70006 15.7506C7.83172 15.9786 8.02108 16.168 8.24911 16.2996C8.47713 16.4313 8.73579 16.5006 8.99909 16.5006C9.26239 16.5006 9.52105 16.4313 9.74907 16.2996C9.9771 16.168 10.1665 15.9786 10.2981 15.7506M2.44596 11.4947C2.34798 11.6021 2.28332 11.7357 2.25984 11.8792C2.23637 12.0226 2.25509 12.1698 2.31373 12.3029C2.37237 12.4359 2.46841 12.549 2.59015 12.6284C2.71189 12.7079 2.8541 12.7502 2.99947 12.7503H14.9997C15.1451 12.7504 15.2873 12.7082 15.4091 12.6289C15.5309 12.5496 15.6271 12.4366 15.6859 12.3037C15.7447 12.1707 15.7636 12.0236 15.7403 11.8801C15.717 11.7366 15.6525 11.603 15.5547 11.4955C14.5572 10.4671 13.4997 9.3743 13.4997 5.99977C13.4997 4.80619 13.0256 3.66151 12.1816 2.81752C11.3377 1.97354 10.1931 1.49939 8.99959 1.49939C7.80609 1.49939 6.66148 1.97354 5.81755 2.81752C4.97361 3.66151 4.4995 4.80619 4.4995 5.99977C4.4995 9.3743 3.44123 10.4671 2.44596 11.4947Z" stroke="#64748B" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                <!-- Grid / List View Toggle -->
                <div class="view-toggle-container">
                    <button class="btn view-toggle-btn active" title="Grid View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M2 6H14M2 10H14M6 2V14M10 2V14M3.33333 2H12.6667C13.403 2 14 2.59695 14 3.33333V12.6667C14 13.403 13.403 14 12.6667 14H3.33333C2.59695 14 2 13.403 2 12.6667V3.33333C2 2.59695 2.59695 2 3.33333 2Z"
                                stroke="#64748B" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                    <button class="btn view-toggle-btn" title="List View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M2 3.33276H2.00667M2 7.99996H2.00667M2 12.6672H2.00667M5.33333 3.33276H14M5.33333 7.99996H14M5.33333 12.6672H14" stroke="#64748B" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>

                <!-- Filter Button -->
                <button class="btn btn-header-square" title="Filter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M7.61131 15.3948C7.53804 15.2762 7.49926 15.1396 7.49933 15.0002V10.5001C7.49916 10.1284 7.36097 9.77001 7.11154 9.49438L1.69227 3.50252C1.59508 3.39484 1.5312 3.2613 1.50837 3.11806C1.48554 2.97482 1.50474 2.82803 1.56364 2.69548C1.62254 2.56293 1.71861 2.4503 1.84022 2.37123C1.96183 2.29216 2.10377 2.25005 2.24883 2.25H15.7501C15.8951 2.25034 16.0368 2.29266 16.1582 2.37184C16.2796 2.45102 16.3754 2.56367 16.4341 2.69616C16.4928 2.82866 16.5119 2.97533 16.489 3.11843C16.4661 3.26153 16.4023 3.39494 16.3052 3.50252L10.8874 9.49438C10.638 9.77001 10.4998 10.1284 10.4996 10.5001V15.7502C10.4997 15.8781 10.467 16.0038 10.4048 16.1155C10.3426 16.2272 10.2529 16.3212 10.1441 16.3884C10.0354 16.4557 9.91122 16.494 9.78348 16.4998C9.65574 16.5056 9.52865 16.4787 9.41426 16.4215L7.91412 15.6715C7.78943 15.6092 7.68457 15.5134 7.61131 15.3948Z" stroke="#64748B" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>

                <!-- Download / Export Button -->
                <button class="btn btn-header-square" title="Export Data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M9 11.25V2.25M12.75 7.5L9 11.25L5.25 7.5M15.75 11.25V14.25C15.75 14.6478 15.592 15.0294 15.3107 15.3107C15.0294 15.592 14.6478 15.75 14.25 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V11.25" stroke="#64748B" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>

                <!-- Add Group Button -->
                <button class="btn btn-add-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M3.74902 8.99999H14.2502M8.99962 3.74939V14.2506" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Add Group</span>
                </button>

                <!-- Refresh Button -->
                <button class="btn btn-header-refresh">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35472 10.0083 2.50325 8.50032 3.07091 7.12987C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C12.1 2.5 14.1083 3.33333 15.6167 4.78333L17.5 6.66667M13.3333 6.66667H17.5L17.5 2.5" stroke="#4A5568" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span class="refresh-text">Refresh</span>
                </button>
            </div>
        </div>

        <div class="px-4 pb-4 pt-4">
            <!-- Start Group Overview -->
            <div class="group-table-card mb-4">
                <div class="group-table-header">
                    <h5 class="group-table-title">Group Overview</h5>
                    <a href="#" class="btn btn-view-all-groups">View All Groups</a>
                </div>
                <div class="table-responsive">
                    <table class="table group-table align-middle">
                        <thead>
                            <tr>
                                <th>Group Name</th>
                                <th>Group Code</th>
                                <th>Partner</th>
                                <th>Members</th>
                                <th>Status</th>
                                <th>Last Activity</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $groups = [
                                    [
                                        'name' => 'Volus Solution Technologie',
                                        'code' => 'VOL-LLC-124',
                                        'partner' => 'Youna International TPA',
                                        'members' => 23,
                                        'status' => 'ACTIVE',
                                        'last_activity' => 'Oct 12, 2026'
                                    ],
                                    [
                                        'name' => 'Tanzania Mission Geneva',
                                        'code' => 'PER-LLC-275',
                                        'partner' => 'Youna International TPA',
                                        'members' => 47,
                                        'status' => 'ACTIVE',
                                        'last_activity' => 'Oct 11, 2026'
                                    ],
                                    [
                                        'name' => 'Republic of Azerbaijan Embassy',
                                        'code' => 'EMB-GOV-783',
                                        'partner' => 'Youna International TPA',
                                        'members' => 16,
                                        'status' => 'ACTIVE',
                                        'last_activity' => 'Oct 10, 2026'
                                    ],
                                    [
                                        'name' => 'Kazakhstan Vatican Mission',
                                        'code' => 'EMB-GOV-503',
                                        'partner' => 'Youna International TPA',
                                        'members' => 10,
                                        'status' => 'ACTIVE',
                                        'last_activity' => 'Oct 09, 2026'
                                    ],
                                    [
                                        'name' => 'Youna Premium-Ind',
                                        'code' => 'YOU-FL-948',
                                        'partner' => 'Youna International TPA',
                                        'members' => 7,
                                        'status' => 'ACTIVE',
                                        'last_activity' => 'Oct 08, 2026'
                                    ]
                                ];
                            @endphp

                            @foreach($groups as $group)
                                <tr>
                                    <td>
                                        <div class="group-name-cell">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none">
                                                <path
                                                    d="M7.4995 9H10.4997M7.4995 6H10.4997M10.4997 15.75V13.5C10.4997 13.1022 10.3417 12.7206 10.0604 12.4393C9.77904 12.158 9.39748 12 8.99962 12C8.60177 12 8.22021 12.158 7.93888 12.4393C7.65755 12.7206 7.4995 13.1022 7.4995 13.5V15.75M4.49926 7.5H2.99914C2.60129 7.5 2.21973 7.65804 1.9384 7.93934C1.65707 8.22064 1.49902 8.60218 1.49902 9V14.25C1.49902 14.6478 1.65707 15.0294 1.9384 15.3107C2.21973 15.592 2.60129 15.75 2.99914 15.75H15.0001C15.398 15.75 15.7795 15.592 16.0608 15.3107C16.3422 15.0294 16.5002 14.6478 16.5002 14.25V6.75C16.5002 6.35218 16.3422 5.97064 16.0608 5.68934C15.7795 5.40804 15.398 5.25 15.0001 5.25H13.5M4.49926 15.75V3.75C4.49926 3.35218 4.65731 2.97064 4.93864 2.68934C5.21997 2.40804 5.60153 2.25 5.99938 2.25H11.9999C12.3977 2.25 12.7793 2.40804 13.0606 2.68934C13.3419 2.97064 13.5 3.35218 13.5 3.75V15.75"
                                                    stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <span>{{ $group['name'] }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="group-code-text">{{ $group['code'] }}</span>
                                    </td>
                                    <td>
                                        <div class="partner-cell">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none">
                                                <path
                                                    d="M8.24956 12.7508L9.74968 14.2508C9.89743 14.3985 10.0728 14.5157 10.2659 14.5957C10.4589 14.6756 10.6658 14.7168 10.8748 14.7168C11.0837 14.7168 11.2906 14.6756 11.4837 14.5957C11.6767 14.5157 11.8521 14.3985 11.9999 14.2508C12.1476 14.1031 12.2648 13.9277 12.3448 13.7346C12.4247 13.5416 12.4659 13.3347 12.4659 13.1258C12.4659 12.9169 12.4247 12.71 12.3448 12.5169C12.2648 12.3239 12.1476 12.1485 11.9999 12.0008M10.4999 10.5004L12.3751 12.3754C12.6735 12.6738 13.0782 12.8414 13.5002 12.8414C13.9221 12.8414 14.3269 12.6738 14.6252 12.3754C14.9236 12.0771 15.0913 11.6724 15.0913 11.2504C15.0913 10.8285 14.9236 10.4238 14.6252 10.1254L11.715 7.21541C11.2931 6.79405 10.7212 6.55738 10.1249 6.55738C9.52858 6.55738 8.95667 6.79405 8.53476 7.21541L7.8747 7.87541C7.57631 8.17378 7.1716 8.3414 6.74961 8.3414C6.32762 8.3414 5.92292 8.17378 5.62452 7.87541C5.32613 7.57704 5.1585 7.17236 5.1585 6.7504C5.1585 6.32844 5.32613 5.92377 5.62452 5.6254L7.73219 3.51788C8.41643 2.83549 9.30874 2.40079 10.2679 2.28261C11.227 2.16442 12.1982 2.3695 13.0276 2.86538L13.3801 3.07538C13.6995 3.26812 14.0792 3.33497 14.4452 3.26288L15.7503 3.00038M15.7502 2.25073L16.5002 10.5008H15.0001M2.24908 2.25073L1.49902 10.5008L6.37441 15.3758C6.67281 15.6742 7.07751 15.8418 7.4995 15.8418C7.92149 15.8418 8.3262 15.6742 8.62459 15.3758C8.92299 15.0774 9.09062 14.6728 9.09062 14.2508C9.09062 13.8288 8.92299 13.4242 8.62459 13.1258M2.24908 3.00074H8.24956"
                                                    stroke="#6B7280" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <span>{{ $group['partner'] }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="members-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none">
                                                <path
                                                    d="M11.9999 15.75V14.25C11.9999 13.4544 11.6838 12.6913 11.1211 12.1287C10.5585 11.5661 9.79534 11.25 8.99962 11.25H4.49926C3.70355 11.25 2.94043 11.5661 2.37777 12.1287C1.81512 12.6913 1.49902 13.4544 1.49902 14.25V15.75M11.9999 2.34595C12.6432 2.51272 13.213 2.8884 13.6198 3.41399C14.0265 3.93959 14.2472 4.58536 14.2472 5.24995C14.2472 5.91453 14.0265 6.5603 13.6198 7.0859C13.213 7.6115 12.6432 7.98717 11.9999 8.15395M16.5002 15.7499V14.2499C16.4997 13.5852 16.2785 12.9395 15.8712 12.4141C15.4639 11.8888 14.8937 11.5136 14.25 11.3474M9.74968 5.25C9.74968 6.90685 8.40643 8.25 6.74944 8.25C5.09246 8.25 3.7492 6.90685 3.7492 5.25C3.7492 3.59315 5.09246 2.25 6.74944 2.25C8.40643 2.25 9.74968 3.59315 9.74968 5.25Z"
                                                    stroke="#6B7280" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <span>{{ $group['members'] }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="status-badge-active-group">
                                            <span class="status-dot-active"></span>
                                            {{ $group['status'] }}
                                        </span>
                                    </td>
                                    <td class="text-muted">
                                        {{ $group['last_activity'] }}
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn action-btn-icon action-btn-view" title="View Details">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                  <path d="M1.5459 8.73976C1.4834 8.90815 1.4834 9.09337 1.5459 9.26176C2.15468 10.7379 3.18804 12 4.51498 12.8881C5.84192 13.7762 7.40269 14.2503 8.9994 14.2503C10.5961 14.2503 12.1569 13.7762 13.4838 12.8881C14.8108 12 15.8441 10.7379 16.4529 9.26176C16.5154 9.09337 16.5154 8.90815 16.4529 8.73976C15.8441 7.26365 14.8108 6.00154 13.4838 5.11343C12.1569 4.22533 10.5961 3.75122 8.9994 3.75122C7.40269 3.75122 5.84192 4.22533 4.51498 5.11343C3.18804 6.00154 2.15468 7.26365 1.5459 8.73976Z" stroke="#374151" stroke-width="2" stroke-linecap="round"/>
                                                  <circle cx="9" cy="9" r="2.25" stroke="#374151" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </button>
                                            <button class="btn action-btn-icon action-btn-edit" title="Edit Group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                  <g clip-path="url(#clip0_506_358)">
                                                    <path d="M11.2499 3.74935L14.2502 6.7493M15.8808 5.10861C16.2773 4.71219 16.5002 4.17448 16.5002 3.61378C16.5003 3.05308 16.2776 2.51531 15.8811 2.11879C15.4847 1.72226 14.9469 1.49946 14.3861 1.49939C13.8254 1.49932 13.2876 1.72199 12.891 2.11841L2.8806 12.13C2.70645 12.3036 2.57766 12.5174 2.50556 12.7525L1.51473 16.0164C1.49534 16.0813 1.49388 16.1502 1.51049 16.2158C1.5271 16.2814 1.56117 16.3413 1.60908 16.3892C1.65699 16.437 1.71696 16.471 1.78262 16.4875C1.84828 16.504 1.91718 16.5024 1.98202 16.4829L5.24706 15.4929C5.48196 15.4215 5.69573 15.2935 5.86961 15.1202L15.8808 5.10861Z" stroke="#374151" stroke-width="2" stroke-linecap="round"/>
                                                  </g>
                                                  <defs>
                                                    <clipPath id="clip0_506_358">
                                                      <rect width="18" height="18" fill="white"/>
                                                    </clipPath>
                                                  </defs>
                                                </svg>
                                            </button>
                                            <button class="btn action-btn-icon action-btn-delete" title="Delete Group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                  <path d="M7.5 8.24993V12.7503M10.5 8.24993V12.7503M14.25 4.49963V15.0005C14.25 15.3983 14.092 15.7799 13.8107 16.0612C13.5294 16.3425 13.1478 16.5006 12.75 16.5006H5.25C4.85218 16.5006 4.47064 16.3425 4.18934 16.0612C3.90804 15.7799 3.75 15.3983 3.75 15.0005V4.49963M2.25 4.49963H15.75M6 4.49963V2.99951C6 2.60165 6.15804 2.22009 6.43934 1.93876C6.72064 1.65744 7.10218 1.49939 7.5 1.49939H10.5C10.8978 1.49939 11.2794 1.65744 11.5607 1.93876C11.842 2.22009 12 2.60165 12 2.99951V4.49963" stroke="#EF4444" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Start Pagination -->
                <div class="group-table-footer d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <span class="pagination-text">Showing 5 of 156 groups</span>
                    <nav aria-label="Group Pagination">
                        <div class="pagination-custom-wrapper">
                            <!-- Prev -->
                            <button class="page-btn-nav" aria-label="Previous">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                  <path d="M10 12L6 8L10 4" stroke="#374151" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
                            <!-- Pages -->
                            <div class="page-btns-group">
                                <button class="page-btn active">1</button>
                                <button class="page-btn">2</button>
                            </div>
                            <!-- Next -->
                            <button class="page-btn-nav" aria-label="Next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                  <path d="M6 12L10 8L6 4" stroke="#374151" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>
                    </nav>
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Group Overview -->
        </div>
    </div>
@endsection