<div id="Email_Sent" class="InsideBoxManager Close_Top_Right">
        <figure>
                <a id="CloseEmail_Sent" href="/">
                        <img src="img/cerrar.png" alt="cerrar">
                </a>
        </figure>

        <?php include_once VIEWS.'/BoxManager/langs/'. $Template_Langs['EmailSent_body'].'.php'; ?>

        <script type="text/javascript">
                document.getElementById("CloseEmail_Sent").onclick = function() {
                        $('#Email_Sent').fadeOut(500);
                        $('#BoxManager').fadeOut(1000);
                        return false;
                }
                function load404(){
                        $('#Email_Sent').fadeIn(1000);
                        $('#BoxManager').fadeIn(500);
                }
                addOnLoad(load404);
        </script>


</div>
