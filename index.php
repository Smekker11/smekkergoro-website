<html>
    <head>
        <title><?php require "qu.php"; echo $title; ?></title><!--title-->
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/ico/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/ico/favicon-16x16.png">
        <link rel="manifest" href="/ico/site.webmanifest">
        <link rel="mask-icon" href="/ico/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="msvalidate.01" content="C46FB74BB06201E413EE7410D04742BC" />
        <meta name="google-site-verification" content="4tc7m9iXhATLDJ1HUaG3wVLPXmu-vm_V8vOnne2ujBc" />
        <meta name="keywords" content="mekker, smekker, smekker11, amangas, amogus, sus" />
        <meta name="description" content="Mekker website very the funny, enjoyable mekk content.">
    </head>
    <body>
        <!--ip grabber part-->
        <?php
        $ip = $_SERVER['REMOTE_ADDR'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        //ip queries
        $existq = "SELECT * FROM ips WHERE IP='$ip'";
        $insetip = "INSERT INTO ips (IP,CountryCode,Region) VALUES ('$ip','$details->country','$details->region')";
        //mysqlireqs
        $resulte = $conn->query($existq);
        if($resulte->num_rows == 0){
            if ($conn->query($insetip) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $insetip . "<br>" . $conn->error;
              }
        }
        ?>
        <!--ip grabber part-->
        <!--marquee part-->
        <marquee style="color: red;" bgcolor="yellow">
        <?php
         $ip = $_SERVER['REMOTE_ADDR'];
         $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
         echo "IP: " , $ip , " || " , "COUNTRY: " , $details->country , " || " , "REGION: " , $details->region , " || " , "CITY: " , $details->city;
         ?>
        </marquee>
        <!--marquee part--><!--mekkemsg-->
        <h1 class="mekkemsg" align="center">site mekke mobile - <span class="mekkemsg"> <?php
          require "qu.php";
          echo $mekkemsg;
        ?></span><h1><!--mekkemsg-->
        <div id="ppl-msg">
        <h3 id="guestmsg" align="center">
            <?php
            require "qu.php";
            echo $guestusr;
            ?>
        </h3>
        <form method="post" action="qu.php">
            <label for="guestusr">modify this message:</label><br>
            <input type="text" id="guestusr-i" name="guestusr">
            <input type="submit" value="Submit">
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
            <a href="https://smekker.go.ro/hrusca-pusca/" id="hrusc">Hrusca Pusca</a>
            <a href="https://smekker.go.ro:420/" id="idrac">iDRAC</a>
            <a href="https://smekker.go.ro/vue-mekke-api" id="iplog">random IP from DB :)</a>
            <a href="https://smekker.go.ro/login" id="login">login</a>
            <a href="http://smekker.go.ro:8123/" id="map">MAP 2kbps</a>
            <img src="fold.gif" id="fold"></img>
            <button id="texture-b" type="button" onclick="textur()"><b>text.ur</b></button>
        </div>
        <div id="div-bongus">
            <img src="amgus.jpg" id="amgussy"></img>
            <h1 style="color: lightblue; background-color: black;" align="center">sussy amgussy mekke site very AMOGS</h1>
            <button id="sussy-b" type="button" onclick="susSound();"n>amangas</button>
        </div>
        <div class="holland">
         <img id="cataclysm" src="mencke-cataclysm.jpg"></img>
         <h1 align="center" style="color: red; background-color: orange;">Changelog:</h1>
         <p align="center" style="color: black; background-color: green;"><!--changelog p-->
         <?php 
        require "qu.php";
        echo $changelog;
         ?>
         </p><!--changelog p-->
        </div>
        <script>
                var i = 1;
                var sussy = new Audio('sus.mp3');
                function susSound(){
                 sussy.play();
                }
                function textur(){
                i = i+1;
                if(i%2==0){
                    document.body.style.backgroundImage = "url('dog.bmp')";
                }
                else
                {
                    document.body.style.backgroundImage = "url('coffee-bean.bmp')";
                }
             }
            </script>
    </body>
</html>