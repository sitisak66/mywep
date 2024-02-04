<?php
    session_start();
    include('index.php');
    $errors = array();

    if (isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password2']);
    }
    
    if (empty($password_1)){
        array_push($errors, "กรุณาใส่รหัสผ่าน");

    }

    if ($password_1 != $password_2){
        array_push($errors, "รหัสผ่านไม่ตรงกัน");
    }
    $username_check_query = "SELECT * FROM listmember WHERE username = '$username'";
    $query = mysqli_query($conn, $username_check_query);
    $result = mysqli_fetch_assoc($query);

    if($result){
        if($result['username'] == $username){
            array_push($errors, 'มีชื่อผู้ใช้นี้เเล้ว');
        }
        
    }

    if(count($errors) == 0){
        $password = md5($password_1);
    }

    $sql = "INSERT INTO listmember (username, password) VALUES('$username', $password_1)";
    mysqli_query($conn, $sql);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = "คุณล็อคอินเเล้วตอนนี้";
    header('location: hompage.php')
    

?>