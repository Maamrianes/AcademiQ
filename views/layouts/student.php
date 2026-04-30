<?php declare(strict_types=1);
/** @var string $viewFile */
/** @var string $title */
$roleLabel = 'Student';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?> · AcademiQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(asset('css/app.css')) ?>">
</head>
<body class="app-body">
<div class="app-wrapper">

    <?php require __DIR__ . '/../partials/navbar.php'; ?>

    <div class="app-body-inner">
        <aside class="sidebar">
            <span class="sidebar-section-label">Menu</span>
            <nav class="sidebar-nav">
                <a class="nav-link <?= str_contains($_SERVER['QUERY_STRING']??'','student_dashboard') ? 'active' : '' ?>" href="<?= e(url('student_dashboard')) ?>">🏠 Dashboard</a>
                <a class="nav-link <?= str_contains($_SERVER['QUERY_STRING']??'','student_history') ? 'active' : '' ?>" href="<?= e(url('student_history')) ?>">📈 GPA History</a>
            </nav>
        </aside>

        <main class="main-content">
            <div class="content-pad">
                <?php require __DIR__ . '/../partials/flash.php'; ?>
                <?php require $viewFile; ?>
            </div>
        </main>
    </div>
</div>
<script>window.APP_BASE = <?= json_encode(base_path(), JSON_THROW_ON_ERROR) ?>;</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script src="<?= e(asset('js/student.js')) ?>"></script>
<script>
(function(){
  const t=localStorage.getItem('academiq-theme')||'light';
  document.documentElement.setAttribute('data-theme',t);
  const btn=document.getElementById('themeToggle');
  if(btn) btn.textContent=t==='dark'?'☀️':'🌙';
  document.getElementById('themeToggle')?.addEventListener('click',function(){
    const cur=document.documentElement.getAttribute('data-theme')||'light';
    const next=cur==='dark'?'light':'dark';
    document.documentElement.setAttribute('data-theme',next);
    localStorage.setItem('academiq-theme',next);
    this.textContent=next==='dark'?'☀️':'🌙';
  });
})();
</script>
</body>
</html>
