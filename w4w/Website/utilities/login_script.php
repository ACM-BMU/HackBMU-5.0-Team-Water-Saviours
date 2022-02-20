<?php
require 'common.php';

// Using the post mtheod to gather the value from the login form
$email = $_POST['email'];
$email = mysqli_real_escape_string($connect, $email);

$pwd = $_POST['pwd'];
$user_pwd = $pwd;
$pwd = mysqli_real_escape_string($connect, $pwd);
$pwd = md5($pwd);

// either add a device or login
$option = $_POST['choice'];

// Check1: Whether the email exists or not?
$query1 = "SELECT id from users WHERE email = '$email'";
$result_query1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));

// Check2: Whether the provided password is correct or not
$query2 = "SELECT username,api_key from users WHERE email = '$email' && password = '$pwd'";
$result_query2 = mysqli_query($connect, $query2) or die(mysqli_error($connect));
$row = mysqli_fetch_array($result_query2);

// If the email doesn't exists:
if (mysqli_num_rows($result_query1) == 0) {
    echo ("<script>alert('Provided email is not registered yet!!'); location.href='./../login.php'</script>");
}
// If the entered password is wrong:
elseif (mysqli_num_rows($result_query2) == 0) {
    echo ("<script>alert('Incorrect password!!'); location.href='./../login.php'</script>");
}
// If the user opted for adding a device
elseif ($option == "Add") {

    // Initiate the session variables
    $_SESSION['username'] = $row['username'];
    $_SESSION['api'] = $row['api_key'];
    $_SESSION['email'] = $email;
    $_SESSION['pwd'] = $user_pwd;

    // check whether there is space for the device (device 2 is not there)
    $search_query = "SELECT device2 from users WHERE  email = '$email'";
    $search_query_result = mysqli_query($connect, $search_query) or die(mysqli_error($connect));

    $row = mysqli_fetch_array($search_query_result);

    if ($row['device2'] == "") {
        $_SESSION['add'] = "true";
        header("location: ./../select.php");
    } elseif ($row['device2'] != "") {

        echo ("<script>alert('Already 2 devices are attached to this email. Third one can\'t be added.'); location.href='./../login.php'</script>");
    }
}
// If the user clicked on the login button
elseif ($option == "Login") {

    // Initiate the session variables
    $_SESSION['username'] = $row['username'];
    $_SESSION['api'] = $row['api_key'];
    $_SESSION['email'] = $email;
    $_SESSION['pwd'] = $user_pwd;

    header("location: ./../select.php");
}
