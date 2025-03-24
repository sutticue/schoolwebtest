<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>index.php">
            <img src="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>assets/img/logo.png" alt="โรงเรียนตัวอย่าง" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>index.php">หน้าหลัก</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        ข้อมูลโรงเรียน
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>about/">ประวัติโรงเรียน</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>about/vision.php">วิสัยทัศน์และพันธกิจ</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>about/director.php">สารจากผู้อำนวยการ</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>about/organization.php">โครงสร้างการบริหาร</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>about/facilities.php">สิ่งอำนวยความสะดวก</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        บุคลากร
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>staff/management.php">ฝ่ายบริหาร</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>staff/teachers.php">คณะครู</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>staff/support.php">บุคลากรสนับสนุน</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        กลุ่มสาระการเรียนรู้
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/science.php">วิทยาศาสตร์และเทคโนโลยี</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/math.php">คณิตศาสตร์</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/thai.php">ภาษาไทย</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/english.php">ภาษาต่างประเทศ</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/social.php">สังคมศึกษา</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/art.php">ศิลปะ</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/health.php">สุขศึกษาและพลศึกษา</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>academics/vocational.php">การงานอาชีพ</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>news/">ข่าวประชาสัมพันธ์</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        เอกสาร
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>documents/academic.php">เอกสารวิชาการ</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>documents/forms.php">แบบฟอร์มต่างๆ</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>documents/regulations.php">กฎระเบียบโรงเรียน</a></li>
                        <li><a class="dropdown-item" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>documents/calendar.php">ปฏิทินการศึกษา</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>contact.php">ติดต่อเรา</a>
                </li>
            </ul>
        </div>
    </div>
</nav>