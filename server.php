<?php

$string = file_get_contents('dischi.json');

$dischiList = json_decode($string, true);


header('Content-type: application/json');
echo json_encode($dischiList);