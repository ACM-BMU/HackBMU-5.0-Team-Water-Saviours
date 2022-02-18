<?php
    $connect = mysqli_connect("localhost", "u195637119_vishalsproject", "ZGfgxEaPNJyx@9j", "u195637119_wheels4water");
    
    $search_query = "SELECT * FROM vacation_logs";
    $search_query_result = mysqli_query($connect,$search_query) or die(mysqli_error($connect));
    
    while($rows = mysqli_fetch_array($search_query_result)) {
        $stop = $rows['stop_date'];
        $time = $rows['time'];
        $resume = $rows['resume_date'];
        
        $today_date = date("Y/m/d");
        date_default_timezone_set("Asia/Kolkata");
        $today_time = date("H:i:s");
        
        
        if($today_date >= $resume and $today_time >= $time) {
            
            // delete the value placed in the Integromat's scenario
            $ch = curl_init();
            $address = "https://hook.integromat.com/usyhyd84clw2q3mdgpe0lmb7ed34ewt9";
            curl_setopt($ch, CURLOPT_URL, $address);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            //Execute the request.
            $data = curl_exec($ch);
            
            // After updating the google sheet, also delete the record in the database
            $delete_query = "DELETE FROM vacation_logs WHERE email='$rows[email]'";
            $delete_query_result = mysqli_query($connect,$delete_query) or die(mysqli_error($connect));
        }
    }
?>