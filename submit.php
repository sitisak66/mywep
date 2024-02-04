<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กดน้ำ</title>
</head>
<body>
    <p>กำลังทำการ</p>
    <form action = "" method="POST" >
        <p> <input type = 'hidden' name = 'va' value = OFF></p>
        <p> <input type = 'submit' name = 'submit' value = OFF></p>
        <p> <input type = 'hidden' name = 'va' value = ON></p>
        <p> <input type = 'submit' name = 'submit' value = ON></p>  
    </form>
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

    
</body>
</html>