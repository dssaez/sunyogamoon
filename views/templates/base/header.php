<header>
        <div id="Box_Nav" class="Box_Nav">

                <div id="Menu" class="Box_Nav_Div Menu">
                        <a id="Menu" href="/">
                                <img src="img/menu.png" alt="Menu webpage">
                                Menu
                        </a>
                        <script type="text/javascript">
                                document.getElementById("Menu").onclick = function() {
                                        $("#Box_Nav").animate({height: "17.1rem"}, 500);
                                        $('nav').fadeIn();
                                        $('#Chose_Language').hide();
                                        $('#Menu_List').fadeIn(1000);
                                        return false;
                                }
                        </script>
                        <nav>
                                <ul>
                                        <li><a class="Nav_Selected" href="<?php echo $Template_Langs['Home_a']; ?>"><?php echo $Template_Langs['Home']; ?></a></li>
                                        <li><a href="<?php echo $Template_Langs['Yoga_a']; ?>"><?php echo $Template_Langs['Yoga']; ?></a></li>
                                        <li><a href="<?php echo $Template_Langs['Masaje_Tailandes_a']; ?>"><?php echo $Template_Langs['Masaje_Tailandes']; ?></a></li>
                                        <li><a href="<?php echo $Template_Langs['Terapia_a']; ?>"><?php echo $Template_Langs['Terapia']; ?></a></li>
                                        <li><a href="<?php echo $Template_Langs['Galeria_a']; ?>"><?php echo $Template_Langs['Galeria']; ?></a></li>
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

        <figure class="Logo">
                <a href="#" id="Logo_a"><img src="img/Logo.png" alt="Yoga y Masaje Tenerife"></a>
        </figure>
        <script type="text/javascript">
                document.getElementById("Logo_a").onclick = function() {
                        alert(window.innerWidth);
                        return false;
                }
        </script>
        <div class="AfterLogo">
                <h1>SunYogaMoon</h1>
                <h2>Tenerife Hatha Yoga</h2>
                <h2>Masaje Tailandés</h2>
        </div>

        <div id="Big_Nav" class="Big_Nav">

        </div>
</header>
