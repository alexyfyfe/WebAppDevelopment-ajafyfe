<?php
include("dbconnect.php");
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include("scripts/header.php");
    ?>
    <main>
        <form action="signup" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <p><input type="submit" value="Submit"></p>
        </form>
    </main>

    <?
    include("scripts/footer.php");
    include("scripts/dbconnect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

    if(mysqli_query($db,$sql)){
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_errno($db);
    }

    header("location:phpcms.php");

?>








