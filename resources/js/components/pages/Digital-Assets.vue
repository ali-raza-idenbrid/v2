<template>
    <div>
         <Navbar />
<main>
   <div class="hero_Heading">
    <h2 class="hero">Digital Assets</h2>
    <p class="digital-subcontents__text">Digital assets allow you to download the content data in original quality. We offer our users a digital format of the data as well as legal permission to use it.</p>
</div>
        <section class="work mycontents-wide">
            <div class="section mediakit ">
                <div class="container-slim">

                      <div class="mb-50">
                         <h5>Logo</h5>
                         <div class="kit kit-slim"><a href="/assets/img/logo/logo.svg" download="image" target="_blank" rel="noopener">
                            <img src="/public/assets/img/logo/logo.svg" alt="" />
                            </a>
                         </div>
                         <div class="kit kit-slim"><a href="/assets/img/idenbrid-favicon-digital-assets.jpg">
                            <img src="/public/assets/img/idenbrid-favicon-digital-assets.jpg" alt="" />
                            </a>
                         </div>
                      </div>
                      <div>
                         <h5>Key Visual</h5>
                         <p> Everything you need to know about IDENBRID INC.</p>
                         <div class="kit"><a href="/assets/img/main-banner-2.png" download="image"  rel="noopener">
                            <img src="/public/assets/img/main-banner-2.png" alt="" />
                            </a>
                         </div>
                      </div>

                   <div>

                   </div>
                   <router-link class="btn btn-black" to="/">Back To Top</router-link>
                </div>
             </div>

            </section>

<section class="menu mt-5">
    <ul class="menu-contents mycontents-wide">
        <li class="menu-contents__list">
            <router-link to="/about/">
                <img class="menu-contents__list__thumbnail" src="/public/assets/img/icons/company.svg" alt="" loading="lazy">
                <div class="menu-contents__list__text">
                    <p class="menu-contents__list__subtitle">会社概要</p>
                    <h4 class="menu-contents__list__title">COMPANY</h4>
                </div>
            </router-link>
        </li>
        <li class="menu-contents__list">
            <router-link to="/blog/">
                <img class="menu-contents__list__thumbnail menu-contents__list__thumbnail_news" src="/public/assets/img/icons/WWW.png" alt="" loading="lazy">
                <div class="menu-contents__list__text">
                    <p class="menu-contents__list__subtitle">お知らせ</p>
                    <h4 class="menu-contents__list__title">BLOG</h4>
                </div>
            </router-link>
        </li>
        <li class="menu-contents__list">
            <router-link to="/onlinedevelopmenthub/">
                <img class="menu-contents__list__thumbnail" src="/public/assets/img/icons/Partnership.png" alt="" loading="lazy">
                <div class="menu-contents__list__text">
                    <p class="menu-contents__list__subtitle">オンライン開発ハブ</p>
                    <h4 class="menu-contents__list__title">DEVELOPEMENT</h4>
                </div>
            </router-link>
        </li>
    </ul>
</section>
  <!-- <section class="contact mycontents-wide mt-5">
                <h3 class="content-title content-title_contact">お問い合わせ</h3>
                <img class="contact__img" src="/public/assets/img/icons/Operator.png" alt="" width="80px">
                <p class="content-text content-text_contact">お問い合わせは企画時点からお受けしております。またこんなことできるなどITに関する相談事も無料で受け付けています。
                </p>
                <div class="contact__btns">
                    <button class="btn-wide btn-wide_call" data-toggle="modal" data-target="#linescancode">
                        <div class="btn-wide__imgs">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Line-white.png" alt="">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Line-Black.png" alt="">
                        </div>
                        <p class="btn-wide__text btn-wide__text_call">会社LINE ID</p>
                    </button>
                    <a class="btn-wide btn-wide_call" href="mailto:helloworld@idenbrid.com">
                        <div class="btn-wide__imgs">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Mail-White.png" alt="">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Mail-Black.png" alt="">
                        </div>
                        <p class="btn-wide__text btn-wide__text_call">
                            helloworld@idenbrid.com
                        </p>
                    </a>
                    <a class="btn-wide" href="skype:live:.cid.3145b74a3504693c?chat">
                        <div class="btn-wide__imgs">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Skype-White.png" alt="">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Skype-Black.png" alt="">
                        </div>
                        <p class="btn-wide__text btn-wide__text_contact">会社Skype ID</p>
                    </a>
                </div>
                 (Modal) 
                <div class="modal fade" id="linescancode" tabindex="-1" role="dialog" aria-labelledby="linescancode"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">ID検索はこちらから、LINE ID: idenbrid</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="/public/assets/img/line-code.jpg" width="100%" />
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
</main>
 <Footer />
    </div>
</template>
<script>
import Navbar from "../layout/Navbar.vue";
  import Footer from "../layout/Footer.vue";
    export default {
        components: {
                Navbar,
                Footer,
        },
         metaInfo() {
            return {
                title: "デジタル著作物 | システム開発はアイデンブリッド社 | IDENBRID INC.",
                meta: [{
                    vmid: "description",
                    name: "アイデンブリッド, アイデンブリッド社, アイデン, ウェブ, ウェブ開発, ウェブサイト, デザイン, ウェブデザイン, スマホアプリ, モバイルアプリ, LINE開発, RPA, Python, スクレイピング, IT開発, オンラインディベロップメントハブ, オンライン開発ハブ, パキスタン, オフショア開発, IDENBRID, Idenbrid, idenbrid, クラウド, ITコンサル",
                    content: "",
                }, ],
            };
        },

    };
</script>
<style>


</style>
