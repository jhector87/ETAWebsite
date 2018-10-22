<html>
<body>
    <!-- Creates a request access -->
        <form action="login.php" method="post">
            <p><input type="text" placeholder="Email..." name="email"></p>
            <p><input type="password" placeholder="Password..." name="password"></p>
            <br>
            <input type="submit" name="Login" value="Login" alt="Login"><br>

            <p><a href="signup.php" style="font-size: 13px; color: lightgray; ">Sign Up</a> </p>
            <a style="margin-top: 10px;"><img src="../res/icons/rocket-2.png"></a>
        </form>
</body>
</html>

<?php
require("Users.php");

if (isset($_POST["Login"])) {
    $userName = $_POST["email"];
    $password = $_POST["password"];

//    if ($userName == "user@gmail.com" && $password == "abcd123") {
    if (userInDB($userName)) {
        global $username;
        $name = explode('@', $userName);
        echo "Welcome $name[0]!";
        echo "<a href=\"index.php?id=login\">Welcome $name[0]</a>";
    } else {
        echo "Cannot login, please try again";
    }
}