<!DOCTYPE html>
<html>
    <head>
        <title>Drugi PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Naslovčić</h1>
        <img src="php.jpg" alt="slonić" width="271px" height="186px">
        <?php if(date('d.m.Y.')=='18.10.2016.'){?>
        <p>Neka porukica</p>
        <?php } ?>
        //Može se pisati i kao: <?php if(date('d.m.Y.')=='18.10.2016.'):?>
        //<p>Neka porukica</p>
        //<?php endif ?>
        <footer>
            <p> date: <?php echo date('d.m.Y.')?></p>
        </footer>
    </body>
</html>
    



