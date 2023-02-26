<?php
include('../php_obj/autoload.php');
include('../vue/navbar.php');

// Récupère l'adresse IP du client
$client_ip = $_SERVER['REMOTE_ADDR'];

// Récupère la taille de l'écran à partir de l'en-tête HTTP "User-Agent"
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Utilise une expression régulière pour extraire la largeur et la hauteur de l'écran
if (preg_match('/\b(\d+)x(\d+)\b/', $user_agent, $matches)) {
    // La correspondance a été trouvée, on peut utiliser $matches[1] et $matches[2]
    $screen_width = $matches[1];
    $screen_height = $matches[2];
} else {
    // Pas de correspondance, on utilise des valeurs par défaut
    $screen_width = 800;
    $screen_height = 600;
}


// Récupère le nom du navigateur à partir de l'en-tête HTTP "User-Agent"

// Affiche les informations
echo "Adresse IP du client : $client_ip\n";echo "<br>";
echo "Taille de l'écran : ";function resol()
{

$resol='<script type="text/javascript">
                document.write(""+screen.width+"*"+screen.height+"");
</script>';
return $resol;
}
$var_resol=resol();
echo $var_resol;echo "<br>";
echo "Navigateur utilisé : ";$browser = get_browser(null, true);
$browser_name = $browser['browser']; echo $browser_name;



?>

