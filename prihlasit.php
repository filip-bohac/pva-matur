<?php

$jmeno = ($_POST["jmeno"]); 
$heslo = ($_POST["heslo"]);

if(empty($jmeno))
{
	echo "jméno nebylo zadáno";
    header("location:./index.php");
}
else if(empty($heslo))
{
	echo "heslo nebylo zadáno";
    header("location:./index.php");
}
else
{
	
	$spojeni = mysqli_connect("localhost", "bohac", "55555", "6ep_bohac");

	$dotaz = "SELECT * FROM uzivatel1 WHERE jmeno = '$jmeno'";
	
	$vysledek = mysqli_query($spojeni, $dotaz);

	$radek = mysqli_fetch_assoc($vysledek);

	
	if($heslo == $radek["heslo"])
	{
        $mail = $radek["mail"];
        session_start();
        $_SESSION["user"] = $jmeno;
        $_SESSION["mail"] = $mail;

		header("location:profil.php");
	}
	else if($heslo != $radek["heslo"])
	{
	
		echo "něco se podělalo";
		header("location:./index.php");
	}
	else
	{
		header("location:./index.php");
	}
	
	mysqli_close($spojeni);
}