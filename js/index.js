$(window).scroll(function() {
    if ($(".navbar").offset().top > 150) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    }
    else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        
    }
});