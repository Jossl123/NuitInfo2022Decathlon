<?php   
    $links = array("https://contents.mediadecathlon.com/p1524091/k$538c9e75652557b45da85774a7231e83/dbi_ad805706+37b0+45bf+bd6c+1d8b8728a591.jpg"
                ,"https://contents.mediadecathlon.com/s888226/k$85de8125d2516ac7e470c4091ca083ad/dbi_95fbf55e+5f98+4d4e+a838+f060d4a3c1ef.jpg"

                ,"https://contents.mediadecathlon.com/s958999/k$7bf97786044dcd67d7ccbeedca3da431/dbi_e0dd70ff+804c+42f9+96e9+4af9ab9fc4c0.jpg"

                ,"https://contents.mediadecathlon.com/s812739/k$826ad47c57d6a4d402de31fff6e69145/dbi_d5fe7f0a+805a+4b71+a97e+13931dc24ebc.jpg"

                ,"https://contents.mediadecathlon.com/s805210/k$0f89cfa1b3aa05f81672dbd3b2287e29/dbi_1f2ff19d+fe7b+4745+b829+d33071c00b3d.jpg"

                ,"https://contents.mediadecathlon.com/s922101/k$560302db018a43a2dc0aecb81b43d3e8/dbi_6949e8d0+9006+4adb+b34a+1e4db06d9cb9.jpg"

                ,"https://contents.mediadecathlon.com/p1651075/k\$c8cf493eb4c538100c89afd1c0ee6368/dbi_cb4e1bf9+c5ea+4cc7+adf8+847e0cd87e4e.jpg"

                ,"https://contents.mediadecathlon.com/s858272/k\$bb8bf7a4133b618a7887dfd4b1d1cf6e/dbi_bade5ce8+895c+4794+835a+8619561c071f.jpg"
                    
                ,"https://contents.mediadecathlon.com/s795792/k\$b58afad01ca713398acbf65f1775bc12/dbi_c36149c4+7b24+4e24+81c5+b25654115aa8.jpg"
    );
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
    $link = $links[$_POST["id"]];
    $r=shell_exec("/usr/bin/python3 ./fetch.py '$link'"); 
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
        echo var_dump($r);
        echo "<p class=\"error\">petit problème de connexion</p>";
    }
?>