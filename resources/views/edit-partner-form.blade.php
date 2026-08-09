{{-- Start Edit Partner Form --}}
<div class="page-header add-partner-header">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="header-title-box">
                    <a href="#" class="back-link btn-back-header text-decoration-none" onclick="hideEditDisplay(event)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8.00021 3.33276L3.33301 7.99996L8.00021 12.6672M3.33301 7.99996H12.6674" stroke="#FFF" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Back to Partners
                    </a>
                    <div class="header-title-box">
                        <h1 class="page-title header-page-title">Edit Partner</h1>
                        <p class="page-subtitle header-page-subtitle">Update and configure partner details.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-actions d-flex align-items-center justify-content-lg-end flex-wrap gap-3">
                    <button class="btn btn-cancel btn-header-cancel mb-2 mb-sm-0" onclick="hideEditDisplay(event)">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative form-card-overlay">
    <div class="card shadow-sm border-0 mx-auto form-card-container">
        {{-- Stepper Header --}}
        <div id="edit-stepper-header-container"
            class="card-header bg-white border-bottom-0 pt-4 pb-3 px-4 px-xl-5 d-flex justify-content-between align-items-center flex-wrap gap-3 stepper-header">
            <div class="stepper d-flex align-items-center stepper-nav">
                <div id="edit-step-header-1" class="step active d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <span class="step-circle">1</span>
                        <span class="step-text">Partner Information</span>
                    </div>
                    <div class="step-line step-line-custom d-none d-md-block"></div>
                </div>
                <div id="edit-step-header-2" class="step d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <span class="step-circle border inactive">2</span>
                        <span class="step-text inactive">Address &amp; GPS</span>
                    </div>
                    <div class="step-line step-line-custom d-none d-md-block"></div>
                </div>
                <div id="edit-step-header-3" class="step d-flex align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <span class="step-circle border inactive">3</span>
                        <span class="step-text inactive">Contact &amp; Contract</span>
                    </div>
                </div>
            </div>
            <div class="status-indicator">
                <span class="badge rounded-pill d-inline-flex align-items-center gap-2 status-badge-active">
                    <i class="bi bi-circle-fill"></i> STATUS: ACTIVE
                </span>
            </div>
        </div>

        <hr id="edit-stepper-hr" class="m-0 text-muted stepper-divider">

        <div class="card-body form-card-body">
            <div class="form-wrapper rounded-4 form-wrapper-custom">
                <form id="editPartnerForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_partner_id" id="edit_partner_id">

                    {{-- ===== STEP 1: Partner Information ===== --}}
                    <div id="edit-wizard-step-1" class="wizard-step-container">
                        <div>
                            <h2 class="wizard-step-title">Partner Information</h2>
                            <p class="wizard-step-subtitle">Update primary details to identify and classify the partner.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M12.0004 14C12.0004 12.5855 11.4384 11.229 10.4382 10.2288C9.43787 9.22857 8.08119 8.66667 6.66658 8.66667M6.66658 8.66667C5.25196 8.66667 3.89528 9.22857 2.895 10.2288C1.89472 11.229 1.33276 12.5855 1.33276 14M6.66658 8.66667C8.50769 8.66667 10.0002 7.17428 10.0002 5.33333C10.0002 3.49238 8.50769 2 6.66658 2C4.82546 2 3.33294 3.49238 3.33294 5.33333C3.33294 7.17428 4.82546 8.66667 6.66658 8.66667Z" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></svg>
                                    Partner Name <span class="required-mark">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="e.g. Acme Marketing Agency" required name="name" id="edit_partner_name">
                                <div class="form-text">The formal legal name of the partner organization.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 3.33276V12.6672M5.33333 3.33276V12.6672M8 3.33276V12.6672M11.3333 3.33276V12.6672M14 3.33276V12.6672" stroke="#0B4F8A" stroke-width="2" stroke-linecap="round"/></svg>
                                    Partner Type <span class="required-mark">*</span>
                                </label>
                                <select class="form-select" required name="partner_type" id="edit_partner_type">
                                    <option value="" disabled>Select partner category</option>
                                    <option value="Insurance Provider">Insurance Provider</option>
                                    <option value="Insurance Broker">Insurance Broker</option>
                                    <option value="Third Party Administrator">Third Party Administrator</option>
                                </select>
                                <div class="form-text">Standard, Premium, or Corporate partner.</div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">Internal ID / Short Code</label>
                                <input type="text" class="form-control" placeholder="e.g. ACM-12345" name="internal_code" id="edit_internal_code">
                                <div class="form-text">Partner's internal short code for identification.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Partner Status <span class="required-mark">*</span></label>
                                <select class="form-select" required name="status" id="edit_status">
                                    <option value="active">ACTIVE</option>
                                    <option value="inactive">INACTIVE</option>
                                    <option value="pending">PENDING</option>
                                </select>
                                <div class="form-text">Enable or disable this partner.</div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">Logo URL</label>
                                <input type="url" class="form-control" placeholder="Enter URL to partner logo" name="logo_link" id="edit_logo_link">
                                <div class="form-text">Enter a URL to the partner's logo image.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Website</label>
                                <input type="url" class="form-control" placeholder="https://example.com" name="website" id="edit_website">
                                <div class="form-text">Partner website URL.</div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">LinkedIn Profile</label>
                                <input type="url" class="form-control" placeholder="https://linkedin.com/company/example" name="linkedin" id="edit_linkedin">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter optional partner description or notes..." name="description" id="edit_description"></textarea>
                            </div>
                        </div>
                        <div class="form-actions form-actions-custom" style="justify-content:flex-end;">
                            <div class="form-btn-group">
                                <button type="button" class="btn btn-form-back" onclick="hideEditDisplay(event)">Cancel</button>
                                <button type="button" class="btn btn-form-continue" onclick="editGoToStep(2)">Continue</button>
                            </div>
                        </div>
                    </div>

                    {{-- ===== STEP 2: Address ===== --}}
                    <div id="edit-wizard-step-2" class="wizard-step-container" style="display:none;">
                        <div>
                            <h2 class="wizard-step-title">Address Information</h2>
                            <p class="wizard-step-subtitle">Update the primary address for this partner.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">Address Line 1 <span class="required-mark">*</span></label>
                                <input type="text" class="form-control" placeholder="Street address, P.O. box" required name="address_line1" id="edit_address_line1">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address Line 2 (Optional)</label>
                                <input type="text" class="form-control" placeholder="Apartment, suite, unit..." name="address_line2" id="edit_address_line2">
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">City <span class="required-mark">*</span></label>
                                <input type="text" class="form-control" placeholder="e.g. San Francisco" required name="city" id="edit_city">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">State / Province</label>
                                <input type="text" class="form-control" placeholder="e.g. California" name="state" id="edit_state">
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">Country <span class="required-mark">*</span></label>
                                <input type="text" class="form-control" placeholder="e.g. United States" required name="country" id="edit_country">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Postal Code</label>
                                <input type="text" class="form-control" placeholder="e.g. 94103" name="postal_code" id="edit_postal_code">
                            </div>
                        </div>
                        <div class="form-actions form-actions-custom" style="justify-content:flex-end;">
                            <div class="form-btn-group">
                                <button type="button" class="btn btn-form-back" onclick="editGoToStep(1)">Back</button>
                                <button type="button" class="btn btn-form-continue" onclick="editGoToStep(3)">Continue</button>
                            </div>
                        </div>
                    </div>

                    {{-- ===== STEP 3: Contact & Contract ===== --}}
                    <div id="edit-wizard-step-3" class="wizard-step-container" style="display:none;">
                        <div class="mb-4">
                            <h2 class="wizard-step-title">Contact Information</h2>
                            <p class="wizard-step-subtitle">Update contact details for this partner.</p>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Contact Person</label>
                                <input type="text" class="form-control" placeholder="Primary contact name" name="contact_name" id="edit_contact_name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Contact email address" name="contact_email" id="edit_contact_email">
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" placeholder="Enter contact phone number" name="contact_phone" id="edit_contact_phone">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Country Code</label>
                                <input type="text" class="form-control" placeholder="MA +212" name="country_code" id="edit_country_code">
                            </div>
                        </div>
                        <div class="mb-4 mt-5">
                            <h2 class="fs-5 fw-bold text-dark mb-1">Contract Information</h2>
                            <p class="text-secondary fs-6">Update the contract period for this partnership.</p>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Contract Start Date <span class="required-mark">*</span></label>
                                <input type="text" class="form-control" placeholder="07/07/2026" required name="contract_start" id="edit_contract_start">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contract End Date</label>
                                <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="contract_end" id="edit_contract_end">
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Contract File</label>
                                <input type="file" class="form-control" name="contract_file" accept=".pdf,.doc,.docx">
                                <div class="form-text">Upload new contract file to replace existing (optional).</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contract Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Add any contract notes..." name="contract_notes" id="edit_contract_notes"></textarea>
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <label class="form-label">Update Logo</label>
                                <input type="file" class="form-control" name="logo" accept="image/*">
                                <div class="form-text">Upload new logo to replace existing (optional).</div>
                            </div>
                        </div>
                        <div class="form-actions form-actions-custom">
                            <div class="d-flex align-items-center gap-3 text-muted form-notice-box">
                                <i class="bi bi-exclamation-circle text-warning fs-5"></i>
                                <small class="form-notice-text">Saving will update the partner's data immediately.</small>
                            </div>
                            <div class="form-btn-group">
                                <button type="button" class="btn btn-form-back" onclick="editGoToStep(2)">Back</button>
                                <button type="button" class="btn btn-form-continue" id="savePartnerBtn">Save Changes</button>
                            </div>
                        </div>
                    </div>

                    {{-- ===== STEP 4: Success ===== --}}
                    <div id="edit-wizard-step-4" style="display:none;">
                        <div style="display:flex;width:100%;padding:48px;flex-direction:column;align-items:flex-start;gap:40px;border-radius:16px;border:1px solid #E2E8F0;background:#FFF;box-shadow:0 8px 24px 0 #DAEEFF;box-sizing:border-box;">
                            <div style="display:flex;flex-direction:column;align-items:center;gap:16px;align-self:stretch;">
                                <div style="display:flex;width:72px;height:72px;flex-direction:column;justify-content:center;align-items:center;border-radius:36px;background:#E8FBF6;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                        <path d="M29.9988 9L13.5005 25.4988L6.00122 17.9993" pathLength="1" stroke="#26C6A0" stroke-width="2" stroke-linecap="round" stroke-dasharray="1 1"/>
                                    </svg>
                                </div>
                                <div style="display:flex;flex-direction:column;align-items:center;gap:4px;">
                                    <h2 style="color:#0F172A;text-align:center;font-family:Inter,sans-serif;font-size:32px;font-weight:800;margin:0;">Partner Successfully Updated</h2>
                                    <p style="color:#26C6A0;text-align:center;font-family:Inter,sans-serif;font-size:16px;font-weight:500;margin:0;">&#10003; Changes saved to Partner Management</p>
                                </div>
                            </div>
                            <div class="add-partner-management-footer">
                                <span class="add-partner-management-date">
                                    Updated on <span id="edit_partner_updated_at">—</span>
                                </span>
                                <div class="add-partner-management-actions">
                                    <button type="button" class="btn-add-partner-management-partners" onclick="hideEditDisplay(event); setTimeout(function(){ location.reload(); }, 200);">Partners</button>
                                    <button type="button" class="btn-add-partner-management-add" onclick="hideEditDisplay(event); setTimeout(function(){ location.reload(); }, 200);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 8C2 6.4087 2.63214 4.88258 3.75736 3.75736C4.88258 2.63214 6.4087 2 8 2C9.67737 2.00631 11.2874 2.66082 12.4933 3.82667L14 5.33333M10.6667 5.33333H14V2M14 8C14 9.5913 13.3679 11.1174 12.2426 12.2426C11.1174 13.3679 9.5913 14 8 14C6.32263 13.9937 4.71265 13.3392 3.50667 12.1733L2 10.6667M2 14V10.6667H5.33333" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
                                        Refresh Page
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function editGoToStep(step) {
        [1,2,3,4].forEach(function(s){
            document.getElementById('edit-wizard-step-' + s).style.display = 'none';
        });
        document.getElementById('edit-wizard-step-' + step).style.display = 'block';

        if (step === 4) {
            document.getElementById('edit-stepper-header-container').style.display = 'none';
            document.getElementById('edit-stepper-hr').style.display = 'none';
        } else {
            document.getElementById('edit-stepper-header-container').style.display = 'flex';
            document.getElementById('edit-stepper-hr').style.display = 'block';
            for (var i = 1; i <= 3; i++) {
                var h = document.getElementById('edit-step-header-' + i);
                h.classList.remove('active','completed');
                h.querySelector('.step-text').classList.add('inactive');
                h.querySelector('.step-circle').innerHTML = i;
            }
            for (var i = 1; i < step; i++) {
                var h = document.getElementById('edit-step-header-' + i);
                h.classList.add('completed');
                h.querySelector('.step-text').classList.remove('inactive');
                h.querySelector('.step-circle').innerHTML = '<i class="bi bi-check-lg"></i>';
            }
            var current = document.getElementById('edit-step-header-' + step);
            current.classList.add('active');
            current.querySelector('.step-text').classList.remove('inactive');
        }
    }

    document.getElementById('savePartnerBtn').addEventListener('click', function(e) {
        e.preventDefault();
        var partnerId = document.getElementById('edit_partner_id').value;
        if (!partnerId) { alert('Partner ID missing.'); return; }

        var form = document.getElementById('editPartnerForm');
        var formData = new FormData(form);
        formData.set('_method', 'PUT');

        var csrfToken = document.querySelector('#editPartnerForm input[name="_token"]').value;

        fetch('/partners/' + partnerId, {
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': csrfToken, 'Accept': 'application/json' },
            body: formData
        })
        .then(function(r){ return r.json(); })
        .then(function(data){
            if (data.success) {
                var now = new Date();
                var opts = { month:'long', day:'numeric', year:'numeric', hour:'numeric', minute:'2-digit', hour12:true };
                document.getElementById('edit_partner_updated_at').innerText = now.toLocaleString('en-US', opts);
                editGoToStep(4);
            } else {
                alert('Error saving changes. Please check your inputs and try again.');
            }
        })
        .catch(function(err){ console.error(err); alert('Network error. Please try again.'); });
    });
</script>
{{-- End Edit Partner Form --}}
