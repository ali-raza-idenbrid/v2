<template>
    <div>
        <header>
            <div class="header-pc">
                <div class="header-pc__fixed">
                    <h1 class="header-pc__img">
                        <router-link to="/" id="logo">
                            <img class="header-pc__img__img" src="/public/assets/img/logo/idenbrid-logo.png" alt="">
                            <img class="header-pc__img__img_white" src="/public/assets/img/logo/idenbrid-logo.png"
                                alt="">
                        </router-link>
                    </h1>
                    <!-- <p class="header-pc__btn"><button><span></span><span></span><span></span></button></p> -->
                    <div class="header-pc__fixed__menu">

                        <div class="header-pc__fixed__menu__right">

                            <ul class="header-pc__fixed__menu__left">
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/"><span class="jp">トップページ</span><span class="en">Home</span>
                                    </router-link>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/solutions/"><span class="jp">事業内容</span><span
                                            class="en">SOLUTIONS</span></router-link>
                                    <ul>
                                        <li class="header-pc__fixed__menu__left__list__list">
                                            【ウェブ制作・デジタルマーケティング/デザイン制作/IdenSpire/オンライン開発ハブ】</li>
                                        <!--<li class="header-pc__fixed__menu__left__list__list"><router-link to="/Work">ステム開発</router-link></li>
                                <li class="header-pc__fixed__menu__left__list__list"><router-link to="/Work">ェブ制作・デジタルマーケティング</router-link></li>
                                <li class="header-pc__fixed__menu__left__list__list"><router-link to="/Work">デザイン制作</router-link></li>
                                <li class="header-pc__fixed__menu__left__list__list"><router-link to="/Work">　BizBlanca</router-link></li>
                                <li class="header-pc__fixed__menu__left__list__list"><router-link to="/Work">オンライン開発ハブ</router-link></li>-->
                                    </ul>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/works/"><span class="jp">開発実績</span><span class="en">WORKS</span>
                                    </router-link>
                                    <ul>
                                        <li class="header-pc__fixed__menu__left__list__list">
                                            【UIUXデザイン/システム開発/スマホアプリ開発/ウェブ制作】</li>
                                    </ul>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/about/"><span class="jp">企業情報</span><span class="en">ABOUT</span>
                                    </router-link>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/onlinedevelopmenthub/"><span class="jp">オンライン開発ハブについて</span><span
                                            class="en">ONLINE DEVELOPMENT HUB</span></router-link>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/news/"><span class="jp">ニュース・プレスリリース</span><span
                                            class="en">NEWS</span></router-link>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/blog/"><span class="jp">お知らせ・ブログ</span><span
                                            class="en">BLOG</span></router-link>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/contact/"><span class="jp">お問い合わせ</span><span
                                            class="en">CONTACT</span></router-link>
                                </li>
                                <li class="header-pc__fixed__menu__left__list">
                                    <router-link to="/faqs/"><span class="jp">よくある質問</span><span class="en">FAQs</span>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <nav class="header-pc__nav">
                    <ul>
                        <li class="header-pc__nav__list">
                            <router-link to="/blog/">ブログ</router-link>
                        </li>
                        <li class="header-pc__nav__list">
                            <router-link to="/policy/">経営理念</router-link>
                        </li>
                        <li class="header-pc__nav__list">
                            <router-link to="/recruit/">事業紹介</router-link>
                        </li>
                        <li class="header-pc__nav__list">
                            <router-link to="/works/">仕事実績</router-link>
                        </li>
                        <li class="header-pc__nav__list">
                            <router-link to="/about-company/">会社情報</router-link>
                        </li>
                        <!-- <li class="header-pc__nav__list"><router-link to="/onlinedevelopmenthub/">ONLINE DEVELOPEMENT HUB</router-link></li>-->
                        <!--<li class="header-pc__nav__list"><router-link to="/news/">NEWS</router-link></li>-->

                        <li class="header-pc__nav__list header-pc__nav__list_img mr-0 pr-0">
                            <router-link to="/contact/">問い合せ</router-link>
                        </li>
                        <!-- <img src="https://whitecanvas.jp/wp-content/themes/whitecanvas_fix_thema-main/img/icon/paper-airplane.svg" alt=""> -->
                    </ul>
                </nav>
            </div>

            <div class="header-sp">
                <h1 class="header-sp__img">
                    <router-link :to="'/'">
                        <img class="header-sp__img__img" src="/public/assets/img/logo/idenbrid-logo.png" alt="">
                        <img class="header-sp__img__img_white" src="/public/assets/img/idenbrid-logo.png" alt="">
                    </router-link>
                </h1>
                <button class="header-sp__btn"><span></span><span></span><span></span></button>

                <div class="header-sp__fixed__menu">
                    <ul class="header-sp__fixed__menu__left">
                        <li class="header-sp__fixed__menu__left__list header-sp__fixed__menu__left__list_service">
                            <p>
                                <router-link to="/">トップページ</router-link>
                            </p>

                        </li>
                        <li class="header-sp__fixed__menu__left__list">
                            <router-link to="/solutions/">事業内容</router-link>
                        </li>
                        <li class="header-sp__fixed__menu__left__list">
                            <router-link to="/Works/">開発実績</router-link>
                        </li>
                        <li class="header-sp__fixed__menu__left__list header-sp__fixed__menu__left__list_blog">
                            <p>
                                <router-link to="/about/">企業情報</router-link>
                            </p>
                        </li>
                        <li class="header-sp__fixed__menu__left__list">
                            <router-link to="/onlinedevelopmenthub/">オンライン開発ハブについて</router-link>
                        </li>
                        <li class="header-sp__fixed__menu__left__list">
                            <router-link to="/news/">NEWS</router-link>
                        </li>
                        <li class="header-sp__fixed__menu__left__list">
                            <router-link to="/blog/">お知らせ・ブログ</router-link>
                        </li>
                        <li class="header-sp__fixed__menu__left__list">
                            <router-link to="/contact/">お問い合わせ</router-link>
                        </li>
                        <li class="header-sp__fixed__menu__left__list">
                            <router-link to="/faqs/">よくある質問</router-link>
                        </li>

                    </ul>
                    <!-- <div class="header-sp__fixed__menu__right">

                    <router-link class="header-sp__fixed__menu__right__contact" to="/contact/">
                        <img src="/public/assets/img/icons/paper-airplane.svg" alt="">
                        <img src="/public/assets/img/icons/paper-airplane-white.svg" alt="">
                        CONTACT
                    </router-link>
                    <ul class="header-sp__fixed__menu__right__sns">
                        <li><a href="https://twitter.com/whitecanvas_inc" target=”_blank”><img src="/public/assets/img/icons/twitter.svg" alt=""></a></li>
                        <li><a href="https://www.facebook.com/whitecanvas.inc2020" target=”_blank”><img src="/public/assets/img/icons/face-book.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/white05_19/?hl=ja" target=”_blank”><img src="/public/assets/img/icons/instagram.svg" alt=""></a></li>
                    </ul>
                </div>-->
                </div>
            </div>
        </header>
        <div class="side_fix on">
            <div class="fix_btn">
                <router-link to="/download-form/"><span class="txt">資料請求</span></router-link>
            </div>
            <div class="pararel fix_btn">
                <router-link to="/" class="key">
                    <span class="txt">裏サイト</span>

                </router-link>
            </div>
        </div>
    </div>
