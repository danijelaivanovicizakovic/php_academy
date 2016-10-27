<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Prijavi se</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Sanchez" rel="stylesheet">
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

<main>

    <h1>Prijavnica za PHP akademiju</h1>

    <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
    <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
    <p>Više informacija na:
        <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
    </p>

<form action="podaci.php" method="post">
    <label>Ime i prezime: </label>
    <input type="text" name="ime"/><br><br>

    <label>e-mail adresa: </label>
    <input type="email" name="email"/><br><br>

    <label>Smjer: </label>
    <input type="text" name="smjer"/><br>

    <br><label>Godina studija: </label><br>
    <input type="radio" name="godina"/><label>1</label><br>
    <input type="radio" name="godina"/><label>2</label><br>
    <input type="radio" name="godina"/><label>3</label><br>
    <input type="radio" name="godina"/><label>4</label><br>
    <input type="radio" name="godina"/><label>5</label><br>
    <input type="radio" name="godina"/><label>niti jedna</label><br>

    <br><label>Što te motiviralo da se prijaviš?</label>
    <textarea rows="5" cols="50" name="motivacija"> </textarea><br>

    <br><label>Imaš li predznanje vezano uz web development?</label>
    <textarea rows="5" cols="50" name="predznanje"> </textarea><br>

    <br>U kojim jezicima si do sada programirao?<br>
    <input type="checkbox" name="jezici"  value="c"/><label>C/C++</label><br>
    <input type="checkbox" name="jezici"  value="java"/><label>Java</label><br>
    <input type="checkbox" name="jezici"  value="python"/><label>Python</label><br>
    <input type="checkbox" name="jezici"  value="R"/><label>R</label><br>
    <input type="checkbox" name="jezici"  value="c#"/><label>C#</label><br>
    <input type="checkbox" name="jezici"  value="php"/><label>PHP</label><br>
    <input type="checkbox" name="jezici"  value="js"/><label>JavaScript</label><br>
    <input type="checkbox" name="jezici"  value="ruby"/><label>Ruby</label><br>

    <br>Uploadaj primjer svoga koda: <input type="file" name="datoteka"  value="Odaberi datoteku"><br>

    <input type="submit">
</form>

</main>

<footer>
    <p>&copy; PHP Akademija, 2016</p>
</footer>

</body>
</html>