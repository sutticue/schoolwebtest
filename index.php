<?php include 'includes/header.php'; ?>

<!-- Hero Section with Announcement Slider -->
<div class="hero-slider">
    <div id="announcementCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slide1.jpg" class="d-block w-100" alt="ประกาศรับสมัครนักเรียนใหม่">
                <div class="carousel-caption">
                    <h2>ประกาศรับสมัครนักเรียนใหม่</h2>
                    <p>เปิดรับสมัครนักเรียนใหม่ประจำปีการศึกษา 2025 ตั้งแต่วันนี้ถึง 30 เมษายน 2025</p>
                    <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide2.jpg" class="d-block w-100" alt="กิจกรรมวันวิทยาศาสตร์">
                <div class="carousel-caption">
                    <h2>กิจกรรมวันวิทยาศาสตร์</h2>
                    <p>ขอเชิญทุกท่านร่วมกิจกรรมวันวิทยาศาสตร์ในวันที่ 18 สิงหาคม 2025</p>
                    <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide3.jpg" class="d-block w-100" alt="ผลการแข่งขันทักษะวิชาการ">
                <div class="carousel-caption">
                    <h2>ผลการแข่งขันทักษะวิชาการ</h2>
                    <p>ขอแสดงความยินดีกับนักเรียนที่ได้รับรางวัลจากการแข่งขันทักษะวิชาการระดับภาค</p>
                    <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#announcementCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- School Welcome Section -->
<section class="welcome py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title">ยินดีต้อนรับสู่โรงเรียนของเรา</h2>
                <p>โรงเรียนของเรามุ่งมั่นในการพัฒนาผู้เรียนให้มีความรู้ ทักษะ และคุณธรรม เพื่อเป็นกำลังสำคัญในการพัฒนาประเทศ เรามีความพร้อมทั้งด้านบุคลากร อาคารสถานที่ และสื่อการเรียนการสอนที่ทันสมัย</p>
                <a href="about/" class="btn btn-outline-primary">เกี่ยวกับโรงเรียน</a>
            </div>
            <div class="col-md-6">
                <img src="assets/img/school-building.jpg" alt="โรงเรียนของเรา" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- News Categories Section -->
