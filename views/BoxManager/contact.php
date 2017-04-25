<div id="Whole_Form" class="InsideBoxManager Whole_Form Close_Top_Right">
        <figure>
                <a id="CloseContact" href="/">
                        <img src="img/cerrar.png" alt="cerrar">
                </a>
        </figure>
        <script type="text/javascript">
                document.getElementById("CloseContact").onclick = function() {
                        $('#Whole_Form').fadeOut(500);
                        $('#BoxManager').fadeOut(1000);
                        return false;
                }
        </script>
        <div id="Waiting" class="Waiting">
                <figure>
                        <img src="img/ajax-loader.gif" alt="Esperando en mi pagina web">
                </figure>
        </div>
        <div class="Contactame Contactame_Left">
                <div class="ContactameBefore">

                </div>
                <p><?php echo $Template_Langs['Contact_Form']; ?></p>
                <div class="ContactameAfter">

                </div>
        </div>
        <div class="Form_Side Left_Form">

                <?php include_once VIEWS.'/BoxManager/langs/'. $Template_Langs['Contact_body'].'.php'; ?>

        </div>
        <div class="HV_Line">

        </div>
        <div class="Form_Side Right_Form">
                <figure class="fake"></figure>
                <figure class="Form_Sobre">
                        <img src="img/sobre.png" alt="Contacta pagina web">
                </figure>

                <form id="Form_Contact" class="Form" name="Form_Contactar" action="/" method="post" onsubmit="return Validate(this)">
                        <?php $Box_BackgroundColor = "rgba(183, 240, 246,0.5)" ?>

                        <!-- #############################  NOMBRE  ################################ -->
                        <div class="Instance_Form">

                                <input type="hidden" id="TokenCheck" name="TokenCheck" value="<?php echo $_SESSION['Token1']; ?>">

                                <input class="Form_input" id="Form_Name" data-notnull="1" name="Name" placeholder="<?php echo $Template_Langs['Contact_Name']; ?>" type="text">
                                <script type="text/javascript">
                                        document.getElementById("Form_Name").onclick = function() {
                                                $("#Not_Null_Form_Name").fadeOut(300);
                                                $('#Form_Name').css("background", "<?php echo $Box_BackgroundColor; ?>");
                                                return false;
                                        }
                                </script>
                                <div id="Not_Null_Form">

                                </div>
                                <div id="Not_Null_Form_Name" class="Warning Gradient_White_Orange">
                                        <div class="Triangulo_Warning">

                                        </div>
                                        <p>
                                                <?php echo $Template_Langs['Contact_No_Name']; ?>
                                        </p>
                                </div>
                        </div>

                        <!-- #############################  NOMBRE  ################################ -->

                        <!-- #############################  EMAIL  ################################ -->
                        <div class="Instance_Form">
                                <input class="Form_input" id="Form_Email1" data-notnull="1" data-email="1" data-equal="Form_Email2" name="Email1" placeholder="<?php echo $Template_Langs['Contact_Email']; ?>" type="text">
                                <script type="text/javascript">
                                        document.getElementById("Form_Email1").onclick = function() {
                                                $("#Not_Null_Form_Email1").fadeOut(200);
                                                $("#Not_Email_Valid_Form_Email1").fadeOut(200);
                                                $("#Not_Equal_Form_Email1").fadeOut(200);
                                                $('#Form_Email1').css("background", "<?php echo $Box_BackgroundColor; ?>");
                                                return false;
                                        }
                                </script>

                                <div id="Not_Null_Form_Email1" class="Warning Gradient_White_Orange">
                                        <div class="Triangulo_Warning">

                                        </div>
                                        <p>
                                                <?php echo $Template_Langs['Contact_No_Email']; ?>
                                        </p>
                                </div>

                                <div id="Not_Email_Valid_Form_Email1" class="Warning Gradient_White_Orange">
                                        <div class="Triangulo_Warning">

                                        </div>
                                        <p>
                                                <?php echo $Template_Langs['Contact_No_Valid_Email']; ?>
                                        </p>
                                </div>

                                <div id="Not_Equal_Form_Email1" class="Warning WarningTop Close_Top_Right Closer_Top_Right Gradient_White_Orange">
                                        <figure>
                                                <a href="/">
                                                        <img src="img/cerrar.png" alt="cerrar">
                                                </a>
                                                <script type="text/javascript">
                                                        document.getElementById("Not_Equal_Form_Email1").onclick = function() {
                                                                $('#Not_Equal_Form_Email1').fadeOut(300);
                                                                return false;
                                                        }
                                                </script>
                                        </figure>
                                        <p>
                                                <?php echo $Template_Langs['Contact_No_Equal_Email']; ?>
                                        </p>
                                </div>

                        </div>

                        <!-- #############################  EMAIL  ################################ -->

                        <input class="Form_input" id="Form_Email2" name="Email2" placeholder="<?php echo $Template_Langs['Contact_Repeat_Email']; ?>" type="text">
                        <textarea class="Form_input Form_Textarea" id ="Form_Algo" name="Algo" placeholder="<?php echo $Template_Langs['Contact_Message']; ?>"></textarea>
                         <input type="submit" name="Submit" id="Button" value="ENVIAR"
                         class="Button_Middle Button_White Dark_Blue Gradient_White_LightBlue"/>
                </form>
        </div>
</div>
