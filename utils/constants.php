<?php

define('VIEWS', '../views');
/* ##### PRODUCCION ###### */
/*define('DOMAIN_ES', 'www.sunyogamoon.es');
define('DOMAIN_EN', 'www.sunyogamoon.com');
define('DOMAIN', $_SERVER['HTTP_HOST']);*/
/* ##### PRODUCCION ###### */

/* ##### DEVELOPMENT ###### */
if ($_SERVER['HTTP_HOST'] == "192.168.1.102"){
        define('DOMAIN_ES', '192.168.1.102/sunyogamoon.devel.es');
        define('DOMAIN_EN', '192.168.1.102/sunyogamoon.devel.com');
        $URI = $_SERVER["REQUEST_URI"];
        $URI = trim($URI, '/');
        define('DOMAIN', $_SERVER['HTTP_HOST']."/".$URI);
}
else{
        define('DOMAIN_ES', 'www.sunyogamoon.devel.es');
        define('DOMAIN_EN', 'www.sunyogamoon.devel.com');
        define('DOMAIN', $_SERVER['HTTP_HOST']);
}
/* ##### DEVELOPMENT ###### */
?>
