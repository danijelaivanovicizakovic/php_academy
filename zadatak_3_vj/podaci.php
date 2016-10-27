<!DOCTYPE html>
<html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Podaci</title>
</head>
<body>
<header>
    <center><img src="php_akademija.jpg"></center>
    <div id=navigacija>
    <ul>
        <li><a href="index.php">Naslovnica</a></li>
        <li><a href="form.php">Prijavi se</a></li>
        <li><a href="admin.txt">Login (za admine)</a></li>
    </ul>
    </div>
</header>
<?php
    echo ("Poštovani ".$_POST["ime"]." zahvaljujemo ti na prijavi."."<br>"); 
    echo ("Sve obavijsti vezane uz PHP akademiju poslati ćemo ti na ovaj: ".$_POST["email"]."e-mail"."<br>"); 
?>
<?php
$ime = $email = $smjer = $godina = $jezici = $motivacija = $predznanje ="";
$datoteka ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $ime = test_input($_POST["ime"]);
    $email = test_input($_POST["email"]);
    $smjer = test_input($_POST["smjer"]);
    $godina = test_input($_POST["godina"]);
    $prijasnjiJezici = test_input($_POST["jezici"]);
    $motivacija = test_input($_POST["motivacija"]);
    $predznanje = test_input($_POST["predznanje"]);
}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$prijave = fopen("prijave.txt", "w") or die("Unable to open file!");
fwrite($prijave, $ime);
fwrite($prijave, $email);
fwrite($prijave, $smjer);
fwrite($prijave, $godina);
fwrite($prijave, $jezici);
fwrite($prijave, $motivacija);
fwrite($prijave, $predznanje);
?>

<?php
	echo ("Poštovani ".$ime." zahvaljujemo ti na prijavi. <br>"); 
	echo ("Sve obavijsti vezane uz PHP akademiju poslati ćemo ti na ovaj: ".$email . "e-mail"."<br>"); 
?>
</body>
</html>
