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
                            
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $sql = "SELECT * FROM customers WHERE Username = '$Username' AND Password = '$Password'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $name = $row['Name'];
                            
                            
        if($count == 1){  
            $_SESSION['Username'] = $Username;
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
