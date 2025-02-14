<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" style="padding: 8px 10px;">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- Nome da empresa -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item align-items-center d-flex">
      <span style="font-size: 18px; font-weight: bold; color: #343A40;">
        <?= $session->get('xFant') ?>
      </span>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto align-items-center d-flex">
    <!-- Botão de Fullscreen -->
    <li class="nav-item">
      <a class="nav-link" id="fullscreen-btn" href="#" role="button" style="padding: 8px 10px;">
        <i class="fas fa-expand"></i>
      </a>
    </li>

    <!-- Logout -->
    <li class="nav-item">
      <a class="nav-link" href="/login/logout" style="padding: 8px 10px;">
        <i class="fas fa-sign-out-alt"></i> Sair
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<script>
  document.getElementById('fullscreen-btn').addEventListener('click', function () {
    if (!document.fullscreenElement) {
      document.documentElement.requestFullscreen();
    } else {
      document.exitFullscreen();
    }
  });
</script>
