<template>
    <div>
         <div v-if="loading" class="preloader">
            <div class="ddback">
                <div class="loader">
                    <div class="loader-inner box-1"></div>
                    <div class="loader-inner box-2"></div>
                    <div class="loader-inner box-3"></div>
                    <div class="loader-inner box-4"></div>
                    <div class="loader-inner box-5"></div>
                    <div class="loader-inner box-6"></div>
                    <div class="loader-inner box-7"></div>
                    <div class="loader-inner box-8"></div>
                    <div class="loader-inner box-9"></div>
                    <div class="loader-inner box-10"></div>
                    <div class="loader-inner box-11"></div>
                    <div class="loader-inner box-12"></div>
                </div>

            </div>
        </div>
        <Navbar />
        <main>
            <div class="mycontents-wide">
                <img class="thumbnail" :src="'https://admin-idenbrid.idenbrid.jp/public/storage/work_images/'+work.image" alt="" loading="lazy"/>
            </div>
            <section class="work-text mycontents-wide">
                <h2 class="subcontent-title subcontent-title_about">{{work.company}}</h2>
                <p class="work-text__category">
                    <a  rel="tag">{{work.title}}</a>
                </p>
                <p class="work-text__tags">
                    {{work.content}}
                </p>
                <div class="work-text__about" v-html="work.description">

                </div>
            </section>
                 <section class="work mycontents-wide">
                     <h2 data-v-f008eaba="" class="subcontent-title subcontent-title_about">その他のプロジェクト </h2>
        <ul class="work-contents">
            <li  v-for="work in latest_works" :key="work.id" class="work-contents__list">
                <router-link :to="'/work/detail/'+work.id+'/'">
                    <img class="work-contents__list__thumbnail" :src="'https://admin-idenbrid.idenbrid.jp/public/storage/work_images/'+work.image" alt="" loading="lazy">
                    <p class="work-contents__list__company">{{work.company}}</p>
                    <p class="work-contents__list__title">{{work.title}}</p>
                    <p class="work-contents__list__tags">{{work.content}}</p>
                </router-link>
            </li>
        </ul>
               <router-link class="viewmore-btn viewmore-btn_center" to="/works/">View More<span class="viewmore-btn__img">  <img src="/public/assets/img/icons/btn-arrow.svg" alt="" loading="lazy">
            <img src="/public/assets/img/icons/btn-arrow-white.svg" alt="" loading="lazy"></span></router-link>
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
        </main>
        <Footer />
    </div>
</template>
<script>
    import Navbar from "../../layout/Navbar.vue";
    import Footer from "../../layout/Footer.vue";
    export default {
        components: {
            Navbar,
            Footer,
        },
         data(){
            return{
                loading: false,
                work:'',
                latest_works:[]
            }
        },
        mounted(){

        },
        metaInfo() {
            return {
                title: "クラウドソーシングシステム開発 | システム開発はアイデンブリッド社 | IDENBRID INC.",
                meta: [{
                    vmid: "description",
                    name: "description",
                    content: "アイデンブリッド社がこれまでに担当した案件の一部を紹介致します。フロントエンドの実装はReact JS、Vue JS、HTML、BootStrap、jQueryを主軸とし、バックエンド・API開発はLaravel(PHP)、Node JS、Pythonを基本に開発を行なっています。CMSではWordPress（ワードプレス）を用いて実装を行うこともあり、プラグインの開発に特化した案件もございます。スマホアプリではFultter(Dart)でフロント実装を行い、サーバー周りはGCPまたはAWSを用いています。",
                }, ],
            };
        },
         created() {
            this.loading = true;
             axios.get('/api/work-detail/'+this.$route.params.id).then((res)=>{
                this.work = res.data.work;
                this.latest_works = res.data.latest_works;
            })
            .catch((err)=>{})
             setTimeout(() => {
                this.loading = false;
            }, 1000);
        },
    };
