<?php
    // คำสั่งต่อกับ ไฟล์ database นี
    $db = new SQLite3('../database.db');

    // เป็นการใช้คำสั่ง sql ในวงเล็บ เช่นในนี้คือให้น้องเขาไปselect ทุกอย่างในตาราง login มา
    // คำสั่ง SQL จะให้เพื่อน database เขียนมาให้เราเป็นคนเอามาใส่
    $OKR_teaching = $db->query('SELECT * FROM okr_teaching;');
    $OKR_support = $db->query('SELECT * FROM okr_support;');

    // อันนี้เป็นการ show ทุกอย่างที่เราทำการดึงมา 
    // $row['ในนี้จะเป็นชื่อหัวตาราง']

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
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white; ;">
                    <i class="fas fa-house-user"></i>
                    <h6 class="m-2"><a href="./homeAdmin.php" style="color: #FFFFFF;text-decoration: none;">หน้าหลัก</a>
                    </h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white;background-color: #263230ee">
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
            <div class="col-10" style="background-color: #eee">
                <div class="card m-3">
                    <div class="card-header" style="background-color: #fef5ed">
                        <h5 class="fw-bolder mt-1">
                            คำอธิบายตัวชี้วัด OKR รายบุคคลปี 2564
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-around mb-4">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                รายละเอียดตัวชี้วัด
                                                <br> <i class="fas fa-chalkboard-teacher"></i> สายผู้สอน</br>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #8acfe0"></div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                รายละเอียดตัวชี้วัด
                                                <br> <i class="fas fa-users"></i> สายสนับสนุน</br>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #7BD97B"></div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="background-color: #953904dd">
                                    <div class="card-body text-center">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder pt-1" style="color: #fff;">
                                                แนวการการประเมิน OKR
                                                <br> <i class="fas fa-pen"></i> รายบุคคล</br>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="fw-bolder fs-5">
                                <i class="fas fa-chalkboard-teacher m-2"
                                    style="color: #953904"></i>รายละเอียดตัวชี้วัดสายผู้สอน
                            </p>
                            <table class="table ">
                                <thead class="text-center" style="background-color: #8acfe0">
                                    <tr>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">หัวข้อ</th>
                                        <th scope="col">คำอธิบาย</th>
                                        <th scope="col">หน่วยนับค่าเป้าหมาย </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $OKR_teaching->fetchArray()) {?>
                                    <tr style="background-color: #8acfe044">
                                        <th scope="row" class="text-center"><?php echo $row['pno'] ?></th>
                                        <td><?php echo $row['topics'] ?></td>
                                        <td><?php echo $row['description'] ?></td>
                                        <td><?php echo $row['unit']  ?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <p class="fw-bolder fs-5">
                                <i class="fas fa-users m-2" style="color: #953904"></i>รายละเอียดตัวชี้วัดสายสนับสนุน
                            </p>
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
                                    <?php while ($row = $OKR_support->fetchArray()) {?>
                                    <tr style="background-color: #7BD97B44">
                                        <th scope="row" class="text-center"><?php echo $row['pno'] ?></th>
                                        <td><?php echo $row['topics'] ?></td>
                                        <td><?php echo $row['description'] ?></td>
                                        <td><?php echo $row['unit']?></td>
                                    </tr>
                                    <?php }?>


                                </tbody>
                            </table>
                        </div>

                        <div>
                            <p class="fw-bolder fs-5">
                                <i class="fas fa-pen m-2" style="color: #953904"></i>แนวทางการประเมิน OKR รายบุคคล
                            </p>
                            <table class="table text-center">
                                <thead class="text-center " style="background-color: #953904">
                                    <tr style="color: white;">
                                        <th scope="col">จำนวนเป้าหมาย<br>
                                            (โครงการ/ชิ้นงาน/คน)</th>

                                        <th scope="col" colspan="6">ผลงาน = ร้อยละความสำเร็จ = คะแนน</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color: #95390444">
                                        <th scope="row">1</th>
                                        <td>0 = 0%<br>
                                            คะแนน = 0</td>
                                        <td>1 = 100%<br>
                                            คะแนน = 5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr style="background-color: #95390499">
                                        <th scope="row">2</th>
                                        <td>0 = 0%<br>
                                            คะแนน = 0</td>
                                        <td>1 = 50%<br>
                                            คะแนน = 2.5</td>
                                        <td>2 = 100%<br>
                                            คะแนน = 5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr style="background-color: #95390444">
                                        <th scope="row">3</th>
                                        <td>0 = 0%<br>
                                            คะแนน = 0</td>
                                        <td>1 = 33%<br>
                                            คะแนน = 1.65</td>
                                        <td>2 = 100%<br>
                                            คะแนน = 3.3</td>
                                        <td>3 = 100%<br>
                                            คะแนน = 5</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr style="background-color: #95390499">
                                        <th scope="row">4</th>
                                        <td>0 = 0%<br>
                                            คะแนน = 0</td>
                                        <td>1 = 25%<br>
                                            คะแนน = 1.25</td>
                                        <td>2 = 50%<br>
                                            คะแนน = 2.5</td>
                                        <td>3 = 75%<br>
                                            คะแนน = 3.75</td>
                                        <td>4 = 100%<br>
                                            คะแนน = 5</td>
                                        <td></td>
                                    </tr>
                                    <tr style="background-color: #95390444">
                                        <th scope="row">5</th>
                                        <td>0 = 0%<br>
                                            คะแนน = 0</td>
                                        <td>1 = 20%<br>
                                            คะแนน = 1</td>
                                        <td>2 = 40%<br>
                                            คะแนน = 2</td>
                                        <td>3 = 60%<br>
                                            คะแนน = 3</td>
                                        <td>4 = 80%<br>
                                            คะแนน = 4</td>
                                        <td>5 = 100%<br>
                                            คะแนน = 5</td>
                                    </tr>
                                    <tr style="background-color: #95390499">
                                        <th scope="row">หน่วยนับเป็น<br>
                                            บาท</th>
                                        <td colspan="6"> เทียบความสําเร็จของค่าเป้าหมายตามที่ตั้งไว้เป็น 100% = 5 คะแนน
                                            หากดําเนินการได้น้อยกว่าเป้าหมาย จะคํานวณความสําเร็จตามสัดส่วน<br>
                                            อาทิ เป้าหมาย 10,000 ทําได้ 2,000 = 2,000 % 100 / 10,000 = 2096
                                            จากนั้นนํา 209% คํานวณคะแนน โดย 20 % 5 / 100 = 1 คะแนน</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>