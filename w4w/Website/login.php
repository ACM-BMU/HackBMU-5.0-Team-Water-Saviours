<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>W4W | login</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body class="d-md-flex align-items-md-center justify-content-xxl-center align-items-xxl-start" style="background: url(&quot;img/header.jpg&quot;); user-select:none">
    <div class="container" style="margin-top: 18vh; margin-bottom:18vh;padding: 20px;background: #f7f3f3;border-radius: 15px;">
        <div class="row" style="height: 330px;">
            <div class="col-md-6 d-xxl-flex" data-bss-hover-animate="pulse" style="background: url(&quot;img/login.jpg&quot;) center / contain no-repeat;border-radius: 15px;border-width: 3px;border-style: none;">
                <div></div>
            </div>
            <div class="col-md-6 d-xxl-flex justify-content-xxl-center align-items-xxl-start">
                <div class="d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center align-items-xxl-center" style="padding: 3px;height: 330px;">
                    <div class="text-start" style="margin-top: 18px;">
                        <div>
                            <p class="text-center pulse animated" style="font-size: 25px;font-weight: bold;border-radius: 20px;color: #4688d6;border: 3px inset #4688d6 ;"><i class="fa fa-user" style="margin-right: 5px;"></i>User Login</p>
                        </div>

                        <!-- Form & i/p fields -->
                        <form action="utilities/login_script.php" method="post">
                            <div style="background: #e3e3e3;border-radius: 25px;padding: 10px;"><i class="fa fa-envelope" style="margin-left: 15px;"></i>
                                <input type="email" name="email" style="width:80%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="Email" required>
                            </div>
                            <div style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;"><i class="fa fa-lock" style="margin-left: 15px;font-size: 20px;"></i>
                                <input type="password" name="pwd" style="width:80%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="Password" required="" title="Minimum 8 characters and 1 special character required">
                            </div>
                            <div style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;">
                                <select name="choice" aria-label="Default select example" style="width:92%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;">
                                    <option>Login</option>
                                    <option>Add</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" style="border-radius: 25px;padding: 10px;margin-top: 15px;" type="submit">Proceed</button>
                            </div>
                        </form>

                        <div style="margin-top: 5px; padding: 0px 12px">
                            <p class="text-center">
                                New here? Click <a href="signup.php">here</a> to create account
                            </p>
                        </div>
                    </div>
                </div>
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
        
        // Unabling the user to either inspect or view page source
        document.addEventListener('contextmenu', event => event.preventDefault());

        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
</body>

</html>