<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ล็อคอิน</title>

</head>
<body>

    <div class = "header"><h1>ล็อคอิน</h1></div>
    <form method='POST' action = logindb.php>
        <?php if(isset($_SESSION['error'])):?>
            <div class = 'error'>
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                    
                </h3>
            </div>
        <?php endif?>
       
        <div class="input-group">
            <label for ="username">username</label>
            <input type='text' name="username">
        </div>
        <div class="input-group">
            <label for = "password1">password</label>
            <input type='password' name="password1">
        </div>
        <div class="input-group">
            <label for = "submit">ลงชื่อเข้าใช้งาน</label>
            <input type='submit' name="login_user">
        </div>
         <p>คุณลงทะเบียนเเล้วหรือยัง? <a href = member.php>ลงทะเบียน</a></p>