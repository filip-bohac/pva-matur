<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrace</title>
</head>
<body>

<h1>Registrace</h1>

<form action="registrovat.php" method="post">
    <input type="text" name="html_username" placeholder="Username"/><br/>
    <input type="text" name="html_mail" placeholder="Mail"><br/>
    <input type="password" name="html_heslo" placeholder="Heslo" /><br />
    <input type="submit" value="Registrovat" /><br/>
</form>

<br/>

<h1>Přihlášení</h1>

<form action="prihlasit.php" method="post">
    <input type="text" name="jmeno" placeholder="Username"/><br/>
    <input type="password" name="heslo" placeholder="Heslo" /><br />
    <input type="submit" value="Přihlásit" /><br/>
</form>

</body>
</html>