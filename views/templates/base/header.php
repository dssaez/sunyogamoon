<header>
        <div class="Logo_Box_Nav">

                <div id="Logo" class="Logo_Box">
                        <a href="<?php echo $Absolute_Path; ?>">
                                <figure>
                                        <img src="img/logo.png" alt="Paginas web en Tenerife">
                                        <figcaption>
                                                <?php
                                                        echo $Template_Langs['LogoText1'];
                                                        echo $Template_Langs['LogoText2'];
                                                ?>
                                        </figcaption>
                                        <figcaption>
                                                <?php echo $Template_Langs['indanielweb']; ?>
                                        </figcaption>
                                </figure>

                        </a>
                        <script type="text/javascript">
                                document.getElementById("Logo_old").onclick = function() {
                                        alert(window.innerWidth);
                                        return false;
                                }
                        </script>
                </div>

                <div id="Box_Nav" class="Box_Nav">

                        <div class="Box_Nav_Div Menu">
                                <a id="Menu" href="/">
                                        <img src="img/menu.png" alt="Menu webpage">
                                        Menu
                                </a>
                                <script type="text/javascript">
                                        document.getElementById("Menu").onclick = function() {
                                                $("#Box_Nav").animate({height: "12.7rem"}, 500);
                                                $('nav').fadeIn();
                                                $('#Chose_Language').hide();
                                                $('#Menu_List').fadeIn(1000);
                                                return false;
                                        }
                                </script>
                                <nav>
                                        <ul>
                                                <li><a href="<?php echo $Template_Langs['Home_a']; ?>"><?php echo $Template_Langs['Home']; ?></a></li>
                                                <li><a id="Sobre_Mi_a" href="<?php echo $Template_Langs['About_a']; ?>"><?php echo $Template_Langs['About']; ?></a></li>
                                                <script type="text/javascript">
                                                        document.getElementById("Sobre_Mi_a").onclick = function() {
                                                                var posicion =$("#Sobre_Mi").offset().top;
                                                                posicion = posicion - 150;
                                                                $("html, body").animate({scrollTop: $('#Sobre_Mi').offset().top -90 }, 1000);
                                                                $("#Box_Nav").animate({height: "3rem"}, 500);
                                                                if (window.innerWidth < 680)
                                                                        $('nav').fadeOut();
                                                                $('#Chose_Language').fadeOut();
                                                                $('#Menu_List').fadeOut(1000);
                                                                return false;
                                                        }
                                                </script>
                                                <li><a href="<?php echo $Template_Langs['Services_a']; ?>"><?php echo $Template_Langs['Services']; ?></a></li>
                                        </ul>
                                        <a id="Close_Menu" href="/" class="Triangulo_BoxMenu">
                                                <div class="Triangulo_Lang_Up">

                                                </div>
                                        </a>
                                        <script type="text/javascript">
                                                document.getElementById("Close_Menu").onclick = function() {
                                                        $("#Box_Nav").animate({height: "3rem"}, 500);
                                                        if (window.innerWidth < 680)
                                                                $('nav').fadeOut();
                                                        $('#Chose_Language').fadeOut();
                                                        $('#Menu_List').fadeOut(1000);
                                                        return false;
                                                }
                                        </script>
                                </nav>
                        </div>

                        <div class="Box_Nav_Div Contactame">
                                <div class="ContactameBefore">

                                </div>
                                <a id="Contact" href="/"><?php echo $Template_Langs['Contact']; ?></a>
                                <script type="text/javascript">
                                        document.getElementById("Contact").onclick = function() {
                                                $('#BoxManager').fadeIn(500);
                                                $('#Whole_Form').fadeIn(1000);
                                                Not_Null_Form_Name('','Not_Null','Not_Null_Form');
                                                var Scroll = $(window).scrollTop();
                                                $('#Whole_Form').css("margin-top", Scroll);
                                                //alert(Scroll);
                                                /*$('#Menu_List').fadeIn(1000);*/
                                                return false;
                                        }
                                </script>
                                <div class="ContactameAfter">

                                </div>
                        </div>

                        <div class="Box_Nav_Div Lang">
                                <a id="Chose_Language_a" href="/">
                                        <?php echo $Template_Langs['LangSelected']; ?>
                                        <div class="Triangulo_Lang_Down">

                                        </div>
                                </a>
                                <script type="text/javascript">
                                        document.getElementById("Chose_Language_a").onclick = function() {
                                                $("#Box_Nav").animate({height: "10.3rem"}, 500);
                                                $('#Chose_Language').fadeIn();
                                                if (window.innerWidth < 680)
                                                        $('nav').hide();
                                                $('#Menu_List').fadeIn(1000);
                                                return false;
                                        }
                                </script>
                        </div>

                        <div id="Menu_List" class="Menu_list">
                                <div class="Horizontal_Line">

                                </div>
                                <div id="Chose_Language" class="Chose_Language">
                                        <ul>
                                                <li><a href="http://<?php echo DOMAIN_ES."/".LANG_PAGES[$php_path]['es']; ?>">Español</a></li>
                                                <li><a href="http://<?php echo DOMAIN_EN."/".LANG_PAGES[$php_path]['en']; ?>">English</a></li>
                                        </ul>
                                        <a id="Close_Lang" href="/" class="Triangulo_BoxMenu">
                                                <div class="Triangulo_Lang_Up">

                                                </div>
                                        </a>
                                        <script type="text/javascript">
                                                document.getElementById("Close_Lang").onclick = function() {
                                                        $("#Box_Nav").animate({height: "3rem"}, 500);
                                                        if (window.innerWidth < 680)
                                                                $('nav').fadeOut();
                                                        $('#Chose_Language').fadeOut();
                                                        $('#Menu_List').fadeOut(1000);
                                                        return false;
                                                }
                                        </script>
                                </div>
                        </div>

                </div>
        </div>
</header>
