<?php
$host = "127.0.0.1";  // ใช้ 127.0.0.1 แทน localhost
$user = "root";
$pass = "";          // ถ้ามีรหัสผ่านใส่ตรงนี้
$db = "shop_db";
$port = 3307;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
}
?>

