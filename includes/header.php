<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงเรียนตัวอย่าง - หน้าหลัก</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>assets/css/style.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar bg-dark text-white py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <small>
                        <i class="bi bi-telephone-fill"></i> 02-123-4567 &nbsp;
                        <i class="bi bi-envelope-fill"></i> info@school.ac.th
                    </small>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>login/" class="btn btn-sm btn-outline-light">
                        <i class="bi bi-box-arrow-in-right"></i> เข้าสู่ระบบ
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include (isset($isSubPage) && $isSubPage) ? '../includes/navbar.php' : 'includes/navbar.php'; ?>

    <!-- Main Content -->
    <main>