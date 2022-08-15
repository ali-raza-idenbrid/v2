
<template>
    <div>
         <Navbar />
<main>
   <div class="hero_Heading">
    <h2 class="hero pb-2">WORKS</h2>
    <p class="work-subcontents__text">このページでは当社がこれまで手がけてきたシステム開発・アプリ構築・ウェブ制作などのポートフォリオを公開しています。</p>
</div>
        <section class="work mycontents-wide">
            <ul class="work-contents">
                <li v-for="work in works" :key="work.id" class="work-contents__list">
                    <router-link :to="'/work/detail/'+work.id">
                        <img class="work-contents__list__thumbnail" :src="'https://admin-idenbrid.idenbrid.jp/public/storage/work_images/'+work.image" alt="" loading="lazy">
                        <p class="work-contents__list__company">{{work.company}}</p>
                        <p class="work-contents__list__title">{{work.title}}</p>
                        <p class="work-contents__list__tags">{{work.content}}</p>
                    </router-link>
                </li>
            </ul>
        </section>

  <section class="menu">
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
                    <p class="menu-contents__list__subtitle">ブログ</p>
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
    <p class="content-text content-text_contact">お問い合わせは企画時点からお受けしております。またこんなことできるなどITに関する相談事も無料で受け付けています。</p>
    <div class="contact__btns">
        <button class="btn-wide btn-wide_call" data-toggle="modal" data-target="#linescancode">
            <div class="btn-wide__imgs">
                <img class="btn-wide__img" src="/public/assets/img/icons/Line-white.png" alt="" loading="lazy">
                <img class="btn-wide__img" src="/public/assets/img/icons/Line-Black.png" alt="" loading="lazy">
            </div>
            <p class="btn-wide__text btn-wide__text_call">会社LINE ID</p>
        </button>
        <a class="btn-wide btn-wide_call" href="mailto:helloworld@idenbrid.com">
            <div class="btn-wide__imgs">
                <img class="btn-wide__img" src="/public/assets/img/icons/Mail-White.png" alt="" loading="lazy">
                <img class="btn-wide__img" src="/public/assets/img/icons/Mail-Black.png" alt="" loading="lazy">
            </div>
                <p class="btn-wide__text btn-wide__text_call">
                    helloworld@idenbrid.com
                    </p>
        </a>
        <a class="btn-wide" href="skype:live:.cid.3145b74a3504693c?chat">
            <div class="btn-wide__imgs">
                <img class="btn-wide__img" src="/public/assets/img/icons/Skype-White.png" alt="" loading="lazy">
                <img class="btn-wide__img" src="/public/assets/img/icons/Skype-Black.png" alt="" loading="lazy">
            </div>
            <p class="btn-wide__text btn-wide__text_contact">会社Skype ID</p>
        </a>
    </div>
 (Modal) 
<div class="modal fade" id="linescancode" tabindex="-1" role="dialog" aria-labelledby="linescancode" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">ID検索はこちらから、LINE ID: idenbrid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="/public/assets/img/line-code.jpg" width="100%"/>
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
        data(){
            return{
                works:[]
            }
        },
        metaInfo() {
            return {
                title: "開発実績 | システム開発はアイデンブリッド社 | IDENBRID INC.",
                meta: [{
                    vmid: "description",
                    name: "アイデンブリッド, アイデンブリッド社, アイデン, ウェブ, ウェブ開発, ウェブサイト, デザイン, ウェブデザイン, スマホアプリ, モバイルアプリ, LINE開発, RPA, Python, スクレイピング, IT開発, オンラインディベロップメントハブ, オンライン開発ハブ, パキスタン, オフショア開発, IDENBRID, Idenbrid, idenbrid, クラウド, ITコンサル",
                    content: "アイデンブリッド社がこれまでに担当した案件の一部を紹介致します。フロントエンドの実装はReact JS、Vue JS、HTML、BootStrap、jQueryを主軸とし、バックエンド・API開発はLaravel(PHP)、Node JS、Pythonを基本に開発を行なっています。CMSではWordPress（ワードプレス）を用いて実装を行うこともあり、プラグインの開発に特化した案件もございます。スマホアプリではFultter(Dart)でフロント実装を行い、サーバー周りはGCPまたはAWSを用いています。",
                }, ],
            };
        },
        mounted(){
            axios.get('/api/works').then((res)=>{
                this.works = res.data.works;
            }).catch((err)=>{ });
        }

    };
</script>
<style scoped>
.work-subcontents__text{
    font-weight: bold;
    font-size: 16px;
    line-height: 24px;
    width: calc((100% - 415px) / 1);
    text-align: center;
    margin: auto;
}
.work-contents__list {
    background: #FFFFFF;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
    transition: 1s;
    transition-property: transform;
}

.work-contents__list:hover {
    transform: scale(1.05);
}

.work-contents__list__thumbnail {
    width: 100%;
}

.work-contents__list__company {
    margin: 20px auto 5px 20px;
    font-weight: bold;
    font-size: 14px;
    line-height: 21px;
}

.work-contents__list__title {
    margin-bottom: 5px;
    margin-left: 20px;
    font-weight: bold;
    font-size: 16px;
    line-height: 24px;
}

.work-contents__list__tags {
    margin-left: 20px;
    padding-bottom: 14px;
    font-weight: 500;
    font-size: 14px;
    line-height: 21px;
    color: #727171;
}

@media (max-width: 767px) {
    .work-subcontents__text{
    width:100%;
    }
    .work-contents__list__thumbnail {
        margin-bottom: 12px;
    }
    .work-contents__list__company {
        margin: 0 12px 5px 12px;
        font-size: 14px;
        line-height: 21px;
    }
    .work-contents__list__title {
        margin: 0 12px 12px 12px;
        font-size: 15px;
        line-height: 22px;
    }
    .work-contents__list__tags {
        margin: 0 12px;
        padding-bottom: 12px;
        font-size: 13px;
        line-height: 19px;
    }
}

/*work*/

.work {
    margin-top: 100px;
    margin-bottom: 100px;
}

.work-contents {
    display: flex;
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.work-contents__list {
    width: calc((100% - 65px * 2) / 3);
    margin-bottom: 60px;
    margin-left: 65px;
}

.work-contents .work-contents__list:nth-child(3n + 1){
    margin-left: 0;
}

@media (max-width: 767px) {
    .work {
        margin-bottom: 60px;
    }
    .work-contents{
        margin-bottom: 20px;
    }
    .work-contents .work-contents__list:nth-child(2n){
        margin-left: 35px;
    }
    .work-contents .work-contents__list:nth-child(2n + 1){
        margin-left: 0;
    }
    .work-contents__list {
        width: calc((100% - 35px) / 2);
        margin-bottom: 30px;
    }
}

@media (max-width: 500px) {
    .work-contents {
        display: block;
    }
    .work-contents__list {
        width: 100%;
        margin-bottom: 30px;
        margin-left: 0 !important;
    }
}
</style>
