<?php
    $db = new SQLite3('../database.db');

    $teaching = $db->query('SELECT user_support.name , okr_support.topics, user_support.target_value,user_support.status,okr_support.unit,user_support.id
    FROM user_support
    JOIN okr_support on user_support.pno = okr_support.pno
    UNION
    SELECT user_support.name , okr_support.topics = NULL, user_support.target_value = NULL,user_support.status,okr_support.unit = NULL ,user_support.id
    FROM user_support
    JOIN okr_support on user_support.pno is NULL
    ');
    
    $support = $db->query('SELECT user_support.name , okr_support.topics, user_support.target_value,user_support.status,okr_support.unit,user_support.id
    FROM user_support
    JOIN okr_support on user_support.pno = okr_support.pno
    UNION
    SELECT user_support.name , okr_support.topics = NULL, user_support.target_value = NULL,user_support.status,okr_support.unit = NULL ,user_support.id
    FROM user_support
    JOIN okr_support on user_support.pno is NULL
    ');

    $dataArray ;
    $isTeaching = true;

    if (isset($_GET['support'])) {
        $dataArray = $support;
        $isTeaching = false;
    } else {
        $dataArray = $teaching;
        $isTeaching = true; 
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <!-- new -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>


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
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white; ;">
                    <i class="fas fa-house-user"></i>
                    <h6 class="m-2"><a href="./homeAdmin.php" style="color: #FFFFFF;text-decoration: none;">หน้าหลัก</a>
                    </h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white;">
                    <i class="fas fa-check-square ml-2"></i>
                    <h6 class="m-2"><a href="./adminSetOKR.php"
                            style="color: #FFFFFF;text-decoration: none;">กำหนดหัวข้อ OKR </a></h6>
                </div>

                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white; background-color: #263230ee">
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
            <div class="col-10" style="background-color: #eee">
                <div class="card m-3">
                    <div class="card-header" style="background-color: #fef5ed">
                        <h5 class="fw-bolder mt-1">คำร้องยื่นหัวข้อ OKR</h5>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-evenly">
                            <a href="adminSubmitOKR.php?teacher=true" class="col-3 p-4" style="text-decoration:none;">
                                <div class="card">
                                    <div class="card-body text-center"
                                        style="background-color: #<?php echo ($isTeaching ? '8acfe044': '') ?>;">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                <i class="fas fa-chalkboard-teacher"></i><br />
                                                สายผู้สอน
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #8acfe0"></div>
                                </div>
                            </a>

                            <a href="adminSubmitOKR.php?support=true" class="col-3 p-4" style="text-decoration:none;">
                                <div class="card">
                                    <div class="card-body text-center"
                                        style="background-color: #<?php echo ($isTeaching ? '': '7bd97b44') ?>;">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                <i class="fas fa-users"></i> <br />
                                                สายสนับสนุน
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #7bd97b"></div>
                                </div>
                            </a>
                        </div>
                        <!-- แถบค้นหา -->
                        <div class="shadow-sm p-3" style="background-color: #eee">
                            <form class="container-fluid">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-group text-left">
                                                    <label for="id-employee">ชื่อ</label>
                                                    <input class="form-control" placeholder="ทั้งหมด" />
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group text-left">
                                                    <label for="ename">หัวข้อ</label>
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        <option selected>ทั้งหมด</option>
                                                        <option value="1">
                                                            จํานวนนักศึกษาระดับบัณฑิตศึกษาภายโต้การดูแลของท่านที่ได้รับการ
                                                            สนับสนุนที่มีคุณภาพมากกว่าเกณฑ์มาตรฐาน สกอ.
                                                        </option>
                                                        <option value="2">
                                                            จํานวนโครงการวิจัยในรูปแบบแผนบูรณาการงานวิจัย
                                                            (Research program)
                                                        </option>
                                                        <option value="3">
                                                            จํานวนโครงการที่ได้เริ่มดําเนินการการสร้างนวัตกรรมเชิงพาณิชย์
                                                        </option>
                                                        <option value="4">
                                                            การตํารงตําแหน่งทางวิชาการที่สูงขึ้น
                                                        </option>
                                                        <option value="5">
                                                            จํานวนเงินรายได้จากการบริการวิชาการ
                                                            (จากการทําสัญญา)
                                                        </option>
                                                        <option value="6">
                                                            จำนวนโครงการบริการวิชาการที่ทําให้กับชุมชน
                                                        </option>
                                                        <option value="7">
                                                            จํานวนผลงานที่ได้รับทุนสนับสนุนจากภายนอกที่ถูกนําไปใช้ประโยชน์
                                                            (CSV)
                                                        </option>
                                                        <option value="8">
                                                            จํานวนผลงานวิจัย/สิ่งประดิษฐ์/นวัตกรรมด้าน
                                                            Digital Technology
                                                        </option>
                                                        <option value="9">
                                                            จํานวนนักศึกษาต่างขาติทั้งแบบปกติและ non-degree
                                                            ภายใต้การดูแล ของท่าน ทั้ง outbound และ Inbound
                                                            ระดับปริญญาตรีและระดับ บัณฑิตศึกษา
                                                        </option>
                                                        <option value="10">
                                                            โครงการฟาร์มอัจฉริยช (Smart Farm)
                                                        </option>
                                                        <option value="11">
                                                            โครงการเมืองอัจฉริยะ (Smart City)
                                                        </option>
                                                        <option value="12">
                                                            จำนวนบทเรียนออนไลน์สะสม
                                                        </option>
                                                    </select>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group text-left">
                                                    <label for="id-employee">ค่าเป้าหมาย</label>
                                                    <input class="form-control" type="number" placeholder="ทั้งหมด" />
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group text-left">
                                                    <label for="ename">หัวข้อ</label>
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        <option selected>ทั้งหมด</option>
                                                        <option value="1">ยังไม่ได้เลือก</option>
                                                        <option value="2">กำลังรอดำเนินการ</option>
                                                        <option value="3">รออนุมัติ</option>
                                                        <option value="4">เสร็จสิ้น</option>
                                                    </select>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="container-fluid d-flex flex-row justify-content-center align-items-center">
                                    <button type="submit"
                                        class="btn btn-lg btn-primary m-2 d-flex flex-row justify-content-center align-items-center ">
                                        ค้นหา

                                        <i class="fas fa-search ms-4"></i>
                                        </svg>
                                    </button>
                                    <button type="reset" class="btn btn-secondary btn-lg ">
                                        ยกเลิก
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- ตาราง -->
                        <table class="table mt-4">
                            <thead class="text-center"
                                style="background-color: #<?php echo ($isTeaching ? '8acfe0': '7bd97b') ?>">
                                <tr>
                                    <th scope="col">ชื่อ</th>
                                    <th scope="col">หัวข้อ</th>
                                    <th scope="col">ค่าเป้าหมาย</th>
                                    <th scope="col">สถานะ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php while ($row = $dataArray->fetchArray()) {?>
                                <tr class="text-center"
                                    style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>"
                                    data-bs-toggle="modal" data-bs-target="#<?php echo $row['id'] ?>">
                                    <th scope="row"><?php echo $row['name'] ?></th>
                                    <td class="text-start">
                                        <?php echo $row['topics'] ?></td>
                                    <td><?php echo "{$row['target_value']} {$row['unit']}" ?></td>
                                    <td>
                                        <div class="shadow-sm p-1 "
                                            style="border-radius: 20px; color: white; 
                                            background-color: #<?php echo $row['status'] == "เสร็จสิ้น" ? "6FDB2C" : ($row['status'] == "รออนุมัติ" ? "FFE200" : ($row['status'] == "รอดำเนินการ" ? "FF7F00" : "F01919")) ?>;">
                                            <?php echo $row['status'] ?></div>
                                    </td>
                                    <td><i class="fas fa-ellipsis-v"></i></td>
                                </tr>
                                <!-- Modal 
                                1. check ว่า id ของ modal นี้ตรงกับ data-bs-target="#showDetailStatus" ที่ตั้งใน row ตอนกดด้วย ให้เหมือนกัน
                                2. อยากแสดง modal แบบไหนให้วาดใส่ modal-content
                                     -->
                                <div class="modal" id="<?php echo $row['id'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="d-flex justify-content-center align-items-center" style="flex: 1">
                                        <div class="modal-dialog row">
                                            <div class="modal-content col-8">
                                                <!-- ในนี้นะ -->
                                                <div class="modal-header ">
                                                    <h5 class="modal-title me-5" id="exampleModalLabel">
                                                        <?php echo $row['name']?></h5>
                                                    <div class="shadow-sm p-2 ms-5"
                                                        style="border-radius: 20px; color: white; 
                                            background-color: #<?php echo $row['status'] == "เสร็จสิ้น" ? "6FDB2C" : ($row['status'] == "รออนุมัติ" ? "FFE200" : ($row['status'] == "รอดำเนินการ" ? "FF7F00" : "F01919")) ?>;">
                                                        <?php echo $row['status'] ?></div>
                                                </div>
                                                <div class="modal-body ">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            หัวข้อ
                                                        </div>
                                                        <div class="col-9">
                                                            <?php echo $row['topics']?>
                                                        </div>
                                                        <div class="col-3">
                                                            เป้าหมาย
                                                        </div>
                                                        <div class="col-9">
                                                            <?php echo "{$row['target_value']} {$row['agency']}" ?>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row mt-4 mb-3 ms-2 me-2 d-flex  justify-content-center align-items-center">
                                                        <div class="col-12 row text-center">
                                                            <div class="col-4"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe0': '7bd97b') ?>">
                                                                วันที่</div>
                                                            <div class="col-8"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe0': '7bd97b') ?>">
                                                                สถานะ</div>

                                                            <div class="col-4"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>">
                                                                08/01/64</div>
                                                            <div class="col-7"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>">
                                                                เลือกหัวข้อ</div>
                                                            <div class="col-1"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>">
                                                                <i class="fas fa-check-circle"
                                                                    style="color: #6fdb2c"></i>
                                                            </div>

                                                            <div class="col-4"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>">
                                                                09/01/64</div>
                                                            <div class="col-7"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>">
                                                                อัพโหลดเอกสารคำร้อง
                                                            </div>
                                                            <div class="col-1"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>">
                                                                <i class="fas fa-check-circle"
                                                                    style="color: #6fdb2c"></i>
                                                            </div>



                                                            <div class="col-4"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>; 
                                                                visibility: <?php echo $row['status'] == "เสร็จสิ้น" ? 'visible' :  'hidden' ; ?>">
                                                                13/01/64</div>
                                                            <div class="col-7"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>; 
                                                                visibility: <?php echo $row['status'] == "เสร็จสิ้น" ? 'visible' :  'hidden' ; ?>">
                                                                อนุมัติ</div>
                                                            <div class="col-1"
                                                                style="background-color: #<?php echo ($isTeaching ? '8acfe044': '7bd97b44') ?>; 
                                                                visibility: <?php echo $row['status'] == "เสร็จสิ้น" ? 'visible' :  'hidden' ; ?>">
                                                                <i class="fas fa-check-circle"
                                                                    style="color: #6fdb2c"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer ">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal" class="btn-close">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>