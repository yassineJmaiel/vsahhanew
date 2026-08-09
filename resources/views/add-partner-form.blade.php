<!-- Start Page Header -->
<div class="page-header add-partner-header">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="header-title-box">
                    <a href="#" class="back-link btn-back-header text-decoration-none" onclick="hideDisplay(event)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8.00021 3.33276L3.33301 7.99996L8.00021 12.6672M3.33301 7.99996H12.6674"
                                stroke="#FFF" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Back to Partners
                    </a>
                    <div class="header-title-box">
                        <h1 class="page-title header-page-title" id="main-page-title">Add New Partner</h1>
                        <p class="page-subtitle header-page-subtitle">Create and configure a new external partner,
                            agency, or firm.</p>
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
                            <path
                                d="M17.5 10C17.5 11.4834 17.0601 12.9334 16.236 14.1668C15.4119 15.4001 14.2406 16.3614 12.8701 16.9291C11.4997 17.4968 9.99168 17.6453 8.53683 17.3559C7.08197 17.0665 5.7456 16.3522 4.6967 15.3033C3.64781 14.2544 2.9335 12.918 2.64411 11.4632C2.35472 10.0083 2.50325 8.50032 3.07091 7.12987C3.63856 5.75943 4.59986 4.58809 5.83323 3.76398C7.0666 2.93987 8.51664 2.5 10 2.5C12.1 2.5 14.1083 3.33333 15.6167 4.78333L17.5 6.66667M13.3333 6.66667H17.5L17.5 2.5"
                                stroke="#4A5568" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Refresh
                    </button>
                    <button class="btn btn-save-draft btn-header-action mb-2 mb-sm-0" id="header-btn-save">
                        Save Draft
                    </button>
                    <button class="btn btn-cancel btn-header-cancel mb-2 mb-sm-0" id="header-btn-cancel"
                        onclick="hideDisplay(event)">
                        Annuler
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Start Partner Information Form Card -->
<div class="position-relative form-card-overlay">
    <div class="card shadow-sm border-0 mx-auto form-card-container">
        <!-- Stepper Header -->
        <div id="stepper-header-container"
            class="card-header bg-white border-bottom-0 pt-4 pb-3 px-4 px-xl-5 d-flex justify-content-between align-items-center flex-wrap gap-3 stepper-header">
            <div class="stepper d-flex align-items-center stepper-nav">
                <!-- Step 1 Header -->
                <div id="step-header-1" class="step active d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <span class="step-circle">1</span>
                        <span class="step-text">Partner Information</span>
                    </div>
                    <div class="step-line step-line-custom d-none d-md-block"></div>
                </div>
                <!-- Step 2 Header -->
                <div id="step-header-2" class="step d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <span class="step-circle border inactive">2</span>
                        <span class="step-text inactive">Address & GPS</span>
                    </div>
                    <div class="step-line step-line-custom d-none d-md-block"></div>
                </div>
                <!-- Step 3 Header -->
                <div id="step-header-3" class="step d-flex align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <span class="step-circle border inactive">3</span>
                        <span class="step-text inactive">Contact & Contract</span>
                    </div>
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

                <form id="partnerForm" enctype="multipart/form-data">
                    @csrf
                    <!-- ================= START STEP 1 ================= -->
                    <div id="wizard-step-1" class="wizard-step-container">
                        <div>
                            <h2 class="wizard-step-title">Partner Information</h2>
                            <p class="wizard-step-subtitle">Enter primary details to identify and classify the partner.
                            </p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12.0004 14C12.0004 12.5855 11.4384 11.229 10.4382 10.2288C9.43787 9.22857 8.08119 8.66667 6.66658 8.66667M6.66658 8.66667C5.25196 8.66667 3.89528 9.22857 2.895 10.2288C1.89472 11.229 1.33276 12.5855 1.33276 14M6.66658 8.66667C8.50769 8.66667 10.0002 7.17428 10.0002 5.33333C10.0002 3.49238 8.50769 2 6.66658 2C4.82546 2 3.33294 3.49238 3.33294 5.33333C3.33294 7.17428 4.82546 8.66667 6.66658 8.66667ZM14.6672 13.3335C14.6672 11.0868 13.3337 9.00013 12.0003 8.00013C12.4386 7.67131 12.7891 7.23952 13.0207 6.74298C13.2524 6.24643 13.3581 5.70044 13.3284 5.15333C13.2987 4.60622 13.1346 4.07485 12.8507 3.60626C12.5667 3.13767 12.1715 2.7463 11.7002 2.4668"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Partner Name <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="e.g. Acme Marketing Agency"
                                    required name="name" id="partner_name">
                                <div class="form-text">The formal legal name of the partner organization.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M2 3.33276V12.6672M5.33333 3.33276V12.6672M8 3.33276V12.6672M11.3333 3.33276V12.6672M14 3.33276V12.6672"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Partner Type <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required name="partner_type">
                                    <option value="" selected disabled>Select partner category</option>
                                    <option value="Insurance Provider">Insurance Provider</option>
                                    <option value="Insurance Broker">Insurance Broker</option>
                                    <option value="Third Party Administrator">Third Party Administrator</option>
                                </select>
                                <div class="form-text">Standard, Premium, or Corporate partner.</div>
                                <div class="mt-2">
                                    <a href="#" id="generateCode" class="auto-generate-link">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 12 12" fill="none">
                                            <path
                                                d="M1.5 6C1.5 4.80653 1.97411 3.66193 2.81802 2.81802C3.66193 1.97411 4.80653 1.5 6 1.5C7.25802 1.50473 8.46552 1.99561 9.37 2.87L10.5 4M8 4H10.5V1.5M10.5 6C10.5 7.19347 10.0259 8.33807 9.18198 9.18198C8.33807 10.0259 7.19347 10.5 6 10.5C4.74198 10.4953 3.53448 10.0044 2.63 9.13L1.5 8M1.5 10.5V8H4"
                                                stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        </svg> Auto-generate code
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_454_2015)">
                                            <path
                                                d="M8.00004 6.66652H8.0067M8.00004 9.3334H8.0067M8.00004 3.99964H8.0067M10.6664 6.66652H10.6731M10.6664 9.3334H10.6731M10.6664 3.99964H10.6731M5.33364 6.66652H5.3403M5.33364 9.3334H5.3403M5.33364 3.99964H5.3403M6.00024 14.6672V12.667C6.00024 12.4902 6.07047 12.3206 6.19548 12.1956C6.32049 12.0705 6.49004 12.0003 6.66684 12.0003H9.33324C9.51003 12.0003 9.67958 12.0705 9.80459 12.1956C9.92961 12.3206 9.99984 12.4902 9.99984 12.667V14.6672M4.00044 1.33276H11.9996C12.7359 1.33276 13.3328 1.92977 13.3328 2.6662V13.3337C13.3328 14.0702 12.7359 14.6672 11.9996 14.6672H4.00044C3.26413 14.6672 2.66724 14.0702 2.66724 13.3337V2.6662C2.66724 1.92977 3.26413 1.33276 4.00044 1.33276Z"
                                                stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_454_2015">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> Internal ID / Short Code
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="ID will be auto-generated at the time of save" name="internal_code"
                                    id="internal_code">
                                <div class="form-text">Partner will use its own internal short code for identification
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.33349 11.334L8.66693 12.6674C8.79826 12.7987 8.95417 12.9029 9.12577 12.9739C9.29736 13.045 9.48128 13.0816 9.66701 13.0816C9.85274 13.0816 10.0367 13.045 10.2082 12.9739C10.3798 12.9029 10.5358 12.7987 10.6671 12.6674C10.7984 12.5361 10.9026 12.3802 10.9737 12.2086C11.0448 12.037 11.0813 11.8531 11.0813 11.6674C11.0813 11.4817 11.0448 11.2978 10.9737 11.1262C10.9026 10.9546 10.7984 10.7987 10.6671 10.6674M9.3338 9.33371L11.0006 11.0004C11.2658 11.2656 11.6256 11.4146 12.0007 11.4146C12.3758 11.4146 12.7355 11.2656 13.0008 11.0004C13.266 10.7352 13.415 10.3755 13.415 10.0004C13.415 9.62531 13.266 9.26559 13.0008 9.00038L10.4139 6.41369C10.0389 6.03916 9.53048 5.82878 9.00044 5.82878C8.4704 5.82878 7.96202 6.03916 7.58699 6.41369L7.00028 7.00036C6.73504 7.26558 6.3753 7.41458 6.0002 7.41458C5.6251 7.41458 5.26536 7.26558 5.00012 7.00036C4.73488 6.73515 4.58587 6.37543 4.58587 6.00036C4.58587 5.62528 4.73488 5.26557 5.00012 5.00035L6.8736 3.12701C7.48181 2.52043 8.27498 2.13404 9.12754 2.02898C9.98011 1.92393 10.8434 2.10622 11.5806 2.54701L11.894 2.73367C12.1779 2.905 12.5154 2.96442 12.8407 2.90034L14.0008 2.66701M14.0007 2.00065L14.6674 9.33403H13.334M1.99973 2.00065L1.33301 9.33403L5.66669 13.6674C5.93193 13.9326 6.29167 14.0816 6.66677 14.0816C7.04187 14.0816 7.40161 13.9326 7.66685 13.6674C7.93209 13.4022 8.08109 13.0425 8.08109 12.6674C8.08109 12.2923 7.93209 11.9326 7.66685 11.6674M1.99973 2.66732H7.33349"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Partner Status <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required name="status">
                                    <option value="active" selected>ACTIVE</option>
                                    <option value="inactive">INACTIVE</option>
                                    <option value="pending">PENDING</option>
                                </select>
                                <div class="form-text">Enable or disable this partner</div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                                        fill="none">
                                        <path
                                            d="M9.66736 1H5.66704C3.0895 1 1 3.08958 1 5.6672C1 8.24482 3.0895 10.3344 5.66704 10.3344H9.66736C12.2449 10.3344 14.3344 8.24482 14.3344 5.6672C14.3344 3.08958 12.2449 1 9.66736 1Z"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        <circle cx="5.667" cy="5.667" r="2" stroke="#0B4F8A" stroke-width="2" />
                                    </svg> Logo URL
                                </label>
                                <input type="url" class="form-control" placeholder="Enter URL to partner logo"
                                    name="logo_link">
                                <div class="form-text">Enter a URL to the partner's logo image</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_454_2042)">
                                            <path
                                                d="M5.33333 1.33276V3.99964M10.6667 1.33276V3.99964M2 6.66652H14M3.33333 2.6662H12.6667C13.403 2.6662 14 3.26321 14 3.99964V13.3337C14 14.0702 13.403 14.6672 12.6667 14.6672H3.33333C2.59695 14.6672 2 14.0702 2 13.3337V3.99964C2 3.26321 2.59695 2.6662 3.33333 2.6662Z"
                                                stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_454_2042">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> Website
                                </label>
                                <input type="url" class="form-control" placeholder="https://example.com" name="website">
                                <div class="form-text">Partner website URL</div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_454_2051)">
                                            <path
                                                d="M14.6672 7.99996C14.6672 11.6822 11.6822 14.6672 7.99996 14.6672M14.6672 7.99996C14.6672 4.31777 11.6822 1.33276 7.99996 1.33276M14.6672 7.99996H1.33276M7.99996 14.6672C4.31777 14.6672 1.33276 11.6822 1.33276 7.99996M7.99996 14.6672C6.28798 12.8696 5.33308 10.4823 5.33308 7.99996C5.33308 5.51759 6.28798 3.13034 7.99996 1.33276M7.99996 14.6672C9.71194 12.8696 10.6668 10.4823 10.6668 7.99996C10.6668 5.51759 9.71194 3.13034 7.99996 1.33276M7.99996 1.33276C4.31777 1.33276 1.33276 4.31777 1.33276 7.99996"
                                                stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_454_2051">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> LinkedIn Profile
                                </label>
                                <input type="url" class="form-control"
                                    placeholder="https://linkedin.com/company/example" name="linkedin">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16"
                                        fill="none">
                                        <path
                                            d="M6.73343 14.2006C7.9733 13.1298 11.6656 9.6628 11.6656 6.33383C11.6656 4.91921 11.1038 3.56253 10.1037 2.56224C9.10357 1.56196 7.74715 1 6.3328 1C4.91845 1 3.56204 1.56196 2.56194 2.56224C1.56185 3.56253 1 4.91921 1 6.33383C1 9.6628 4.6923 13.1298 5.93217 14.2006C6.04768 14.2874 6.18828 14.3344 6.3328 14.3344C6.47732 14.3344 6.61792 14.2874 6.73343 14.2006Z"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        <circle cx="6.333" cy="6.333" r="2" stroke="#0B4F8A" stroke-width="2" />
                                    </svg> Description
                                </label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Enter optional partner description or notes..."
                                    name="description"></textarea>
                            </div>
                        </div>

                        <!-- Start Form Actions -->
                        <div class="form-actions form-actions-custom">
                            <div class="d-flex align-items-center gap-3 text-muted form-notice-box">
                                <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                <small class="form-notice-text">By creating this partner, you'll be able to assign
                                    policies and manage relationships in the next step.</small>
                            </div>

                            <div class="form-btn-group">
                                <button type="button" class="btn btn-form-back"
                                    onclick="hideDisplay(event)">Back</button>
                                <button type="button" class="btn btn-form-continue"
                                    onclick="goToStep(2)">Continue</button>
                            </div>
                        </div>
                        <!-- End Form Actions -->
                    </div>
                    <!-- ================= END STEP 1 ================= -->

                    <!-- ================= START STEP 2 ================= -->
                    <div id="wizard-step-2" class="wizard-step-container" style="display: none;">
                        <div>
                            <h2 class="wizard-step-title">Address Information</h2>
                            <p class="wizard-step-subtitle">Enter the primary address for this partner.</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12.0004 14C12.0004 12.5855 11.4384 11.229 10.4382 10.2288C9.43787 9.22857 8.08119 8.66667 6.66658 8.66667M6.66658 8.66667C5.25196 8.66667 3.89528 9.22857 2.895 10.2288C1.89472 11.229 1.33276 12.5855 1.33276 14M6.66658 8.66667C8.50769 8.66667 10.0002 7.17428 10.0002 5.33333C10.0002 3.49238 8.50769 2 6.66658 2C4.82546 2 3.33294 3.49238 3.33294 5.33333C3.33294 7.17428 4.82546 8.66667 6.66658 8.66667ZM14.6672 13.3335C14.6672 11.0868 13.3337 9.00013 12.0003 8.00013C12.4386 7.67131 12.7891 7.23952 13.0207 6.74298C13.2524 6.24643 13.3581 5.70044 13.3284 5.15333C13.2987 4.60622 13.1346 4.07485 12.8507 3.60626C12.5667 3.13767 12.1715 2.7463 11.7002 2.4668"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Address Line 1 <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="Street address, P.O. box, company name, c/o" required
                                    name="address_line1">
                                <div class="form-text">Street address, P.O. box, company name, c/o</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12.0004 14C12.0004 12.5855 11.4384 11.229 10.4382 10.2288C9.43787 9.22857 8.08119 8.66667 6.66658 8.66667M6.66658 8.66667C5.25196 8.66667 3.89528 9.22857 2.895 10.2288C1.89472 11.229 1.33276 12.5855 1.33276 14M6.66658 8.66667C8.50769 8.66667 10.0002 7.17428 10.0002 5.33333C10.0002 3.49238 8.50769 2 6.66658 2C4.82546 2 3.33294 3.49238 3.33294 5.33333C3.33294 7.17428 4.82546 8.66667 6.66658 8.66667ZM14.6672 13.3335C14.6672 11.0868 13.3337 9.00013 12.0003 8.00013C12.4386 7.67131 12.7891 7.23952 13.0207 6.74298C13.2524 6.24643 13.3581 5.70044 13.3284 5.15333C13.2987 4.60622 13.1346 4.07485 12.8507 3.60626C12.5667 3.13767 12.1715 2.7463 11.7002 2.4668"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Address Line 2 (Optional)
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="Apartment, suite, unit, building, floor, etc." name="address_line2">
                                <div class="form-text">Apartment, suite, unit, building, floor, etc.</div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_454_1620)">
                                            <path
                                                d="M7.99979 6.66652H8.00646M7.99979 9.3334H8.00646M7.99979 3.99964H8.00646M10.6662 6.66652H10.6729M10.6662 9.3334H10.6729M10.6662 3.99964H10.6729M5.33339 6.66652H5.34006M5.33339 9.3334H5.34006M5.33339 3.99964H5.34006M5.99999 14.6672V12.667C5.99999 12.4902 6.07022 12.3206 6.19523 12.1956C6.32025 12.0705 6.4898 12.0003 6.66659 12.0003H9.33299C9.50979 12.0003 9.67934 12.0705 9.80435 12.1956C9.92936 12.3206 9.99959 12.4902 9.99959 12.667V14.6672M4.00019 1.33276H11.9994C12.7357 1.33276 13.3326 1.92977 13.3326 2.6662V13.3337C13.3326 14.0702 12.7357 14.6672 11.9994 14.6672H4.00019C3.26389 14.6672 2.66699 14.0702 2.66699 13.3337V2.6662C2.66699 1.92977 3.26389 1.33276 4.00019 1.33276Z"
                                                stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_454_1620">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> City <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required name="city">
                                    <option value="" selected disabled>e.g. San Francisco</option>
                                    <option value="SF">San Francisco</option>
                                    <option value="NY">New York</option>
                                    <option value="LA">Los Angeles</option>
                                </select>
                                <div class="form-text">City name</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.33349 11.334L8.66693 12.6674C8.79826 12.7987 8.95417 12.9029 9.12577 12.9739C9.29736 13.045 9.48128 13.0816 9.66701 13.0816C9.85274 13.0816 10.0367 13.045 10.2082 12.9739C10.3798 12.9029 10.5358 12.7987 10.6671 12.6674C10.7984 12.5361 10.9026 12.3802 10.9737 12.2086C11.0448 12.037 11.0813 11.8531 11.0813 11.6674C11.0813 11.4817 11.0448 11.2978 10.9737 11.1262C10.9026 10.9546 10.7984 10.7987 10.6671 10.6674M9.3338 9.33371L11.0006 11.0004C11.2658 11.2656 11.6256 11.4146 12.0007 11.4146C12.3758 11.4146 12.7355 11.2656 13.0008 11.0004C13.266 10.7352 13.415 10.3755 13.415 10.0004C13.415 9.62531 13.266 9.26559 13.0008 9.00038L10.4139 6.41369C10.0389 6.03916 9.53048 5.82878 9.00044 5.82878C8.4704 5.82878 7.96202 6.03916 7.58699 6.41369L7.00028 7.00036C6.73504 7.26558 6.3753 7.41458 6.0002 7.41458C5.6251 7.41458 5.26536 7.26558 5.00012 7.00036C4.73488 6.73515 4.58587 6.37543 4.58587 6.00036C4.58587 5.62528 4.73488 5.26557 5.00012 5.00035L6.8736 3.12701C7.48181 2.52043 8.27498 2.13404 9.12754 2.02898C9.98011 1.92393 10.8434 2.10622 11.5806 2.54701L11.894 2.73367C12.1779 2.905 12.5154 2.96442 12.8407 2.90034L14.0008 2.66701M14.0007 2.00065L14.6674 9.33403H13.334M1.99973 2.00065L1.33301 9.33403L5.66669 13.6674C5.93193 13.9326 6.29167 14.0816 6.66677 14.0816C7.04187 14.0816 7.40161 13.9326 7.66685 13.6674C7.93209 13.4022 8.08109 13.0425 8.08109 12.6674C8.08109 12.2923 7.93209 11.9326 7.66685 11.6674M1.99973 2.66732H7.33349"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> State / Province
                                </label>
                                <input type="text" class="form-control" placeholder="e.g. California" name="state">
                                <div class="form-text">State or province name</div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    Country <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required name="country">
                                    <option value="US" selected>United States</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="CA">Canada</option>
                                </select>
                                <div class="form-text">Country of operation</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_454_1647)">
                                            <path
                                                d="M5.33333 1.33276V3.99964M10.6667 1.33276V3.99964M2 6.66652H14M3.33333 2.6662H12.6667C13.403 2.6662 14 3.26321 14 3.99964V13.3337C14 14.0702 13.403 14.6672 12.6667 14.6672H3.33333C2.59695 14.6672 2 14.0702 2 13.3337V3.99964C2 3.26321 2.59695 2.6662 3.33333 2.6662Z"
                                                stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_454_1647">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> Postal Code
                                </label>
                                <input type="text" class="form-control" placeholder="e.g. 94103" name="postal_code">
                                <div class="form-text">Postal / zip code</div>
                            </div>
                        </div>

                        <!-- Start Form Actions -->
                        <div class="form-actions form-actions-custom">
                            <div class="d-flex align-items-center gap-3 text-muted form-notice-box">
                                <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                <small class="form-notice-text">By creating this partner, you'll be able to assign
                                    policies and manage relationships in the next step.</small>
                            </div>
                            <div class="form-btn-group">
                                <button type="button" class="btn btn-form-back" onclick="goToStep(1)">Back</button>
                                <button type="button" class="btn btn-form-continue"
                                    onclick="goToStep(3)">Continue</button>
                            </div>
                        </div>
                        <!-- End Form Actions -->
                    </div>
                    <!-- ================= END STEP 2 ================= -->

                    <!-- ================= START STEP 3 ================= -->
                    <div id="wizard-step-3" class="wizard-step-container" style="display: none;">
                        <!-- Contact Information Section -->
                        <div class="mb-4">
                            <h2 class="wizard-step-title">Contact Information</h2>
                            <p class="wizard-step-subtitle">Enter contact details for this partner.</p>
                        </div>

                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12.0004 14C12.0004 12.5855 11.4384 11.229 10.4382 10.2288C9.43787 9.22857 8.08119 8.66667 6.66658 8.66667M6.66658 8.66667C5.25196 8.66667 3.89528 9.22857 2.895 10.2288C1.89472 11.229 1.33276 12.5855 1.33276 14M6.66658 8.66667C8.50769 8.66667 10.0002 7.17428 10.0002 5.33333C10.0002 3.49238 8.50769 2 6.66658 2C4.82546 2 3.33294 3.49238 3.33294 5.33333C3.33294 7.17428 4.82546 8.66667 6.66658 8.66667ZM14.6672 13.3335C14.6672 11.0868 13.3337 9.00013 12.0003 8.00013C12.4386 7.67131 12.7891 7.23952 13.0207 6.74298C13.2524 6.24643 13.3581 5.70044 13.3284 5.15333C13.2987 4.60622 13.1346 4.07485 12.8507 3.60626C12.5667 3.13767 12.1715 2.7463 11.7002 2.4668"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Contact Person
                                </label>
                                <input type="text" class="form-control" placeholder="Primary contact name"
                                    name="contact_name">
                                <div class="form-text">Primary contact name</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M2 3.33276V12.6672M5.33333 3.33276V12.6672M8 3.33276V12.6672M11.3333 3.33276V12.6672M14 3.33276V12.6672"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Email
                                </label>
                                <input type="email" class="form-control" placeholder="Contact email address"
                                    name="contact_email">
                                <div class="form-text">Contact email address</div>
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_472_2814)">
                                            <path
                                                d="M7.99979 6.66652H8.00646M7.99979 9.3334H8.00646M7.99979 3.99964H8.00646M10.6662 6.66652H10.6729M10.6662 9.3334H10.6729M10.6662 3.99964H10.6729M5.33339 6.66652H5.34006M5.33339 9.3334H5.34006M5.33339 3.99964H5.34006M5.99999 14.6672V12.667C5.99999 12.4902 6.07022 12.3206 6.19523 12.1956C6.32025 12.0705 6.4898 12.0003 6.66659 12.0003H9.33299C9.50979 12.0003 9.67934 12.0705 9.80435 12.1956C9.92936 12.3206 9.99959 12.4902 9.99959 12.667V14.6672M4.00019 1.33276H11.9994C12.7357 1.33276 13.3326 1.92977 13.3326 2.6662V13.3337C13.3326 14.0702 12.7357 14.6672 11.9994 14.6672H4.00019C3.26389 14.6672 2.66699 14.0702 2.66699 13.3337V2.6662C2.66699 1.92977 3.26389 1.33276 4.00019 1.33276Z"
                                                stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_472_2814">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg> Phone
                                </label>
                                <input type="tel" class="form-control" placeholder="Enter contact phone number"
                                    name="contact_phone">
                                <div class="form-text">Enter contact phone number</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.33349 11.334L8.66693 12.6674C8.79826 12.7987 8.95417 12.9029 9.12577 12.9739C9.29736 13.045 9.48128 13.0816 9.66701 13.0816C9.85274 13.0816 10.0367 13.045 10.2082 12.9739C10.3798 12.9029 10.5358 12.7987 10.6671 12.6674C10.7984 12.5361 10.9026 12.3802 10.9737 12.2086C11.0448 12.037 11.0813 11.8531 11.0813 11.6674C11.0813 11.4817 11.0448 11.2978 10.9737 11.1262C10.9026 10.9546 10.7984 10.7987 10.6671 10.6674M9.3338 9.33371L11.0006 11.0004C11.2658 11.2656 11.6256 11.4146 12.0007 11.4146C12.3758 11.4146 12.7355 11.2656 13.0008 11.0004C13.266 10.7352 13.415 10.3755 13.415 10.0004C13.415 9.62531 13.266 9.26559 13.0008 9.00038L10.4139 6.41369C10.0389 6.03916 9.53048 5.82878 9.00044 5.82878C8.4704 5.82878 7.96202 6.03916 7.58699 6.41369L7.00028 7.00036C6.73504 7.26558 6.3753 7.41458 6.0002 7.41458C5.6251 7.41458 5.26536 7.26558 5.00012 7.00036C4.73488 6.73515 4.58587 6.37543 4.58587 6.00036C4.58587 5.62528 4.73488 5.26557 5.00012 5.00035L6.8736 3.12701C7.48181 2.52043 8.27498 2.13404 9.12754 2.02898C9.98011 1.92393 10.8434 2.10622 11.5806 2.54701L11.894 2.73367C12.1779 2.905 12.5154 2.96442 12.8407 2.90034L14.0008 2.66701M14.0007 2.00065L14.6674 9.33403H13.334M1.99973 2.00065L1.33301 9.33403L5.66669 13.6674C5.93193 13.9326 6.29167 14.0816 6.66677 14.0816C7.04187 14.0816 7.40161 13.9326 7.66685 13.6674C7.93209 13.4022 8.08109 13.0425 8.08109 12.6674C8.08109 12.2923 7.93209 11.9326 7.66685 11.6674M1.99973 2.66732H7.33349"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Country Code
                                </label>
                                <input type="text" class="form-control" placeholder="MA +212" name="country_code">
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
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12.0004 14C12.0004 12.5855 11.4384 11.229 10.4382 10.2288C9.43787 9.22857 8.08119 8.66667 6.66658 8.66667M6.66658 8.66667C5.25196 8.66667 3.89528 9.22857 2.895 10.2288C1.89472 11.229 1.33276 12.5855 1.33276 14M6.66658 8.66667C8.50769 8.66667 10.0002 7.17428 10.0002 5.33333C10.0002 3.49238 8.50769 2 6.66658 2C4.82546 2 3.33294 3.49238 3.33294 5.33333C3.33294 7.17428 4.82546 8.66667 6.66658 8.66667ZM14.6672 13.3335C14.6672 11.0868 13.3337 9.00013 12.0003 8.00013C12.4386 7.67131 12.7891 7.23952 13.0207 6.74298C13.2524 6.24643 13.3581 5.70044 13.3284 5.15333C13.2987 4.60622 13.1346 4.07485 12.8507 3.60626C12.5667 3.13767 12.1715 2.7463 11.7002 2.4668"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Contract Start Date <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="07/07/2026" required
                                    name="contract_start">
                                <div class="form-text">When the partnership begins</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M2 3.33276V12.6672M5.33333 3.33276V12.6672M8 3.33276V12.6672M11.3333 3.33276V12.6672M14 3.33276V12.6672"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Contract End Date
                                </label>
                                <input type="text" class="form-control" placeholder="DD/MM/YYYY " name="contract_end">
                                <div class="form-text">Optional; leave blank for indefinite</div>
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <g clip-path="url(#clip0_472_2853)">
                                        <path
                                            d="M7.99979 6.66652H8.00646M7.99979 9.3334H8.00646M7.99979 3.99964H8.00646M10.6662 6.66652H10.6729M10.6662 9.3334H10.6729M10.6662 3.99964H10.6729M5.33339 6.66652H5.34006M5.33339 9.3334H5.34006M5.33339 3.99964H5.34006M5.99999 14.6672V12.667C5.99999 12.4902 6.07022 12.3206 6.19523 12.1956C6.32025 12.0705 6.4898 12.0003 6.66659 12.0003H9.33299C9.50979 12.0003 9.67934 12.0705 9.80435 12.1956C9.92936 12.3206 9.99959 12.4902 9.99959 12.667V14.6672M4.00019 1.33276H11.9994C12.7357 1.33276 13.3326 1.92977 13.3326 2.6662V13.3337C13.3326 14.0702 12.7357 14.6672 11.9994 14.6672H4.00019C3.26389 14.6672 2.66699 14.0702 2.66699 13.3337V2.6662C2.66699 1.92977 3.26389 1.33276 4.00019 1.33276Z"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_472_2853">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Contract File
                                </label>
                                <input type="file" class="form-control" name="contract_file" accept=".pdf,.doc,.docx">
                                <div class="form-text">Enter a path to the uploaded contract file (file upload will be
                                    implemented in a future phase)</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.33349 11.334L8.66693 12.6674C8.79826 12.7987 8.95417 12.9029 9.12577 12.9739C9.29736 13.045 9.48128 13.0816 9.66701 13.0816C9.85274 13.0816 10.0367 13.045 10.2082 12.9739C10.3798 12.9029 10.5358 12.7987 10.6671 12.6674C10.7984 12.5361 10.9026 12.3802 10.9737 12.2086C11.0448 12.037 11.0813 11.8531 11.0813 11.6674C11.0813 11.4817 11.0448 11.2978 10.9737 11.1262C10.9026 10.9546 10.7984 10.7987 10.6671 10.6674M9.3338 9.33371L11.0006 11.0004C11.2658 11.2656 11.6256 11.4146 12.0007 11.4146C12.3758 11.4146 12.7355 11.2656 13.0008 11.0004C13.266 10.7352 13.415 10.3755 13.415 10.0004C13.415 9.62531 13.266 9.26559 13.0008 9.00038L10.4139 6.41369C10.0389 6.03916 9.53048 5.82878 9.00044 5.82878C8.4704 5.82878 7.96202 6.03916 7.58699 6.41369L7.00028 7.00036C6.73504 7.26558 6.3753 7.41458 6.0002 7.41458C5.6251 7.41458 5.26536 7.26558 5.00012 7.00036C4.73488 6.73515 4.58587 6.37543 4.58587 6.00036C4.58587 5.62528 4.73488 5.26557 5.00012 5.00035L6.8736 3.12701C7.48181 2.52043 8.27498 2.13404 9.12754 2.02898C9.98011 1.92393 10.8434 2.10622 11.5806 2.54701L11.894 2.73367C12.1779 2.905 12.5154 2.96442 12.8407 2.90034L14.0008 2.66701M14.0007 2.00065L14.6674 9.33403H13.334M1.99973 2.00065L1.33301 9.33403L5.66669 13.6674C5.93193 13.9326 6.29167 14.0816 6.66677 14.0816C7.04187 14.0816 7.40161 13.9326 7.66685 13.6674C7.93209 13.4022 8.08109 13.0425 8.08109 12.6674C8.08109 12.2923 7.93209 11.9326 7.66685 11.6674M1.99973 2.66732H7.33349"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Contract Notes
                                </label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Add any contract notes or remarks..." name="contract_notes"></textarea>
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.33349 11.334L8.66693 12.6674C8.79826 12.7987 8.95417 12.9029 9.12577 12.9739C9.29736 13.045 9.48128 13.0816 9.66701 13.0816C9.85274 13.0816 10.0367 13.045 10.2082 12.9739C10.3798 12.9029 10.5358 12.7987 10.6671 12.6674C10.7984 12.5361 10.9026 12.3802 10.9737 12.2086C11.0448 12.037 11.0813 11.8531 11.0813 11.6674C11.0813 11.4817 11.0448 11.2978 10.9737 11.1262C10.9026 10.9546 10.7984 10.7987 10.6671 10.6674M9.3338 9.33371L11.0006 11.0004C11.2658 11.2656 11.6256 11.4146 12.0007 11.4146C12.3758 11.4146 12.7355 11.2656 13.0008 11.0004C13.266 10.7352 13.415 10.3755 13.415 10.0004C13.415 9.62531 13.266 9.26559 13.0008 9.00038L10.4139 6.41369C10.0389 6.03916 9.53048 5.82878 9.00044 5.82878C8.4704 5.82878 7.96202 6.03916 7.58699 6.41369L7.00028 7.00036C6.73504 7.26558 6.3753 7.41458 6.0002 7.41458C5.6251 7.41458 5.26536 7.26558 5.00012 7.00036C4.73488 6.73515 4.58587 6.37543 4.58587 6.00036C4.58587 5.62528 4.73488 5.26557 5.00012 5.00035L6.8736 3.12701C7.48181 2.52043 8.27498 2.13404 9.12754 2.02898C9.98011 1.92393 10.8434 2.10622 11.5806 2.54701L11.894 2.73367C12.1779 2.905 12.5154 2.96442 12.8407 2.90034L14.0008 2.66701M14.0007 2.00065L14.6674 9.33403H13.334M1.99973 2.00065L1.33301 9.33403L5.66669 13.6674C5.93193 13.9326 6.29167 14.0816 6.66677 14.0816C7.04187 14.0816 7.40161 13.9326 7.66685 13.6674C7.93209 13.4022 8.08109 13.0425 8.08109 12.6674C8.08109 12.2923 7.93209 11.9326 7.66685 11.6674M1.99973 2.66732H7.33349"
                                            stroke="#0B4F8A" stroke-width="2" stroke-linecap="round" />
                                    </svg> Add Logo
                                </label>
                                <input type="file" class="form-control" name="logo" accept="image/*">
                            </div>
                        </div>

                        <!-- Start Form Actions -->
                        <div class="form-actions form-actions-custom">
                            <div class="d-flex align-items-center gap-3 text-muted form-notice-box">
                                <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                <small class="form-notice-text">By creating this partner, you'll be able to assign
                                    policies and manage relationships in the next step.</small>
                            </div>
                            <div class="form-btn-group">
                                <button type="button" class="btn btn-form-back" onclick="goToStep(2)">Back</button>
                                <button type="button" class="btn btn-form-continue" id="createPartner">
                                    Create
                                </button>
                            </div>
                        </div>
                        <!-- End Form Actions -->
                    </div>
                    <!-- ================= END STEP 3 ================= -->

                    <!-- ================= START STEP 4 (SUCCESS STATE) ================= -->
                    <div id="wizard-step-4" style="display: none;">

                        <!-- Outer Card -->
                        <div style="display:flex; width:100%; padding:48px; flex-direction:column; align-items:flex-start; gap:40px; border-radius:16px; border:1px solid #E2E8F0; background:#FFF; box-shadow:0 8px 24px 0 #DAEEFF; box-sizing:border-box;">

                            <!-- Top: check icon + title + subtitle -->
                            <div style="display:flex; flex-direction:column; align-items:center; gap:16px; align-self:stretch;">
                                <div style="display:flex; width:72px; height:72px; flex-direction:column; justify-content:center; align-items:center; border-radius:36px; background:#E8FBF6;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                        <path d="M29.9988 9L13.5005 25.4988L6.00122 17.9993" pathLength="1" stroke="#26C6A0" stroke-width="2" stroke-linecap="round" stroke-dasharray="1 1"/>
                                    </svg>
                                </div>
                                <div style="display:flex; flex-direction:column; align-items:center; gap:4px;">
                                    <h2 id="step4_title" style="color:#0F172A; text-align:center; font-family:Inter,sans-serif; font-size:32px; font-weight:800; margin:0;">Partner Successfully Created</h2>
                                    <p style="color:#26C6A0; text-align:center; font-family:Inter,sans-serif; font-size:16px; font-weight:500; margin:0;">✓ Added to Partner Management</p>
                                </div>
                            </div>

                            <!-- Details cards row -->
                            <div style="display:flex; align-items:flex-start; gap:12px; align-self:stretch; flex-wrap:wrap;">

                                <!-- LEFT: PARTNER DETAILS -->
                                <div style="min-width:320px; max-width:673px; min-height:277px; border-radius:12px; border:1px solid #E2E8F0; background:#F8FAFC; padding:24px; box-sizing:border-box; display:flex; flex-direction:column; gap:16px; flex:1 1 320px;">
                                    <span style="color:#00008F; font-family:Inter,sans-serif; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">PARTNER DETAILS</span>
                                    <div style="display:flex; align-items:flex-start; gap:12px; flex-wrap:wrap;">
                                        <!-- Partner Logo -->
                                        <div id="partner_logo_box" style="width:120px; min-height:156px; border-radius:8px; background:#E2E8F0; display:flex; align-items:center; justify-content:center; flex-shrink:0; overflow:hidden;">
                                            <img id="partner_logo_img" src="" alt="Partner Logo" style="max-width:100%; max-height:100%; object-fit:contain; display:none;" onerror="this.style.display='none'; document.getElementById('partner_logo_fallback').style.display='flex';">
                                            <div id="partner_logo_fallback" style="width:100%; height:100%; display:flex; align-items:center; justify-content:center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none">
                                                    <rect x="3" y="3" width="18" height="18" rx="3" stroke="#94A3B8" stroke-width="1.5"/>
                                                    <circle cx="8.5" cy="8.5" r="2" stroke="#94A3B8" stroke-width="1.5"/>
                                                    <path d="M3 16L8.29 11.47C8.68 11.11 9.27 11.13 9.64 11.5L14 16" stroke="#94A3B8" stroke-width="1.5" stroke-linecap="round"/>
                                                    <path d="M13 14.5L15.29 12.47C15.68 12.11 16.27 12.13 16.64 12.5L21 17" stroke="#94A3B8" stroke-width="1.5" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- 3 field rows -->
                                        <div style="display:flex; flex-direction:column; gap:8px; flex:1 1 140px;">
                                            <!-- Partner Name -->
                                            <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                                <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M14.2506 15.75V14.25C14.2506 13.4544 13.9345 12.6913 13.3718 12.1287C12.8091 11.5661 12.046 11.25 11.2502 11.25H6.74973C5.95399 11.25 5.19084 11.5661 4.62817 12.1287C4.0655 12.6913 3.74939 13.4544 3.74939 14.25V15.75M12.0003 5.25C12.0003 6.90685 10.657 8.25 8.99999 8.25C7.34295 8.25 5.99965 6.90685 5.99965 5.25C5.99965 3.59315 7.34295 2.25 8.99999 2.25C10.657 2.25 12.0003 3.59315 12.0003 5.25Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div style="min-width:0;">
                                                    <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">PARTNER NAME</div>
                                                    <div id="partner_name_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                                </div>
                                            </div>
                                            <!-- Partner Type -->
                                            <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                                <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16" fill="none">
                                                        <path d="M11.5012 14.5V13C11.5012 12.2044 11.1851 11.4413 10.6224 10.8787C10.0597 10.3161 9.2966 10 8.50086 10H4.00034C3.2046 10 2.44145 10.3161 1.87878 10.8787C1.31611 11.4413 1 12.2044 1 13V14.5M9.25094 4C9.25094 5.65685 7.90764 7 6.2506 7C4.59356 7 3.25026 5.65685 3.25026 4C3.25026 2.34315 4.59356 1 6.2506 1C7.90764 1 9.25094 2.34315 9.25094 4Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div style="min-width:0;">
                                                    <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">PARTNER TYPE</div>
                                                    <div id="partner_type_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                                </div>
                                            </div>
                                            <!-- Partner Code -->
                                            <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                                <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M2 3.33301V12.6674M5.33333 3.33301V12.6674M8 3.33301V12.6674M11.3333 3.33301V12.6674M14 3.33301V12.6674" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div style="min-width:0;">
                                                    <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">PARTNER CODE</div>
                                                    <div id="partner_code_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RIGHT: CONTACT DETAILS -->
                                <div style="min-width:320px; min-height:277px; border-radius:12px; border:1px solid #E2E8F0; background:#F8FAFC; padding:24px; box-sizing:border-box; display:flex; flex-direction:column; gap:16px; flex:1 1 320px;">
                                    <span style="color:#00A878; font-family:Inter,sans-serif; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">CONTACT DETAILS</span>
                                    <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:8px;">
                                        <!-- Full Name -->
                                        <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                            <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M14.2506 15.75V14.25C14.2506 13.4544 13.9345 12.6913 13.3718 12.1287C12.8091 11.5661 12.046 11.25 11.2502 11.25H6.74973C5.95399 11.25 5.19084 11.5661 4.62817 12.1287C4.0655 12.6913 3.74939 13.4544 3.74939 14.25V15.75M12.0003 5.25C12.0003 6.90685 10.657 8.25 8.99999 8.25C7.34295 8.25 5.99965 6.90685 5.99965 5.25C5.99965 3.59315 7.34295 2.25 8.99999 2.25C10.657 2.25 12.0003 3.59315 12.0003 5.25Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div style="min-width:0;">
                                                <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">FULL NAME</div>
                                                <div id="contact_name_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                            </div>
                                        </div>
                                        <!-- Phone -->
                                        <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                            <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <g clip-path="url(#ph1)">
                                                        <path d="M10.8689 12.472C10.7035 12.5133 10.529 12.497 10.3741 12.4259C8.29075 11.4034 6.60481 9.71958 5.57972 7.63751C5.5038 7.48178 5.48413 7.30457 5.52405 7.13599C5.56398 6.9674 5.66103 6.81783 5.79873 6.71269L6.14976 6.44942C6.33607 6.30969 6.48729 6.1285 6.59144 5.9202C6.69559 5.7119 6.74981 5.48221 6.74981 5.24932V2.99914C6.74981 2.60129 6.59176 2.21973 6.31043 1.9384C6.02911 1.65707 5.64755 1.49902 5.24969 1.49902H2.99951C2.60165 1.49902 2.22009 1.65707 1.93876 1.9384C1.65744 2.21973 1.49939 2.60129 1.49939 2.99914C1.49939 6.57985 2.92182 10.0139 5.45376 12.5458C7.98571 15.0778 11.4198 16.5002 15.0005 16.5002C15.3983 16.5002 15.7799 16.3422 16.0612 16.0608C16.3425 15.7795 16.5006 15.398 16.5006 15.0001V12.7499C16.5006 12.3521 16.3425 11.9705 16.0612 11.6892C15.7799 11.4079 15.3983 11.2498 15.0005 11.2498H12.7503C12.5174 11.2498 12.2877 11.304 12.0794 11.4082C11.8711 11.5123 11.6899 11.6635 11.5502 11.8499L11.2839 12.1986C11.1807 12.3343 11.0343 12.4307 10.8689 12.472Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                    </g>
                                                    <defs><clipPath id="ph1"><rect width="18" height="18" fill="white"/></clipPath></defs>
                                                </svg>
                                            </div>
                                            <div style="min-width:0;">
                                                <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">PHONE NUMBER</div>
                                                <div id="contact_phone_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                            </div>
                                        </div>
                                        <!-- Company -->
                                        <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                            <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M12.0002 14.999V2.99902C12.0002 2.6012 11.8422 2.21967 11.5609 1.93836C11.2795 1.65706 10.898 1.49902 10.5001 1.49902H7.49987C7.10201 1.49902 6.72045 1.65706 6.43912 1.93836C6.1578 2.21967 5.99975 2.6012 5.99975 2.99902V14.999M2.99951 4.49902H15.0005C15.829 4.49902 16.5006 5.1706 16.5006 5.99902V13.499C16.5006 14.3275 15.829 14.999 15.0005 14.999H2.99951C2.17102 14.999 1.49939 14.3275 1.49939 13.499V5.99902C1.49939 5.1706 2.17102 4.49902 2.99951 4.49902Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div style="min-width:0;">
                                                <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">COMPANY</div>
                                                <div id="contact_company_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                            <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M16.5006 5.25075L9.7568 9.54557C9.52795 9.67847 9.26801 9.74847 9.00336 9.74847C8.73872 9.74847 8.47878 9.67847 8.24993 9.54557L1.49939 5.25075M2.99951 3.00098H15.0005C15.829 3.00098 16.5006 3.67248 16.5006 4.50083V13.4999C16.5006 14.3283 15.829 14.9998 15.0005 14.9998H2.99951C2.17102 14.9998 1.49939 14.3283 1.49939 13.4999V4.50083C1.49939 3.67248 2.17102 3.00098 2.99951 3.00098Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div style="min-width:0;">
                                                <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">EMAIL ADDRESS</div>
                                                <div id="contact_email_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                            </div>
                                        </div>
                                        <!-- Role -->
                                        <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                            <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.00001 7.4995H9.00751M9.00001 10.4997H9.00751M9.00001 4.49926H9.00751M11.9997 7.4995H12.0072M11.9997 10.4997H12.0072M11.9997 4.49926H12.0072M6.00031 7.4995H6.00781M6.00031 10.4997H6.00781M6.00031 4.49926H6.00781M6.75024 16.5002V14.25C6.75024 14.0511 6.82925 13.8603 6.96988 13.7197C7.11052 13.579 7.30127 13.5 7.50016 13.5H10.4999C10.6988 13.5 10.8895 13.579 11.0301 13.7197C11.1708 13.8603 11.2498 14.0511 11.2498 14.25V16.5002M4.50046 1.49902H13.4996C14.3279 1.49902 14.9994 2.17065 14.9994 2.99914V15.0001C14.9994 15.8286 14.3279 16.5002 13.4996 16.5002H4.50046C3.67212 16.5002 3.00061 15.8286 3.00061 15.0001V2.99914C3.00061 2.17065 3.67212 1.49902 4.50046 1.49902Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div style="min-width:0;">
                                                <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">ROLE</div>
                                                <div id="contact_role_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div style="display:flex; padding:12px; align-items:center; gap:16px; border-radius:8px; border:1px solid #E2E8F0; background:#FFF;">
                                            <div style="display:flex; padding:8px; border-radius:8px; background:#F8FAFC; flex-shrink:0;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.45072 16.3496C10.8456 15.145 14.9994 11.2447 14.9994 7.49958C14.9994 5.90813 14.3673 4.38187 13.2422 3.25655C12.1171 2.13122 10.5912 1.49902 9.00001 1.49902C7.40887 1.49902 5.8829 2.13122 4.75779 3.25655C3.63269 4.38187 3.00061 5.90813 3.00061 7.49958C3.00061 11.2447 7.15445 15.145 8.54931 16.3496C8.67925 16.4474 8.83743 16.5002 9.00001 16.5002C9.16259 16.5002 9.32077 16.4474 9.45072 16.3496Z" stroke="#00A878" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div style="min-width:0;">
                                                <div style="color:#94A3B8; font-family:Inter,sans-serif; font-size:11px; font-weight:600; text-transform:uppercase;">LOCATION</div>
                                                <div id="contact_location_display" style="color:#0F172A; font-family:Inter,sans-serif; font-size:14px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">—</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer bar -->
                            <div class="add-partner-management-footer">
                                <span class="add-partner-management-date">
                                    Created on <span id="partner_created_at_display">—</span>
                                </span>
                                <div class="add-partner-management-actions">
                                    <button type="button" class="btn-add-partner-management-view" onclick="openPartnerDetailsFromCreatedForm()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M1.37443 7.76824C1.31887 7.91792 1.31887 8.08256 1.37443 8.23224C1.91557 9.54434 2.83411 10.6662 4.01361 11.4556C5.19312 12.2451 6.58046 12.6665 7.99977 12.6665C9.41907 12.6665 10.8064 12.2451 11.9859 11.4556C13.1654 10.6662 14.084 9.54434 14.6251 8.23224C14.6807 8.08256 14.6807 7.91792 14.6251 7.76824C14.084 6.45614 13.1654 5.33427 11.9859 4.54484C10.8064 3.75541 9.41907 3.33398 7.99977 3.33398C6.58046 3.33398 5.19312 3.75541 4.01361 4.54484C2.83411 5.33427 1.91557 6.45614 1.37443 7.76824Z" stroke="#475569" stroke-width="2" stroke-linecap="round"/>
                                            <circle cx="8" cy="8" r="2" stroke="#475569" stroke-width="2"/>
                                        </svg>
                                        View Partner
                                    </button>
                                    <button type="button" class="btn-add-partner-management-partners" onclick="hideDisplay(event)">
                                        Partners
                                    </button>
                                    <button type="button" class="btn-add-partner-management-add" onclick="resetAndAddNewPartner()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M3.33276 8.00021H12.6672M7.99996 3.33301V12.6674" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                        Add New Partner
                                    </button>
                                </div>
                            </div>

                        </div><!-- /outer card -->

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

        // Show target step using 'block' so standard page layout & Bootstrap grid rows work properly
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

            // Reset all to default inactive state
            for (let i = 1; i <= 3; i++) {
                let h = document.getElementById('step-header-' + i);
                h.classList.remove('active', 'completed');
                let text = h.querySelector('.step-text');
                text.classList.add('inactive');
                let circle = h.querySelector('.step-circle');
                circle.innerHTML = i;
            }

            // Apply completed styles to previous steps
            for (let i = 1; i < step; i++) {
                let h = document.getElementById('step-header-' + i);
                h.classList.add('completed');
                let text = h.querySelector('.step-text');
                text.classList.remove('inactive');
                let circle = h.querySelector('.step-circle');
                circle.innerHTML = '<i class="bi bi-check-lg"></i>';
            }

            // Apply active styles to current step
            let currentHeader = document.getElementById('step-header-' + step);
            currentHeader.classList.add('active');
            let currentText = currentHeader.querySelector('.step-text');
            currentText.classList.remove('inactive');
        }
    }

    function resetAndAddNewPartner() {
        document.getElementById('partnerForm').reset();
        goToStep(1);
    }
