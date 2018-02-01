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
        <li class="container_icon" id="cam" onclick="sensorInput()">
            <img class="icon" src="<?= Domisep\Config\Config::getResources()['cam'] ?> "/>
        </li>
        <li class="container_icon" id="light" onclick="sensorInput()">
            <img class="icon" src="<?= Domisep\Config\Config::getResources()['ampoule'] ?> " />
        </li>
        <li class="container_icon" id="temp" onclick="sensorInput()">
            <img class="icon" src="<?= Domisep\Config\Config::getResources()['thermometre'] ?> " />
        </li>
        <li class="container_icon" id="sun" onclick="sensorInput()">
            <img class="icon" src="<?= Domisep\Config\Config::getResources()['soleil'] ?> " />
        </li>
    </ul>

</div>

<div class="container_list">
    <select class="select_room" style="margin-bottom: 2%" name="house" id="house" onchange="houseInput()">
        <option value="" disabled selected>Select your house</option>

        <?php foreach ($home as $h) { ?>

            <option> <?php echo $h["nom"] ?> </option>

        <?php } ?>
    </select>

    <select class="select_room" name="room" id="roomSelect" onchange="roomInput()">
        <option value="" disabled selected>Select your room</option>

        <?php foreach ($rooms as $r) { ?>

            <option> <?php echo $r["nom"] ?> </option>

        <?php } ?>
    </select>
</div>

<div class="screen" id="cam_screen">
    <img id="loadingGif" src="<?= Domisep\Config\Config::getResources()['loading'] ?>"/>
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
<ul class="tempList">
    <li id="plus" class="tempAction" >+</li>
    <li id="tempValue">20°</li>
    <li id="minus" class="tempAction">-</li>
</ul>
</div>

<div class="screen" id="sun_screen" >
    <ul class="tempList">
        <li class="liStore ">
            <div  id="store1" class="store active"></div>
            <div  id="active1" class="divStore"></div>
            <label class="labelStore">Store 1</label>
        </li>
        <li class="liStore">
            <div  id="store2" class="store"></div>
            <label class="labelStore">Store 2</label>
        </li>
        <li class="liStore">
            <div  id="store3" class="store"></div>
            <label class="labelStore">Store 3</label>
        </li>
    </ul>
</div>

<form method="post" action="?action=getInterface">
    <input type="text" id="houseName" name="houseName">
    <input type="text" id="roomName" name="roomName">
    <input type="text" id="sensorType" name="sensorType">
</form>

<script>
    function houseInput() {
        var select = document.getElementById("house"),
            choice = select.selectedIndex,
            valeur = select.options[3].value;
        document.getElementById("houseName").value = valeur;
    }

    function roomInput() {
        var selectroom = document.getElementById("roomSelect"),
            choiceroom = selectroom.selectedIndex,
            valeurroom = selectroom.options.value;
        alert(choiceroom);
        document.getElementById("roomName").value = valeurroom;
    }

    function sensorInput() {
        var sensor = event.target.id;
        alert(sensor);
        document.getElementById("sensorName").value = sensor;
    }
</script>



        <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script type="text/javascript" src="/Domisep/Vues/js_interface.js"></script>
</body>

</html>
