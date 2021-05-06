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
                <h4>ชื่อผู้ใช้</h4>
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

                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white;background-color: #263238ee">
                    <i class="fas fa-tasks ml-2"></i>
                    <h6 class="m-2"><a href="./changOKR.php" style="color: #FFFFFF;text-decoration: none;">เปลี่ยนหัวข้อ
                            OKR</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-paper-plane ml-2"></i>
                    <h6 class="m-2"><a href="./submitPortfolioOKR.php"
                            style="color: #FFFFFF;text-decoration: none;">ยื่นผลงาน</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-user-circle"></i>
                    <h6 class="m-2"><a href="./supervisor.php"
                            style="color: #FFFFFF;text-decoration: none;">หัวหน้างาน</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white">
                    <a href="../index.php" style="color: #FFFFFF;text-decoration: none;">ออกจากระบบ</a>
                </div>
            </div>
            <!-- body  -->
            <div class="col-10" style="background-color: #eee">


                <h1 style="margin: 10px; font-size: 30px;">ท่านกำลังดำเนินการเปลี่ยนหัวข้อ OKR</h1>
                <div id="steps-bar" class="d-grid gap-2 col-6 mx-auto">
                    <div class="steps-bar">
                        <!--  -->
                        <table class="d-grid gap-2 col-6 mx-auto">
                            <tr>
                                <td>
                                    <div class="bg-success pe-4 ps-4 pt-3 pb-3 text-center"
                                        style="border-radius: 50%; width: 4.5rem; height: 4rem;  color: white;">
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
                <div
                    style="background-color: white;border-radius: 10px;padding: 10px;  margin-left: 90px;margin-right: 90px;margin: 20px;">

                    <div>
                        <p style=" font-weight: bold;">ส่วนที่ 1 : ข้อมูลรายบุคคล</p>
                        <div class="input-group mb-3" style="width: 600px; margin-top: 0px;">
                            <span class="input-group-text" id="basic-addon1">ชื่อ - สกุล:</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3" style="width: 900px;">
                            <span class="input-group-text" id="basic-addon1">สังกัด:</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1">

                            <span class="input-group-text" id="basic-addon1" style="margin-left: 50px;">ตำแหน่ง:</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1">
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
                                        <th scope="col">หน่วยนับค่าเป้าหมาย</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="OKR-line1" style="background-color: #8acfe044">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-1"></th>
                                        <td>1</td>
                                        <td>จํานวนนักศึกษาระดับบัณฑิตศึกษาภายโต้การดูแลของท่านที่ได้รับการ
                                            สนับสนุนที่มีคุณภาพมากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                        <td>ท่านได้เป็นที่ปรึกษาที่ดูแลนักศึกษาและทําให้นักศึกษา
                                            มีผลงานตีพิมพ์มากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;margin-right: 7px;">
                                            <br>คน
                                        </td>
                                    </tr>
                                    <tr id="OKR-line2" style="background-color: #8acfe099">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-2"></th>
                                        <td>2</td>
                                        <td>จํานวนโครงการวิจัยในรูปแบบแผนบูรณาการงานวิจัย
                                            (Research program)</td>
                                        <td>อาจารย์ได้มีส่วนร่วมโนการทําโครงการวิจัยที่เกิดจาก
                                            การบูรณาการงานวิจัยร่วมกับคณะอื่น</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;">โครงการ
                                        </td>
                                    </tr>
                                    <tr id="OKR-line3" style="background-color: #8acfe044">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-3"></th>
                                        <td>3</td>
                                        <td>จํานวนโครงการที่ได้เริ่มดําเนินการการสร้างนวัตกรรมเชิงพาณิชย์</td>
                                        <td>อาจารย์มีโครงการหรือกิจกรรมที่ตําเนินการไปสู่การเกิดนวัตกรรมที่ทําให้เกิตรายได้แก่คณะในอนาคด
                                        </td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;">โครงการ
                                        </td>
                                    </tr>
                                    <tr id="OKR-line4" style="background-color: #8acfe099">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-4"></th>
                                        <td>4</td>
                                        <td>การตํารงตําแหน่งทางวิชาการที่สูงขึ้น</td>
                                        <td>ในรอบ 1 มกราคม 2564 - 31 ธันวาคม 2564
                                            อาจารย์ได้รับการตั้งแต่งให้ตํารงตําแหน่งทางวิชาการที่สูงขึ้น
                                            โดยนับวันที่สภามหาวิทยาลัยเห็นชอบ
                                        </td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>ศ.
                                            รศ.
                                            ผศ.
                                        </td>
                                    </tr>
                                    <tr id="OKR-line5" style="background-color: #8acfe044">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-5"></th>
                                        <td>5</td>
                                        <td>จํานวนเงินรายได้จากการบริการวิชาการ (จากการทําสัญญา)</td>
                                        <td>มีโครงการที่ทําสัญญาและเกิดรายได้จากการบริหารวิชาการให้แก่คณะ</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>บาท
                                        </td>
                                    </tr>
                                    <tr id="OKR-line6" style="background-color: #8acfe099">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-6"></th>
                                        <td>6</td>
                                        <td>จำนวนโครงการบริการวิชาการที่ทําให้กับชุมชน </td>
                                        <td>มีโครงการที่ไปบริการวิชาการให้กับชุมชน</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>โครงการ
                                        </td>
                                    </tr>
                                    <tr id="OKR-line7" style="background-color: #8acfe044">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-7"></th>
                                        <td>7</td>
                                        <td>จํานวนผลงานที่ได้รับทุนสนับสนุนจากภายนอกที่ถูกนําไปใช้ประโยชน์ (CSV) </td>
                                        <td>มีโครงการที่สามารถนำงบประมาณจากหน่วยงานภายนอกไปช่วยสังคม
                                            โดยใช้ผลงานหรือองค์ความรู้ที่อาจารย์ผลิตขึ้นมา</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>ผลการ/ชิ้น
                                        </td>
                                    </tr>
                                    <tr id="OKR-line8" style="background-color: #8acfe099">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-8"></th>
                                        <td>8</td>
                                        <td>จํานวนผลงานวิจัย/สิ่งประดิษฐ์/นวัตกรรมด้าน Digital Technology </td>
                                        <td>ต้องมีผลงานด้าน Digital Technology</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>ผลการ/ชิ้น
                                        </td>
                                    </tr>
                                    <tr id="OKR-line9" style="background-color: #8acfe044">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-9"></th>
                                        <td>9</td>
                                        <td>จํานวนนักศึกษาต่างขาติทั้งแบบปกติและ non-degree ภายใต้การดูแลของท่าน ทั้ง
                                            outbound และ Inbound
                                            ระดับปริญญาตรีและระดับบัณฑิตศึกษา</td>
                                        <td>ท่านได้เป็นที่ปรึกษาที่ตูแลนักศึกษาต่างชาติทั้งแบบปกติและ non-degree
                                            ภายใต้การดูแลของท่าน ทั้ง
                                            outbound และ Inbound ระดับปริญญาตรีและระดับบัณฑิตศึกษา</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>
                                            คน
                                        </td>
                                    </tr>
                                    <tr id="OKR-line10" style="background-color: #8acfe099">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-10"></th>
                                        <td>10</td>
                                        <td>โครงการฟาร์มอัจฉริยะ (Smart Farm) </td>
                                        <td>มีโครงการหรือกิจกรรมที่เกี่ยวกับด้านฟาร์มอัจอริยะโดยโครงการนั้นต้องถูกนํามาใช้ในการเรียนการสยน
                                            การทําวิจัย และการบริการวิชาการ ครบทั้ง 3 ด้าน</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>
                                            โครงการ
                                        </td>
                                    </tr>
                                    <tr id="OKR-line11" style="background-color: #8acfe044">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-11"></th>
                                        <td>11</td>
                                        <td>โครงการเมืองอัจฉริยะ (Smart City) </td>
                                        <td>มีโครงการหรือกิจกรรมที่เกี่ยวกับด้านฟาร์มอัจอริยะโดยโครงการนั้นต้องถูกนํามาใช้ในการเรียนการสยน
                                            การทําวิจัย และการบริการวิชาการ ครบทั้ง 3 ด้าน</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>
                                            โครงการ
                                        </td>
                                    </tr>
                                    <tr id="OKR-line12" style="background-color: #8acfe099">
                                        <th scope="row"><input class="form-check-input" type="radio" value=""
                                                id="radio-12"></th>
                                        <td>12</td>
                                        <td>จำนวนบทเรียนออนไลน์สะสม</td>
                                        <td>มีการอัดวิดีโอบทเรียน เพื่อให้ นศ. สามารถดูย้อนหลังได้</td>
                                        <td>
                                            <input type="number" id="input-unit"
                                                style="border-radius: 10px; border: 0.01px solid black; width: 60px;padding: 0.7px;"><br>
                                            บทเรียน
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="margin-left: 50px;">กรุณาตรวจสอบข้อมูลของท่านอีกครั้งก่อนกดยืนยันข้อมูล</p>


                        </div>
                        <div class="d-grid gap-2 col-1 mx-auto">
                            <button type="button" class="btn btn-success" style="width: fit-content;">ยืนยัน</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>