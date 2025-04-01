<?php
function sanitize_input($data){
    $data=trim($data);      //Remove unnnecessary spaces
    $data=stripslashes($data);      //Remove backslashesh(\)
    $data=htmlspecialchars($data);                         // Convert special character to html entities
    return $data;
}

//Check if form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=sanitize_input($_POST["name"]);
    $email=sanitize_input($_POST["email"]);
    $message=sanitize_input($_POST["message"]);

    echo "Sanitized Name: ".$name."<br>";
    echo "Sanitized Email: ".$email."<br>";
    echo "Sanitized Message: ".$message."<br>";

}
?>

<form method="post" action="">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Message: <textarea name="message"></textarea><br>
<input type="submit" value="submit">
</form>