</script>

<script>
    document.getElementById('generateCode').addEventListener('click', function (e) {
        e.preventDefault();

        let name = document.querySelector('input[name="name"]').value;

        if (name.trim() === '') {
            alert('Please enter partner name first');
            return;
        }

        let prefix = name
            .replace(/[^a-zA-Z]/g, '')
            .substring(0, 3)
            .toUpperCase();

        let random = Math.floor(10000 + Math.random() * 90000);
        let code = prefix + '-' + random;

        document.getElementById('internal_code').value = code;
    });

    document.getElementById('createPartner').addEventListener('click', function (e) {
        e.preventDefault();

        let form = document.getElementById('partnerForm');
        let formData = new FormData(form);

        let partnerName = document.querySelector('input[name="name"]')?.value || '—';
        let partnerType = document.querySelector('select[name="partner_type"]')?.value || '—';
        let internalCode = document.querySelector('input[name="internal_code"]')?.value || '—';

        let contactName = document.querySelector('input[name="contact_name"]')?.value || '—';
        let contactEmail = document.querySelector('input[name="contact_email"]')?.value || '—';
        let contactPhone = document.querySelector('input[name="contact_phone"]')?.value || '—';
        let countryCode = document.querySelector('input[name="country_code"]')?.value || '';
        let citySelect = document.querySelector('select[name="city"]');
        let citySelectedOpt = citySelect ? citySelect.options[citySelect.selectedIndex] : null;
        let cityText = (citySelectedOpt && !citySelectedOpt.disabled && citySelectedOpt.value) ? citySelectedOpt.text : '';
        let countrySelect = document.querySelector('select[name="country"]');
        let countrySelectedOpt = countrySelect ? countrySelect.options[countrySelect.selectedIndex] : null;
        let countryText = (countrySelectedOpt && !countrySelectedOpt.disabled && countrySelectedOpt.value) ? countrySelectedOpt.text : '';

        let logoUrl = document.querySelector('input[name="logo_link"]')?.value;
        let logoFileInput = document.querySelector('input[name="logo"]');

        // Set initial form field values
        document.getElementById('partner_name_display').innerText = partnerName;
        document.getElementById('partner_type_display').innerText = partnerType;
        document.getElementById('partner_code_display').innerText = internalCode;

        document.getElementById('contact_name_display').innerText = contactName;
        document.getElementById('contact_email_display').innerText = contactEmail;
        document.getElementById('contact_phone_display').innerText = (countryCode ? countryCode + ' ' : '') + contactPhone;
        document.getElementById('contact_company_display').innerText = partnerName || '—';
        document.getElementById('contact_role_display').innerText = '—';
        let contactLocationDisplay = document.getElementById('contact_location_display');
        contactLocationDisplay.innerText = (cityText && countryText) ? cityText + ', ' + countryText : (cityText || countryText || '—');
        contactLocationDisplay.dataset.city = cityText || '';
        contactLocationDisplay.dataset.country = countryText || '';

        let now = new Date();
        let options = { month: 'long', day: 'numeric', year: 'numeric', hour: 'numeric', minute: '2-digit', hour12: true };
        document.getElementById('partner_created_at_display').innerText = now.toLocaleString('en-US', options).replace(' at', ' at');

        // Handle logo image preview
        let logoImg = document.getElementById('partner_logo_img');
        let logoFallback = document.getElementById('partner_logo_fallback');

        if (logoFileInput && logoFileInput.files && logoFileInput.files[0]) {
            let reader = new FileReader();
            reader.onload = function (evt) {
                logoImg.src = evt.target.result;
                logoImg.style.display = 'block';
                if (logoFallback) logoFallback.style.display = 'none';
            }
            reader.readAsDataURL(logoFileInput.files[0]);
        } else if (logoUrl) {
            logoImg.src = logoUrl;
            logoImg.style.display = 'block';
            if (logoFallback) logoFallback.style.display = 'none';
        } else {
            logoImg.style.display = 'none';
            if (logoFallback) logoFallback.style.display = 'flex';
        }

        let csrfToken = document.querySelector('input[name="_token"]')?.value;
        if (csrfToken) {
            fetch("{{ route('partners.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    "Accept": "application/json"
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.partner) {
                        let p = data.partner;
                        if (p.name) document.getElementById('partner_name_display').innerText = p.name;
                        if (p.partner_type) document.getElementById('partner_type_display').innerText = p.partner_type;
                        if (p.internal_code) document.getElementById('partner_code_display').innerText = p.internal_code;
                        if (p.contact_name) document.getElementById('contact_name_display').innerText = p.contact_name;
                        if (p.contact_email) document.getElementById('contact_email_display').innerText = p.contact_email;
                        if (p.contact_phone) document.getElementById('contact_phone_display').innerText = (p.country_code ? p.country_code + ' ' : '') + p.contact_phone;
                        if (p.city || p.country) {
                            let locEl = document.getElementById('contact_location_display');
                            locEl.innerText = (p.city || '') + (p.city && p.country ? ', ' : '') + (p.country || '');
                            if (p.city) locEl.dataset.city = p.city;
                            if (p.country) locEl.dataset.country = p.country;
                        }
                        if (data.date) document.getElementById('partner_created_at_display').innerText = data.date;
                        if (p.logo) {
                            logoImg.src = '/storage/' + p.logo;
                            logoImg.style.display = 'block';
                            if (logoFallback) logoFallback.style.display = 'none';
                        }
                    }
                })
                .catch(err => console.log(err));
        }

        goToStep(4);
    });

    function openPartnerDetailsFromCreatedForm() {
        let name = document.getElementById('partner_name_display')?.innerText;
        let type = document.getElementById('partner_type_display')?.innerText;
        let code = document.getElementById('partner_code_display')?.innerText;
        let contactName = document.getElementById('contact_name_display')?.innerText;
        let contactEmail = document.getElementById('contact_email_display')?.innerText;
        let contactPhone = document.getElementById('contact_phone_display')?.innerText;
        let locationEl = document.getElementById('contact_location_display');
        let city = locationEl?.dataset.city;
        let country = locationEl?.dataset.country;

        if (typeof openPartnerDetails === 'function') {
            openPartnerDetails({
                name: name,
                type: type,
                internal_code: code,
                contact_name: contactName,
                contact_email: contactEmail,
                contact_phone: contactPhone,
                city: city,
                country: country,
                status: 'Active'
            });
        }
    }
</script>

<!-- End Partner Information Form Card -->