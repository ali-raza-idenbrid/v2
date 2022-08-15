<template>
    <div>
        <Navbar />
        <main>
            <!-- <div v-html="blogs.content"></div> -->
            <div class="hero_Heading">
                <h2 class="hero">BLOG</h2>
                <p class="blog-subcontents__text">こちらのお知らせでは当社から皆様によりIT開発が好きになるようなニュースや当社からのリリースを発信する場所です。</p>
            </div>
            <section class="blog mycontents-wide">
                <!-- <ul class="blog-contents">
              
                    <li v-for="blog in blogs" :key="blog.id" class="blog-contents__list">
                        <router-link :to="'/blog/detail/'+blog.id+'/'">
                            <p class="blog-contents__list__tags"><span>BLOG</span></p>
                            <img class="blog-contents__list__thumbnail"
                                :src="'https://admin-idenbrid.idenbrid.jp/public/storage/blog_images/'+blog.image"
                                alt="" loading="lazy" />
                            <p class="blog-contents__list__title">{{blog.title}}</p>
                            <p class="blog-contents__list__date">{{blog.date}}</p>
                        </router-link>
                    </li>
                </ul> -->
                <div class="blog--content--inner">
                    <div class="blog--content--mainarea">
                        <div class="blog--content--list">
                            <div v-for="blog in blogs" :key="blog.id" class="blog--content--item">
                                <router-link :to="'/blog/detail/'+blog.id+'/'" class="hoverScale fade_y on">
                                    <div class="photo thumb">
                                        <div class="hvrtxt en"><span class="more_txt"><span
                                                    class="underline">MORE</span></span>
                                        </div>
                                        <div class="scaleImg">
                                            <img :src="'https://admin-idenbrid.idenbrid.jp/public/storage/blog_images/'+blog.image"
                                                alt="" loading="lazy"> </div>
                                    </div>
                                    <div class="bloginfo">
                                        <time class="time en">{{blog.date}}</time>
                                        <span class="cat workstyle">BLOG</span> </div>
                                    <h3 class="fade_y on">{{blog.title}}</h3>
                                </router-link>
                                <div class="writing fade_y on">
                                    <div class="good"><i class="fa fa-heart mr-1"></i>11</div>
                                </div>
                            </div>
                        </div>
                        <div class="wp-pagenavi" role="navigation">
                            <span aria-current="page" class="current">1</span><a class="page larger" title="ページ 2"
                                href="">2</a><a class="page larger" title="ページ 3" href="">3</a><a class="page larger"
                                title="ページ 4" href="">4</a><a class="page larger" title="ページ 5" href="">5</a>
                               <span class="extend">...</span><a class="larger page" title="ページ 10" href="">10</a><span
                                class="extend">...</span><a class="nextpostslink" rel="next" aria-label="Next Page"
                                href="https://tomorrowgate.co.jp/blog/page/2/"><i class="fa fa-angle-right"></i></a><a class="last"
                                aria-label="Last Page" href="https://tomorrowgate.co.jp/blog/page/14/"><i class="fas fa-angles-right"></i></a>
                        </div>
                    </div>

                    <div class="blog--content--sidearea">
                        <div class="searcharea fade_y on">
                            <form method="get" action="https://tomorrowgate.co.jp/blog/">
                                <input type="hidden" name="post_type" value="blog">
                                <input name="s" type="text" class="search-text" placeholder="キーワード検索">
                                <input type="submit" value="" class="submit">
                            </form>
                        </div>


                        <h4 class="sideheading fade_y pc on">カテゴリー</h4>
                        <div class="sp_cat">
                            <a href="https://tomorrowgate.co.jp/blog/"
                                class="categoryitem current fade_y on">全てのカテゴリー</a>
                            <a href="https://tomorrowgate.co.jp/blog_category/pickup/"
                                class="categoryitem fade_y pickup on">おすすめ（3）</a></div>


                        <h4 class="sideheading fade_y pc on">おすすめの記事</h4>
                        <div class="recommend--list pc">
                            <a href="https://tomorrowgate.co.jp/blog/2954/" class="hoverScale recommend--item">
                                <div class="thumb photo thumb-img">
                                    <div class="hvrtxt en"><span class="more_txt"><span
                                                class="underline">MORE</span></span>
                                    </div>
                                    <div class="scaleImg scale-img">
                                        <img width="1200" height="630"
                                            src="https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1.jpg"
                                            class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                            srcset="https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1.jpg 1200w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-300x158.jpg 300w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-1024x538.jpg 1024w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-768x403.jpg 768w"
                                            sizes="(max-width: 1200px) 100vw, 1200px"> </div>
                                </div>
                                <div class="bloginfo">
                                    <time class="time en">2021.10.19</time>
                                    <div class="good"><i class="fa fa-heart mr-1" aria-hidden="true"></i> 61</div>
                                </div>
                                <h3 class="hvrunder">私、会社辞めます。</h3>
                            </a>
                            <a href="https://tomorrowgate.co.jp/blog/1707/" class="hoverScale recommend--item">
                                <div class="thumb photo thumb-img">
                                    <div class="hvrtxt en"><span class="more_txt"><span
                                                class="underline">MORE</span></span>
                                    </div>
                                    <div class="scaleImg scale-img">
                                        <img width="1200" height="630"
                                            src="https://tomorrowgate.co.jp/wp-content/uploads/2021/09/bdfac93935f07853ea5bb801a6e09e19-1.jpg"
                                            class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                            srcset="https://tomorrowgate.co.jp/wp-content/uploads/2021/09/bdfac93935f07853ea5bb801a6e09e19-1.jpg 1200w, https://tomorrowgate.co.jp/wp-content/uploads/2021/09/bdfac93935f07853ea5bb801a6e09e19-1-300x158.jpg 300w, https://tomorrowgate.co.jp/wp-content/uploads/2021/09/bdfac93935f07853ea5bb801a6e09e19-1-1024x538.jpg 1024w, https://tomorrowgate.co.jp/wp-content/uploads/2021/09/bdfac93935f07853ea5bb801a6e09e19-1-768x403.jpg 768w"
                                            sizes="(max-width: 1200px) 100vw, 1200px"> </div>
                                </div>
                                <div class="bloginfo">
                                    <time class="time en">2021.09.10</time>
                                    <div class="good"><i class="fa fa-heart mr-1" aria-hidden="true"></i>28</div>
                                </div>
                                <h3 class="hvrunder">ブランディングとは？</h3>
                            </a>
                            <a href="https://tomorrowgate.co.jp/blog/2981/" class="hoverScale recommend--item">
                                <div class="thumb photo thumb-img">
                                    <div class="hvrtxt en"><span class="more_txt"><span
                                                class="underline">MORE</span></span>
                                    </div>
                                    <div class="scaleImg scale-img">
                                        <img width="1200" height="630"
                                            src="https://tomorrowgate.co.jp/wp-content/uploads/2022/03/7916b395039ce00f012ecd7ccb26694b-1.jpg"
                                            class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                            srcset="https://tomorrowgate.co.jp/wp-content/uploads/2022/03/7916b395039ce00f012ecd7ccb26694b-1.jpg 1200w, https://tomorrowgate.co.jp/wp-content/uploads/2022/03/7916b395039ce00f012ecd7ccb26694b-1-300x158.jpg 300w, https://tomorrowgate.co.jp/wp-content/uploads/2022/03/7916b395039ce00f012ecd7ccb26694b-1-1024x538.jpg 1024w, https://tomorrowgate.co.jp/wp-content/uploads/2022/03/7916b395039ce00f012ecd7ccb26694b-1-768x403.jpg 768w"
                                            sizes="(max-width: 1200px) 100vw, 1200px"> </div>
                                </div>
                                <div class="bloginfo">
                                    <time class="time en">2022.03.29</time>
                                    <div class="good"><i class="fa fa-heart mr-1" aria-hidden="true"></i>36</div>
                                </div>
                                <h3 class="hvrunder">東京を真っ黒に塗りつぶす｜なぜトゥモローゲートは東京に進出するのか</h3>
                            </a>
                        </div>
                        <h4 class="sideheading pc">人気記事ランキング</h4>
                        <div class="recommend--list popular pc">
                            <a href="https://tomorrowgate.co.jp/blog/1673/" class="hoverScale recommend--item popular">
                                <div class="thumb photo thumb-img">
                                    <div class="hvrtxt en"><span class="more_txt"><span
                                                class="underline">MORE</span></span>
                                    </div>
                                    <div class="scaleImg scale-img">
                                        <img width="1200" height="630"
                                            src="https://tomorrowgate.co.jp/wp-content/uploads/2021/08/210826_REALBRANDING.jpg"
                                            class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                            srcset="https://tomorrowgate.co.jp/wp-content/uploads/2021/08/210826_REALBRANDING.jpg 1200w, https://tomorrowgate.co.jp/wp-content/uploads/2021/08/210826_REALBRANDING-300x158.jpg 300w, https://tomorrowgate.co.jp/wp-content/uploads/2021/08/210826_REALBRANDING-1024x538.jpg 1024w, https://tomorrowgate.co.jp/wp-content/uploads/2021/08/210826_REALBRANDING-768x403.jpg 768w"
                                            sizes="(max-width: 1200px) 100vw, 1200px"> </div>
                                </div>
                                <div class="bloginfo">
                                    <time class="time en">2021.08.27</time>
                                    <div class="good"><i class="fa fa-heart mr-1" aria-hidden="true"></i>62</div>
                                </div>
                                <h3 class="hvrunder">ブランディングとは｜中小企業がすぐやるべきブランドづくりのやり方</h3>
                            </a>
                            <a href="https://tomorrowgate.co.jp/blog/2954/" class="hoverScale recommend--item popular">
                                <div class="thumb photo thumb-img">
                                    <div class="hvrtxt en"><span class="more_txt"><span
                                                class="underline">MORE</span></span>
                                    </div>
                                    <div class="scaleImg scale-img">
                                        <img width="1200" height="630"
                                            src="https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1.jpg"
                                            class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                            srcset="https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1.jpg 1200w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-300x158.jpg 300w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-1024x538.jpg 1024w, https://tomorrowgate.co.jp/wp-content/uploads/2021/10/blog_thumb-1-768x403.jpg 768w"
                                            sizes="(max-width: 1200px) 100vw, 1200px"> </div>
                                </div>
                                <div class="bloginfo">
                                    <time class="time en">2021.10.19</time>
                                    <div class="good"><i class="fa fa-heart mr-1" aria-hidden="true"></i>61</div>
                                </div>
                                <h3 class="hvrunder">私、会社辞めます。</h3>
                            </a>

                        </div>
                        <div class="bnr_area">
                            <div class="wrap">
                                <a href="https://tomorrowgate.co.jp/special/" class="hoverScale" target="_blank">
                                    <div class="thumb thumb-img">
                                        <div class="hvrtxt en"><span class="more_txt"><span
                                                    class="underline">MORE</span></span></div>
                                        <div class="scaleImg scale-img">
                                            <img src="https://tomorrowgate.co.jp/asset/img/blog/bnr01.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="menu">
                <ul class="menu-contents mycontents-wide">
                    <li class="menu-contents__list">
                        <router-link to="/about/">
                            <img class="menu-contents__list__thumbnail" src="/public/assets/img/icons/company.svg"
                                alt="">
                            <div class="menu-contents__list__text">
                                <p class="menu-contents__list__subtitle">会社概要</p>
                                <h4 class="menu-contents__list__title">COMPANY</h4>
                            </div>
                        </router-link>
                    </li>
                    <li class="menu-contents__list">
                        <router-link to="/blog/">
                            <img class="menu-contents__list__thumbnail menu-contents__list__thumbnail_news"
                                src="/public/assets/img/icons/WWW.png" alt="">
                            <div class="menu-contents__list__text">
                                <p class="menu-contents__list__subtitle">ブログ</p>
                                <h4 class="menu-contents__list__title">BLOG</h4>
                            </div>
                        </router-link>
                    </li>
                    <li class="menu-contents__list">
                        <router-link to="/onlinedevelopmenthub/">
                            <img class="menu-contents__list__thumbnail" src="/public/assets/img/icons/Partnership.png"
                                alt="">
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
                title: "お知らせ・ブログ | システム開発はアイデンブリッド社 | IDENBRID INC.",
                meta: [{
                    vmid: "description",
                    name: "アイデンブリッド, アイデンブリッド社, アイデン, ウェブ, ウェブ開発, ウェブサイト, デザイン, ウェブデザイン, スマホアプリ, モバイルアプリ, LINE開発, RPA, Python, スクレイピング, IT開発, オンラインディベロップメントハブ, オンライン開発ハブ, パキスタン, オフショア開発, IDENBRID, Idenbrid, idenbrid, クラウド, ITコンサル",
                    content: "アイデンブリッドではお知らせやブログを定期的に更新しており、皆様が日々抱くサイト構築やアプリ開発の疑問やサイトをローンチした後の運用に関しての疑問に答えるブログ記事を公開しています。",
                }, ],
            };
        },
        data() {
            return {
                blogs: []
            }
        },
        mounted() {
            axios.get('/api/blogs').then((res) => {
                this.blogs = res.data.blogs;
            }).catch((err) => {});


        }
    };

