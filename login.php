<?php
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
    <title>Login</title>
</head>
<body>
    <h1 style="text-align: center;">Jakkaphan Board</h1>
    <hr>
    <table style="border: 2px solid black; width: 20%;" align="center">
        <form action="verify.php" method="post">
        <tr><td style="background-color: #6cd2fe;" colspan="2" >เข้าสู่ระบบ</td></tr>
        <tr><td>Login</td><td><input type="text" name="login" size="50"></td></tr>
        <tr><td>Password</td><td><input type="password" name="password" size="50"></td></tr>
        <tr style="text-align: center;"><td colspan="2"><input type="submit" value="Login"></td></tr>
    </form>
    </table>
    <br>
    <div style="text-align: center;">
        ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php" target="_blank">สมัครสมาชิก</a>
</div>
</body>
</html>