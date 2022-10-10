<?php include "connect.php" ?>
<html>
    <head>
        <meta charset="UTF-8">
</head>
<body>
    <form action="member.php" method="POST">
        username: <input type="username" name="username"><br>
        password: <input type="password" name="password"><br>
        ชื่อสมาชิก: <input type="text" name="name"><br>
        ที่อยู่: <input type="text" name="address"><br>
        เบอรืโทร: <input type="text" name="mobile"><br>
        อีเมล: <input type="email" name="email"><br>
        <input type="submit" value="เพิ่มสมาชิก">
    </form>
</body>
</html>