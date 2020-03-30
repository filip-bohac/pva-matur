<?php
$spojeni = 'config.php';
$username = ($_POST["jmeno"]); 
$heslo = ($_POST["heslo"]);

if(empty($username))
{
	echo 'e-mail nebyl zadán';
    header("location:./index.php");
}
else if(empty($heslo))
{
	echo 'heslo nebylo zadáno';
    header("location:./index.php");
}
else
{
	
	
	$dotaz = "SELECT * FROM uzivatel WHERE jmeno = '$jmeno'";
	
	$vysledek = mysqli_query($spojeni, $dotaz);

	$radek = mysqli_fetch_assoc($vysledek);

	
	if(mysqli_num_rows($vysledek) > 0 && password_verify($heslo, $radek["heslo"]))
	{
        $mail = $radek["mail"];
        session_start();
        $_SESSION["user"] = $jmeno;
        $_SESSION["mail"] = $mail;

		header("location:profil.php");
	}
	else if(mysqli_num_rows($vysledek) > 0 && !password_verify($heslo, $radek["heslo"]))
	{
		header("location:./index.php");
	}
	else
	{
		header("location:./index.php");
	}
	
	mysqli_close($spojeni);
}