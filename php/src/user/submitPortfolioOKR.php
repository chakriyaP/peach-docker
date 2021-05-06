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

                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white" style="color: white">
                    <i class="fas fa-tasks ml-2"></i>
                    <h6 class="m-2"><a href="./changOKR.php" style="color: #FFFFFF;text-decoration: none;">เปลี่ยนหัวข้อ
                            OKR</a></h6>
                </div>
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white;background-color: #263238ee">
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
                <div class="card mt-2 me-2 ms-2">
                    <div class="card-header" style="background-color: #fef5ed">
                        <h3 class="fw-bolder mt-1">การยื่นผลงาน</h3>
                        <h6>ตัวชี้วัด : จำนวนโครงการบริการวิชาการที่ทำให้ชุมชน</h6>
                    </div>
                    <div class="p-4 card-body">
                        <div class="p-3 row d-flex justify-content-around">
                            <div class="p-4 border border-3 rounded-pill border-danger">
                                <h5 class="fw-bolder">เปอร์เซ็นต์ความคืบหน้า</h5>
                                <h6>ตัวชี้วัด : จำนวนโครงการบริการวิชาการที่ทำให้ชุมชน</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-success progress-bar" role="progressbar"
                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        40%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 border-bottom border-3 border-danger">
                            <h4 class="fw-bolder">
                                <span><i class="fas fa-greater-than"></i></span>&nbsp&nbspยื่นผลงาน
                            </h4>
                        </div>
                        <div class="row justify-content-evenly">
                            <div class="pt-4 col-4">
                                <form>
                                    <div class="form-group">
                                        <label for="inputTargetDetail"><span>
                                                <h6 class="fw-bolder">รายละเอียดเป้าหมาย*</h6>
                                            </span></label>
                                        <textarea class="form-control" id="targetDetail" rows="5"
                                            placeholder="บริการวิชาการให้กับชุมชนโคกสูง"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="pt-4 col-4">
                                <form>
                                    <div class="form-group">
                                        <label for="inputNumberOfProject"><span>
                                                <h6 class="fw-bolder">ระบุจำนวน (โครงการ)*</h6>
                                            </span></label>
                                        <input type="text" class="form-control" id="numberOfProject" placeholder="1" />
                                    </div>
                                    <div class="pt-4 form-group">
                                        <label for="chooseFileProject"><span>
                                                <h6 class="fw-bolder">เพิ่มไฟล์*</h6>
                                            </span></label>
                                        <input type="file" class="form-control-file" id="fileProject" />
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="pt-4 text-center">
                                    <button type="button" class="btn btn-lg btn-danger">
                                        ยื่นผลงาน
                                    </button>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <table class="table">
                                    <thead class="text-center" style="background-color: #8acfe0">
                                        <tr>
                                            <th scope="col">ครั้งที่</th>
                                            <th scope="col">รายละเอียด</th>
                                            <th scope="col">จำนวน</th>
                                            <th scope="col">แก้ไข</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr style="background-color: #8acfe044">
                                            <th scope="row">1</th>
                                            <td>บริการวิชาการให้กับชุมชนโคกสูง</td>
                                            <td>2 คน</td>
                                            <td>
                                                <span><a href="#">ลบ</a></span>
                                            </td>
                                        </tr>
                                        <tr style="background-color: #8acfe099">
                                            <th scope="row">&nbsp&nbsp</th>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                        </tr>
                                        <tr style="background-color: #8acfe044">
                                            <th scope="row">&nbsp&nbsp</th>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                        </tr>

                                        <tr style="background-color: #8acfe099">
                                            <th scope="row">&nbsp&nbsp</th>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>