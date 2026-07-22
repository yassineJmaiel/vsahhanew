<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'VSahha Health Solutions - Dashboard')</title>
  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- Optional original stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

  <div class="main-wrapper">
    <!-- Sidebar Navigation -->
    <nav class="sidebar id-sidebar" id="sidebar">
      <div class="sidebar-header d-flex align-items-center justify-content-between">
        <div>
          <span class="fs-5 fw-bold text-white d-block">VSahha</span>
          <span class="text-uppercase text-muted" style="font-size: 0.65rem; letter-spacing: 2px;">Health
            Solutions</span>
        </div>
        <button class="btn btn-sm btn-link text-white d-lg-none" id="sidebarCloseBtn">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <!-- User Profile in Sidebar -->
      <div class="user-profile-section d-flex align-items-center gap-3">
        <div class="avatar-circle">OB</div>
        <div>
          <h6 class="mb-0 text-white fw-semibold" style="font-size: 0.9rem;">Oussama</h6>
          <span class="text-muted" style="font-size: 0.75rem;">Admin</span>
        </div>
      </div>

      <!-- Navigation Links -->
      <div class="py-2">
        <span class="sidebar-heading">Main Menu</span>
        <a href="{{ route('dashboard') }}" class="sidebar-link active">
          <i class="bi bi-grid-fill"></i>
          <span>General Dashboard</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-people"></i>
          <span>Partners</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-file-earmark-ruled"></i>
          <span>Policies</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-journal-check"></i>
          <span>Claims</span>
        </a>

        <span class="sidebar-heading">Policy Admin</span>
        <a href="{{ route('partnermanagement') }}" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-briefcase"></i>
            <span>Partners Mgmt</span>
          </div>
          <span class="badge bg-primary rounded-pill">3</span>
        </a>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-building"></i>
            <span>Group Mgmt</span>
          </div>
          <span class="badge bg-secondary rounded-pill">26</span>
        </a>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-file-earmark-text"></i>
            <span>Policy Mgmt</span>
          </div>
          <span class="badge bg-success rounded-pill">31</span>
        </a>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-table"></i>
            <span>Benefits Table</span>
          </div>
          <span class="badge bg-info text-dark rounded-pill">11</span>
        </a>

        <span class="sidebar-heading">Members</span>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-person-gear"></i>
            <span>Member Mgmt</span>
          </div>
          <span class="badge bg-warning text-dark rounded-pill">481</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-card-heading"></i>
          <span>Card Mgmt</span>
        </a>

        <span class="sidebar-heading">Network</span>
        <a href="#" class="sidebar-link">
          <i class="bi bi-hospital"></i>
          <span>Providers</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-clipboard-pulse"></i>
          <span>Medical Review</span>
        </a>
      </div>

      <!-- Logout Button -->
      <div class="mt-4 p-3 border-top" style="border-color: rgba(255,255,255,0.08) !important;">

        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <button type="submit" class="text-decoration-none" style="
                display: flex;
                width: 216px;
                height: 38px;
                padding: 10px 108px 10px 12px;
                align-items: flex-start;
                gap: 30px;
                flex-shrink: 0;
                border-radius: 10px;
                color: rgba(255,255,255,0.6);
                background: transparent;
                border: none;
                cursor: pointer;
            ">

            <i class="bi bi-box-arrow-right fs-5" style="line-height:1;"></i>

            <span style="
                font-size:0.85rem;
                white-space:nowrap;
                font-weight:500;
            ">
              Log out
            </span>

          </button>

        </form>

      </div>
    </nav>

    <!-- Main Content Area -->
    <div class="content-area">
      <!-- Header / Top Navbar -->
      <header class="top-navbar d-flex align-items-center justify-content-between shadow-sm">
        <div class="d-flex align-items-center gap-3">
          <button class="btn btn-light d-lg-none" id="sidebarToggleBtn">
            <i class="bi bi-list fs-4"></i>
          </button>
          <div class="search-wrapper d-none d-md-block">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control search-input" placeholder="Search metrics...">
          </div>
        </div>

        <div class="d-flex align-items-center gap-3">
          <!-- Notification Bell -->
          <div class="position-relative cursor-pointer me-2">
            <button class="btn btn-light rounded-circle position-relative p-2" style="width: 40px; height: 40px;">
              <i class="bi bi-bell fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3
              </span>
            </button>
          </div>

          <!-- Quick profile shortcut -->
          <div class="d-flex align-items-center gap-2">
            <span class="fw-medium d-none d-sm-inline-block text-dark">Oussama Benhassen</span>
            <div class="avatar-circle bg-primary-subtle text-primary fw-bold"
              style="width: 36px; height: 36px; font-size: 0.9rem;">OB</div>
          </div>
        </div>
      </header>

      <!-- Main Dashboard Page Content -->
      <main class="p-4 flex-grow-1">
        @yield('content')
      </main>

      <!-- Footer -->
      <footer class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
        <div>&copy; 2026 Insurant Partner Management System &bull; Last synced 2m ago</div>
        <div class="d-flex gap-3">
          <a href="#" class="text-decoration-none text-muted">Privacy Policy</a>
          <a href="#" class="text-decoration-none text-muted">Terms of Service</a>
          <span class="text-muted">v2.4.1</span>
        </div>
      </footer>
    </div>
  </div>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggleBtn = document.getElementById('sidebarToggleBtn');
      const closeBtn = document.getElementById('sidebarCloseBtn');
      const sidebar = document.getElementById('sidebar');

      if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function () {
          sidebar.classList.toggle('show');
        });
      }
      if (closeBtn && sidebar) {
        closeBtn.addEventListener('click', function () {
          sidebar.classList.remove('show');
        });
      }
    });
  </script>
</body>

</html>