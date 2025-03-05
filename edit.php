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

    <title>แก้ไขข้อมูลพนักงาน</title>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #F5F5DC;
            /* Cream background */
            display: flex;
            justify-content: center;
            padding: 30px 0;
            margin-left: 10%;
        }

        .edit-container {
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
        }

        .form-header {
            border-bottom: 2px solid #dc3545;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="edit-container">
            <?php
            if (isset($_GET['action_even']) == 'edit') {
                $employee_id = $_GET['employee_id'];
                $sql = "SELECT * FROM employees WHERE employee_id=$employee_id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                } else {
                    echo "ไม่พบข้อมูลที่ต้องการแก้ไข กรุณาตรวจสอบ";
                }
            }
            ?>

            <div class="form-header">
                <h1 class="text-danger">
                    <i class="fas fa-user-edit me-3"></i>แก้ไขข้อมูลพนักงาน
                </h1>
            </div>

            <form action="edit_1.php" method="POST">
                <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">
                        <i class="fas fa-id-badge me-2"></i>รหัสพนักงาน
                    </label>
                    <div class="col-sm-9">
                        <label class="col-form-label"> <?php echo $row['employee_id']; ?> </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">
                        <i class="fas fa-user me-2"></i>ชื่อ
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="first_name" class="form-control" maxlength="50" value="<?php echo $row['first_name']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">
                        <i class="fas fa-user me-2"></i>นามสกุล
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="last_name" class="form-control" maxlength="50" value="<?php echo $row['last_name']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">
                        <i class="fas fa-building me-2"></i>แผนก
                    </label>
                    <div class="col-sm-9">
                        <select class="form-select" name="department" aria-label="เลือกแผนก">
                            <option>กรุณาระบุฝ่าย</option>
                            <option value="ฝ่ายไอที" <?php if ($row['department'] == 'ฝ่ายไอที') {
                                                            echo "selected";
                                                        } ?>>ฝ่ายไอที</option>
                            <option value="ฝ่ายบุคคล" <?php if ($row['department'] == 'ฝ่ายบุคคล') {
                                                            echo "selected";
                                                        } ?>>ฝ่ายบุคคล</option>
                            <option value="ฝ่ายการตลาด" <?php if ($row['department'] == 'ฝ่ายการตลาด') {
                                                            echo "selected";
                                                        } ?>>ฝ่ายการตลาด</option>
                            <option value="ฝ่ายบัญชี" <?php if ($row['department'] == 'ฝ่ายบัญชี') {
                                                            echo "selected";
                                                        } ?>>ฝ่ายบัญชี</option>
                            <option value="ฝ่ายผลิต" <?php if ($row['department'] == 'ฝ่ายผลิต') {
                                                            echo "selected";
                                                        } ?>>ฝ่ายผลิต</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">
                        <i class="fas fa-venus-mars me-2"></i>เพศ
                    </label>
                    <div class="col-sm-9">
                        <select class="form-select" name="gender" aria-label="เลือกเพศ">
                            <option>กรุณาระบุเพศ</option>
                            <option value="ชาย" <?php if ($row['gender'] == 'ชาย') {
                                                    echo "selected";
                                                } ?>>เพศชาย</option>
                            <option value="หญิง" <?php if ($row['gender'] == 'หญิง') {
                                                        echo "selected";
                                                    } ?>>เพศหญิง</option>
                            <option value="อื่นๆ" <?php if ($row['gender'] == 'อื่นๆ') {
                                                        echo "selected";
                                                    } ?>>LGBTQ+</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">
                        <i class="fas fa-birthday-cake me-2"></i>อายุ
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="age" class="form-control" maxlength="50" value="<?php echo $row['age']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">
                        <i class="fas fa-money-bill-wave me-2"></i>เงินเดือน
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="salary" class="form-control" maxlength="50" value="<?php echo $row['salary']; ?>" required>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary me-3">
                        <i class="fas fa-save me-2"></i>บันทึกข้อมูล
                    </button>
                    <a href="show.php" class="btn btn-danger">
                        <i class="fas fa-times me-2"></i>ยกเลิก
                    </a>
                </div>
            </form>

            <div class="text-center mt-4 text-muted">
                <i class="fas fa-code me-2"></i>
                พัฒนาโดย 664485021 นายปัญญาวัฒน์ ภุมมะดิลก
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>