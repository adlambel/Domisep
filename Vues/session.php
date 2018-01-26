<?= Domisep\Vues\VueHtmlUtils::cssHTML5(\Domisep\Config\Config::getStyleSheetsURL()['session']); ?>


<html>
<head>
    <meta charset="UTF-8">
</head>

<body onload="init()">

<?php include("header_connect.php") ?>

<ul class="list_session">
    <li class="session">
        <img src="<?= Domisep\Config\Config::getResources()['users'] ?>" class="picture"></img>
        <div class="list_password">
            <form method="post" action="?action=checkSessionC">
                <input class="input" type="password" maxlength="1">
                <input class="input" type="password" maxlength="1">
                <input class="input" type="password" maxlength="1">
                <input class="input" type="password" maxlength="1">
                <input class="input" type="submit" value="Go" style="font-size: 1vw">
            </form>
        </div>
        <label class="nom_session">MASTER</label>
    </li>
    <li class="session">
        <img src="<?= Domisep\Config\Config::getResources()['users'] ?>" class="picture"></img>
        <div class="list_password" hidden="false">
            <input class="input" type="password" maxlength="1">
            <input class="input" type="password" maxlength="1">
            <input class="input" type="password" maxlength="1">
            <input class="input" type="password" maxlength="1">
        </div>
        <label class="nom_session">KIDS</label>
    </li>
    <li class="session last">
        <div class="list_password">
            <input class="input" type="password" maxlength="1">
            <input class="input" type="password" maxlength="1">
            <input class="input" type="password" maxlength="1">
            <input class="input" type="password" maxlength="1">
        </div>
        <input class="input_name" placeholder="Session name" type="text">
        <img class="img_plus" src="<?= Domisep\Config\Config::getResources()['plus'] ?>"></img>
    </li>
</ul>

<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="/Domisep/Vues/js_session.js"></script>
</body>

</html>
