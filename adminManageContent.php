<?php
session_start();
include "Connections/connection.php";

if (isset($_SESSION["admin"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Content | </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-lg-2">
                    <div class="row">
                        <div class="col-12 align-items-start bg-dark" style="height: 300vh;">
                            <div class="row g-1 text-center">

                                <div class="col-12 mt-5">
                                    <h4 class="text-white">Welcome <?php echo ($_SESSION["admin"]["firstname"] . " " . $_SESSION["admin"]["lastname"]) ?></h4>
                                    <hr class="border border-white border-1" />
                                </div>

                                <div class="col-12 text-center">
                                    <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                        <nav class="nav flex-column">
                                            <a class="nav-link " href="adminDashboard.php">Dashboard</a>
                                            <a class="nav-link active" aria-current="page" href="adminManageContent.php">Manage Content</a>
                                            <a class="nav-link" href="adminManageBlogs.php">Manage Blog</a>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-12 mt-5">
                                    <hr class="border border-white border-1" />
                                    <h4 class="text-white fw-bold"> Developing?</h4>
                                    <hr class="border border-white border-1" />
                                </div>

                                <div class="col-12 mt-3 d-grid">
                                    <label class="form-label fs-6 fw-bold btn btn-outline-info  text-white ">Testing</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="row">

                        <div class="text-white fw-bold mb-1 mt-3">
                            <h2 class="fw-bold ml-5">Manage Content</h2>
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

                        <!-- content -->
                        <div class="col-12 btn btn-outline-dark" onclick="window.location = 'changeCarouselImage.php'">
                            <h1>Home Page Change Carousel Image</h1>
                        </div>
                        <div class="col-12 btn btn-outline-dark" onclick="window.location = 'changeHomePage.php'">
                            <h1>Home Page About Change</h1>
                        </div>
                        <div class="col-12 btn btn-outline-dark" onclick="window.location = 'changeWhyFinessPart.php'">
                            <h1>Change Home Page Why Fitness Part</h1>
                        </div>
                        <div class="col-12 btn btn-outline-dark" onclick="window.location = 'changeSuccessStory.php'">
                            <h1>Change Home Success Box</h1>
                        </div>
                        <div class="col-12 btn btn-outline-danger" onclick="window.location = 'changeClassesTopImage.php'">
                            <h1>Change Top Image in evey sub Page</h1>
                        </div>
                        <div class="col-12 btn btn-outline-danger" onclick="window.location = 'changeClassesVideo.php'">
                            <h1>Change Classes Video part</h1>
                        </div>
                        <div class="col-12 btn btn-outline-danger" onclick="window.location = 'change5Areas.php'">
                            <h1>Change 5 Areas</h1>
                        </div>
                        <div class="col-12 btn btn-outline-primary" onclick="window.location = 'ChangeFacilitiesAbout.php'">
                            <h1>Change Facilities Features</h1>
                        </div>
                        <div class="col-12 btn btn-outline-primary" onclick="window.location = 'ManageFactory.php'">
                            <h1>Manage Factory Items</h1>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/bootstrap.js"></script>
            <script src="js/script.js"></script>
            <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact | RASIKA OFFICIAL</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

        <div class="col-12 d-flex justify-content-center align-items-center text-white" style="width: 100%; height: 100vh;">
            <div class="row">
                <div class="col-12">
                    <h1>Please Log In first</h1>
                </div>
                <div class="col-12">
                    <a href="adminLogin.php">Go to Login Page</a>
                </div>
            </div>
        </div>


        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>
<?php
}

?>