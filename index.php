<?php
// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
$ROOT = __DIR__;
//echo '$ROOT= '.$ROOT;
// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
$DS = DIRECTORY_SEPARATOR;

$controleur_default = "default" ;

if(!isset($_REQUEST['controller']))
				//$controller récupère $controller_default;
				$controller=$controleur_default;
			else 
				// recupère l'action passée dans l'URL
				$controller = $_REQUEST['controller'];

/*if(!isset($_REQUEST['action']))
		$_REQUEST['action'] = "readAll";
*/					
switch ($controller) {
			case "etudiant" :
				require ("{$ROOT}{$DS}controller{$DS}controllerEtudiant.php");
				break;
			case "stage" :
				require ("{$ROOT}{$DS}controller{$DS}controllerStage.php");
				break;
				
			case "default" :
				require ("{$ROOT}{$DS}view{$DS}index.php");
				break;	
				
			}
?>