</script>
<style scoped>
    /*works*/

    .thumbnail {
        display: block;
        margin: 150px auto 60px auto;
        width: 100%;
        max-width: 660px;
    }

    @media (max-width: 767px) {
        .thumbnail {
            margin-top: 73px;
            margin-bottom: 50px;
        }
    }

    /*works-pc*/

    .works-pc {
        display: flex;
        justify-content: space-between;
        margin-bottom: 60px;
    }

    .works-pc img {
        object-fit: cover;
    }

    .work-text__category a {
        margin-bottom: 20px;
        margin-right: 32px;
        display: inline-block;
        min-width: 150px;
        height: 40px;
        background: var(--textcolor);
        color: #fff;
        border-radius: 30px;
        text-align: center;
        font-weight: bold;
        font-size: 14px;
        line-height: 40px;
        pointer-events: none;
        padding: 0px 20px;
    }

    .work-text__tags {
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 14px;
        line-height: 21px;
        color: #727171;
    }

    .work-text__url {
        padding-left: 30px;
        position: relative;
        display: inline-block;
        font-weight: 500;
        font-size: 14px;
        line-height: 21px;
        color: var(--textcolor);
    }

    .work-text__url img {
        position: absolute;
        top: -1px;
        left: 0;
    }

    .work-text__about {
        margin-bottom: 60px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: var(--textcolor);
    }

    .works-pc__img1,
    .works-pc__right {
        width: calc((100% - 60px) / 2);
    }

    .works-pc__img2,
    .works-pc__img3 {
        width: 100%;
    }

    .works-pc__img2 {
        margin-bottom: 60px;
    }

    /*ãŒãã†sp*/

    .works-sp {
        padding-top: 60px;
        padding-bottom: 60px;
        background-color: #f6f6f6;
    }

    .works-sp img {
        object-fit: cover;
    }

    .works-sp__contents {
        display: flex;
        justify-content: space-between;
    }

    .works-sp__list {
        width: calc((100% - 65px * 2) / 3);
    }

    .works-sp__img {
        width: 100%;
    }

    @media (max-width: 767px) {
        .subcontent-title_about {
            margin-bottom: 20px;
        }
        .work-text__category a {
            margin-right: 20px;
            height: 34px;
            min-width: 130px;
            font-size: 13px;
            line-height: 34px;
        }
        .work-text__tags {
            font-size: 13px;
            line-height: 19px;
        }
        .work-text__url {
            margin-bottom: 30px;
        }
        .work-text__about {
            font-size: 13px;
            line-height: 19px;
            margin-bottom: 30px;
        }
        .works-pc__img1,
        .works-pc__right {
            width: calc((100% - 8px) / 2);
        }
        .works-pc {
            margin-bottom: 30px;
        }
        .works-sp {
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .works-sp__list {
            width: calc((100% - 6px * 2) / 3);
        }
    }

    /*workæœ€è¿‘ã®å®Ÿç¸¾*/

    .work {
        margin-top: 60px;
        margin-bottom: 120px;
    }

    .subcontent-title_works {
        margin-bottom: 110px;
    }

    .work-contents {
        display: flex;
        justify-content: space-between;
        margin-bottom: 80px;
    }

    .work-contents__list {
        width: calc((100% - 65px * 2) / 3);
    }

    @media (max-width: 767px) {
        .work {
            margin-bottom: 60px;
        }
        .subcontent-title_works {
            margin-bottom: 30px;
        }
        .work-contents {
            margin-bottom: 0;
            padding-bottom: 30px;
            margin-bottom: 60px;
            margin-top: -20px;
            overflow-x: scroll;
            width: 100vw;
            margin-left: calc(var(--content-padding-side-sp) * -1);
        }
        .work-contents__list {
            margin-top: 20px;
            min-width: 230px;
            margin-left: 30px;
        }
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
    margin-bottom: 120px;
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
