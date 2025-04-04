<?php

//if username and password is same then only it will consider it other wise give error 
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $password) {
        echo "<script>alert('Login Successful!');</script>";
    } else {
        $error = "Username and Password must be the same!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p style="color: red;"> <?php echo $error; ?> </p>
</body>
</html>


