<!-- Start Page Header -->
<div class="page-header add-group-header">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="header-title-box">
                    <a href="{{ route('groupmanagement') }}" class="back-link btn-back-header text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8.00021 3.33276L3.33301 7.99996L8.00021 12.6672M3.33301 7.99996H12.6674" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Back to Groups
                    </a>
                    <div class="header-title-box mt-2">
                        <h1 class="page-title header-page-title" id="main-page-title">Create Group</h1>
                        <p class="page-subtitle header-page-subtitle">Register a new client group to the insurance network</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-actions d-flex align-items-center justify-content-lg-end flex-wrap gap-3">
                    <div class="search-input-wrapper mb-2 mb-sm-0">
                        <i class="bi bi-search text-muted"></i>
                        <input type="text" placeholder="Search metrics...">
                    </div>
                    <button class="btn btn-refresh btn-header-action mb-2 mb-sm-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35472 10.0083 2.50325 8.50032 3.07091 7.12987C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C12.1 2.5 14.1083 3.33333 15.6167 4.78333L17.5 6.66667M13.3333 6.66667H17.5L17.5 2.5" stroke="#4A5568" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Refresh
                    </button>
                    <button class="btn btn-save-draft btn-header-action mb-2 mb-sm-0" id="header-btn-save">
                        Save Draft
                    </button>
                    <button class="btn btn-cancel btn-header-cancel mb-2 mb-sm-0" id="header-btn-cancel" onclick="window.location.href='{{ route('groupmanagement') }}'">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Start Group Information Form Card -->
