<div id="404" class="InsideBoxManager notfound Close_Top_Right">
        <figure>
                <a id="Close404" href="/">
                        <img src="img/cerrar.png" alt="cerrar">
                </a>
        </figure>
        <figure class="warning_figure">
                <img src="img/warning.png" alt="no se encuentra esta web">
        </figure>

        <?php include_once VIEWS.'/BoxManager/langs/'. $Template_Langs['404_body'].'.php'; ?>

        <script type="text/javascript">
                document.getElementById("Close404").onclick = function() {
                        $('#404').fadeOut(500);
                        $('#BoxManager').fadeOut(1000);
                        return false;
                }
                function load404(){
                        $('#404').fadeIn(1000);
                        $('#BoxManager').fadeIn(500);
                }
                addOnLoad(load404);
        </script>

</div>
