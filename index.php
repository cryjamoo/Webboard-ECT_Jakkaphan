<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
</head>

<body>
    <h1 style="text-align: center;">Jakkphan Board</h1>
    <hr>
    หมวดหมู่: 
    <select name="category">
        <option value="all">--ทั้งหมด--</option>></option>
        <option value="all">--เรื่องทั่วไป--</option>></option>
        <option value="all">--เรื่องเรียน--</option>></option>
    </select>
    <?php
        if(!isset($_SESSION['id'])){
           echo "<a href=login.php style=float: right;>เข้าสู่ระบบ</a>"
        }
    ?>
    
    <ul>
        <?php 
        for($p=1;$p<=10;$p++){
        echo "<li><a href=post.php?id=$p target='_blank' >กระทู้ที่ $p  </a></li>"; 
}
    ?>
           
      </ul>
</body>
</html>