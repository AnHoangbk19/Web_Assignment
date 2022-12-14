<?php
if (isset($_SESSION["user"])) {
	header("Location: http://localhost/Web_Assignment/Home/admin_show");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/Web_Assignment/Home">
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./assets/css/loginstyle.css" rel="stylesheet">
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
            <form action="Login/login" method = "POST">
                <div class="sign-in-htm">
                    <?php
                        if(isset($data["result"])){
                            if($data["result"]== false){
                                echo '
                                    <h6 class ="alert alert-danger"> ????ng nh???p kh??ng th??nh c??ng </h6>
                                ';
                            }
                        }
                    ?>
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name = "username" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name = "pass" data-type="password">
                    </div>
                    
                    <div class="group">
                        <input type="submit" name="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
            </form>
			
            <form action="Login/signup" method = "POST">
                <div class="sign-up-htm">
                    <?php
                        if(isset($data["result2"])){
                            if($data["result2"] != "success"){
                                echo '
                                    <script>alert("'.$data["result2"].'")</script>
                                ';
                            } else {
                                echo '
                                <script>alert("T???o t??i kho???n th??nh c??ng!")</script>
                                '; 
                            }
                        }
                    ?>
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" name="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="rpass" class="label">Repeat Password</label>
                        <input id="rpass" name="rpass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="fullname" class="label">Fullname</label>
                        <input id="fullname" name="fullname" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="phone" class="label">Number Phone</label>
                        <input id="phone" name="phone" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" name="submit2" class="button" value="Sign Up">
                    </div>
                    <hr>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div>
            </form>
			
		</div>
	</div>
</div>
</body>
</html>