<?= Domisep\Vues\VueHtmlUtils::cssHTML5(\Domisep\Config\Config::getStyleSheetsURL()['interface']); ?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Domisep - Interface</title>
</head>

<body onload="init()">
<?php include("header_connect.php"); ?>
<?php $rooms = \Domisep\Controller\ControlVisitorAuth::getRooms(); ?>
<?php $home = \Domisep\Controller\ControlVisitorAuth::getHomes(); ?>


<div class="centrer">
    <ul class="list_icons">
        <li class="container_icon" id="cam"><img class="icon"
                                                 src="<?= Domisep\Config\Config::getResources()['cam'] ?> "/></li>
        <li class="container_icon" id="light"><img class="icon"
                                                   src="<?= Domisep\Config\Config::getResources()['ampoule'] ?> "/></li>
        <li class="container_icon" id="temp"><img class="icon"
                                                  src="<?= Domisep\Config\Config::getResources()['thermometre'] ?> "/>
        </li>
        <li class="container_icon" id="sun"><img class="icon"
                                                 src="<?= Domisep\Config\Config::getResources()['soleil'] ?> "/></li>
        <li class="container_icon" id="humi"><img class="icon"
                                                  src=" <?= Domisep\Config\Config::getResources()['goutte'] ?> "/></li>
    </ul>
</div>

<div class="container_list">
    <select class="select_room" style="margin-bottom: 2%" name="room">
        <option value="" disabled selected>Select your house</option>

        <?php foreach ($home as $h) { ?>

            <option> <?php echo $h["nom"]?> </option>

        <?php } ?>
    </select>

    <select class="select_room" name="room">
        <option value="" disabled selected>Select your room</option>

        <?php foreach ($rooms as $r) { ?>

            <option> <?php echo $r["nom"]?> </option>

        <?php } ?>
    </select>
</div>

<div class="screen" id="cam_screen">
    <img id="loadingGif" src="<?= Domisep\Config\Config::getResources()['loading'] ?>" />
</div>

<div class="screen" id="light_screen">
    <ul class="list_light">
        <li class="light">
            <img class="lightImg" src="<?= Domisep\Config\Config::getResources()['ampoule_marine'] ?>"/>
            <h3>light 1</h3>
        </li>
        <li class="light">
            <img class="lightImg" src="<?= Domisep\Config\Config::getResources()['ampoule_marine'] ?>"/>
            <h3>light 2</h3>
        </li>
        <li class="light">
            <img class="lightImg" src="<?= Domisep\Config\Config::getResources()['ampoule_marine'] ?>"/>
            <h3>light 3</h3>
        </li>
        <li class="light">
            <img class="lightImg" src="<?= Domisep\Config\Config::getResources()['ampoule_marine'] ?>"/>
            <h3>light 4</h3>
        </li>
        <li class="light">
            <img class="lightImg" src="<?= Domisep\Config\Config::getResources()['ampoule_marine'] ?>"/>
            <h3>light 5</h3>
        </li>
    </ul>
</div>

<div class="screen" id="temp_screen">
    <div id="slider"></div>
    <div class="centerSlider">
        <label id="valueSlider"></label>
        <div>
        </div>

        <div class="screen" id="sun_screen">
            sun
        </div>

        <div class="screen" id="humi_screen">
            hum
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script type="text/javascript" src="/Domisep/Vues/js_interface.js"></script>
</body>

</html>
