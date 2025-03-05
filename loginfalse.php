<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">

    <title>ตรวจสอบ Login</title>
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #F5F5DC; /* Cream background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            margin-left: 35%;
        }
        .error-container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
        }
        .error-icon {
            color: #dc3545;
            font-size: 5rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-container">
            <div class="error-icon text-center">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <h1 class="text-danger mb-3">Login ผิดพลาด</h1>
            <h2 class="text-muted mb-4">กรุณาตรวจสอบ ชื่อผู้ใช้และรหัสผ่าน</h2>
            <a href="login.php" class="btn btn-danger mb-3">
                <i class="fas fa-arrow-left me-2"></i>กลับสู่หน้าจอ Login
            </a>
            <div class="text-muted small">
                พัฒนาโดย 664485021 นายปัญญาวัฒน์ ภุมมะดิลก
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>