<?= Domisep\Vues\VueHtmlUtils::cssHTML5(\Domisep\Config\Config::getStyleSheetsURL()['account']); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon compte</title>
    <link href="assets/style_account.css" rel="stylesheet"/>

</head>
<body>

<?php include("header_technicien.php") ?>
<?php $tech = \Domisep\Controller\ControlTechnicien::getTechnicien();?>
<?php $ville = \Domisep\Controller\ControlTechnicien::getVilleTechnicien($tech["id_ville"]); ?>


<div id="container">
    <div id="account">
        <h2>My informations</h2>
        <ul class="list_inputs">
            <li class="li_input">
                <input type="text" class="inscri_input" id="lastname" name="nom" value="<?php echo $tech["nom"]?>" placeholder="Name"/>
            </li>
            <li class="li_input">
                <input type="text" class="inscri_input" id="firstname" name="prenom" value="<?php echo $tech["prenom"]?>" placeholder="First name"/>
            </li>
            <li class="li_input">
                <input type="text" class="inscri_input" id="email" name="email" value="<?php echo $_SESSION["user"]["email"]?>" placeholder="email"/>
            </li>
            <li class="li_input">
                <input type="text" class="inscri_input" id="number" name="number" value="<?php echo $_SESSION["user"]["tel"]?>" placeholder="Phone"/>
            </li>
            <li class="li_input">
                <input id="city" class="inscri_input" name="city" value="<?php echo $ville[0]["nom"]?>" placeholder="City"/>
            </li>
            <li class="li_input">
                <input id="zipcode" class="inscri_input" name="zipcode" value="<?php echo $ville[0]["code_postal"]?>" placeholder="Zip code"/>
            </li>
            <li>
                <input type="submit" value="Valider" class="button" style="margin-left: 35%"/>
            </li>
        </ul>
    </div>


</body>
</html>