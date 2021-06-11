<?php



$connection = mysqli_connect(
    $cfg['db']['host'],
    $cfg['db']['username'],
    $cfg['db']['password'],
    $cfg['db']['name']

) or die ("Could not connect to MySQL");

?>

