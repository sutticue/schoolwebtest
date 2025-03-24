</main>

<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-orange mb-3">เกี่ยวกับโรงเรียน</h5>
                <p>โรงเรียนตัวอย่างเป็นสถาบันการศึกษาที่มุ่งเน้นพัฒนาผู้เรียนให้มีความเป็นเลิศทางวิชาการควบคู่คุณธรรม มุ่งสู่มาตรฐานสากลบนพื้นฐานความเป็นไทย</p>
                <div class="social-icons mt-3">
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-orange mb-3">ข้อมูลติดต่อ</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> 123 ถนนตัวอย่าง แขวงตัวอย่าง เขตตัวอย่าง กรุงเทพฯ 10000</li>
                    <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i> 02-123-4567</li>
                    <li class="mb-2"><i class="bi bi-envelope-fill me-2"></i> info@school.ac.th</li>
                    <li><i class="bi bi-clock-fill me-2"></i> เวลาทำการ: จันทร์-ศุกร์ 8:00-16:30 น.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-orange mb-3">ลิงก์ด่วน</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-white">เข้าสู่ระบบ</a></li>
                            <li class="mb-2"><a href="#" class="text-white">หลักสูตรการเรียน</a></li>
                            <li class="mb-2"><a href="#" class="text-white">ปฏิทินกิจกรรม</a></li>
                            <li class="mb-2"><a href="#" class="text-white">บุคลากร</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-white">ข่าวประชาสัมพันธ์</a></li>
                            <li class="mb-2"><a href="#" class="text-white">กิจกรรมนักเรียน</a></li>
                            <li class="mb-2"><a href="#" class="text-white">ดาวน์โหลดเอกสาร</a></li>
                            <li class="mb-2"><a href="#" class="text-white">ติดต่อเรา</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright -->
<div class="copyright bg-black text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> โรงเรียนตัวอย่าง. สงวนลิขสิทธิ์.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">พัฒนาโดย ทีมพัฒนาเว็บไซต์โรงเรียน</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo (isset($isSubPage) && $isSubPage) ? '../' : ''; ?>assets/js/script.js"></script>

</body>
</html>