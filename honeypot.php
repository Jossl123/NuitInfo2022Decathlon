<html>
<body>

<?php 
$u = $_GET["message"];
$ip = $_SERVER['REMOTE_ADDR'];

if(strpos($u,"OR 1=1") == true){

echo "Visiteur suspect !, vous avez été ajouté à la liste des visiteurs suspects";
    $file = 'logs.txt';
    $timestamp = date("[Y-m-d - H:i:s]");
    file_put_contents($file, $timestamp . " IP address: " . $ip . " Requête suspecte: " . $u . "\n", FILE_APPEND);
}else{
    echo "Votre avis nous a bien été transmis";
}

?>

</body>
</html>