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

    console.log(api_vars.success);

    console.log(api_vars.greet);


    // $("#close-comments").on("click", function(event) {
    //     event.preventDefault();
    //     $.ajax({
    //       method: "post",
    //       url: red_vars.ajax_url,
    //       data: {
    //         action: "red_comment_ajax",
    //         security: red_vars.comment_nonce,
    //         the_post_id: red_vars.post_id
    //       }
    //     }).done(function(response) {
    //       alert("Success! Comments are closed for this post.");
    //     });
    //   });

    $("#close-comments").on("click", function(event) {
        event.preventDefault();
        $.ajax({
          method: "post",
          url: red_vars.rest_url + "wp/v2/posts/" + red_vars.post_id,
          data: {
            comment_status: "closed"
          },
          beforeSend: function(xhr) {
            xhr.setRequestHeader("X-WP-Nonce", red_vars.wpapi_nonce);
          }
        }).done(function(response) {
          alert("Success! Comments are closed for this post.");
        });
      });

      console.log(red_vars);

      //  1. Setup 
      //  2. Enqueue & Localize the Script via wp_localize_script(); creating a Nonce!
      //  3. Write the JS, What I want the code to do.
      //  4. Finish calling the Ajax Function

});