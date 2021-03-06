<?php
/**
* Fichier de configuration config.php
* @author baloran
* @link http://baloran.fr baloran.fr
*/

// Nom du thème
$theme = "arganeo";

// Langue chargé par default
$langue = "fr";

// Mode production = 1, développement= 0
$mode = "0";

// Les js sont chargé ou ? header = 0 ou footer = 1 ? ceci est pour charger automatiquement certaine library
$js_charge = "0";

// Vérification de mise a jour plathot ? 0 non, 1 oui
$plathot_update = "0";

// Salage pour cryptage de string
$salage = "plathotbeautifulframework";

// Path d'url theme
define("WEBROOT", "app/theme/");

// Path d'url js theme
define("THEME_JS", WEBROOT.$theme.'/js/');

// Path d'url css theme
define("THEME_CSS", WEBROOT.$theme.'/css/');

// Path d'url img theme
define("THEME_IMG", WEBROOT.$theme.'/img/');

// Path d'url dossier core
define("CORE", "core");

// Path d'url dossier app
define("APP", "app");

// Path d'url dossier  app config
define("APP_CONFIG", APP.'/config/');