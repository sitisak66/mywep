<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    
</head>
<body>

    <div class = header><h1>ลงทะเบียน</h1></div>
    <form action = registerdb.php method='POST' >
         <?php include('errors.php'); ?>
        <div class="input-group">
            <label for ="username">username</label>
            <input type='text' name="username">
        </div>
        <div class="input-group">
            <label for = "password1">password</label>
            <input type='password' name="password1">
        </div>
        <div class="input-group">
            <label for = "passwprd2">confirm password</label>
            <input type='password' name="password2">
        </div>
        <div class="input-group">
            <label for = "submit">ลงทะเบียน</label>
            <input type='submit' name="reg_user" class = 'btn'>
        </div>
         <p>คุณเป็นสมาชิกเเล้วใช่ไหม?<a href = login.php>ลงชื่อเข้าใช้งาน </a></p>
       
    </form>
</body>
</html>