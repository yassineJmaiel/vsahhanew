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
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="background-color: #2E3A8A;">
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
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="background-color: #047857;">
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
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="background-color: #C2410C;">
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
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover" style="background-color: #6D28D9;">
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
        <div class="card border-0 rounded-4 shadow-sm bg-white h-100">
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
                <div class="p-3 bg-light rounded-3 text-center border">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Pended</span>
                  <span class="h5 mb-0 fw-bold text-warning">1,204</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 bg-light rounded-3 text-center border">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Approved</span>
                  <span class="h5 mb-0 fw-bold text-success">4,530</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 bg-light rounded-3 text-center border">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Rejected</span>
                  <span class="h5 mb-0 fw-bold text-danger">312</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 bg-light rounded-3 text-center border">
                  <span class="d-block text-secondary mb-1" style="font-size: 0.75rem; font-weight: 500;">Paid</span>
                  <span class="h5 mb-0 fw-bold text-primary">4,015</span>
                </div>
              </div>
            </div>

            <!-- Progress status bars -->
            <div class="space-y-3">
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1" style="font-size: 0.85rem; font-weight: 500;">
                  <span class="text-dark">Pended</span>
                  <span class="text-secondary">25%</span>
                </div>
                <div class="progress" style="height: 8px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-warning rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1" style="font-size: 0.85rem; font-weight: 500;">
                  <span class="text-dark">Approved</span>
                  <span class="text-secondary">75%</span>
                </div>
                <div class="progress" style="height: 8px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-success rounded-pill" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1" style="font-size: 0.85rem; font-weight: 500;">
                  <span class="text-dark">Rejected</span>
                  <span class="text-secondary">5%</span>
                </div>
                <div class="progress" style="height: 8px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-danger rounded-pill" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1" style="font-size: 0.85rem; font-weight: 500;">
                  <span class="text-dark">Paid to Zero</span>
                  <span class="text-secondary">12%</span>
                </div>
                <div class="progress" style="height: 8px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-info rounded-pill" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-2">
                <div class="d-flex justify-content-between mb-1" style="font-size: 0.85rem; font-weight: 500;">
                  <span class="text-dark">Paid</span>
                  <span class="text-secondary">68%</span>
                </div>
                <div class="progress" style="height: 8px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Monthly Claims Trend Graph -->
      <div class="col-12 col-lg-6">
        <div class="card border-0 rounded-4 shadow-sm bg-white h-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Tendance Mensuelle des Sinistres</h5>
                <p class="text-muted mb-0" style="font-size: 0.85rem;">Evolution mensuelle des sinistres approuvés et rejetés (Jan–Jun)</p>
              </div>
            </div>

            <div style="height: 290px; position: relative;">
              <canvas id="claimsTrendChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Medical Network, Live Consultations, Notifications -->
    <div class="row g-4 mb-4">
      <!-- Medical Network Ring Chart -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 rounded-4 shadow-sm bg-white h-100">
          <div class="card-body p-4 d-flex flex-column justify-content-between">
            <div>
              <h5 class="fw-bold text-dark mb-1">Medical Network</h5>
              <p class="text-muted mb-3" style="font-size: 0.85rem;">Contracting ratio overview</p>
            </div>

            <div class="d-flex align-items-center justify-content-around my-auto py-2">
              <div style="width: 140px; height: 140px; position: relative;">
                <canvas id="networkContractingChart"></canvas>
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                  <span class="fs-4 fw-bold text-dark">85%</span>
                  <span class="d-block text-secondary" style="font-size: 0.65rem; font-weight: 500;">Contracted</span>
                </div>
              </div>
              <div>
                <div class="mb-3">
                  <span class="badge bg-primary rounded-circle p-1 me-2" style="width: 8px; height: 8px; display: inline-block;"></span>
                  <span class="text-secondary" style="font-size: 0.75rem;">Contracted</span>
                  <h6 class="mb-0 fw-bold text-dark">425 (85%)</h6>
                </div>
                <div>
                  <span class="badge bg-secondary-subtle rounded-circle p-1 me-2" style="width: 8px; height: 8px; display: inline-block; background-color: #cbd5e1 !important;"></span>
                  <span class="text-secondary" style="font-size: 0.75rem;">Non-Contracted</span>
                  <h6 class="mb-0 fw-bold text-dark">75 (15%)</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Live Consultations Feed -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 rounded-4 shadow-sm bg-white h-100">
          <div class="card-body p-4">
            <h5 class="fw-bold text-dark mb-1">Flux de Consultations</h5>
            <p class="text-muted mb-3" style="font-size: 0.85rem;">Activité téléconsultation en direct</p>

            <div class="position-relative ps-3 border-start border-2 border-primary-subtle ms-2">
              <!-- Timeline Item 1 -->
              <div class="mb-4 position-relative">
                <span class="position-absolute bg-primary rounded-circle border border-white" style="width: 12px; height: 12px; left: -20px; top: 4px;"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark" style="font-size: 0.85rem;">Consultation Terminée</h6>
                  <span class="text-secondary" style="font-size: 0.75rem;">Il y a 10m</span>
                </div>
                <p class="text-secondary mb-1" style="font-size: 0.8rem; line-height: 1.4;">Le rapport médical a été généré et envoyé au patient.</p>
                <span class="text-muted" style="font-size: 0.75rem;"><i class="bi bi-person me-1"></i>Patient: ******** ******* — Dr. *******</span>
              </div>

              <!-- Timeline Item 2 -->
              <div class="mb-4 position-relative">
                <span class="position-absolute bg-info rounded-circle border border-white" style="width: 12px; height: 12px; left: -20px; top: 4px;"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark" style="font-size: 0.85rem;">Session Démarrée</h6>
                  <span class="text-secondary" style="font-size: 0.75rem;">Il y a 25m</span>
                </div>
                <p class="text-secondary mb-1" style="font-size: 0.8rem; line-height: 1.4;">Connexion vidéo établie avec succès.</p>
                <span class="text-muted" style="font-size: 0.75rem;"><i class="bi bi-person me-1"></i>Patient: *********-*******</span>
              </div>

              <!-- Timeline Item 3 -->
              <div class="position-relative">
                <span class="position-absolute bg-secondary rounded-circle border border-white" style="width: 12px; height: 12px; left: -20px; top: 4px; background-color: #cbd5e1 !important;"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark" style="font-size: 0.85rem;">Rendez-vous Confirmé</h6>
                  <span class="text-secondary" style="font-size: 0.75rem;">Il y a 1h</span>
                </div>
                <p class="text-secondary mb-0" style="font-size: 0.8rem; line-height: 1.4;">Planifié pour aujourd'hui à 14:00 (CET).</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Notifications Section -->
      <div class="col-12 col-lg-4">
        <div class="card border-0 rounded-4 shadow-sm bg-white h-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-dark mb-0">Notifications</h5>
              <span class="badge bg-danger-subtle text-danger rounded-pill fw-semibold" style="font-size: 0.75rem; padding: 0.35em 0.75em;">3 new</span>
            </div>

            <div class="d-flex flex-column gap-3">
              <!-- Notif 1 -->
              <div class="d-flex align-items-start gap-3 pb-3 border-bottom">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 36px; height: 36px; min-width: 36px;">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-medium" style="font-size: 0.85rem; line-height: 1.4;">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary" style="font-size: 0.75rem;"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:22:37 AM</div>
                </div>
                <span class="badge bg-light text-secondary border" style="font-size: 0.65rem;">updated</span>
              </div>

              <!-- Notif 2 -->
              <div class="d-flex align-items-start gap-3 pb-3 border-bottom">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 36px; height: 36px; min-width: 36px;">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-medium" style="font-size: 0.85rem; line-height: 1.4;">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary" style="font-size: 0.75rem;"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:21:40 AM</div>
                </div>
                <span class="badge bg-light text-secondary border" style="font-size: 0.65rem;">updated</span>
              </div>

              <!-- Notif 3 -->
              <div class="d-flex align-items-start gap-3">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 36px; height: 36px; min-width: 36px;">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-medium" style="font-size: 0.85rem; line-height: 1.4;">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary" style="font-size: 0.75rem;"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:20:40 AM</div>
                </div>
                <span class="badge bg-light text-secondary border" style="font-size: 0.65rem;">updated</span>
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
        <div class="card border-0 rounded-4 shadow-sm bg-white overflow-hidden h-100">
          <!-- Blue Header -->
          <div class="px-4 py-3 text-white" style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);">
            <h5 class="fw-bold mb-1"><i class="bi bi-lightning-charge me-2"></i>Quick Actions</h5>
            <p class="mb-0 text-white-50" style="font-size: 0.8rem;">Create new items and policies</p>
          </div>

          <div class="card-body p-4">
            <div class="row g-3 mb-4">
              <div class="col-4">
                <button class="btn btn-outline-primary w-100 py-3 rounded-3 d-flex flex-column align-items-center gap-2 border-light-subtle shadow-sm bg-white transition-hover">
                  <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 44px; height: 44px;">
                    <i class="bi bi-file-earmark-plus fs-5"></i>
                  </div>
                  <span class="fw-semibold text-dark" style="font-size: 0.8rem;">Create New Policy</span>
                </button>
              </div>
              <div class="col-4">
                <button class="btn btn-outline-primary w-100 py-3 rounded-3 d-flex flex-column align-items-center gap-2 border-light-subtle shadow-sm bg-white transition-hover">
                  <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle" style="width: 44px; height: 44px;">
                    <i class="bi bi-clipboard-plus fs-5"></i>
                  </div>
                  <span class="fw-semibold text-dark" style="font-size: 0.8rem;">Create New TOB</span>
                </button>
              </div>
              <div class="col-4">
                <button class="btn btn-outline-primary w-100 py-3 rounded-3 d-flex flex-column align-items-center gap-2 border-light-subtle shadow-sm bg-white transition-hover">
                  <div class="d-flex align-items-center justify-content-center bg-info-subtle text-info rounded-circle" style="width: 44px; height: 44px;">
                    <i class="bi bi-person-plus fs-5"></i>
                  </div>
                  <span class="fw-semibold text-dark" style="font-size: 0.8rem;">Add New Member</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Policy Management Layout -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 rounded-4 shadow-sm bg-white overflow-hidden h-100">
          <!-- Orange Header -->
          <div class="px-4 py-3 text-white" style="background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);">
            <h5 class="fw-bold mb-1"><i class="bi bi-folder-check me-2"></i>Policy Management</h5>
            <p class="mb-0 text-white-50" style="font-size: 0.8rem;">Quick access to common tasks</p>
          </div>

          <div class="card-body p-4">
            <div class="d-flex flex-column gap-3" style="font-size: 0.9rem;">
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-files text-orange fs-5"></i> All Policies</a>
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-table text-orange fs-5"></i> All Benefit Tables</a>
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-arrow-repeat text-orange fs-5"></i> View Renewals</a>
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-people text-orange fs-5"></i> Manage Members</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Resources Layout -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 rounded-4 shadow-sm bg-white overflow-hidden h-100">
          <!-- Green Header -->
          <div class="px-4 py-3 text-white" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
            <h5 class="fw-bold mb-1"><i class="bi bi-journal-bookmark-fill me-2"></i>Resources</h5>
            <p class="mb-0 text-white-50" style="font-size: 0.8rem;">Access important documents and tools</p>
          </div>

          <div class="card-body p-4">
            <div class="d-flex flex-column gap-3" style="font-size: 0.9rem;">
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-file-earmark-text text-success fs-5"></i> Policy Documents</a>
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-layout-text-sidebar text-success fs-5"></i> TOB Templates</a>
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-shield-check text-success fs-5"></i> Network Management</a>
              <a href="#" class="text-decoration-none text-dark fw-semibold d-flex align-items-center gap-2"><i class="bi bi-bar-chart text-success fs-5"></i> Coverage Reports</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Timeline & Compliance row -->
    <div class="row g-4 mt-1">
      <!-- Expiration Timeline -->
      <div class="col-12 col-lg-6">
        <div class="card border-0 rounded-4 shadow-sm bg-white h-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h5 class="fw-bold text-dark mb-0">Expiration Timeline</h5>
              <span class="badge bg-light text-secondary border fw-medium rounded-pill">3 items</span>
            </div>

            <div class="d-flex flex-column gap-4">
              <!-- CORP-2023-01 -->
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <span class="fw-semibold text-dark" style="font-size: 0.85rem;">CORP-2023-01</span>
                  <span class="badge bg-danger-subtle text-danger fw-semibold" style="font-size: 0.7rem;"><i class="bi bi-exclamation-triangle-fill me-1"></i>7 days</span>
                </div>
                <span class="text-secondary d-block mb-2" style="font-size: 0.75rem;">Acme Corporation</span>
                <div class="progress" style="height: 6px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-danger rounded-pill" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <!-- GRP-2023-15 -->
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <span class="fw-semibold text-dark" style="font-size: 0.85rem;">GRP-2023-15</span>
                  <span class="badge bg-warning-subtle text-warning fw-semibold" style="font-size: 0.7rem;"><i class="bi bi-clock-fill me-1"></i>15 days</span>
                </div>
                <span class="text-secondary d-block mb-2" style="font-size: 0.75rem;">Executive Benefits</span>
                <div class="progress" style="height: 6px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-warning rounded-pill" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <!-- IND-2023-42 -->
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <span class="fw-semibold text-dark" style="font-size: 0.85rem;">IND-2023-42</span>
                  <span class="badge bg-success-subtle text-success fw-semibold" style="font-size: 0.7rem;"><i class="bi bi-calendar2-check-fill me-1"></i>30 days</span>
                </div>
                <span class="text-secondary d-block mb-2" style="font-size: 0.75rem;">Premier Individual Plan</span>
                <div class="progress" style="height: 6px; background-color: #f1f5f9;">
                  <div class="progress-bar bg-success rounded-pill" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Compliance Status -->
      <div class="col-12 col-lg-6">
        <div class="card border-0 rounded-4 shadow-sm bg-white h-100">
          <div class="card-body p-4">
            <h5 class="fw-bold text-dark mb-4">Compliance Status</h5>

            <div class="d-flex flex-column gap-3">
              <!-- Documents -->
              <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle" style="width: 40px; height: 40px; min-width: 40px;">
                  <i class="bi bi-file-earmark-check fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark" style="font-size: 0.85rem;">Documents</span>
                    <span class="badge bg-success-subtle text-success fw-semibold" style="font-size: 0.65rem; padding: 0.25em 0.5em;">Complete</span>
                  </div>
                  <span class="text-secondary d-block" style="font-size: 0.75rem;">All documents updated</span>
                </div>
                <div class="text-end">
                  <strong class="text-dark" style="font-size: 0.9rem;">100%</strong>
                </div>
              </div>

              <!-- Regulatory -->
              <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle" style="width: 40px; height: 40px; min-width: 40px;">
                  <i class="bi bi-arrow-repeat fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark" style="font-size: 0.85rem;">Regulatory</span>
                    <span class="badge bg-success-subtle text-success fw-semibold" style="font-size: 0.65rem; padding: 0.25em 0.5em;">Up to date</span>
                  </div>
                  <span class="text-secondary d-block" style="font-size: 0.75rem;">Last synced 2h ago</span>
                </div>
                <div class="text-end">
                  <strong class="text-dark" style="font-size: 0.9rem;">100%</strong>
                </div>
              </div>

              <!-- Audit -->
              <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded-circle" style="width: 40px; height: 40px; min-width: 40px;">
                  <i class="bi bi-clipboard-check fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark" style="font-size: 0.85rem;">Audit Req.</span>
                    <span class="badge bg-warning-subtle text-warning fw-semibold" style="font-size: 0.65rem; padding: 0.25em 0.5em;">Pending</span>
                  </div>
                  <span class="text-secondary d-block" style="font-size: 0.75rem;">2 items need review</span>
                </div>
                <div class="text-end">
                  <strong class="text-dark" style="font-size: 0.9rem;">75%</strong>
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
              label: 'Approved',
              data: [10, 20, 48, 62, 75, 95],
              borderColor: '#10b981',
              backgroundColor: 'rgba(16, 185, 129, 0.05)',
              fill: true,
              tension: 0.4,
              borderWidth: 2.5,
              pointRadius: 4,
              pointBackgroundColor: '#10b981'
            },
            {
              label: 'Rejected',
              data: [5, 12, 28, 38, 48, 52],
              borderColor: '#f97316',
              backgroundColor: 'rgba(249, 115, 22, 0.02)',
              fill: true,
              tension: 0.4,
              borderWidth: 2.5,
              pointRadius: 4,
              pointBackgroundColor: '#f97316'
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
                boxWidth: 12,
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