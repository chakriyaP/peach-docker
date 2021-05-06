<?php
session_start();


    $db = new SQLite3('../database.db');

   
    $count_support = $db->querySingle("SELECT COUNT(*) as count FROM user_support");
    $count_teaching = $db->querySingle("SELECT COUNT(*) as count FROM user_teaching");
    
    
    
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

<body style="font-family: 'Kanit', sans-serif">
    <nav class="navbar navbar-light" style="background-color: #953904">
        <div class="container-fluid">
            <img src="https://www.en.kku.ac.th/web/wp-content/uploads/2016/03/Logo5.png" height="56"
                alt="logo EN KKU" />
            <div class="d-flex flex-row justify-content-center align-items-center" style="color: white">
                <i class="fas fa-lock-open m-2"></i>
                <h4>ผู้ดูแลระบบ</h4>
            </div>
        </div>
    </nav>
    <div>
        <div class="d-flex">
            <div class="col-2" style="background-color: #263238bb">
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white; background-color: #263230ee">
                    <i class="fas fa-house-user"></i>
                    <h6 class="m-2"><a href="./homeAdmin.php" style="color: #FFFFFF;text-decoration: none;">หน้าหลัก</a>
                    </h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white;">
                    <i class="fas fa-check-square ml-2"></i>
                    <h6 class="m-2"><a href="./adminSetOKR.php"
                            style="color: #FFFFFF;text-decoration: none;">กำหนดหัวข้อ OKR </a></h6>
                </div>

                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-paper-plane ml-2"></i>
                    <h6 class="m-2"><a href="./adminSubmitOKR.php"
                            style="color: #FFFFFF;text-decoration: none;">คำร้องยื่นหัวข้อ OKR</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-sync ml-2"></i>
                    <h6 class="m-2"><a href="./adminChangOKR.php"
                            style="color: #FFFFFF;text-decoration: none;">คำร้องเปลี่ยน OKR</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-tasks ml-2"></i>
                    <h6 class="m-2"><a href="./adminCheckPortfolio.php"
                            style="color: #FFFFFF;text-decoration: none;">ตรวจสอบการยื่นผลงาน</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-chart-pie ml-2"></i>
                    <h6 class="m-2"><a href="./analyze.php"
                            style="color: #FFFFFF;text-decoration: none;">การวิเคราะห์</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-users-cog ml-2"></i>
                    <h6 class="m-2"><a href="./adminRule.php"
                            style="color: #FFFFFF;text-decoration: none;">กำหนดหัวหน้างาน</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white">
                    <a href="../index.php" style="color: #FFFFFF;text-decoration: none;">ออกจากระบบ</a>
                </div>
            </div>
            <!-- body  -->
            <div class="col-10" style="letter-spacing: 2px; background-color: #eee">
                <div class="card m-2">
                    <div class="card-header" style="background-color: #fef5ed">
                        <h4 class="fw-bolder mt-1">
                            ยินดีต้อนรับผู้ดูแลระบบ OKR
                        </h4>
                        <h5><i class="fas fa-user-shield"></i> <?php echo $_SESSION["name"] ?></h5>
                    </div>

                    <div class="card-body">
                        <div class="row d-flex justify-content-around">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                <i class="fas fa-chalkboard-teacher"></i> สายผู้สอน
                                                <br>


                                            <p class="fw-bolder text-center" style="color: #953904">
                                                <?php echo $count_teaching; ?> คน</p>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #8acfe0"></div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                <i class="fas fa-users"></i> สายสนับสนุน
                                                <br>
                                            <p class="fw-bolder text-center" style="color: #953904">
                                                <?php echo $count_support; ?> คน</p>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #7BD97B"></div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body" style="background-color: #8acfe0">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: white">
                                                รวม
                                                <br>
                                                <?php $count_total = $count_support + $count_teaching; ?>
                                            <p class="fw-bolder text-center" style="color: white">
                                                <?php echo $count_total; ?> คน</p>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #8acfe0"></div>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div>
                            <h4 class="fw-bolder fs-5" style="letter-spacing: 2px; color: #953904">
                                <i class="fas fa-caret-right"></i> กำหนดการลงทะเบียน OKR
                            </h4>
                            <div class="container">
                                <p class="fw-lighter fs-6 text-sm-end">แก้ไข</p>
                                <div class="row">
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-3 fw-bolder">
                                        <p>ประกาศหัวข้อ OKR</p>
                                        <p>เลือกหัวข้อ OKR</p>
                                        <p>สามารถเปลี่ยนหัวข้อ OKR</p>
                                        <p>ยื่นผลงาน</p>
                                        <p>ประกาศผลการประเมิน</p>
                                    </div>
                                    <div class="col-sm-3 fw-bolder">
                                        <p>7 ม.ค. 64</p>
                                        <p>8 - 15 ม.ค. 64</p>
                                        <p>25 ม.ค. 64 - 10 ธ.ค. 64</p>
                                        <p>20 ม.ค. 64 - 24 ธ.ค. 64</p>
                                        <p>26 ธ.ค. 64</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="border: 3px solid #953904;">

                        <div>
                            <h4 class="fw-bolder fs-5" style="letter-spacing: 2px; color: #953904">
                                <i class="fas fa-caret-right"></i> แจ้งข่าวสาร
                            </h4>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <h5><i class="fas fa-bullhorn"></i> ประกาศกำหนดการ OKR</h5>
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-3">
                                        <br>
                                        <h5 fw-bolder><u>เพิ่มข่าวสาร</u></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>