<?php
require 'utilities/common.php';
if (!isset($_SESSION['device1_name'])) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>W4W | HOME</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="index/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="index/css/overwrite.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57" style="user-select:none">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand text-lowercase" href="#page-top">&nbsp;<img src="https://img.icons8.com/nolan/40/robot.png" /><span style="color: #0dcaf0 !important">Wheels</span><span style="color: #0dcaf0 !important">4</span><span style="color:#0dcaf0 !important">Water</span></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white d-flex masthead" style="background-image: url('img/header.jpg');position:relative;">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto my-5">
                    <h1 style="margin: 5px 0px;"><strong>A website which will help you in conserving water</strong></h1>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">
                    Welcome, <?php echo ($_SESSION['username']) ?> .
                    Great that you logged in order to save water. You can switch off (🛑) the motor just by clicking on the STOP button 👇
                </p>

                <?php
                $first = "https://cloud.boltiot.com/remote/";
                $second = "/isOnline?&deviceName=";
                $url = $first . $_SESSION['api'] . $second . $_SESSION['device1_name'];
                ?>
                <a class="btn btn-primary btn-xl" role="button" href=<?php echo ($url); ?> target="blank" style="background: var(--bs-cyan);">
                    Switch it off
                </a>
            </div>
            <?php
                date_default_timezone_set("Asia/Kolkata");
                if(date("H:i") <= "20:50") {
            ?>
            <div style="position:absolute; bottom:0px;">
                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor:pointer">
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-blue-vitaly-gorbachev/60/000000/external-quiz-online-learning-vitaliy-gorbachev-blue-vitaly-gorbachev.png" class="mb-3" />
                </a>
            </div>
            <?php
                }
                elseif (date("H:i") > "20:50") {
            ?>
            <div style="position:absolute;bottom:0px;">
                <a data-bs-toggle="modal" data-bs-target="#result_time" style="cursor:pointer">
                    <img src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/64/000000/external-graduation-education-flatart-icons-lineal-color-flatarticons.png" class="mb-3"/>
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </header>
    <section id="about" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="section-heading" style="color:white">W4W has got what you need!</h2>
                    <hr class="light my-4" style="color:white !important; height:5px;">
                    <div class="row">
                        <div class="d-md-block col-md-6" style="margin:auto">
                            <!--<img class="bg-light" style="border-radius: 10%; width:80%" src="index/img/about.png" alt="">-->
                            <video src="promotional_video.mp4" controls style="width:80%; height:100%; margin-bottom:20px"></video>
                        </div>
                        <div class="col-md-6" style="margin:auto">
                            <p class="text-faded mb-4 text-justify">
                                W4W is a smart project to control the water motors in no time! The project code consists of more
                                than 2000 lines of code which gives the end consumer a soothing experience.
                                Following programs and things have been used in this project. Click on the assets to lighten up
                                the corresponding icons 

                            <div class="row">
                                <div class="col-md-3">
                                    <img id="first" class="m-2"  style="filter:grayscale(100%);" src="https://img.icons8.com/color/80/000000/python--v2.png" />
                                    <img id="second" class="m-2" style="filter:grayscale(100%);" src="https://img.icons8.com/nolan/80/arduino.png" />
                                    <img id="third" class="m-2" style="filter:grayscale(100%)" src="https://img.icons8.com/color/80/000000/bootstrap.png" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group" style="border-radius:10px">
                                        <li class="first list-group-item list-group-item-primary" onclick="change(this)" style="cursor: pointer;">
                                            Python
                                        </li>
                                        <li class="second list-group-item list-group-item-secondary" onclick="change(this)" style="cursor: pointer;">
                                            Arduino
                                        </li>
                                        <li class="third list-group-item list-group-item-success" onclick="change(this)" style="cursor: pointer;">
                                            Bootstrap Studio
                                        </li>
                                        <li class="fourth list-group-item list-group-item-danger" onclick="change(this)" style="cursor: pointer;">
                                            Machine Learning
                                        </li>
                                        <li class="list-group-item list-group-item-success" onclick="change(this)" style="cursor: pointer;">
                                            Davinci Resolve. Bitly
                                        </li>
                                        <li class="fifth list-group-item list-group-item-secondary" onclick="change(this)" style="cursor: pointer;">
                                            Canva & Pichon (Icons8)
                                        </li>
                                        <li class="sixth list-group-item list-group-item-primary" onclick="change(this)" style="cursor: pointer;">
                                            Loads of Hardware Integration
                                        </li>
                                </div>
                                <div class="col-md-3">
                                    <img id="fourth" class="m-2" style="filter:grayscale(100%);" src="https://img.icons8.com/pastel-glyph/80/4a90e2/brain--v3.png" />
                                    <img id="fifth" class="m-2"  style="filter:grayscale(100%)" src="https://img.icons8.com/fluency/80/000000/icons8-new-logo.png" />
                                    <img id="sixth" class="m-2" style="filter:grayscale(100%)" src="https://img.icons8.com/doodle/80/4a90e2/electrical--v1.png" />
                                </div>
                            </div>
                            </p>

                        </div>
                    </div>
                    <a class="btn btn-light btn-xl mt-3" role="button" href="#services">
                        See various methods!
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ways to turn the motor off</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="text-dark mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true">
                            <img src="https://img.icons8.com/glyph-neue/70/000000/internet.png" /></i>
                        <h3 class="mb-3">Hosted Website</h3>
                        <p class="text-muted mb-0">Simply log into the account and then use the button. With one click you can do so </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="text-info mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true">
                            <img src="https://img.icons8.com/ios-filled/70/4a90e2/new-message.png" /></i>
                        <h3 class="mb-3">Text Messages</h3>
                        <p class="text-muted mb-0">Starting from the initiation of one cycle of the project to the end of that. Get regular updates</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="text-dark mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true">
                            <img src="https://img.icons8.com/ios-filled/70/000000/whatsapp--v1.png" /></i>
                        <h3 class="mb-3">Whatsapp Updates</h3>
                        <p class="text-muted mb-0">Get online updates. Perfectly blends with an IoT project as everything should be digital</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="text-info mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true">
                            <img src="https://img.icons8.com/pastel-glyph/70/4a90e2/cloud--v2.png" /></i>
                        <h3 class="mb-3">Cloud Services</h3>
                        <p class="text-muted mb-0">Being an IoT product, you can use the cloud to control the motor from anywhere</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="gallery" class="p-0 bg-dark">
        <div class="container-fluid p-0">
            <div class="row g-0 popup-gallery">
                <div class="col-sm-6 col-lg-4 my-1"><a class="portfolio-box" href="index/img/thumbnails/post1.jpg"><img class="img-fluid" src="index/img/fullsize/first.jpg">
                        <div class="portfolio-box-caption font-weight-bold">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Gallery Post #1</span></div>
                                <div class="project-name"><span>About the project</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="d-none">
                    <a class="portfolio-box" href="index/img/fullsize/icon.jpg"><img class="img-fluid" src="index/img/fullsize/icon.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Gallery Post #2</span></div>
                                <div class="project-name"><span>Logo of the project</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="d-none d-lg-block col-lg-4 mt-1">
                    <a class="portfolio-box" href="index/img/fullsize/logo.png"><img class="img-fluid" src="index/img/fullsize/logo.png">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Gallery Post #2</span></div>
                                <div class="project-name"><span>Logo of the project</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 my-1"><a class="portfolio-box" href="index/img/thumbnails/post2.png"><img class="img-fluid" src="index/img/fullsize/second.png">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Gallery Post #3</span></div>
                                <div class="project-name"><span>Working of the project</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="schedule">
    <div id="schedule" style="color: black" class="m-4">
        <div class="container text-center">
            <h2><strong>Schedule Section Awaits You</strong></h2>
            <hr>
            <p class="text-center">
                Will you be out of town for couple of days? If yes, then this section will help you to schedule whether the 
                robot should be deployed or not?
            </p>
            <div class="row">
                <div class="d-sm-block col-sm-6" style=" margin:auto">
                    <img class="bg-light my-3" style="border-radius: 10px; width:90%;" src="img/schedule.png">
                </div>
                <?php
                    $search_query = "SELECT * FROM vacation_logs WHERE email='$_SESSION[email]'";
                    $search_query_result = mysqli_query($connect,$search_query) or die(mysqli_error($connect));
                    $row = mysqli_fetch_array($search_query_result);
                    
                    if(mysqli_num_rows($search_query_result) == 0) {
                        
                
                ?>
                <div class="col sm-6" style="margin:auto">
                        <p class="text-muted text-justify">Select the number of days for which the robot should not be deployed.
                        You can choose a maximum of 02 days and once you select any of the option the UI will change according to
                        the option selected by you.
                        </p>
                        <p>For how many days you have to switch the robot off?</p>
                        <form action="utilities/schedule_script.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                
                                    <select name="schedule" style="background: #e3e3e3;border: 3px none;border-radius: 5px; width:60%;" class="mt-2">
                                        <option value="none">Select</option>
                                        <option value="1">1 Day</option>
                                        <option value="2">2 Days</option>
                                    </select>
                                
                            </div>
                            <div class="col-6">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-info" style="border-radius: 20px; margin:auto; width:60%;"
                                        type="submit">Update</button>
                                </div>
                                
                            </div>
                        </div>
                        </form>
                </div>
                <?php       
                    } elseif(mysqli_num_rows($search_query_result) != 0) {
                        $stop = $row['stop_date'];
                        $time = $row['time'];
                        $resume = $row['resume_date'];
                        
                        $today_date = date("Y/m/d");
                        date_default_timezone_set("Asia/Kolkata");
                        $today_time = date("H:i:s");
                        ?>
                        
                        <div class="col sm-6" style="margin:auto">
                        <p>You have scheduled the Inactive Robot Period and here are the details:</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Attribute</th>
                                    <th scope="col">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><img src="https://img.icons8.com/color/25/000000/clock--v4.png"/></th>
                                    <td>Stop Time</td>
                                    <td><?php echo($time); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="https://img.icons8.com/emoji/25/fa314a/stop-button-emoji.png"/></th>
                                    <td>Stop Date</td>
                                    <td><?php echo($stop); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="https://img.icons8.com/nolan/25/start.png"/></th>
                                    <td>Resume Date</td>
                                    <td><?php echo($resume); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="d-grid gap-2">
                            <form action="utilities/schedule_script.php" method="post">
                                    <button name="delete" value="delete" class="btn btn-info" style="border-radius: 20px; margin:auto; width:40%;"
                                        type="submit">Delete
                                    </button>
                            </form>
                        </div>
                </div>          
                        <?php
                        }
                ?>
            </div>
        </div>
    </div>
    </section>

    <section id="contact" style="background: black;" class="text-faded p-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading" style="color: white">Let's Get In Touch!</h2>
                    <hr class="my-4" style="color:white !important; height:5px;">
                    <p class="mb-5">Ready to start using this project? That's great! Give me a call or send me an email and I will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p><a class="text-decoration-none text-faded" href="tel:+917011238307">Drop a call</a></p>
                </div>
                <div class="col-lg-4 text-center me-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a class="text-decoration-none text-faded" href="mailto:allaboutclashing@gmail.com">Drop an email</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin:auto">
                    <p style="margin:auto; font-size:14px" class="text-center">Made and maintained by <b>Team Water Saviours</b>   &copy; <?php echo date("Y"); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="index/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="index/js/creative.js"></script>
    
    <script>
        function change(el) {
            document.getElementById(el.classList[0]).style.filter = 'grayscale(0%)';
            setTimeout(function () { document.getElementById(el.classList[0]).style.filter = 'grayscale(100%)';}, 3000);
        }
        
    </script>
</body>

</html>
