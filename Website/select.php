<?php
require 'utilities/common.php';
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>W4W | Select</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body class="d-md-flex align-items-md-center justify-content-xxl-center align-items-xxl-start" style="background: url(&quot;img/header.jpg&quot;);user-select:none">
    <div class="container" style="margin-top: 18vh;padding: 20px;background: #f7f3f3;border-radius: 15px;">
        <div class="row" style="height: 330px;">
            <div class="col-md-6 d-xxl-flex justify-content-xxl-center align-items-xxl-start">
                <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="padding: 5px;height: 330px;">
                    <div class="text-start" style="margin-top: 0px;">
                        <div>
                            <p class="text-center" data-bss-hover-animate="pulse" style="font-size: 25px;font-weight: bold;border-radius: 20px;color: #4688d6;border: 3px outset #4688d6 ;"><i class="fa fa-chevron-circle-down" style="margin-right: 5px;"></i>
                                <?php if (isset($_SESSION['add'])) {  ?>
                                    Device Details
                                <?php   } elseif (!isset($_SESSION['add'])) {   ?>
                                    Which Device?
                                <?php   }   ?>
                            </p>
                        </div>

                        <!-- Form -->
                        <form action="utilities/select_script.php" method="post">
                            <div style="background: #e3e3e3;border-radius: 25px;padding: 10px;">
                                <p style="margin-bottom: 0px;">
                                    <?php if (isset($_SESSION['add'])) {  ?>
                                        Fill out the Name of the new device
                                    <?php   } elseif (!isset($_SESSION['add'])) {   ?>
                                        Choose the required device's id
                                    <?php   }   ?>
                                </p>
                            </div>
                            <div style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;">

                                <?php if (isset($_SESSION['add'])) { ?>
                                    <input type="text" name="device2" style="width:80%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="New Device ID" required>

                                <?php } elseif (!isset($_SESSION['add'])) { ?>
                                    <select name="new" style="width:92%;background: #e3e3e3;border: 3px none var(--bs-blue) ;">
                                        <?php
                                        $search_query = "SELECT device1,device2 from users WHERE api_key = '$_SESSION[api]'";
                                        $search_query_result = mysqli_query($connect, $search_query) or die(mysqli_error($connect));

                                        while ($row = mysqli_fetch_array($search_query_result)) {
                                        ?>
                                            <option value="first" selected>
                                                <?php
                                                $_SESSION['device1_name'] = $row['device1'];
                                                echo ($row['device1'])
                                                ?>
                                            </option>

                                            <!-- if the second device is empty then don't display it -->
                                            <?php if ($row['device2'] != "") { ?>
                                                <option value="second">
                                                    <?php
                                                    $_SESSION['device2_name'] = $row['device2'];;
                                                    echo ($row['device2']) ?></option>
                                        <?php }
                                        } ?>
                                    </select>

                                <?php } ?>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" style="border-radius: 25px;padding: 10px;margin-top: 15px;" type="submit">Proceed</button>
                            </div>
                        </form>
                        <div>
                            <p class="text-center" style="margin-top: 10px;">You will be redirected to the main page after submitting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-xxl-flex bounce animated" style="background: url(&quot;img/select.jpg&quot;) center / contain no-repeat;border-radius: 15px;border-width: 3px;border-style: none;">
                <div></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        if (window.innerWidth < 768) {
            [].slice.call(document.querySelectorAll('[data-bss-disabled-mobile]')).forEach(function(elem) {
                elem.classList.remove('animated');
                elem.removeAttribute('data-bss-hover-animate');
                elem.removeAttribute('data-aos');
            });
        }

        document.addEventListener('DOMContentLoaded', function() {

            var hoverAnimationTriggerList = [].slice.call(document.querySelectorAll('[data-bss-hover-animate]'));
            var hoverAnimationList = hoverAnimationTriggerList.forEach(function(hoverAnimationEl) {
                hoverAnimationEl.addEventListener('mouseenter', function(e) {
                    e.target.classList.add('animated', e.target.dataset.bssHoverAnimate)
                });
                hoverAnimationEl.addEventListener('mouseleave', function(e) {
                    e.target.classList.remove('animated', e.target.dataset.bssHoverAnimate)
                });
            });
        }, false);
    </script>
</body>

</html>