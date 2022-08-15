<template>
    <div>
        <Navbar />
        <main>
            <section class="mycontents-wide top-hero" id="/">
                <h1>
                    <span class="txt-rotate ml-0" data-period="2000"
                        data-rotate='[ "テクノロジーで、", "ワンチームで", "熱いパッションで" ]'></span>
                </h1>
                <h2 class="top-hero__title">
                    <span class="horo-text-b" style="transition-delay: 1.15s;">世界の明日を牽引する</span>
                    <br class="top-hero__title__br-pc">
                    <span class="horo-text-b" style="transition-delay: 1.15s;">クリエイティブな挑戦へ。</span>
                </h2>
                <a class="btn-views" href="">View More</a>
                <video class="top-hero__video" src="/public/assets/videos/Banner_video.mp4" autoplay muted loop
                    playsinline></video>
            </section>

            <div class="scroll scroll_top">
                <p class="scroll__text">SCROLL</p>
                <span class="scroll__arrow"><span class="scroll__arrow__box"></span></span>
            </div>
            <!-- Who is Idenbrid-->
            <section class="section_idenbrid mycontents-wide">
                <h3 class="content-title">WHO IS IDENBRID</h3>
                <div class="about_iden idenbrid">
                    <div class="about-iden-container container">
                        <div class="img">
                            <img class="idenbrid-background" src="/public/assets/img/philosophy-image.png"
                                loading="lazy">
                        </div>
                        <div class="text">
                            <p>
                                アイデンブリッド社は、システム開発やウェブ制作アプリ開発を行なっているITシステムの開発会社です。日本での基軸事業は受託開発を軸とし、業務システム開発、Webサイト制作、スマートフォンアプリ開発、デザイン、クラウドインフラの構築、WordPressなどのCMS構築やITコンサルティングと幅広く事業を展開しています。
                            </p><br>
                            <p>
                                当社が、受託開発において大切にしているのは「ユーザー体験の改善」つまりは、お客様のニーズを深く掘り下げて、先を読みながら提案を行う「顧客絶対主義」です。サイトやシステムを使うお客様やそのビジネスに寄り添って仕事をしています。
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <!-- end -->

            <!-- <section class="service mycontents-wide">
                <h3 class="content-title">SOLUTIONS</h3>
                <ul class="service-contents">
                    <li class="service-contents__text">
                        <p>アイデンブリッド社はシステム開発やそれに伴うデザイン業務、またモバイルアプリの開発やウェブ制作などITに関わるプラットフォームに広く精通しています。特にDXを求めるお客様のコンサルも含めたトータルサポートを行なっています。
                        </p>
                    </li>
                    <li class="service-contents__list">
                        <div class="service-items">
                            <div class="service-contents__list__thumbnail-frame">
                                <img class="service-contents__list__thumbnail"
                                    src="/public/assets/img/solution/Solution_Img_01.png" alt="" loading="lazy">
                            </div>
                            <p class="service-contents__list__subtitle">スマホアプリ開発</p>
                            <h4 class="service-contents__list__title">Mobile app development</h4>
                            <p class="service-contents__list__text">
                                SNSアプリやマッチングアプリ・チャットアプリそしてライブ配信アプリや性格診断占いアプリや業務用の管理アプリなどカテゴリーを問わず、設計・開発・審査申請から保守まで丸っと一括で承っています。
                                また当社ではウェブシステムと連携したアプリ開発も得意としていますので出先から既存システムとのデータ共有されたアプリへのアクセスも可能とし、お客様の業務効率の改善に貢献します
                            </p>
                        </div>
                    </li>
                    <li class="service-contents__list">
                        <div class="service-items">
                            <div class="service-contents__list__thumbnail-frame">
                                <img class="service-contents__list__thumbnail"
                                    src="/public/assets/img/solution/Solution_Img_02.png" alt="" loading="lazy">
                            </div>
                            <p class="service-contents__list__subtitle">システム開発</p>
                            <h4 class="service-contents__list__title">System application development</h4>
                            <p class="service-contents__list__text">
                                情報システム・顧客管理システム・在庫管理システム・業務用システムのウェブサービス構築や運用保守・セキュリティー対策など企業様向けの受託開発を行なっています。当社のエンジニアは多様な言語を取り扱えるほどAWSやAzureなどクラウドインラフサービスも専門領域です。
                            </p>
                        </div>
                    </li>
                    <li class="service-contents__list">
                        <div class="service-items">
                            <div class="service-contents__list__thumbnail-frame">
                                <img class="service-contents__list__thumbnail"
                                    src="/public/assets/img/solution/Solution_Img_03.png" alt="" loading="lazy">
                            </div>
                            <p class="service-contents__list__subtitle">ウェブ制作・デジタルマーケティング</p>
                            <h4 class="service-contents__list__title">Web creative・Digital marketing</h4>
                            <p class="service-contents__list__text">
                                コーポレイトサイトの作成やポートフォリオサイトそしてLP構築などを手がけています。WordPressを使用したり、最新のJavaScript系言語をフロント開発に用いています。またデジタルマーケティングではSEO、SMOやSNS運用そして英語圏ならば運用から保守まで一括して行います。
                            </p>
                        </div>
                    </li>
                    <li class="service-contents__list">
                        <div class="service-items">
                            <div class="service-contents__list__thumbnail-frame">
                                <img class="service-contents__list__thumbnail"
                                    src="/public/assets/img/solution/Solution_Img_04.png" alt="" loading="lazy">
                            </div>
                            <p class="service-contents__list__subtitle">デザイン制作</p>
                            <h4 class="service-contents__list__title">Web design・UIUX designing</h4>
                            <p class="service-contents__list__text service-contents__list_last__text">当社ではAdobe
                                XDを用いてウェブサイト・ウェブシステムやアプリケーションそしてスマホアプリのUIUXデザイン制作を行なっています。最初にワイヤーフレームを組みお客様の意図がきちんと反映されるようにコミュニケーションをしっかり取らせて頂いております。
                            </p>
                        </div>
                    </li>
                </ul>

                <router-link class="viewmore-btn viewmore-btn_right viewmore-btn_service" to="/solutions/">View
                    More


                    phale Hide
                    <span class="viewmore-btn__img">
                        <img src="/public/assets/img/icons/btn-arrow.svg" alt="" loading="lazy">
                        <img src="/public/assets/img/icons/btn-arrow-white.svg" alt="" loading="lazy"></span>
                </router-link>
            </section> -->
            <!-- other service -->
            <section class="otherservice mycontents-wide mt-5">
                <h3 class="content-title">SERVICE</h3>
                <div class="service-row  my-5">
                    <div class="service-col">
                        <img alt=""
                            src="https://storage.googleapis.com/studio-design-asset-files/projects/4Ra4JEKoOD/s-1592x400_v-fms_webp_8da00051-3ea8-48f5-a0e3-885a8453f02d_small.webp"
                            class="service-content-img" width="100%">
                        <p class="service-p">「ペイトナー ファクタリング（旧yup
                            先払い）」は、取引先へ送った入金前の請求書を買い取り、報酬を最短10分でお支払いするフリーランス向けオンライン型ファクタリングサービスです。</p>
                        <router-link to="/solutions/" class="viewmore-btn  viewmore-btn_service mt-5">View
                            More</router-link>
                    </div>
                    <div class="service-col">
                        <img alt=""
                            src="https://storage.googleapis.com/studio-design-asset-files/projects/4Ra4JEKoOD/s-2116x1478_v-frms_webp_42ac43be-6495-468b-b893-06e895661eaf_middle.webp"
                            class="" width="100%">

                    </div>
                </div>
                <div class="service-row  my-5">
                    <div class="service-col">
                        <img alt=""
                            src="https://storage.googleapis.com/studio-design-asset-files/projects/4Ra4JEKoOD/s-2116x1478_v-frms_webp_42ac43be-6495-468b-b893-06e895661eaf_middle.webp"
                            class="" width="100%">

                    </div>
                    <div class="service-col">
                        <img alt=""
                            src="https://storage.googleapis.com/studio-design-asset-files/projects/4Ra4JEKoOD/s-1592x400_v-fms_webp_8da00051-3ea8-48f5-a0e3-885a8453f02d_small.webp"
                            class="service-content-img" width="100%">
                        <p class="service-p">「ペイトナー ファクタリング（旧yup
                            先払い）」は、取引先へ送った入金前の請求書を買い取り、報酬を最短10分でお支払いするフリーランス向けオンライン型ファクタリングサービスです。</p>
                        <router-link to="/solutions/" class="viewmore-btn  viewmore-btn_service mt-5">View
                            More</router-link>
                    </div>
                    
                </div>
                <div class="service-row my-5">
                    <div class="service-col">
                        <img alt=""
                            src="https://storage.googleapis.com/studio-design-asset-files/projects/4Ra4JEKoOD/s-1592x400_v-fms_webp_8da00051-3ea8-48f5-a0e3-885a8453f02d_small.webp"
                            class="service-content-img" width="100%">
                        <p class="service-p">「ペイトナー ファクタリング（旧yup
                            先払い）」は、取引先へ送った入金前の請求書を買い取り、報酬を最短10分でお支払いするフリーランス向けオンライン型ファクタリングサービスです。</p>
                        <router-link to="/solutions/" class="viewmore-btn  viewmore-btn_service mt-5">View
                            More</router-link>
                    </div>
                    <div class="service-col">
                        <img alt=""
                            src="https://storage.googleapis.com/studio-design-asset-files/projects/4Ra4JEKoOD/s-2116x1478_v-frms_webp_42ac43be-6495-468b-b893-06e895661eaf_middle.webp"
                            class="" width="100%">

                    </div>
                </div>
            </section>
            <!--news-->
            <section class="news mycontents-wide">
                <h3 class="content-title content-title_blog">NEWS</h3>
                <p class="content-text content-text_blog">アイデンブリッド社からのお知らせやプレスリリースを配信します。</p>
                <!-- <ul class="news-contents">
                    <li v-for="(detail,Detail) in news" :key="Detail" v-if="Detail < 3" class="news-contents__list">
                        <router-link :to="'/news/detail/'+detail.id+'/'">
                            <p class="news-contents__list__tags"><span>NEWS</span></p>
                            <p class="news-contents__list__title">{{detail.title}}</p>
                            <p class="news-contents__list__date">{{detail.date}}</p>
                        </router-link>

                    </li>
                </ul> -->

                <div class="new-box new">
                    <div class="new-listing new" v-for="(detail,Detail) in news" :key="Detail" v-if="Detail < 5">
                        <router-link :to="'/news/detail/'+detail.id+'/'" class="new-link new">
                            <div class="new-item new">
                                <div class="new-meta">
                                    <p class="text new mr-2 mt-0 new-date">
                                        {{detail.date}}</p>
                                    <div class="new new-tag">
                                        <p class="text new mt-0">NEWS</p>
                                    </div>
                                </div>
                                <p class="text new-content">
                                    {{detail.title}}</p>
                            </div>
                        </router-link>
                    </div>
                    <router-link class="viewmore-btn viewmore-btn_center" to="/news/">View More
                        <!--<span class="viewmore-btn__img">
                        <img src="/public/assets/img/icons/btn-arrow.svg" alt="" loading="lazy">
                        <img src="/public/assets/img/icons/btn-arrow-white.svg" alt="" loading="lazy"></span>-->
                    </router-link>
                </div>

            </section>
            <!--news-->
            <section class="about mycontents-wide">
                <h3 class="content-title content-title_about">ABOUT</h3>
                <p class="content-subtitle content-subtitle_about">テクノロジーで世界を変えるお手伝い</p>
                <p class="content-text content-text_about">アイデンブリッド社ではお客様が掲げる目標に向かって
                    クリエイティブな提案とITソリューションを提供します。
                </p>

                <ul class="about-contents">
                    <li class="about-contents__list">
                        <router-link to="/about/">
                            <img class="about-contents__list__thumbnail" src="/public/assets/img/icons/company.svg"
                                alt="" loading="lazy">
                            <div class="about-contents__list__text">
                                <p class="about-contents__list__subtitle">会社概要</p>
                                <h4 class="about-contents__list__title">COMPANY</h4>
                            </div>
                        </router-link>
                    </li>
                    <li class="about-contents__list">
                        <router-link to="/blog/">
                            <img class="about-contents__list__thumbnail about-contents__list__thumbnail_news"
                                src="/public/assets/img/icons/WWW.png" alt="" loading="lazy">
                            <div class="about-contents__list__text">
                                <p class="about-contents__list__subtitle">ブログ</p>
                                <h4 class="about-contents__list__title">BLOG</h4>
                            </div>
                        </router-link>
                    </li>
                    <li class="about-contents__list">
                        <router-link to="/onlinedevelopmenthub/">
                            <img class="about-contents__list__thumbnail" src="/public/assets/img/icons/Partnership.png"
                                alt="" loading="lazy">
                            <div class="about-contents__list__text">
                                <p class="about-contents__list__subtitle">オンライン開発ハブ</p>
                                <h4 class="about-contents__list__title">DEVELOPEMENT</h4>
                            </div>
                        </router-link>
                    </li>
                </ul>
            </section>
            <section class="work mycontents-wide">
                <h3 class="content-title content-title_work">WORKS</h3>
                <p class="content-text content-text_work">このページでは当社がこれまで手がけてきたシステム開発・アプリ構築・ウェブ制作などのポートフォリオを公開しています。</p>
                <div class="swiper WorkSlider">
                    <div class="swiper-wrapper">
                        <div v-for="(work,Work) in works" :key="Work" class="swiper-slide">
                            <div class="work-contents__list w-100 mb-5">
                                <router-link :to="'/work/detail/'+work.id">
                                    <img class="work-contents__list__thumbnail"
                                        :src="'https://admin-idenbrid.idenbrid.jp/public/storage/work_images/'+work.image"
                                        alt="" loading="lazy">
                                    <p class="work-contents__list__company">{{work.company}}</p>
                                    <p class="work-contents__list__title">{{work.title}}</p>
                                    <p class="work-contents__list__tags">{{work.content}}</p>
                                </router-link>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>

                </div>


                <router-link class="viewmore-btn viewmore-btn_center" to="/works/">View More
                    <!--<span class="viewmore-btn__img">
                        <img src="/public/assets/img/icons/btn-arrow.svg" alt="" loading="lazy">
                        <img src="/public/assets/img/icons/btn-arrow-white.svg" alt="" loading="lazy"></span>-->
                </router-link>
            </section>

            <!-- video section -->
            <section class="movie mycontents-wide" id="MOVIE">
                <div class="container">
                    <h3 class="content-title content-title_blog">CORPORATE MOVIE</h3>
                    <div class="movie-wrap">
                        <div class="movie-inner">
                            <iframe src="https://www.youtube.com/embed/MjWJ2deIOkg" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen="" width="100%" height="600"> </iframe>
                        </div>
                        <p class="text">
                            私たちの会社がどのような会社なのかを当社CEOとCDOが３分のYouTubeビデオで説明しています。IT開発のどんなことを得意としている会社なのか、ご覧ください。</p>
                    </div>
                </div>
            </section>
            <!-- end -->
            <section class="blog mycontents-wide">
                <h3 class="content-title content-title_blog">BLOG</h3>
                <p class="content-text content-text_blog">こちらのお知らせでは当社から皆様によりIT開発が好きになるようなニュースや当社からのリリースを発信する場所です。</p>
                <ul class="blog-contents">
                    <li v-for="(blog,Blog) in blogs" :key="Blog" v-if="Blog < 3" class="blog-contents__list">
                        <router-link :to="'/blog/detail/'+blog.id+'/'">
                            <p class="blog-contents__list__tags"><span>BLOG</span></p>
                            <img class="blog-contents__list__thumbnail"
                                :src="'https://admin-idenbrid.idenbrid.jp/public/storage/blog_images/'+blog.image"
                                alt="" loading="lazy">
                            <p class="blog-contents__list__title">{{blog.title}}</p>
                            <p class="blog-contents__list__date">{{blog.date}}</p>
                        </router-link>
                    </li>
                </ul>
                <router-link class="viewmore-btn viewmore-btn_center" to="/blog/">View More
                    <!--<span class="viewmore-btn__img">
                        <img src="/public/assets/img/icons/btn-arrow.svg" alt="" loading="lazy">
                        <img src="/public/assets/img/icons/btn-arrow-white.svg" alt="" loading="lazy"></span>-->
                </router-link>
            </section>

            <!-- <section class="recruit mycontents-wide">
                <h3 class="content-title content-title_recruit">ONLINE DEVELOPMENT HUB</h3>
                <p class="devlop-content-text content-text_recruit">
                    アイデンブリッド社では世界のIT開発の拠点となれるように自社でビジネス営業・上流設計・デザイン・開発・テスト・保守まで一括でマネジメントできる施設そしてチーム体制を整えています。オンライン開発ハブ通称オンラインディベロップメントハブではお客様が開発リソースを自社で保有・管理する必要なく、IT事業の展開や自社のDXに取り組むことができるサービスになります。またお客様とのコミュニケーションは日本人のみが担当しますので、オフショア開発にありがちなブリッジSEとの間におけるコミュニケーション齟齬などは発生しづらいメリットもございます。
                </p>
                <span class="recruit__spacer-sp"></span>
                <router-link class="viewmore-btn viewmore-btn_recruit" to="/onlinedevelopmenthub/">View More
                    phale Hide
                    <span class="viewmore-btn__img">
                        <img src="/public/assets/img/icons/btn-arrow.svg" alt="" loading="lazy">
                        <img src="/public/assets/img/icons/btn-arrow-white.svg" alt="" loading="lazy"></span>
                </router-link>

            </section> -->
            <!-- <section class="contact mycontents-wide">
                <h3 class="content-title content-title_contact">お問い合わせ</h3>
                <img class="contact__img" src="/public/assets/img/icons/Operator.png" alt="" width="80px">
                <p class="content-text content-text_contact">お問い合わせは企画時点からお受けしております。またこんなことできるなどITに関する相談事も無料で受け付けています。
                </p>
                <div class="contact__btns">
                    <button class="btn-wide btn-wide_call" data-toggle="modal" data-target="#linescancode">
                        <div class="btn-wide__imgs">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Line-white.png" alt=""
                                loading="lazy">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Line-Black.png" alt=""
                                loading="lazy">
                        </div>
                        <p class="btn-wide__text btn-wide__text_call">会社LINE ID</p>
                    </button>
                    <a class="btn-wide btn-wide_call" href="mailto:helloworld@idenbrid.com">
                        <div class="btn-wide__imgs">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Mail-White.png" alt=""
                                loading="lazy">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Mail-Black.png" alt=""
                                loading="lazy">
                        </div>
                        <p class="btn-wide__text btn-wide__text_call">
                            helloworld@idenbrid.com
                        </p>
                    </a>
                    <a class="btn-wide" href="skype:live:.cid.3145b74a3504693c?chat">
                        <div class="btn-wide__imgs">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Skype-White.png" alt=""
                                loading="lazy">
                            <img class="btn-wide__img" src="/public/assets/img/icons/Skype-Black.png" alt=""
                                loading="lazy">
                        </div>
                        <p class="btn-wide__text btn-wide__text_contact">会社Skype ID</p>
                    </a>
                </div>
                (Modal Hide)
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
                                <img src="/public/assets/img/line-code.jpg" width="100%" loading="lazy" />
                            </div>
                        </div>
                    </div>
                </div>

            </section> -->
        
            <!-- <section class="footer-section">

            <div class="container-fluid">
                <div class="row">
                    <div class="thumb col-md-6  p-0">
                        <div class="hvrtxt en"><span class="more_txt">
                            <span class="underline">MORE</span></span>
                                    </div>
                        <div class="col-left-content col-content scaleImg">
                            <div class="icon-twitter">
                                <a href=""><img class="twt-bnr-img bnr-img" src="/assets/img/tw-bnr.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="thumb col-md-6 p-0">
                        <div class="col-right-content col-content">
                            <div class="icon-ytb">
                                <a href=""><img class="twt-bnr-img bnr-img" src="/assets/img/yt-bnr.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <div class="bnr_area">
        <a href="https://twitter.com/koheinishizaki" target="_blank" class="hoverScale">
            <div class="thumb">
                <div class="hvrtxt en"><span class="more_txt"><span class="underline">MORE</span></span></div>
                <div class="scaleImg">
                    <img src="https://tomorrowgate.co.jp/asset/img/top/tw-bnr.jpg" alt="">
                </div>
            </div>
        </a>
        <a href="https://www.youtube.com/channel/UChN700y3HeGE_gLnUy_9yug" target="_blank" class="hoverScale">
            <div class="thumb">
                <div class="hvrtxt en"><span class="more_txt"><span class="underline">MORE</span></span></div>
                <div class="scaleImg">
                    <img src="https://tomorrowgate.co.jp/asset/img/top/yt-bnr.jpg" alt="">
                </div>
            </div>
        </a>
    </div>
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
        data() {
            return {
                blogs: [],
                works: [],
                news: []
            }
        },
        metaInfo() {
            return {
                title: "システム・アプリ開発とウェブ制作はアイデンブリッド社 | IDENBRID INC..",
                meta: [{
                    vmid: "description",
                    name: "アイデンブリッド, アイデンブリッド社, アイデン, ウェブ, ウェブ開発, ウェブサイト, デザイン, ウェブデザイン, スマホアプリ, モバイルアプリ, LINE開発, RPA, Python, スクレイピング, IT開発, オンラインディベロップメントハブ, オンライン開発ハブ, パキスタン, オフショア開発, IDENBRID, Idenbrid, idenbrid, クラウド, ITコンサル",
                    content: "ウェブデザインからシステム・モバイルアプリ開発まで一括で受けているアイデンブリッド社はIT業界の中でもトップクラスのコミュニケーション能力でお客様のプロジェクトに対してご提案します。案件の対して要件定義、設計、開発実装そしてテストまで包括的にお受けします。無料でのお見積りのご相談はこちらからです。技術的な内容やご予算などわからないことがありましたらお問合せください。",
                }, ],
            };
        },

        mounted() {

            axios.get('/api/blogs').then((res) => {
                this.blogs = res.data.blogs;
            }).catch((err) => {});

            axios.get('/api/news').then((res) => {
                this.news = res.data.news;
            }).catch((err) => {});

            axios.get('/api/works').then((res) => {
                this.works = res.data.works;
                this.$nextTick(() => {
                    var swiper = new Swiper(".WorkSlider", {
                        slidesPerView: 3,
                        spaceBetween: 30,
                        slidesPerGroup: 1,
                        loop: true,
                        loopFillGroupWithBlank: true,
                        /* autoplay: {
                                     delay: 2500,
                                     disableOnInteraction: false,
                                   },*/
                        breakpoints: {
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 30,
                            },
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 40,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 50,
                            },
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            /* prevEl: ".swiper-button-prev",*/
                        },
                    });

                });
            }).catch((err) => {});


            /* work slider end*/


            /* banner text black blur show time */
            window.setTimeout(top_hero_title, 300);

            function top_hero_title() {
                jQuery(".top-hero__title .horo-text-b").css({
                    "filter": "blur(0)",
                    "opacity": 1
                });
            }
            /*text-typed*/
            var TxtRotate = function (el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtRotate.prototype.tick = function () {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

                var that = this;
                var delta = 300 - Math.random() * 100;

                if (this.isDeleting) {
                    delta /= 2;
                }

                if (!this.isDeleting && this.txt === fullTxt) {
                    delta = this.period;
                    this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    this.loopNum++;
                    delta = 500;
                }

                setTimeout(function () {
                    that.tick();
                }, delta);
            };


            var elements = document.getElementsByClassName('txt-rotate');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #2FA5DE }";
            document.body.appendChild(css);



        }


    };

