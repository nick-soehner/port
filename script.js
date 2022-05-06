$(window).on("load", () => {
    $(".loader").delay(2000).fadeOut("slow");
});

$(window).scroll(function () {
    $(
        ".project-wrapper, .title-box, .about-container, .contact-container"
    ).each(function () {
        var bottom_of_object =
            $(this).position().top + $(this).outerHeight() / 2;
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        if (bottom_of_window > bottom_of_object) {
            $(this).animate({ opacity: "1" }, 1000);
        }
    });
});

$(window).on("scroll", () => {
    $(".mobile-nav").fadeOut(250);
});

$("#menu-bar").on("click", () => {
    $(".mobile-nav").toggle(500);
});

$(".close").on("click", () => {
    $(".mobile-nav").toggle(500);
});
