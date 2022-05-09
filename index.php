<html>
    <head>
        <title>mekke pe caramida</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1 style="color: yellow;" align="center">site mekke mobile<h1>
        <div id="div-menu">
            <h5 id="ip">IP IS:
                <?php
                $ip = $_SERVER['REMOTE_ADDR'];
                echo $ip;
                ?>
            </h5>
            <h5 id="plinks" style="color: orange;">PAGE LINKS:</h5>
        </div>
    </body>
</html>