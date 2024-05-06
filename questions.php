<?php 
    include("connection.php");
    include("login.php")
    ?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <title>VSBL - Online Quiz</title>
        <link rel="stylesheet" href="css/style.css" />
        
    </head>
    
    <body oncontextmenu="return false";>
        <!-- content here  -->
        <div class="box" id="questionScreen">
            <div class="title">
                Vishweshwar Online Quiz
            </div>
            
            <div class="header">
                <!-- <div class="scoreBox">Score: <span>0</span></div> -->
                <div class="timerBox">Time left: <span></span></div>
                
            </div>
            <div class="uname">
                Name : <?php echo $_SESSION['ename']?>
                Number :<?php echo $_SESSION['eno']?>
            </div>
            <div class="questionBox">
                <!-- <span>Q</span>  -->
            </div>
            <div class="optionBox">
                <label><div><input class="que" type="radio" name="q1" value="1" id=1><span></span></div></label>
                <!-- <span data-opt="1"></span> -->
                <label><div><input class="que" type="radio" name="q1" value="2" id=2><span></span></div></label>
                <!-- <span data-opt="2"></span> -->
                <label><div><input class="que" type="radio" name="q1" value="3" id=3><span></span></div></label>
                <!-- <span data-opt="3"></span> -->
                <label><div><input class="que" type="radio" name="q1" value="4" id=4><span></span></div></label>
                <!-- <span data-opt="4"></span> -->
            </div>
            <div class="footer">
                <button onclick="showResult(1)">Show Results</button>
                <div class="con">
                    <!-- <button onclick="showPrev()" id="prev" class="disabled"><span>&#8592;</span>prev</button> -->
                    <button onclick="showNext()">Next &#8594;</button>
                </div>
            </div>
            <div class="count">Question <span>1</span>/<qspan>0</qspan>
        </div>
            
        </div>

        <div class="box hidden" id="resultScreen" >
            <div class="title">
                VSBL Online Quiz Result
            </div>
            <div class="scoreBoard">
                Total Score : <span>60</span>
            </div>
            <div class="uname">
            Name : <?php echo $_SESSION['ename']?>
                Number :<?php echo $_SESSION['eno']?><br>
            </div>
            <div class="resultBox">
                
                <label>Questions : </label>
                <span id="totalQuestion"></span>
                <label>Attempt : </label>
                <span id="attemptQuestion"></span>
                <label>Correct : </label>
                <span id="correctQuestion"></span>
                <label>Wrong : </label>
                <span id="wrongAnswers"></span>
            </div>
            <div class="buttonBox">
                <a onclick="insertData()">Start Again</a>
            </div>
        </div>
        <script type="text/JavaScript">
        function insertData() {
            var name = '<?php echo $_SESSION['ename']?>';
            var eno = '<?php echo $_SESSION['eno']?>';
            var totalQuestion = document.getElementById('totalQuestion').textContent;
            var attemptQuestion = document.getElementById('attemptQuestion').textContent;
            var correctQuestion = document.getElementById('correctQuestion').textContent;
            var wrongAnswers = document.getElementById('wrongAnswers').textContent;
            // var totalmarks = parseInt(correctQuestion)*10;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'insert1.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('name=' + name + '&eno=' + eno +'&totalQuestion='+totalQuestion+'&attemptQuestion='+attemptQuestion+'&correctQuestion='+correctQuestion+'&wrongAnswers='+wrongAnswers);

            xhr.onload = function() {
                if (xhr.status == 200) {
                    alert(xhr.responseText);
                } else {
                    alert('Error: ' + xhr.status);
                }
            };
        }
    </script>
    </body>
    <!-- <script src="js/questions.js"></script> -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/quiz.js"></script>
    <script src="js/fdata.js"></script>
    <script src="js/savedata.js"></script>
    <script src="js/script.js"></script>

</html>
