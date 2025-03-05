<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #F5F0E1; /* Cream background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            margin-left: 5%;
        }
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control {
            text-align: center;
        }
        .icon-large {
            font-size: 3rem;
            color: #6c757d;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <!-- Add a large user icon -->
                    <div class="text-center mb-4">
                        <i class="bi bi-person-circle icon-large"></i>
                    </div>

                    <h1 class="mb-4 text-center">เข้าสู่ระบบ</h1>
                    <form action="chklogin.php" method="POST">
                        <div class="mb-3">
                            <label for="u_id" class="form-label">
                                <i class="bi bi-person me-2"></i>ชื่อผู้ใช้
                            </label>
                            <input type="text" class="form-control text-center" id="u_id" name="u_id" maxlength="30" required placeholder="กรอกชื่อผู้ใช้">
                        </div>
                        <div class="mb-3">
                            <label for="u_passwd" class="form-label">
                                <i class="bi bi-lock me-2"></i>รหัสผ่าน
                            </label>
                            <input type="password" class="form-control text-center" id="u_passwd" name="u_passwd" maxlength="30" required placeholder="กรอกรหัสผ่าน">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right me-2"></i>เข้าสู่ระบบ
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                <i class="bi bi-x-circle me-2"></i>ยกเลิก
                            </button>
                        </div>
                    </form>
                    <footer class="mt-3 text-muted small">
                        <i class="bi bi-code-slash me-1"></i>
                        พัฒนาโดย 664485021 นายปัญญาวัฒน์ ภุมมะดิลก
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>