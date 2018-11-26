<?php
include("../includes/classes/Account.php");
include("../includes/classes/ErrorMessages.php");
$account = new Account();

include("../includes/handlers/signUpHandler.php");

?>

<body>
        <!-- <form action="../pages/index.php?id=login" method="post"> -->
        <form method="post">
        <h1>Sign up</h1>
        <p>
            <?php $account->getError(ErrorMessages::$usernameNotLongEnough) ?>
            <label for='username'>Username: </label>
            <input id='username' name='username' type="text" placeholder="eg. jessie873" required>
</p>
        <p>
             <?php $account->getError(ErrorMessages::$firstNameNotLongEnough) ?>
            <label for='firstName'>First name: </label>
            <input id='firstName' name='firstName' type="text" placeholder="eg. John" required>
</p>
        <p>
             <?php $account->getError(ErrorMessages::$lastNameNotLongEnough) ?>
            <label for='lastName'>Last name: </label>
            <input id='lastName' name='lastName' type="text" placeholder="eg. Appleseed" required>
</p>
        <p> <?php $account->getError(ErrorMessages::$invalidAddress) ?>
        <?php $account->getError(ErrorMessages::$invalidAdressNumber) ?>
       
            <label for='address'>Address : </label>
            <input id='address' name='address' type="text" placeholder="eg. Stiglimattstrasse 23" required>
</p>
        <p> <?php $account->getError(ErrorMessages::$invalidZipCode) ?>
        <p> 
        <p> 
            <label for='zipcode'>Zip code: </label>
            <input id='zipcode' name='zipcode' type="text" placeholder="eg. 3250" required>
<?php $account->getError(ErrorMessages::$cityNotFound) ?>
            <label for='city'>City: </label>
            <input id='city' name='city' type="text" placeholder="eg. Bern" required>
</p>
 <p><label for='country'>Country: </label>
            <select id='country' name='country'>
                <?php
                $countries = array(0 => 'Australia', 'France', 'German', 'Great-Britain', 'Japan', 'New Zealand', 'Switzerland', 'USA');
                foreach ($countries as $country)
                    echo "<option>$country";
                ?>
            </select>
        </label>
    </p>
    <p>
        <?php $account->getError(ErrorMessages::$emailsDoNotMatch) ?>
        <?php $account->getError(ErrorMessages::$invalidEmail) ?>
    <label for='email'>Email: </label>
    <input id="email" type="email" placeholder="e.g john@eta.com" required>
    </p>
    <p>
    <label for="emailConfirm">Confirm email: </label>
    <input id="emailConfirm" type="email" required>
    </p>
<p>
    <?php $account->getError(ErrorMessages::$passwordsDoNotMatch) ?>
    <?php $account->getError(ErrorMessages::$invalidPassword) ?>
    <?php $account->getError(ErrorMessages::$passwordNotLongEnough) ?>
            <label for="passsword">Password: </label>
            <input  id="password" name="password" type="password" placeholder="e.g 123hun73"  required>
</p>
<p>
            <label for="passwordConfirm">Confirm passsword: </label>
            <input  id="passwordConfirm" name="passwordConfirm" type="password" required>
</p>
            <button type="submit" name="signUpBtn" value="Sign up" alt="Login">Sign up</button>
            
        </form>
</body>
</html>


