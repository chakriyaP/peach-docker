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
<html>

<head>
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
                        <span class="fw-bolder fs-5">รายชื่อบุคลากรใน<?php while ($row = $super_name->fetchArray())
                                                                            echo $row['affiliate'] ?></span>
                    </div>
                    <div class="p-4">
                        <table class="table">
                            <thead class="text-center fs-5" style="background-color: #7bd97b">
                                <tr>
                                    <th scope="col">บุคลากร</th>
                                    <th scope="col"></th>
                                    <th scope="col">ระบบ OKR</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bolder">
                                <?php while ($row = $user->fetchArray()) { ?>
                                    <tr style="background-color: #7bd97b44">
                                        <th class="text-center">
                                            <i class="fas fa-user fa-3x"></i>
                                        </th>
                                        <td><?php echo $row['name'] ?></td>
                                        <td class="text-center">
                                            <span><a href="./<?php echo $row['status'] == "ยังไม่ได้เลือก" ? "supervisorSelectOKR.php" : ($row['status'] == "รอดำเนินการ" ? "supervisorInProgress.php" : ($row['status'] == "รออนุมัติ" ? "#" : ($row['status'] == "เสร็จสิ้น" ? "supervisorSuccess.php" : "#"))) ?>" type="button" class="<?php echo $row['status'] == "ยังไม่ได้เลือก" ? "btn btn-danger" : ($row['status'] == "รอดำเนินการ" ? "btn btn-warning" : ($row['status'] == "รออนุมัติ" ? "btn btn-primary" : ($row['status'] == "เสร็จสิ้น" ? "btn btn-success" : "btn btn-light"))) ?>">
                                                    <?php echo $row['status']; ?>
                                                </a></span>
                                        </td>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>