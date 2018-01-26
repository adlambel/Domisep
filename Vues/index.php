<?= Domisep\Vues\VueHtmlUtils::cssHTML5(\Domisep\Config\Config::getStyleSheetsURL()['accueil']); ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body onload="init()" onpageshow="animate()">

<?php include("header.php") ?>

<div class="page1">
    <div class="centrer">
    <label id="domisep"> Domisep </label>
        <img class="imgAccueil" src="<?= Domisep\Config\Config::getResources()['logoAccueil'] ?>">
    </div>
</div>
<div class="page1">
    <ul class="liste">
        <li> <img class="imgAccueil" src="<?= Domisep\Config\Config::getResources()['aboutus'] ?>"> </li>
        <li><label class="sstitremenu">About us</label></li>
        <li>
          <p class="paragraphe">
            Domisep est une entreprise spécialisée dans la télésurveillance d'immeubles, grâce à la pose de
            systèmes d'alarme sans fil adaptés aux besoins des particuliers et une centrale d'alarme
            opérationnelle 24h/24. Nous gèrons un parc de plusieurs milliers d’habitations dans plus d’une
            dizaine de pays en Europe
          </p>
        </li>
    </ul>
</div>
<div class="page1">
    <ul class="liste">
        <li> <img src="<?= Domisep\Config\Config::getResources()['vision'] ?>"> </li>
        <li><label class="sstitremenu">Our Vision</label></li>
        <li>
          <p class="paragraphe">At Domisep, we set ourselves the goal of improving living environments.
            Today, companies must go beyond their simple economic role and actively engage themselves as actors in everyday social life.
	          It is this value of societal commitment which is the reason of being of Domisep.
        </p>
        </li>
    </ul>
</div>
</div>
<div class="page1">
    <ul class="liste">
        <li> <img src="<?= Domisep\Config\Config::getResources()['whatwedo'] ?>"> </li>
        <li><label class="sstitremenu">What we do ! </label></li>
        <li class="paragraphe"> Domisep will offer each of its customers the possibility to connect safely to:
	   <ul id="fonctionalities">
		<li class="paragraphe"><strong> Control your home: </strong> automatic opening and closing, starting and extinguishing electronic equipment...</li>
		<li class="paragraphe"><strong> Protect your home: </strong>intrusion detection, alarms, leak detection...</li>
		<li class="paragraphe"><strong> Reduce your heating or energy bills: </strong> temperature control, brightness control...</li>
	   </ul>
	</li>
    </ul>
</div>









        <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script type="text/javascript" src="/Domisep/Vues/js_home.js"></script>
</body>

</html>
