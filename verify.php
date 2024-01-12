









<hr>
<div style="text-align: center;">
<?php
     $login=$_POST["login"];
     $pwd=$_POST["pwd"];
     if($login=="admin" && $pwd=="ad124"){
        echo"ยินดีต้อนรับคุณ ADMIN";
   }elseif($login=="member" && $pwd=="mem124"){
        echo"ยินดีต้อนรับคุณ MEMBEr";
   }else{

   }
   echo"เข้าสู่ระบบด้วย<br>";
   echo"Login = $_POST[login]<br>";
   echo"Password"
?>
</div>