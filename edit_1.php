<!DOCTYPE html>
<html lang="en">
<?php
include("conn.php");
include("clogin.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">

    <title>ผลการแก้ไขข้อมูล</title>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #F5F5DC; /* Cream background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            margin-left: 20%;
        }
        .result-container {
            background-color: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        .result-icon {
            font-size: 5rem;
            margin-bottom: 20px;
        }
        .success-icon {
            color: #28a745;
        }
        .error-icon {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="result-container">
            <?php
            // Process form submission
            $employee_id = $_POST['employee_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $department = $_POST['department'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $salary = $_POST['salary'];

            // SQL update query
            $sql = "UPDATE employees SET first_name='$first_name',last_name='$last_name',department='$department',gender='$gender',age='$age',salary='$salary' WHERE employee_id=$employee_id";

            // Execute query and show result
            if ($conn->query($sql) === TRUE) {
                ?>
                <div class="result-icon success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h1 class="text-success mb-4">แก้ไขข้อมูลสำเร็จ</h1>
                <p class="text-muted mb-4">
                    คุณได้ทำการแก้ไขข้อมูลพนักงาน 
                    <strong><?php echo $first_name . ' ' . $last_name; ?></strong> 
                    เรียบร้อยแล้ว
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="show.php" class="btn btn-primary">
                        <i class="fas fa-list me-2"></i>กลับหน้าแสดงข้อมูล
                    </a>
                    <a href="edit.php?action_even=edit&employee_id=<?php echo $employee_id; ?>" class="btn btn-secondary">
                        <i class="fas fa-edit me-2"></i>แก้ไขข้อมูลอีกครั้ง
                    </a>
                </div>
                <?php
            } else {
                ?>
                <div class="result-icon error-icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <h1 class="text-danger mb-4">เกิดข้อผิดพลาด</h1>
                <p class="text-muted mb-4">
                    ไม่สามารถแก้ไขข้อมูลได้ กรุณาตรวจสอบอีกครั้ง
                </p>
                <div class="d-flex justify-content-center">
                    <a href="edit.php?action_even=edit&employee_id=<?php echo $employee_id; ?>" class="btn btn-danger">
                        <i class="fas fa-redo me-2"></i>ลองอีกครั้ง
                    </a>
                </div>
                <?php
                // Log the error
                error_log('SQL Error: ' . $conn->error);
            }
            
            // Close database connection
            $conn->close();
            ?>

            <div class="text-center mt-4 text-muted small">
                <i class="fas fa-code me-2"></i>
                พัฒนาโดย 664485021 นายปัญญาวัฒน์ ภุมมะดิลก 66/96
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>