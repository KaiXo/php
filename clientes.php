<?php

$tuip = getenv(REMOTE_ADDR);
echo "Tu Ip es ".$tuip;
echo "<br>";
$tunavegador = $_SERVER["HTTP_USER_AGENT"];
echo "Y tu sistema operativo y navegador es ".$tunavegador;
echo "gracias por utilizar"

>
