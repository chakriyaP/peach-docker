<?php
session_start();
// echo $_POST['selectStaff'];
$db = new SQLite3('../database.db');
$year = $db->query('SELECT DISTINCT year FROM history_teaching;');
$results = $db->query('SELECT * FROM okr_teaching;');

$selectTopics = $_POST["selectTopics"];
$selectYear = $_POST["selectYear"];

// $selectYear = "2541";

// $_SESSION["selectYear"] = $selectYear;
// $_SESSION["selecTopics"] = $selectTopics;

$data = array();

if ($selectYear == "all") {
    if ($selectTopics == "all") {
        $historyResults = $db->prepare('SELECT success, count(*) as count FROM history_teaching GROUP by success');
    } else {
        $historyResults = $db->prepare('SELECT success, count(*) as count FROM history_teaching WHERE topics like :selectTopics GROUP by success');
    }
    $history = $historyResults->execute();

    while ($row = $history->fetchArray()) {
        array_push($data, $row);
    }
} else {
    if ($selectTopics == "all") {
        $historyResults = $db->prepare("SELECT success, count(*) as count FROM history_teaching WHERE year=='$selectYear' GROUP by success");
    } else {
        $historyResults = $db->prepare('SELECT success, count(*) as count FROM history_teaching WHERE topics like :selectTopics AND year = :selectYear GROUP by success;');
    }
    $history = $historyResults->execute();
    while ($row = $history->fetchArray()) {
        array_push($data, $row);
    }
}

// echo $selectYear;
// echo $selectTopics;
// echo json_encode($data);


