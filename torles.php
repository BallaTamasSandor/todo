<?php require "connect.php"?>

<?php
    $id = $_GET['delid'];

    $result = $kapcsolat -> query("DELETE FROM `adatok` WHERE sorszam = '$id'");

    if ($result)
    {
        header("location:siker.php");
    }
?>