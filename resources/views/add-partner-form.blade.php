<!-- Start Page Header -->
    <div class="page-header" style="display: inline-flex; width: 100%; height: 187px; padding: 48px 0 48px 60px; justify-content: flex-end; align-items: center; background: #0B4E89;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div style="display: inline-flex; flex-direction: column; align-items: flex-start; gap: 24px;">
                        <a href="#" class="back-link text-decoration-none" style="display: inline-flex; padding: 10px 20px; justify-content: center; align-items: center; gap: 8px; border-radius: 100px; border: 1px solid rgba(255, 255, 255, 0.15); background: rgba(255, 255, 255, 0.08); color: #FFF; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 600; line-height: normal;" onclick="hideDisplay(event)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="width: 16px; height: 16px; flex-shrink: 0;">
                              <path d="M8.00021 3.33276L3.33301 7.99996L8.00021 12.6672M3.33301 7.99996H12.6674" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Back to Partners
                        </a>
                        <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 8px;">
                            <h1 class="page-title m-0" id="main-page-title" style="color: #FFF; font-family: Inter, sans-serif; font-size: 32px; font-style: normal; font-weight: 800; line-height: normal;">Add New Partner</h1>
                            <p class="page-subtitle m-0" style="color: rgba(255, 255, 255, 0.70); font-family: Inter, sans-serif; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal;">Create and configure a new external partner, agency, or firm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-actions d-flex align-items-center justify-content-lg-end flex-wrap gap-3">
                        <div class="search-input-wrapper mb-2 mb-sm-0" style="display: flex; width: 233px; height: 34px; padding: 9px 15px; justify-content: center; align-items: flex-start; gap: 8px; border-radius: 10px; border: 1px solid rgba(0, 0, 0, 0.00); background: #F1F3F7;">
                            <div style="display: flex; width: 180px; height: 16px; padding-right: 75.92px; align-items: center; flex-shrink: 0; gap: 8px;">
                                <i class="bi bi-search" style="color: #757575; font-size: 13px;"></i>
                                <input type="text" placeholder="Search metrics..." style="border: none; background: transparent; outline: none; display: flex; width: 104.08px; height: 16px; flex-direction: column; justify-content: center; flex-shrink: 0; color: #757575; font-family: Inter, sans-serif; font-size: 13px; font-style: normal; font-weight: 400; line-height: normal;">
                            </div>
                        </div>
                        <button class="btn btn-refresh mb-2 mb-sm-0" style="display: flex; width: 110px; height: 37px; padding: 0 14px; justify-content: center; align-items: center; gap: 8px; border-radius: 50px; border: 1px solid #EEF0F4; background: #FFF; color: #4A5568; font-family: Inter; font-size: 14px; font-style: normal; font-weight: 600; line-height: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" style="width: 20px; height: 20px; flex-shrink: 0;">
                                <path d="M17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35472 10.0083 2.50325 8.50032 3.07091 7.12987C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C12.1 2.5 14.1083 3.33333 15.6167 4.78333L17.5 6.66667M13.3333 6.66667H17.5L17.5 2.5" stroke="#4A5568" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Refresh
                        </button>
                        <button class="btn btn-save-draft mb-2 mb-sm-0" id="header-btn-save" style="display: flex; width: 110px; height: 37px; padding: 0 14px; justify-content: center; align-items: center; gap: 8px; border-radius: 50px; border: 1px solid #EEF0F4; background: #FFF; color: #4A5568; font-family: Inter; font-size: 14px; font-style: normal; font-weight: 600; line-height: 20px;">
                            Save Draft
                        </button>
                        <button class="btn btn-cancel mb-2 mb-sm-0" id="header-btn-cancel" onclick="hideDisplay(event)" style="display: inline-flex; padding: 10px 20px; justify-content: center; align-items: center; gap: 8px; border-radius: 100px; background: #26C6A0; color: #062A55; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 700; line-height: normal; border: none;">
                            Annuler
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Start Partner Information Form Card -->
    <div class="position-relative" style="display: inline-flex; padding: 0 0 2px 241px; justify-content: flex-end; align-items: center; margin-top: -20px; z-index: 10; width: 100%; box-sizing: border-box;">
        <div class="card shadow-sm border-0 mx-auto" style="border-radius: 16px; width: 1800px; max-width: 100%; align-self: stretch;">
            <!-- Stepper Header -->
            <div id="stepper-header-container" class="card-header bg-white border-bottom-0 pt-4 pb-3 px-4 px-xl-5 d-flex justify-content-between align-items-center flex-wrap gap-3" style="border-radius: 16px 16px 0 0;">
                <div class="stepper d-flex align-items-center flex-wrap gap-2 gap-md-0" style="flex: 1; max-width: 700px;">
                    <!-- Step 1 Header -->
                    <div id="step-header-1" class="step active d-flex align-items-center gap-2">
                        <span class="step-circle" style="display: flex; width: 32px; height: 32px; padding: 7.5px 0; justify-content: center; align-items: center; flex-shrink: 0; border-radius: 16px; background: #0B4F8A; color: #FFF; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 700; line-height: normal;">1</span>
                        <span class="step-text" style="flex: 1 0 0; color: #1E293B; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 600; line-height: normal;">Partner Information</span>
                    </div>
                    <div class="step-line d-none d-md-block mx-3 flex-grow-1" style="height: 2px; background: #E2E8F0; min-width: 40px;"></div>
                    <!-- Step 2 Header -->
                    <div id="step-header-2" class="step d-flex align-items-center gap-2">
                        <span class="step-circle border" style="display: flex; width: 32px; height: 32px; padding: 7.5px 0; justify-content: center; align-items: center; flex-shrink: 0; border-radius: 16px; background: transparent; color: #94A3B8; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 700; line-height: normal;">2</span>
                        <span class="step-text" style="flex: 1 0 0; color: #94A3B8; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 400; line-height: normal;">Address & GPS</span>
                    </div>
                    <div class="step-line d-none d-md-block mx-3 flex-grow-1" style="height: 2px; background: #E2E8F0; min-width: 40px;"></div>
                    <!-- Step 3 Header -->
                    <div id="step-header-3" class="step d-flex align-items-center gap-2">
                        <span class="step-circle border" style="display: flex; width: 32px; height: 32px; padding: 7.5px 0; justify-content: center; align-items: center; flex-shrink: 0; border-radius: 16px; background: transparent; color: #94A3B8; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 700; line-height: normal;">3</span>
                        <span class="step-text" style="flex: 1 0 0; color: #94A3B8; font-family: Inter, sans-serif; font-size: 14px; font-style: normal; font-weight: 400; line-height: normal;">Contact & Contract</span>
                    </div>
                </div>
                <div class="status-indicator">
                    <span class="badge rounded-pill d-inline-flex align-items-center gap-2" style="background-color: #E6FFFA; color: #00A878; font-size: 11px; padding: 6px 12px; font-weight: 700;">
                        <i class="bi bi-circle-fill" style="font-size: 6px;"></i> STATUS: ACTIVE
                    </span>
                </div>
            </div>
            
            <hr id="stepper-hr" class="m-0 text-muted" style="opacity: 0.15;">

            <div class="card-body p-4 p-xl-5">
                <div class="form-wrapper border p-4 p-xl-5 rounded-4" style="border-color: #3b82f6 !important; border-width: 2px !important;">
                    
                    <form action="#" method="POST" id="partner-wizard-form">
                        @csrf
                        
                        <!-- ================= START STEP 1 ================= -->
                        <div id="wizard-step-1">
                            <div class="mb-4">
                                <h2 class="fs-4 fw-bold text-dark mb-1">Partner Information</h2>
                                <p class="text-secondary fs-6">Enter primary details to identify and classify the partner.</p>
                            </div>

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-building form-label-icon"></i> Partner Name <span
                                            class="required-mark">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="e.g. Acme Marketing Agency" required>
                                    <div class="form-text">The formal legal name of the partner organization.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-tags form-label-icon"></i> Partner Type <span
                                            class="required-mark">*</span>
                                    </label>
                                    <select class="form-select" required>
                                        <option value="" selected disabled>Select partner category</option>
                                        <option value="standard">Standard</option>
                                        <option value="premium">Premium</option>
                                        <option value="corporate">Corporate</option>
                                    </select>
                                    <div class="form-text">Standard, Premium, or Corporate partner.</div>
                                    <div class="mt-2">
                                        <a href="#" class="auto-generate-link">
                                            <i class="bi bi-magic"></i> Auto-generate code
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-hash form-label-icon"></i> Internal ID / Short Code
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="ID will be auto-generated at the time of save">
                                    <div class="form-text">Partner will use its own internal short code for identification</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-toggle-on form-label-icon"></i> Partner Status <span
                                            class="required-mark">*</span>
                                    </label>
                                    <select class="form-select" required>
                                        <option value="active" selected>ACTIVE</option>
                                        <option value="inactive">INACTIVE</option>
                                        <option value="pending">PENDING</option>
                                    </select>
                                    <div class="form-text">Enable or disable this partner</div>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-image form-label-icon"></i> Logo URL
                                    </label>
                                    <input type="url" class="form-control" placeholder="Enter URL to partner logo">
                                    <div class="form-text">Enter a URL to the partner's logo image</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-globe form-label-icon"></i> Website
                                    </label>
                                    <input type="url" class="form-control" placeholder="https://example.com">
                                    <div class="form-text">Partner website URL</div>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-linkedin form-label-icon"></i> LinkedIn Profile
                                    </label>
                                    <input type="url" class="form-control" placeholder="https://linkedin.com/company/example">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-card-text form-label-icon"></i> Description
                                    </label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Enter optional partner description or notes..."></textarea>
                                </div>
                            </div>

                            <!-- Start Form Actions -->
                            <div class="form-actions d-flex justify-content-end align-items-center gap-3 mt-5 pt-4 border-top">
                                <button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold" onclick="hideDisplay(event)">Back</button>
                                <button type="button" class="btn text-white rounded-pill px-5 py-2 fw-bold border-0" style="background: linear-gradient(90deg, #26C6A0 0%, #0B4F8A 100%);" onclick="goToStep(2)">Continue</button>
                            </div>
                            <!-- End Form Actions -->
                        </div>
                        <!-- ================= END STEP 1 ================= -->

                        <!-- ================= START STEP 2 ================= -->
                        <div id="wizard-step-2" style="display: none;">
                            <div class="mb-4">
                                <h2 class="fs-4 fw-bold text-dark mb-1">Address Information</h2>
                                <p class="text-secondary fs-6">Enter the primary address for this partner.</p>
                            </div>

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-signpost-2 form-label-icon text-custom-blue"></i> Address Line 1 <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Street address, P.O. box, company name, c/o" required>
                                    <div class="form-text">Street address, P.O. box, company name, c/o</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-building form-label-icon text-custom-blue"></i> Address Line 2 (Optional)
                                    </label>
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit, building, floor, etc.">
                                    <div class="form-text">Apartment, suite, unit, building, floor, etc.</div>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-geo-alt form-label-icon text-custom-blue"></i> City <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select" required>
                                        <option value="" selected disabled>e.g. San Francisco</option>
                                        <option value="SF">San Francisco</option>
                                        <option value="NY">New York</option>
                                        <option value="LA">Los Angeles</option>
                                    </select>
                                    <div class="form-text">City name</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-map form-label-icon text-custom-blue"></i> State / Province
                                    </label>
                                    <input type="text" class="form-control" placeholder="e.g. California">
                                    <div class="form-text">State or province name</div>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-globe-americas form-label-icon text-custom-blue"></i> Country <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select" required>
                                        <option value="US" selected>United States</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="CA">Canada</option>
                                    </select>
                                    <div class="form-text">Country of operation</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-mailbox form-label-icon text-custom-blue"></i> Postal Code
                                    </label>
                                    <input type="text" class="form-control" placeholder="e.g. 94103">
                                    <div class="form-text">Postal / zip code</div>
                                </div>
                            </div>

                            <!-- Start Form Actions -->
                            <div class="form-actions d-flex justify-content-between align-items-center mt-5 pt-4 border-top">
                                <div class="d-flex align-items-center gap-3 text-muted" style="max-width: 350px;">
                                    <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                    <small style="line-height: 1.2;">By creating this partner, you'll be able to assign policies and manage relationships in the next step.</small>
                                </div>
                                <div class="d-flex gap-3">
                                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold" onclick="goToStep(1)">Back</button>
                                    <button type="button" class="btn text-white rounded-pill px-5 py-2 fw-bold border-0" style="background-color: #0B4E89;" onclick="goToStep(3)">Continue</button>
                                </div>
                            </div>
                            <!-- End Form Actions -->
                        </div>
                        <!-- ================= END STEP 2 ================= -->
                        
                        <!-- ================= START STEP 3 ================= -->
                        <div id="wizard-step-3" style="display: none;">
                            <!-- Contact Information Section -->
                            <div class="mb-4">
                                <h2 class="fs-5 fw-bold text-dark mb-1">Contact Information</h2>
                                <p class="text-secondary fs-6">Enter contact details for this partner.</p>
                            </div>

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-person-badge form-label-icon text-custom-blue"></i> Contact Person
                                    </label>
                                    <input type="text" class="form-control" placeholder="Primary contact name">
                                    <div class="form-text">Primary contact name</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-envelope form-label-icon text-custom-blue"></i> Email
                                    </label>
                                    <input type="email" class="form-control" placeholder="Contact email address">
                                    <div class="form-text">Contact email address</div>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-telephone form-label-icon text-custom-blue"></i> Phone
                                    </label>
                                    <input type="tel" class="form-control" placeholder="Enter contact phone number">
                                    <div class="form-text">Enter contact phone number</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-globe2 form-label-icon text-custom-blue"></i> Country Code
                                    </label>
                                    <input type="text" class="form-control" placeholder="MA +212">
                                    <div class="form-text">Country code</div>
                                </div>
                            </div>

                            <!-- Contract Information Section -->
                            <div class="mb-4 mt-5">
                                <h2 class="fs-5 fw-bold text-dark mb-1">Contract Information</h2>
                                <p class="text-secondary fs-6">Set the contract period for this partnership.</p>
                            </div>

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-calendar-event form-label-icon text-custom-blue"></i> Contract Start Date <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="07/07/2026" required>
                                    <div class="form-text">When the partnership begins</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-calendar-x form-label-icon text-custom-blue"></i> Contract End Date
                                    </label>
                                    <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                                    <div class="form-text">Optional; leave blank for indefinite</div>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-file-earmark-arrow-up form-label-icon text-custom-blue"></i> Contract File
                                    </label>
                                    <input type="text" class="form-control" placeholder="Upload contract document (PDF/DOC)">
                                    <div class="form-text">Enter a path to the uploaded contract file (file upload will be implemented in a future phase)</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-card-text form-label-icon text-custom-blue"></i> Contract Notes
                                    </label>
                                    <textarea class="form-control" rows="3" placeholder="Add any contract notes or remarks..."></textarea>
                                </div>
                            </div>

                            <!-- Start Form Actions -->
                            <div class="form-actions d-flex justify-content-between align-items-center mt-5 pt-4 border-top">
                                <div class="d-flex align-items-center gap-3 text-muted" style="max-width: 350px;">
                                    <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                    <small style="line-height: 1.2;">By creating this partner, you'll be able to assign policies and manage relationships in the next step.</small>
                                </div>
                                <div class="d-flex gap-3">
                                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold" onclick="goToStep(2)">Back</button>
                                    <button type="button" class="btn text-white rounded-pill px-5 py-2 fw-bold border-0" style="background-color: #0B4E89;" onclick="goToStep(4)">Continue</button>
                                </div>
                            </div>
                            <!-- End Form Actions -->
                        </div>
                        <!-- ================= END STEP 3 ================= -->

                        <!-- ================= START STEP 4 (SUCCESS STATE) ================= -->
                        <div id="wizard-step-4" style="display: none;">
                            <div class="text-center mb-5">
                                <div class="d-inline-flex justify-content-center align-items-center rounded-circle mb-3" style="width: 72px; height: 72px; background-color: #E6FFFA;">
                                    <i class="bi bi-check-lg" style="color: #26C6A0; font-size: 32px; font-weight: 800;"></i>
                                </div>
                                <h2 class="fs-2 fw-bold text-dark mb-1">Partner Successfully Created</h2>
                                <p class="fs-6 fw-semibold" style="color: #26C6A0;">
                                    <i class="bi bi-check2"></i> Added to Partner Management
                                </p>
                            </div>

                            <div class="bg-light rounded-4 p-4 mb-5 border">
                                <h3 class="fs-7 fw-bold text-secondary mb-3" style="font-size: 11px; letter-spacing: 1px;">CONTACT DETAILS</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center bg-white border rounded-3 p-3 h-100">
                                            <div class="me-3">
                                                <i class="bi bi-person text-custom-blue fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted" style="font-size: 10px; font-weight: 700;">FULL NAME</div>
                                                <div class="fw-semibold text-dark fs-6">Sarah Mitchell</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center bg-white border rounded-3 p-3 h-100">
                                            <div class="me-3">
                                                <i class="bi bi-envelope text-custom-blue fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted" style="font-size: 10px; font-weight: 700;">EMAIL ADDRESS</div>
                                                <div class="fw-semibold text-dark fs-6">sarah.mitchell@company.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center bg-white border rounded-3 p-3 h-100">
                                            <div class="me-3">
                                                <i class="bi bi-telephone text-custom-blue fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted" style="font-size: 10px; font-weight: 700;">PHONE NUMBER</div>
                                                <div class="fw-semibold text-dark fs-6">+1 (555) 234-8901</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center bg-white border rounded-3 p-3 h-100">
                                            <div class="me-3">
                                                <i class="bi bi-building text-custom-blue fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted" style="font-size: 10px; font-weight: 700;">COMPANY</div>
                                                <div class="fw-semibold text-dark fs-6">Acme Corporation</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center bg-white border rounded-3 p-3 h-100">
                                            <div class="me-3">
                                                <i class="bi bi-briefcase text-custom-blue fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted" style="font-size: 10px; font-weight: 700;">ROLE</div>
                                                <div class="fw-semibold text-dark fs-6">Product Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center bg-white border rounded-3 p-3 h-100">
                                            <div class="me-3">
                                                <i class="bi bi-geo-alt text-custom-blue fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted" style="font-size: 10px; font-weight: 700;">LOCATION</div>
                                                <div class="fw-semibold text-dark fs-6">San Francisco, CA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="mb-4">

                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                                <div class="text-muted mb-3 mb-md-0" style="font-size: 13px;">
                                    Created on July 21, 2026 at 3:45 PM
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold border bg-white text-dark">
                                        <i class="bi bi-eye"></i> View Partner
                                    </button>
                                    <button type="button" class="btn text-white rounded-pill px-4 fw-bold" style="background-color: #0B4E89;" onclick="hideDisplay(event)">
                                        Partners
                                    </button>
                                    <button type="button" class="btn text-white rounded-pill px-4 fw-bold" style="background-color: #26C6A0;" onclick="goToStep(1)">
                                        <i class="bi bi-plus"></i> Add Another Partner
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ================= END STEP 4 ================= -->

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goToStep(step) {
            // Hide all steps
            document.getElementById('wizard-step-1').style.display = 'none';
            document.getElementById('wizard-step-2').style.display = 'none';
            document.getElementById('wizard-step-3').style.display = 'none';
            document.getElementById('wizard-step-4').style.display = 'none';
            
            // Show target step
            document.getElementById('wizard-step-' + step).style.display = 'block';

            if (step === 4) {
                // Success state UI changes
                document.getElementById('stepper-header-container').style.display = 'none';
                document.getElementById('stepper-hr').style.display = 'none';
                document.getElementById('main-page-title').innerText = 'Partner Added';
                document.getElementById('header-btn-save').style.display = 'none';
                document.getElementById('header-btn-cancel').style.display = 'none';
                document.querySelector('.form-wrapper').style.borderColor = 'transparent';
                document.querySelector('.form-wrapper').classList.remove('border');
            } else {
                // Reset header if we go back
                document.getElementById('stepper-header-container').style.display = 'flex';
                document.getElementById('stepper-hr').style.display = 'block';
                document.getElementById('main-page-title').innerText = 'Add New Partner';
                document.getElementById('header-btn-save').style.display = 'inline-block';
                document.getElementById('header-btn-cancel').style.display = 'inline-block';
                document.querySelector('.form-wrapper').style.borderColor = '#3b82f6';
                document.querySelector('.form-wrapper').classList.add('border');

                // Reset headers to default gray state
                for(let i=1; i<=3; i++) {
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

                // Apply completed styles to previous steps
                for(let i=1; i<step; i++) {
                    let h = document.getElementById('step-header-' + i);
                    let circle = h.querySelector('.step-circle');
                    
                    circle.style.backgroundColor = '#0B4F8A';
                    circle.style.color = 'white';
                    circle.style.borderColor = '#0B4F8A';
                    circle.innerHTML = '<i class="bi bi-check-lg"></i>';
                }

                // Apply active styles to current step
                let currentHeader = document.getElementById('step-header-' + step);
                let currentCircle = currentHeader.querySelector('.step-circle');
                let currentText = currentHeader.querySelector('.step-text');
                
                currentCircle.style.backgroundColor = '#0B4F8A';
                currentCircle.style.color = 'white';
                currentCircle.style.borderColor = '#0B4F8A';
                currentText.style.color = '#1E293B';
                currentText.style.fontWeight = '600';
            }
        }
    </script>
    <!-- End Partner Information Form Card -->