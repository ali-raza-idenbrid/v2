jQuery('.header-pc__btn').on('click', function () {
    jQuery("header").toggleClass("header_active");
    jQuery(".header-pc__btn").toggleClass("header-pc__btn_active");
    jQuery(".header-sp__btn").toggleClass("header-sp__btn_active");
})

jQuery('.header-sp__btn').on('click', function () {
    jQuery("header").toggleClass("header_active");
    jQuery(".header-pc__btn").toggleClass("header-pc__btn_active");
    jQuery(".header-sp__btn").toggleClass("header-sp__btn_active");
})

jQuery('.header-sp__fixed__menu__left__list__pulus_service').on('click', function () {
    jQuery(".header-sp__fixed__menu__left__list_service").toggleClass("header-sp__fixed__menu__left__list_service_active");
    console.log("hoge");
})

jQuery('.header-sp__fixed__menu__left__list__pulus_blog').on('click', function () {
    jQuery(".header-sp__fixed__menu__left__list_blog").toggleClass("header-sp__fixed__menu__left__list_blog_active");
    console.log("hoge");
})

