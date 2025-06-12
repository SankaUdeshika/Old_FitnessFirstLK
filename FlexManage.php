<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | FITNESS FIRST</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-lg-2">
                <div class="row">
                    <div class="col-12 align-items-start bg-dark vh-100">
                        <div class="row g-1 text-center">

                            <div class="col-12 mt-5">
                                <h4 class="text-white">Welcome <?php echo ($_SESSION["admin"]["firstname"] . " " . $_SESSION["admin"]["lastname"]) ?></h4>
                                <hr class="border border-white border-1" />
                            </div>

                            <div class="col-12 text-center">
                                <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                    <nav class="nav flex-column">
                                        <a class="nav-link active" aria-current="page" href="adminDashboard.php">Dashboard</a>
                                        <a class="nav-link" href="adminManageContent.php">Manage Content</a>
                                        <a class="nav-link " href="adminManageBlogs.php">Manage Blog</a>
                                        <a class="nav-link " href="FlexManage.php">Manage Flex</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                <hr class="border border-white border-1" />
                                <h4 class="text-white fw-bold"> Developing?</h4>
                                <hr class="border border-white border-1" />
                            </div>

                            <div class="col-12 mt-3 d-grid">
                                <label class="form-label fs-6 fw-bold btn btn-outline-info  text-white " onclick="adminLogOut();">LogOut <i class="bi bi-box-arrow-right"></i> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="text-white fw-bold mb-1 mt-3">
                        <h2 class="fw-bold ml-5">Dashboard</h2>
                    </div>
                    <div class="col-12">
                        <hr />
                    </div>



                    <div class="col-12 bg-dark">
                        <div class="row">
                            <div class="col-12 col-lg-2 text-center my-3">
                                <label class="form-label fs-4 fw-bold text-white">Total Active Time</label>
                            </div>
                            <div class="col-12 col-lg-10 text-center my-3">
                                <?php

                                $start_date = new DateTime("2022-09-27 00:00:00");

                                $tdate = new DateTime();
                                $tz = new DateTimeZone("Asia/Colombo");
                                $tdate->setTimezone($tz);

                                $end_date = new DateTime($tdate->format("Y-m-d H:i:s"));

                                $difference = $end_date->diff($start_date);

                                ?>
                                <label class="form-label fs-4 fw-bold text-warning">
                                    <?php

                                    echo $difference->format('%Y') . " Years " . $difference->format('%m') . " Months " .
                                        $difference->format('%d') . " Days " . $difference->format('%H') . " Hours " .
                                        $difference->format('%i') . " Minutes " . $difference->format('%s') . " Seconds ";
                                    ?>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                    </div>


                    <div class="col-12 d-grid">
                        <button class="btn btn-outline-dark fs-2" onclick="window.location = 'ProductManage.php'"> Manage Product</button>
                    </div>

                    <div class="col-12 d-grid">
                        <button class="btn btn-outline-dark fs-2" onclick="window.location = 'OrderManage.php'"> Manage Orders </button>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
</body>

</html>