<?php
session_start();

$heslo = $_POST["heslo"];
$username = $_SESSION["user"];

$spojeni = mysqli_connect("localhost", "bohac", "55555", "6ep_bohac");

    $dotaz = "SELECT heslo FROM uzivatel1 WHERE jmeno = '$username'";
    $vysledek = mysqli_query($spojeni, $dotaz);
    $radek = mysqli_fetch_assoc($vysledek);

    if($heslo ==$radek["heslo"])
    {

        //$dotaz = "DELETE FROM poznamky WHERE jmeno = '$username'";
        //mysqli_query($spojeni, $dotaz);

        $dotaz = "DELETE FROM uzivatel1 WHERE jmeno = '$username'";
        mysqli_query($spojeni, $dotaz);
        header("location:./index.php");
        echo $_SESSION["user"];
    }
    else
    {
        header("location:./smazat.php");
    }