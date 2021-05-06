<?php   
    session_start();
// การเอาค่า SESSION
// echo "My name is " . $_SESSION["name"] . ".<br> " . $_SESSION["id"] ; ?>
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
                <h4><?php echo $_SESSION["name"] ?></h4>
                <div class="m-2"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                    class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
            </div>
        </div>
        </div>
    </nav>
    <div>
        <div class="d-flex">
            <div class="col-2" style="background-color: #263238bb">
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white;background-color: #263238ee">
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
                                        <th scope="col">หน่วยนับค่าเป้าหมาย</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color: #8acfe044">
                                        <th scope="row">1</th>
                                        <td>จํานวนนักศึกษาระดับบัณฑิตศึกษาภายโต้การดูแลของท่านที่ได้รับการ<br>
                                            สนับสนุนที่มีคุณภาพมากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                        <td>ท่านได้เป็นที่ปรึกษาที่ดูแลนักศึกษาและทําให้นักศึกษา<br>
                                            มีผลงานตีพิมพ์มากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                        <td>คน</td>
                                    </tr>
                                    <tr style="background-color: #8acfe099">
                                        <th scope="row">2</th>
                                        <td>จํานวนโครงการวิจัยในรูปแบบแผนบูรณาการงานวิจัย <br>
                                            (Research program) </td>
                                        <td>อาจารย์ได้มีส่วนร่วมโนการทําโครงการวิจัยที่เกิดจาก<br>
                                            การบูรณาการงานวิจัยร่วมกับคณะอื่น</td>
                                        <td>โครงการ</td>
                                    </tr>
                                    <tr style="background-color: #8acfe044">
                                        <th scope="row">3</th>
                                        <td>จํานวนโครงการที่ได้เริ่มดําเนินการการสร้างนวัตกรรมเชิงพาณิชย์ </td>
                                        <td>อาจารย์มีโครงการหรือกิจกรรมที่ตําเนินการไปสู่การเกิด <br>
                                            นวัตกรรมที่ทําให้เกิตรายได้แก่คณะในอนาคด</td>
                                        <td>โครงการ</td>
                                    </tr>

                                    <tr style="background-color: #8acfe099">
                                        <th scope="row">4</th>
                                        <td>การตํารงตําแหน่งทางวิชาการที่สูงขึ้น </td>
                                        <td>ในรอบ 1 มกราคม 2564 - 31 ธันวาคม 2564 อาจารย์<br>
                                            ได้รับการตั้งแต่งให้ตํารงตําแหน่งทางวิชาการที่สูงขึ้น <br>
                                            โดยนับวันที่สภามหาวิทยาลัยเห็นชอบ</td>
                                        <td>ศ.
                                            รศ.
                                            ผศ.</td>
                                    </tr>
                                    <tr style="background-color: #8acfe044">
                                        <th scope="row">5</th>
                                        <td>จํานวนเงินรายได้จากการบริการวิชาการ (จากการทําสัญญา)</td>
                                        <td>มีโครงการที่ทําสัญญาและเกิดรายได้จากการบริหาร<br>
                                            วิชาการให้แก่คณะ</td>
                                        <td>บาท</td>
                                    </tr>
                                    <tr style="background-color: #8acfe099">
                                        <th scope="row">6</th>
                                        <td>จำนวนโครงการบริการวิชาการที่ทําให้กับชุมชน </td>
                                        <td>มีโครงการที่ไปบริการวิชาการให้กับชุมชน</td>
                                        <td>โครงการ</td>
                                    </tr>


                                    <tr style="background-color: #8acfe044">
                                        <th scope="row">7</th>
                                        <td>จํานวนผลงานที่ได้รับทุนสนับสนุนจากภายนอกที่ถูกนําไปใช้ประโยชน์<br>
                                            (CSV)</td>
                                        <td>มีโครงการที่สามารถนำงบประมาณจากหน่วยงานภายนอก<br>
                                            ไปช่วยสังคม โดยใช้ผลงานหรือองค์ความรู้ที่อาจารย์ผลิต<br>
                                            ขึ้นมา</td>
                                        <td>ผลงาน/ชิ้น</td>
                                    </tr>
                                    <tr style="background-color: #8acfe099">
                                        <th scope="row">8</th>
                                        <td>จํานวนผลงานวิจัย/สิ่งประดิษฐ์/นวัตกรรมด้าน Digital Technology </td>
                                        <td>ต้องมีผลงานด้าน Digital Technology</td>
                                        <td>ผลงาน/ชิ้น</td>
                                    </tr>
                                    <tr style="background-color: #8acfe044">
                                        <th scope="row">9</th>
                                        <td>จํานวนนักศึกษาต่างขาติทั้งแบบปกติและ non-degree ภายใต้การดูแล<br>
                                            ของท่าน ทั้ง outbound และ Inbound ระดับปริญญาตรีและระดับ<br>
                                            บัณฑิตศึกษา </td>
                                        <td>ท่านได้เป็นที่ปรึกษาที่ตูแลนักศึกษาต่างชาติทั้งแบบปกติ<br>
                                            และ non-degree ภายใต้การดูแลของท่าน ทั้ง outbound <br>
                                            และ Inbound ระดับปริญญาตรีและระดับบัณฑิตศึกษา</td>
                                        <td>คน</td>
                                    </tr>

                                    <tr style="background-color: #8acfe099">
                                        <th scope="row">10</th>
                                        <td>โครงการฟาร์มอัจฉริยช (Smart Farm) </td>
                                        <td>มีโครงการหรือกิจกรรมที่เกี่ยวกับด้านฟาร์มอัจอริยะโดย<br>
                                            โครงการนั้นต้องถูกนํามาใช้ในการเรียนการสยน การทําวิจัย <br>
                                            และการบริการวิชาการ ครบทั้ง 3 ด้าน</td>
                                        <td>โครงการ</td>
                                    </tr>
                                    <tr style="background-color: #8acfe044">
                                        <th scope="row">11</th>
                                        <td>จํโครงการเมืองอัจฉริยะ (Smart City) </td>
                                        <td>มีโครงการหรือกิจกรรมที่เกี่ยวกับด้านเมืองอัจฉริยะโดย<br>
                                            โครงการบั้นต้องถูกนํามาใช้ในการเรียนการสอน การทําวิจัย <br>
                                            และการบริการวิชาการ ครบทั้ง 3 ด้าน</td>
                                        <td>โครงการ</td>
                                    </tr>
                                    <tr style="background-color: #8acfe099">
                                        <th scope="row">12</th>
                                        <td>จำนวนบทเรียนออนไลน์สะสม </td>
                                        <td>มีการอัดวิดีโอบทเรียน เพื่อให้ นศ. สามารถตูย้อนหลังได้ </td>
                                        <td>บาท</td>
                                    </tr>
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
                                    <tr style="background-color: #7BD97B44">
                                        <th scope="row">1</th>
                                        <td>จํานวนโครงการที่ได้เริ่มดําเนินการ (การสร้างนวัตกรรมเชิงพาณิชย์)</td>
                                        <td>โครงการหรือกิจกรรมที่ดําเนินการไปสู่การเกิด<br>
                                            นวัตกรรมที่ทําให้เกิดรายได้แก่คณะในอนาคต</td>
                                        <td>โครงการ</td>
                                    </tr>
                                    <tr style="background-color: #7BD97B99">
                                        <th scope="row">2</th>
                                        <td>จํานวนเงินรายได้จากการบริการวิชาการ (จากการทําสัญญา) </td>
                                        <td>โครงการที่ทําสัญญาและเกิดรายได้จากการบริการ<br>
                                            วิชาการให้แก่คณะ</td>
                                        <td>บาท</td>
                                    </tr>
                                    <tr style="background-color: #7BD97B44">
                                        <th scope="row">3</th>
                                        <td>จํานวนโครงการบริการวิชาการที่ทําให้กับชุมชน </td>
                                        <td>โครงการที่ไปบริการวิชาการให้กับขุมชน</td>
                                        <td>โครงการ</td>
                                    </tr>

                                    <tr style="background-color: #7BD97B99">
                                        <th scope="row">4</th>
                                        <td>จํานวนผลงานวิจัย/สิ่งประดิษฐ์/นวัตกรรม <br>
                                            ด้าน Digital Technolagy</td>
                                        <td>ผลงานด้าน Digital Technology</td>
                                        <td>ผลงาน</td>
                                    </tr>
                                    <tr style="background-color: #7BD97B44">
                                        <th scope="row">5</th>
                                        <td>จํานวนงานสะสมที่ได้รับการพัฒนาใหม่หรือปรับปรุง</td>
                                        <td>งานที่มีการพัฒนาขั้นตอน/ระบบ/วิธีการทํางาน<br>
                                            หรืองานที่พัฒนาขึ้นมาใหม่</td>
                                        <td>ผลงาน</td>
                                    </tr>
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