function AjaxGo(parametros,url_ajax,result){
        $.ajax({
                data:  parametros,
                url:   url_ajax,
                type:  'post',
                beforeSend: function () {
                        $("#"+result).html("<img class='Ajax_Loader' src='/img/ajax-loader.gif' alt='cerrar'>");
                },
                success:  function (response) {
                        $("#"+result).html(response);
                }
        });
}

function Charge_Scroll(){
        //alert("Cargando Scroll");
        var Scroll_After = $(window).scrollTop();
        var parametros = {'Scroll_After' : Scroll_After};
        var url_ajax = '/chargescroll';
        var result = 'Nowhere';
        AjaxGo(parametros,url_ajax,result);
        //alert("Scroll cargado");
}

function validarEmail( email ) {
            var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var cierto = true;
            if ( !expr.test(email) )
                 var cierto = false;
        return cierto;
}

function Not_Null_Form_Name(parametros,url_ajax,result){
        $.ajax({
                data:  parametros,
                url:   url_ajax,
                type:  'post',
                success:  function (response) {
                        $("#"+result).html(response);
                }
        });
}

function Validate(form){

        for(var i=0; i<form.length; i++) {
                //alert(form[i].name);
                if (form[i].dataset.notnull){
                        //alert("Valor "+form[i].value);
                        if (!form[i].value){
                                $("#"+form[i].id).css("background", "rgba(210, 74, 16, 0.2)");

                                $("#Not_Null_"+form[i].id).fadeIn(300);
                                var posicion =$("#Not_Null_"+form[i].id).offset().top;
                                posicion = posicion - 150;
                                $("html, body").animate({scrollTop: posicion}, 800);
                                return false;
                        }
                }
                if (form[i].dataset.email){
                        //alert("datasetemail "+form[i].value);
                        valor = validarEmail(form[i].value);
                        if (!valor){
                                $("#"+form[i].id).css("background", "rgba(210, 74, 16, 0.2)");
                                $("#Not_Email_Valid_"+form[i].id).fadeIn(300);
                                var posicion =$("#Not_Email_Valid_"+form[i].id).offset().top;
                                posicion = posicion - 150;
                                $("html, body").animate({scrollTop: posicion}, 800);
                                return false;
                        }
                }
                if (form[i].dataset.min){
                        if (form[i].value.length<form[i].dataset.min){
                                $("#"+form[i].id).css("background", "rgba(210, 74, 16, 0.2)");
                                $("#Few_Characters_"+form[i].id).fadeIn(300);
                                var posicion =$("#Few_Characters_"+form[i].id).offset().top;
                                posicion = posicion - 150;
                                $("html, body").animate({scrollTop: posicion}, 800);
                                return false;
                        }
                }
                if (form[i].dataset.equal){
                        var equal = form[i].dataset.equal;
                        if (form[i].value != form.elements[equal].value){
                                $("#Not_Equal_"+form[i].id).fadeIn(300);
                                var posicion =$("#Not_Equal_"+form[i].id).offset().top;
                                posicion = posicion - 150;
                                $("html, body").animate({scrollTop: posicion}, 800);
                                return false;
                        }
                }
        }
        $('#Waiting').fadeIn(500);
        return true;
}

function GoAboutme(){
        var anchor = window.location.hash.substr(1);
        if ((anchor == "sobremi") || (anchor == "aboutme"))
        {
                var posicion =$("#Sobre_Mi").offset().top;
                posicion = posicion - 150;
                $("html, body").animate({scrollTop: $('#Sobre_Mi').offset().top -90 }, 1000);
        }
}

function CheckWindowSize(){
        $(window).resize(function(){
                if (window.innerWidth >= 680)
                        $('nav').fadeIn();
                else
                        $('nav').hide();
        });
}

GoAboutme();
CheckWindowSize();

$('body').click(function() {
        $('#Email_Sent').fadeOut(500);
        $('#404').fadeOut(500);
        $('#Whole_Form').fadeOut(500);
        $('#BoxManager').fadeOut(1000);
});

$('#Whole_Form').click(function(event){
        event.stopPropagation();
});
$('#404').click(function(event){
        event.stopPropagation();
});
$('#Email_Sent').click(function(event){
        event.stopPropagation();
});
$('#Contact').click(function(event){
        event.stopPropagation();
});
