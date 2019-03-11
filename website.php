<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 3-12-2018
 * Time: 11:28
 */

session_start();

if (isset($_SESSION["user"])) {
    echo "<h1>Welkom ".$_SESSION["user"]." op de webstite";
    //alles oke
} else {
    header('location: login.php');
    // terug naar de pagina
}
?>


