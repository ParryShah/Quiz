<?php
session_start();
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['ename'];
        $eno = $_POST['enumber'];
        $_SESSION["ename"]=$username;
        $_SESSION["eno"]=$eno;
        $sql = "select * from login where username = '$username' and enumber = '$eno'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: questions.php");
        }  
        else{  
            echo  '<script>
            alert("Login failed. Invalid username or password!!")
                        window.location.href = "index.php";
                    </script>';
        }     
    }
    ?>