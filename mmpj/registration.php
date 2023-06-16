<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>





    <style>
    body {
        background-image: url('lapy4.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: 70px 25px 25px 25px;
    }
    
    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    
    .active {
        background-color: #717171;
    }
    
    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    /* Three image containers (use 25% for four, and 50% for two, etc) */
    .column {
        float: left;
        width: 50%;
        padding: 5px;
    }
    
    /* Clear floats after image containers */
    .row {
        content: "";
        clear: both;
        display: table;
    }
    
    @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    
        </style>

</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $number   = stripslashes($_REQUEST['number']);
        $number   = mysqli_real_escape_string($con, $number);
        $dob      = stripslashes($_REQUEST['dob']);
        $dob      = mysqli_real_escape_string($con, $dob);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email,number,dob, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email','$number','dob', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {

    }
?>
    
    <div class="row">
    <div class="column">
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" name="number" placeholder="Contact Number">
        <input type="date" class="login-input" name="dob" placeholder="DOB">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
    </div>
    


    <div class="column">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="lapy11.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="lapy7.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="lapy9.jpg" style="width:100%">
            </div>
        </div>
        <br>
        
        <div style="text-align:center" >
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        </div>
        
        <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        </div>
    </div>

</body>
</html>