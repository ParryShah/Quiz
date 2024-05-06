<?php 
    include("connection.php");
    include("login.php")
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <title>Vishweshwar - Online Quiz</title>
        <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome/css/all.min.css" />
	<script src="js/jquery-3.5.1.min.js"></script>
	<link rel="shortcut icon" href="./img/logo.png""/>
    </head>
    <body class="" oncontextmenu="return false;">
        <!-- content here  -->
        <div class="container ">
            <div class="left">
                <img src="./img/logo.png" alt="Logo" id="tilt">
                
            </div>
            <div class="right">
                <h1 class="title">Welcome to Vishweshwar Bank online Quiz</h1>
                <form id="userForm" action="login.php" method="POST" onsubmit="return checkuser();">
                    <label for="name">Name:</label><br>
                    <div class="input-icons">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" type="text" id="ename" name="ename" value="shah" tabindex="1" required><br>
                    <label for="number">Employee number:</label><br>
                    <i class="fa fa-key icon"></i>
                    <input type="text" class="input-field" id="enumber" name="enumber" value="0699" tabindex="2" required><br>
                </div>
                <h2>Features :-</h2>
                
                <ul>
                    <li>10 Questions (201 seconds each)</li>
                    <li>10 Points for correct score</li>
                    <li>200 seconds timer</li>
                    <li>Random Questions</li>
                    <li>Get results Any Time</li>
                </ul>
                <div class="ibutton">
                <button type="submit" value="submit" name="submit">Let's Start</button>
                <!-- onclick="return checkuser();" -->
                </div>
            </form>
                 <!-- <a href="questions.html">Let's Start Quiz</a> -->
                </div>
        </div>
    </body>
    <script src="js/tilt.min.js"></script>
    <script src="js/fdata.js"></script>
    <script src="js/index.js"></script>
    <script src="js/savedata.js"></script>
    <script>
        $("#tilt").tilt({
            scale: 1.1
        })
    </script>
</html>
