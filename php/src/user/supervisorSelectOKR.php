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

$OKR_support = $db->query('SELECT *
FROM okr_support
');

// while ($row = $OKR_support->fetchArray()) {
//     echo $row['topics'];
// }

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
                    <div class="mx-auto">
                        <table class="d-grid gap-2 col-6">
                            <tr>
                                <td>
                                    <div class="bg-success pe-4 ps-4 pt-3 pb-3 text-center" style="
                        border-radius: 50%;
                        width: 4.5rem;
                        height: 4rem;
                        color: white;
                      ">
                                        1
                                    </div>
                                </td>
                                <td>
                                    <div class="bg-success" style="width: 6rem; height: 0.3rem; margin-left: -1rem"></div>
                                </td>
                                <td>
                                    <div class="bg-dark pe-4 ps-4 pt-3 pb-3 text-center" style="
                        color: white;
                        border-radius: 50%;
                        width: 4.5rem;
                        height: 4rem;
                        margin-left: -1rem;
                      ">
                                        2
                                    </div>
                                </td>
                                <td>
                                    <div class="bg-dark" style="width: 6rem; height: 0.3rem; margin-left: -1rem"></div>
                                </td>
                                <td>
                                    <div class="bg-dark pe-4 ps-4 pt-3 pb-3 text-center" style="
                        color: white;
                        border-radius: 50%;
                        width: 4.5rem;
                        height: 4rem;
                        margin-left: -1rem;
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
                                <td class="text-center" colspan="3">
                                    กำลังรอ<br />ดำเนินการ
                                </td>
                                <td>เสร็จสิ้น</td>
                            </tr>
                        </table>
                    </div>
                    <div class="p-4">
                        <table class="table ">
                            <thead class="text-center" style="background-color: #7BD97B">
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">หัวข้อ</th>
                                    <th scope="col">คำอธิบาย</th>
                                    <th scope="col">หน่วยนับค่าเป้าหมาย</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form action="">
                                <?php while ($row = $OKR_support->fetchArray()) { ?>
                                    <tr style="background-color: #7BD97B44">
                                        <th scope="row" class="text-center"><input type="radio" id='selectOKR_super' name="selectOKR_super">&nbsp&nbsp<?php echo $row['pno'] ?></th>
                                        <td><?php echo $row['topics'] ?></td>
                                        <td><?php echo $row['description'] ?></td>
                                        <td><span><input type="text" class="border border-2 rounded col-md-2 ms-5"></span>&nbsp&nbsp<?php echo $row['unit'] ?></td>
                                    </tr>
                                <?php } ?>

                                </form>
                            </tbody>
                        </table>
                    </div>
                    <div class="ms-4 mb-4">
                        <h6 class="fw-bolder">กรุณาตรวจสอบข้อมูลของท่านอีกครั้งก่อนกดยืนยันข้อมูล</h6>
                    </div>
                    <div class="d-grid gap-2 col-1 mx-auto pb-4">
                        <button type="button" class="btn btn-success px-4" style="width: fit-content;">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>