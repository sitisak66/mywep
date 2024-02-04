<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "คุณต้องล็อคอินก่อน!";
        header('location: login.php');

    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
        exit; 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ล็อคอิน</title>
</head>
<body>
    <div class = "header"><h2>HOME PAGE</h2></div>

    <div class = "content">
        <?php if(isset($_SESSION['success'])):?>
            <div class = 'success'>
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                    
                </h3>
            </div>
        <?php endif?>
        

    </div>
    <div>
        <label >ชำระเงิน</label>
        <form actoin = "" method = "POST" >
            <p> <input type = 'hidden' name = 'va' value = 10></p>
            <p> <input type = 'submit' name = 'submit' value = 10 ></p>  
        </form>
        <form actoin = "" method = "POST" >
            <p> <input type = 'hidden' name = 'va' value = 20></p>
            <p> <input type = 'submit' name = 'submit' value = 20 ></p>  
        </form>
        <form actoin = "" method = "POST" >
            <p> <input type = 'hidden' name = 'va' value = 30></p>
            <p> <input type = 'submit' name = 'submit' value = 30 ></p>

        </form>
        <form actoin = "" method = "POST" >
            <p> <input type = 'hidden' name = 'va' value = 40></p>
            <p> <input type = 'submit' name = 'submit' value = 40 ></p>  
        </form>
        <form actoin = "" method = "POST" >
            <p> <input type = 'hidden' name = 'va' value = 50></p>
            <p> <input type = 'submit' name = 'submit' value = 50 ></p>  
        </form>
        <p><a href = "login.php?logout='1'" style='color: red'>ล็อคเอาท์</a></p>
        

    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbbase = "datamoney";
    if(isset($_POST['submit'])){
        $va = $_POST['va'];
        $conn = new mysqli($servername, $username, $password, $dbbase);
        if($conn->connect_error){
            die("connect fail" . $conn->connect_error);
        }
        $conn->query("UPDATE submitmoney SET money = '$va' WHERE id = 2 ");
        header('location: submit.php');

    }


    ?>
    <table>
        <tr>
            <th>จำนวนเงิน(บาท)</th>
            <th>ปริมาณน้ำที่ได้(ลิตร)</th>
        </tr>
        
    </table>

    
</body>
</html>