</script>
<style scoped>
.col-content {
    border: 1px solid #2B2B2B;
}
.bnr_area {
    z-index: 1;
    display: flex;
    position: relative;
    background: #000;
}
.bnr_area a {
    width: 50%;
    border: 1px solid #2b2b2b;
}
.hoverScale .thumb {
    overflow: hidden;
    position: relative;
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
.hoverScale .thumb .hvrtxt .more_txt {
    color: #dadada;
    font-size: 1.4rem;
    font-family: "DIN";
    letter-spacing: 0.06em;
    text-transform: uppercase;
    position: relative;
    padding-right: 20px;
    font-weight: 700;
}
.hoverScale .thumb .hvrtxt .more_txt::before {
    width: 10px;
}
.hoverScale .thumb .hvrtxt .more_txt::after, .hoverScale .thumb .hvrtxt .more_txt::before {
    content: "";
    height: 1px;
    background-color: #dadada;
    position: absolute;
    right: 0;
    top: 50%;
    transition: 0.3s;
}
.hoverScale .thumb .hvrtxt .more_txt .underline {
    position: relative;
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
.hoverScale .thumb .hvrtxt .more_txt::after {
    width: 6px;
    transform: rotate(45deg) translateY(-3px);
}
.bnr-img{
width: 100%;
height: auto;
}
@media screen and (max-width: 896px){
.bnr_area {
    display: block;
}
.bnr_area a {
    width: 100%;
    display: block;
}
}
.btn-views{
    border: 1px solid #000;
    border-radius: 15px;
    color: #000;
    cursor: pointer;
    display: block;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: .1em;
    margin-left: 8px;
    margin-top: 30px;
    opacity: 1;
    padding: 19px 0;
    position: relative;
    text-align: center;
    transition: .4s;
    width: 250px;
    z-index: 999;
}
.btn-views:hover{
    opacity: 0.6;
    color: #fff;
    border: 1px solid var(--textcolor);  
    transition: 0.4s; 
    background: var(--textcolor); 
}
.btn-view:hover{
    background: var(--textcolor);
}
.footer-section{
    background-color:#000;
}
    .service-content-img {
        height: auto;
        width: 300px;
        max-width: 100%;
    }

    .service-p {
        color: #333;
        flex: none;
        font-family: 'Noto Sans JP';
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        height: auto;
        letter-spacing: 0.15em;
        line-height: 1.8;
        margin: 48px 0px 0px 0px;
        text-align: left;
        width: 100%;
        max-width: 100%;
        justify-content: flex-start;
    }

    .service-col {
        display: flex;
        align-content: flex-start;
        align-items: flex-start;
        flex: none;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        padding: 0px;
        width: 49%;
        max-width: 49%;
    }

    .service-row {
        display: flex;
    }

    .new {
        z-index: 0;
        pointer-events: all;
        flex-wrap: nowrap;
        flex: none;
        display: flex;
        position: relative;
        flex-direction: column;
    }

    .new-content {
        color: #333;
        font-family: 'Noto Sans JP';
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.05em;
        line-height: 1.7;
        margin: 12px 0px 0px 0px;
        text-align: left;
        justify-content: flex-start;
    }

    .new-listing:nth-child(1) {
        border-top: 0px solid #bbbbbb;
    }

    .new-link:hover {
        opacity: 0.6;
    }

    .new-link {
        background: rgba(0, 0, 0, 0.0);
        flex: none;
        flex-direction: row;
        height: auto;
        justify-content: flex-start;
        margin: 0px 0px 0px 0px;
        padding: 16px 0px 16px 0px;
        width: 100%;
        max-width: 100%;
    }

    .new-date {
        color: #666666;
        font-size: 14px;
        font-weight: 400;
    }

    .new-tag {
        align-content: center;
        align-items: center;
        background: #FFFFFF;
        flex-wrap: nowrap;
        justify-content: center;
        padding: 4px 8px 4px 8px;
    }

    .new-box {
        align-content: center;
        align-items: center;
        background: #f4f4f4;
        flex-wrap: nowrap;
        flex: none;
        justify-content: center;
        padding: 30px 0px 40px 0px;
    }

    .new-listing {
        align-content: flex-start;
        align-items: flex-start;
        background: rgba(0, 0, 0, 0.0);
        justify-content: flex-start;
        width: 960px;
        max-width: 100%;
        border-bottom: 0px solid #bbbbbb;
        border-left: 0px solid #bbbbbb;
        border-right: 0px solid #bbbbbb;
        border-top: 1px solid #bbbbbb;

    }

    .new-item {
        align-content: flex-start;
        align-items: flex-start;
        flex: 1;
        margin: 0px 0px 0px 0px;
        max-width: 100%;

    }

    .news {
        padding-bottom: 80px;
    }

    .news-contents {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0px;
    }

    .new.icon,
    .new.text {
        display: flex;
        flex-direction: row;
        align-items: center;
        align-content: center;
        justify-content: center;
        overflow: visible;
        word-break: break-word;
        word-wrap: anywhere;
    }

    .new-meta {
        align-content: center;
        align-items: center;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        padding: 0px;
        display: flex;
    }

    .WorkSlider {
        overflow: inherit;
    }

    .WorkSlider .swiper-button-next {
        top: -50px;
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #333333;
        border-radius: 50px;
        color: #fff;
    }

    .WorkSlider .swiper-button-next:after {
        font-size: 14px;

    }

    /*hero*/

    .top-hero {
        position: relative;
        margin-top: 60px;
        height: 500px;
    }

    .top-hero::before {
        content: "";
        position: absolute;
        top: 49px;
        display: inline-block;
        width: calc(100vw - 80px + (100% - 100vw) / 2);
        height: 450px;
        background-color: rgba(255, 255, 255, 0.6);
        border-radius: 30px 0px 0px 30px;
        z-index: 1;
    }

    .top-hero__title__br-sp {
        display: none;
    }

    .top-hero__video {
        position: absolute;
        top: 49px;
        display: inline-block;
        width: calc(100vw - 80px + (100% - 100vw) / 2);
        height: 450px;
        border-radius: 30px 0px 0px 30px;
        z-index: 0;
        object-fit: cover;
    }

    .top-hero__title {
        position: relative;
        margin-left: 0px;
        font-weight: bold;
        font-size: 64px;
        line-height: 96px;
        letter-spacing: 0.05em;
        z-index: 2;
    }

    .top-hero__title .horo-text-b {
        transition: all 800ms;
    }

    .top-hero__title span {
        filter: blur(10px);
        opacity: 0;
    }

    .devlop-content-text {
        max-width: 675px;
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
        color: #333333;
    }

    @media (max-width: 1200px) {
        .WorkSlider {
            overflow: hidden;
        }
    }

    @media (max-width: 767px) {
        .new-box {
            padding: 32px 32px 32px;
            max-width: 100%;
        }

        .WorkSlider {
            overflow: hidden;
        }

        .WorkSlider .swiper-button-next {
            top: -15px;
        }

        .devlop-content-text {
            max-width: inherit;
            font-weight: 500;
            font-size: 13px;
            line-height: 20px;
        }

        .movie-inner iframe {
            height: 200px;
        }

        .about-iden-container {
            padding: 0px;
        }

        .about-iden-container .text {
            padding: 0px !important;
        }

        .txt-rotate {
            font-size: 32px;
        }

        .top-hero {
            margin-top: 53px;
            height: 330px;
        }

        .top-hero__title__br-sp {
            display: block;
        }

        .top-hero__title__br-pc {
            display: none;
        }

        .top-hero::before {
            width: 97%;
            top: 0;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 10px 0 0 10px;
        }

        .top-hero__video {
            width: 97%;
            top: 0;
            border-radius: 10px 0 0 10px;
            height: 340px;
        }

        .top-hero__title {
            padding-top: 12px;
            margin-left: 0px;
            font-size: 24px;
            line-height: 150%;
            letter-spacing: 0.05em;
        }
    }

    /*scroll*/

    .scroll_top {
        margin-top: 8px;
        margin-bottom: 40px;
        font-weight: bold;
        font-size: 12px;
        line-height: 18px;
        letter-spacing: 0.15em;
    }

    @media (max-width: 767px) {
        .scroll_top {
            margin-top: 30px;
            margin-bottom: 30px;
        }

    }

    /*about*/

    .about {
        margin-bottom: 102px;
    }

    /*work*/

    .work {
        margin-bottom: 120px;
        position: relative;
        margin-top: 120px;
    }

    .content-title_work {
        margin-bottom: 20px;
    }

    .content-text_work {
        margin-top: 0px;
        margin-bottom: 60px;
    }

    .work-contents {
        display: none;
        justify-content: space-between;
    }

    .work__right {
        top: 190px;
        right: 0;
        display: block;
        width: 30px;
        height: 30px;
        margin: 2px 0 20px auto;
        transform: rotate(180deg);
    }



    .work-contents__pc-frame {
        position: relative;
        width: 100vw;
        margin-left: calc((100% - 100vw) / 2);
        overflow: hidden;
        margin-top: -20px;
        padding-top: 20px;
    }

    .work-contents__pc-frame::before {
        height: 430px;
        display: block;
        content: "";
    }

    .work-contents__pc {
        position: absolute;
        left: 0;
        top: 20px;
        display: flex;
        width: calc(330px * 8 + 65px * 7);
        height: 400px;
    }

    .work-contents__pc .work-contents__list {
        position: absolute;
        width: 350px;
        min-height: 350px;
    }

    @media (max-width: 767px) {
        .recruit__spacer-sp {
            height: auto;
        }

        .blog {
            margin-top: 0px !important;
        }

        .work {
            margin-bottom: 60px;
            margin-top: 0px;
        }

        .content-text_work {
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 14px;
            line-height: 22px;
        }

        .work__right {
            display: none;
        }

        .work-contents {
            display: flex;
            padding-top: 20px;
            margin-top: -20px;
            margin-bottom: 0;
            padding-bottom: 30px;
            margin-bottom: 50px;
            overflow-x: scroll;
            overflow-y: visible;
            width: 100vw;
            margin-left: calc(var(--content-padding-side-sp) * -1);
        }

        .work-contents__pc-frame {
            display: none;
        }

        .work-contents__pc {
            display: none;
        }

        .work-contents__list {
            width: 100%;

        }

        .work-contents .work-contents__list:last-child {
            margin-right: 30px;
        }
    }

    /*blog*/

    .blog {
        margin-bottom: 120px;
        margin-top: 120px;
    }

    .content-title_blog {
        margin-bottom: 20px;
    }

    .content-text_blog {
        margin-top: 0px;
        margin-bottom: 60px;
    }

    .blog-contents {
        display: flex;
        justify-content: space-between;
        margin-bottom: 60px;
    }

    .blog-contents__list {
        width: calc((100% - 65px * 2) / 3);
    }

    @media (max-width: 767px) {

        .blog {
          margin: 50px auto 60px;
        }

        .content-text_blog {
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 14px;
            line-height: 22px;
        }

        .blog-contents {
            margin-top: -20px;
            padding-top: 20px;
            margin-bottom: 0;
            padding-bottom: 30px;
            margin-bottom: 50px;
            overflow-x: scroll;
            overflow-y: visible;
            /* width: 100vw; */
            margin-left: calc(var(--content-padding-side-sp) * -1);
        }

        .blog-contents .blog-contents__list:last-child {
            margin-right: 0px;
        }

        .blog-contents__list__tags {
            top: 78px !important;
        }

        .blog-contents__list {
            width: 100%;
            /* margin-left: 30px; */
        }
    }

    /*recruit*/

    .recruit {
        margin-bottom: 60px;
    }

    /* about idenbrid */
    .about_iden {
        display: flex;
        max-width: 1500px;
        margin: 0 auto;
    }

    .about_iden .text {
        letter-spacing: 2px;
        font-weight: 600;
        font-size: 16px;
    }

    .about-iden-container .text {
        background-color: #fff;
        max-width: 700px;
        padding: 0px 20px;
    }

    .about-iden-container {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        padding: 0px;
    }

    @media screen and (min-width: 767px) {
        .about-iden-container {
            flex-direction: row;
        }
    }

    /* service section */

    .service {
        padding-bottom: 80px;
        padding-top: 160px;
        /*影の調整 160 - 20*/
    }

    .text {
        margin-top: 10px;
    }

    .about {
        margin-bottom: 0px;
    }

    #MOVIE .container {
        padding: 0px;
    }

    /*.service-contents {
    columns: 2;
    column-fill: auto;
    column-gap: 60px;
}

.service-contents__text, .service-contents__list {
    margin-bottom: 60px;
    break-inside: avoid;
    transform: translateZ(0);
}*/
    .service-subcontents__text {
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
        width: calc((100% - 415px) / 1);
        text-align: center;
        margin: auto;
    }

    .service-contents {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        flex-direction: row-reverse;
    }

    .service-contents__text {
        position: absolute;
        top: 0;
        left: 0;
        width: calc((100% - 60px) / 2);
    }

    .service-contents__list {
        width: calc((100% - 60px) / 2);
        margin-bottom: 60px;
    }

    .service-contents .service-contents__list:nth-child(2n+1) {
        position: relative;
        top: 132px;
    }

    .service-contents__text {
        font-weight: bold;
        font-size: 16px;
        line-height: 24px;
    }

    .service-contents__list {
        background: #FFFFFF;
        box-shadow: 0px 4px 7px rgba(0, 0, 0, 0.15);
        border-radius: 15px;
        min-height: 360px;
    }

    .service-contents__list .service-items {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 100%;
    }

    .service-contents__list .service-items:hover .service-contents__list__thumbnail {
        transform: translateY(-6%) scale(1.15);
    }

    .service-contents__list__thumbnail-frame {
        position: absolute;
        border-radius: 15px 15px 0 0;
        top: 0;
        left: 0;
        height: 221px;
        width: 100%;
        overflow: hidden;
    }

    .service-contents__list__thumbnail {
        height: 221px;
        width: 100%;
        object-fit: cover;
        transition: 0.5s;
        position: relative;
        z-index: 1;
    }

    .service-contents__list__subtitle {
        margin-top: 189px;
        margin-left: 30px;
        font-weight: bold;
        font-size: 14px;
        line-height: 21px;
        letter-spacing: 0.05em;
        position: relative;
        z-index: 2;
    }

    .service-contents__list__title {
        margin: 0 30px 10px 30px;
        font-weight: bold;
        font-size: 24px;
        line-height: 36px;
        letter-spacing: 0.05em;
        position: relative;
        z-index: 2;
    }

    .service-contents__list__text {
        margin: 0 30px;
        padding-bottom: 20px;
        font-weight: 500;
        font-size: 14px;
        line-height: 21px;
    }

    .viewmore-btn_service {
        margin-top: 15px;
    }

    .idenbrid-background {
        border-radius: 15px;
    }

    @media (max-width: 767px) {
        .idenbrid-background {
            width: 100%;
        }

        .service {
            padding-bottom: 60px;
            padding-top: 20px;
        }

        .service-contents {
            display: block;
        }

        .service-contents__text {
            position: relative;
            width: 100%;
        }

        .service-contents__list {
            width: 100%;
            min-height: 270px;
        }

        .service-contents__list .service-item {
            height: auto;
        }

        .service-contents .service-contents__list:nth-child(2n+1) {
            top: inherit;
        }

        .service-contents__text,
        .service-contents__list {
            margin-bottom: 30px !important;
        }

        .service-contents .service-contents__list:nth-child(5) {
            margin-bottom: 0 !important;
        }

        .service-contents__list__thumbnail-frame {
            height: 120px;
        }

        .service-contents__list__thumbnail {
            height: 120px;
            object-position: bottom;
        }

        .service-contents__list__subtitle {
            margin-top: 112px;
            margin-bottom: 0;
            margin-left: 10px;
            font-size: 10px;
            line-height: 15px;
        }

        .service-contents__list__title {
            margin: 0 30px 10px 10px;
            font-size: 14px;
            line-height: 21px;
        }

        .service-contents__list__text {
            margin: 0 10px 12px 10px;
            font-size: 13px;
            line-height: 19px;
        }

        .viewmore-btn_service {
            margin: 50px auto 0 auto;
        }
    }

    /* work section */
    .work-contents__list {
        background: #FFFFFF;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        border-radius: 10px;
        transition: 1s;
        transition-property: transform;
        min-height: 320px;
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
        padding-bottom: 1px;
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

</style>