</script>

<style>
   
    /*blog-brns*/
    .blog-subcontents__text {
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
        padding: 0px 10px;
        text-align: center;
        margin: auto;
    }
    .blog__btns {
        margin-bottom: 60px;
        position: relative;
        display: flex;
    }

    .blog__btns__list {
        display: inline-block;
        margin-right: 60px;
    }

    .blog__btns__list_hr {
        position: absolute;
        width: 0.7px;
        height: 50px;
        background-color: var(--textcolor);
        left: 156px;
        bottom: 0;
    }

    .blog__btns__list__label {
        margin-bottom: 3px;
        font-weight: bold;
        font-size: 24px;
        line-height: 36px;
        letter-spacing: 0.05em;
        color: var(--textcolor);
    }

    .blog__btns__list_select {
        display: inline-block;
        width: 124px;
        height: 24px;
        background: #FFFFFF;
        border: 0.5px solid #727171;
        box-sizing: border-box;
        border-radius: 2px;
        font-weight: 500;
        font-size: 13px;
        line-height: 20px;
    }

    .select-container {
        overflow: hidden;
        position: relative;
    }

    .select-container::before {
        position: absolute;
        top: 50%;
        right: 8px;
        transform: translateY(-50%);
        content: "▼";
        font-size: 6px;
        color: var(--textcolor);
    }

    /*blog-contents*/

    .blog {
        margin: 60px auto 120px;
    }

    .blog-contents {
        display: flex;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .blog-contents__list {
        width: calc((100% - 65px * 2) / 3);
        margin-right: 65px;
        margin-bottom: 60px;
    }

    .blog-contents .blog-contents__list:nth-child(3n) {
        margin-right: 0;
    }
.blog--content--sidearea .searcharea .submit {
    cursor: pointer;
    background: url('/assets/img/icons/search-img.png') center no-repeat;
    background-size: 100%;
    width: 15px;
    height: 15px;
}
    @media screen and (max-width: 900px) and (min-width: 500px) {
        .blog-contents__list__thumbnail {
            height: 240px;
        }
    }

    @media screen and (max-width: 500px) and (min-width: 320px) {
        .blog-contents__list__thumbnail {
            height: 180px;
        }
    }

    @media (max-width: 767px) {
        .blog-subcontents__text {
            width: 100%;
        }

        .blog {
            margin-bottom: 60px;
        }

        .blog-contents {
            margin-bottom: 20px;
            justify-content: space-between;
        }

        .blog-contents__list {
            width: calc((100% - 35px) / 2);
            margin-right: 0;
            margin-bottom: 30px;
        }

        .blog-contents__list__tags {
            width: 180px;
            top: 71px;
            left: -70px;
        }
    }

    @media (max-width: 500px) {
        .blog-contents {
            display: block;
            margin-bottom: 50px;
        }

        .blog-contents__list {
            width: 100%;
            margin-bottom: 30px;
        }
    }





    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(1) .hoverScale,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(2) .hoverScale,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(3) .hoverScale,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(4) .hoverScale {
        opacity: 1;
        transform: translateY(0%);
        transition: 0.8s;
    }

    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(1) .hoverScale h3,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(2) .hoverScale h3,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(3) .hoverScale h3,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(4) .hoverScale h3 {
        opacity: 1;
        transform: translateY(0%);
        transition: 1s;
    }

    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(1) .writing,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(2) .writing,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(3) .writing,
    .blog.loaded .blog--content--mainarea .blog--content--item:nth-of-type(4) .writing {
        opacity: 1;
        transform: translateY(0%);
        transition: 1.4s;
    }

    .blog.loaded .blog--content--sidearea .fade_y {
        opacity: 1;
        transform: translateY(0);
        transition: 0.8s;
    }

    .blog.loaded .blog--header .blogtitle {
        opacity: 1;
        transform: translateY(0%);
    }

    .blog.loaded .blog--header .bloginfo {
        opacity: 1;
        transform: translateY(0%);
    }

    .blog.loaded .blog--header .personinfo {
        opacity: 1;
        transform: translateY(0%);
    }

    .blog.loaded .blog--article .photo {
        opacity: 1;
        transform: translateY(0%);
    }

    .blog.loaded .recruit_site_area {
        opacity: 1;
    }

    .blog .success_txt {
        position: fixed;
        font-size: 1.2rem;
        width: 240px;
        font-weight: 500;
        background-color: #dadada;
        color: #4c4c4c;
        top: 15px;
        left: 50%;
        transform: translate(-50%, -100px);
        text-align: center;
        transition: 0.4s;
        z-index: 100004;
        padding: 15px 0;
    }

    .blog .success_txt.on {
        transform: translate(-50%, 0);
    }

    .blog .fix_share {
        transition: 0.4s;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100vw;
        background: #000;
        border-top: solid #8d8d8d 1px;
        padding: 18px 0;
        z-index: 100;
    }

    @media screen and (max-width: 896px) {
        .blog .fix_share {
            padding: 15px 0;
        }
    }

    .blog .fix_share:not(.visibility) {
        opacity: 0;
        transform: translateY(100px);
    }

    .blog .fix_share.visibility {
        opacity: 1;
        transform: cubic-bezier(0.1, 0.2, 0.3, 1);
    }

    .blog .fix_share .fix_inner {
        width: 80%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    @media screen and (max-width: 896px) {
        .blog .fix_share .fix_inner {
            width: 90%;
        }
    }

    .blog .fix_share .fix_inner .share_list {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .blog .fix_share .fix_inner .share_list li {
        transition: 0.3s;
        width: 22px;
        margin-right: 22px;
    }

    @media screen and (max-width: 896px) {
        .blog .fix_share .fix_inner .share_list li {
            margin-right: 18px;
        }
    }

    .blog .fix_share .fix_inner .share_list li:nth-child(4) {
        width: 18px;
    }

    .blog .fix_share .fix_inner .share_list li:nth-child(4) button {
        cursor: pointer;
    }

    @media screen and (min-width: 897px) {
        .blog .fix_share .fix_inner .share_list li:hover {
            transform: scale(1.15);
        }
    }

    .blog .fix_share .fix_inner .good__click {
        margin-right: calc(280px + 7.14%);
    }

    @media screen and (max-width: 896px) {
        .blog .fix_share .fix_inner .good__click {
            margin-right: 0;
        }
    }

    .blog .recruit_site_area {
        position: fixed;
        left: 0;
        right: 0;
        bottom: -120px;
        z-index: 10000;
        width: 80%;
        margin: 0 auto;
        display: flex;
        transition: 0.4s;
        opacity: 0;
    }

    @media screen and (max-width: 896px) {
        .blog .recruit_site_area {
            width: 90%;
            display: block;
        }
    }

    .blog .recruit_site_area.show {
        bottom: 30px;
    }

    .blog .recruit_site_area .mainbnr_area {
        flex: 1;
    }

    @media screen and (max-width: 896px) {
        .blog .recruit_site_area .mainbnr_area {
            flex: none;
        }
    }

    .blog .recruit_site_area .mainbnr_area .recruit_site_btn {
        width: 65%;
        max-width: 480px;
        margin: 0 auto;
        position: relative;
    }

    @media screen and (max-width: 896px) {
        .blog .recruit_site_area .mainbnr_area .recruit_site_btn {
            width: 100%;
            max-width: none;
        }
    }

    .blog .recruit_site_area .mainbnr_area .recruit_site_btn a {
        display: block;
        width: 100%;
        transition: 0.4s;
    }

    @media screen and (min-width: 897px) {
        .blog .recruit_site_area .mainbnr_area .recruit_site_btn a:hover {
            opacity: 0.7;
        }
    }

    .blog .recruit_site_area .mainbnr_area .recruit_site_btn .bnr_btn {
        cursor: pointer;
    }

    .blog .recruit_site_area .mainbnr_area .recruit_site_btn .bnr_btn.close_bnr {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 28px;
    }

    .blog .recruit_site_area .blank {
        width: 280px;
        margin-left: 7.14%;
    }

    .blog .wpulike {
        padding: 0;
    }

    .fade_y.on {
        opacity: 1;
        transform: translateY(0%);
    }

    .fade_y {
        transform: translateY(10%);
        opacity: 0;
        transition: 0.5s ease;
        backface-visibility: hidden;
    }

    .blog .wp_ulike_general_class {
        margin-right: 4%;
        position: relative;
    }

    @media screen and (min-width: 897px) {
        .blog .wp_ulike_general_class:hover .wp_ulike_btn {
            transform: scale(0.8);
        }

        .blog .wp_ulike_general_class:hover .wp_ulike_btn.wp_ulike_btn_is_active {
            transform: scale(1);
        }
    }

    .blog .wp_ulike_general_class.wp_ulike_is_liked .count-box {
        color: #f5564c;
    }

    .blog .wp_ulike_counter_up {
        font-family: "DIN";
    }

    .blog .wpulike-notification {
        display: none;
    }

    .blog .wpulike-robeen .count-box {
        padding: 5px 0 0 0;
        font-size: 1.8rem;
        color: #929292;
    }

    @media screen and (max-width: 896px) {
        .blog .wpulike-robeen .count-box {
            font-size: 1.4rem;
        }
    }

    .blog .wpulike-robeen .wp_ulike_btn {
        overflow: inherit;
        width: 30px;
        height: 30px;
        transition: 0.4s;
    }

    .blog .wpulike-robeen .wp_ulike_btn img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 2px;
        transform: scale(1.6);
        opacity: 0;
    }

    .blog .wpulike-robeen .wp_ulike_btn.wp_ulike_btn_is_active::after {
        filter: grayscale(0);
    }

    .blog .wpulike-robeen .wp_ulike_btn.wp_ulike_btn_is_active img {
        opacity: 1;
    }

    .blog .personinfo a {
        display: flex;
        align-items: center;
        width: max-content;
    }

    @media screen and (min-width: 897px) {
        .blog .personinfo a:hover .icon {
            transform: scale(1.15);
        }
    }

    .blog .personinfo a .icon {
        width: 40px;
        margin-right: 10px;
        border-radius: 50%;
        transition: 0.4s;
    }

    .blog .personinfo a .name {
        font-size: 1.3rem;
        letter-spacing: 0.04em;
        color: #dadada;
        font-weight: bold;
    }

    .blog .bloginfo {
        margin-top: 20px;
    }

    .blog .bloginfo .time {
        font-weight: bold;
        display: inline-block;
        margin-right: 10px;
        font-size: 14px;
        color: #333;
        transition: 0.4s;
    }

    .blog .bloginfo .cat {
        transition: 0.4s;
        font-weight: bold;
        display: inline-block;
        padding: 5px 12px;
        margin-bottom: 10px;
        margin-right: 5px;
        border-radius: 2px;
        background-color: #ececec;
        font-size: 10px;
        letter-spacing: 0;
        color: #000;
    }

    .blog .bloginfo .cat.pickup {
        display: none;
    }

    .blog .good {
        padding-left: 44px;
        height: 30px;
        background-size: 30px;
        font-size: 14px;
        line-height: 30px;
        font-family: NotoSansJP-Regular;
        color: #f36e6e;
    }

    .hoverScale .thumb {
        overflow: hidden;
        position: relative;
    }

    .hoverScale .thumb::after {
        content: "";
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: 0.4s;
        backface-visibility: hidden;
    }

    .hoverScale .thumb .hvrtxt .more_txt {
        color: #dadada;
        font-size: 14px;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        position: relative;
        padding-right: 20px;
        font-weight: 700;
    }

    .hoverScale .thumb .hvrtxt {
        position: absolute;
        top: 50%;
        left: 50%;
        transition: 0.4s;
        transform: translate(-34%, -20%);
        opacity: 0;
        z-index: 1;
        backface-visibility: hidden;
    }

    .hoverScale .thumb .hvrtxt .more_txt .underline::after {
        content: "";
        background: #dadada;
        width: 100%;
        height: 1px;
        position: absolute;
        bottom: -4px;
        left: 0;
        transform: scale(0, 1);
        transition: transform 0.3s;
        transform-origin: right top;
    }

    .hoverScale .thumb .hvrtxt .more_txt .underline {
        position: relative;
    }

    .blog--content--mainarea .blog--content--item .hoverScale {
        opacity: 1;
        transform: translateY(0%);
        transition: 0.8s;
    }

    .more_txt:before {
        width: 10px;
    }


    .blog .good__click.btm_good {
        margin-right: 0;
        margin-left: auto;
        width: 85px;
    }

    @media screen and (min-width: 897px) {
        .blog .good__click .wp_ulike_btn:hover {
            transform: scale(0.9);
        }

        .hoverScale .thumb .hvrtxt .more_txt:hover::after,
        .hoverScale .thumb .hvrtxt .more_txt:hover::before {
            right: -5%;
        }

        .hoverScale:hover .thumb::after {
            opacity: 1;
        }

        .hoverScale:hover .thumb .hvrtxt {
            transform: translate(-34%, -50%);
            opacity: 1;
            transition-delay: 0.3s;
        }
    }

    .blog #toc_container {
        width: 100% !important;
        margin-top: 54px;
        border: 1px solid #dadada;
        background: none;
    }

    @media screen and (min-width: 897px) {
        .blog #toc_container {
            padding: 20px 30px;
        }
    }

    @media screen and (max-width: 896px) {
        .blog #toc_container {
            padding: 20px 5%;
        }
    }

    .blog #toc_container.contracted .toc_title .toc_toggle a::before {
        transform: rotate(90deg);
    }

    .blog #toc_container .toc_title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.8rem;
    }

    .blog #toc_container .toc_title .toc_toggle {
        color: #000;
    }

    .blog #toc_container .toc_title .toc_toggle a {
        text-indent: -9999px;
        overflow: hidden;
        position: relative;
        width: 30px;
        height: 30px;
        display: block;
        color: #000;
        border-bottom: 1px solid #000;
    }

    .blog #toc_container .toc_title .toc_toggle a::after,
    .blog #toc_container .toc_title .toc_toggle a::before {
        content: "";
        width: 15px;
        height: 1px;
        background-color: #dadada;
        position: absolute;
        top: 50%;
        left: calc(50% - 7.5px);
        transition: 0.4s;
    }

    .blog #toc_container .toc_list {
        margin-top: 15px;
        border: none;
        list-style: none;
    }

    .blog #toc_container .toc_list li:before {
        display: none;
    }

    .blog #toc_container .toc_list li a {
        font-size: 1.4rem;
        font-weight: 700;
        text-decoration: none;
        position: relative;
        line-height: 1.5;
    }

    @media screen and (min-width: 897px) {
        .blog #toc_container .toc_list li a:hover::after {
            transform-origin: left top;
            transform: scale(1, 1);
        }
    }

    .blog #toc_container .toc_list li a::after {
        content: "";
        background: #dadada;
        width: 100%;
        height: 1px;
        position: absolute;
        bottom: -4px;
        left: 0;
        transform: scale(0, 1);
        transition: transform 0.3s;
        transform-origin: right top;
    }

    .blog #toc_container .toc_list li ul {
        border: none;
    }

    .blog #toc_container .toc_list li ul li:before {
        display: none;
    }

    .blog #toc_container .toc_list li ul li a {
        font-weight: 500;
    }

    .blog #toc_container li {
        margin-top: 20px;
    }

    .blog .wp-pagenavi span,
    .blog .wp-pagenavi a {
        border: 1px solid #4d4d4d;
        color: #333;
    }

    .blog .wp-pagenavi span:hover,
    .blog .wp-pagenavi a:hover {
        border-color: #4d4d4d;
        background-color: #dadada;
        color: #000;
    }

    .blog .wp-pagenavi span:hover::after,
    .blog .wp-pagenavi a:hover::after {
        fill: #000;
    }

    .blog .wp-pagenavi .extend {
        display: none;
    }

    .blog .wp-pagenavi .nextpostslink,
    .blog .wp-pagenavi .previouspostslink,
    .blog .wp-pagenavi .first,
    .blog .wp-pagenavi .last {
        overflow: hidden;
        position: relative;
    }

    .blog .wp-pagenavi .nextpostslink::after,
    .blog .wp-pagenavi .previouspostslink::after,
    .blog .wp-pagenavi .first::after,
    .blog .wp-pagenavi .last::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: 0.4s;
    }

    img {
        max-width: 100%;
        height: auto;
        /* vertical-align: bottom; */
    }
    .scale-img img{
        height: 235px;
        object-fit: cover;
    }
    .thumb-img{
        height: 235px;
    }
    .blog .wp-pagenavi .current {
        border-color: #dadada;
        background-color: #dadada;
        color: #000;
    }

    @media screen and (min-width: 897px) {
        .blog--content {
            padding: 80px 0 0;
            margin: 100px auto 0;
            max-width: 1200px;
            width: 80%;
        }

        .blog--content.single_cont {
            padding: 80px 0 0;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--content {
            padding: 130px 5% 0;
            margin: 0;
            width: 100%;
            max-width: none;
        }
    }

    .blog--content h2 {
        margin-bottom: 30px;
        font-size: 2rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        color: #dadada;
    }

    @media screen and (max-width: 896px) {
        .blog--content h2 {
            font-size: 1.8rem;
        }
    }

    @media screen and (min-width: 897px) {
        .blog--content--inner {
            display: flex;
        }
    }

    @media screen and (min-width: 897px) {
        .blog--content--mainarea {
            flex: 1;
        }
    }

    .blog--content--mainarea .error_txt {
        font-size: 1.6rem;
        color: #dadada;
        margin-top: 60px;
        line-height: 1.5;
    }

    .blog--content--list {
        margin-bottom: 40px;
    }

    @media screen and (min-width: 897px) {
        .blog--content--list {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
    }

    .blog--content--item {
        margin-bottom: 20px;
    }

    @media screen and (min-width: 897px) {
        .blog--content--item {
            width: 47.5%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--content--item {
            display: block;
        }
    }

    .blog--content--item h3 {
        font-weight: 700;
        line-height: 1.56;
        color: #000;
    }

    @media screen and (min-width: 897px) {
        .blog--content--item h3 {
            font-size: 18px;
            letter-spacing: 0.04em;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--content--item h3 {
            font-size: 1.6rem;
            letter-spacing: 0.08em;
        }
    }

    .blog--content--item .writing {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-top: 5px;
        margin-top: 10px;
        border-top: 1px solid #4d4d4d;
    }

    @media screen and (max-width: 896px) {
        .blog--content--item .writing {
            padding-top: 15px;
            margin-top: 15px;
        }
    }

    .blog--content--item .writing .person {
        display: flex;
        align-items: center;
    }

    @media screen and (min-width: 897px) {
        .blog--content--sidearea {
            width: 280px;
            margin-left: 7.14%;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--content--sidearea {
            margin-top: 100px;
        }
    }

    .blog--content--sidearea .searcharea {
        background-color: #ececec;
    }

    @media screen and (max-width: 896px) {
        .blog--content--sidearea .searcharea {
            position: relative;
        }
    }

    .blog--content--sidearea .searcharea .search-text {
        padding: 0 10px 0 19px;
        line-height: 50px;
        background-color: transparent;
        width: calc(100% - 35px);
    }



    .blog--content--sidearea .sideheading {
        padding-top: 35px;
        margin-top: 35px;
        margin-bottom: 28px;
        border-top: 1px solid #4d4d4d;
        font-size: 16px;
        font-family: NotoSansJP-Bold;
        color: #333;
    }

    /* @media screen and (max-width: 896px) {
        .blog--content--sidearea .sp_cat {
            position: fixed;
            top: 68px;
            background: #000;
            display: flex;
            overflow-x: scroll;
            width: 100%;
            padding: 7px 0;
        }
    } */

    .blog--content--sidearea .categoryitem {
        display: inline-block;
        padding: 10px;
        margin-bottom: 10px;
        margin-right: 5px;
        border: 1px solid #4d4d4d;
        font-size: 13px;
        font-family: NotoSansJP-Bold;
        letter-spacing: 0;
        color: #333;
    }

    @media screen and (max-width: 896px) {
        .blog--content--sidearea .categoryitem {
            white-space: nowrap;
        }

        .blog--content--sidearea .categoryitem:last-of-type {
            margin-right: 40px;
        }
    }

    .blog--content--sidearea .categoryitem.current {
        background-color: #dadada;
        color: #000;
        pointer-events: none;
    }

    .blog--content--sidearea .categoryitem.pickup {
        display: none;
    }

    @media screen and (min-width: 897px) {
        .blog--content--sidearea .categoryitem:hover {
            background-color: #dadada;
            color: #000;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--content--sidearea .recommend {
            display: none;
        }
    }

    .blog--content--sidearea .recommend--item {
        display: block;
        margin-bottom: 15px;
    }

    @media screen and (min-width: 897px) {
        .blog--content--sidearea .recommend--item:hover .hvrunder {
            background-position: left bottom;
            background-size: 100% 1px;
        }
    }

    .blog--content--sidearea .recommend--item.popular {
        position: relative;
    }

    .blog--content--sidearea .recommend--item.popular::after {
        content: "";
        width: 40px;
        height: 50px;
        position: absolute;
        top: -1px;
        right: 5px;
    }

    .blog--content--sidearea .recommend--item .bloginfo {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 11px 0 8px;
    }

    .blog--content--sidearea .recommend--item .bloginfo .time {
        font-size: 13px;
        color: #333;
        font-family: DIN-Bold;
    }

    .blog--content--sidearea .recommend--item h3 {
        font-family: NotoSansJP-Bold;
        line-height: 1.42;
        color: #000;
        position: relative;
    }

    @media screen and (min-width: 897px) {
        .blog--content--sidearea .recommend--item h3 {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--content--sidearea .recommend--item h3 {
            font-size: 1.6rem;
            letter-spacing: 0.08em;
        }
    }

    .blog--content--sidearea .sharearea .item {
        height: 70px;
        margin-bottom: 10px;
    }

    .blog--content--sidearea .sharearea .item .txt {
        margin-left: 16px;
        font-size: 1.4rem;
    }

    .blog--content--sidearea .bnr_area {
        margin-top: 30px;
    }

    .blog--header .blogtitle {
        padding-bottom: 30px;
        margin-bottom: 30px;
        line-height: 1.4;
        letter-spacing: 0.04em;
        position: relative;
        transition: 0.8s;
        transform: translateY(5%);
        opacity: 0;
        border-bottom: 2px solid #dadada;
    }

    @media screen and (min-width: 897px) {
        .blog--header .blogtitle {
            font-size: 3.6rem;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--header .blogtitle {
            font-size: 2.4rem;
        }
    }

    .blog--header .bloginfo {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 8px;
        transition: 1.4s;
        transform: translateY(5%);
        opacity: 0;
    }

    .blog--header .bloginfo .left .cat {
        margin-bottom: 0;
        font-size: 1.3rem;
    }

    @media screen and (max-width: 896px) {
        .blog--header .bloginfo .left .cat {
            margin-top: 5px;
        }
    }

    .blog--header .bloginfo .left .cat.pickup {
        display: none;
    }

    .blog--header .bloginfo .left .cat a {
        color: #000;
        display: block;
    }

    .blog--header .bloginfo .left .cat:hover {
        background: #000;
    }

    .blog--header .bloginfo .left .cat:hover a {
        color: #dadada;
    }

    .blog--header .personinfo {
        transition: 1.4s;
        transform: translateY(5%);
        opacity: 0;
    }

    .blog--article .photo {
        margin-top: 40px;
        transition: 1.6s;
        transform: translateY(5%);
        opacity: 0;
    }

    .blog--article code {
        background: #b4b4b4;
        font-size: 12px;
        padding: 25px;
    }

    .blog--article h2 {
        padding-bottom: 15px;
        margin-top: 120px;
        border-bottom: 2px solid #dadada;
        font-size: 3.4rem;
        line-height: 1.4;
        font-weight: 600;
    }

    @media screen and (max-width: 896px) {
        .blog--article h2 {
            font-size: 2.2rem;
        }
    }

    .blog--article h3 {
        margin-top: 80px;
        font-size: 2.4rem;
        letter-spacing: 0.05em;
        line-height: 1.4;
        color: #dadada;
        position: relative;
        padding-left: 25px;
    }

    .blog--article h3::before {
        content: "";
        width: 3px;
        height: 100%;
        background-color: #dadada;
        position: absolute;
        top: 0;
        left: 0;
    }

    @media screen and (max-width: 896px) {
        .blog--article h3 {
            font-size: 2rem;
        }
    }

    .blog--article h4 {
        margin-top: 60px;
        font-size: 2rem;
        font-weight: 600;
        color: #dadada;
        margin-bottom: -13px;
    }

    @media screen and (max-width: 896px) {
        .blog--article h4 {
            font-size: 1.8rem;
        }
    }

    .blog--article h5 {
        margin-top: 60px;
        font-size: 1.6rem;
        color: #dadada;
    }

    .blog--article p {
        margin-top: 30px;
        font-size: 1.6rem;
        line-height: 2;
        letter-spacing: 0.04em;
        color: #dadada;
    }

    @media screen and (max-width: 896px) {
        .blog--article p {
            font-size: 1.4rem;
        }
    }

    .blog--article p em {
        color: #000;
        font-weight: 600;
        background-color: #ffed2a;
        font-style: normal;
    }

    .blog--article p a {
        font-size: 1.6rem;
        font-weight: 600;
        color: #4babdd;
        color: #4babdd;
        border-bottom: 1px solid #4babdd;
        padding-bottom: 4px;
    }

    @media screen and (max-width: 896px) {
        .blog--article p a {
            font-size: 1.4rem;
        }
    }

    .blog--article p s a {
        margin-top: 30px;
        font-size: 1.6rem;
        padding: 18px 60px;
        display: inline-block;
        text-align: center;
        background-color: #efefef;
        transition: 0.3s;
        color: #000;
        border-radius: 0%;
        letter-spacing: 0.12em;
        position: relative;
    }



    @media screen and (min-width: 897px) {
        .blog--article p s a:hover {
            background: #ffed2a;
        }
    }

    .blog--article .wp-block-image {
        margin-top: 60px;
        text-align: center;
    }

    .blog--article .wp-block-image figcaption {
        margin-top: 20px;
    }

    .blog--article h2+.wp-block-image,
    .blog--article h3+.wp-block-image,
    .blog--article h4+.wp-block-image,
    .blog--article h5+.wp-block-image {
        margin-top: 30px;
    }

    .blog--article ul,
    .blog--article ol {
        margin-top: 80px;
        padding: 50px;
        border: 1px solid #dadada;
    }

    @media screen and (max-width: 896px) {

        .blog--article ul,
        .blog--article ol {
            padding: 30px 5%;
        }
    }

    .blog--article ul li,
    .blog--article ol li {
        color: #dadada;
        font-size: 1.6rem;
        line-height: 1.7;
        position: relative;
        letter-spacing: 0.05em;
    }

    .blog--article ul li:not(:first-child),
    .blog--article ol li:not(:first-child) {
        margin-top: 30px;
    }

    @media screen and (max-width: 896px) {

        .blog--article ul li,
        .blog--article ol li {
            margin-top: 14px;
        }
    }

    .blog--article ul li {
        padding-left: 20px;
    }

    .blog--article ul li::before {
        content: "";
        background-color: #dadada;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        position: absolute;
        top: 0.7em;
        left: 0;
    }

    .blog--article ol li {
        margin-left: 25px;
        list-style: auto;
    }

    .blog--article h2+.wp-block-quote,
    .blog--article h3+.wp-block-quote,
    .blog--article h4+.wp-block-quote,
    .blog--article h5+.wp-block-quote {
        margin-top: 30px;
    }

    .blog--article .wp-block-quote {
        position: relative;
        padding: 40px 80px;
        margin-top: 80px;
        border: 1px solid #565656;
        border-left: 4px solid #dadada;
    }

    .blog--article .wp-block-quote::after,
    .blog--article .wp-block-quote::before {
        content: "";
        position: absolute;
        width: 25px;
        height: 25px;
        opacity: 1;
    }


    .blog--article .wp-block-quote p {
        margin: 0;
        font-size: 1.4rem;
    }

    .blog--article .wp-block-quote cite {
        display: inline-block;
        margin-top: 16px;
        color: #dadada;
        font-size: 1.3rem;
    }

    .blog--footer {
        margin-top: 100px;
    }

    @media screen and (max-width: 896px) {
        .blog--footer {
            margin-top: 80px;
        }
    }

    @media screen and (min-width: 897px) {
        .blog--footer .sharearea ul {
            display: flex;
        }
    }

    @media screen and (min-width: 897px) {
        .blog--footer .sharearea li {
            width: 50%;
        }
    }

    .blog--footer .sharearea .item {
        height: 95px;
    }

    @media screen and (max-width: 896px) {
        .blog--footer .sharearea .item {
            height: 70px;
        }
    }

    .blog--footer .sharearea .item .txt {
        margin-left: 16px;
        font-size: 1.6rem;
    }

    @media screen and (max-width: 896px) {
        .blog--footer .sharearea .item .txt {
            font-size: 1.4rem;
        }
    }

    .blog--footer .authorinfo {
        margin-top: 30px;
        border: 1px solid #2b2b2b;
    }

    @media screen and (min-width: 897px) {
        .blog--footer .authorinfo {
            display: flex;
            justify-content: center;
            padding: 40px;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--footer .authorinfo {
            padding: 50px 5%;
        }
    }

    .blog--footer .authorinfo .icon {
        width: 140px;
        margin-right: 20px;
    }

    .blog--footer .authorinfo .textarea {
        flex: 1;
        margin-left: 20px;
    }

    @media screen and (max-width: 896px) {
        .blog--footer .authorinfo .textarea {
            margin-top: 20px;
        }
    }

    .blog--footer .authorinfo .textarea .name {
        font-size: 1.8rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        line-height: 1.5;
        color: #dadada;
    }

    .blog--footer .authorinfo .textarea p {
        margin-top: 18px;
        font-size: 1.4rem;
        line-height: 1.714;
        color: #dadada;
    }

    .blog--footer .authorinfo .textarea .tw {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #2b2b2b;
        padding: 15px;
        margin-top: 30px;
        width: 210px;
        transition: 0.4s;
    }

    @media screen and (min-width: 897px) {
        .blog--footer .authorinfo .textarea .tw:hover {
            background: #dadada;
        }

        .blog--footer .authorinfo .textarea .tw:hover .icon {
            filter: invert(0);
        }

        .blog--footer .authorinfo .textarea .tw:hover .txt {
            color: #000;
        }
    }

    .blog--footer .authorinfo .textarea .tw .icon {
        transition: 0.4s;
        margin-right: 15px;
        width: 20px;
        filter: invert(1);
    }

    .blog--footer .authorinfo .textarea .tw .txt {
        transition: 0.4s;
        font-size: 1.4rem;
        color: #dadada;
        font-weight: 600;
    }

    .blog--footer .authorarticle {
        margin-top: 30px;
        border: 1px solid #2b2b2b;
        position: relative;
        padding: 62px 40px;
    }

    @media screen and (max-width: 896px) {
        .blog--footer .authorarticle {
            padding: 50px 5%;
        }
    }

    .blog--footer .authorarticle h4 {
        font-size: 2rem;
        letter-spacing: 0.04em;
        margin-bottom: 40px;
        color: #dadada;
    }

    .blog--footer .authorarticle--item {
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 1px solid #2b2b2b;
    }

    @media screen and (min-width: 897px) {
        .blog--footer .authorarticle--item {
            display: flex;
            align-items: center;
        }

        .blog--footer .authorarticle--item:last-child {
            border: none;
            padding: 0;
            margin: 0;
        }

        .blog--footer .authorarticle--item:hover .hvrunder {
            background-position: left bottom;
            background-size: 100% 1px;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--footer .authorarticle--item {
            display: block;
        }
    }

    @media screen and (min-width: 897px) {
        .blog--footer .authorarticle--item .thumb {
            width: 43.75%;
        }

        .blog--footer .authorarticle--item .thumb .more_txt {
            top: auto;
            right: auto;
            padding-bottom: 0;
        }
    }

    @media screen and (min-width: 897px) {
        .blog--footer .authorarticle--item .textarea {
            flex: 1;
            margin-left: 30px;
        }
    }

    .blog--footer .authorarticle--item .textarea h5 {
        font-size: 1.6rem;
        font-weight: 700;
        line-height: 1.625;
        color: #000;
    }

    @media screen and (min-width: 897px) {
        .blog--footer .authorarticle--item .textarea h5 {
            margin: 14px 0 20px;
        }
    }

    @media screen and (max-width: 896px) {
        .blog--footer .authorarticle--item .textarea h5 {
            margin: 0 0 16px;
        }
    }

    .blog--footer .authorarticle--item .textarea .cat {
        padding: 2px 10px;
        font-size: 1.2rem;
    }

    .blog--footer .authorarticle--item .textarea .cat.pickup {
        display: none;
    }

    .blog--footer .authorarticle--item .writing {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .blog--footer .authorarticle--item .personinfo {
        display: flex;
        align-items: center;
    }

    .blog--footer .authorarticle--item .personinfo .icon {
        width: 40px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .blog--footer .authorarticle--item .personinfo .name {
        font-size: 1.3rem;
        letter-spacing: 0.04em;
        font-weight: bold;
    }

    .blog--footer .authorarticle .more_txt {
        color: #dadada;
        font-size: 1.4rem;
        font-family: "DIN";
        letter-spacing: 0.06em;
        text-transform: uppercase;
        position: relative;
        padding-right: 20px;
        position: absolute;
        top: 63px;
        right: 40px;
        padding-bottom: 5px;
    }

    .blog--footer .authorarticle .more_txt::after,
    .blog--footer .authorarticle .more_txt::before {
        content: "";
        height: 1px;
        background-color: #dadada;
        position: absolute;
        right: 0;
        top: 50%;
        transition: 0.3s;
    }

    .blog--footer .authorarticle .more_txt::after {
        width: 6px;
        transform: rotate(45deg) translateY(-3px);
    }

    .blog--footer .authorarticle .more_txt::before {
        width: 10px;
    }

    .blog--footer .authorarticle .more_txt .underline {
        position: relative;
    }

    .blog--footer .authorarticle .more_txt .underline::after {
        content: "";
        background: #dadada;
        width: 100%;
        height: 1px;
        position: absolute;
        bottom: -4px;
        left: 0;
        transform: scale(0, 1);
        transition: transform 0.3s;
        transform-origin: right top;
    }

    @media screen and (min-width: 897px) {

        .blog--footer .authorarticle .more_txt:hover::after,
        .blog--footer .authorarticle .more_txt:hover::before {
            right: -5%;
        }

        .blog--footer .authorarticle .more_txt:hover .underline::after {
            transform-origin: left top;
            transform: scale(1, 1);
        }
    }

    @media screen and (max-width: 896px) {
        .blog--footer .authorarticle .more_txt {
            position: relative;
            top: auto;
            right: auto;
            margin-top: 0;
            display: inline-block;
        }
    }

</style>
