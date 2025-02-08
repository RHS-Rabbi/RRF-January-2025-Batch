jQuery(document).ready(function() {

    $("ul li").click(function() {
        $("ul li").removeClass("active");
        $(this).addClass("active");

        $(".tab-content").hide();

        let tab = $(this).data("tab");

        $(`#${tab}`).show();
    });
});


