<?php
    if(!isset($_SESSION)){ 
        session_start(); 
    }
    include("connect.php");
    
    $_SESSION['loggedin'] = false;
    $_SESSION['tries'] = 0;

    if(count($_POST) > 0){
        $isSuccess = 0;

        $connect = new mysqli($server, $user, $pass, $db);
                            
        $userName = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$userName' AND password = '$password'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $name = $row['customerName'];
                            
                            
        if($count == 1){  
            $_SESSION['username'] = $userName;
            $_SESSION['name'] = $name;
            $_SESSION['loggedin'] = true;
            header("Location: index.php");
        }
        else{
            $_SESSION['wrongpass'] == 1;
            header("Location: login.php");
        }
        $_SESSION['tries'] += 1;
        exit;
    }
?>