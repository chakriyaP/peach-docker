<?php
    session_start();
    // คำสั่งต่อกับ ไฟล์ database นี
    $db = new SQLite3('database.db');
    $kkumail = $_POST["kkumail"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $visible =  "hidden";
  
    if ($role == "user") {
        $user_result = $db->prepare('SELECT *, COUNT(*) as count
        FROM (SELECT user_support.kkumail, user_support.Password, user_support.id, user_support.name FROM user_support
              UNION
              SELECT user_teaching.kkumail, user_teaching.Password, user_teaching.id, user_teaching.name FROM user_teaching
             ) AS U
      WHERE U.kkumail = :kkumail AND U.password = :password
      ');
        $user_result->bindValue(':kkumail', $kkumail);
        $user_result->bindValue(':password', $password);

        $user = $user_result->execute();
       
        
        while ($row = $user->fetchArray()) {
            if ($row['count'] > 0) {
                $_SESSION["name"] = $row['name']; 
                $_SESSION["id"] = $row['id']; 
                // echo "{$row['kkumail']} {$row['Password']} {$row['ID']} {$row['count']} \n";
                header("Location: ./user/homeUser.php");
            } else {
                $visible =  "visible";
            }
        }
        
    } elseif ($role == "admin") {
        $user_admin = $db->prepare('SELECT kkumail, password, name, ID, COUNT(*) as count FROM admin WHERE kkumail = :kkumail and password = :password;');
        $user_admin->bindValue(':kkumail', $kkumail);
        $user_admin->bindValue(':password', $password);

        $admin = $user_admin->execute();
        while ($row = $admin->fetchArray()) {
            if ($row['count'] > 0) {
                // echo "{$row['kkumail']} {$row['Password']} {$row['ID']} {$row['count']} \n";
                header("Location: ./admin/homeAdmin.php");
            } else {
                $visible =  "visible";
            }
        }
    } elseif ($role == "dean") {
        $user_dean = $db->prepare('SELECT kkumail, password, name, ID, COUNT(*) as count FROM dean WHERE kkumail = :kkumail and password = :password;');
        $user_dean ->bindValue(':kkumail', $kkumail);
        $user_dean->bindValue(':password', $password);

        $dean = $user_dean->execute();
        while ($row = $dean->fetchArray()) {
            if ($row['count'] > 0) {
                // echo "{$row['kkumail']} {$row['Password']} {$row['ID']} {$row['count']} \n";
                header("Location: ./dean/analyze.php");
            } else {
                $visible =  "visible";
            }
        }

    } 
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/ae382fbf2e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet" />

</head>

<body
    style="background-image: url(https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80); font-family: 'Kanit', sans-serif">
    <nav class="navbar navbar-light" style="background-color: #953904">
        <div class="container-fluid">
            <img src="https://www.en.kku.ac.th/web/wp-content/uploads/2016/03/Logo5.png" height="56"
                alt="logo EN KKU" />

        </div>
    </nav>
    <!-- <div class="d-flex flex-row align-items-center">
        <h2 class="me-4 ms-4">เข้าทางลัดไปก่อนนะคะ</h2>
        <h3 class="ms-2"><a href="./user/homeUser.php"> USER</a></h2>
            <h3 class="ms-2"><a href="./admin/homeAdmin.php">Admin</a></h2>
    </div> -->
    <div class=" d-flex justify-content-around align-items-center">
        <div class="col-10  d-flex flex-row justify-content-around align-items-center "
            style="margin-top: 6rem;border-radius: 20px; background-color: #fffe; ">
            <div class="col-sm-4   p-4">
                <h1>ยินดีต้อนรับ !</h1>
                <h3>
                    <i class="far fa-arrow-alt-circle-right me-2"></i>เข้าสู่ระบบโดย account
                </h3>
                <table style="width: 100%">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>บุคคลากรสายผู้สอน</td>
                        <td>email: t1@kkumail.com password : 12345678</td>
                    </tr>
                    <tr>
                        <td>บุคคลากรสายสนับสนุน (มีลูกน้อง)</td>
                        <td>email: s4@kkumail.com password : 44444444</td>
                    </tr>
                    <tr>
                        <td>ผู้ดูแลระบบ</td>
                        <td>email: admin@kkumail.com password : 72913515</td>
                    </tr>
                    <tr>
                        <td>คณบดี</td>
                        <td>email: dean@kkumail.com password : 12345678</td>
                    </tr>
                    <!-- <tr>
                        <td>ประกาศผลการประเมิน</td>
                        <td>26 ธ.ค. 64</td>
                    </tr> -->
                    </tr>
                </table>
            </div>
            <div class="col-sm-5 p-4">
                <form class="p-4" method="post">
                    <div class="mb-3">
                        <h2>เข้าสู่ระบบ</h2>
                        <label for="exampleInputEmail1" class="form-label">อีเมลล์</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="kkumail" required />
                        <div id="emailHelp" class="form-text">
                            เข้าสู่ระบบโดย kkumail
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            required />
                    </div>
                    <div class="mb-2 ">
                        <label for="exampleInputPassword1" class="form-label">เข้าสู่ระบบโดย</label>
                        <div class="d-flex flex-row justify-content-around ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="exampleRadios1" name="role"
                                    value="user" <?php if (isset($role) && $role=="user") echo "checked";?> checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    บุคคลากร
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="exampleRadios1" name="role"
                                    value="admin" <?php if (isset($role) && $role=="admin") echo "checked";?>>
                                <label class="form-check-label" for="exampleRadios1">
                                    ผู้ดูแลระบบ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="exampleRadios1" name="role"
                                    value="dean" name="role" <?php if (isset($role) && $role=="deam") echo "checked";?>>
                                <label class="form-check-label" for="exampleRadios1">
                                    คณบดี
                                </label>
                            </div>

                        </diV>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn p-2 mt-3" style="background-color: #953904; color: white;"
                            type="submit">เข้าสู่ระบบ</button>
                    </div>
                    <h5 style="visibility: <?php echo $visible ?>;  color: red; " class="mt-2">
                        เข้าสู่ระบบไม่สำเร็จกรณีลองใหม่อีกครั้ง
                    </h5>
                </form>
            </div>
        </div>

    </div>
</body>

</html>