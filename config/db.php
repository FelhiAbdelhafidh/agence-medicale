<?php

$con = mysqli_connect("localhost", "root", "", "agencemedicale");

if (mysqli_connect_errno()) {
    echo "pas de connexion: " . mysqli_connect_error();
}
?>