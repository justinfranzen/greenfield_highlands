jQuery(document).ready(function ($) {
    'use strict'; 
    
    $('.dropdown.dropdown-content').find('parent').each(function () {
        
        $(this).prepend('<a href="#" class="sub-menu-opener"> <span class="icon-plus"></span></a>');
    )
    });
    
     $('#about-dropdown').hover(function () {
         ('.dropdown-content').css('height', '472px !important');
     });
                                                        
});
