<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./colors.css" rel="stylesheet">
    <link href="./Style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="j"></script>
    <title>Document</title>
    <script src="./index.js"></script>
</head>

<body>
    <nav>
        <div id="left-menu">
            <a href="https://www.paris2024.org/fr/" target="_blank">
                <img src="./img/1200px-Logo_JO_d'été_-_Paris_2024.svg.png">
            </a>
            <a href="https://www.decathlon.fr/" target="_blank">
                <img src="./img/Decathlon-logo.png">
            </a>

        </div>
        <div id="right-menu">
            <a href="">Button</a>
        </div>
    </nav>
    <aside>
        <h1>DECATHLON TECHNOLOGY</h1>
        <div id="drop_zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
            <p>Drag one or more files to this <i>drop zone</i>.</p>
            <input onchange="fileDroped(this);" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
            <span class="material-symbols-outlined">
                upload
            </span>
        </div>
    </aside>
    <div id="result">
        <h1>Ce sport sera présent</h1>
    </div>
    <script>
        function newFile(value){
            $.post("newFile.php", function(data){
                console.log(data)
            })
            
        }
    </script>
    <?php
        $allSports = array(
            "Athlétisme",
            "Aviron",
            "Badminton",
            "Baseball Softball",
            "Basketball",
            "Basketball 3x3",
            "Boxe",
            "Breaking",
            "Canoë Slalom",
            "Canoë Sprint",
            "Cyclisme BMX Freestyle",
            "Cyclisme BMX Racing",
            "Cyclisme sur piste",
            "Cyclisme sur route",
            "Cyclisme VTT",
            "Escalade Sportive",
            "Escrime",
            "Football",
            "Golf",
            "Gymnastique Artistique",
            "Gymnastique Rythmique",
            "Haltérophilie",
            "Handball",
            "Hockey sur Gazon ",
            "Judo",
            "Karaté",
            "Lutte",
            "Natation",
            "Natation Artistique",
            "Natation, marathon",
            "Pentathlon Moderne",
            "Plongeon",
            "Rugby à 7",
            "Skateboard",
            "Sports Équestres",
            "Surf",
            "Taekwondo",
            "Tennis",
            "Tennis de Table",
            "Tir",
            "Tir à L'Arc",
            "Trampoline",
            "Triathlon",
            "Voile",
            "Volleyball",
            "Volleyball de plage",
            "Water-Polo"
        );
        $link = "https://contents.mediadecathlon.com/s922101/k$560302db018a43a2dc0aecb81b43d3e8/dbi_6949e8d0+9006+4adb+b34a+1e4db06d9cb9.jpg";
        $r=shell_exec("C:/Users/jogautier/AppData/Local/Programs/Python/Python311/python.exe ./fetch.py $link"); 
        $r = json_decode($r, true);
        if (array_key_exists("data", $r)){
            $sportName=$r["data"]["sport"][0]["name"];
            if (in_array(ucfirst($sportName), $allSports))
            echo $sportName;
        }else{
            echo "petit problème de connexion";
        }
    ?>
    
    <form action="honeypot.php" method="GET">
    Inscrivez votre avis ici : <input type="text" name="message">

    <input type="submit">
    </form>

</body>

</html>
