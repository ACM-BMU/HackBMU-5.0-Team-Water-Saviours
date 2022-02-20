<?php
require 'common.php';

function executeIntegromatScenario($address) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $address);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    //Execute the request.
    $data = curl_exec($ch);
}

$del = $_POST['delete'];

$schedule = $_POST['schedule'];
$date = date("Y/m/d");
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");

$resume=strtotime("+".$schedule."Days");
$resume =  date("Y/m/d", $resume);

if($schedule == "none")
{
    echo ("<script>alert('You have to select the number of days. Don\'t click on update without selecting the days'); location.href='./../index.php#schedule'</script>");
    // header("location: ./../index.php#schedule");
}
elseif($del == "delete")
{
    $del_query = "DELETE FROM vacation_logs WHERE email='$_SESSION[email]'";
    $del_query_result = mysqli_query($connect, $del_query) or die(mysqli_error($connect));
    
    executeIntegromatScenario('https://hook.integromat.com/usyhyd84clw2q3mdgpe0lmb7ed34ewt9');
    
    // echo ("<script>alert('The previous record has been deleted. Now you can proceed with the new one'); location.href='./../index.php#schedule'</script>");
    header("location: ./../index.php#schedule");
}
// if the user has opted to schedule for vacations
else
{
    $insert_query = "INSERT into vacation_logs (email,stop_date,time,resume_date,no_of_days) VALUES ('$_SESSION[email]','$date','$time','$resume','$schedule')";
    $query_result = mysqli_query($connect, $insert_query) or die(mysqli_error($connect));
    
    executeIntegromatScenario('https://hook.integromat.com/kt27ecxk46ij7ngv3907sqa6u12jcltv?Days='.$schedule);
    
    // echo ("<script>alert('The dates have been feeded into the database.'); location.href='./../index.php#schedule'</script>");
    header("location: ./../index.php#schedule");
}


?>