?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/ae382fbf2e.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
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
                <h4><?php echo $_SESSION["name"] ?></h4>
            </div>
        </div>
    </nav>
    <div>
        <div class="d-flex">
            <div class="col-2" style="background-color: #263238bb">
                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white"
                    style="color: white;background-color: #263230ee ;">
                    <i class="fas fa-house-user"></i>
                    <h6 class="m-2"><a href="./homeAdmin.php" style="color: #FFFFFF;text-decoration: none;">หน้าหลัก</a>
                    </h6>
                </div>

                <div class="d-flex flex-row align-items-center p-2 border-bottom border-white">
                    <a href="../index.php" style="color: #FFFFFF;text-decoration: none;">ออกจากระบบ</a>
                </div>
            </div>
            <!-- body  -->
            <div class="col-10" style="background-color: #eee">
                <div class="card m-3">
                    <div class="card-header" style="background-color: #fef5ed">
                        <h5 class="fw-bolder mt-1">การวิเคราะห์ (สายผู้สอน)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-evenly">
                            <div class="col-3 p-4">
                                <div class="card">
                                    <div class="card-body text-center" style="background-color: #8acfe044">
                                        <blockquote class="blockquote mb-0">
                                            <p class="fw-bolder" style="color: #953904">
                                                <i class="fas fa-chalkboard-teacher"></i><br />

                                                <a href="#" class="stretched-link">สายผู้สอน</a>
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
                                                <a href="./analyzeSupport.php" class="stretched-link">สายสนับสนุน</a>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="card-header" style="background-color: #7bd97b"></div>
                                </div>
                            </div>
                        </div>
                        <!-- แถบค้นหา -->
                        <div class="shadow-sm p-3" style="background-color: #eee">
                            <form class="container-fluid" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-group text-left">
                                                    <label for="year">ปีการศึกษา</label>
                                                    <select class="form-select" id="selectYear" name="selectYear">
                                                        <option value="all" selected>ทั้งหมด</option>
                                                        <?php while ($yearRow = $year->fetchArray()) { ?>
                                                        <option value="<?php echo $yearRow['year'] ?>">
                                                            <?php echo $yearRow['year'] ?> </option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-group text-left">
                                                    <label for="ename">หัวข้อ</label>
                                                    <select class="form-select" id="selectTopics" name="selectTopics">
                                                        <option value="all" selected>ทั้งหมด</option>
                                                        <?php while ($row = $results->fetchArray()) { ?>
                                                        <option value="<?php echo $row['topics'] ?>">
                                                            <?php echo $row['topics'] ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="container-fluid d-flex flex-row justify-content-center align-items-center">
                                    <button type="submit" name="submit"
                                        class="btn btn-lg btn-primary m-2 d-flex flex-row justify-content-center align-items-center ">
                                        ค้นหา
                                        <i class="fas fa-search ms-4"></i>
                                        </svg>
                                    </button>
                                    <button type="reset" class="btn btn-secondary btn-lg ">
                                        ยกเลิก
                                    </button>
                                    <!-- Button trigger modal -->
                                    <!-- <button type="button" class="btn-lg m-2 btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        สรุปผลรายปี
                                    </button> -->

                                    <!-- Modal -->
                                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ยืนยันการสรุปผล</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    เมื่อท่านกดปุ่ม"ยืนยัน"แล้ว ข้อมูลทั้งหมดทั้งหมดในปีนี้ถูกบันทึกและไม่สามารถกลับมาแก้ไขได้อีก
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ยืนยัน</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </form>
                            <div id="container-fluid d-flex flex-row justify-content-center align-items-center">
                                <canvas id="canvas"></canvas>
                            </div>
                            <div class="container-fluid d-flex flex-row justify-content-center align-items-center">
                                <h2 style="width: fit-content;">ภาพรวม</h2>
                            </div>
                            <div id="container-fluid d-flex flex-row justify-content-center align-items-center">
                                <canvas id="canvas2"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
var color = Chart.helpers.color;
var barChartData = {
    labels: ['1', '2', '3', '4', '5'],
    datasets: [{
        label: 'ไม่สำเร็จ',
        backgroundColor: 'rgba(228, 58, 69, .4)',
        borderWidth: 1,
        borderColor: '#b32a33',
        hoverBackgroundColor: '#e43a45',
        hoverBorderColor: '#b32a33',
        data: [
            1,
            1,
            1,
            1,
            1
        ]

    }, {
        label: 'สำเร็จ20%',
        backgroundColor: 'rgba(243, 82, 58, .3)',
        borderWidth: 1,
        borderColor: '#f3523a',
        hoverBackgroundColor: '#f56954',
        hoverBorderColor: '#f3523a',
        data: [
            null,
            null,
            null,
            null,
            2
        ]
    }, {
        label: 'สำเร็จ25%',
        backgroundColor: 'rgba(243, 82, 58, .3)',
        borderWidth: 1,
        borderColor: '#f3523a',
        hoverBackgroundColor: '#f56954',
        hoverBorderColor: '#f3523a',
        data: [
            null,
            null,
            null,
            3,
            null
        ]
    }, {
        label: 'สำเร็จ33%',
        backgroundColor: 'rgba(243, 194, 0, .3)',
        borderWidth: 1,
        borderColor: '#F3C200',
        hoverBackgroundColor: '#F3C200',
        hoverBorderColor: '#7d6505',
        data: [
            null,
            null,
            4,
            null,
            null,
        ]
    }, {
        label: 'สำเร็จ40%',
        backgroundColor: 'rgba(243, 194, 0, .3)',
        borderWidth: 1,
        borderColor: '#F3C200',
        hoverBackgroundColor: '#F3C200',
        hoverBorderColor: '#7d6505',
        data: [
            null,
            null,
            null,
            null,
            5,
        ]
    }, {
        label: 'สำเร็จ50%',
        backgroundColor: 'rgba(76, 135, 185, .4)',
        borderWidth: 1,
        borderColor: '#2a587f',
        hoverBackgroundColor: '#4c87b9',
        hoverBorderColor: '#2a587f',
        data: [
            null,
            6,
            null,
            6,
            null,
        ]
    }, {
        label: 'สำเร็จ60%',
        backgroundColor: 'rgba(76, 135, 185, .4)',
        borderWidth: 1,
        borderColor: '#2a587f',
        hoverBackgroundColor: '#4c87b9',
        hoverBorderColor: '#2a587f',
        data: [
            null,
            null,
            null,
            null,
            7,
        ]
    }, {
        label: 'สำเร็จ66%',
        backgroundColor: 'rgba(76, 135, 185, .4)',
        borderWidth: 1,
        borderColor: '#2a587f',
        hoverBackgroundColor: '#4c87b9',
        hoverBorderColor: '#2a587f',
        data: [
            null,
            null,
            8,
            null,
            null,
        ]
    }, {
        label: 'สำเร็จ75%',
        backgroundColor: 'rgba(42, 180, 192, .3)',
        borderWidth: 1,
        borderColor: '#166269',
        hoverBackgroundColor: '#2ab4c0',
        hoverBorderColor: '#2ab4c0',
        data: [
            null,
            null,
            null,
            9,
            null,
        ]
    }, {
        label: 'สำเร็จ80%',
        backgroundColor: 'rgba(42, 180, 192, .3)',
        borderWidth: 1,
        borderColor: '#166269',
        hoverBackgroundColor: '#2ab4c0',
        hoverBorderColor: '#2ab4c0',
        data: [
            null,
            null,
            null,
            null,
            10,
        ]
    }, {
        label: 'สำเร็จ100%',
        borderColor: '#1ebfae',
        backgroundColor: 'rgba(30, 191, 174, .3)',
        borderWidth: 1,
        hoverBackgroundColor: '#1ebfae',
        hoverBorderColor: '#099486',
        borderWidth: 1,
        data: [
            11,
            11,
            11,
            11,
            11,
        ]
    }]

};
// var summaryData = {
//     labels: ['0%', '20%', '25%', '33%', '40', '50%', '60%', '66%', '75%', '80%', '100%'],
//     datasets: [{
//             label: 'อะไรวะ',
//             backgroundColor: 'rgba(228, 58, 69, .4)',
//             borderWidth: 1,
//             borderColor: '#b32a33',
//             hoverBackgroundColor: '#e43a45',
//             hoverBorderColor: '#b32a33',
//             data: [
//                 5,
//                 2,
//                 3,
//                 4,
//                 5,
//                 6,
//                 7,
//                 8,
//                 9,
//                 10,
//                 11
//             ]

//         }

//     ]

// };

window.onload = function() {
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'จํานวนโครงการวิจัยในรูปแบบแผนบูรณาการงานวิจัย'
            },
            legend: {
                display: false
            },
            scales: {

                xAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'จำนวนเป้าหมาย'
                    },
                    offset: true,
                    gridLines: {
                        display: true
                    }
                }],
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'จำนวนบุคลากร'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    // var ctx = document.getElementById('canvas2').getContext('2d');
    // window.myBar = new Chart(ctx, {
    //     type: 'bar',
    //     data: summaryData,
    //     options: {
    //         responsive: true,
    //         title: {
    //             display: true,
    //             text: 'จํานวนโครงการวิจัยในรูปแบบแผนบูรณาการงานวิจัย'
    //         },
    //         legend: {
    //             display: false
    //         },
    //         scales: {

    //             xAxes: [{
    //                 scaleLabel: {
    //                     display: true,
    //                     labelString: 'เปอร์เซ็นความสำเร็จ'
    //                 },
    //                 offset: true,
    //                 gridLines: {
    //                     display: true
    //                 }
    //             }],
    //             yAxes: [{
    //                 scaleLabel: {
    //                     display: true,
    //                     labelString: 'จำนวนบุคลากร'
    //                 },
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //             }]
    //         }
    //     }
    // });
};
$(document).ready(function() {
    showGraph();
    // console.log("gigi");

});
var ctxs = document.getElementById('canvas2').getContext('2d');

