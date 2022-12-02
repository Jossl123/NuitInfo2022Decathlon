<?php
    $allSports = array(
        "Athlétisme",
        "Aviron",
        "Badminton",
        "Baseball softball",
        "Basketball",
        "Basketball 3x3",
        "Boxe",
        "Breaking",
        "Canoë slalom",
        "Canoë sprint",
        "Cyclisme BMX freestyle",
        "Cyclisme BMX racing",
        "Cyclisme sur piste",
        "Cyclisme sur route",
        "Cyclisme VTT",
        "Escalade sportive",
        "Escrime",
        "Football",
        "Golf",
        "Gymnastique artistique",
        "Gymnastique rythmique",
        "Haltérophilie",
        "Handball",
        "Hockey sur gazon ",
        "Judo",
        "Karaté",
        "Lutte",
        "Natation",
        "Natation artistique",
        "Natation, marathon",
        "Pentathlon moderne",
        "Plongeon",
        "Rugby à 7",
        "Skateboard",
        "Sports équestres",
        "Surf",
        "Taekwondo",
        "Tennis",
        "Tennis de table",
        "Tir",
        "Tir à l'arc",
        "Trampoline",
        "Triathlon",
        "Voile",
        "Volleyball",
        "Volleyball de plage",
        "Water-Polo"
    );
    $link = "'https://contents.mediadecathlon.com/s922101/k$560302db018a43a2dc0aecb81b43d3e8/dbi_6949e8d0+9006+4adb+b34a+1e4db06d9cb9.jpg'";
    $r=shell_exec("/usr/bin/python3  ./fetch.py $link"); 
    $r = json_decode($r, true);
    if (array_key_exists("data", $r)){
        $sportName=$r["data"]["sport"][0]["name"];
        echo "<p class=\"JO\">Il s'agit du $sportName </p>";
        if (in_array(ucfirst($sportName), $allSports)){
            echo "<p class=\"JO\">
                Ce sport sera présent aux Jeux Olympiques 2024<br>
                Vous pouvez dès après-en vous procurer du matériel chez Décathlon pour vous y préparer !
            </p>";
        } else {
            echo "<p class=\"JO\">
                Ce sport en sera malheureusement pas présent aux Jeux Olympiques 2024<br>
                Vous pouvez tout de même vous procurer du matériel chez Décathlon pour vous entraîner !
            </p>";
        }
    }else{
        echo "<p class=\"error\">petit problème de connexion</p>";
    }
?>