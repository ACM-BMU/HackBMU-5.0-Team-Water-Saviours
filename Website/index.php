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
    
    <!--Modal for the quiz's result-->
    <div class="modal fade" id="result_time" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="https://img.icons8.com/emoji/40/000000/party-popper.png"/>
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Winners</strong></h5>
                    <img src="https://img.icons8.com/emoji/40/000000/party-popper.png"/>
                    <form action="utilities/winners_email.php">
                        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </form>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:center; color:#0DCAF0">You scored 
                        <?php
                            $select_query = "SELECT score FROM quiz WHERE email='$_SESSION[email]' && name='$_SESSION[username]'";
                            $select_query_result = mysqli_query($connect,$select_query) or die(mysqli_error($connect));
                            $row2 = mysqli_fetch_array($select_query_result);
                            echo ($row2['score']);
                        ?>/10 marks.
                    </p>
                    <p style="text-align:justify; font-size:18px; margin-left:10px">
                        The winners are as follows:
                    </p>
                    <?php
                        $winner = "Select * FROM quiz ORDER BY score DESC";
                        $winner_result = mysqli_query($connect,$winner) or die(mysqli_error($connect));
                        $i = 0;
                        while($winners = mysqli_fetch_array($winner_result)) {
                            
                            if($i==0) {
                                $winner1_name = $winners['name'];
                                $winner1_points = $winners['score'];
                            } elseif ($i==1) {
                                $winner2_name = $winners['name'];
                                $winner2_points = $winners['score'];
                            }
                            
                            $i++;
                        }
                    ?>
                    <div style="background: #add8e6; border-radius:5px;cursor:pointer; font-size:18px" class="p-2 m-0 mb-2" onclick="quiz(this.id)">
                        <img src="https://img.icons8.com/color/40/000000/first-place-ribbon.png"/> <?php echo($winner1_name); ?>
                        <span style="float:right; margin-top:5px">Marks: <?php echo($winner1_points); ?></span>
                        <p style="text-align:center; font-size:16px" class="p-0 m-0"><b>Prize:</b> $100 DigitalOcean Credit</p>
                    </div>
                    <div style="background: #add8e6; border-radius:5px;cursor:pointer; font-size:18px" class="p-2 m-0" onclick="quiz(this.id)">
                        <img src="https://img.icons8.com/color/40/000000/second-place-ribbon.png"/> <?php echo($winner2_name); ?>
                        <span style="float:right; margin-top:5px">Marks: <?php echo($winner2_points); ?></span>
                        <p style="text-align:center; font-size:16px" class="p-0 m-0"><b>Prize:</b> $50 Twilio Credit</p>
                    </div>
                </div>
                <div class="modal-footer" style="text-align:justify">
                    <p><b>NOTE:</b>The winners are requested to check their registered email ids to get the CODE in order to redeem their prizes</p>
                </div>
            </div>
        </div>
    </div>
    
    <!--Modal for the Quiz section-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <?php
                    $search_query1 = "SELECT * FROM quiz WHERE name='$_SESSION[username]' && email='$_SESSION[email]'";
                    $search_query_result1 = mysqli_query($connect, $search_query1) or die(mysqli_error($connect));
                    if (mysqli_num_rows($search_query_result1) == 0) {
                ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel" style="margin:auto;"><strong>Rules for the Quiz</strong></h5>
                    </div>
                    <div class="modal-body" style="text-align:justify">
                        1. You will have <span style="color:#0DCAF0">5 minutes</span> for the quiz.<br>
                        2. You can't exit the quiz while playing<br>
                        3. Once clicked, answer can't be changed <br>
                        4. Top 2 participants will get exciting prizes <br>
                        5. No submissions will be allowed after 12:15 AM<br><br>

                        <span style="color:#0DCAF0">NOTE:</span> In case of a tie, the participant completing the test earlier will be considered as the winner
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
                        <button type="button" class="btn" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question1" style="background:#0DCAF0">Continue</button>
                    </div>
                <?php
                } else {
                ?>
                    <div class="modal-body" style="text-align:justify">
                        <p>You have already submitted the test. Wait for the results to be uploaded. <br><br>Best of luck for the results 🌟🌟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin:auto">Close</button>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    
    <!--Question #1-->
    <div class="modal fade" id="question1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">1. What backend language I have used?</p>
                    <div id="01first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Ruby <img id="01firsticon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="01second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Node.js <img id="01secondicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="01third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Php <img id="01thirdicon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="01fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Golang <img id="01fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">1 of 10 Questions</p>
                    <button id="button01" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question2" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #2-->
    <div class="modal fade" id="question2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">2. Which of these is not a table in the project's database?</p>
                    <div id="02first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        users <img id="02firsticon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="02second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        vacation_logs <img id="02secondicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="02third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        quiz <img id="02thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="02fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        vacations <img id="02fourthicon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">2 of 10 Questions</p>
                    <button id="button02" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question3" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #3-->
    <div class="modal fade" id="question3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">3. A user can schedule the robot through the website for atmost how many days?</p>
                    <div id="03first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Two <img id="03firsticon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="03second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Three <img id="03secondicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="03third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        One <img id="03thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="03fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Five <img id="03fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">3 of 10 Questions</p>
                    <button id="button03" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question4" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #4-->
    <div class="modal fade" id="question4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">4. I have used which online platform to make the images?</p>
                    <div id="04first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Pixlr <img id="04firsticon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="04second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Mega Creator <img id="04secondicon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="04third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        befunky <img id="04thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="04fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Icons8 <img id="04fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">4 of 10 Questions</p>
                    <button id="button04" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question5" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #5-->
    <div class="modal fade" id="question5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">5. A user will get updates through which platforms?</p>
                    <div id="05first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Telegram & Whatsapp <img id="05firsticon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="05second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Whatsapp & SMS  <img id="05secondicon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="05third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        SMS & Email <img id="05thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="05fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Email & Whatsapp <img id="05fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">5 of 10 Questions</p>
                    <button id="button05" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question6" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #6-->
    <div class="modal fade" id="question6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">6. Which arduino board's variant I have used?</p>
                    <div id="06first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Arduino Leonardo <img id="06firsticon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="06second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Arduino Nano <img id="06secondicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="06third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Arduino Uno R3 <img id="06thirdicon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="06fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Arduino Uno WiFi <img id="06fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">6 of 10 Questions</p>
                    <button id="button06" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question7" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #7-->
    <div class="modal fade" id="question7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">7. Out of these, I have not used which of the component?</p>
                    <div id="07first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        CD4051 IC <img id="07firsticon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="07second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Solenoid Valve <img id="07secondicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="07third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Water Flow Sensor <img id="07thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="07fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Humidity Sensor <img id="07fourthicon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">7 of 10 Questions</p>
                    <button id="button07" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question8" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #8-->
    <div class="modal fade" id="question8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">8. Will the robot leave for destination everytime?</p>
                    <div id="08first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        No, depends on condition <img id="08firsticon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="08second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Yes, always <img id="08secondicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="08third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        Can't say <img id="08thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="08fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        None of the above <img id="08fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">8 of 10 Questions</p>
                    <button id="button08" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question9" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #9-->
    <div class="modal fade" id="question9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">X. How many questions does this quiz have?</p>
                    <div id="09first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        5 <img id="09firsticon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="09second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        10 <img id="09secondicon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="09third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        8 <img id="09thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="09fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        7 <img id="09fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">X of 10 Questions</p>
                    <button id="button09" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#question10" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">Next Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Question #10-->
    <div class="modal fade" id="question10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Quiz: W4W Insights</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="font-size:18px; text-align:justify">10. What is the total number of wheels in the robot (excluding caster wheel)?</p>
                    <div id="10first" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        2 <img id="10firsticon" src="https://img.icons8.com/metro/26/000000/checked-2.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="10second" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        4 <img id="10secondicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="10third" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        3 <img id="10thirdicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                    <div id="10fourth" style="background: #add8e6; border-radius:5px;cursor:pointer" class="p-2 m-2" onclick="quiz(this.id)">
                        0 <img id="10fourthicon" src="https://img.icons8.com/glyph-neue/24/000000/delete-sign.png" style="float:right; visibility:hidden"/>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <p style="margin-left:5px">10 of 10 Questions</p>
                    <button id="button10" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#scorecard" style="border-radius: 5px;padding: 10px;background:#0DCAF0;visibility:hidden" type="submit">See Total</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Score Card's modal-->
    <div class="modal fade" id="scorecard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="pointer-events: none; font-family:Open Sans,Helvetica Neue,Arial,sans-serif;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Result of Quiz: W4W Insights</strong></h5>
                </div>
                <div class="modal-body" style="text-align:center">
                    <p>Greetings, <?php echo($_SESSION['username']) ?>, the quiz's result is out. Click on the image to know your result</p>
                    <img id="image" src="https://img.icons8.com/cute-clipart/70/000000/test-failed.png" onclick="quiz(this.id);update()"/>
                    <p id="quizResult" style="margin-top:10px; font-weight:bold">
                        <?php
                        echo '<script>function update() {document.getElementById("uploadValue").value = score;}</script>';
                        ?>
                    </p>
                </div>
                <form method="get" action="utilities/score_script.php">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" style="margin:auto" id="uploadValue" name="total_score">Finish the Quiz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
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
        
        var score = 0;
        
        function quiz(el){
            if(el[1]==1){
                if(el.includes("third")) {
                    // Making the correct answer highlighted
                    document.getElementById("01third").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("01third").style.background="#b3ff66";
                    document.getElementById("01third"+"icon").style.visibility="visible";
                }
                // Disabling the further click. FOr eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("01"+parts[i]).onclick = null;
                }
                document.getElementById("button01").style.visibility="visible";
            }
            
            else if(el[1]==2){
                if(el.includes("fourth")) {
                    // Making the correct answer highlighted
                    document.getElementById("02fourth").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("02fourth").style.background="#b3ff66";
                    document.getElementById("02fourth"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("02"+parts[i]).onclick = null;
                }
                document.getElementById("button02").style.visibility="visible";
            }
            
            else if(el[1]==3){
                if(el.includes("first")) {
                    // Making the correct answer highlighted
                    document.getElementById("03first").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("03first").style.background="#b3ff66";
                    document.getElementById("03first"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("03"+parts[i]).onclick = null;
                }
                document.getElementById("button03").style.visibility="visible";
            }
            
            else if(el[1]==4){
                if(el.includes("second")) {
                    // Making the correct answer highlighted
                    document.getElementById("04second").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("04second").style.background="#b3ff66";
                    document.getElementById("04second"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("04"+parts[i]).onclick = null;
                }
                document.getElementById("button04").style.visibility="visible";
            }
            
            else if(el[1]==5){
                if(el.includes("second")) {
                    // Making the correct answer highlighted
                    document.getElementById("05second").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("05second").style.background="#b3ff66";
                    document.getElementById("05second"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("05"+parts[i]).onclick = null;
                }
                document.getElementById("button05").style.visibility="visible";
            }
            
            else if(el[1]==6){
                if(el.includes("third")) {
                    // Making the correct answer highlighted
                    document.getElementById("06third").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("06third").style.background="#b3ff66";
                    document.getElementById("06third"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("06"+parts[i]).onclick = null;
                }
                document.getElementById("button06").style.visibility="visible";
            }
            
            else if(el[1]==7){
                if(el.includes("fourth")) {
                    // Making the correct answer highlighted
                    document.getElementById("07fourth").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("07fourth").style.background="#b3ff66";
                    document.getElementById("07fourth"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("07"+parts[i]).onclick = null;
                }
                document.getElementById("button07").style.visibility="visible";
            }
            
            else if(el[1]==8){
                if(el.includes("first")) {
                    // Making the correct answer highlighted
                    document.getElementById("08first").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("08first").style.background="#b3ff66";
                    document.getElementById("08first"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("08"+parts[i]).onclick = null;
                }
                document.getElementById("button08").style.visibility="visible";
            }
            
            else if(el[1]==9){
                if(el.includes("second")) {
                    // Making the correct answer highlighted
                    document.getElementById("09second").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("09second").style.background="#b3ff66";
                    document.getElementById("09second"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("09"+parts[i]).onclick = null;
                }
                document.getElementById("button09").style.visibility="visible";
            }
            
            else if(el[1]==0){
                if(el.includes("first")) {
                    // Making the correct answer highlighted
                    document.getElementById("10first").style.background="#b3ff66";
                    document.getElementById(el+"icon").style.visibility="visible";
                    score++;
                }
                else {
                    document.getElementById(el).style.background="#ff6666";
                    document.getElementById(el+"icon").style.visibility="visible";
                    document.getElementById("10first").style.background="#b3ff66";
                    document.getElementById("10first"+"icon").style.visibility="visible";
                }
                // Disabling the further click. For eg: document.getElementById("01first").onclick = null;
                const parts=["first","second","third","fourth"];
                for(var i=0;i<4;i++) {
                    document.getElementById("10"+parts[i]).onclick = null;
                }
                document.getElementById("button10").style.visibility="visible";
            }
            
            else if(el=="image"){
                document.getElementById("quizResult").innerHTML = "You scored "+score+" out of 10 points";
                document.getElementById("quizResult").value = score;
            }
        }

        
    </script>
</body>

</html>