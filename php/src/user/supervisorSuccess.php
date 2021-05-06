<?php

session_start();
// การเอาค่า SESSION
// echo "My name is " . $_SESSION["name"] . ".<br> " . $_SESSION["id"];

$db = new SQLite3('../database.db');
// $results = $db->query('SELECT name, status
// FROM user_support u
// WHERE u.ID_super = "5"
// ');

$user_result = $db->prepare('SELECT name, status
FROM user_support u
WHERE u.ID_super = :id_super
');

$super_result = $db->prepare('SELECT name, affiliate
FROM user_support u
WHERE u.name = :name_super
');

$user_result->bindValue(':id_super', $_SESSION["id"]);
$super_result->bindValue(':name_super', $_SESSION["name"]);

$user = $user_result->execute();
$super_name = $super_result->execute();

// while ($row = $super_name->fetchArray()) {
//     echo $row['name'];
// }

// while ($row = $user->fetchArray()) {
//     echo $row['name'];
// }

// while ($row = $results->fetchArray()) {
//    echo "{$row['kkumail']} {$row['name']} {$row['status']} \n";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>หัวหน้างาน</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/ae382fbf2e.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet" />
</head>

<body style="font-family: 'Kanit', sans-serif">
  <nav class="navbar navbar-light" style="background-color: #953904">
    <div class="container-fluid">
      <img src="https://www.en.kku.ac.th/web/wp-content/uploads/2016/03/Logo5.png" height="56" alt="logo EN KKU" />
      <div class="d-flex flex-row justify-content-center align-items-center" style="color: white">
        <i class="fas fa-lock-open m-2"></i>
        <h4><?php while ($row = $super_name->fetchArray()) {
              echo $row['name'];
            } ?></h4>
      </div>
    </div>
  </nav>
  <div>
    <div class="d-flex">
      <div class="col-2" style="background-color: #263238bb">
        <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
          <i class="fas fa-house-user"></i>
          <h6 class="m-2"><a href="./homeUser.php" style="color: #FFFFFF;text-decoration: none;">หน้าหลัก</a>
          </h6>
        </div>
        <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
          <i class="fas fa-check-square ml-2"></i>
          <h6 class="m-2"><a href="./selectOKRs.php" style="color: #FFFFFF;text-decoration: none;">เลือกหัวข้อ
              OKR</a></h6>
        </div>

        <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
          <i class="fas fa-tasks ml-2"></i>
          <h6 class="m-2"><a href="./changOKR.php" style="color: #FFFFFF;text-decoration: none;">เปลี่ยนหัวข้อ
              OKR</a></h6>
        </div>
        <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
          <i class="fas fa-paper-plane ml-2"></i>
          <h6 class="m-2"><a href="./submitPortfolioOKR.php" style="color: #FFFFFF;text-decoration: none;">ยื่นผลงาน</a></h6>
        </div>
        <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white;background-color: #263238ee">
          <i class="fas fa-user-circle"></i>
          <h6 class="m-2"><a href="./supervisor.php" style="color: #FFFFFF;text-decoration: none;">หัวหน้างาน</a></h6>
        </div>
        <div class="d-flex flex-row align-items-center p-2 border-bottom border-white">
          <a href="../index.php" style="color: #FFFFFF;text-decoration: none;">ออกจากระบบ</a>
        </div>
      </div>
      <!-- body  -->
      <div class="col-10" style="background-color: #eee">
        <div class="card m-3">
          <div class="card-header">
            <h3 class="fw-bolder mt-1">ยินดีต้อนรับ</h3>
            <div class="d-flex flex-row">
              <i class="fas fa-user-shield"></i>
              <h6 class="fw-bolder mt-1">
                &nbsp&nbsp<?php while ($row = $super_name->fetchArray()) {
                            echo $row['name'];
                          } ?>&nbsp&nbspหัวหน้างาน
                <?php while ($row = $super_name->fetchArray())
                  echo $row['affiliate'] ?>
              </h6>
            </div>
          </div>
          <div class="card-body">
            <span class="fw-bolder fs-5">ท่านกำลังดำเนินการเลือกหัวข้อ OKR</span>
          </div>
          <div class="d-flex flex-row p-4">
            <i class="fas fa-user fa-3x"></i>
            <h5>
              &nbsp&nbsp&nbspสำหรับบุคลากร : นาย บารมี บำเพ็ญศีลสมาธิปัญญา
              <br />
              &nbsp&nbsp&nbspสังกัด : งานแผนยุทธศาสตร์และทรัพยากรบุคคล
            </h5>
          </div>
          <div class="mx-auto p-5">
            <div class="d-flex flex-row justify-content-center align-items-center">
              <table>
                <tr>
                  <td>
                    <div class="bg-success pe-4 ps-4 pt-3 pb-3 text-center" style="border-radius: 50%; width: 4rem; height: 4rem; color: white;">
                      1
                    </div>
                  </td>
                  <td>
                    <div class="bg-success" style="width: 6rem; height: 0.5rem; margin-left: -1rem;"></div>
                  </td>
                  <td>
                    <div class="bg-success pe-4 ps-4 pt-3 pb-3 text-center" style="
                              border-radius: 50%;
                              width: 4rem;
                              height: 4rem;
                              margin-left: -1rem;
                              color: white;
                            ">
                      2
                    </div>
                  </td>
                  <td>
                    <div class="bg-success" style="width: 6rem; height: 0.5rem; margin-left: -1rem"></div>
                  </td>
                  <td>
                    <div class="bg-success pe-4 ps-4 pt-3 pb-3 text-center" style="
                              border-radius: 50%;
                              width: 4rem;
                              height: 4rem;
                              margin-left: -1rem;
                              color: white;
                            ">
                      3
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    เลือกหัวข้อ<br />
                    OKR
                  </td>

                  <td class="text-center" colspan="3">กำลังรอ<br />ดำเนินการ</td>

                  <td>เสร็จสิ้น</td>
                </tr>
              </table>

            </div>
          </div>
          <div id="bg-card" class="d-grid gap-2 col-8 mx-auto border border-2" style="background-color: white; margin-left: 90px;margin-right: 90px;margin: 20px; border-radius: 20px; padding: 20px;">
            <!-- step ดำเนินการ-->
            <ul style="list-style: none;">
              <li style="margin-bottom:70px ;"><img src="https://img.icons8.com/metro/26/4a90e2/final-state.png" /> ท่านได้เลือก OKR แล้ว
                <div class="step-new-content">
                  <div class="row">
                    <div class="md-form col-12 ml-auto">
                      <button type="button" class="btn btn-dark" style="margin-left: 200px;margin-right: 20px;">ตัวอย่าง</button>
                      <button type="button" class="btn btn-primary">ดาวน์โหลดเอกสาร</button>
                    </div>
                  </div>
                </div>

              </li>
              <li style="margin-bottom:70px ;"><img src="https://img.icons8.com/metro/26/4a90e2/final-state.png" /> ส่งเอกสารการเลือก OKR
                <div class="step-new-content">
                  <div class="row">
                    <div class="input-group mb-3" style="width: 600px; margin-top: 0px;">
                      <input id="password-linear" type="password" class="form-control validate" style="width: 80px; margin-right: 30px; margin-left: 200px;">
                      <span><button type="button" class="btn btn-primary">เพิ่มไฟล์</button></span>
                    </div>
                  </div>
                </div>


              </li>
              <li style="margin-bottom:70px ;"><img src="https://img.icons8.com/metro/26/4a90e2/final-state.png" /> อยู่ระหว่างดำเนินการ

              </li>

              <li><img src="https://img.icons8.com/metro/26/4a90e2/final-state.png" /> ดำเนินการเสร็จสิ้น
                <div class="step-new-content">
                  <div class="row">
                    <div class="md-form col-12 ml-auto">
                      <button type="button" class="btn btn-primary" style="margin-left: 300px;">ดาวน์โหลดเอกสาร</button>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- style step ดำเนินการ(เส้นที่เชื่อมแต่ละขั้น)-->
            <style>
              ul {
                position: relative;

              }

              ul li::before {
                background-color: #64d3ff5e;
                content: "";
                margin-left: -1px;
                position: absolute;
                left: 2.7em;
                top: 1px;
                width: 5px;
                height: 400px;
                list-style: none;
                z-index: 1;
              }

              li img {
                position: relative;
                z-index: 2;
              }

              /* z-index เอาไว้ set ว่าสิ่งนั้นจะอยู่หน้า/หลังอีกสิ่ง ต้องใช้ร่วมกัน position=relative(พื้นหลัง) หรือ absolute(อันบน) */
            </style>


          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>