</template>
<!-- <script>

    export default {
        components: {

        },
   mounted(){

       /* left side humbger menu */
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
   }
   /*end*/

    };
</script> -->
<style scoped>
.side_fix {
    position: fixed;
    right: 0;
    top: 50%;
    transform: translate(100%, -50%);
    z-index: 100001;
    transition: 0.4s;
    width: 45px;
}
.side_fix.on {
    transform: translate(0, -50%);
}
.side_fix .fix_btn {
    transition: 0.4s;
}
.side_fix .fix_btn a {
    background-color: #000;
    display: flex;
    border: solid 1px #dadada;
    cursor: pointer;
    justify-content: center;
    align-items: center;
    padding: 25px 0;
    opacity: 0.75;
}
.side_fix .fix_btn a .txt {
    display: block;
    -webkit-writing-mode: vertical-rl;
    -ms-writing-mode: tb-rl;
    -o-writing-mode: vertical-rl;
    writing-mode: vertical-rl;
    font-size: 14px;
    color: #dadada;
    font-family: NotoSansJP-Medium;
    letter-spacing: 0.18px;
    transition: 0.4s;
    position: relative;
}
.side_fix .fix_btn {
    transition: 0.4s;
}
.side_fix .fix_btn a {
    background-color: #000;
    display: flex;
    border: solid 1px #dadada;
    cursor: pointer;
    justify-content: center;
    align-items: center;
    padding: 25px 0;
    opacity: 0.75;
}
.side_fix .fix_btn.pararel {
    margin-top: 20px;
}
.side_fix .fix_btn {
    transition: 0.4s;
}
@media screen and (max-width: 896px){
.side_fix {
    width: 35px;
}
.side_fix .fix_btn a {
    background: #000;
    padding: 15px 0;
    border: 1px solid #474747;
}
.side_fix .fix_btn a .txt {
    color: #dadada;
    font-size: 12px;
}
}
</style>