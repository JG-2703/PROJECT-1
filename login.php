<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>

    <style>
        #splash{width: 100%;height: 100%;position: absolute;background: black;display: flex;flex-direction: column;opacity: 10;transition: opacity 1s;top: 0;left: 0;justify-content: center;align-items: center;}
        .logo{width: 400px;}
        #splash.fade{opacity: 0;}
    </style>

</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {

    }
?>
    
    <div id='splash'>
            <img class='logo' src="Black Gold Classic Jewellery Logo.png"></img>
    </div>
    <script>
            setTimeout(() => {
                document.getElementById('splash').classList.toggle('fade')
            }, 1000);
    </script>
        
    <center><img src="https://media4.giphy.com/media/VseXvvxwowwCc/200w.webp?cid=ecf05e47eeynliblty9u0ssm1nyluf21pdfp0e90ba1yj7tm&rid=200w.webp&ct=g" alt="Loading" style="width:200px;height:200px;"></center>
    <center><h1 class="text-center">E-PARAMARSH</h1></center>


    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>

</body>
</html>
