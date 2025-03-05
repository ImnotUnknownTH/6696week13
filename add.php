<!DOCTYPE html>
<html lang="en">
<?php
    include("conn.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลพนักงาน</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Kanit", sans-serif;
            background-color: #F5F5DC; /* Cream background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            margin-left: 25%;
        }
        .form-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-custom {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="text-center mb-4">
                <i class="fas fa-user-plus me-2"></i>โปรแกรมเพิ่มข้อมูลพนักงาน
            </h1>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3 row">
                    <label for="firstName" class="col-sm-3 col-form-label">
                        <i class="fas fa-user me-2"></i>ชื่อ
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="firstName" name="first_name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lastName" class="col-sm-3 col-form-label">
                        <i class="fas fa-user me-2"></i>นามสกุล
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastName" name="last_name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="department" class="col-sm-3 col-form-label">
                        <i class="fas fa-building me-2"></i>แผนก
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="department" name="department" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gender" class="col-sm-3 col-form-label">
                        <i class="fas fa-venus-mars me-2"></i>เพศ
                    </label>
                    <div class="col-sm-9">
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="">เลือกเพศ</option>
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="age" class="col-sm-3 col-form-label">
                        <i class="fas fa-birthday-cake me-2"></i>อายุ
                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="age" name="age" min="18" max="100" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="salary" class="col-sm-3 col-form-label">
                        <i class="fas fa-money-bill-wave me-2"></i>เงินเดือน
                    </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="salary" name="salary" min="0" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-custom me-2">
                        <i class="fas fa-save me-2"></i>บันทึก
                    </button>
                    <a href="show.php" class="btn btn-danger btn-custom">
                        <i class="fas fa-times me-2"></i>ย้อนกลับ
                    </a>
                </div>
            </form>

            <!-- PHP -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $department = $_POST["department"];
                $gender = $_POST["gender"];
                $age = $_POST["age"];
                $salary = $_POST["salary"];

                // เพิ่มข้อมูล
                $sql = "INSERT INTO employees (first_name, last_name, department, gender, age, salary)
                        VALUES ('$first_name', '$last_name', '$department','$gender','$age','$salary')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success text-center mt-3'>
                            <strong>บันทึกเสร็จแล้ว!</strong> คุณได้บันทึกข้อมูล 1 รายการแล้ว
                          </div>";
                } else {
                    echo "<div class='alert alert-danger text-center mt-3'>
                            <strong>เกิดข้อผิดพลาด: </strong>" . $conn->error . "
                          </div>";
                }

                $conn->close();
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>