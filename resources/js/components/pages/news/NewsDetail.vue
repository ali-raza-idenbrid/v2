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
            <div class="main-contents mycontents-wide">
                <section class="single">
                    <div class="single__head">
                        <h1 class="single__head__title subcontent-title">{{news.title}}</h1>
                        <div class="single__head__flex">
                            <p class="single__head__tags">NEWS</p>
                            <p class="single__head__date">{{news.date}}</p>
                        </div>
                    </div>
                    <img width="1200" height="630"
                        src="https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1.jpg"
                        class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                        srcset="https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1.jpg 1200w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-300x158.jpg 300w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-1024x538.jpg 1024w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-768x403.jpg 768w"
                        sizes="(max-width: 1200px) 100vw, 1200px">
                    <div class="single__contents" v-html="news.description">

                    </div>
                </section>

                <aside class="aside">
                    <div class="aside__new">
                        <p class="aside__title aside__title__new"><img
                                src="/public/assets/img/icons/single-aside-new.png" alt="" loading="lazy"> 関連するニュース</p>

                        <ul class="aside__new__contents">
                            <li v-for="latest in latest_news" :key="latest.id" class="aside__news__list">
                                <router-link :to="'/news/detail/'+latest.id">
                                    <p class="aside__news__list__title">{{latest.title}}</p>
                                    <p class="asside_single__head__date">{{latest.date}}</p>
                                </router-link>
                            </li>
                        </ul>
                    </div>


                </aside>
            </div>

            <section class="btns">
                <a @click="prev(news.id)" v-if="previous == true" to="" rel="prev">
                    <img class="btns__prev__img" src="/public/assets/img/icons/single-prev.svg" alt="前のニュースへ"
                        width="7" />
                    <p class="btns__prev__text">前の記事へ</p>
                </a>
                <router-link to="/news/">
                    <img class="btns__prev__img" src="/public/assets/img/icons/single-blog.svg">
                    <p class="btns__prev__text">一覧に戻る</p>
                </router-link>
                <a @click="latests(news.id)" v-if="latest == true" rel="next">
                    <img class="btns__prev__img btns__next__img" src="/public/assets/img/icons/single-prev.svg"
                        alt="前のニュースへ" width="7" />
                    <p class="btns__prev__text">前の記事へ</p>
                </a>
            </section>
            <section class="menu">
                <ul class="menu-contents mycontents-wide">
                    <li class="menu-contents__list">
                        <router-link to="/about/">
                            <img class="menu-contents__list__thumbnail" src="/public/assets/img/icons/company.svg"
                                alt="" loading="lazy">
                            <div class="menu-contents__list__text">
                                <p class="menu-contents__list__subtitle">会社概要</p>
                                <h4 class="menu-contents__list__title">COMPANY</h4>
                            </div>
                        </router-link>
                    </li>
                    <li class="menu-contents__list">
                        <router-link to="/blog/">
                            <img class="menu-contents__list__thumbnail menu-contents__list__thumbnail_news"
                                src="/public/assets/img/icons/WWW.png" alt="" loading="lazy">
                            <div class="menu-contents__list__text">
                                <p class="menu-contents__list__subtitle">お知らせ</p>
                                <h4 class="menu-contents__list__title">BLOG</h4>
                            </div>
                        </router-link>
                    </li>
                    <li class="menu-contents__list">
                        <router-link to="/onlinedevelopmenthub/">
                            <img class="menu-contents__list__thumbnail" src="/public/assets/img/icons/Partnership.png"
                                alt="" loading="lazy">
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
    import Navbar from "../../layout/Navbar.vue";
    import Footer from "../../layout/Footer.vue";
    export default {
        components: {
            Navbar,
            Footer,
        },
        data() {
            return {
                loading: false,
                news: '',
                latest_news: [],
                previous: false,
                latest: false,
            }
        },
        methods: {
            prev(id) {
                axios.get('/api/prev-news-detail/' + id).then((res) => {
                    this.$router.push('/news/detail/' + res.data.id + '/');
                }).catch((err) = {});
            },
            latests(id) {
                axios.get('/api/latest-news-detail/' + id).then((res) => {
                    this.$router.push('/news/detail/' + res.data.id + '/');
                }).catch((err) = {});
            }
        },
        mounted() {
            axios.get('/api/news-detail/' + this.$route.params.id).then((res) => {
                    this.news = res.data.news;
                    this.latest_news = res.data.latest_news;
                    this.latest = res.data.latest;
                    this.previous = res.data.previous;
                })
                .catch((err) => {

                })
            setTimeout(() => {
                this.loading = false;
            }, 1000);
        },

        created() {
            this.loading = true;
        },


    };
