<?php
require 'common.php';

// user has opted to add a new device
if (isset($_SESSION['add'])) {
    $device2_name = $_POST['device2'];

    $insert_query = "UPDATE users SET device2 = '$device2_name' WHERE email = '$_SESSION[email]'";
    $insert_query_result = mysqli_query($connect, $insert_query) or die(mysqli_error($connect));
    
    $search_query = "SELECT id,device1 FROM users WHERE email='$_SESSION[email]'";
    $search_query_result = mysqli_query($connect,$search_query) or die(mysqli_error($connect));
    $row = mysqli_fetch_array($search_query_result);
    
    $subject = "Device Addition Notification"; 
 
    $htmlContent = ' 
    <html>

<body>
    <div style="margin: auto; border:5px solid #E49B0F; border-radius: 10px; width:500px; text-align: center">
        <p style="float:left; margin-left: 5px; font-weight: 600">User No. '.$row['id'].'</p>    

        <img src="https://i.ibb.co/7SJ5qSC/final-logo.png" height="250" width="480" alt="done" border="0">

        <div style="background: #FFD700; padding: 5px 0px;">
            <p><span style="background: whitesmoke; font-size:45px; font-weight: 500; border-radius: 8px; padding: 0px 5px">welcome you</span></p>    
            <p>
                <span style="background: whitesmoke;font-size:15px; border-radius: 8px; padding: 0px 5px">
                    To a project which is a perfect amalgamation <br> of <b>IoT</b>, <b>ML</b> and programming languages
                </span>
            </p>     
        </div>

        <h5 style="font-size: 18px">NOTIFICATION | ADD ON DETAILS</h5>

        <p>A new device has been added in your account <br>The device name is <b>'.$device2_name.'</b></p>
        
        <div style="margin: 5px 0px; width:350px; margin: auto">
        <p>'.$_SESSION['username'].', the updated login credentials are here:</p>

        <table style="width:100%;border: 3px solid #FFD700; border-radius: 10px">
            <tr>
                <th style="border: 3px solid #FFD700; width:80px;">Field</th>
                <th style="border: 3px solid #FFD700;">Value</th>
            </tr>
            <tr>
                <td style="border: 3px solid #FFD700; width:100px;">Username</td>
                <td style="border: 3px solid #FFD700;">'.$_SESSION['username'].'</td>
            </tr>
            <tr>
                <td style="border: 3px solid #FFD700; width:100px;">Password</td>
                <td style="border: 3px solid #FFD700;">'.$_SESSION['pwd'].'</td>
            </tr>
            <tr>
                <td rowspan="2" style="border: 3px solid #FFD700; width:100px;">Device Ids</td>
                <td style="border: 3px solid #FFD700;">'.$row['device1'].'</td>
            </tr>
            <tr>
                <td style="border: 3px solid #FFD700;">'.$device2_name.'</td>
            </tr>
            <tr>
                <td style="border: 3px solid #FFD700;">Api Key</td>
                <td style="border: 3px solid #FFD700;">'.$_SESSION['api'].'</td>
            </tr>
        </table>
        </div>

        <button style="padding: 6px; margin: 10px; background: black; border-radius: 10px;">
            <a href="https://wheels4water.me" target="blank" style="text-decoration: none; color: white ; font-weight: bold;">Account Login</a>
        </button>

    </div>
</body>

</html>'; 
 
    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
    // Additional headers 
    $headers .= 'From: vishalsproject@wheels4water.me' . "\r\n"; 
    mail($_SESSION['email'], $subject, $htmlContent, $headers);

    
    echo ("<script>alert('New devive has been added. Now login again & choose the device to control');location.href='./../logout.php'</script>");
}
//if the user has opted to login rather than adding a new device
elseif (!isset($_SESSION['add'])) {

    $device = $_POST['new'];
    if ($device == "second") {
        $_SESSION['device1_name'] = $_SESSION['device2_name'];
    }

    header("location: ./../index.php");
}
