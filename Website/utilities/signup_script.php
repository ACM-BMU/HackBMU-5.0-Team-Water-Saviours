<?php
require 'common.php';

// Using the post mtheod to gather the value from the login form
$name = $_POST['username'];
$name = mysqli_real_escape_string($connect, $name);

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$user_pwd = $pwd;
$conf_pwd = $_POST['conf_pwd'];
$conf_pwd = mysqli_real_escape_string($connect, $conf_pwd);

$device1_name = $_POST['device_id'];
$device1_name = mysqli_real_escape_string($connect, $device1_name);
$api = $_POST['api'];
$api = mysqli_real_escape_string($connect, $api);

// Regular expression / pattern which an email should follow:
$email_pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/';

// Regular expression for password field: Min 8 characters, at least 1 letter, 1 number & 1 special character:
$pwd_pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/";

$search_query = "SELECT email from users WHERE email = '$email'";
$result_search_query = mysqli_query($connect, $search_query) or die(mysqli_error($connect));
$row = mysqli_num_rows($result_search_query);

// check whether more than 2 records are there in the database, then deny the user
if ($row != 0) {
    echo ("<script>alert('Email address already exists! Log in with another email'); location.href='./../signup.php'</script>");
}
// if the email doesn't matches with the email pattern
elseif (!preg_match($email_pattern, $email)) {
    echo ("<script>alert('Not a valid email address'); location.href='./../signup.php'</script>");
}
// If the user entered pwd doesn't matches with the password pattern:
elseif (!preg_match($pwd_pattern, $pwd)) {
    echo ("<script>alert('Not a valid password. Password must contain a minimum of 8 characters, atleast 1 number, 1 letter & 1 special character'); location.href='./../signup.php'</script>");
}
// if the pwd & confirm pwd doesn't match
elseif ($conf_pwd != $pwd) {
    echo ("<script>alert('New password and confirm password doesn\'t match'); location.href='./../signup.php'</script>");
}
// if all the entered data is correct, then do the manipulations
else {
    $email = mysqli_real_escape_string($connect, $email);

    $pwd =  mysqli_real_escape_string($connect, $pwd);
    // Using the MD5 hashing algorithm function
    $pwd = md5($pwd);

    // query to store the data into the database
    $insert_query = "INSERT into users (username,email,password,device1,api_key) VALUES ('$name','$email','$pwd','$device1_name','$api')";
    $query_result = mysqli_query($connect, $insert_query) or die(mysqli_error($connect));
    $id = mysqli_insert_id($connect);

    // Setting up the session variables
    $_SESSION['username'] = $name;
    $_SESSION['device1_name'] = $device1_name;
    $_SESSION['email'] = $email;
    $_SESSION['api'] = $api;

    $subject = "Greetings User"; 
 
    $htmlContent = ' 
    <html>

<head>
    <title>Login</title>
</head>

<body>
   <div style="margin: auto; border:5px solid #E49B0F; border-radius: 10px; width:500px; text-align: center">
        <p style="float:left; margin-left: 5px; font-weight: 600">User No. '.$id.'</p>   
        
        <img src="https://i.ibb.co/7SJ5qSC/final-logo.png" height="250" width="480" alt="done" border="0">
        
        <div style="background: #FFD700; padding: 5px 0px">
            <p><span style="background: whitesmoke; font-size:45px; font-weight: 500; border-radius: 8px; padding: 0px 5px">welcome you</span></p>    
            <p>
                <span style="background: whitesmoke;font-size:15px; border-radius: 8px; padding: 0px 5px">
                    To a project which is a perfect amalgamation <br> of <b>IoT</b>, <b>ML</b> and programming languages
                </span>
            </p>
        </div>

        <h5 style="font-size: 18px">NOTIFICATION | LOGIN CREDENTIALS</h5>
        
        <div style="margin: 5px 0px; width:350px; margin: auto">
            <p>Dear '.$name.', your login credentials are as follows</p>

            <table style="width:100%;border: 3px solid #FFD700; border-radius: 10px">
                <tr>
                    <th style="border: 3px solid #FFD700; width:80px;">Field</th>
                    <th style="border: 3px solid #FFD700;">Value</th>
                </tr>
                <tr>
                    <td style="border: 3px solid #FFD700; width:100px;">Username</td>
                    <td style="border: 3px solid #FFD700;">'.$name.'</td>
                </tr>
                <tr>
                    <td style="border: 3px solid #FFD700; width:100px;">Password</td>
                    <td style="border: 3px solid #FFD700;">'.$user_pwd.'</td>
                </tr>
                <tr>
                    <td rowspan="2" style="border: 3px solid #FFD700; width:100px;">Device Ids</td>
                    <td style="border: 3px solid #FFD700;">'.$device1_name.'</td>
                </tr>
                <tr>
                    <td style="border: 3px solid #FFD700;">Not added yet</td>
                </tr>
                <tr>
                    <td style="border: 3px solid #FFD700;">Api Key</td>
                    <td style="border: 3px solid #FFD700;">'.$api.'</td>
                </tr>
            </table>
        </div>

        <p>In case you forget the password in future, you can <br>
        visit this email to see your login credentials</p>

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
    mail($email, $subject, $htmlContent, $headers);


    // Re-routing the user to the index page
    echo ("<script>alert('User Registered Successfullly'); location.href='./../index.php'</script>");
}
