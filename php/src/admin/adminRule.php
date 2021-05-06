<?php
$db = new SQLite3('../database.db');

$support = $db->query('SELECT s1.id,s1.name as name_super, s2.id_super,s2.name
    FROM user_support s1
    INNER JOIN user_support s2 
    ON s1.id = s2.id_super

    ');

if (isset($_POST['add'])) {
    // echo $_POST['titleName'];
    // echo $_POST['firstname'];
    // echo $_POST['lastname'];
    
} else if (isset($_POST['search'])) {
    // echo "search";
} else {
    // echo "else";
}






?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/ae382fbf2e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>


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
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white; ">
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
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white;background-color: #263230ee">
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
                        <h5 class="fw-bolder mt-1">
                            กำหนดหัวหน้างาน
                        </h5>
                    </div>

                    <div class="card-body">
                        <table class="table mt-4">
                            <!-- แถวที่ 1 -->
                            <thead class="text-start" style="background-color: #94F27D">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">บุคลากร</th>
                                    <th scope="col">หน้าที่รับผิดชอบ</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php while ($row = $support->fetchArray()) { ?>

                                <tr class="accordion-toggle" id="accordion1" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne" data-bs-parent="#accordion1"
                                    href="#collapseOne" style="background-color: #E0FFD8">
                                    <td class="text-start expand-button"><i class="fas fa-sort-down mt-md-3"></i></td>
                                    <td class="fw-bolder text-start"><i class="fas fa-user"></i>
                                        <?php echo $row['name_super'] ?>
                                        <br>
                                        <p class="fw-lighter text-start">หัวหน้างานแผนยุทธศาสตร์และทรัพยากรบุคลากร</p>
                                    </td>
                                    <td class="fw-bolder text-start">หัวหน้างาน
                                        <br>
                                        <p class="fw-lighter text-start">งานแผนยุทธศาสตร์และทรัพยากรบุคลากร</p>
                                    </td>
                                    <td class="text-start">
                                        <button type="button" class="btn btn-danger mt-2 ms-4">ลบ</button>
                                    </td>

                                </tr>


                                <tr class="hide-table-padding">
                                    <div id="collapseOne" class="collapse">
                                        <td class="text-center"><u>บุคลากรในหน่วยงาน</u></td>
                                        <td>

                                            <!-- สมาชิกในหน่วยงาน 1 -->
                                            <div class="row">
                                                <div class="col-7 fst-normal text-start"><i class="fas fa-user"></i>
                                                    <?php echo $row['name'] ?>
                                                    <br>
                                                    <p class="fst-normal text-start">หน่วยประกันคุณภาพ</p>
                                                </div>

                                            </div>

                                        </td>
                                        </td>
                                    </div>
                                    <td class="text-start" colspan="3">
                                        <div>
                                            <button type="button" class="btn btn-danger mt-2 ms-4">ลบ</button>
                                        </div>

                                    </td>
                                </tr>
                                <!-- เพิ่มบุคลากรในหน่วยงาน -->
                                <tr class="hide-table-padding" style="border: white;">
                                    <td></td>
                                    <td></td>
                                    <td class="text-start" colspan="3">
                                        <button type="button" class="btn btn-primary mt-2 mb-3" data-toggle="modal"
                                            data-target="#addPersonal">เพิ่มบุคลากร</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>


                        </table>
                        <br><br>

                        <div class="text-center d-grid d-md-block justify-content-md-center">
                            <h5 class="fw-bolder text-center">โปรดตรวจสอบข้อมูลอีกครั้ง หากข้อมูลถูกต้องให้กด "บันทึก"
                                เพื่อบันทึกข้อมูลเข้าสู่ระบบ<br>หรือหากท่านต้องการยกเลิกให้กดปุ่ม "ยกเลิก"
                                เพื่อยกเลิกการบันทึกข้อมูล
                            </h5>
                            <br>
                            <button type="button" class="btn btn-primary btn-lg">บันทึก</button>
                            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>

                        </div>

                        <!-- Modal 1 for supervisor-->
                        <div class="modal fade" id="addSupervisor" tabindex="-1" aria-labelledby="EpicModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="EpicModalLabel">เพิ่มหัวหน้างาน</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div>
                                            <form class="container-fluid" method="post">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="form-group text-left">
                                                                    <label for="title-name">คำนำหน้าชื่อ</label></br>
                                                                    <select name="form-select" id="titleNameSelect"
                                                                        class="mt-2" name="titleNameSelect">
                                                                        <option selected></option>
                                                                        <option value="1">นาย</option>
                                                                        <option value="2">นาง</option>
                                                                        <option value="3">นางสาว</option>
                                                                    </select>
                                                                </div>
                                                            </th>

                                                            <th>
                                                                <div class="form-group text-left">
                                                                    <label for="fname">ชื่อ</label></br>
                                                                    <input class="form-control-sm mt-1" type="text"
                                                                        name="firstname" />

                                                                </div>
                                                            </th>

                                                            <th>
                                                                <div class="form-group text-left">
                                                                    <label for="lname">นามสกุล</label></br>
                                                                    <input class="form-control-sm mt-1" type="text"
                                                                        name="lastname" />

                                                                </div>
                                                            </th>

                                                            <th>
                                                                <div>
                                                                    <button class="btn btn-primary m-2" type="submit"
                                                                        name="submit">ค้นหา
                                                                        <i class="fas fa-search ms-2"></i>
                                                                    </button>

                                                                </div>
                                                            </th>
                                                        </tr>

                                                        <tr>
                                                            <th colspan="2">
                                                                <div class="form-group text-left">
                                                                    <label for="affiliation">สังกัดงาน</label></br>
                                                                    <select name="form-select" id="affiliationSelect"
                                                                        class="mt-2">
                                                                        <option selected>
                                                                            งานปฎิบัติการและบริการทางวิศวกรรม</option>
                                                                        <option value="1">
                                                                            งานการศึกษาและพัฒนาทักษะการเรียนรู้</option>
                                                                        <option value="2">
                                                                            งานแผนยุทธศาสตร์และทรัพยากรบุคลากร</option>
                                                                        <option value="3">งานวิจัย นวัตกรรม
                                                                            และวิเทศน์สัมพันธ๋</option>
                                                                    </select>
                                                                </div>
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex flex-row justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">เพิ่มหัวหน้างาน</button>

                                        <button type="button" class="btn btn-secondary">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal 2 for personal-->
                <div class="modal fade" id="addPersonal" tabindex="-1" aria-labelledby="EpicModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form class="container-fluid" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EpicModalLabel">เพิ่มบุคลากร</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>

                                <div class="modal-body">
                                    <div>

                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <div class="form-group text-left">
                                                            <label for="affiliation">สังกัดงาน</label></br>
                                                            <div class="ms-4 mt-2">
                                                                <p class="fw-normal">งานแผนยุทธศาสตร์และทรัพยากรบุคลากร
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th colspan="2">
                                                        <div class="form-group text-left">
                                                            <label for="affiliation">หัวหน้างาน</label></br>
                                                            <div class="ms-4 mt-2">
                                                                <p class="fw-normal">นายกันภัย สูญสิ้นลมหายใจ</p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        <div class="form-group text-left">
                                                            <label for="title-name">คำนำหน้าชื่อ</label></br>
                                                            <select name="titleName" id="titleNameSelect" class="mt-2">
                                                                <option selected></option>
                                                                <option value="นาย">นาย</option>
                                                                <option value="นาง">นาง</option>
                                                                <option value="นางสาว">นางสาว</option>
                                                            </select>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="form-group text-left">
                                                            <label for="fname">ชื่อ</label></br>
                                                            <input class="form-control-sm mt-1" type="text"
                                                                name="firstname" />

                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="form-group text-left">
                                                            <label for="lname">นามสกุล</label></br>
                                                            <input class="form-control-sm mt-1" type="text"
                                                                name="lastname" />

                                                        </div>
                                                    </th>

                                                    <th class="pt-2">
                                                        <div>
                                                            <button class="btn btn-primary m-2" type="submit"
                                                                name="search">ค้นหา
                                                                <i class="fas fa-search ms-2"></i>
                                                            </button>

                                                        </div>
                                                    </th>
                                                </tr>

                                            </thead>
                                        </table>

                                    </div>
                                </div>

                                <div class="modal-footer d-flex flex-row justify-content-center align-items-center">
                                    <button type="submit" class="btn btn-primary" name="add">เพิ่มบุคลากร</button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        name="cancel">ยกเลิก</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    </div>
    </div>
    </div>
</body>




</html>