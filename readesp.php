<?php
    header("Content-type: application/json");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbbase = "datamoney";
    
    $id = $_GET['id'];
    $conn = new mysqli($servername, $username, $password, $dbbase);
        if($conn->connect_error){
            die("connect fail" . $conn->connect_error);
        }

        $a = $conn->query("SELECT * FROM submitmoney WHERE id = '$id' ");
        $row = $a->fetch_assoc();
        $data = array("id" => $row['id'] , "money" => $row['money']);
        echo json_encode($data);

?>