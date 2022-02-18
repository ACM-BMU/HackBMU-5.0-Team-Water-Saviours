<?php
    require 'common.php';
    
    $winner = "Select * FROM quiz ORDER BY score DESC";
    $winner_result = mysqli_query($connect,$winner) or die(mysqli_error($connect));
    $i = 0;
    while($winners = mysqli_fetch_array($winner_result)) {
            
        if($i==0) {
            $winner1_name = $winners['name'];
            $winner1_email = $winners['email'];
            $winner1_points = $winners['score'];
        } elseif ($i==1) {
            $winner2_name = $winners['name'];
            $winner2_email = $winners['email'];
            $winner2_points = $winners['score'];
        }
                
    $i++;
    }
    if($_SESSION['email'] == $winner1_email || $_SESSION['email'] == $winner2_email) {
        
    $subject = "Specially for Winners"; 
 
    if($_SESSION['email'] == $winner1_email) {
    
    $htmlContent = ' 
    <html>

    <body>

    <div style="margin: auto; border:5px solid #E49B0F; border-radius: 10px; width:500px; text-align: center">

        <img src="https://i.ibb.co/7SJ5qSC/final-logo.png" height="250" width="480" alt="done" border="0">

        <div style="background: #FFD700; padding: 5px 0px;">
            <p><span
                    style="background: whitesmoke; font-size:45px; font-weight: 500; border-radius: 8px; padding: 0px 5px">congratulates
                    you</span></p>
        </div>

        <h5 style="font-size: 18px">STEPS TO REDEEM BENEFIT</h5>

        <p style="width:350px; margin:auto; margin-bottom:5px">As promised, here is the email containing the coupon code
            as
            well as the steps to redeem it.</p>

        <div style="width:350px; margin: auto;">

            <table style="width:85%;border: 3px solid #FFD700; border-radius: 10px;margin:auto">
                <tr>
                    <th style="border: 3px solid #FFD700; width:45%;">Coupon Code</th>
                    <th id="Hello" style="border: 3px solid #FFD700;">FIRST12045</td>
                    </th>
                </tr>
            </table>

            <p style="text-align:justify">
                1. If you have a <b>verified</b> account on DigitalOcean then you can simply login into your acocunt by
                clicking
                <a href="https://cloud.digitalocean.com/login" target="_blank">here</a>.
                By verified it means that your digitalocean account should include a valid credit card or a PayPal
                account linked
            </p>

            <p style="text-align:justify">
                2. If you don\'t have an account there, you can just signup through the same link
            </p>

            <p style="text-align:justify">
                3. Now go to the <a href="https://cloud.digitalocean.com/account/billing" target="/blank">billings</a>
                section and there you can use the coupon code to redeem $100 credit.
            </p>
        </div>

        <div style="background: #FFD700; padding: 5px 0px;">
            <p><span
                    style="background: whitesmoke; font-size:20px; font-weight: 500; border-radius: 8px; padding: 0px 5px">Wheels4Water
                    is wishing you best of <br>luck for your future</span></p>
        </div>

    </div>

</body>
    
    </html>';
    }
    
    elseif($_SESSION['email'] == $winner2_email) {
    $htmlContent = ' 
    <html>

    <body>
    <div style="margin: auto; border:5px solid #E49B0F; border-radius: 10px; width:500px; text-align: center">
    
        <img src="https://i.ibb.co/7SJ5qSC/final-logo.png" height="250" width="480" alt="done" border="0">
    
        <div style="background: #FFD700; padding: 5px 0px;">
            <p><span style="background: whitesmoke; font-size:45px; font-weight: 500; border-radius: 8px; padding: 0px 5px">congratulates
                    you</span></p>
        </div>
    
        <h5 style="font-size: 18px"><u>STEPS TO REDEEM BENEFIT</u></h5>
    
        <p style="width:350px; margin:auto; margin-bottom:5px">As promised, here is the email containing the coupon code
            as
            well as the steps to redeem it.</p>
    
        <div style="width:350px; margin: auto;">
    
            <table style="width:85%;border: 3px solid #FFD700; border-radius: 10px;margin:auto">
                <tr>
                    <th style="border: 3px solid #FFD700; width:45%;">Coupon Code</th>
                    <th id="Hello" style="border: 3px solid #FFD700;">SECOND4501</td>
                    </th>
                </tr>
            </table>
    
            <p style="text-align:justify">
                1. If you have a <b>trial</b> account on <b>Twilio</b> then you can simply login into your acocunt by
                clicking
                <a href="https://www.twilio.com/login" target="_blank">here</a>.
            </p>
    
            <p style="text-align:justify">
                2. If you don\'t have an account there, you can just signup through the same link and get your free trial account.
            </p>
    
            <p style="text-align:justify">
                3. Now click on the <b>Upgrade</b> button and then you will be directed to the Upgrade Account Page.
            </p>

            <p style="text-align:justify">
                4. Fill out the adress fields and then proceed ahead. 
            </p>

            <p style="text-align:justify">
                5. In the Tax Information page you have to choose the <b>No, I cannot provide a tax number</b> option and then click 
                on Continue
            </p>

            <p style="text-align:justify">
                6. In the <b>Fund Your Account</b> page, choose the <b>Promo Code</b> section and in there paste the promo code
                which is shared with you in this email. Make sure that you do not enable the auto recharge option
            </p>

            <p style="text-align:justify">
                7. Click on Continue button and then you will have a $50 credit in your Twilio account.
            </p>
        </div>
    
        <div style="background: #FFD700; padding: 5px 0px;">
            <p><span style="background: whitesmoke; font-size:20px; font-weight: 500; border-radius: 8px; padding: 0px 5px">Wheels4Water
                    is wishing you best of <br>luck for your future</span></p>
        </div>
    
    </div>
</body>
    
    </html>';   
    }
    
    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
    // Additional headers 
    $headers .= 'From: vishalsproject@wheels4water.me' . "\r\n"; 
    mail($_SESSION['email'], $subject, $htmlContent, $headers);
    
     header("location: ./../index.php");
    }
    
    header("location: ./../index.php");
?>
