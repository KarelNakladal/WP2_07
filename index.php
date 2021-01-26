<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*guns*/ 

$gun[0]['name']="CZ 83 Jane";
$gun[0]['puvod']="Česká republika";
$gun[0]['raze']=".22 Long Rifle";
$gun[0]['vyrobce']="Česká Zbrojovka";

$gun[1]['name']="S&W Model 610";
$gun[1]['puvod']="USA";
$gun[1]['raze']="10 mm Auto";
$gun[1]['vyrobce']="Smith & Wesson";

$gun[2]['name']="Coonan 357 Magnum Compensated";
$gun[2]['puvod']="USA";
$gun[2]['raze']=".357 Magnum";
$gun[2]['vyrobce']="Coonan";

$gun[3]['name']="Beretta 1934";
$gun[3]['puvod']="Itálie";
$gun[3]['raze']="9 mm Browning";
$gun[3]['vyrobce']="Beretta";

$gun[4]['name']="S&W Model 325 PD";
$gun[4]['puvod']="USA";
$gun[4]['raze']=".45 ACP";
$gun[4]['vyrobce']="Smith & Wesson";

$gun[5]['name']="Taurus 917 C";
$gun[5]['puvod']="Brazílie";
$gun[5]['raze']="9 mm Luger";
$gun[5]['vyrobce']="Taurus";

/*people*/

$person[0]['firstName']="Karel";
$person[0]['lastName']="Nakládal";
$person[0]['age']="19";
$person[0]['gun']=$gun[5];
$person[0]['email']="karel.nakladal@student.ossp.cz";
$person[0]['pNumber']="731 830 307";

$person[1]['firstName']="Martin";
$person[1]['lastName']="Kokeš";
$person[1]['age']="25";
$person[1]['gun']=$gun[2];
$person[1]['email']="martin.kokes@ossp.cz";
$person[1]['pNumber']="556 589 223";

$person[2]['firstName']="Cecilie";
$person[2]['lastName']="Holubova";
$person[2]['age']="14";
$person[2]['gun']=$gun[4];
$person[2]['email']="cecilie.holubova@student.ossp.cz";
$person[2]['pNumber']="128 766 689";

$person[3]['firstName']="Michal";
$person[3]['lastName']="Plaček";
$person[3]['age']="17";
$person[3]['gun']=$gun[1];
$person[3]['email']="michal.placek@student.ossp.cz";
$person[3]['pNumber']="455 603 445";

$person[4]['firstName']="Matěj";
$person[4]['lastName']="Pošík";
$person[4]['age']="17";
$person[4]['gun']=$gun[3];
$person[4]['email']="matej.posik@student.ossp.cz";
$person[4]['pNumber']="264 148 659";

/* rendering */
for($i =0 ; $i<5 ; $i++){
    echo("Jméno: " .$person[$i]['firstName']. ".<br>Příjmení: " .$person[$i]['lastName']. ".<br>Věk: " .$person[$i]['age']. ".<br>Zbraň: " .$person[$i]['gun']['name']. ".<br><li>Země původu: " .$person[$i]['gun']['puvod']./**/ " .</li><br><li>Ráže: " .$person[$i]['gun']['raze']./**/" .</li><br><li>Výrobce: " .$person[$i]['gun']['vyrobce']./**/ " .</li><br>Email: " .$person[$i]['email']. ".<br>Tel. číslo: " .$person[$i]['pNumber']. "<br>-------------------------------<br>");
}


?>
</body>
</html>