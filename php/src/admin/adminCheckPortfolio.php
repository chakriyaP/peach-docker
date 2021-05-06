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
        <div class="row">
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
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white; background-color: #263230ee">
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
                        <h5 class="fw-bolder mt-1">ตรวจสอบการยื่นผลงาน</h5>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-evenly">
                            <div class="col-3 p-4">
                                <div class="card">
                                    <div class="card-body text-center" style="background-color: #8acfe044">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                <i class="fas fa-chalkboard-teacher"></i><br />
                                                สายผู้สอน
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #8acfe0"></div>
                                </div>
                            </div>

                            <div class="col-3 p-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                <i class="fas fa-users"></i> <br />
                                                สายสนับสนุน
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #7bd97b"></div>
                                </div>
                            </div>
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
                                                    <label for="id-employee">ชื่อ</label>
                                                    <input class="form-control" type="date" placeholder="ทั้งหมด" />
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
                            <thead class="text-center" style="background-color: #8acfe0">
                                <tr>
                                    <th scope="col">วันที่</th>
                                    <th scope="col">ชื่อ</th>
                                    <th scope="col">หัวข้อ</th>
                                    <th scope="col">รายละเอียด</th>
                                    <th scope="col">ค่าเป้าหมาย</th>
                                    <th scope="col">ไฟล์</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center" style="background-color: #8acfe044">
                                    <th>20/01/64</th>
                                    <td scope="row">รศ.สมร เสมามร</td>
                                    <td class="text-start">1.จํานวนนักศึกษาระดับบัณฑิตศึกษาภายโต้การดูแลของท่าน<br>
                                        ที่ได้รับการสนับสนุนที่มีคุณภาพมากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                    <td>มีนักศึกษาสอบผ่านเกณฑ์การคัดเลือก
                                        ของ สกอ.</td>
                                    <td>5 คน</td>
                                    <td><a>ดูไฟล์</a></td>
                                </tr>
                                <tr class="text-center" style="background-color: #8acfe044">
                                    <th>20/01/64</th>
                                    <td scope="row">รศ.สมร เสมามร</td>
                                    <td class="text-start">1.จํานวนนักศึกษาระดับบัณฑิตศึกษาภายโต้การดูแลของท่าน<br>
                                        ที่ได้รับการสนับสนุนที่มีคุณภาพมากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                    <td>มีนักศึกษาสอบผ่านเกณฑ์การคัดเลือก
                                        ของ สกอ.</td>
                                    <td>5 คน</td>
                                    <td><a>ดูไฟล์</a></td>
                                </tr>
                                <tr class="text-center" style="background-color: #8acfe044">
                                    <th>20/01/64</th>
                                    <td scope="row">รศ.สมร เสมามร</td>
                                    <td class="text-start">1.จํานวนนักศึกษาระดับบัณฑิตศึกษาภายโต้การดูแลของท่าน<br>
                                        ที่ได้รับการสนับสนุนที่มีคุณภาพมากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                    <td>มีนักศึกษาสอบผ่านเกณฑ์การคัดเลือก
                                        ของ สกอ.</td>
                                    <td>5 คน</td>
                                    <td><a>ดูไฟล์</a></td>
                                </tr>
                                <tr class="text-center" style="background-color: #8acfe044">
                                    <th>20/01/64</th>
                                    <td scope="row">รศ.สมร เสมามร</td>
                                    <td class="text-start">1.จํานวนนักศึกษาระดับบัณฑิตศึกษาภายโต้การดูแลของท่าน<br>
                                        ที่ได้รับการสนับสนุนที่มีคุณภาพมากกว่าเกณฑ์มาตรฐาน สกอ.</td>
                                    <td>มีนักศึกษาสอบผ่านเกณฑ์การคัดเลือก
                                        ของ สกอ.</td>
                                    <td>5 คน</td>
                                    <td><a>ดูไฟล์</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>