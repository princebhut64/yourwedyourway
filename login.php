<?php
include('connection.php');
if(isset($_POST['submit'])){
    $r = strcmp("Sign In", $_POST['submit']);
    if($r == 0){
        $sql = "select * from myapp_user where email = '".$_POST['email']."' and password = '".$_POST['password']."'";
        $q = mysql_query($sql) or die(mysql_error() . $sql);
        $r = mysql_fetch_assoc($q);
        if($r){
            $_SESSION["udata"] = $r;
            if($r['role'] == "Artist"){
                echo '<script>alert("Login Sucessfully"); window.location="index.php?p=profile";</script>';
            } else{
                echo '<script>alert("Login Sucessfully"); window.location="index.php";</script>';
            }
            
        } else{
            echo '<script>alert("Email & Password are wrong"); window.location="index.php";</script>';
        }
    }else{
        $sql = "select COUNT(*) as cnt from myapp_user where email = '".$_POST['email']."'";
        $q = mysql_query($sql) or die(mysql_error() . $sql);
        $r = mysql_fetch_assoc($q);

        // print_r($r);
        // exit;

        if($r['cnt'] > 0){
            echo '<script>alert("You have already registered with us."); window.location="login.php";</script>';
        } else{
            if($_POST['password'] == $_POST['cpassword']){
                $sql1 = "INSERT INTO myapp_user (fname, lname, email, password, contactno, role, status) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['contactno']."','".$_POST['role']."', 'active')";
                $q1 = mysql_query($sql1) or die(mysql_error() . $sql1);
            
                if($q1){
                    echo '<script>alert("Registration Sucessfully"); window.location="login.php";</script>';
                }
            } else{
                    echo '<script>alert("Password & Confirm Password Not match."); window.location="login.php";</script>';
            }
            
        }
    }
}

?>

