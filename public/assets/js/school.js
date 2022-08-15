jQuery(function () {
    setTimeout('rect()'); //アニメーションを実行
});

function rect() {
    jQuery(".scroll__arrow__box").animate({
        top: "65px"
    },
        3000,
        "swing");
    jQuery(".scroll__arrow__box").animate({
        opacity: "0"
    },
        500,
        "swing",function(){
            jQuery(this).css({
                top: 0,
                opacity: 1
            });
        }
    );
    setTimeout('rect()', 4000); //アニメーションを繰り返す間隔
}