<!-- Start Page Header -->
<div class="page-header add-partner-header">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="header-title-box">
                    <a href="#" class="back-link btn-back-header text-decoration-none" onclick="hideDisplay(event)">
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
                    <button class="btn btn-cancel btn-header-cancel mb-2 mb-sm-0" id="header-btn-cancel" onclick="hideDisplay(event)">
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
                
                <form action="#" method="POST" id="partner-wizard-form">
                    @csrf
                    
                    <!-- ================= START STEP 1 ================= -->
                    <div id="wizard-step-1" class="wizard-step-container">
                        <div>
                            <h2 class="wizard-step-title">Group Information</h2>
                            <p class="wizard-step-subtitle">Enter primary details to identify and classify the group.</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88562 10.781C9.3855 10.281 8.70724 10 7.99999 10H4.00001C3.29277 10 2.61449 10.281 2.1144 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14M11.3333 1.41333C12.1678 1.76562 12.8344 2.43216 13.1867 3.26667C13.539 4.10118 13.539 5.03215 13.1867 5.86667C12.8344 6.70118 12.1678 7.36772 11.3333 7.72001M14.6667 14.0001V12.6667C14.6657 12.0722 14.464 11.4947 14.0927 11.0201C13.7214 10.5455 13.2008 10.1997 12.6067 10.0334M6.00001 7.33333C4.52725 7.33333 3.33334 6.13943 3.33334 4.66667C3.33334 3.19391 4.52725 2 6.00001 2C7.47277 2 8.66668 3.19391 8.66668 4.66667C8.66668 6.13943 7.47277 7.33333 6.00001 7.33333Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    Group Name <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter group name" required>
                                <div class="form-text">The formal legal name of the client organization.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M6.66667 2.66666H2.66667V6.66666H6.66667V2.66666ZM13.3333 2.66666H9.33333V6.66666H13.3333V2.66666ZM13.3333 9.33332H9.33333V13.3333H13.3333V9.33332ZM2.66667 9.33332V13.3333H6.66667V9.33332H2.66667Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M14.6667 14V12.6667C14.6667 11.9594 14.3857 11.2811 13.8856 10.781C13.3855 10.281 12.7072 10 12 10H4C3.29276 10 2.61448 10.281 2.11439 10.781C1.61428 11.2811 1.33333 11.9594 1.33333 12.6667V14M8 7.33333C9.47276 7.33333 10.6667 6.13943 10.6667 4.66667C10.6667 3.19391 9.47276 2 8 2C6.52724 2 5.33333 3.19391 5.33333 4.66667C5.33333 6.13943 6.52724 7.33333 8 7.33333Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Client Type <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Select client type</option>
                                    <option value="standard">Standard</option>
                                    <option value="premium">Premium</option>
                                    <option value="corporate">Corporate</option>
                                </select>
                                <div class="form-text">Standard, Premium, or Corporate partner.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M12.6667 4.66666H3.33333C2.59695 4.66666 2 5.26361 2 5.99999V12.6667C2 13.403 2.59695 14 3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V5.99999C14 5.26361 13.403 4.66666 12.6667 4.66666Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.6667 14V3.33333C10.6667 2.97971 10.5262 2.64057 10.2761 2.39052C10.0261 2.14048 9.68695 2 9.33333 2H6.66667C6.31304 2 5.9739 2.14048 5.72386 2.39052C5.47381 2.64057 5.33333 2.97971 5.33333 3.33333V14" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Business Partner <span class="required-mark">*</span>
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
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 8C10.2091 8 12 6.20914 12 4C12 1.79086 10.2091 0 8 0C5.79086 0 4 1.79086 4 4C4 6.20914 5.79086 8 8 8Z" fill="#0B4F8A"/><path d="M2.20312 13.902C2.55625 11.23 4.8875 9.14282 7.71406 9.14282H8.28594C11.1125 9.14282 13.4437 11.23 13.7969 13.902C13.8828 14.5451 13.3859 15.1111 12.7359 15.1111H3.26406C2.61406 15.1111 2.11719 14.5451 2.20312 13.902Z" fill="#0B4F8A"/></svg> Status <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required>
                                    <option value="open_active" selected>Open / Active</option>
                                    <option value="closed">Closed</option>
                                    <option value="pending">Pending</option>
                                </select>
                                <div class="form-text">Initial operational state of the group.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 14.6667C11.6819 14.6667 14.6667 11.6819 14.6667 8C14.6667 4.3181 11.6819 1.33333 8 1.33333C4.3181 1.33333 1.33333 4.3181 1.33333 8C1.33333 11.6819 4.3181 14.6667 8 14.6667Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.33333 8H14.6667" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 14.6667C9.84095 14.6667 11.3333 11.6819 11.3333 8C11.3333 4.3181 9.84095 1.33333 8 1.33333C6.15905 1.33333 4.66667 4.3181 4.66667 8C4.66667 11.6819 6.15905 14.6667 8 14.6667Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Regions of Coverage
                                </label>
                                <input type="text" class="form-control" placeholder="geographic regions (e.g. MENA, EU)">
                            </div>
                        </div>
                        
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 14.6667C11.6819 14.6667 14.6667 11.6819 14.6667 8C14.6667 4.3181 11.6819 1.33333 8 1.33333C4.3181 1.33333 1.33333 4.3181 1.33333 8C1.33333 11.6819 4.3181 14.6667 8 14.6667Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.33333 8H14.6667" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 14.6667C9.84095 14.6667 11.3333 11.6819 11.3333 8C11.3333 4.3181 9.84095 1.33333 8 1.33333C6.15905 1.33333 4.66667 4.3181 4.66667 8C4.66667 11.6819 6.15905 14.6667 8 14.6667Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Main Country of Coverage <span class="required-mark">*</span>
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
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M9.33333 1.33333H2.66667C2.31304 1.33333 1.97391 1.47381 1.72386 1.72386C1.47381 1.97391 1.33333 2.31304 1.33333 2.66666V13.3333C1.33333 13.687 1.47381 14.0261 1.72386 14.2761C1.97391 14.5262 2.31304 14.6667 2.66667 14.6667H13.3333C13.687 14.6667 14.0261 14.5262 14.2761 14.2761C14.5262 14.0261 14.6667 13.687 14.6667 13.3333V6.66666L9.33333 1.33333Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.33333 1.33333V6.66666H14.6667" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Description
                                </label>
                                <textarea class="form-control" rows="3" placeholder="Enter optional group description or notes..."></textarea>
                            </div>
                        </div>

                        <div class="mb-4 mt-5">
                            <h2 class="wizard-step-title">Policier Date</h2>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M12.6667 2.66666H3.33333C2.59695 2.66666 2 3.26361 2 3.99999V13.3333C2 14.0697 2.59695 14.6667 3.33333 14.6667H12.6667C13.403 14.6667 14 14.0697 14 13.3333V3.99999C14 3.26361 13.403 2.66666 12.6667 2.66666Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.6667 1.33333V4" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.33333 1.33333V4" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 6.66667H14" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Start Date <span class="required-mark">*</span>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M12.6667 2.66666H3.33333C2.59695 2.66666 2 3.26361 2 3.99999V13.3333C2 14.0697 2.59695 14.6667 3.33333 14.6667H12.6667C13.403 14.6667 14 14.0697 14 13.3333V3.99999C14 3.26361 13.403 2.66666 12.6667 2.66666Z" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.6667 1.33333V4" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.33333 1.33333V4" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 6.66667H14" stroke="#0B4F8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> End Date
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
                                <button type="button" class="btn btn-form-back bg-white border" onclick="hideDisplay(event)">Back</button>
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
                                <button type="button" class="btn" style="background-color: #0b6375; color: white;" onclick="hideDisplay(event)">Groups</button>
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
        // Hide all steps
        document.querySelectorAll('.wizard-step-container').forEach(el => el.style.display = 'none');
        document.getElementById('wizard-step-3').style.display = 'none'; // The success step
        
        // Update header state
        if (step === 3) { // Success state
            document.getElementById('stepper-header-container').style.display = 'none';
            document.getElementById('stepper-hr').style.display = 'none';
            
            // Show step 3 content
            document.getElementById('wizard-step-3').style.display = 'block';
            
            // Change page header title
            document.getElementById('main-page-title').innerText = "Successful Creation";
            document.querySelector('.header-page-subtitle').innerText = "Register a new client group to the insurance network";
            // Hide header actions
            document.querySelector('.header-actions').style.display = 'none';
            
        } else {
            // Show stepper
            document.getElementById('stepper-header-container').style.display = 'flex';
            document.getElementById('stepper-hr').style.display = 'block';
            document.getElementById('main-page-title').innerText = "Create Group";
            document.querySelector('.header-page-subtitle').innerText = "Register a new client group to the insurance network";
            document.querySelector('.header-actions').style.display = 'flex';
            
            // Show targeted step content
            document.getElementById('wizard-step-' + step).style.display = 'block';
            
            // Update active state in stepper header
            if (step === 1) {
                // Set step 1 to active
                document.getElementById('step-header-1').classList.add('active');
                document.getElementById('step-header-1').querySelector('.step-circle').classList.remove('inactive', 'done');
                document.getElementById('step-header-1').querySelector('.step-circle').classList.add('active');
                document.getElementById('step-header-1').querySelector('.step-circle').innerHTML = '1';
                document.getElementById('step-header-1').querySelector('.step-text').classList.remove('inactive');
                
                // Set step 2 to inactive
                document.getElementById('step-header-2').classList.remove('active');
                document.getElementById('step-header-2').querySelector('.step-circle').classList.add('inactive');
                document.getElementById('step-header-2').querySelector('.step-circle').classList.remove('active', 'done');
                document.getElementById('step-header-2').querySelector('.step-text').classList.add('inactive');
                
                // Styling
                document.getElementById('step-header-1').querySelector('.step-circle').style.backgroundColor = '#0b6375';
                document.getElementById('step-header-1').querySelector('.step-circle').style.color = 'white';
                document.getElementById('step-header-1').querySelector('.step-circle').style.borderColor = '#0b6375';
                
                document.getElementById('step-header-2').querySelector('.step-circle').style.backgroundColor = 'transparent';
                document.getElementById('step-header-2').querySelector('.step-circle').style.color = '#a0aec0';
                document.getElementById('step-header-2').querySelector('.step-circle').style.borderColor = '#dee2e6';
            } else if (step === 2) {
                // Set step 1 to done
                document.getElementById('step-header-1').classList.remove('active');
                document.getElementById('step-header-1').querySelector('.step-circle').classList.remove('active', 'inactive');
                document.getElementById('step-header-1').querySelector('.step-circle').classList.add('done');
                document.getElementById('step-header-1').querySelector('.step-circle').innerHTML = '<i class="bi bi-check2"></i>';
                document.getElementById('step-header-1').querySelector('.step-text').classList.add('inactive');
                
                // Set step 2 to active
                document.getElementById('step-header-2').classList.add('active');
                document.getElementById('step-header-2').querySelector('.step-circle').classList.remove('inactive', 'done');
                document.getElementById('step-header-2').querySelector('.step-circle').classList.add('active');
                document.getElementById('step-header-2').querySelector('.step-text').classList.remove('inactive');
                
                // Styling
                document.getElementById('step-header-1').querySelector('.step-circle').style.backgroundColor = '#0b6375';
                document.getElementById('step-header-1').querySelector('.step-circle').style.color = 'white';
                document.getElementById('step-header-1').querySelector('.step-circle').style.borderColor = '#0b6375';
                
                document.getElementById('step-header-2').querySelector('.step-circle').style.backgroundColor = '#0b6375';
                document.getElementById('step-header-2').querySelector('.step-circle').style.color = 'white';
                document.getElementById('step-header-2').querySelector('.step-circle').style.borderColor = '#0b6375';
            }
        }
    }
</script>
