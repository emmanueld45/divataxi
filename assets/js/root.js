
/*** SIDEBAR START ** */
$(".sidebar-open-btn").click(function(){
    $(".sidebar").slideDown();
    $(".sidebar-open-btn").hide();
    $(".sidebar-close-btn").show();
});

$(".sidebar-close-btn").click(function(){
    $(".sidebar").slideUp();
    $(".sidebar-open-btn").show();
    $(".sidebar-close-btn").hide();
});
/*** SIDEBAR END ***/