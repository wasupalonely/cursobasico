//Para trabajar con la web completa, se agrega método ready para decir que estamos
//para trabajar
jQuery(document).ready(listo());

function listo(){
    //Se selecciona el elemento
    jQuery(".hamb").click(function(e){
        //preventDefault se utiliza para que el
        //elemento no haga su función normal
        e.preventDefault();
        //toggleClass hace que si la clase pasada por argumento está, se quita, pero si no está,
        //se agrega
        jQuery("header .container nav").toggleClass("open");
        //Para que al entrar a la barra de navegación, las tres líneas cambien a una x
        jQuery(".hamb i").toggleClass("fa-x");
    });

    //
    jQuery("header .container nav a").click(function(){

        //Para que se remueva la clase open y se cierre la barra de navegación
        jQuery("header .container nav").removeClass("open");
        jQuery(".hamb i").removeClass("fa-x");
        //Se almacena el valor del href seleccionado en una variable
        //This hace referencia al elemento al que se le hizo click
        //Para obtener el valor se un atributo se utiliza attr
        var dev = jQuery(this).attr("href");

        //Se seleccionan los elementos con los que se van a trabajar, y se acciona el método
        //animate, para scrollear hacia el elemento con la id que se alamacenó en dev
        jQuery("html, body").animate({
            "scrollTop": jQuery(dev).offset().top - 76
        })
    });
}

