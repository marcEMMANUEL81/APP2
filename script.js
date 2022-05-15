$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navigation').addClass("sticky");
            $('.nav_info').addClass("sticky2");
            $('.page_name').addClass("sticky3");
            $('.nav_info').removeClass("hover");

        }else{
            $('.navigation').removeClass("sticky");
            $('.nav_info').removeClass("sticky2");
            $('.page_name').removeClass("sticky3");

        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Nous sommes là pour vous ", "Nous sommes disponible à toute heure pour vous", "Vous pouvez nous contacter à n'importe quel moment", "Il suffit de nous joindre aux numéros en bas de page"],
        typeSpeed: 80,
        backSpeed: 30,
        loop: true
    });


});
