<nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
                    <form class="d-flex"><?php if(!isset($_SESSION['id'])) { ?>                     
                        <a href="login.php" class="navbar-brand"><i class="bi bi-box-arrow-in-left"></i> เข้าสู่ระบบ</a>
                            <?php  }else { ?>
                                <nav class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo "<i class='bi bi-people-fill'></i> $_SESSION[username]" ?></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                                </ul>
                            </nav>
                                <?php }?>
                    </form>
                </div>
            </nav>

    <div class="mt-3 d-flex justify-content-between">
        <div >
            <label for="">หมวดหมู่</label>
            <span class="dropdown">
  <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    --ทั้งหมด--
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
    <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
    <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
  </ul>
</span>
        </div>
        <?php if(isset($_SESSION['id'])) {?>
        <div >  <a href="newpost.php" class="btn btn-success btn-sm "><i class="bi bi-plus"></i> สร้างกระทู้ใหม่</a> </div>
        <?php }?>
    </div>      
    <table class="table table-striped mt-4">
    <?php 
        for($p=1;$p<=10;$p++){
        echo "<tr><td class='d-flex justify-content-between'><a href=post.php?id=$p target='_blank' style=text-decoration:none >กระทู้ที่ $p  </a>"; 

        if(isset($_SESSION['id']) && $_SESSION['role']=='a') {
        echo "&nbsp;&nbsp; <a href=delete.php?id=$p class='btn btn-danger btn-sm me-3'> <i class='bi bi-trash'></i> </a>";
            }
        echo "</td></tr>";
    }
        ?> 
    </table> 
     
</body>
</html>