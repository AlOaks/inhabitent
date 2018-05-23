jQuery( document ).ready(function($) {

    var check = false;
    $(window).scroll(function(event) {
        var pageTop = $(window).scrollTop();
        var windowHeight = window.innerHeight;
        
        if ( pageTop >= windowHeight && !check ) {
            $(".style-header").addClass("style-header2");
            $(".style-header").removeClass("style-header");
            console.log(pageTop);
            check = true;
        } else if (pageTop <= windowHeight && check) {
            $(".style-header2").addClass("style-header");
            $(".style-header2").removeClass("style-header2");
            check = false;
        }
    })

    $(".search-submit").click(function(event) {
        console.log(event);
        event.preventDefault();
        $(".search-field").toggleClass("search-visible");
        
    });

    $(".search-form").on('keydown', function(event) {
        if(event.which == 13) {
            $(".search-form").submit();
        }
    })

});