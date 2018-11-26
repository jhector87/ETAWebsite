<?php
include("../includes/classes/Account.php");
$account = new Account();

include("../includes/handlers/loginHandler.php");
?>

<html>
<body>
    <!-- Creates a request access -->
        <form action="../pages/index.php?id=login" method="post">
        <h1>Sign In</h1>
        <p>
            <label for='username'>Username: </label>
            <input id='username' name='username' type="text" placeholder="eg. jessie873" required>
</p>
<p>
            <label for="passsword">Password: </label>
            <input  id="password" name="password" type="password" placeholder="e.g 123hun73"  required>
</p>
            <button id='login' type="submit" name="loginBtn" value="Login" alt="Login" onclick="loginSuccesful()">Log in</button>

            <p><a href="../pages/index.php?id=signup" style="font-size: 13px; color: lightgray; ">Sign Up</a> </p>
<!--            <a style="margin-top: 10px;"><img src="../res/icons/rocket-2.png"></a>-->
        </form>

</body>
</html>

