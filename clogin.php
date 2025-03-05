<?php
session_start();
if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id'])){
} else{
    header('Location:login.php');
}
?>