<html class="no-js">
    <head>
        <title>Artist Hub</title>
        <meta charset="utf-8">
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

            * {
                box-sizing: border-box;
            }

            body {
                background: #f6f5f7;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                font-family: 'Montserrat', sans-serif;
                height: 100vh;
                margin: -20px 0 50px;
            }

            h1 {
                font-weight: bold;
                margin: 0;
            }

            h2 {
                text-align: center;
            }

            p {
                font-size: 14px;
                font-weight: 100;
                line-height: 20px;
                letter-spacing: 0.5px;
                margin: 20px 0 30px;
            }

            span {
                font-size: 12px;
            }

            a {
                color: #333;
                font-size: 14px;
                text-decoration: none;
                margin: 15px 0;
            }

            button {
                border-radius: 20px;
                border: 1px solid #FF4B2B;
                background-color: #FF4B2B;
                color: #FFFFFF;
                font-size: 12px;
                font-weight: bold;
                padding: 12px 45px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: transform 80ms ease-in;
            }

            button:active {
                transform: scale(0.95);
            }

            button:focus {
                outline: none;
            }

            button.ghost {
                background-color: transparent;
                border-color: #FFFFFF;
            }

            form {
                background-color: #FFFFFF;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 50px;
                height: 100%;
                text-align: center;
            }

            input {
                background-color: #eee;
                border: none;
                padding: 12px 15px;
                margin: 8px 0;
                width: 100%;
            }

            .container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                        0 10px 10px rgba(0,0,0,0.22);
                position: relative;
                overflow: hidden;
                width: 768px;
                max-width: 100%;
                min-height: 480px;
            }

            .form-container {
                position: absolute;
                top: 0;
                height: 100%;
                transition: all 0.6s ease-in-out;
            }

            .sign-in-container {
                left: 0;
                width: 50%;
                z-index: 2;
            }

            .container.right-panel-active .sign-in-container {
                transform: translateX(100%);
            }

            .sign-up-container {
                left: 0;
                width: 50%;
                opacity: 0;
                z-index: 1;
            }

            .container.right-panel-active .sign-up-container {
                transform: translateX(100%);
                opacity: 1;
                z-index: 5;
                animation: show 0.6s;
            }

            @keyframes show {
                0%, 49.99% {
                    opacity: 0;
                    z-index: 1;
                }
                
                50%, 100% {
                    opacity: 1;
                    z-index: 5;
                }
            }

            .overlay-container {
                position: absolute;
                top: 0;
                left: 50%;
                width: 50%;
                height: 100%;
                overflow: hidden;
                transition: transform 0.6s ease-in-out;
                z-index: 100;
            }

            .container.right-panel-active .overlay-container{
                transform: translateX(-100%);
            }

            .overlay {
                background: #FF416C;
                background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
                background: linear-gradient(to right, #FF4B2B, #FF416C);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 0 0;
                color: #FFFFFF;
                position: relative;
                left: -100%;
                height: 100%;
                width: 200%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            }

            .container.right-panel-active .overlay {
                transform: translateX(50%);
            }

            .overlay-panel {
                position: absolute;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 40px;
                text-align: center;
                top: 0;
                height: 100%;
                width: 50%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            }

            .overlay-left {
                transform: translateX(-20%);
            }

            .container.right-panel-active .overlay-left {
                transform: translateX(0);
            }

            .overlay-right {
                right: 0;
                transform: translateX(0);
            }

            .container.right-panel-active .overlay-right {
                transform: translateX(20%);
            }

            .social-container {
                margin: 20px 0;
            }

            .social-container a {
                border: 1px solid #DDDDDD;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
            }

            footer {
                background-color: #222;
                color: #fff;
                font-size: 14px;
                bottom: 0;
                position: fixed;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 999;
            }

            footer p {
                margin: 10px 0;
            }

            footer i {
                color: red;
            }

            footer a {
                color: #3c97bf;
                text-decoration: none;
            }

            .signinup{
                border-radius: 20px;
                border: 1px solid #FF4B2B;
                background-color: #FF4B2B;
                color: #FFFFFF;
                font-size: 12px;
                font-weight: bold;
                padding: 12px 45px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: transform 80ms ease-in;
                width: 50%;
            }

            .radio_container {
                display: flex;
                justify-content: space-around;
                align-items: center;
                background-color: #eee;
                width: 280px;
                height: 35px;
                /* border-radius: 9999px; */
                box-shadow: inset 0.5px 0.5px 2px 0 rgba(0, 0, 0, 0.15);
            }

            input[type="radio"] {
                appearance: none;
                display: none;
            }

            label {
                font-family: "Open Sans", sans-serif;
                font-size: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: inherit;
                width: 80px;
                height: 25px;
                text-align: center;
                border-radius: 9999px;
                overflow: hidden;
                transition: linear 0.3s;
                color: #6e6e6edd;
            }

            input[type="radio"]:checked + label {
                /* background-color: #1e90ff; */
                background: linear-gradient(to right, #FF4B2B, #FF416C);
                color: #f1f3f5;
                font-weight: 600;
                transition: 0.3s;
            }
        </style>
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1>Create Account</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span> -->
                    
               
                    <input type="text" placeholder="First Name" name="fname"/>
                    <input type="text" placeholder="Last Name" name="lname"/>
                    <input type="email" placeholder="Email" name="email"/>
                    <input type="text" placeholder="Contact No" name="contactno"/>
                    <input type="password" placeholder="Password" name="password"/>
                    <input type="text" placeholder="Confirm Password" name="cpassword"/>

                    <span>Choose User Type</span>
                    <div class="radio_container">
                        <input type="radio" name="role" id="user" value="user" checked>
                        <label for="user">User</label>
                        <input type="radio" name="role" id="artist" value="artist"> 
                        <label for="artist">Artist</label>
                    </div>

                    
                    <!-- <button>Sign Up</button> -->
                    <input type="submit" class="signinup" name="submit" value="Sign Up">
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form method="post">
                    <h1>Sign in</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span> -->
                    <input type="email" placeholder="Email" name="email"/>
                    <input type="password" placeholder="Password" name="password"/>
                    
                    <a href="#">Forgot your password?</a>
                    <!-- <button type="submit">Sign In</button> -->
                    <input type="submit" class="signinup" name="submit" value="Sign In">
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</html>
