$(document).ready(function(){
    
    var overlay = $('<div id="overlay"></div>');
    overlay.show();
    overlay.appendTo(document.body);
    
    var windowLoc = $(location).attr('pathname');
    
    switch(windowLoc){
        
        case "/AYassociates/contactus.php":
            //$('.title_anim').animate({height: '300px', width: '300px'},'fast');
            $('.con_img').animate({left: '850px'}, '300');
            break;
        
        case ("/AYassociates/thefirm.php"):
            $('.vertical_line').animate({left: '452px'},'300');
            break;
            
        case ("/AYassociates/areasofpractice.php"):
            $('.vertical_line').animate({left: '452px'},'300');
            break;
            
        case ("/AYassociates/firmexperience.php"):
            $('.vertical_line').animate({left: '452px'},'300');
            break;

        case ("/AYassociates/aboutus.php"):
            $('.vertical_line').animate({left: '452px'},'300');
            break;

    }
    
    $('.con_link_ph').hover(function(){
       $('.icon_hover_ph').addClass('hover_ph'); 
    }, function(){
        $('.icon_hover_ph').removeClass('hover_ph');
    });
    
    $('.con_link_em').hover(function(){
       $('.icon_hover_em').addClass('hover_em'); 
    }, function(){
        $('.icon_hover_em').removeClass('hover_em');
    });
    
    $('.con_link_li').hover(function(){
       $('.icon_hover_li').addClass('hover_li'); 
    }, function(){
        $('.icon_hover_li').removeClass('hover_li');
    });
});

