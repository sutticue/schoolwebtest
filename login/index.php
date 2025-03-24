<?php
$isSubPage = true;
include '../includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">เข้าสู่ระบบ</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills mb-4 nav-justified" id="loginTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="student-tab" data-bs-toggle="pill" 
                                    data-bs-target="#student-login" type="button" role="tab">
                                <i class="bi bi-mortarboard me-2"></i>นักเรียน
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="teacher-tab" data-bs-toggle="pill" 
                                   data-bs-target="#teacher-login" type="button" role="tab">
                                <i class="bi bi-person-workspace me-2"></i>ครูและบุคลากร
                            </button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="loginTabContent">
                        <!-- Student Login Form -->
                        <div class="tab-pane fade show active" id="student-login" role="tabpanel">
                            <form action="process.php" method="post">
                                <input type="hidden" name="user_type" value="student">
                                
                                <div class="mb-3">
                                    <label for="student_id" class="form-label">รหัสนักเรียน</label>
                                    <input type="text" class="form-control" id="student_id" name="student_id" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="student_password" class="form-label">รหัสผ่าน</label>
                                    <input type="password" class="form-control" id="student_password" name="password" required>
                                </div>
                                
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember_student">
                                    <label class="form-check-label" for="remember_student">จดจำข้อมูลเข้าสู่ระบบ</label>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">ลืมรหัสผ่าน?</a>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Teacher Login Form -->
                        <div class="tab-pane fade" id="teacher-login" role="tabpanel">
                            <form action="process.php" method="post">
                                <input type="hidden" name="user_type" value="teacher">
                                
                                <div class="mb-3">
                                    <label for="teacher_id" class="form-label">รหัสประจำตัวครู</label>
                                    <input type="text" class="form-control" id="teacher_id" name="teacher_id" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="teacher_password" class="form-label">รหัสผ่าน</label>
                                    <input type="password" class="form-control" id="teacher_password" name="password" required>
                                </div>
                                
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember_teacher">
                                    <label class="form-check-label" for="remember_teacher">จดจำข้อมูลเข้าสู่ระบบ</label>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">ลืมรหัสผ่าน?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">ช่วยเหลือ</h5>
                    <p>มีปัญหาในการเข้าสู่ระบบ? กรุณาติดต่อฝ่ายสนับสนุนทางเทคนิค</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-telephone-fill me-2"></i> 02-123-4567 ต่อ 101</li>
                        <li><i class="bi bi-envelope-fill me-2"></i> it.support@school.ac.th</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>