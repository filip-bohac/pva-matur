<?php
$username = ($_POST["jmeno"]); 
$mail = ($_POST["mail"]);
$heslo = ($_POST["heslo"]);



if(empty($username))
{
	
	header("location:./index.php");
}
else if(empty($mail))
{
	
	header("location:./index.php");
}
else if(empty($heslo))
{
	
	header("location:./index.php");
}
else
{
	$spojeni = mysqli_connect("localhost", "bohac", "55555", "6ep_bohac");
	
	$dotaz = "SELECT * FROM uzivatel1 WHERE jmeno = '$username'";
	
	$vysledek = mysqli_query($spojeni, $dotaz);

	$radek = mysqli_fetch_assoc($vysledek);

	if($username == $radek["jmeno"])
	{
		header("location:./index.php");	
		
	}
	
	
	else if (sizeof($radek) == 0 && $mail!=$radek["mail"])
	{
	
	
	$dotaz = "INSERT INTO uzivatel1 (jmeno, heslo, mail)
				VALUES ('$username', '$heslo', '$mail')";
	mysqli_query($spojeni, $dotaz);

	session_start();
	$_SESSION["user"] = $username;
	$_SESSION["mail"] = $mail;
	
	header("location:profil.php");
	}
	else
	{
		header("location:./index.php");
	}

	mysqli_close($spojeni);
}