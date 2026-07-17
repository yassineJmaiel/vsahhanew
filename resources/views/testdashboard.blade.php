@extends('theme')

@section('title', 'General Management Dashboard - VSahha')

@section('content')
  <div class="container-fluid px-0 py-3">
    <!-- Top Page Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 pb-3 border-bottom gap-3">
      <div>
        <h1 class="h3 fw-bold text-dark mb-1" style="font-family: 'Inter', sans-serif; font-weight: 800; letter-spacing: -0.5px;">General Management Dashboard</h1>
        <p class="text-secondary mb-0" style="font-size: 0.9rem; font-weight: 400;">Global overview of partners, policies, claims, and medical network</p>
      </div>
      <div class="d-flex align-items-center gap-2">
        <!-- Search Input in Header -->
        <div class="search-wrapper position-relative d-none d-md-block">
          <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted" style="left: 14px;"></i>
          <input type="text" class="form-control rounded-pill border-light-subtle bg-white shadow-sm" placeholder="Search metrics..." style="padding-left: 36px; width: 260px; font-size: 0.85rem; height: 40px;">
        </div>
      </div>
    </div>

    <!-- Key Metrics Row (Matching mockup colors exactly) -->
    <div class="row g-4 mb-4">
      <!-- Total Partners -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="border-radius: 20px; background: linear-gradient(112deg, #1E3A8A 0%, #3B82F6 100%); box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.05);">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4" style="width: 56px; height: 56px; background-color: rgba(255, 255, 255, 0.15);">
              <i class="bi bi-building fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block" style="font-size: 0.75rem; letter-spacing: 1px; color: rgba(255, 255, 255, 0.7);">Total Partners</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white" style="font-size: 1.85rem; letter-spacing: -1px;">14</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Active Policies -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="border-radius: 20px; background: linear-gradient(112deg, #047857 0%, #10B981 100%); box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.05);">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4" style="width: 56px; height: 56px; background-color: rgba(255, 255, 255, 0.15);">
              <i class="bi bi-shield-check fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block" style="font-size: 0.75rem; letter-spacing: 1px; color: rgba(255, 255, 255, 0.7);">Active Policies</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white" style="font-size: 1.85rem; letter-spacing: -1px;">728</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Total Claims (YTD) -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="border-radius: 20px; background: linear-gradient(112deg, #B45309 0%, #F59E0B 100%); box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.05);">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4" style="width: 56px; height: 56px; background-color: rgba(255, 255, 255, 0.15);">
              <i class="bi bi-file-earmark-medical fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block" style="font-size: 0.75rem; letter-spacing: 1px; color: rgba(255, 255, 255, 0.7);">Total Claims (YTD)</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white" style="font-size: 1.85rem; letter-spacing: -1px;">5,774</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Online Consultations -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="border-radius: 20px; background: linear-gradient(112deg, #5B21B6 0%, #8B5CF6 100%); box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.05);">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4" style="width: 56px; height: 56px; background-color: rgba(255, 255, 255, 0.15);">
              <i class="bi bi-chat-left-heart fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block" style="font-size: 0.75rem; letter-spacing: 1px; color: rgba(255, 255, 255, 0.7);">Online Consultations</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white" style="font-size: 1.85rem; letter-spacing: -1px;">242</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mid section: Charts and Breakdowns -->
    <div class="row g-4 mb-4">
      <!-- Claims Breakdown -->
      <div class="col-12 col-lg-6">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Claims Breakdown</h5>
                <p class="text-muted mb-0" style="font-size: 0.85rem;">Performance metrics by claim status</p>
              </div>
              <span class="p-2 bg-light rounded-circle text-muted" style="line-height: 1;"><i class="bi bi-sliders"></i></span>
            </div>

            <!-- Numerical grid summary -->
            <div class="row g-3 mb-4">
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Pended</span>
                  <span class="h5 mb-0 fw-bold text-warning">1,204</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Approved</span>
                  <span class="h5 mb-0 fw-bold text-success">4,530</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Rejected</span>
                  <span class="h5 mb-0 fw-bold text-danger">312</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Paid</span>
                  <span class="h5 mb-0 fw-bold text-primary">4,015</span>
                </div>
              </div>
            </div>

            <!-- Progress status bars -->
            <div class="space-y-3">
              <!-- Pended -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium" style="font-size: 0.85rem; min-width: 90px;">Pended</span>
                <div class="progress flex-grow-1" style="height: 12px; border-radius: 20px; background: #F1F3F7; overflow: hidden;">
                  <div class="progress-bar" role="progressbar" style="width: 25%; background: #3B82F6; border-radius: 20px; height: 12px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white" style="background: #2563EB; border-radius: 12px; display: flex; width: 50px; height: 18px; padding: 2px 11.613px 2px 11.95px; justify-content: center; align-items: center; font-size: 0.72rem;">25%</span>
              </div>

              <!-- Approved -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium" style="font-size: 0.85rem; min-width: 90px;">Approved</span>
                <div class="progress flex-grow-1" style="height: 12px; border-radius: 20px; background: #F1F3F7; overflow: hidden;">
                  <div class="progress-bar" role="progressbar" style="width: 75%; background: #00A878; border-radius: 20px; height: 12px;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white" style="background: #059669; border-radius: 12px; display: flex; width: 50px; height: 18px; padding: 2px 11.613px 2px 11.95px; justify-content: center; align-items: center; font-size: 0.72rem;">75%</span>
              </div>

              <!-- Rejected -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium" style="font-size: 0.85rem; min-width: 90px;">Rejected</span>
                <div class="progress flex-grow-1" style="height: 12px; border-radius: 20px; background: #F1F3F7; overflow: hidden;">
                  <div class="progress-bar" role="progressbar" style="width: 5%; background: #EF4444; border-radius: 20px; height: 12px;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white" style="background: #DC2626; border-radius: 12px; display: flex; width: 50px; height: 18px; padding: 2px 11.613px 2px 11.95px; justify-content: center; align-items: center; font-size: 0.72rem;">5%</span>
              </div>

              <!-- Paid to Zero -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium" style="font-size: 0.85rem; min-width: 90px;">Paid to Zero</span>
                <div class="progress flex-grow-1" style="height: 12px; border-radius: 20px; background: #F1F3F7; overflow: hidden;">
                  <div class="progress-bar" role="progressbar" style="width: 12%; background: #F59E0B; border-radius: 20px; height: 12px;" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white" style="background: #D97706; border-radius: 12px; display: flex; width: 50px; height: 18px; padding: 2px 11.613px 2px 11.95px; justify-content: center; align-items: center; font-size: 0.72rem;">12%</span>
              </div>

              <!-- Paid -->
              <div class="mb-2 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium" style="font-size: 0.85rem; min-width: 90px;">Paid</span>
                <div class="progress flex-grow-1" style="height: 12px; border-radius: 20px; background: #F1F3F7; overflow: hidden;">
                  <div class="progress-bar" role="progressbar" style="width: 68%; background: #1E3A8A; border-radius: 20px; height: 12px;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white" style="background: #1E3A8A; border-radius: 12px; display: flex; width: 50px; height: 18px; padding: 2px 11.613px 2px 11.95px; justify-content: center; align-items: center; font-size: 0.72rem;">68%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Monthly Claims Trend Graph -->
      <div class="col-12 col-lg-6">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Tendance Mensuelle des Sinistres</h5>
                <p class="text-muted mb-0" style="font-size: 0.85rem;">Evolution mensuelle des sinistres approuvés et rejetés (Jan–Jun)</p>
              </div>
            </div>

            <div style="height: 290px; position: relative;">
              <canvas id="claimsTrendChart"></canvas>
              <!-- Red gradient SVG overlay (Figma design) -->
              <div style="position: absolute; bottom: 30px; left: 0; width: 100%; height: 220px; pointer-events: none; overflow: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="220" viewBox="0 0 930 220" fill="none" preserveAspectRatio="none">
                  <path d="M155 176C77 176 77 202.4 0 202.4V220H930V0C855 0 855 35.2 777 35.2C699 35.2 699 70.4 621 70.4C544 70.4 544 105.6 466 105.6C388 105.6 388 140.8 310 140.8C233 140.8 233 176 155 176Z" fill="url(#paint0_linear_323_23)"/>
                  <defs>
                    <linearGradient id="paint0_linear_323_23" x1="465" y1="0" x2="465" y2="220" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#EF4444" stop-opacity="0.2"/>
                      <stop offset="1" stop-color="#EF4444" stop-opacity="0"/>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Medical Network, Live Consultations, Notifications -->
    <div class="row g-4 mb-4">
      <!-- Medical Network Ring Chart -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4 d-flex flex-column">

            <!-- Header with border bottom -->
            <div class="pb-3 mb-3" style="border-bottom: 1px solid #EEF0F4;">
              <h5 class="fw-bold text-dark mb-1">Medical Network</h5>
              <p class="text-muted mb-0" style="font-size: 0.85rem;">Contracting ratio overview</p>
            </div>

            <!-- Donut chart centered -->
            <div class="d-flex justify-content-center my-3">
              <div style="width: 150px; height: 150px; position: relative;">
                <canvas id="networkContractingChart"></canvas>
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                  <span class="fs-4 fw-bold text-dark">85%</span>
                  <span class="d-block text-secondary" style="font-size: 0.65rem; font-weight: 500;">Contracted</span>
                </div>
              </div>
            </div>

            <!-- Stats rows -->
            <div class="mt-auto d-flex flex-column gap-2">
              <!-- Contracted -->
              <div class="d-flex align-items-center justify-content-between px-3 py-2" style="border-radius: 12px; background: #F1F3F7;">
                <div class="d-flex align-items-center gap-2">
                  <span style="width: 10px; height: 10px; border-radius: 50%; background: #10B981; display: inline-block;"></span>
                  <span class="text-dark fw-medium" style="font-size: 0.85rem;">Contracted</span>
                </div>
                <span class="fw-bold text-dark">425</span>
              </div>
              <!-- Non-Contracted -->
              <div class="d-flex align-items-center justify-content-between px-3 py-2" style="border-radius: 12px; background: #F1F3F7;">
                <div class="d-flex align-items-center gap-2">
                  <span style="width: 10px; height: 10px; border-radius: 50%; background: #F59E0B; display: inline-block;"></span>
                  <span class="text-dark fw-medium" style="font-size: 0.85rem;">Non-Contracted</span>
                </div>
                <span class="fw-bold text-dark">75</span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Live Consultations Feed -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4">
            <h5 class="fw-bold text-dark mb-1">Flux de Consultations</h5>
            <p class="text-muted mb-3" style="font-size: 0.85rem;">Activité téléconsultation en direct</p>

            <div class="position-relative ps-4 ms-2">
              <!-- Vertical Line -->
              <div style="position: absolute; left: 7px; top: 10px; bottom: 20px; width: 2px; background: #EEF0F4;"></div>

              <!-- Timeline Item 1 -->
              <div class="mb-4 position-relative">
                <span class="position-absolute rounded-circle" style="width: 14px; height: 14px; background: #2196F3; border: 3px solid #FFF; left: -23px; top: 3px; box-shadow: 0 0 0 1px #EEF0F4; z-index: 2;"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark" style="font-size: 0.85rem;">Consultation Terminée</h6>
                  <span class="text-secondary" style="font-size: 0.65rem; border-radius: 10px; background: #F8FAFB; font-weight: 500; display: inline-flex; width: 66.33px; height: 18px; padding: 2px 7.646px 2px 8px; justify-content: center; align-items: center;">Il y a 10m</span>
                </div>
                <p class="text-secondary mb-1" style="font-size: 0.8rem; line-height: 1.4;">Le rapport médical a été généré et envoyé au patient.</p>
                <div class="p-2 mt-2 d-flex align-items-center gap-2" style="border-radius: 10px; border: 1px solid #EEF0F4; background: #F8FAFB;">
                  <i class="bi bi-person text-secondary" style="font-size: 0.85rem;"></i>
                  <span class="text-secondary" style="font-size: 0.75rem;">Patient: ******** ******* — Dr. *******</span>
                </div>
              </div>

              <!-- Timeline Item 2 -->
              <div class="mb-4 position-relative">
                <span class="position-absolute rounded-circle" style="width: 14px; height: 14px; background: #10B981; border: 3px solid #FFF; left: -23px; top: 3px; box-shadow: 0 0 0 1px #EEF0F4; z-index: 2;"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark" style="font-size: 0.85rem;">Session Démarrée</h6>
                  <span class="text-secondary" style="font-size: 0.65rem; border-radius: 10px; background: #F8FAFB; font-weight: 500; display: inline-flex; width: 66.33px; height: 18px; padding: 2px 7.646px 2px 8px; justify-content: center; align-items: center;">Il y a 25m</span>
                </div>
                <p class="text-secondary mb-1" style="font-size: 0.8rem; line-height: 1.4;">Connexion vidéo établie avec succès.</p>
                <div class="p-2 mt-2 d-flex align-items-center gap-2" style="border-radius: 10px; border: 1px solid #EEF0F4; background: #F8FAFB;">
                  <i class="bi bi-person text-secondary" style="font-size: 0.85rem;"></i>
                  <span class="text-secondary" style="font-size: 0.75rem;">Patient: *********-*******</span>
                </div>
              </div>

              <!-- Timeline Item 3 -->
              <div class="position-relative">
                <span class="position-absolute rounded-circle" style="width: 14px; height: 14px; background: #F59E0B; border: 3px solid #FFF; left: -23px; top: 3px; box-shadow: 0 0 0 1px #EEF0F4; z-index: 2;"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark" style="font-size: 0.85rem;">Rendez-vous Confirmé</h6>
                  <span class="text-secondary" style="font-size: 0.65rem; border-radius: 10px; background: #F8FAFB; font-weight: 500; display: inline-flex; width: 66.33px; height: 18px; padding: 2px 7.646px 2px 8px; justify-content: center; align-items: center;">Il y a 1h</span>
                </div>
                <p class="text-secondary mb-0" style="font-size: 0.8rem; line-height: 1.4;">Planifié pour aujourd'hui à 14:00 (CET).</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Notifications Section -->
      <div class="col-12 col-lg-4">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-dark mb-0 d-flex align-items-center" style="font-size: 1.1rem;"><i class="bi bi-bell text-primary me-2"></i>Notifications</h5>
              <span class="badge rounded-pill fw-semibold" style="font-size: 0.75rem; padding: 4px 10px; background: #F1F3F7; color: #64748B;">3 new</span>
            </div>

            <div class="d-flex flex-column gap-3">
              <!-- Notif 1 -->
              <div class="d-flex align-items-start gap-3 pb-3 border-bottom">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 36px; height: 36px; min-width: 36px;">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-semibold" style="font-size: 0.85rem; line-height: 1.4;">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary" style="font-size: 0.75rem;"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:22:37 AM</div>
                </div>
                <span class="badge rounded-pill fw-bold" style="font-size: 0.65rem; background: #EFF6FF; color: #2563EB; padding: 4px 8px; border: none; text-transform: uppercase;">UPDATED</span>
              </div>

              <!-- Notif 2 -->
              <div class="d-flex align-items-start gap-3 pb-3 border-bottom">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 36px; height: 36px; min-width: 36px;">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-semibold" style="font-size: 0.85rem; line-height: 1.4;">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary" style="font-size: 0.75rem;"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:21:40 AM</div>
                </div>
                <span class="badge rounded-pill fw-bold" style="font-size: 0.65rem; background: #EFF6FF; color: #2563EB; padding: 4px 8px; border: none; text-transform: uppercase;">UPDATED</span>
              </div>

              <!-- Notif 3 -->
              <div class="d-flex align-items-start gap-3">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 36px; height: 36px; min-width: 36px;">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-semibold" style="font-size: 0.85rem; line-height: 1.4;">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary" style="font-size: 0.75rem;"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:20:40 AM</div>
                </div>
                <span class="badge rounded-pill fw-bold" style="font-size: 0.65rem; background: #EFF6FF; color: #2563EB; padding: 4px 8px; border: none; text-transform: uppercase;">UPDATED</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom section: Quick Actions, Expiration Timeline, Compliance -->
    <div class="row g-4">
      <!-- Quick Actions & Management Links -->
      <div class="col-12 col-lg-6">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4 d-flex flex-column gap-3">
            
            <!-- Floating Gradient Header -->
            <div style="border-radius: 14px; background: linear-gradient(90deg, #0EA5E9 0%, #14B8A6 100%); box-shadow: 0 4px 10px 0 rgba(19, 181, 177, 0.35); display: flex; padding: 16px 18px; flex-direction: column; align-items: flex-start; gap: 6px; align-self: stretch;">
              <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.2); border-radius: 8px;">
                  <i class="bi bi-plus-circle text-white" style="font-size: 1.1rem;"></i>
                </div>
                <h5 class="fw-bold text-white mb-0" style="font-size: 1.1rem; letter-spacing: 0.3px;">Quick Actions</h5>
              </div>
              <p class="mb-0 text-white-50" style="font-size: 0.8rem; font-weight: 400;">Create new items and policies</p>
            </div>

            <!-- Action buttons/cards -->
            <div class="row g-3">
              <!-- Create New Policy -->
              <div class="col-4">
                <div class="d-flex flex-column align-items-start" style="border-radius: 16px; border: 1px solid #E5E7EB; background: #FFF; box-shadow: 0 14px 28px -12px rgba(0, 0, 0, 0.07), 0 2px 8px 0 rgba(0, 0, 0, 0.04); cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; padding: 32px 16px 24px 16px; gap: 16px;">
                  <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: #EFF6FF; border-radius: 12px;">
                    <i class="bi bi-file-earmark-plus text-primary fs-5"></i>
                  </div>
                  <span class="fw-bold text-dark" style="font-size: 0.85rem; color: #1E3A8A !important; line-height: 1.2;">Create New Policy</span>
                </div>
              </div>

              <!-- Create New TOB -->
              <div class="col-4">
                <div class="d-flex flex-column align-items-start" style="border-radius: 16px; border: 1px solid #E5E7EB; background: #FFF; box-shadow: 0 14px 28px -12px rgba(0, 0, 0, 0.07), 0 2px 8px 0 rgba(0, 0, 0, 0.04); cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; padding: 32px 16px 24px 16px; gap: 16px;">
                  <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: #ECFDF5; border-radius: 12px;">
                    <i class="bi bi-clipboard-check text-success fs-5"></i>
                  </div>
                  <span class="fw-bold text-success" style="font-size: 0.85rem; color: #059669 !important; line-height: 1.2;">Create New TOB</span>
                </div>
              </div>

              <!-- Add New Member -->
              <div class="col-4">
                <div class="d-flex flex-column align-items-start" style="border-radius: 16px; border: 1px solid #E5E7EB; background: #FFF; box-shadow: 0 14px 28px -12px rgba(0, 0, 0, 0.07), 0 2px 8px 0 rgba(0, 0, 0, 0.04); cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; padding: 32px 16px 24px 16px; gap: 16px;">
                  <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(139, 92, 246, 0.08); border-radius: 12px;">
                    <i class="bi bi-person-plus text-purple fs-5" style="color: #7C3AED;"></i>
                  </div>
                  <span class="fw-bold" style="font-size: 0.85rem; color: #7C3AED !important; line-height: 1.2;">Add New Member</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Policy Management Layout -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4 d-flex flex-column gap-3">
            
            <!-- Orange Header -->
            <div style="border-radius: 14px; background: linear-gradient(90deg, #F59E0B 0%, #F97316 100%); display: flex; padding: 16px 18px; flex-direction: column; align-items: flex-start; gap: 6px; align-self: stretch;">
              <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.2); border-radius: 8px;">
                  <i class="bi bi-file-earmark-text text-white" style="font-size: 1.1rem;"></i>
                </div>
                <h5 class="fw-bold text-white mb-0" style="font-size: 1.1rem; letter-spacing: 0.3px;">Policy Management</h5>
              </div>
              <p class="mb-0 text-white-50" style="font-size: 0.8rem; font-weight: 400;">Quick access to common tasks</p>
            </div>

            <!-- Policy management links -->
            <div class="d-flex flex-column gap-2" style="font-size: 0.9rem;">
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #FED7AA; background: #FFF7ED; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #F97316; border-radius: 8px;">
                  <i class="bi bi-files text-white fs-6"></i>
                </div>
                <span>All Policies</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #FED7AA; background: #FFF7ED; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #F97316; border-radius: 8px;">
                  <i class="bi bi-table text-white fs-6"></i>
                </div>
                <span>All Benefit Tables</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #FED7AA; background: #FFF7ED; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #F97316; border-radius: 8px;">
                  <i class="bi bi-arrow-repeat text-white fs-6"></i>
                </div>
                <span>View Renewals</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #FED7AA; background: #FFF7ED; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #F97316; border-radius: 8px;">
                  <i class="bi bi-people text-white fs-6"></i>
                </div>
                <span>Manage Members</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Resources Layout -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <div class="card-body p-4 d-flex flex-column gap-3">
            
            <!-- Green Header -->
            <div style="border-radius: 14px; background: linear-gradient(90deg, #10B981 0%, #059669 100%); display: flex; padding: 16px 18px; flex-direction: column; align-items: flex-start; gap: 6px; align-self: stretch;">
              <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(255, 255, 255, 0.2); border-radius: 8px;">
                  <i class="bi bi-folder text-white" style="font-size: 1.1rem;"></i>
                </div>
                <h5 class="fw-bold text-white mb-0" style="font-size: 1.1rem; letter-spacing: 0.3px;">Resources</h5>
              </div>
              <p class="mb-0 text-white-50" style="font-size: 0.8rem; font-weight: 400;">Access important documents and tools</p>
            </div>

            <!-- Resources links -->
            <div class="d-flex flex-column gap-2" style="font-size: 0.9rem;">
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #A7F3D0; background: #ECFDF5; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #10B981; border-radius: 8px;">
                  <i class="bi bi-file-earmark-text text-white fs-6"></i>
                </div>
                <span>Policy Documents</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #A7F3D0; background: #ECFDF5; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #10B981; border-radius: 8px;">
                  <i class="bi bi-layout-text-sidebar text-white fs-6"></i>
                </div>
                <span>TOB Templates</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #A7F3D0; background: #ECFDF5; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #10B981; border-radius: 8px;">
                  <i class="bi bi-shield-check text-white fs-6"></i>
                </div>
                <span>Network Management</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2" style="border-radius: 12px; border: 1px solid #A7F3D0; background: #ECFDF5; transition: background 0.2s;">
                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background: #10B981; border-radius: 8px;">
                  <i class="bi bi-bar-chart text-white fs-6"></i>
                </div>
                <span>Coverage Reports</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Timeline & Compliance row -->
    <div class="row g-4 mt-1">
      <!-- Expiration Timeline -->
      <div class="col-12 col-lg-6">
        <div class="card h-100 overflow-hidden position-relative" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <!-- Decorative blue background corner shape -->
          <div style="position: absolute; right: -65px; top: -83px; width: 220px; height: 220px; pointer-events: none; z-index: 1;">
            <svg xmlns="http://www.w3.org/2000/svg" width="220" height="220" viewBox="0 0 220 220" fill="none">
              <circle opacity="0.55" cx="110" cy="110" r="110" fill="#DBEAFE"/>
            </svg>
          </div>
          
          <div class="card-body p-4 position-relative" style="z-index: 2;">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Expiration Timeline</h5>
                <p class="text-muted mb-0" style="font-size: 0.85rem;">Upcoming policy expirations</p>
              </div>
              <span class="badge fw-medium rounded-pill" style="font-size: 0.75rem; padding: 4px 10px; background: rgba(139, 92, 246, 0.08); color: #7C3AED;">3 items</span>
            </div>

            <div class="d-flex flex-column gap-3">
              <!-- CORP-2023-01 -->
              <div class="d-flex w-100 align-items-center" style="padding: 14px; gap: 14px; border-radius: 16px; border: 1px solid #E5E7EB; background: #F9FAFB;">
                <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: #EEF2FF; border-radius: 12px; min-width: 44px;">
                  <i class="bi bi-briefcase text-primary fs-5"></i>
                </div>
                <div class="flex-grow-1 d-flex flex-column gap-1">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">CORP-2023-01</h6>
                      <span class="text-secondary" style="font-size: 0.8rem;">Acme Corporation</span>
                    </div>
                    <span class="badge d-flex align-items-center gap-1" style="border-radius: 20px; background: #FEF3C7; color: #D97706; padding: 6px 12px; font-size: 0.75rem; font-weight: 600; border: 1px solid #FDE68A;">
                      <i class="bi bi-exclamation-triangle-fill"></i> 7 days
                    </span>
                  </div>
                  
                  <div class="w-100 mt-2">
                    <div class="d-flex align-items-center gap-2">
                      <div class="progress flex-grow-1" style="height: 6px; border-radius: 20px; background: #E2E8F0; overflow: hidden;">
                        <div class="progress-bar" role="progressbar" style="width: 30%; background: #F59E0B; border-radius: 20px; height: 6px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="fw-bold" style="font-size: 0.75rem; color: #64748B;">7 days</span>
                    </div>
                    <div style="font-size: 0.75rem; color: #94A3B8; margin-top: 4px;">
                      Expires in 7 days
                    </div>
                  </div>
                </div>
              </div>

              <!-- GRP-2023-15 -->
              <div class="d-flex w-100 align-items-center" style="padding: 14px; gap: 14px; border-radius: 16px; border: 1px solid #E5E7EB; background: #F9FAFB;">
                <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: #ECFDF5; border-radius: 12px; min-width: 44px;">
                  <i class="bi bi-people text-success fs-5"></i>
                </div>
                <div class="flex-grow-1 d-flex flex-column gap-1">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">GRP-2023-15</h6>
                      <span class="text-secondary" style="font-size: 0.8rem;">Executive Benefits</span>
                    </div>
                    <span class="badge d-flex align-items-center gap-1" style="border-radius: 20px; background: #D1FAE5; color: #10B981; padding: 6px 12px; font-size: 0.75rem; font-weight: 600; border: 1px solid #A7F3D0;">
                      <i class="bi bi-check-circle-fill"></i> 15 days
                    </span>
                  </div>
                  
                  <div class="w-100 mt-2">
                    <div class="d-flex align-items-center gap-2">
                      <div class="progress flex-grow-1" style="height: 6px; border-radius: 20px; background: #E2E8F0; overflow: hidden;">
                        <div class="progress-bar" role="progressbar" style="width: 50%; background: #10B981; border-radius: 20px; height: 6px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="fw-bold" style="font-size: 0.75rem; color: #64748B;">15 days</span>
                    </div>
                    <div style="font-size: 0.75rem; color: #94A3B8; margin-top: 4px;">
                      Expires in 15 days
                    </div>
                  </div>
                </div>
              </div>

              <!-- IND-2023-42 -->
              <div class="d-flex w-100 align-items-center" style="padding: 14px; gap: 14px; border-radius: 16px; border: 1px solid #E5E7EB; background: #F9FAFB;">
                <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: #F3F4F6; border-radius: 12px; min-width: 44px;">
                  <i class="bi bi-person text-secondary fs-5"></i>
                </div>
                <div class="flex-grow-1 d-flex flex-column gap-1">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">IND-2023-42</h6>
                      <span class="text-secondary" style="font-size: 0.8rem;">Premier Individual Plan</span>
                    </div>
                    <span class="badge d-flex align-items-center gap-1" style="border-radius: 20px; background: #F3F4F6; color: #64748B; padding: 6px 12px; font-size: 0.75rem; font-weight: 600; border: 1px solid #E5E7EB;">
                      <i class="bi bi-calendar3"></i> 30 days
                    </span>
                  </div>
                  
                  <div class="w-100 mt-2">
                    <div class="d-flex align-items-center gap-2">
                      <div class="progress flex-grow-1" style="height: 6px; border-radius: 20px; background: #E2E8F0; overflow: hidden;">
                        <div class="progress-bar" role="progressbar" style="width: 60%; background: #10B981; border-radius: 20px; height: 6px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="fw-bold" style="font-size: 0.75rem; color: #64748B;">30 days</span>
                    </div>
                    <div style="font-size: 0.75rem; color: #94A3B8; margin-top: 4px;">
                      Expires in 30 days
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Compliance Status -->
      <div class="col-12 col-lg-6">
        <div class="card h-100 overflow-hidden position-relative" style="border-radius: 20px; border: 1px solid #EEF0F4; background: #FFF; box-shadow: 0 4px 24px 0 rgba(11, 79, 138, 0.08);">
          <!-- Decorative green background corner shape -->
          <div style="position: absolute; right: -110px; bottom: -90px; width: 240px; height: 240px; pointer-events: none; z-index: 1;">
            <svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 240 240" fill="none">
              <circle opacity="0.55" cx="120" cy="120" r="120" fill="#ECFDF5"/>
            </svg>
          </div>

          <div class="card-body p-4 position-relative" style="z-index: 2;">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Compliance Status</h5>
                <p class="text-muted mb-0" style="font-size: 0.85rem;">Regulatory compliance overview</p>
              </div>
              <span class="badge fw-semibold d-flex align-items-center gap-1" style="font-size: 0.75rem; padding: 6px 12px; background: #ECFDF5; color: #059669; border-radius: 20px; border: 1px solid #A7F3D0;">
                <i class="bi bi-shield-check"></i> Overall
              </span>
            </div>

            <div class="d-flex flex-column gap-3">
              <!-- Documents -->
              <div class="d-flex align-items-center w-100" style="padding: 14px; gap: 14px; border-radius: 16px; border: 1px solid #E5E7EB; background: #F9FAFB;">
                <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle" style="width: 40px; height: 40px; min-width: 40px;">
                  <i class="bi bi-file-earmark-check fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark" style="font-size: 0.85rem;">Document Compliance</span>
                    <span class="badge fw-semibold" style="color: #059669; font-size: 0.65rem; padding: 4px 8px; border-radius: 999px; border: 1px solid #A7F3D0; background: #ECFDF5;">Complete</span>
                  </div>
                  <span class="text-secondary d-block" style="font-size: 0.75rem;">All required documents are up to date.</span>
                </div>
                <div class="position-relative d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px;">
                  <svg width="44" height="44" viewBox="0 0 44 44" style="transform: rotate(-90deg);">
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#E5E7EB" stroke-width="4"></circle>
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#10B981" stroke-width="4" stroke-dasharray="113.1" stroke-dashoffset="0" stroke-linecap="round"></circle>
                  </svg>
                  <span class="position-absolute fw-bold text-dark" style="font-size: 0.65rem;">100%</span>
                </div>
              </div>

              <!-- Regulatory -->
              <div class="d-flex align-items-center w-100" style="padding: 14px; gap: 14px; border-radius: 16px; border: 1px solid #E5E7EB; background: #F9FAFB;">
                <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle" style="width: 40px; height: 40px; min-width: 40px;">
                  <i class="bi bi-arrow-repeat fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark" style="font-size: 0.85rem;">Regulatory Updates</span>
                    <span class="badge fw-semibold" style="color: #059669; font-size: 0.65rem; padding: 4px 8px; border-radius: 999px; border: 1px solid #A7F3D0; background: #ECFDF5;">Up to date</span>
                  </div>
                  <span class="text-secondary d-block" style="font-size: 0.75rem;">Last synced 2 hours ago.</span>
                </div>
                <div class="position-relative d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px;">
                  <svg width="44" height="44" viewBox="0 0 44 44" style="transform: rotate(-90deg);">
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#E5E7EB" stroke-width="4"></circle>
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#10B981" stroke-width="4" stroke-dasharray="113.1" stroke-dashoffset="0" stroke-linecap="round"></circle>
                  </svg>
                  <span class="position-absolute fw-bold text-dark" style="font-size: 0.65rem;">100%</span>
                </div>
              </div>

              <!-- Audit -->
              <div class="d-flex align-items-center w-100" style="padding: 14px; gap: 14px; border-radius: 16px; border: 1px solid #E5E7EB; background: #F9FAFB;">
                <div class="d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded-circle" style="width: 40px; height: 40px; min-width: 40px;">
                  <i class="bi bi-clipboard-check fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark" style="font-size: 0.85rem;">Audit Requirements</span>
                    <span class="badge fw-semibold" style="color: #D97706; font-size: 0.65rem; padding: 4px 8px; border-radius: 999px; border: 1px solid #FDE68A; background: #FEF3C7;">Pending</span>
                  </div>
                  <span class="text-secondary d-block" style="font-size: 0.75rem;">2 items require review before submission.</span>
                </div>
                <div class="position-relative d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px;">
                  <svg width="44" height="44" viewBox="0 0 44 44" style="transform: rotate(-90deg);">
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#E5E7EB" stroke-width="4"></circle>
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#F59E0B" stroke-width="4" stroke-dasharray="113.1" stroke-dashoffset="28.25" stroke-linecap="round"></circle>
                  </svg>
                  <span class="position-absolute fw-bold text-dark" style="font-size: 0.65rem;">75%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Chart.js CDN for beautiful, premium graphics -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // 1. Claims Trend Chart
      const ctxTrend = document.getElementById('claimsTrendChart').getContext('2d');
      new Chart(ctxTrend, {
        type: 'line',
        data: {
          labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun'],
          datasets: [
            {
              label: 'Rejected',
              data: [5, 12, 28, 38, 48, 52],
              borderColor: '#EF4444',
              backgroundColor: function(context) {
                const chart = context.chart;
                const {ctx, chartArea} = chart;
                if (!chartArea) return 'rgba(239, 68, 68, 0.15)';
                const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
                gradient.addColorStop(0, 'rgba(239, 68, 68, 0.20)');
                gradient.addColorStop(1, 'rgba(239, 68, 68, 0.00)');
                return gradient;
              },
              fill: 'origin',
              tension: 0.4,
              borderWidth: 2.5,
              pointRadius: 4,
              pointBackgroundColor: '#EF4444',
              order: 2
            },
            {
              label: 'Approved',
              data: [10, 20, 48, 62, 75, 95],
              borderColor: '#10b981',
              backgroundColor: function(context) {
                const chart = context.chart;
                const {ctx, chartArea} = chart;
                if (!chartArea) return 'rgba(16, 185, 129, 0.15)';
                const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
                gradient.addColorStop(0, 'rgba(16, 185, 129, 0.20)');
                gradient.addColorStop(1, 'rgba(16, 185, 129, 0.00)');
                return gradient;
              },
              fill: '-1',
              tension: 0.4,
              borderWidth: 2.5,
              pointRadius: 4,
              pointBackgroundColor: '#10b981',
              order: 1
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: 'top',
              labels: {
                boxWidth: 10,
                boxHeight: 10,
                useBorderRadius: true,
                borderRadius: 3,
                font: { family: 'Inter', size: 12, weight: '500' }
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              grid: { color: '#f1f5f9' },
              ticks: { font: { family: 'Inter', size: 11 } }
            },
            x: {
              grid: { display: false },
              ticks: { font: { family: 'Inter', size: 11 } }
            }
          }
        }
      });

      // 2. Medical Network Contracting Donut Chart
      const ctxNetwork = document.getElementById('networkContractingChart').getContext('2d');
      new Chart(ctxNetwork, {
        type: 'doughnut',
        data: {
          labels: ['Contracted', 'Non-Contracted'],
          datasets: [{
            data: [425, 75],
            backgroundColor: ['#10b981', '#f59e0b'],
            borderWidth: 0
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '82%',
          plugins: {
            legend: { display: false },
            tooltip: { enabled: true }
          }
        }
      });
    });
  </script>

  <style>
    .transition-hover {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .transition-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.05) !important;
    }
    .text-orange {
      color: #ea580c !important;
    }
  </style>
@endsection
