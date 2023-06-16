<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - COUNSELLING WEBSITE</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
    * {
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial;
        padding: 10px;
        background: #f1f1f1;
    }

    .Logo {
        border-radius: 50%;
        float:left;
    }
    
    /* Header/Blog Title */
    .header {
        overflow: hidden;
        background: white;
    }

    .header-right{
        float:right;
        font-weight:bold;
    }
    
    .header h1 {
        font-size: 40px;
        text-align:center;
        font-family:serif;
        padding: 0px;
    }
    /* Style the top navigation bar */
    .topnav {
        overflow: hidden;
        background-color: #333;
        font-family:serif;
        font-weight:bold;
    }
    /* Style the topnav links */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    /* Change color on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }
    
    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {   
        float: left;
        width: 75%;
    }
   
    
    
    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        background-color: #f1f1f1;
        padding-left: 20px;
    }
    
    /* Fake image */
    .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
    }
    
    /* Add a card effect for articles */
    .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
      
    }
    .card p{
        FONT-weight:bold;
        text-align:center;
    }
    .card p1{
        font-weight:bold;
        font-size:20px;
        text-align:center;
    }
    
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    
    /* Footer */
    .footer {
        padding: 5px;
        text-align: left;
        background: #ddd;
        margin-top: 10px;
    }

    .mySlides {
        display:none;
    }
    
    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }
    
    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
        .topnav a {
            float: none;
            width: 100%;
        }
        }
        </style>


</head>
<body>
    <div class="header">
        <img class="Logo" src="Black Gold Classic Jewellery Logo.png" alt="Avatar" style="width:100px">
        <h1>E-PARAMARSH</h1>
        <div class="header-right">
        Hey, <?php echo $_SESSION['username']; ?>! 
        </div>    
    </div>
    
    <div class="topnav">
        <a href="#">HOME</a>
        <a href="Branches.php">BRANCH</a>
        <a href="collegeindex.php">COLLEGE</a>
        <a href="logout.php" style="float:right"><i class='fas fa-power-off' style='font-size:15px ;color:crimson'></i></a>
    </div>
    
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2 style="font-style:italic;">CAREER GUIDE :-</h2>
                <img src="https://images.pexels.com/photos/9242852/pexels-photo-9242852.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="850" height="400">
              <center>  <p1>"IF YOU CAN DREAM IT, YOU CAN DO IT"</p1> <center>
                
            </div>
            <div class="card">
                <h2>B-TECH</h2>
                <h5 style="font-size:16px;">Bachelor Of Technology:-</h5>
                <div class="w3-content w3-section" style="max-width:500px">
                    <img class="mySlides" src="https://lh5.googleusercontent.com/p/AF1QipNhW_VWlDzK4kDwo8rypt0z6k9Q52pFHnthvtI0=w1440-h810-k-no" width="850" height="300">
                    <img class="mySlides" src="https://www.abes.ac.in/images/Cover1.jpg" width="850" height="300">
                    <img class="mySlides" src="https://images.shiksha.com/mediadata/images/1549264095php2fwk6v.png" width="850" height="300">
                    <img class="mySlides" src="https://www.amity.edu/gurugram/images/about3.jpg" width="850" height="300">
                    <img class="mySlides" src="https://images.shiksha.com/mediadata/images/1483960283phpWWyCEV.jpeg" width="850" height="300">
                    <img class="mySlides" src="https://images.shiksha.com/mediadata/images/1554445838phpH6lGPO.jpeg" width="850" height="300">
                </div>
               <center> <p2>B.Tech is a prestigious and technical engineering degree programme offered to undergraduate applicants after four years of intensive research and practical experience in the field.<br>
                 A bachelor's degree in engineering is the starting point for a successful career in engineering.</p2></center>
                <p3>An engineer can opt to specialize in one of their fields, or they can pursue entrepreneurship or management opportunities. <br> 
                They have the potential to become well-known faculty members of every engineering institution.</p3>
            </div>
        </div>
        
        <div class="rightcolumn">
            <div class="card">
                <h2>About Me</h2>
                <div>
                    <center>
                        <img class="Logo" href="#default" src="Black Gold Classic Jewellery Logo.png" alt="Avatar" style="width:100px" >
                    </center>
                </div>
              <p >Choosing a career has to be the hardest decision that everyone has to make .<br> In order to find the right job for 
              yourself , you have to take a lot into consideration. <br>
              So to achieve this,"E-paramarsh" a career guiding website 
              helps you to discover , prepare and achieve. </p> 
            </div>
            
            <div class="card">
                <h3>Popular Post</h3>
                <div ><img src="https://images.pexels.com/photos/2330137/pexels-photo-2330137.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="250" height="100"></div>
                <div ><img src="https://images.pexels.com/photos/2760243/pexels-photo-2760243.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="250" height="100"></div>
                <div ><img src="https://images.pexels.com/photos/3862632/pexels-photo-3862632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="250" height="100"></div>
            </div>
        </div>
    </div>
    
    
    <div class="footer">
        <p><h8 style="color:black;">For Enquiry:-</h8></p><p style="color:black;">Contact Number:9785453020<br>
        Email ID: E-paramarsh@gmail.com <a style="float:right">
        <i style='font-size:24px' class='fab'>&#xf082;</i>
        <i style='font-size:24px' class='fab'>&#xf08c;</i>
        <i style='font-size:24px' class='fab'>&#xf167;</i>
        <i style='font-size:24px' class='fab'>&#xf081;</i>
        <i style='font-size:24px' class='fab'>&#xf16d;</i>   
    </a>
    </p>

    </div>

    <script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>

</body>
</html>