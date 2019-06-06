<?php

session_start();

$servername = 'localhost';
$DBusername = 'jz560';
$DBpassword = 'test';
$DBname = '321Test';

$conn = new mysqli($servername, $DBusername, $DBpassword, $DBname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}