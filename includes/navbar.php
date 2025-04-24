<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 shadow">
  <a class="navbar-brand fw-bold" href="/sports_booking/index.php">Sports Booking</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav ms-auto">
      <?php if (isset($_SESSION['user_name'])): ?>
        <li class="nav-item">
          <span class="nav-link text-white">Добредојде, <strong><?php echo htmlspecialchars($_SESSION['user_name']); ?></strong></span>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/sports_booking/users/logout.php">Одјава</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="/sports_booking/users/login.php">Најава</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/sports_booking/users/register.php">Регистрација</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
