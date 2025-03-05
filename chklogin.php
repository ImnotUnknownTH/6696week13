<!DOCTYPE html>
<?php
include("conn.php");
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เช็ค login</title>
</head>

<body>
    <?php
    // เช็คค่า
    $u_id = $_POST['u_id'];
    $u_passwd = $_POST['u_passwd'];
    echo "$u_id.<br>";
    echo "$u_passwd.<br>";
    // เช็ค ชื่อผู้ใช้ กับ รหัสผ่านว่าตรงกับในฐานข้อมูลหรือไม่
    $lvsql = "SELECT * FROM userdata WHERE u_id='$u_id' and u_passwd='$u_passwd' ";

    $result = $conn->query($lvsql);
    if ($result->num_rows == 0) {
        header("Location: loginfalse.php");
    } else {

        //$row = mysqli_fetch_array($query);
        $row = $result->fetch_assoc();

        $_SESSION["u_id"] = $u_id;
        $_SESSION["u_name"] = $row['u_name'];
        $_SESSION["u_passwd"] = $row['u_passwd'];
        $_SESSION["u_department"]= $row['u_department'];

        header("Location:show.php");
    }

    ?>
</body>

</html>