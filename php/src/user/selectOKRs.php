<?php
session_start();

// คำสั่งต่อกับ ไฟล์ database นี
$db = new SQLite3('../database.db');
$results = $db->query('SELECT * FROM okr_teaching;');

// get input session
if (isset($_POST['submit'])) {
    $inputName = $_POST["input-name"];
    $inputAf = $_POST["input-af"];
    $inputPosition = $_POST["input-position"];
    $projselect = $_POST['redio-btn'];
    // echo $projselect;
    $sessionID = $_SESSION["id"];
    $value = "t" . $projselect[0];

    $test = $projselect[0];

    $targetvalue = $_POST[$value];
    $num = (int)$targetvalue;
  
    $_SESSION["inputName"] = $inputName;
    $_SESSION["inputAf"] = $inputAf;
    $_SESSION["inputPosition"] = $inputPosition;
    $_SESSION['projselect'] = $projselect;
    $_SESSION['tvalue'] = $targetvalue;

    $targetVal = $_SESSION['tvalue'];
    $idUser = $_SESSION['id'];

    $okr = $db->prepare("UPDATE user_support SET target_value='$targetVal', pno=$test WHERE id='$idUser'")->execute();

    header("Location: pdf.php");
}

       
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
                <h4><?php echo $_SESSION["name"] ?></h4>
            </div>
        </div>
    </nav>
    <div>
        <div class="d-flex">
            <div class="col-2" style="background-color: #263238bb">
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white;">
                    <i class="fas fa-house-user"></i>
                    <h6 class="m-2"><a href="./homeUser.php" style="color: #FFFFFF;text-decoration: none;">หน้าหลัก</a>
                    </h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white;background-color: #263238ee">
                    <i class=" fas fa-check-square ml-2"></i>
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
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-user-circle"></i>
                    <h6 class="m-2"><a href="./supervisor.php" style="color: #FFFFFF;text-decoration: none;">หัวหน้างาน</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white">
                    <a href="../index.php" style="color: #FFFFFF;text-decoration: none;">ออกจากระบบ</a>
                </div>
            </div>

            <!-- body  -->
            <div class="col-10" style="background-color: #eee">


                <h1 style="margin: 10px; font-size: 30px;">ท่านกำลังดำเนินการเลือกหัวข้อ OKR</h1>
                <div id="steps-bar" class="d-grid gap-2 col-6 mx-auto">
                    <div class="steps-bar">
                        <!--  -->
                        <table class="d-grid gap-2 col-6 mx-auto">
                            <tr>
                                <td>
                                    <div class="bg-success pe-4 ps-4 pt-3 pb-3 text-center" style="border-radius: 50%; width: 4.5rem; height: 4rem;  color: white;">
                                        1
                                    </div>
                                </td>
                                <td>
                                    <div class="bg-success" style="width: 6rem; height: 0.3rem; margin-left: -1rem">
                                    </div>
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
                                <td class="text-center" colspan="3">กำลังรอ<br />ดำเนินการ</td>
                                <td>เสร็จสิ้น</td>
                            </tr>
                        </table>

                        <!--  -->
                    </div>
                </div>

                <div style="background-color: white;border-radius: 10px;padding: 10px;  margin-left: 90px;margin-right: 90px;margin: 20px;">
                    <form method="post">
                        <div>
                            <p style=" font-weight: bold;">ส่วนที่ 1 : ข้อมูลรายบุคคล</p>
                            <div class="input-group mb-3" style="width: 600px; margin-top: 0px;">
                                <span class="input-group-text" id="basic-addon1">ชื่อ - สกุล:</span>
                                <input type="text" class="form-control" name="input-name" aria-describedby="basic-addon1" placeholder="สมชาย บุญเกิด" required value="<?php echo $_SESSION['name'] ?>">
                            </div>
                            <div class="input-group mb-3" style="width: 900px;">
                                <span class="input-group-text" id="basic-addon1">สังกัด:</span>
                                <input type="text" class="form-control" name="input-af" aria-describedby="basic-addon1" placeholder="สาขาวิชาคอมพิวเตอร์" required>

                                <span class="input-group-text" id="basic-addon1" style="margin-left: 50px;">ตำแหน่ง:</span>
                                <input type="text" class="form-control" name="input-position" aria-describedby="basic-addon1" placeholder="ผ.ศ." required>
                            </div>
                        </div>



                        <div>
                            <p style=" font-weight: bold;">ส่วนที่ 2 : เลือก OKR</p>
                            <div>

                                <table>
                                    <thead>
                                        <tr style="text-align: center; background-color: #8acfe0">
                                            <th scope="col"></th>
                                            <th scope="col">ลำดับ</th>
                                            <th scope="col">หัวข้อ</th>
                                            <th scope="col">คำอธิบาย</th>
                                            <th scope="col">จำนวน</th>
                                            <th scope="col">หน่วยนับค่าเป้าหมาย</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                       


                                        <!-- fetch data in table -->
                                        <?php while ($row = $results->fetchArray()) { ?>

                                            <tr style="background-color: #8acfe044">

                                                <td><input type="radio" name="redio-btn" id="projnumber" value="<?php echo "{$row['pno']}. {$row['topics']}" ?>"></td>
                                                <td scope="row" name="pno" id="pno"> <?php echo $row['pno'] ?></td>
                                                <td name="topic"><?php echo $row['topics'] ?></td>
                                                <td name="description"><?php echo $row['description'] ?></td>
                                                <th scope="row">
                                                    <input type="text" name="t<?php echo $row['pno'] ?>" id="<?php echo $row['pno'] ?>"
                                                    style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;margin-right: 7px;">
                                                </th>
                                                <td><?php echo $row['unit'] ?></td>


                                            </tr>
                                    

                                        <?php } ?>
                                        <!-- fetch data end -->

                                        <style>
                                            input::-webkit-outer-spin-button,
                                            input::-webkit-inner-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }
                                        </style>

                                    </tbody>

                                </table>
                                <p style="margin-left: 50px; margin-top: 20px;">กรุณาตรวจสอบข้อมูลของท่านอีกครั้งก่อนกดยืนยันข้อมูล</p>

                                <div class="d-grid gap-2 col-1 mx-auto">
                                    <button class="btn p-2 mt-3" style="background-color: #953904; color: white;" type="submit" name="submit">ยืนยัน</button>
                                    <!-- <input type="submit" class="btn btn-success" style="width: fit-content;" name="submit" value="ยืนยัน"></input> -->
                                </div>
                    </form>

                </div>


            </div>

        </div>
    </div>
    </div>
    </div>
</body>


</html>