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
          <span class="sidebar-logo-text">VSahha</span>
          <span class="sidebar-logo-subtitle">Health Solutions</span>
        </div>
        <button class="btn btn-sm btn-link text-white d-lg-none" id="sidebarCloseBtn">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <div class="user-profile-section">
        <div class="avatar-circle">
          <span class="avatar-text">OB</span>
        </div>
        <div class="user-profile-info">
          <h6 class="user-profile-name">Oussama Benhassen</h6>
          <span class="user-profile-role">Admin</span>
        </div>
      </div>

      <!-- Navigation Links -->
      <div class="py-2">
        <span class="sidebar-heading">Main Menu</span>
        <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
          <i class="bi bi-grid"></i>
          <span>General Dashboard</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-person"></i>
          <span>Partners</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-file-earmark"></i>
          <span>Policies</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-clipboard"></i>
          <span>Claims</span>
        </a>

        <span class="sidebar-heading">Policy Admin</span>
        <a href="{{ route('partnermanagement') }}" class="sidebar-link justify-content-between {{ request()->routeIs('partnermanagement') ? 'active' : '' }}">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-people"></i>
            <span>Partners Management</span>
          </div>
          <span class="sidebar-badge">3</span>
        </a>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-briefcase"></i>
            <span>Group Management</span>
          </div>
          <span class="sidebar-badge">26</span>
        </a>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-file-earmark-text"></i>
            <span>Policy Management</span>
          </div>
          <span class="sidebar-badge">31</span>
        </a>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="flex-shrink: 0;">
              <g opacity="0.7">
                <path d="M6.75 12.75H5.25C4.25544 12.75 3.30161 12.3549 2.59835 11.6517C1.89509 10.9484 1.5 9.99456 1.5 9C1.5 8.00544 1.89509 7.05161 2.59835 6.34835C3.30161 5.64509 4.25544 5.25 5.25 5.25H6.75" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
                <path d="M11.25 5.25H12.75C13.7446 5.25 14.6984 5.64509 15.4017 6.34835C16.1049 7.05161 16.5 8.00544 16.5 9C16.5 9.99456 16.1049 10.9484 15.4017 11.6517C14.6984 12.3549 13.7446 12.75 12.75 12.75H11.25" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
                <path d="M6 9H12" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
              </g>
            </svg>
            <span>Table of Benefits</span>
          </div>
          <span class="sidebar-badge">11</span>
        </a>

        <span class="sidebar-heading">Members</span>
        <a href="#" class="sidebar-link justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-person"></i>
            <span>Member Management</span>
          </div>
          <span class="sidebar-badge">481</span>
        </a>
        <a href="#" class="sidebar-link">
          <i class="bi bi-credit-card"></i>
          <span>Card Management</span>
        </a>

        <span class="sidebar-heading">Network</span>
        <a href="#" class="sidebar-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="flex-shrink: 0;">
            <g opacity="0.7" clip-path="url(#clip0_62_4683)">
              <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
              <path d="M6.75 6.75H6.7575M11.25 6.75H11.2575M7.125 10.5C7.125 10.5 7.875 12 9 12C10.125 12 10.875 10.5 10.875 10.5" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
            </g>
            <defs>
              <clipPath id="clip0_62_4683">
                <rect width="18" height="18" fill="white"/>
              </clipPath>
            </defs>
          </svg>
          <span>Providers</span>
        </a>
        <a href="#" class="sidebar-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="flex-shrink: 0;">
            <g opacity="0.7">
              <path d="M9 11.25C10.2426 11.25 11.25 10.2426 11.25 9C11.25 7.75736 10.2426 6.75 9 6.75C7.75736 6.75 6.75 7.75736 6.75 9C6.75 10.2426 7.75736 11.25 9 11.25Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
              <path d="M14.3024 3.69751C15.7084 5.10397 16.4983 7.01128 16.4983 9.00001C16.4983 10.9887 15.7084 12.8961 14.3024 14.3025M3.69736 3.69751C2.29133 5.10397 1.50146 7.01128 1.50146 9.00001C1.50146 10.9887 2.29133 12.8961 3.69736 14.3025" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
            </g>
          </svg>
          <span>Medical Review</span>
        </a>
      </div>

      <!-- Logout Button -->
      <div class="logout-container">

        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <button type="submit" class="logout-btn">

            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" style="flex-shrink: 0;">
              <path d="M6.75 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V3.75C2.25 3.35218 2.40804 2.97064 2.68934 2.68934C2.97064 2.40804 3.35218 2.25 3.75 2.25H6.75" stroke="white" stroke-opacity="0.5" stroke-width="1.5"/>
              <path d="M12 12.75L15.75 9L12 5.25" stroke="white" stroke-opacity="0.5" stroke-width="1.5"/>
              <path d="M14.5 9H6.75" stroke="white" stroke-opacity="0.5" stroke-width="1.5"/>
            </svg>

            <span class="logout-text">
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