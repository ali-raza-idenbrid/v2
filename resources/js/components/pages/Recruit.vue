<template>
    <div>
        <Navbar />
           <div class="hero_Heading">
        <h2 class="hero">RECRUIT</h2>
        <p class="about-subcontents__text">こちらは当社の情報や沿革など会社概要を確認いただけすページです。</p>
    </div>
        <main>
         <div class="recruit--leadtxt">
        <h3>変な会社にしたいので<br class="pc">変な社員を募集します</h3>
        <p>売上が大きい会社とか、社員数が多い会社をつくりたいわけじゃない。<br class="pc">自分たちにしかできないことで、世の中を“あっ”と驚かせたい。<br class="pc">好きな人と、好きな事やる。そんなワガママな会社で働いてみませんか？
        </p>
    </div>
    <div class="recruit_fix visibility">
    <ul class="entryarea recruit--contactarea--bnr">
        <li>
            <router-link to="/branding">お試しエントリー<br><span class="label pc">気軽にメールだけ登録してみる</span><span class="label sp">気軽にメール登録</span></router-link>
        </li>
        <li>
                       <router-link to="/solutions">本気のエントリー<br><span class="label pc">今すぐ選考にチャレンジしてみる</span><span class="label sp">今すぐ選考にチャレンジ</span></router-link>
        </li>
    </ul>
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
       
    };

</script>

<style>


.recruit_fix {
    margin: auto;
    z-index: 20;
    padding: 50px 2% 70px;
    width: 60%;
}
.recruit_fix ul {
    justify-content: space-between;
}
 .recruit_fix ul li {
    margin: 0;
    width: 49%;
}
 .recruit_fix ul li a {
    width: 100%;
    padding: 16px 0;
    margin-top: 0;
    font-size: 1.6rem;
    line-height: 1.7;
}
.recruit--leadtxt h3{
    font-size: 38px;
}

@media screen and (min-width: 897px){
.recruit--contactarea--bnr.entryarea li a {
    padding: 50px 0;
    margin-top: 20px;
    font-size: 16px;
}
.recruit--contactarea--bnr.entryarea li a:hover {
    background-color: #fff;
    color: #000;
}
}
.recruit .recruit_fix ul li a .label {
    font-size: 12px;
    font-weight: 500;
}

.recruit--contactarea--bnr.entryarea li .label {
    font-size: 12px;
    font-family: NotoSansJP-Medium;
    letter-spacing: 0.05em;
    text-align: center;
}
.recruit--contactarea--bnr.entryarea li a {
    position: relative;
    display: block;
    border: 1px solid #2b2b2b;
    background-color: #000;
    letter-spacing: 0.12em;
    text-align: center;
    color: #dadada;
    font-size: 16px;
    transition: 0.6s ease;
    font-family: NotoSansJP-Bold;
}
@media screen and (min-width: 897px){
.recruit--contactarea--bnr {
    display: flex;
    justify-content: center;
}
}
.recruit_fix ul {
    justify-content: space-between;
}
.recruit-fix  {
    bottom: 12px;
    opacity: 1;
}
/* .mv_textarea {
    color: #dadada;
    background-color: #000;
} */
@media screen and (min-width: 897px) {
    .mv_textarea {
        padding: 50px 10% 60px;
    }
}
@media screen and (max-width: 896px) {
    .mv_textarea {
        padding: 100px 5% 40px;
    }
   .recruit_fix ul {
    display: flex;
    padding: 0;
}
.recruit_fix ul li a {
    font-size: 14px;
    padding: 13px 0;
}
 .recruit_fix ul li a .label{
    font-size: 10px;
}
.recruit_fix{
    width: 100%;
}
}
.mv_textarea .entxt {
    display: block;
    /* margin-bottom: 20px; */
    font-size: 64px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    transform: translateY(15%);
    transition: 0.6s;
    opacity: 1;
    color:black;
    font-weight: bold;
    text-align: center;
}
@media screen and (max-width: 896px) {
    .mv_textarea .entxt {
        margin-bottom: 11px;
        font-size: 2.8rem;
    }
}
.mv_textarea .jptxt {
    transform: translateY(15%);
    transition: 0.6s;
    opacity: 1;
    font-size: 13px;
    letter-spacing: 0.08em;
    color: #fff;
}


.sp {
    display: none;
}
@media screen and (max-width: 896px) {
    .sp {
        display: block;
    }
}
@media screen and (max-width: 896px) {
    .pc {
        display: none;
    }
}

.recruit--leadtxt {
    padding: 70px 10% 70px;
    color: #dadada;
    position: relative;
    z-index: 1;
    margin-top: 60px;
    background-color: #000;
}
.recruit--leadtxt::after {
    content: "";
    background: url('/assets/img/all_member.jpg') no-repeat center;
    background-size: 100%;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.3;
    z-index: -1;
}
@media screen and (max-width: 896px) {
    .recruit--leadtxt::after {
        background: url('/assets/img/all_member.jpg') no-repeat center;
        background-size: 300%;
    }
}
@media screen and (max-width: 896px) {
    .recruit--leadtxt {
        padding: 30px 5% 60px;
    }
}
.recruit--leadtxt h3 {
    line-height: 1.63;
    transform: translateY(10%);
    transition: 0.6s;
    opacity: 1;
    color:#dadada;
    font-family: NotoSansJP-Bold;
}
@media screen and (min-width: 897px) {
    .recruit--leadtxt h3 {
        font-size: 38px;
        letter-spacing: 0.2em;
    }
}
@media screen and (max-width: 896px) {
    .recruit--leadtxt h3 {
        font-size: 20px;
        letter-spacing: 0.12em;
    }
}
.recruit--leadtxt p {
    transform: translateY(10%);
    transition: 0.9s;
    opacity: 1;
    margin-top: 30px;
    letter-spacing: 0.12em;
    line-height: 2;
    font-size: 16px;
    font-family: NotoSansJP-Regular;
    color:#dadada;
}

@media screen and (max-width: 896px) {
    .recruit--leadtxt p {
        font-size: 14px;
    }
}
@media screen and (max-width: 500px){
.recruit--leadtxt {
    margin-top: 50px;
}
}
</style>
