<?php
if (isset($_POST['loginBtn'])) {

}


if (isset($_POST['loginBtn'])) {
    $user = usernameCleaner($_POST['username']);
    echo "<script type='text/javascript'>alert('Log in $user successful!');</script>";
}
