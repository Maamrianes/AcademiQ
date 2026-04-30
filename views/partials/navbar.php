<?php declare(strict_types=1);
/** @var string $roleLabel */
/** @var string $title */
$name = Auth::name() ?? '';
$initials = implode('', array_map(fn($w) => strtoupper($w[0]), array_slice(explode(' ', trim($name)), 0, 2)));
?>
<nav class="app-navbar">
    <!-- Logo + Name -->
    <a href="<?= e(url(Auth::defaultPageForRole(Auth::role()) ?? 'login')) ?>" class="navbar-brand-name d-flex align-items-center gap-2 text-decoration-none">
        <div class="navbar-logo">AQ</div>
        <span class="navbar-brand-name">Academi<span>Q</span></span>
    </a>

    <div class="navbar-spacer"></div>

    <!-- Page title (center) -->
    <span class="navbar-page-title"><?= e($title) ?></span>

    <div class="navbar-spacer"></div>

    <!-- Theme toggle -->
    <button class="theme-toggle" id="themeToggle" title="Toggle theme">🌙</button>

    <!-- User dropdown -->
    <div class="dropdown">
        <a class="user-dropdown-toggle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-avatar"><?= e($initials ?: '?') ?></div>
            <div class="d-none d-sm-flex flex-column" style="line-height:1.2">
                <span><?= e($name) ?></span>
                <span class="user-role-badge"><?= e($roleLabel) ?></span>
            </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><h6 class="dropdown-header"><?= e($name) ?></h6></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">🔑 Change Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="<?= e(url('logout')) ?>">🚪 Sign out</a></li>
        </ul>
    </div>
</nav>
