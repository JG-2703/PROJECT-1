<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Branchdash</title>
        <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }
        
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        
        .flip-card-front {
            background-color: #bbb;
            color: black;
        }
        
        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
        }

        /* Three image containers (use 25% for four, and 50% for two, etc) */
        .column {
            float: left;
            width: 20%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .container {
            position: relative;
        }
        
        /* Bottom right text */
        .text-block {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: black;
            color: white;
            padding-left: 20px;
            padding-right: 20px;
        }
        </style>
    </head>
<body >
    <center>
    <h1>B.TECH BRANCHES</h1>
    <div class="row">
    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://images.pexels.com/photos/5473337/pexels-photo-5473337.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Computer Science Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="CS.php" style="text-decoration: none">COMPUTER SCIENCE</a></h1>
                <p>(SPECIALISATION)</p>
                <img src="https://tenor.com/view/skeleton-typing-computer-work-desk-gif-13531194.gif"height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://images.pexels.com/photos/783961/pexels-photo-783961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Aeronautical and Aerospace Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="Aeronotical.php" style="text-decoration: none">AERONOTICAL AND AEROSPACE</a></h1>
                <img src="https://media.giphy.com/media/J1j42AnBY1WoMQKgSx/giphy.gif" height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://images.pexels.com/photos/10515522/pexels-photo-10515522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Chemical Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="Chemical.php" style="text-decoration: none">CHEMICAL ENGINEERING</a></h1>
                <img src="https://media.giphy.com/media/pNDVMY4IedtDy/giphy.gif"height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://uploads.sarvgyan.com/2016/04/biomedical.jpg" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Biomedical Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="Biomedical.php" style="text-decoration: none">BIOMEDICAL ENGINEERING</a></h1>
                <img src="https://media.giphy.com/media/pOlCoRHDWsSGiFa2UE/giphy.gif"height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://images.pexels.com/photos/6325001/pexels-photo-6325001.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Electronics and Communications Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="Electronic.php" style="text-decoration: none">ELECTRONICS AND COMMUNICATIONS</a></h1>
                <img src="https://media0.giphy.com/media/WySK0nQiJKLy25HLhp/giphy.gif?cid=ecf05e47umdmyqrjfbv2g5b8gxee602vngqiuha1qsstu4x1&rid=giphy.gif&ct=g"height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://images.pexels.com/photos/6755135/pexels-photo-6755135.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Electrical Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="Electrical.php" style="text-decoration: none">ELECTRICAL ENGINEERING</a></h1>
                <img src="https://media.giphy.com/media/JE5A5Ik63HUc3vZYS4/giphy.gif"height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://hub.ricssbe.org/hubfs/civil-engineering-MBA.jpg" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Civil Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="Civil.php" style="text-decoration: none">CIVIL ENGINEERING</a></h1>
                <img src="https://media.giphy.com/media/2hgcWW2iJ6hiNOQ3EY/giphy.gif"height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <div class="container">
                <img src="https://images.pexels.com/photos/7564869/pexels-photo-7564869.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" style="width:300px;height:300px;">
                <div class="text-block">
                    <h4>Mechanical Engineering</h4>
                </div>
            </div>
            </div>
            <div class="flip-card-back">
                <h1><a href="Mechanical.php" style="text-decoration: none">MECHANICAL ENGINEERING</a></h1>
                <img src="https://media.giphy.com/media/3oEdv9Y8md1SwyOMYE/giphy.gif"height="130"alt="pic"></img>
            </div>
        </div>
    </div>
    </div>

    </div>

    </center>
</body>
</html>
