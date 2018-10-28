<link rel="stylesheet" href="../res/css/formStyling.css">

<h3>SIGN UP SHEET</h3>
<h3>Personal Details</h3>
<form>
    <p>First name: <input type="text" name="first_name"  placeholder="eg. James"></p>
    <p>Last name: <input type="text" name="name" placeholder="eg. Chaplin"></p>
    <p>Middle name/s: <input type="text" name="name" placeholder="eg. Kirsten"></p>
    <p>Username: <input type="text" name="username" placeholder="eg. Kirsten"></p>
    <p>Age: <input type="number" name="age" placeholder="eg. 82"></p>
    <p>Email: <input type="text" name="email" placeholder="eg. john@eta.com"></p>
    <p>Address: <input type="text" name="address" placeholder="e.g William St. 21-32"</p>
    <p>Zip Code: <input type="number" name="address" placeholder="e.g 2331"></p>
    <p>City: <input type="text" name="address" placeholder="e.g NY or BE"></p>
    <p>Country: <label>
            <select>
                <?php
                $countries = array(0 => 'Australia', 'France', 'German', 'Great-Britain', 'Japan', 'New Zealand', 'Switzerland', 'USA');
                foreach ($countries as $country)
                    echo "<option>$country";
                ?>
            </select>
        </label>
    </p>
</form>

<h3>Shipping Address</h3>
<p><input type="radio" name="addressOption">Same as above
<input type="radio" name="addressOption" style="padding-left: 10em;">Other</p>

<p> <input type="submit" name="submit" value="Submit Details"></p>

