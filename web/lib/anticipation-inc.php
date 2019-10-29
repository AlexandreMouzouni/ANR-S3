<?php
/***********************************************************************************
 *
 *  anticipation-inc.php : contient les paramètres de donnexion à la base...
 *                         et d'autres définitions
 *
 ***********************************************************************************/
if ($_SERVER['SERVER_NAME']=='localhost' OR $_SERVER['SERVER_NAME']=='pierrot.ihrim.fr' OR $_SERVER['SERVER_NAME']=='pierrot.org'){
  define('BDD_HOST', 'localhost');
  define('BDD_LOGIN', 'anticipation');
  define('BDD_MDP', 'pAMD3bvusv5mWjuq');
  define('BDD_DATABASE', 'anticipation');
} else if ($_SERVER['SERVER_NAME']=='anticipation-dev.huma-num.fr') {
  define('BDD_HOST', 'mysql.db.huma-num.fr');
  define('BDD_LOGIN', 'anticipation');
  define('BDD_MDP', 'UfUvBanverd0');
  // define('BDD_DATABASE', 'anticipation_dev');
  define('BDD_DATABASE', 'anticipation');
} else if ($_SERVER['SERVER_NAME']=='anticipation.huma-num.fr') {
  define('BDD_HOST', 'mysql.db.huma-num.fr');
  define('BDD_LOGIN', 'anticipation');
  define('BDD_MDP', 'UfUvBanverd0');
  define('BDD_DATABASE', 'anticipation');
} else if ($_SERVER['SERVER_NAME'] == 'vps730707.ovh.net') {
  define('BDD_HOST', 'localhost');
  define('BDD_LOGIN', 'php');
  define('BDD_MDP', 'jesuistresencolere');
  define('BDD_DATABASE', 'anticipation');
}
else {
  define('BDD_HOST', 'localhost');
  define('BDD_LOGIN', 'php');
  define('BDD_MDP', 'jesuistresencolere');
  define('BDD_DATABASE', 'anticipation');    
}

define('bDBG', false);        // Rajoute les informations de débuggage
$strDBG = '';                // Contient les informations de débuggage

?>
