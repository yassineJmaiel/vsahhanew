@extends('theme')

@section('title', 'General Management Dashboard - VSahha')

@section('content')
  <div class="container-fluid px-0 py-3">
    <!-- Top Page Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 pb-3 border-bottom gap-3">
      <div>
        <h1 class="h3 fw-bold text-dark mb-1 dc-b364a0">General Management Dashboard</h1>
        <p class="text-secondary mb-0 dc-00833f">Global overview of partners, policies, claims, and medical network</p>
      </div>
      <div class="d-flex align-items-center gap-2">
        <!-- Search Input in Header -->
        <div class="search-wrapper position-relative d-none d-md-block">
          <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted dc-5faaa2"></i>
          <input type="text" class="form-control rounded-pill border-light-subtle bg-white shadow-sm dc-dd17db" placeholder="Search metrics...">
        </div>
      </div>
    </div>

    <!-- Key Metrics Row (Matching mockup colors exactly) -->
    <div class="row g-4 mb-4">
      <!-- Total Partners -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover dc-fca4b5">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4 dc-590ecb">
              <i class="bi bi-building fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block dc-57ebda">Total Partners</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white dc-6791b0">14</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Active Policies -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover dc-a713eb">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4 dc-590ecb">
              <i class="bi bi-shield-check fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block dc-57ebda">Active Policies</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white dc-6791b0">728</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Total Claims (YTD) -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover dc-434c1c">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4 dc-590ecb">
              <i class="bi bi-file-earmark-medical fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block dc-57ebda">Total Claims (YTD)</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white dc-6791b0">5,774</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Online Consultations -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 rounded-4 shadow-sm text-white p-3 h-100 transition-hover dc-7b0320">
          <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-4 dc-590ecb">
              <i class="bi bi-chat-left-heart fs-3 text-white"></i>
            </div>
            <div>
              <span class="text-uppercase fw-semibold d-block dc-57ebda">Online Consultations</span>
              <div class="d-flex align-items-baseline gap-2">
                <h2 class="mb-0 fw-bold text-white dc-6791b0">242</h2>
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
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Claims Breakdown</h5>
                <p class="text-muted mb-0 dc-e7992d">Performance metrics by claim status</p>
              </div>
              <span class="p-2 bg-light rounded-circle text-muted dc-6b5d77"><i class="bi bi-sliders"></i></span>
            </div>

            <!-- Numerical grid summary -->
            <div class="row g-3 mb-4">
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center dc-4fa346">
                  <span class="d-block text-secondary mb-1 dc-7a6214">Pended</span>
                  <span class="h5 mb-0 fw-bold text-warning">1,204</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center dc-4fa346">
                  <span class="d-block text-secondary mb-1 dc-7a6214">Approved</span>
                  <span class="h5 mb-0 fw-bold text-success">4,530</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center dc-4fa346">
                  <span class="d-block text-secondary mb-1 dc-7a6214">Rejected</span>
                  <span class="h5 mb-0 fw-bold text-danger">312</span>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="p-3 text-center dc-4fa346">
                  <span class="d-block text-secondary mb-1 dc-7a6214">Paid</span>
                  <span class="h5 mb-0 fw-bold text-primary">4,015</span>
                </div>
              </div>
            </div>

            <!-- Progress status bars -->
            <div class="space-y-3">
              <!-- Pended -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium dc-09ff35">Pended</span>
                <div class="progress flex-grow-1 dc-240472">
                  <div class="progress-bar dc-de8ee5" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white dc-83a28d">25%</span>
              </div>

              <!-- Approved -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium dc-09ff35">Approved</span>
                <div class="progress flex-grow-1 dc-240472">
                  <div class="progress-bar dc-71cc45" role="progressbar"  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white dc-d4a07a">75%</span>
              </div>

              <!-- Rejected -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium dc-09ff35">Rejected</span>
                <div class="progress flex-grow-1 dc-240472">
                  <div class="progress-bar dc-41ad8a" role="progressbar"  aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white dc-fbe3cc">5%</span>
              </div>

              <!-- Paid to Zero -->
              <div class="mb-3 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium dc-09ff35">Paid to Zero</span>
                <div class="progress flex-grow-1 dc-240472">
                  <div class="progress-bar dc-d11790" role="progressbar"  aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white dc-4c6cdf">12%</span>
              </div>

              <!-- Paid -->
              <div class="mb-2 d-flex align-items-center gap-3">
                <span class="text-dark fw-medium dc-09ff35">Paid</span>
                <div class="progress flex-grow-1 dc-240472">
                  <div class="progress-bar dc-2058f3" role="progressbar"  aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fw-semibold text-white dc-0baf63">68%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Monthly Claims Trend Graph -->
      <div class="col-12 col-lg-6">
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Tendance Mensuelle des Sinistres</h5>
                <p class="text-muted mb-0 dc-e7992d">Evolution mensuelle des sinistres approuvés et rejetés (Jan–Jun)</p>
              </div>
            </div>

            <div class="dc-2928e8">
              <canvas id="claimsTrendChart"></canvas>
              <!-- Red gradient SVG overlay (Figma design) -->
              <div class="dc-9a3bf0">
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
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4 d-flex flex-column">

            <!-- Header with border bottom -->
            <div class="pb-3 mb-3 dc-f6ada1">
              <h5 class="fw-bold text-dark mb-1">Medical Network</h5>
              <p class="text-muted mb-0 dc-e7992d">Contracting ratio overview</p>
            </div>

            <!-- Donut chart centered -->
            <div class="d-flex justify-content-center my-3">
              <div class="dc-d84ecb">
                <canvas id="networkContractingChart"></canvas>
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                  <span class="fs-4 fw-bold text-dark">85%</span>
                  <span class="d-block text-secondary dc-b2c790">Contracted</span>
                </div>
              </div>
            </div>

            <!-- Stats rows -->
            <div class="mt-auto d-flex flex-column gap-2">
              <!-- Contracted -->
              <div class="d-flex align-items-center justify-content-between px-3 py-2 dc-0c08e9">
                <div class="d-flex align-items-center gap-2">
                  <span class="dc-bc4d41"></span>
                  <span class="text-dark fw-medium dc-e7992d">Contracted</span>
                </div>
                <span class="fw-bold text-dark">425</span>
              </div>
              <!-- Non-Contracted -->
              <div class="d-flex align-items-center justify-content-between px-3 py-2 dc-0c08e9">
                <div class="d-flex align-items-center gap-2">
                  <span class="dc-f72905"></span>
                  <span class="text-dark fw-medium dc-e7992d">Non-Contracted</span>
                </div>
                <span class="fw-bold text-dark">75</span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Live Consultations Feed -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4">
            <h5 class="fw-bold text-dark mb-1">Flux de Consultations</h5>
            <p class="text-muted mb-3 dc-e7992d">Activité téléconsultation en direct</p>

            <div class="position-relative ps-4 ms-2">
              <!-- Vertical Line -->
              <div class="dc-d2847d"></div>

              <!-- Timeline Item 1 -->
              <div class="mb-4 position-relative">
                <span class="position-absolute rounded-circle dc-cd7abc"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark dc-e7992d">Consultation Terminée</h6>
                  <span class="text-secondary dc-7b2cec">Il y a 10m</span>
                </div>
                <p class="text-secondary mb-1 dc-206077">Le rapport médical a été généré et envoyé au patient.</p>
                <div class="p-2 mt-2 d-flex align-items-center gap-2 dc-bb7586">
                  <i class="bi bi-person text-secondary dc-e7992d"></i>
                  <span class="text-secondary dc-af89d6">Patient: ******** ******* — Dr. *******</span>
                </div>
              </div>

              <!-- Timeline Item 2 -->
              <div class="mb-4 position-relative">
                <span class="position-absolute rounded-circle dc-345514"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark dc-e7992d">Session Démarrée</h6>
                  <span class="text-secondary dc-7b2cec">Il y a 25m</span>
                </div>
                <p class="text-secondary mb-1 dc-206077">Connexion vidéo établie avec succès.</p>
                <div class="p-2 mt-2 d-flex align-items-center gap-2 dc-bb7586">
                  <i class="bi bi-person text-secondary dc-e7992d"></i>
                  <span class="text-secondary dc-af89d6">Patient: *********-*******</span>
                </div>
              </div>

              <!-- Timeline Item 3 -->
              <div class="position-relative">
                <span class="position-absolute rounded-circle dc-6283b9"></span>
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="mb-0 fw-semibold text-dark dc-e7992d">Rendez-vous Confirmé</h6>
                  <span class="text-secondary dc-7b2cec">Il y a 1h</span>
                </div>
                <p class="text-secondary mb-0 dc-206077">Planifié pour aujourd'hui à 14:00 (CET).</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Notifications Section -->
      <div class="col-12 col-lg-4">
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-dark mb-0 d-flex align-items-center dc-e7ec96"><i class="bi bi-bell text-primary me-2"></i>Notifications</h5>
              <span class="badge rounded-pill fw-semibold dc-b1084b">3 new</span>
            </div>

            <div class="d-flex flex-column gap-3">
              <!-- Notif 1 -->
              <div class="d-flex align-items-start gap-3 pb-3 border-bottom">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle dc-d2c3aa">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-semibold dc-fe94d0">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary dc-af89d6"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:22:37 AM</div>
                </div>
                <span class="badge rounded-pill fw-bold dc-f56417">UPDATED</span>
              </div>

              <!-- Notif 2 -->
              <div class="d-flex align-items-start gap-3 pb-3 border-bottom">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle dc-d2c3aa">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-semibold dc-fe94d0">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary dc-af89d6"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:21:40 AM</div>
                </div>
                <span class="badge rounded-pill fw-bold dc-f56417">UPDATED</span>
              </div>

              <!-- Notif 3 -->
              <div class="d-flex align-items-start gap-3">
                <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle dc-d2c3aa">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-1 text-dark fw-semibold dc-fe94d0">Member claim MC-YP336610-009260711 submitted</p>
                  <div class="text-secondary dc-af89d6"><i class="bi bi-clock me-1"></i>System &bull; 7/11/2026, 10:20:40 AM</div>
                </div>
                <span class="badge rounded-pill fw-bold dc-f56417">UPDATED</span>
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
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4 d-flex flex-column gap-3">
            
            <!-- Floating Gradient Header -->
            <div class="dc-f3efcf">
              <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center justify-content-center dc-6b1748">
                  <i class="bi bi-plus-circle text-white dc-e7ec96"></i>
                </div>
                <h5 class="fw-bold text-white mb-0 dc-b56a3b">Quick Actions</h5>
              </div>
              <p class="mb-0 text-white-50 dc-d9f8ae">Create new items and policies</p>
            </div>

            <!-- Action buttons/cards -->
            <div class="row g-3">
              <!-- Create New Policy -->
              <div class="col-4">
                <div class="d-flex flex-column align-items-start dc-3cdc0b">
                  <div class="d-flex align-items-center justify-content-center dc-232169">
                    <i class="bi bi-file-earmark-plus text-primary fs-5"></i>
                  </div>
                  <span class="fw-bold text-dark dc-f907df">Create New Policy</span>
                </div>
              </div>

              <!-- Create New TOB -->
              <div class="col-4">
                <div class="d-flex flex-column align-items-start dc-3cdc0b">
                  <div class="d-flex align-items-center justify-content-center dc-3a87f7">
                    <i class="bi bi-clipboard-check text-success fs-5"></i>
                  </div>
                  <span class="fw-bold text-success dc-8140f2">Create New TOB</span>
                </div>
              </div>

              <!-- Add New Member -->
              <div class="col-4">
                <div class="d-flex flex-column align-items-start dc-3cdc0b">
                  <div class="d-flex align-items-center justify-content-center dc-f3bcef">
                    <i class="bi bi-person-plus text-purple fs-5 dc-2da10c"></i>
                  </div>
                  <span class="fw-bold dc-5d091f">Add New Member</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Policy Management Layout -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4 d-flex flex-column gap-3">
            
            <!-- Orange Header -->
            <div class="dc-5ba2f3">
              <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center justify-content-center dc-6b1748">
                  <i class="bi bi-file-earmark-text text-white dc-e7ec96"></i>
                </div>
                <h5 class="fw-bold text-white mb-0 dc-b56a3b">Policy Management</h5>
              </div>
              <p class="mb-0 text-white-50 dc-d9f8ae">Quick access to common tasks</p>
            </div>

            <!-- Policy management links -->
            <div class="d-flex flex-column gap-2 dc-33dd45">
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-25e18b">
                <div class="d-flex align-items-center justify-content-center dc-f85667">
                  <i class="bi bi-files text-white fs-6"></i>
                </div>
                <span>All Policies</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-25e18b">
                <div class="d-flex align-items-center justify-content-center dc-f85667">
                  <i class="bi bi-table text-white fs-6"></i>
                </div>
                <span>All Benefit Tables</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-25e18b">
                <div class="d-flex align-items-center justify-content-center dc-f85667">
                  <i class="bi bi-arrow-repeat text-white fs-6"></i>
                </div>
                <span>View Renewals</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-25e18b">
                <div class="d-flex align-items-center justify-content-center dc-f85667">
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
        <div class="card h-100 dc-4fa346">
          <div class="card-body p-4 d-flex flex-column gap-3">
            
            <!-- Green Header -->
            <div class="dc-0022f9">
              <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center justify-content-center dc-6b1748">
                  <i class="bi bi-folder text-white dc-e7ec96"></i>
                </div>
                <h5 class="fw-bold text-white mb-0 dc-b56a3b">Resources</h5>
              </div>
              <p class="mb-0 text-white-50 dc-d9f8ae">Access important documents and tools</p>
            </div>

            <!-- Resources links -->
            <div class="d-flex flex-column gap-2 dc-33dd45">
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-b36469">
                <div class="d-flex align-items-center justify-content-center dc-5dc740">
                  <i class="bi bi-file-earmark-text text-white fs-6"></i>
                </div>
                <span>Policy Documents</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-b36469">
                <div class="d-flex align-items-center justify-content-center dc-5dc740">
                  <i class="bi bi-layout-text-sidebar text-white fs-6"></i>
                </div>
                <span>TOB Templates</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-b36469">
                <div class="d-flex align-items-center justify-content-center dc-5dc740">
                  <i class="bi bi-shield-check text-white fs-6"></i>
                </div>
                <span>Network Management</span>
              </a>
              <a href="#" class="text-decoration-none text-dark fw-bold d-flex align-items-center gap-3 p-2 dc-b36469">
                <div class="d-flex align-items-center justify-content-center dc-5dc740">
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
        <div class="card h-100 overflow-hidden position-relative dc-4fa346">
          <!-- Decorative blue background corner shape -->
          <div class="dc-dd6246">
            <svg xmlns="http://www.w3.org/2000/svg" width="220" height="220" viewBox="0 0 220 220" fill="none">
              <circle opacity="0.55" cx="110" cy="110" r="110" fill="#DBEAFE"/>
            </svg>
          </div>
          
          <div class="card-body p-4 position-relative dc-0babfe">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Expiration Timeline</h5>
                <p class="text-muted mb-0 dc-e7992d">Upcoming policy expirations</p>
              </div>
              <span class="badge fw-medium rounded-pill dc-e691f7">3 items</span>
            </div>

            <div class="d-flex flex-column gap-3">
              <!-- CORP-2023-01 -->
              <div class="d-flex w-100 align-items-center dc-40284b">
                <div class="d-flex align-items-center justify-content-center dc-6d3717">
                  <i class="bi bi-briefcase text-primary fs-5"></i>
                </div>
                <div class="flex-grow-1 d-flex flex-column gap-1">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h6 class="mb-0 fw-bold text-dark dc-6e47c6">CORP-2023-01</h6>
                      <span class="text-secondary dc-fb2a71">Acme Corporation</span>
                    </div>
                    <span class="badge d-flex align-items-center gap-1 dc-cd43a1">
                      <i class="bi bi-exclamation-triangle-fill"></i> 7 days
                    </span>
                  </div>
                  
                  <div class="w-100 mt-2">
                    <div class="d-flex align-items-center gap-2">
                      <div class="progress flex-grow-1 dc-9fae65">
                        <div class="progress-bar dc-6764fc" role="progressbar"  aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="fw-bold dc-edb2e8">7 days</span>
                    </div>
                    <div class="dc-e0b793">
                      Expires in 7 days
                    </div>
                  </div>
                </div>
              </div>

              <!-- GRP-2023-15 -->
              <div class="d-flex w-100 align-items-center dc-40284b">
                <div class="d-flex align-items-center justify-content-center dc-c1e980">
                  <i class="bi bi-people text-success fs-5"></i>
                </div>
                <div class="flex-grow-1 d-flex flex-column gap-1">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h6 class="mb-0 fw-bold text-dark dc-6e47c6">GRP-2023-15</h6>
                      <span class="text-secondary dc-fb2a71">Executive Benefits</span>
                    </div>
                    <span class="badge d-flex align-items-center gap-1 dc-91581a">
                      <i class="bi bi-check-circle-fill"></i> 15 days
                    </span>
                  </div>
                  
                  <div class="w-100 mt-2">
                    <div class="d-flex align-items-center gap-2">
                      <div class="progress flex-grow-1 dc-9fae65">
                        <div class="progress-bar dc-d9bd3a" role="progressbar"  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="fw-bold dc-edb2e8">15 days</span>
                    </div>
                    <div class="dc-e0b793">
                      Expires in 15 days
                    </div>
                  </div>
                </div>
              </div>

              <!-- IND-2023-42 -->
              <div class="d-flex w-100 align-items-center dc-40284b">
                <div class="d-flex align-items-center justify-content-center dc-34d44b">
                  <i class="bi bi-person text-secondary fs-5"></i>
                </div>
                <div class="flex-grow-1 d-flex flex-column gap-1">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <h6 class="mb-0 fw-bold text-dark dc-6e47c6">IND-2023-42</h6>
                      <span class="text-secondary dc-fb2a71">Premier Individual Plan</span>
                    </div>
                    <span class="badge d-flex align-items-center gap-1 dc-951dc1">
                      <i class="bi bi-calendar3"></i> 30 days
                    </span>
                  </div>
                  
                  <div class="w-100 mt-2">
                    <div class="d-flex align-items-center gap-2">
                      <div class="progress flex-grow-1 dc-9fae65">
                        <div class="progress-bar dc-4fc40b" role="progressbar"  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="fw-bold dc-edb2e8">30 days</span>
                    </div>
                    <div class="dc-e0b793">
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
        <div class="card h-100 overflow-hidden position-relative dc-4fa346">
          <!-- Decorative green background corner shape -->
          <div class="dc-715548">
            <svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 240 240" fill="none">
              <circle opacity="0.55" cx="120" cy="120" r="120" fill="#ECFDF5"/>
            </svg>
          </div>

          <div class="card-body p-4 position-relative dc-0babfe">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="fw-bold text-dark mb-1">Compliance Status</h5>
                <p class="text-muted mb-0 dc-e7992d">Regulatory compliance overview</p>
              </div>
              <span class="badge fw-semibold d-flex align-items-center gap-1 dc-a579ad">
                <i class="bi bi-shield-check"></i> Overall
              </span>
            </div>

            <div class="d-flex flex-column gap-3">
              <!-- Documents -->
              <div class="d-flex align-items-center w-100 dc-40284b">
                <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle dc-3f6893">
                  <i class="bi bi-file-earmark-check fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark dc-e7992d">Document Compliance</span>
                    <span class="badge fw-semibold dc-382cb8">Complete</span>
                  </div>
                  <span class="text-secondary d-block dc-af89d6">All required documents are up to date.</span>
                </div>
                <div class="position-relative d-flex align-items-center justify-content-center dc-1b2a63">
                  <svg width="44" height="44" viewBox="0 0 44 44"  class="dc-4a8468">
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#E5E7EB" stroke-width="4"></circle>
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#10B981" stroke-width="4" stroke-dasharray="113.1" stroke-dashoffset="0" stroke-linecap="round"></circle>
                  </svg>
                  <span class="position-absolute fw-bold text-dark dc-12e5fe">100%</span>
                </div>
              </div>

              <!-- Regulatory -->
              <div class="d-flex align-items-center w-100 dc-40284b">
                <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle dc-3f6893">
                  <i class="bi bi-arrow-repeat fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark dc-e7992d">Regulatory Updates</span>
                    <span class="badge fw-semibold dc-382cb8">Up to date</span>
                  </div>
                  <span class="text-secondary d-block dc-af89d6">Last synced 2 hours ago.</span>
                </div>
                <div class="position-relative d-flex align-items-center justify-content-center dc-1b2a63">
                  <svg width="44" height="44" viewBox="0 0 44 44"  class="dc-4a8468">
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#E5E7EB" stroke-width="4"></circle>
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#10B981" stroke-width="4" stroke-dasharray="113.1" stroke-dashoffset="0" stroke-linecap="round"></circle>
                  </svg>
                  <span class="position-absolute fw-bold text-dark dc-12e5fe">100%</span>
                </div>
              </div>

              <!-- Audit -->
              <div class="d-flex align-items-center w-100 dc-40284b">
                <div class="d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded-circle dc-3f6893">
                  <i class="bi bi-clipboard-check fs-5"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-dark dc-e7992d">Audit Requirements</span>
                    <span class="badge fw-semibold dc-76f59f">Pending</span>
                  </div>
                  <span class="text-secondary d-block dc-af89d6">2 items require review before submission.</span>
                </div>
                <div class="position-relative d-flex align-items-center justify-content-center dc-1b2a63">
                  <svg width="44" height="44" viewBox="0 0 44 44"  class="dc-4a8468">
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#E5E7EB" stroke-width="4"></circle>
                    <circle cx="22" cy="22" r="18" fill="none" stroke="#F59E0B" stroke-width="4" stroke-dasharray="113.1" stroke-dashoffset="28.25" stroke-linecap="round"></circle>
                  </svg>
                  <span class="position-absolute fw-bold text-dark dc-12e5fe">75%</span>
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


@endsection
