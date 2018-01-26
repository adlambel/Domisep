<?= Domisep\Vues\VueHtmlUtils::cssHTML5(\Domisep\Config\Config::getStyleSheetsURL()['account']); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon compte</title>
    <link href="assets/style_account.css" rel="stylesheet"/>

</head>
<body>

<?php include("header_connect.php") ?>

<div id="container">
    <div id="account">
        <h2>My informations</h2>
        <ul class="list_inputs">
            <li class="li_input">
                <input type="text" class="inscri_input" id="lastname" name="lastname" placeholder="Name"/>
            </li>
            <li class="li_input">
                <input type="text" class="inscri_input" id="firstname" name="lastname" placeholder="First name"/>
            </li>
            <li class="li_input">
                <input type="text" class="inscri_input" id="email" name="email" placeholder="email"/>
            </li>
            <li class="li_input">
                <input type="text" class="inscri_input" id="number" name="number" placeholder="Phone"/>
            </li>
            <li class="li_input">
                <textarea id="address" class="inscri_input" name="address" placeholder="Adress"></textarea>
            </li>
            <li class="li_input">
                <input id="zipcode" class="inscri_input" name="zipcode" placeholder="Zip code"/>
            </li>
            <li class="li_input">
                <input id="city" class="inscri_input" name="city" placeholder="City"/>
            </li>
            <li>
                <input type="submit" value="Valider" class="button" style="margin-left: 35%"/>
            </li>
        </ul>
    </div>
    <hr>


    <div id="subscription">
        <h2>My subscription</h2>
        <p>
            Your subscription expires on January 1st 2018<br/>
            <br/>
        </p>
        <button class="button" style="margin-left: 40%">Renew subscription</button>

    </div>
    <hr>

    <div id="subscription">
        <h2>My bills</h2>
        <button class="button" style="margin-left: 40%;">Download my bills</button>
    </div>

</div>


</body>
</html>