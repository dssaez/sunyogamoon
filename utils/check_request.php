<?php
if (isset($_GET['page_request']))
        $page_request = $_GET['page_request'];
else
        $page_request = "";

// Comprobamos si estamos entrando en el formulario para crear un token
if ($page_request == "Not_Null")
{
        // Comprobamos que el token NotNull se ha creado y está Activo
        // Si no está activo significa que ya se ha enviado un formulario
        if (isset($_SESSION['TokenCheck_NotNull']))
        {
                if ($_SESSION['TokenCheck_NotNull'] == "Activo"){
                        $_SESSION['TokenCheck_NotNull'] = '0';
                        $_SESSION['Token2'] = generaPass();
                        echo "<input type='hidden' name='TokenCheck2' value='".$_SESSION['Token2']."'>";
                        ?>
                        <script type="text/javascript">
                                $("#TokenCheck").val("<?php echo $_SESSION['Token1']; ?>");
                        </script>
                        <?php
                }
        }
        die();
}
else{
        $Found = 0;

        // Creamos un array para pasarle al home y así poder comprobar
        // si se ha enviado un correo o hay un error 404
        $Box_Manager = [];

        // Comprobamos si la página pedida se encuentra en el sitio web,
        // el idioma y obtenemos la traducción para
        // pasarsela a la página que atienda este request
        foreach (LANG_PAGES as $php_path => $array_page) {
                foreach ($array_page as $lang => $page) {
                        if ((($page_request == $page) && (DOMAIN == DOMAIN_LANGS[$lang]))){
                                $Found = 1;
                                if ($php_path == "home"){
                                        // Comprobamos si se está enviando un correo desde el formulario de contacto
                                        require_once '../utils/Send_Email.php';
                                }
                                // Sacamos del path las direcciones de los languages y el php
                                $array_php_path = explode("/", $php_path);
                                $php_page = array_pop($array_php_path);
                                $lang_path = str_replace($php_page, "", $php_path);
                                // Incluimos el array Translation que tiene todas las traducciones de la página
                                include_once VIEWS."/".$lang_path.'langs/'.$php_page.'_lang.php';
                                $Translation = $Translation[$lang];
                                break 2;
                        }
                }
        }

        // Si no hemos encontrado la página solicitada cargams $php_path
        // con home y cargamos el BoxManager para que muestre el mensaje
        if ($Found == 0)
        {
                header("HTTP/1.0 404 Not Found");
                $Box_Manager['notfound'] = $page_request;
                $php_path = "home";
                include_once VIEWS.'/langs/home_lang.php';

                if (DOMAIN == DOMAIN_ES)
                        $lang = "es";
                if (DOMAIN == DOMAIN_EN)
                        $lang = "en";

                $Translation = $Translation[$lang];
        }

        //echo DOMAIN." - ".DOMAIN_ES." - ".DOMAIN_EN."<br>";
}

 ?>
