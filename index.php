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
           echo "<a href=login.php style=float: right;>เข้าสู่ระบบ</a>";
        }
        else{
            echo "<div style='float: right;'>
              ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;
              <a href=logout.php>ออกจากระบบ</a>
            </div>";
            echo "<br><a href=newpost.php>สร้างกระทู้ใหม่</a>";
        }
    ?>
    
    <ul>
        <?php 
        for($p=1;$p<=10;$p++){
        echo "<li><a href=post.php?id=$p target='_blank' >กระทู้ที่ $p  </a>";
        if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
          echo "&nbsp;&nbsp;<a href=delete.php?id=$p>ลบ</a>";
        }
        echo "</li>"; 
}
    ?>
           
      </ul>
</body>
</html>