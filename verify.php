<<?php
session_start();
if(isset($_SESSION['id'])){
   header("location:index.php");
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
<h1 style="text-align: center;">Jakkphan Board</h1>
    <hr>
   <?php 
   $id = $_POST['login'];
   $pw = $_POST['password'];
   ?>
   <div style="text-align: center;" > <?php  
   if($id=='admin'&&$pw=='ad1234'){
    $_SESSION['username']='admin';
    $_SESSION['role']='a';
    $_SESSION['id']=session_id();
    echo "ยินดีต้อนรับคุณ admin" .'<BR>';
   }
   else if($id=='member'&&$pw=='mem1234'){
    $_SESSION['username']='member';
    $_SESSION['role']='m';
    $_SESSION['id']=session_id();
   echo "ยินดีต้อนรับคุณ member" .'<BR>';
   }
   else echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง".'<BR>';
   ?> </div>
   <div style="text-align: center;"> 
        <a href="index.php">กลับไปที่หน้าหลัก</a>
    </div>
</body>
</html>