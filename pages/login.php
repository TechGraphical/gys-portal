<?php
if(isset($_POST['submit'])){
    $usrname = $_POST['username'];
    $pass = $_POST['password'];
    echo $usrname;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYS - Portal</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter password">
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>

