<template>
    <div>
         <Navbar />
         <div class="hero_Heading">
        <h2 class="hero">ABOUT</h2>
        <p class="about-subcontents__text">こちらは当社の情報や沿革など会社概要を確認いただけすページです。</p>
    </div>
        <div class="company--index highlight_blk">
            <a href="https://tomorrowgate.co.jp/compamy/profile/" class="hoverScale company--item">
                <div class="thumb">
                    <div class="hvrtxt en"><span class="more_txt"><span class="underline">MORE</span></span></div>
                    <div class="scaleImg">
                        <img src="https://tomorrowgate.co.jp/asset/img/company/company-index01.jpg" alt="">
                    </div>
                </div>
                <h3 class="company_ttl">
                    <strong>会社概要</strong>
                    <span class="en">PROFILE</span>
                </h3>
            </a>
            <a href="https://tomorrowgate.co.jp/compamy/message/" class="hoverScale company--item">
                <div class="thumb">
                    <div class="hvrtxt en"><span class="more_txt"><span class="underline">MORE</span></span></div>
                    <div class="scaleImg">
                        <img src="https://tomorrowgate.co.jp/asset/img/company/company-index02.jpg" alt="">
                    </div>
                </div>
                <h3 class="company_ttl">
                    <strong>代表挨拶</strong>
                    <span class="en">MESSAGE</span>
                </h3>
            </a>
         
            <router-link to="" class="hoverScale company--item">
                <div class="thumb">
                    <div class="hvrtxt en"><span class="more_txt"><span class="underline">MORE</span></span></div>
                    <div class="scaleImg">
                        <img src="https://tomorrowgate.co.jp/asset/img/company/company-index04.jpg" alt="">
                    </div>
                </div>
                <h3 class="company_ttl">
                    <strong>オフィス</strong>
                    <span class="en">OFFICE</span>
                </h3>
            </router-link>
               <router-link to="/member" class="hoverScale company--item">
                <div class="thumb">
                    <div class="hvrtxt en"><span class="more_txt"><span class="underline">MORE</span></span></div>
                    <div class="scaleImg">
                        <img src="https://tomorrowgate.co.jp/asset/img/company/company-index03.jpg" alt="">
                    </div>
                </div>
                <h3 class="company_ttl">
                    <strong>役員紹介</strong>
                    <span class="en">Member</span>
                </h3>
               </router-link>
            <router-link to="" class="hoverScale company--item">
                <div class="thumb">
                    <div class="hvrtxt en"><span class="more_txt"><span class="underline">MORE</span></span></div>
                    <div class="scaleImg">
                        <img src="https://tomorrowgate.co.jp/asset/img/company/company-index05.jpg" alt="">
                    </div>
                </div>
                <h3 class="company_ttl">
                    <strong>アクセス</strong>
                    <span class="en">ACCESS</span>
                </h3>
            </router-link>
        </div>
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
                title: "開発実績 | システム開発はアイデンブリッド社 | IDENBRID INC.",
                meta: [{
                    vmid: "description",
                    name: "アイデンブリッド, アイデンブリッド社, アイデン, ウェブ, ウェブ開発, ウェブサイト, デザイン, ウェブデザイン, スマホアプリ, モバイルアプリ, LINE開発, RPA, Python, スクレイピング, IT開発, オンラインディベロップメントハブ, オンライン開発ハブ, パキスタン, オフショア開発, IDENBRID, Idenbrid, idenbrid, クラウド, ITコンサル",
                    content: "アイデンブリッド社がこれまでに担当した案件の一部を紹介致します。フロントエンドの実装はReact JS、Vue JS、HTML、BootStrap、jQueryを主軸とし、バックエンド・API開発はLaravel(PHP)、Node JS、Pythonを基本に開発を行なっています。CMSではWordPress（ワードプレス）を用いて実装を行うこともあり、プラグインの開発に特化した案件もございます。スマホアプリではFultter(Dart)でフロント実装を行い、サーバー周りはGCPまたはAWSを用いています。",
                }, ],
            };
        },
    };
</script>
<style>

.company--index {
    padding: 60px 10% 120px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.company--item {
    width: 32.5%;
    transform: translateY(5%);
    transition: .6s;
}
.company.loaded .company--item {
    transform: translateY(0);
    opacity: 1;
}
.company--item:nth-of-type(1), .company--item:nth-of-type(2) {
    width: 49.4%;
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
    font-family: DIN-Bold;
    font-size: 14px;
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
.hoverScale .thumb .hvrtxt .more_txt::after, .hoverScale .thumb .hvrtxt .more_txt::before {
    content: "";
    height: 1px;
    background-color: #dadada;
    position: absolute;
    right: 0;
    top: 50%;
    transition: 0.3s;
}
.hoverScale .thumb .scaleImg {
    transition: 0.4s;
    backface-visibility: hidden;
}
.hoverScale .thumb::after {
    content: "";
    background-color: rgba(0,0,0,0.6);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: 0.4s;
    backface-visibility: hidden;
}
img {
    max-width: 100%;
    height: auto;
    vertical-align: bottom;
}
.company--item .company_ttl {
    margin-top: 20px;
}
.company--item .company_ttl strong {
    color: #000;
    font-size: 18px;
    letter-spacing: 0.12px;
    font-family: NotoSansJP-Bold;
}
.company--item .company_ttl span {
    font-size: 14px;
    font-family: "DIN";
    color: #929191;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    display: block;
    margin-top: 15px;
    font-weight: bold;
}
@media screen and (min-width: 897px){ 
.company--item:nth-of-type(1), .company--item:nth-of-type(2) {
    margin-bottom: 75px;
}
}
@media screen and (max-width: 767px){

.company--index{
    padding: 20px 8% 60px;
}
.hero{
    padding-top: 60px;
    padding-bottom: 10px;
}
}
@media screen and (max-width: 500px){
    .company--item {
    width: 100%;
}
.company--item:nth-of-type(1), .company--item:nth-of-type(2) {
    width: 100%;
}
}
</style>