<div class="position-relative form-card-overlay">
    <div class="card shadow-sm border-0 mx-auto form-card-container">
        <!-- Stepper Header -->
        <div id="stepper-header-container" class="card-header bg-white border-bottom-0 pt-4 pb-3 px-4 px-xl-5 d-flex justify-content-between align-items-center flex-wrap gap-3 stepper-header">
            <div class="stepper d-flex align-items-center flex-wrap gap-2 gap-md-0 stepper-nav">
                <!-- Step 1 Header -->
                <div id="step-header-1" class="step active d-flex align-items-center gap-2">
                    <span class="step-circle">1</span>
                    <span class="step-text">Group Details</span>
                </div>
                <div class="step-line d-none d-md-block mx-3 flex-grow-1 step-line-custom"></div>
                <!-- Step 2 Header -->
                <div id="step-header-2" class="step d-flex align-items-center gap-2">
                    <span class="step-circle border inactive">2</span>
                    <span class="step-text inactive">Contact</span>
                </div>
            </div>
            <div class="status-indicator">
                <span class="badge rounded-pill d-inline-flex align-items-center gap-2 status-badge-active">
                    <i class="bi bi-circle-fill"></i> STATUS: ACTIVE
                </span>
            </div>
        </div>
        
        <hr id="stepper-hr" class="m-0 text-muted stepper-divider">

        <div class="card-body form-card-body">
            <div class="form-wrapper rounded-4 form-wrapper-custom">
                
                <form action="#" method="POST" id="group-wizard-form">
                    @csrf
                    
                    <!-- ================= START STEP 1 ================= -->
                    <div id="wizard-step-1" class="wizard-step-container">
                        <div class="wizard-step-header">
                            <h2 class="wizard-step-title">Group Information</h2>
                            <p class="wizard-step-subtitle">Enter primary details to identify and classify the group.</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6 field-col">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88562 10.781C9.3855 10.281 8.70724 10 7.99999 10H4.00001C3.29277 10 2.61449 10.281 2.1144 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14M11.3333 1.41333C12.1678 1.76562 12.8344 2.43216 13.1867 3.26667C13.539 4.10118 13.539 5.03215 13.1867 5.86667C12.8344 6.70118 12.1678 7.36772 11.3333 7.72001M14.6667 14.0001V12.6667C14.6657 12.0722 14.464 11.4947 14.0927 11.0201C13.7214 10.5455 13.2008 10.1997 12.6067 10.0334M6.00001 7.33333C4.52725 7.33333 3.33334 6.13943 3.33334 4.66667C3.33334 3.19391 4.52725 2 6.00001 2C7.47277 2 8.66668 3.19391 8.66668 4.66667C8.66668 6.13943 7.47277 7.33333 6.00001 7.33333Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    Group Name <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter group name" required>
                                <div class="form-text">The formal legal name of the client organization.</div>
                            </div>
                            <div class="col-md-6 field-col" style="height: auto; min-height: 92px;">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 3.33276V12.6672M5.33333 3.33276V12.6672M8 3.33276V12.6672M11.3333 3.33276V12.6672M14 3.33276V12.6672" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></svg>
                                    Group Code <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="VS-GROUP-001" required>
                                <div class="form-text">Unique system identifier for this group.</div>
                                <div class="mt-2">
                                    <a href="#" class="auto-generate-link" style="color: #0b6375; text-decoration: none; font-size: 0.85rem; font-weight: 500;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                          <path d="M1.5 6C1.5 4.80653 1.97411 3.66193 2.81802 2.81802C3.66193 1.97411 4.80653 1.5 6 1.5C7.25802 1.50473 8.46552 1.99561 9.37 2.87L10.5 4M8 4H10.5V1.5M10.5 6C10.5 7.19347 10.0259 8.33807 9.18198 9.18198C8.33807 10.0259 7.19347 10.5 6 10.5C4.74198 10.4953 3.53448 10.0044 2.63 9.13L1.5 8M1.5 10.5V8H4" stroke="#0b6375" stroke-width="2" stroke-linecap="round"/>
                                        </svg> Auto-generate code
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mt-1">
                            <div class="col-md-6 field-col">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><g clip-path="url(#clip0_446_203)"><path d="M7.99979 6.66652H8.00646M7.99979 9.3334H8.00646M7.99979 3.99964H8.00646M10.6662 6.66652H10.6729M10.6662 9.3334H10.6729M10.6662 3.99964H10.6729M5.33339 6.66652H5.34006M5.33339 9.3334H5.34006M5.33339 3.99964H5.34006M5.99999 14.6672V12.667C5.99999 12.4902 6.07022 12.3206 6.19523 12.1956C6.32025 12.0705 6.4898 12.0003 6.66659 12.0003H9.33299C9.50979 12.0003 9.67934 12.0705 9.80435 12.1956C9.92936 12.3206 9.99959 12.4902 9.99959 12.667V14.6672M4.00019 1.33276H11.9994C12.7357 1.33276 13.3326 1.92977 13.3326 2.6662V13.3337C13.3326 14.0702 12.7357 14.6672 11.9994 14.6672H4.00019C3.26389 14.6672 2.66699 14.0702 2.66699 13.3337V2.6662C2.66699 1.92977 3.26389 1.33276 4.00019 1.33276Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_446_203"><rect width="16" height="16" fill="white"/></clipPath></defs></svg> Client Type <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Select client type</option>
                                    <option value="standard">Standard</option>
                                    <option value="premium">Premium</option>
                                    <option value="corporate">Corporate</option>
                                </select>
                                <div class="form-text">Standard, Premium, or Corporate partner.</div>
                            </div>
                            <div class="col-md-6 field-col">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M7.33349 11.334L8.66693 12.6674C8.79826 12.7987 8.95417 12.9029 9.12577 12.9739C9.29736 13.045 9.48128 13.0816 9.66701 13.0816C9.85274 13.0816 10.0367 13.045 10.2082 12.9739C10.3798 12.9029 10.5358 12.7987 10.6671 12.6674C10.7984 12.5361 10.9026 12.3802 10.9737 12.2086C11.0448 12.037 11.0813 11.8531 11.0813 11.6674C11.0813 11.4817 11.0448 11.2978 10.9737 11.1262C10.9026 10.9546 10.7984 10.7987 10.6671 10.6674M9.3338 9.33371L11.0006 11.0004C11.2658 11.2656 11.6256 11.4146 12.0007 11.4146C12.3758 11.4146 12.7355 11.2656 13.0008 11.0004C13.266 10.7352 13.415 10.3755 13.415 10.0004C13.415 9.62531 13.266 9.26559 13.0008 9.00038L10.4139 6.41369C10.0389 6.03916 9.53048 5.82878 9.00044 5.82878C8.4704 5.82878 7.96202 6.03916 7.58699 6.41369L7.00028 7.00036C6.73504 7.26558 6.3753 7.41458 6.0002 7.41458C5.6251 7.41458 5.26536 7.26558 5.00012 7.00036C4.73488 6.73515 4.58587 6.37543 4.58587 6.00036C4.58587 5.62528 4.73488 5.26557 5.00012 5.00035L6.8736 3.12701C7.48181 2.52043 8.27498 2.13404 9.12754 2.02898C9.98011 1.92393 10.8434 2.10622 11.5806 2.54701L11.894 2.73367C12.1779 2.905 12.5154 2.96442 12.8407 2.90034L14.0008 2.66701M14.0007 2.00065L14.6674 9.33403H13.334M1.99973 2.00065L1.33301 9.33403L5.66669 13.6674C5.93193 13.9326 6.29167 14.0816 6.66677 14.0816C7.04187 14.0816 7.40161 13.9326 7.66685 13.6674C7.93209 13.4022 8.0811 13.0425 8.0811 12.6674C8.0811 12.2923 7.93209 11.9326 7.66685 11.6674M1.99973 2.66732H7.33349" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></svg> Business Partner <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Search associated partner</option>
                                    <option value="p1">Partner 1</option>
                                    <option value="p2">Partner 2</option>
                                </select>
                                <div class="form-text">The insurance partner managing this group.</div>
                            </div>
                        </div>

                        <div class="row g-4 mt-1">
                            <div class="col-md-6 field-col">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="width: 16px; height: 16px; flex-shrink: 0;"><path d="M10.0004 3.33276H6.00005C3.42251 3.33276 1.33301 5.42234 1.33301 7.99996C1.33301 10.5776 3.42251 12.6672 6.00005 12.6672H10.0004C12.5779 12.6672 14.6674 10.5776 14.6674 7.99996C14.6674 5.42234 12.5779 3.33276 10.0004 3.33276Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></svg> Status <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required>
                                    <option value="open_active" selected>Open / Active</option>
                                    <option value="closed">Closed</option>
                                    <option value="pending">Pending</option>
                                </select>
                                <div class="form-text">Initial operational state of the group.</div>
                            </div>
                            <div class="col-md-6 field-col">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16" fill="none" style="width: 10.666px; height: 13.334px; flex-shrink: 0;"><path d="M6.73343 14.2006C7.9733 13.1298 11.6656 9.6628 11.6656 6.33383C11.6656 4.91921 11.1038 3.56253 10.1037 2.56224C9.10357 1.56196 7.74715 1 6.3328 1C4.91845 1 3.56203 1.56196 2.56194 2.56224C1.56185 3.56253 1 4.91921 1 6.33383C1 9.6628 4.6923 13.1298 5.93217 14.2006C6.04768 14.2874 6.18828 14.3344 6.3328 14.3344C6.47732 14.3344 6.61792 14.2874 6.73343 14.2006Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></svg> Regions of Coverage
                                </label>
                                <input type="text" class="form-control" placeholder="geographic regions (e.g. MENA, EU)">
                            </div>
                        </div>
                        
                        <div class="row g-4 mt-1">
                            <div class="col-md-6 field-col">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 14.6667C11.6819 14.6667 14.6667 11.6819 14.6667 8C14.6667 4.3181 11.6819 1.33333 8 1.33333C4.3181 1.33333 1.33333 4.3181 1.33333 8C1.33333 11.6819 4.3181 14.6667 8 14.6667Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.33333 8H14.6667" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 14.6667C9.84095 14.6667 11.3333 11.6819 11.3333 8C11.3333 4.3181 9.84095 1.33333 8 1.33333C6.15905 1.33333 4.66667 4.3181 4.66667 8C4.66667 11.6819 6.15905 14.6667 8 14.6667Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Main Country of Coverage <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Select primary country</option>
                                    <option value="MA">Morocco</option>
                                    <option value="FR">France</option>
                                    <option value="ES">Spain</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-4 mt-1">
                            <div class="col-md-6 field-col" style="height: auto;">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><g clip-path="url(#clip0_446_257)"><path d="M9.33299 1.33277H4.00019C3.64661 1.33277 3.3075 1.47325 3.05748 1.72332C2.80745 1.97339 2.66699 2.31256 2.66699 2.66621V13.3337C2.66699 13.6874 2.80745 14.0265 3.05748 14.2766C3.3075 14.5267 3.64661 14.6672 4.00019 14.6672H11.9994C12.353 14.6672 12.6921 14.5267 12.9421 14.2766C13.1921 14.0265 13.3326 13.6874 13.3326 13.3337V5.33309M9.33299 1.33277C9.54401 1.33242 9.753 1.37384 9.94795 1.45462C10.1429 1.53541 10.3199 1.65396 10.4689 1.80347L12.8606 4.19566C13.0105 4.34468 13.1294 4.52192 13.2104 4.71714C13.2914 4.91237 13.3329 5.12171 13.3326 5.33309M9.33299 1.33277V4.66636C9.33299 4.84319 9.40322 5.01277 9.52823 5.1378C9.65324 5.26284 9.8228 5.33308 9.99959 5.33308L13.3326 5.33309M6.66659 5.9998H5.33339M10.6662 8.66668H5.33339M10.6662 11.3336H5.33339" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_446_257"><rect width="16" height="16" fill="white"/></clipPath></defs></svg> Description
                                </label>
                                <textarea class="form-control" rows="3" placeholder="Enter optional group description or notes..."></textarea>
                            </div>
                        </div>

                        <div class="mb-4 mt-5">
                            <h2 class="wizard-step-title">Policier Date</h2>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6 field-col">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="width: 16px; height: 16px; flex-shrink: 0;"><g clip-path="url(#clip0_446_221)"><path d="M5.33333 1.33276V3.99964M10.6667 1.33276V3.99964M2 6.66652H14M3.33333 2.6662H12.6667C13.403 2.6662 14 3.26321 14 3.99964V13.3337C14 14.0702 13.403 14.6672 12.6667 14.6672H3.33333C2.59695 14.6672 2 14.0702 2 13.3337V3.99964C2 3.26321 2.59695 2.6662 3.33333 2.6662Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_446_221"><rect width="16" height="16" fill="white"/></clipPath></defs></svg> Start Date <span class="required-mark">*</span>
                                </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="11/07/2026" required>
                                    <i class="bi bi-calendar date-icon position-absolute" style="right: 12px; top: 12px; color: #a0aec0;"></i>
                                </div>
                                <div class="form-text">When coverage officially begins.</div>
                            </div>
                        </div>
                        
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="width: 16px; height: 16px; flex-shrink: 0;"><g clip-path="url(#clip0_446_248)"><path d="M5.33333 1.33276V3.99964M10.6667 1.33276V3.99964M2 6.66652H14M9.33333 9.3334L6.66667 12.0003M6.66667 9.3334L9.33333 12.0003M3.33333 2.6662H12.6667C13.403 2.6662 14 3.26321 14 3.99964V13.3337C14 14.0702 13.403 14.6672 12.6667 14.6672H3.33333C2.59695 14.6672 2 14.0702 2 13.3337V3.99964C2 3.26321 2.59695 2.6662 3.33333 2.6662Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_446_248"><rect width="16" height="16" fill="white"/></clipPath></defs></svg> End Date
                                </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                                    <i class="bi bi-calendar date-icon position-absolute" style="right: 12px; top: 12px; color: #a0aec0;"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Start Form Actions -->
                        <div class="form-actions form-actions-custom mt-5 pt-4 border-top d-flex justify-content-between">
                            <div class="d-flex align-items-center gap-3 text-muted form-notice-box">
                                <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                <small class="form-notice-text">By creating this group, you'll be able to add members and assign policies in the next step.</small>
                            </div>
                            <div class="d-flex gap-3">
                                <button type="button" class="btn btn-form-back bg-white border" onclick="window.location.href='{{ route('groupmanagement') }}'">Back</button>
                                <button type="button" class="btn btn-form-continue" style="background-color: #0b6375; color: white; border: none; padding: 0.5rem 1.5rem; border-radius: 0.375rem;" onclick="goToStep(2)">Create & Continue</button>
                            </div>
                        </div>
                        <!-- End Form Actions -->
                    </div>
                    <!-- ================= END STEP 1 ================= -->

                    <!-- ================= START STEP 2 ================= -->
                    <div id="wizard-step-2" class="wizard-step-container" style="display: none;">
                        <div>
                            <h2 class="wizard-step-title">Contact Person</h2>
                            <p class="wizard-step-subtitle">Details of the primary point of contact</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    Full Name <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter contact person's full name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    Position / Title
                                </label>
                                <input type="text" class="form-control" placeholder="Enter position or title">
                            </div>
                        </div>
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label class="form-label">
                                    Email <span class="required-mark">*</span>
                                </label>
                                <input type="email" class="form-control" placeholder="Enter contact email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    Phone Number <span class="required-mark">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 fw-bold text-muted">+212</span>
                                    <input type="tel" class="form-control border-start-0" placeholder="Enter contact phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label class="form-label">
                                    Postal Code
                                </label>
                                <input type="text" class="form-control" placeholder="Enter postal code">
                            </div>
                        </div>

                        <div class="mt-5 mb-4">
                            <h2 class="wizard-step-title">Address Information</h2>
                            <p class="wizard-step-subtitle">The main address of the client organization</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-12">
                                <label class="form-label">
                                    Street Address <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter full street address" required>
                            </div>
                        </div>
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label class="form-label">
                                    P.O. Box
                                </label>
                                <input type="text" class="form-control" placeholder="Enter P.O. Box">
                            </div>
                        </div>

                        <!-- Start Form Actions -->
                        <div class="form-actions form-actions-custom mt-5 pt-4 border-top d-flex justify-content-between">
                            <div class="d-flex align-items-center gap-3 text-muted form-notice-box">
                                <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                <small class="form-notice-text">By creating this group, you'll be able to add members and assign policies in the next step.</small>
                            </div>
                            <div class="d-flex gap-3">
                                <button type="button" class="btn btn-form-back bg-white border" onclick="goToStep(1)">Back</button>
                                <button type="button" class="btn btn-form-continue" style="background-color: #0b6375; color: white; border: none; padding: 0.5rem 1.5rem; border-radius: 0.375rem;" onclick="goToStep(3)">Create & Continue</button>
                            </div>
                        </div>
                        <!-- End Form Actions -->
                    </div>
                    <!-- ================= END STEP 2 ================= -->
                    
                    <!-- ================= START STEP 3 (SUCCESS STATE) ================= -->
                    <div id="wizard-step-3" style="display: none;">
                        <div class="text-center mb-5 mt-4">
                            <div class="d-inline-flex justify-content-center align-items-center rounded-circle mb-3 success-icon-circle" style="width: 60px; height: 60px; background-color: #d1fae5; color: #10b981;">
                                <i class="bi bi-check-lg fs-3"></i>
                            </div>

                            <h2 class="fw-bold mb-2" style="color: #1f2937;">Group Successfully Created</h2>
                            <p class="mb-0" style="color: #10b981; font-size: 0.95rem;"><i class="bi bi-check-lg"></i> Added to group Management</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card success-details-card h-100 border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h6 class="text-uppercase text-muted fw-bold mb-3" style="font-size: 0.75rem; letter-spacing: 0.5px;">ACCOUNT DETAILS</h6>
                                        <div class="d-flex align-items-center mb-3 bg-white border rounded p-3">
                                            <i class="bi bi-people text-primary me-3"></i>
                                            <span class="text-dark fw-medium">account name</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-3 bg-white border rounded p-3">
                                            <i class="bi bi-person-badge text-primary me-3"></i>
                                            <span class="text-dark fw-medium">Account code</span>
                                        </div>
                                        <div class="row g-2 mb-3">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center bg-white border rounded p-3 h-100">
                                                    <i class="bi bi-calendar-check text-primary me-2"></i>
                                                    <span class="text-dark fw-medium" style="font-size: 0.9rem;">Start Date</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center bg-white border rounded p-3 h-100">
                                                    <i class="bi bi-calendar-x text-primary me-2"></i>
                                                    <span class="text-dark fw-medium" style="font-size: 0.9rem;">End Date</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center bg-white border-warning border rounded p-3 mt-3">
                                            <div class="me-3" style="width: 12px; height: 12px; background-color: #f59e0b; border-radius: 50%;"></div>
                                            <span class="text-muted" style="font-size: 0.85rem;">Members of these groups inherit associated healthcare policies automatically.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card success-details-card h-100 border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h6 class="text-uppercase text-muted fw-bold mb-3" style="font-size: 0.75rem; letter-spacing: 0.5px;">CONTACT DETAILS</h6>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="d-flex border rounded p-3 bg-white h-100">
                                                    <div class="me-3 mt-1">
                                                        <i class="bi bi-person" style="color: #6366f1; font-size: 1.25rem;"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted" style="font-size: 0.7rem; text-transform: uppercase;">FULL NAME</div>
                                                        <div class="text-dark fw-medium">Sarah Mitchell</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex border rounded p-3 bg-white h-100">
                                                    <div class="me-3 mt-1">
                                                        <i class="bi bi-envelope" style="color: #6366f1; font-size: 1.25rem;"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted" style="font-size: 0.7rem; text-transform: uppercase;">EMAIL ADDRESS</div>
                                                        <div class="text-dark fw-medium text-break" style="font-size: 0.9rem;">sarah.mitchell@company.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex border rounded p-3 bg-white h-100">
                                                    <div class="me-3 mt-1">
                                                        <i class="bi bi-telephone" style="color: #6366f1; font-size: 1.25rem;"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted" style="font-size: 0.7rem; text-transform: uppercase;">PHONE NUMBER</div>
                                                        <div class="text-dark fw-medium">+1 (555) 234-8901</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex border rounded p-3 bg-white h-100">
                                                    <div class="me-3 mt-1">
                                                        <i class="bi bi-geo-alt" style="color: #6366f1; font-size: 1.25rem;"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted" style="font-size: 0.7rem; text-transform: uppercase;">LOCATION</div>
                                                        <div class="text-dark fw-medium">San Francisco, CA</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="d-flex border rounded p-3 bg-white h-100 w-50">
                                                    <div class="me-3 mt-1">
                                                        <i class="bi bi-briefcase" style="color: #6366f1; font-size: 1.25rem;"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted" style="font-size: 0.7rem; text-transform: uppercase;">ROLE</div>
                                                        <div class="text-dark fw-medium">Product Manager</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-5 pt-4 border-top">
                            <div class="text-muted" style="font-size: 0.85rem;">Created on July 21, 2026 at 3:45 PM</div>
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-outline-secondary d-flex align-items-center gap-2 bg-white">
                                    <i class="bi bi-eye"></i> View Group
                                </button>
                                <button type="button" class="btn" style="background-color: #0b6375; color: white;" onclick="window.location.href='{{ route('groupmanagement') }}'">Groups</button>
                                <button type="button" class="btn btn-success" style="background-color: #10b981; border-color: #10b981;" onclick="goToStep(1)">
                                    + Add Another Group
                                </button>
                            </div>
                        </div>
                        <div class="text-start mt-4 text-muted" style="font-size: 0.7rem;">
                            &copy; 2026 VSahha International Health Solutions. All sensitive data is encrypted under HIPAA standards.
                        </div>
                    </div>
                    <!-- ================= END STEP 3 ================= -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Group Information Form Card -->

<script>
    // JS for Step Navigation in Group Form
    function goToStep(step) {
        // Hide all wizard steps
        document.getElementById('wizard-step-1').style.display = 'none';
        document.getElementById('wizard-step-2').style.display = 'none';
        document.getElementById('wizard-step-3').style.display = 'none';

        if (step === 3) {
            // Success state
            document.getElementById('stepper-header-container').style.display = 'none';
            document.getElementById('stepper-hr').style.display = 'none';
            document.getElementById('main-page-title').innerText = 'Successful Creation';
            document.querySelector('.header-page-subtitle').innerText = 'Register a new client group to the insurance network';
            document.querySelector('.header-actions').style.display = 'none';
            document.getElementById('wizard-step-3').style.display = 'block';
        } else {
            // Normal wizard step
            document.getElementById('stepper-header-container').style.display = 'flex';
            document.getElementById('stepper-hr').style.display = 'block';
            document.getElementById('main-page-title').innerText = 'Create Group';
            document.querySelector('.header-page-subtitle').innerText = 'Register a new client group to the insurance network';
            document.querySelector('.header-actions').style.display = 'flex';
            document.getElementById('wizard-step-' + step).style.display = 'block';

            // Reset all step headers to default gray
            for (let i = 1; i <= 2; i++) {
                let h = document.getElementById('step-header-' + i);
                let circle = h.querySelector('.step-circle');
                let text = h.querySelector('.step-text');
                circle.style.backgroundColor = 'transparent';
                circle.style.color = '#94A3B8';
                circle.style.borderColor = '#dee2e6';
                circle.innerHTML = i;
                text.style.color = '#94A3B8';
                text.style.fontWeight = '400';
            }

            // Mark completed steps (before current)
            for (let i = 1; i < step; i++) {
                let h = document.getElementById('step-header-' + i);
                let circle = h.querySelector('.step-circle');
                circle.style.backgroundColor = '#0B4F8A';
                circle.style.color = 'white';
                circle.style.borderColor = '#0B4F8A';
                circle.innerHTML = '<i class="bi bi-check-lg"></i>';
            }

            // Mark active step
            let currentHeader = document.getElementById('step-header-' + step);
            let currentCircle = currentHeader.querySelector('.step-circle');
            let currentText = currentHeader.querySelector('.step-text');
            currentCircle.style.backgroundColor = '#0B4F8A';
            currentCircle.style.color = 'white';
            currentCircle.style.borderColor = '#0B4F8A';
            currentCircle.innerHTML = step;
            currentText.style.color = '#1E293B';
            currentText.style.fontWeight = '600';
        }
    }
</script>