</script>
<style>
    .main-contents {
        margin-top: 100px;
        margin-bottom: 100px;
        display: flex;
        justify-content: space-between;
    }

    .single {
        width: calc(100% - 440px);
    }

    .single__head {
        margin-bottom: 60px;
        padding: 30px 30px 20px 30px;
        background: #FFFFFF;
        border: 1px solid #C4C4C4;
        box-sizing: border-box;
        border-radius: 10px;
    }

    .single__head__title {
        margin-bottom: 30px;
    }

    .single__head__flex {
        display: flex;
    }

    .single__head__tags {
        width: 50%;
        font-weight: bold;
        font-size: 12px;
        line-height: 18px;
        letter-spacing: 0.05em;
        color: var(--textcolor);
    }

    .single__head__date {
        width: 50%;
        margin-left: auto;
        display: inline-block;
        text-align: right;
        font-size: 14px;
        line-height: 21px;
        letter-spacing: 0.05em;
        color: var(--textcolor);
    }

    .single__thumbnail {
        margin-bottom: 60px;
        width: 100%;
        height: 425px;
        object-fit: cover;
        border-radius: 10px;
    }

    .asside_single__head__date {
        width: 50%;
        display: inline-block;
        font-size: 14px;
        line-height: 21px;
        letter-spacing: 0.05em;
        color: var(--textcolor);
        padding-left: 20px;
    }

    /*mokuzi*/

    #rtoc-mokuji-wrapper {
        padding: 20px 30px;
        border-radius: 10px;
    }

    #rtoc-mokuji-title span {
        margin-bottom: 28px;
        display: inline-block;
        padding-left: 35px;
        position: relative;
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
        color: var(--textcolor);
    }

    #rtoc-mokuji-title span::before {
        position: absolute;
        left: 0;
        top: 4px;
        display: inline-block;
        width: 20px;
        height: 16px;
        content: "";
        /* background-image: url(../img/icon/single-mokuji.svg);*/
    }

    .rtoc_open_close {
        display: none;
    }

    .mokuji_ol {
        counter-reset: item;
    }

    .rtoc-item {
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
    }

    .rtoc-item::before {
        counter-increment: item;
        content: counter(item)'.';
    }

    /*å…±é€š*/

    .alignleft {
        float: left;
        margin-left: 0;
        margin-right: 1em;
    }

    .alignright {
        float: right;
        margin-left: 1em;
        margin-right: 0;
    }

    .aligncenter {
        margin-left: auto;
        margin-right: auto;
    }

    .wp-block-categories.aligncenter,
    .wp-block-latest-posts.aligncenter,
    .wp-block-archives.aligncenter,
    .wp-block-tag-cloud.aligncenter,
    .wp-block-latest-comments.aligncenter,
    .wp-block-rss.aligncenter {
        text-align: center;
    }

    figure {
        margin-left: 0;
        margin-right: 0;
    }

    body {
        box-sizing: border-box;
    }

    body *,
    body *::before,
    body *::after {
        box-sizing: inherit;
    }

    .single__contents h2 {
        position: relative;
        margin-bottom: 30px;
        margin-top: 30px;
        padding-left: 20px;
        font-weight: bold;
        font-size: 22px;
        line-height: 32px;
        letter-spacing: 0.05em;
    }

    .single__contents h2::after {
        content: "";
        position: absolute;
        left: 0;
        top: 3px;
        height: 26px;
        width: 5px;
        background-color: var(--basecolor);
    }

    #rtoc-1 {
        counter-reset: item;
    }

    /*
.single__contents h2::before {
    counter-increment: item;
    content: counter(item)'.';
    color: #1363AB;
}*/

    .single__contents p {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: var(--textcolor)
    }

    .alignfull {
        margin-left: -20px;
        margin-right: -20px;
        width: 100vw;
    }

    @media (min-width: 768px) {
        .mycontainer {
            max-width: none;
            margin-left: calc((100vw - var(--myw)) / 2) !important;
            margin-right: calc((100vw - var(--myw)) / 2) !important;
        }

        .alignfull {
            margin-left: calc((100vw - 100%) / 2 * -1) !important;
            margin-right: calc((100vw - 100%) / 2 * -1) !important;
        }

        .alignwide {
            margin-left: calc((100vw - 100%) / 4 * -1) !important;
            margin-right: calc((100vw - 100%) / 4 * -1) !important;
            max-width: calc(var(--myw) + 300px) !important;
            width: auto;
        }
    }

    @media (min-width: 1320px) {
        .alignwide {
            margin-left: -150px !important;
            margin-right: -150px !important;
        }
    }

    .contents img {
        max-width: 100%;
        height: auto;
    }

    .contents p {
        margin-bottom: 30px;
    }

    /*aside*/

    .aside {
        width: 360px;
    }

    .aside__new {
        margin-bottom: 60px;
    }

    .aside__title {
        position: relative;
        margin-left: 160px;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
    }

    .aside__title__new img {
        position: absolute;
        left: -32px;
        top: 1px;
    }

    .aside__title__tags {
        padding-left: 180px;
    }

    .aside__news__list {
        margin-bottom: 10px;
        position: relative;
        height: 75px;
        background: #FFFFFF;
        border: 0.5px solid #C4C4C4;
        box-sizing: border-box;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
    }

    .aside__news__list__title {
        padding-left: 20px;
        padding-top: 21px;
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
        color: var(--textcolor);
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
    }

    .aside__tags__list {
        position: relative;
        margin-left: 60px;
        padding-left: 35px;
        margin-bottom: 10px;
    }

    .aside__tags__list a {
        font-weight: bold;
        font-size: 14px;
        line-height: 21px;
        display: flex;
        align-items: center;
        letter-spacing: 0.05em;
        color: var(--textcolor);
    }

    .aside__tags__list a::before {
        position: absolute;
        content: "";
        display: inline-block;
        top: 0;
        left: 0;
        width: 20px;
        height: 20px;
        background: #FFFFFF;
        border: 1px solid #333333;
        box-sizing: border-box;
        border-radius: 2px;
    }

    @media (max-width: 1000px) {
        .main-contents {
            margin-bottom: 60px;
            margin-top: 73px;
            display: block;
        }

        .single {
            width: 100%;
        }

        .single__head {
            margin-bottom: 30px;
        }

        .aside {
            display: none;
        }

        .single__head__title {
            margin-bottom: 15px;
            font-size: 24px;
            line-height: 36px;
        }

        .single__head__title::before {
            height: 30px;
            width: 5px;
            top: 3px;
        }

        .single__head__tags,
        .single__head__date {
            font-size: 13px;
            line-height: 19px;
        }

        .single__thumbnail {
            height: 150px;
            margin-bottom: 30px;
        }

        #rtoc-mokuji-wrapper {
            padding: 20px 20px 5px 20px;
            border-radius: 5px;
        }

        #rtoc-mokuji-title span {
            padding-left: 30px;
            margin-bottom: 20px;
            font-size: 15px;
            line-height: 22px;
        }

        #rtoc-mokuji-title span::before {
            top: 4px;
            width: 17px;
            height: 13px;
            background-size: cover;
        }

        .rtoc-item {
            font-size: 13px;
            line-height: 19px;
            margin-bottom: 15px;
        }

        .single__contents h2 {
            font-size: 24px;
            line-height: 36px;
        }

        .single__contents h2::after {
            height: 30px;
            width: 5px;
            top: 3px;
        }

        .single__contents p {
            font-size: 14px;
            line-height: 21px;
        }

        .single__contents .single__contents__foot__title {
            font-size: 14px;
            line-height: 21px;
        }

        .single__contents__foot {
            margin-top: 50px;
            margin-bottom: 60px;
        }
    }

    /*btns*/

    .btns {
        padding-bottom: 120px;
        width: 100%;
        max-width: 370px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
    }

    .btns a {
        text-align: center;
        display: inline-block;
        width: 70px;
    }

    .btns__prev__img {
        width: 40px;
        height: 40px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .btns__next__img {
        transform: rotate(180deg);
    }

    .btns__prev__text {
        font-weight: 500;
        font-size: 14px;
        line-height: 21px;
        color: var(--textcolor);
    }

    @media (max-width: 767px) {
        .btns {
            padding-bottom: 60px;
        }

        .btns a {
            width: 65px;
        }

        .btns__prev__img {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        .btns__prev__text {
            font-size: 13px;
            line-height: 19px;
        }
    }
</style>