<section class="news-categories py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-4">ข่าวประชาสัมพันธ์</h2>
        
        <ul class="nav nav-pills mb-4 justify-content-center" id="newsTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all-news" type="button">ทั้งหมด</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="academic-tab" data-bs-toggle="pill" data-bs-target="#academic-news" type="button">วิชาการ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="activity-tab" data-bs-toggle="pill" data-bs-target="#activity-news" type="button">กิจกรรม</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="announcement-tab" data-bs-toggle="pill" data-bs-target="#announcement-news" type="button">ประกาศ</button>
            </li>
        </ul>
        
        <div class="tab-content" id="newsTabsContent">
            <div class="tab-pane fade show active" id="all-news" role="tabpanel">
                <div class="row">
                    <?php
                    // จำลองข้อมูลข่าว (ในโปรเจคจริงจะดึงจากฐานข้อมูล)
                    $allNews = [
                        [
                            'title' => 'ประกาศรับสมัครนักเรียนใหม่ปีการศึกษา 2025',
                            'date' => '15 มีนาคม 2025',
                            'image' => 'news1.jpg',
                            'excerpt' => 'โรงเรียนเปิดรับสมัครนักเรียนใหม่ระดับชั้น ม.1 และ ม.4 ประจำปีการศึกษา 2025',
                            'category' => 'ประกาศ'
                        ],
                        [
                            'title' => 'การแข่งขันทักษะวิชาการระดับเขตพื้นที่',
                            'date' => '10 มีนาคม 2025',
                            'image' => 'news2.jpg',
                            'excerpt' => 'ขอแสดงความยินดีกับนักเรียนที่ได้รับรางวัลจากการแข่งขันทักษะวิชาการระดับเขตพื้นที่การศึกษา',
                            'category' => 'วิชาการ'
                        ],
                        [
                            'title' => 'กิจกรรมทัศนศึกษาประจำปี',
                            'date' => '5 มีนาคม 2025',
                            'image' => 'news3.jpg',
                            'excerpt' => 'โรงเรียนจัดกิจกรรมทัศนศึกษาประจำปี ณ พิพิธภัณฑ์วิทยาศาสตร์แห่งชาติ',
                            'category' => 'กิจกรรม'
                        ],
                        [
                            'title' => 'ตารางสอบปลายภาคเรียนที่ 2',
                            'date' => '1 มีนาคม 2025',
                            'image' => 'news4.jpg',
                            'excerpt' => 'ประกาศตารางสอบปลายภาคเรียนที่ 2 ประจำปีการศึกษา 2024',
                            'category' => 'ประกาศ'
                        ],
                    ];
                    
                    foreach ($allNews as $news) {
                        echo '<div class="col-md-6 col-lg-3 mb-4">';
                        echo '<div class="card h-100">';
                        echo '<img src="assets/img/' . $news['image'] . '" class="card-img-top" alt="' . $news['title'] . '">';
                        echo '<div class="card-body">';
                        echo '<span class="badge bg-primary mb-2">' . $news['category'] . '</span>';
                        echo '<h5 class="card-title">' . $news['title'] . '</h5>';
                        echo '<p class="card-text">' . $news['excerpt'] . '</p>';
                        echo '</div>';
                        echo '<div class="card-footer bg-white">';
                        echo '<small class="text-muted"><i class="bi bi-calendar"></i> ' . $news['date'] . '</small>';
                        echo '<a href="news/index.php" class="btn btn-sm btn-outline-primary float-end">อ่านเพิ่มเติม</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="text-center mt-4">
                    <a href="news/" class="btn btn-primary">ดูข่าวทั้งหมด</a>
                </div>
            </div>
            
            <!-- ส่วนของแท็บอื่นๆ (ในโปรเจคจริงจะมีการกรองข้อมูลตามหมวดหมู่) -->
            <div class="tab-pane fade" id="academic-news" role="tabpanel">
                <!-- ข่าววิชาการ -->
            </div>
            <div class="tab-pane fade" id="activity-news" role="tabpanel">
                <!-- ข่าวกิจกรรม -->
            </div>
            <div class="tab-pane fade" id="announcement-news" role="tabpanel">
                <!-- ประกาศต่างๆ -->
            </div>
        </div>
    </div>
</section>

<!-- Quick Links Section -->
<section class="quick-links py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">บริการออนไลน์</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-person-workspace fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title">ระบบสำหรับนักเรียน</h5>
                        <p class="card-text">เข้าสู่ระบบเพื่อตรวจสอบผลการเรียน ข้อมูลส่วนตัว และการบ้าน</p>
                        <a href="login/index.php" class="btn btn-primary">เข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-mortarboard-fill fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title">ระบบสำหรับครู</h5>
                        <p class="card-text">เข้าสู่ระบบเพื่อบันทึกคะแนน ข้อมูลนักเรียน และจัดการการเรียนการสอน</p>
                        <a href="login/index.php" class="btn btn-primary">เข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title">เอกสารออนไลน์</h5>
                        <p class="card-text">ดาวน์โหลดเอกสารสำคัญ แบบฟอร์มต่างๆ และคู่มือการใช้งาน</p>
                        <a href="documents/" class="btn btn-primary">ดูเอกสาร</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- School Stats Section -->
<section class="school-stats py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="stat-item">
                    <i class="bi bi-people-fill fs-1"></i>
                    <h3 class="counter">1,200</h3>
                    <p>นักเรียนทั้งหมด</p>
                </div>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="stat-item">
                    <i class="bi bi-person-badge fs-1"></i>
                    <h3 class="counter">65</h3>
                    <p>ครูและบุคลากร</p>
                </div>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="stat-item">
                    <i class="bi bi-award fs-1"></i>
                    <h3 class="counter">124</h3>
                    <p>รางวัลที่ได้รับ</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <i class="bi bi-building fs-1"></i>
                    <h3 class="counter">30</h3>
                    <p>ปีแห่งความภาคภูมิใจ</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>