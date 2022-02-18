<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body class="d-md-flex align-items-md-center justify-content-xxl-center align-items-xxl-start" style="background: url(&quot;img/header.jpg&quot;);user-select:none">
    <div class="container" style="padding: 20px;background: #ffffff;border-radius: 15px;margin-top: 15vh;margin-bottom: 15vh">
        <div class="row">
            <div class="col-md-6 d-xxl-flex justify-content-xxl-center align-items-xxl-start">
                <div style="padding: 5px;">
                    <div class="text-start">
                        <div>
                            <p class="text-center pulse animated" style="font-size: 25px;font-weight: bold;letter-spacing: 0px;border-radius: 20px;color: #4688d6;border: 3px inset #4688d6;padding: 0px 85px;"><i class="fa fa-th-list" style="margin-right: 5px;"></i>User Sign Up</p>
                        </div>

                        <!-- Form -->
                        <form action="utilities/signup_script.php" method="post">
                            <div data-bss-hover-animate="pulse" style="background: #e3e3e3;border-radius: 25px;padding: 10px;">
                                <input type="email" name="email" style="width:90%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="Email" required>
                            </div>
                            <div data-bss-hover-animate="pulse" style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;">
                                <input type="text" name="username" style="width:90%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="Username" required>
                            </div>
                            <div data-bss-hover-animate="pulse" style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;">
                                <input type="password" name="pwd" style="width:90%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="Password" required title="Min 8 characters, at least 1 letter, 1 number & 1 special character">
                            </div>
                            <div data-bss-hover-animate="pulse" style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;">
                                <input type="password" name="conf_pwd" style="width:90%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="Confirm Password" required="" title="Min 8 characters, at least 1 letter, 1 number & 1 special character">
                            </div>
                            <div data-bss-hover-animate="pulse" style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;">
                                <input type="text" name="device_id" style="width:90%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="Device ID" required>
                            </div>
                            <div data-bss-hover-animate="pulse" style="background: #e3e3e3;border-radius: 25px;padding: 10px;margin-top: 15px;">
                                <input type="text" name="api" style="width:90%;background: rgba(255,255,255,0);border-style: none;margin-left: 11px;" placeholder="API Key" required minlength="25">
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" style="background: #4688d6;border-radius: 25px;padding: 10px;margin-top: 15px;" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-xxl-flex" data-bss-hover-animate="pulse" style="background: url(&quot;img/signin.jpg&quot;) center / contain no-repeat;border-radius: 15px;border-width: 3px;border-style: none;">
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