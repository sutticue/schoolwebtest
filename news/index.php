<?php
$isSubPage = true;
include '../includes/header.php';
?>

<div class="page-banner">
    <div class="container">
        <h1 class="display-4 py-5">ข่าวประชาสัมพันธ์</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- News Filters -->
            <div class="mb-4">
                <h4 class="mb-3">หมวดหมู่ข่าว</h4>
                <div class="d-flex flex-wrap gap-2">
                    <a href="?category=all" class="btn btn-sm btn-primary">ทั้งหมด</a>
                    <a href="?category=announcement" class="btn btn-sm btn-outline-primary">ประกาศ</a>
                    <a href="?category=academic" class="btn btn-sm btn-outline-primary">วิชาการ</a>
                    <a href="?category=activity" class="btn btn-sm btn-outline-primary">กิจกรรม</a>
                    <a href="?category=award" class="btn btn-sm btn-outline-primary">รางวัล</a>
                </div>
            </div>
            
            <!-- News Items -->
            <div class="row g-4">
                <?php
                // จำลองข้อมูลข่าว (ในโปรเจคจริงจะดึงจากฐานข้อมูล)
                $allNews = [
                    [
                        'id' => 1,
                        'title' => 'ประกาศรับสมัครนักเรียนใหม่ปีการศึกษา 2025',
                        'date' => '15 มีนาคม 2025',
                        'image' => 'news1.jpg',
                        'excerpt' => 'โรงเรียนเปิดรับสมัครนักเรียนใหม่ระดับชั้น ม.1 และ ม.4 ประจำปีการศึกษา 2025 ตั้งแต่วันที่ 1-30 เมษายน 2025 ผู้ปกครองและนักเรียนที่สนใจสามารถดาวน์โหลดเอกสารและสมัครได้ทั้งช่องทางออนไลน์และที่โรงเรียน',
                        'category' => 'ประกาศ',
                        'views' => 203
                    ],
                    [
                        'id' => 2,
                        'title' => 'การแข่งขันทักษะวิชาการระดับเขตพื้นที่',
                        'date' => '10 มีนาคม 2025',
                        'image' => 'news2.jpg',
                        'excerpt' => 'ขอแสดงความยินดีกับนักเรียนที่ได้รับรางวัลจากการแข่งขันทักษะวิชาการระดับเขตพื้นที่การศึกษา ประจำปี 2025 ซึ่งจัดขึ้นระหว่างวันที่ 5-7 มีนาคม 2025 ณ โรงเรียนมัธยมศึกษาประจำจังหวัด',
                        'category' => 'วิชาการ',
                        'views' => 156
                    ],
                    [
                        'id' => 3,
                        'title' => 'กิจกรรมทัศนศึกษาประจำปี',
                        'date' => '5 มีนาคม 2025',
                        'image' => 'news3.jpg',
                        'excerpt' => 'โรงเรียนจัดกิจกรรมทัศนศึกษาประจำปี ณ พิพิธภัณฑ์วิทยาศาสตร์แห่งชาติ สำหรับนักเรียนระดับชั้นมัธยมศึกษาตอนต้น ในวันที่ 20 มีนาคม 2025 เพื่อเสริมสร้างประสบการณ์การเรียนรู้นอกห้องเรียน',
                        'category' => 'กิจกรรม',
                        'views' => 142
                    ],
                    [
                        'id' => 4,
                        'title' => 'ตารางสอบปลายภาคเรียนที่ 2',
                        'date' => '1 มีนาคม 2025',
                        'image' => 'news4.jpg',
                        'excerpt' => 'ประกาศตารางสอบปลายภาคเรียนที่ 2 ประจำปีการศึกษา 2024 สำหรับนักเรียนทุกระดับชั้น การสอบจะจัดขึ้นระหว่างวันที่ 15-19 มีนาคม 2025 ขอให้นักเรียนเตรียมตัวให้พร้อม',
                        'category' => 'ประกาศ',
                        'views' => 195
                    ],
                    [
                        'id' => 5,
                        'title' => 'โรงเรียนได้รับรางวัลสถานศึกษาดีเด่น',
                        'date' => '25 กุมภาพันธ์ 2025',
                        'image' => 'news5.jpg',
                        'excerpt' => 'โรงเรียนของเราได้รับรางวัลสถานศึกษาดีเด่นด้านการส่งเสริมคุณธรรมจริยธรรม ประจำปี 2025 จากสำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน (สพฐ.)',
                        'category' => 'รางวัล',
                        'views' => 178
                    ],
                    [
                        'id' => 6,
                        'title' => 'การอบรมพัฒนาศักยภาพครูผู้สอน',
                        'date' => '20 กุมภาพันธ์ 2025',
                        'image' => 'news6.jpg',
                        'excerpt' => 'โรงเรียนจัดการอบรมพัฒนาศักยภาพครูผู้สอนในด้านการใช้เทคโนโลยีเพื่อการเรียนการสอนในยุคดิจิทัล โดยวิทยากรผู้เชี่ยวชาญจากมหาวิทยาลัยชั้นนำของประเทศ',
                        'category' => 'กิจกรรม',
                        'views' => 132
                    ],
                ];
                
                foreach ($allNews as $news) {
                    echo '<div class="col-md-6">';
                    echo '<div class="card h-100">';
                    echo '<img src="../assets/img/' . $news['image'] . '" class="card-img-top" alt="' . $news['title'] . '">';
                    echo '<div class="card-body">';
                    echo '<span class="badge bg-primary mb-2">' . $news['category'] . '</span>';
                    echo '<h5 class="card-title"><a href="detail.php?id=' . $news['id'] . '" class="text-decoration-none">' . $news['title'] . '</a></h5>';
                    echo '<p class="card-text">' . $news['excerpt'] . '</p>';
                    echo '</div>';
                    echo '<div class="card-footer bg-white d-flex justify-content-between align-items-center">';
                    echo '<small class="text-muted"><i class="bi bi-calendar"></i> ' . $news['date'] . '</small>';
                    echo '<small class="text-muted"><i class="bi bi-eye"></i> ' . $news['views'] . '</small>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            
            <!-- Pagination -->
            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">ก่อนหน้า</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">ถัดไป</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Search -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">ค้นหาข่าว</h5>
                    <form action="search.php" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="คำค้นหา..." name="q">
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Popular News -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">ข่าวยอดนิยม</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <?php
                        // เรียงข่าวตามยอดการเข้าชม
                        usort($allNews, function($a, $b) {
                            return $b['views'] - $a['views'];
                        });
                        
                        // แสดงข่าวยอดนิยม 5 รายการแรก
                        $popularNews = array_slice($allNews, 0, 5);
                        
                        foreach ($popularNews as $news) {
                            echo '<li class="media-item mb-3 pb-3 border-bottom">';
                            echo '<div class="row g-0">';
                            echo '<div class="col-3">';
                            echo '<img src="../assets/img/' . $news['image'] . '" class="img-fluid rounded" alt="' . $news['title'] . '">';
                            echo '</div>';
                            echo '<div class="col-9">';
                            echo '<div class="ps-3">';
                            echo '<h6 class="mb-1"><a href="detail.php?id=' . $news['id'] . '" class="text-decoration-none">' . $news['title'] . '</a></h6>';
                            echo '<small class="text-muted"><i class="bi bi-calendar me-1"></i>' . $news['date'] . '</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            
            <!-- News Categories -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">หมวดหมู่</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="?category=announcement" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            ประกาศ
                            <span class="badge bg-primary rounded-pill">2</span>
                        </a>
                        <a href="?category=academic" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            วิชาการ
                            <span class="badge bg-primary rounded-pill">1</span>
                        </a>
                        <a href="?category=activity" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            กิจกรรม
                            <span class="badge bg-primary rounded-pill">2</span>
                        </a>
                        <a href="?category=award" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            รางวัล
                            <span class="badge bg-primary rounded-pill">1</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- School Calendar -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">ปฏิทินกิจกรรม</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid">
                