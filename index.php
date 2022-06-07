<html>
    <head>
        <title>mekke pe caramida</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <marquee style="color: red;" bgcolor="yellow">
        <?php
         $ip = $_SERVER['REMOTE_ADDR'];
         $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
         echo "IP: " , $ip , " || " , "COUNTRY: " , $details->country , " || " , "REGION: " , $details->region , " || " , "CITY: " , $details->city;
         ?>
        </marquee>
        <h1 style="color: yellow;" align="center">site mekke mobile<h1>
        <div class="holland">
         <img id="cataclysm" src="mencke-cataclysm.jpg"></img>
         <h1 align="center" style="color: red; background-color: orange;">the fat of the fard</h1>
         <p align="center" style="color: black; background-color: green;">the holland fatass menace has finally returned from cardboard wordpress</p>
        </div>
        <div id="div-menu">
        <img src="figyelem.gif" id="figyelem"></img>
            <h5 id="ip">IP IS:
                <?php
                $ip = $_SERVER['REMOTE_ADDR'];
                echo $ip;
                ?>
            </h5>
            <h5 id="plinks" style="color: orange;">PAGE LINKS:</h5>
            <a href="https://github.com/Smekker11/" id="github">Github</a>
            <a href="http://smekker.go.ro/old-home/hrusca-pusca/" id="hrusc">Hrusca Pusca</a>
            <a href="https://smekker.go.ro:420/" id="idrac">iDRAC</a>
            <a href="http://smekker.go.ro/log.txt" id="iplog">IP LOG :)</a>
            <a href="http://smekker.go.ro:8123/" id="map">MAP 2kbps</a>
            <img src="fold.gif" id="fold"></img>
        </div>
        <div id="div-bongus">
            <img src="amgus.jpg" id="amgussy"></img>
            <h1 style="color: lightblue;" align="center">sussy amgussy mekke site very AMOGS</h1>
            <button id="sussy-b" type="button" onclick="susSound();"n>amangas</button>
            <script>
             var sussy = new Audio('sus.mp3');
             function susSound(){
                sussy.play();
             }
            </script>
        </div>
    </body>
</html>