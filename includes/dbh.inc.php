<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = ""; // ik heb hier een password moeten neerzetten want dat was nodig in mijn geval dus het zou kunnen dat u ook problemen ervaart
$dBName = "loginsite";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
