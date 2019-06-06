<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config.php';

if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select uid from user where uname = '$uname' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $uname;
        header( 'location: ../home.php');
        exit;
    }else{
        echo "not match";
    }
}
