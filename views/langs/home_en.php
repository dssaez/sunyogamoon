<h1>HOME</h1>

<script type="text/javascript">
        document.getElementById("Concoceme_a").onclick = function() {
                var posicion =$("#Sobre_Mi").offset().top;
                posicion = posicion - 150;
                $("html, body").animate({scrollTop: $('#Sobre_Mi').offset().top -90 }, 1000);
                return false;
        }
</script>
