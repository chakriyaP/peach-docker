<?php
session_start();

// คำสั่งต่อกับ ไฟล์ database นี
$db = new SQLite3("../database.db");
$projselect = $_SESSION['projselect'];
$pno = $projselect[0];
$okr = $db->prepare("select * from okr_teaching where pno=$pno")->execute()->fetchArray();

$unit = $okr["unit"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>บันทึกความเข้าใจ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/ae382fbf2e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-12">
                <div style="text-align: center;">
                    <img src="https://upload.wikimedia.org/wikipedia/th/a/a6/Engineering_KKU_Thai_Emblem.png" alt="logo-birde" style="width: 3cm; height: 3cm;">

                </div>
                <br />

                <br />
                <div class="container">
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-10" style="font-size: 14px;">
                            <h1 class="text-center fw-normal fs-5" style="font-size: 14px;">บันทึกความเข้าใจการปฏิบัติงานคณะวิศวกรรมศาสตร์ มหาวิทยาลัยขอนแก่น<br />ประจำปี พ.ศ.2564</h1>

                            <p class="text-start lh-base">1. บันทึกระหว่าง<br/>รองศาสตราจารย์รัชพล สันติวรากร คณบดีคณะวิสวกรรมศาสตร์   ผู้มอบหมาย</p>
                                และ
                                <p style="font-weight: bold;"><?php echo "{$_SESSION["name"]} {$_SESSION["inputAf"]}" ?> ผู้รับปฏิบัติ</p>
                            

                            <p class="text-start lh-base">2. บันทึกนี้ใช้สำหรับระยะเวลา 1 ปี เริ่มตั้งแต่วันที่ 1 มกราคม พ.ศ.2564 ถึงวันที่ 31 ธันวาคม พ.ศ.2564</p>
                            <p class="text-start lh-base">3. รายละเอียดของบันทึกนี้ คือ ตัวชี้วัด OKR รายบุลคล</p>
                            <p style="font-weight: bold;">ตัวชี้วัดข้อที่ <?php echo "{$_SESSION['projselect']}" ?></p>
                            <p style="font-weight: bold;">ค่าเป้าหมาย <?php echo "{$_SESSION['tvalue']} {$unit}" ?> </p>
                            <p class="text-start lh-base">4. ข้าพเจ้า รองศาสตราจารย์รัชพล สันติวรากร ในฐานะผู้บังคับบัญชาของ รองศาสตราจารย์รัชพล สันติวรากร
                                ได้พิจารณาและเห็นชอบกับกรอบการปฏิบัติงานของ รองศาสตราจารย์รัชพล สันติวรากร แล้วจึงบันทึกความเข้าใจ
                                การปฏิบัติงานตามที่กำหนดในเอกสาร และข้าพเจ้ายินดีจะให้คำแนะนำ กำกับ และตรวจสอบผลการปฏิบัติงาน
                                ของ รองศาสตราจารย์รัชพล สันติวรากรให้เป็นไปตามบันทึกที่จัดทำขึ้นนี้</p>
                            <p class="text-start lh-base">5. ข้าพเจ้ารองศาสตราจารย์รัชพล สันติวรากร ได้ทำความเข้าใจ บันทึกตามข้อ 3 แล้ว ขอให้บันทึกกับคณบดีคณะวิศวกรรมศาสตร์
                                ว่าจะมุ่งมั่นปฏิบัติงานให้เกิดผลงานที่ดี ตามเป้าหมายของตัวชี้วัดในระดับสูงสุด เพื่อให้เกิดประโยชน์แก่คณะวิศวกรรมศาสตร์
                                ตามที่ให้บันทึกไว้</p>
                            <P class="text-start lh-base">6. ผู้มอบหมาย และ ผู้รับปฏิบัติ ได้เข้าใจบันทึกการปฏิบัติงานและเห็ยพ้องกันแล้ว จึงได้ลงลายมือชื่อไว้เป็นสำคัญ</P>
                            <br>
                            <br>

                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-center">(.....................................................) </p>
                                        <p class="text-center"  style="font-size: 13px;">( รองศาสตราจารย์รัชพล สันติวรากร )</p>
                                        <p class="text-center"  style="font-size: 13px;">คณบดีคณะวิศวกรรมศาสตร์</p>
                                        <p class="text-center">วันที่......เดือน..........พ.ศ.......</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-center">(.....................................................) </p>
                                        <p class="text-center"  style="font-size: 13px;">( <?php echo "{$_SESSION["inputPosition"]} {$_SESSION["name"]} " ?> )</p>
                                        <p class="text-center" style="font-size: 13px;"><?php echo $_SESSION["inputAf"] ?></p>
                                        <p class="text-center">วันที่......เดือน..........พ.ศ.......</p>

                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col col-lg-2">
                                    </div>
                                    <div class="col-md-auto">
                                        <button id="printbtn" onclick="window.print()" type="button" class="btn btn-primary">พิมพ์เอกสาร</button>
                                    </div>
                                    <div class="col col-lg-2">
                                    </div>
                                </div>


                                <div class="col-3">
                                    <br>

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

    </div>
    <style>
        @media print {
            #printbtn {
                display: none;
            }
        }

        body {
            font-size: 16px;
        }
    </style>
</body>