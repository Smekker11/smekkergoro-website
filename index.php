<html>
    <head>
        <title>mekke pe caramida</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="msvalidate.01" content="C46FB74BB06201E413EE7410D04742BC" />
        <meta name="google-site-verification" content="4tc7m9iXhATLDJ1HUaG3wVLPXmu-vm_V8vOnne2ujBc" />
    </head>
    <body>
        <!--marquee part-->
        <marquee style="color: red;" bgcolor="yellow">
        <?php
         $ip = $_SERVER['REMOTE_ADDR'];
         $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
         echo "IP: " , $ip , " || " , "COUNTRY: " , $details->country , " || " , "REGION: " , $details->region , " || " , "CITY: " , $details->city;
         ?>
        </marquee>
        <!--marquee part-->
        <h1 style="color: yellow;" align="center">site mekke mobile - <?php
          require "qu.php";
          echo $mekkemsg;
        ?> <h1>
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
            <a href="http://smekker.go.ro/api" id="iplog">random IP from DB :)</a>
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
        <div class="holland">
         <img id="cataclysm" src="mencke-cataclysm.jpg"></img>
         <h1 align="center" style="color: red; background-color: orange;">Changelog:</h1>
         <p align="center" style="color: black; background-color: green;">
         <?php 
        require "qu.php";
        echo $changelog;
         ?>
         </p><!--changelog p--><!--changelog p-->
        </div>
    </body>
</html>