function showGraph() {
    var data = JSON.parse(JSON.stringify(<?php echo json_encode($data)?>));

    var percentage = [];
    var count = [];

    for (let i in data) {
        percentage.push(data[i].success);
        count.push(data[i].count);
        // console.log(percentage);
        // console.log(count)

    }
    var summaryData = {
        labels: percentage,
        datasets: [{
                label: 'จำนวนคน',
                borderWidth: 1,
                borderColor: '#b32a33',
                hoverBackgroundColor: ['#b32a33', '#b32a33', '#b32a33', '#F3C200', '#F3C200', '#F3C200',
                    '#F3C200', '#F3C200', '#099486', '#099486', '#099486'
                ],
                data: count,
                backgroundColor: ['rgba(228, 58, 69, .4)', 'rgba(228, 58, 69, .4)', 'rgba(228, 58, 69, .4)',
                    'rgba(243, 194, 0, .3)', 'rgba(243, 194, 0, .3)', 'rgba(243, 194, 0, .3)',
                    'rgba(243, 194, 0, .3)', 'rgba(243, 194, 0, .3)', "rgba(30, 191, 174, .3)",
                    "rgba(30, 191, 174, .3)", "rgba(30, 191, 174, .3)"
                ],
                borderColor: ['#b32a33', '#b32a33', '#b32a33', '#7d6505', '#7d6505', '#7d6505', '#7d6505',
                    '#7d6505', '#099486', '#099486', '#099486'
                ]

            }

        ]

    };

    window.myBar = new Chart(ctxs, {
        type: 'bar',
        data: summaryData,
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'จํานวนโครงการวิจัยในรูปแบบแผนบูรณาการงานวิจัย'
            },
            legend: {
                display: false
            },
            scales: {

                xAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'เปอร์เซ็นความสำเร็จ'
                    },
                    offset: true,
                    gridLines: {
                        display: true
                    }
                }],
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'จำนวนบุคลากร'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

}
</script>

</html>