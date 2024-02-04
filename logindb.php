<?php
    session_start();
    include('index.php');

    $errors = array();
    if (isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password1']);
        
    }
    if (empty($username)){
        array_push($errors, "username is required");

    }
    if (empty($password)){
        array_push($errors, "password is required");

    }


    

    if (count($errors) == 0) {
        $password = md5($password); 
        $query = "SELECT * FROM listmember WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);
    
        if ($result) {
            
            if (mysqli_num_rows($result) == 1) {
                
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "คุณล็อกอินแล้ว";
                header('location: hompage.php');
                
            } else {
                array_push($errors, "รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้อง");
                $_SESSION['error'] = "คุณล็อกอินล้มเหลว";
                header("location: hompage.php");
            }
        } 
    }
    

?>