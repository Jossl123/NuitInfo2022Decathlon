<html>
<body>

<?php 
$u = $_GET["message"];
$ip = $_SERVER['REMOTE_ADDR'];

if((str_contains($u,'OR 1=1') == true) or (str_contains($u,'or 1=1') == true)){
echo "Visiteur suspect !, vous avez été ajouté à la liste des visiteurs suspects, ";
echo "Raison : Tentative d'injection  SQL";
    $file = 'logs.txt';
    $timestamp = date("[Y-m-d - H:i:s]");
    file_put_contents($file, $timestamp . " IP address: " . $ip . " Requête suspecte: " . $u . "\n", FILE_APPEND);
}
elseif((str_contains($u,'<script>')==true)){
    echo "Visiteur suspect !, vous avez été ajouté à la liste des visiteurs suspects, ";
    echo "Raison : Tentative d'injection xss";
    $file = 'logs.txt';
    $timestamp = date("[Y-m-d - H:i:s]");
    file_put_contents($file, $timestamp . " IP address: " . $ip . " Requête suspecte: " . $u . "\n", FILE_APPEND);

}else{
    echo "Votre avis nous a bien été transmis";
}

?>

</body>
</html>