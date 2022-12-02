<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./colors.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Décathlon - Sport JO 2024</title>
    <script src="./index.js"></script>
</head>

<body>
    <nav>
        <div id="left_menu">
            <a href="https://www.paris2024.org/fr/" target="_blank"><img src="./img/jo.png"></a>
            <a href="https://www.decathlon.fr/" target="_blank"><img src="./img/DecathlonLogo.png"></a>
        </div>
        <div id="right_menu">
            <a href="">Button</a>
        </div>
    </nav>
    <aside>
        <h1>DECATHLON TECHNOLOGY</h1>
        <p>Déposez une image pour trouver de quel sport il s'agit.</p>
        <div id="drop_zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
            <p>Déposez votre image ici</p>
            <input onchange="callphpfunction(this);" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
            <span class="material-symbols-outlined">
                upload
            </span>
        </div>
        <script>
            function callphpfunction(el){
                document.getElementById("result").innerHTML = "Traitement en cours...";
                $.post("uploadFile.php",function(data) {
                    document.getElementById("result").innerHTML = data;    
                }); 
                $.ajax({
                    type: "POST",
                    url: "uploadFile.php",
                    data: el.value, 
                    success: function(data){
                        document.getElementById("result").innerHTML = data;  
                    },
                    // Alert status code and error if fail
                    error: function (xhr, ajaxOptions, thrownError){
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
            }
        </script>
    <div id="result"></div>
    </aside>

</body>

</html>