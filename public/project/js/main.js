$(document).ready(function () {
    $("#btn-link1").click(function () {
            var oldclass = $("#Show-img-first").attr('class');
            $("#Show-img-first").fadeOut(function () {
                $("#Show-img-first").removeClass(oldclass).addClass("col-md-6 col-sm-12 col-xs-12 MarginAccordion thai-massage rounded ").fadeIn("slow");
            });
        }),
        $("#btn-link2").click(function () {
            var oldclass = $("#Show-img-first").attr('class');
            $("#Show-img-first").fadeOut(function () {
                $("#Show-img-first").removeClass(oldclass).addClass("col-md-6 col-sm-12 col-xs-12 MarginAccordion oil-massage rounded ").fadeIn("slow");
            });
        }),
        $("#btn-link3").click(function () {
            var oldclass = $("#Show-img-first").attr('class');
            $("#Show-img-first").fadeOut(function () {
                $("#Show-img-first").removeClass(oldclass).addClass("col-md-6 col-sm-12 col-xs-12 MarginAccordion face-massage rounded").fadeIn("slow");
            });
        }),
        $("#btn-link4").click(function () {
            var oldclass = $("#Show-img-first").attr('class');
            $("#Show-img-first").fadeOut(function () {
                $("#Show-img-first").removeClass(oldclass).addClass("col-md-6 MarginAccordion col-sm-12 col-xs-12 foot-massage rounded ").fadeIn("slow");
            });
        }),
        $("#btn-link5").click(function () {
            var oldclass = $("#Show-img-second").attr('class');
            $("#Show-img-second").fadeOut(function () {
                $("#Show-img-second").removeClass(oldclass).addClass("col-md-6 col-sm-12 col-xs-12 MarginAccordion DreamPackage rounded ").fadeIn("slow");
            });
        }),
        $("#btn-link6").click(function () {
            var oldclass = $("#Show-img-second").attr('class');
            $("#Show-img-second").fadeOut(function () {
                $("#Show-img-second").removeClass(oldclass).addClass("col-md-6 col-sm-12 col-xs-12 MarginAccordion BloomingPackage rounded ").fadeIn("slow");
            });
        }),
        $("#btn-link7").click(function () {
            var oldclass = $("#Show-img-second").attr('class');
            $("#Show-img-second").fadeOut(function () {
                $("#Show-img-second").removeClass(oldclass).addClass("col-md-6 col-sm-12 col-xs-12 MarginAccordion HaevyPackage rounded ").fadeIn("slow");
            });
        }),
        $("#btn-link8").click(function () {
            var oldclass = $("#Show-img-second").attr('class');
            $("#Show-img-second").fadeOut(function () {
                $("#Show-img-second").removeClass(oldclass).addClass("col-md-6 MarginAccordion col-sm-12 col-xs-12 FullcousePackage rounded ").fadeIn("slow");
            });
        });


});
