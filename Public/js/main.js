$(function(){

    var progress_precent = $("#progress_precent")

    var progress_num = parseInt(progress_precent.text())

    var funding_progress_bar = $("#funding_progress_bar")

    var aniFlag = true


    funding_progress_bar.css("width",progress_num+"%")


    // $(window).on("scroll",function(){
    //
    //     if(funding_progress_bar.offset().top-$(window).scrollTop()<=2/3*$(window).height()&&aniFlag){
    //
    //         funding_progress_bar.animate({
    //             "width":progress_num+"%"
    //         },800,function(){
    //             aniFlag = false
    //         })
    //
    //         // funding_progress_bar.css("width",progress_num+"%")
    //
    //     }
    //
    // })


    $(window).on("scroll",function(){
        if($(this).scrollTop()>0){
            $("#return_top").show()
        }else{
            $("#return_top").hide()
        }
    })


    $("#return_top").on("click",function(){
        $('body,html').animate({ scrollTop: 0 }, 800)
    })


    $("#news_menu").mouseover(function () {
        $("#menu_news").css({"display":"block"});
    });
    $("#news_menu").mouseout(function () {
        $("#menu_news").css({"display":"none"});
    });




})