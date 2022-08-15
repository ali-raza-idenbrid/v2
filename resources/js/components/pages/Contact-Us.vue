<template>
    <div>
         <Navbar />
<main>
    <h2 class="hero">CONTACT</h2>
    <section class="mycontents-wide">
        <p class="contact-text">
            当社に関心を持って頂きまして誠にありがとうございます。<br/>頂きましたお問い合わせは３営業日以内に返信させて頂きます。<br/>皆様からのご相談やお見積もりのお願いお待ちしております。
        </p>

        <div class="contact">
            <div id="mw_wp_form_mw-wp-form-1227" class="mw_wp_form mw_wp_form_input  ">
					<div class=" success-message w-50 m-auto" v-if="status == true">
                    <div class="alert alert-success text-center">送信に成功しました</div>
                    </div>
                    <form>

                        <table>
<tbody>
<tr class="company">
<th><label> 会社名</label></th>
<td>
<input type="text" name="company" v-model="form.company_name" class="hide-input" size="60" value="" placeholder="会社名を記入して下さい" />

</td>
</tr>
<tr class="company">
<th class="mast"><label> お名前</label></th>
<td>
<input type="text" name="your-name" v-model="form.name" class="full_name" size="60" value="" placeholder="お名前を記入して下さい" />
<div v-if="errors.name" class="text-danger">こちらは必須項目です。</div>
<div v-if="error.name == 'true'" class="text-danger">こちらは必須項目です。</div>


</td>
</tr>
<!--<tr class="tell">
<th><label>電話番号</label></th>
<td>
<span class="mwform-tel-field">
	<input type="text" name="tel[data][0]" class="hide-input" size="6" maxlength="5" value="" data-conv-half-alphanumeric="true" />
	-	<input type="text" name="tel[data][1]" class="hide-input" size="5" maxlength="4" value="" data-conv-half-alphanumeric="true" />
	-	<input type="text" name="tel[data][2]" class="hide-input" size="5" maxlength="4" value="" data-conv-half-alphanumeric="true" />
</span>

<input type="hidden" name="tel[separator]" value="-" />
</td>
</tr>-->
<tr class="mail">
<th class="mast"><label>メールアドレス</label></th>
<td>
<input type="email" v-model="form.email" name="mail" size="60" value="" data-conv-half-alphanumeric="true" placeholder="メールアドレスを記入して下さい"/>
<div v-if="errors.email" class="text-danger">こちらは必須項目です。</div>
<div v-if="error.email == 'true'" class="text-danger">こちらは必須項目です。</div>


</td>
</tr>
<tr class="body">
<th class="mast"><label> お問い合わせ内容</label></th>
<td>
<textarea name="other" v-model="form.inquiry" cols="50" rows="5" placeholder="どのような事でもお気軽にご相談ください"></textarea>
<div v-if="errors.inquiry" class="text-danger">こちらは必須項目です。</div>
<div v-if="error.inquiry == 'true'" class="text-danger">こちらは必須項目です。</div>


</td>
</tr>
</tbody>
</table>
<p class="privacy-check">

	<span class="mwform-checkbox-field horizontal-item">
		<label >
			<input type="checkbox" name="t_c" v-model="form.t_c" value="1" />
			<span class="mwform-checkbox-field-text"><router-link to="/privacypolicy/">個人情報保護方針</router-link>に同意しますか？</span>
		</label>
        <div v-if="errors.t_c" class="text-danger">こちらは必須項目です。</div>
        <div v-if="error.t_c == true" class="text-danger">こちらは必須項目です。</div>


	</span>


</p>
<div class="submit-btn col-md-6 m-auto">
<!--<a href="#" class="btn-download mr-2 mt-4"> <i class="mr-1 fa fa-download" aria-hidden="true"></i>Download</a>-->
<button v-if="form.t_c == true" type="button" @click="checkError"  class="btn mt-4 confirmation-btn">確認画面</button>
<button v-else type="button" disabled class="btn mt-4 confirmation-btn" data-toggle="modal" data-target="#confirmationmodel">確認画面</button>




</div>
<!-- Modal -->
<div class="modal fade confirmationmodel" id="confirmationmodel" tabindex="-1" role="dialog" aria-labelledby="confirmationmodelTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body p-5">
          <div class="d-flex company-name">
                  <label class="w-50 font-weight-bold ">会社名</label><p class="w-75">{{form.company_name}}</p>
          </div>
          <div class="d-flex name">
                  <label class="w-50 font-weight-bold ">お名前</label><p class="w-75">{{form.name}}</p>
          </div>
           <div class="d-flex mail-address">
                  <label class="w-50 font-weight-bold ">メールアドレス</label><p class="w-75">{{form.email}}</p>
          </div>
          <div class="d-flex mail-address">
                  <label class="w-50 font-weight-bold ">お問い合わせ内容</label><p class="w-75">{{form.inquiry}}</p>
          </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" @click="hide" class="viewmore-btn viewmore-btn_white" data-dismiss="modal">修正する</button>
        <button @click.prevent="sendMail"  class="btn confirmation-btn" name="submitConfirm" value="送信" >送信</button>

      </div>

    </div>
  </div>

</div>

</form>
				<!-- end .mw_wp_form --></div>        </div>
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
import Navbar from "../layout/Navbar.vue";
  import Footer from "../layout/Footer.vue";
    export default {
        components: {
                Navbar,
                Footer,
        },
        metaInfo() {
            return {
                title: "お問い合わせ | システム開発はアイデンブリッド社 | IDENBRID INC.",
                meta: [{
                    vmid: "description",
                    name: "アイデンブリッド, アイデンブリッド社, アイデン, ウェブ, ウェブ開発, ウェブサイト, デザイン, ウェブデザイン, スマホアプリ, モバイルアプリ, LINE開発, RPA, Python, スクレイピング, IT開発, オンラインディベロップメントハブ, オンライン開発ハブ, パキスタン, オフショア開発, IDENBRID, Idenbrid, idenbrid, クラウド, ITコンサル",
                    content: "アイデンブリッド社のお問い合わせはこちらからになります。まだ案件として確立される前のものでもご予算や開発期間の目安に関してもお気軽にお問合せください。営業担当よりすぐに返信させて頂きます。",
                }, ],
            };
        },
        data(){
            return{
                form:{
                    company_name:'',
                    name:'',
                    email:'',
                    inquiry:'',
                    t_c:'',
                },
                errors:[],
                status:false,
                error:{
                    name:'',
                    email:'',
                    inquiry:'',
                    t_c:''
                }
            }
        },
        methods:{
            sendMail(){
                axios.post('/api/contact-us',this.form).then((res)=>{
                    this.form.company_name="";
                    this.form.name="";
                    this.form.email="";
                    this.form.inquiry="";
                    this.form.t_c="";
                    this.errors=[];
                    this.successMessage();
                    jQuery('#confirmationmodel').modal('hide');



                }).catch((err)=>{
                    this.errors = err.response.data.errors;
                      jQuery('#confirmationmodel').modal('hide');
                });
            },
            successMessage(){
                this.status = true;
                jQuery('.alert-success').fadeOut(2000);
            },
            checkError(){
                if(this.form.email == '' && this.form.name == '' && this.form.inquiry == ''){
                    this.error.email = 'true';
                    this.error.inquiry = 'true';
                    this.error.name = 'true';
                    // this.error.t_c == true;
                }else{
                      jQuery('#confirmationmodel').modal('show');
                        this.error.email = '';
                        this.error.inquiry = '';
                        this.error.name = '';
                }

            },
            hide(){
                jQuery('#confirmationmodel').modal('hide');
            }
        },
        mounted(){

        }

    };
</script>
<style>

.btn-download{
    position: relative;
    display:flex;
    width: 50%;
    height: 40px;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    background: var(--textcolor);
    box-shadow: 0px 4px 7px rgb(0 0 0 / 15%);
    border-radius: 30px;
}
.contact-text {
    margin-top: 0px;
    margin-bottom: 60px;
    font-weight: bold;
    font-size: 16px;
    line-height: 24px;
    text-align: center;
    letter-spacing: 0.05em;
    color: #333333;
}

@media (max-width: 767px) {
    .contact-text {
        margin-top: -32px;
        margin-bottom: 30px;
        font-size: 15px;
        line-height: 22px;
    }
}

.contact {
    padding-top: 60px;
    padding-bottom: 60px;
    margin-bottom: 120px;
    background: #FFFFFF;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
}

.contact table {
    margin: 0 auto;
    width: 630px;
    border-collapse: separate;
    border-spacing: 0 30px;
    margin-bottom: 30px;
    /*60 - 30*/
}

.contact th {
    display: inline-block;
    width: 170px;
}

.contact th label {
    font-size: 16px;
    line-height: 154.7%;
    line-height: 40px;
    letter-spacing: 0.05em;
}

.contact td {
    display: inline-block;
    width: calc(100% - 170px);
}

.contact .company input, .contact .name input, .contact .mail input, .contact .tell input {
    padding: 0 15px;
    line-height: 40px;
    background: #FFFFFF;
    border: 1px solid #727171;
    box-sizing: border-box;
    border-radius: 3px;
    width: 100%;
}

.contact .name input {
    width: calc((100% - 30px) / 2);
    display: inline-block;
}

.contact .name td {
    position: relative;
}

.mw_wp_form_confirm td {
    padding-top: 7px;
}

.contact .name td input:last-child {
    position: absolute;
    top: 0;
    right: 0;
}

.contact .body textarea {
    padding: 15px;
    width: 100%;
    height: 230px;
    line-height: 25px;
    background: #FFFFFF;
    border: 1px solid #727171;
    box-sizing: border-box;
    border-radius: 3px;
}

.contact .company input, .contact .name input, .contact .mail input, .contact .tell input {
    height: 40px;
}

.contact input {
    display: block;
}

.contact .mast {
    position: relative;
}

.contact .mast::before {
    content: "必須";
    display: inline-block;
    position: absolute;
    width: 46px;
    height: 28px;
    top: 6px;
    left: -76px;
    background: #333333;
    border-radius: 3px;
    font-weight: 500;
    font-size: 12px;
    line-height: 28px;
    color: #FFFFFF;
    text-align: center;
}

.mw_wp_form_confirm .mast::before {
    display: none;
}

.mw_wp_form_confirm .privacy-check {
    display: none;
}

.privacy-check {
    text-align: center;
    font-weight: 500;
    font-size: 14px;
    line-height: 22px;
    color: var(--textcolor);
}

.privacy-check a {
    text-decoration: underline;
}

.privacy-check label {
    display: inline-block;
    margin-top: 12px;
}

.mwform-checkbox-field input {
    display: inline-block;
}

.submit-btn {
    display: flex;
    justify-content: center;
}

.viewmore-btn_white {
    background-color: #fff !important;
    color: var(--textcolor) !important;
    box-shadow: 0px 4px 7px rgba(0, 0, 0, 0.15) !important;
}

.confirmation-btn{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 240px;
    text-align: center;
    font-weight: bold;
    font-size: 16px;
    letter-spacing: 0.1em;
    color: #FFFFFF;
    background: var(--textcolor);
    box-shadow: 0px 4px 7px rgba(0, 0, 0, 0.15);
    border-radius: 30px;
    height: 60px;
}
.confirmation-btn:hover {
    color: #fff;
}
.confirmation-btn::after {
    position: absolute;
    content: "";
    display: inline-block;
    height: 40px;
    width: 40px;
    top: 10px;
    right: 8px;

}

.submit-btn br {
    display: none;
}

.mw_wp_form_confirm .submit-btn {
    display: flex;
    justify-content: center;
}

.mw_wp_form_confirm .submit-btn input:first-child {
    margin: 0;
}

.mw_wp_form_confirm .submit-btn input:last-child {
    margin-right: 0;
    margin-left: 60px;
}

@media (max-width: 1000px) {
table, tbody, tr, th, td {
display: block;
}
    .contact table {
        margin: 0 auto;
        max-width: 600px;
        width: 100%;
        padding-left: 14px;
        padding-right: 14px;
		-webkit-appearance: none;
-webkit-text-size-adjust: 100%;
    }
    .contact th, .contact td {
		-webkit-appearance: none;
-webkit-text-size-adjust: 100%;
        display: block;
        width: 100%;
    }
    .contact th {
		margin-top: 30px;
        height: 32px;
    }
    .contact th label {
        font-size: 14px;
        line-height: 24px;
    }
    .mast {
        padding-left: 54px;
    }
    .contact .mast::before {
        width: 42px;
        height: 24px;
        line-height: 24px;
        left: 0;
        top: 0;
    }
    .contact .name input {
        width: 100%;
        position: relative !important;
		-webkit-appearance: none;
    }
    .contact .name td input:first-child {
        margin-bottom: 10px;
    }
    .mw_wp_form_confirm .mast {
        padding-left: 0;
    }
    .contact .company input, .contact .name input, .contact .mail input, .contact .tell input {
		-webkit-appearance: none;
        height: 50px;
        font-size: 14px;
        line-height: 21px;
        padding-left: 12px;
        padding-right: 12px;
    }
    .contact .body textarea {
		-webkit-appearance: none;
        padding: 14px 12px;
        font-size: 14px;
        line-height: 22px;
        color: #727171;
    }
    .mw_wp_form_confirm .submit-btn {
        display: block;
        margin-top: 20px;
        /*50 - 30*/
    }
    .mw_wp_form_confirm .submit-btn input:first-child {
		-webkit-appearance: none;
        margin: 0 auto 30px auto;
    }
    .mw_wp_form_confirm .submit-btn input:last-child {
		-webkit-appearance: none;
        margin: 0 auto;
    }
	.privacy-check{
		margin-top: 30px;
	}
}

@media (max-width: 500px) {
    .privacy-check{
		width: calc(100% - 30px);
		margin: 30px auto 0 auto;
		text-align:left;
	}
	.privacy-check .mwform-checkbox-field{
		text-align: center;
		display: block;
	}
}

.mw_wp_form_complete {
    margin-bottom: 120px;
    text-align: center;
}

.mw_wp_form_complete .complete-text {
    margin-bottom: 120px;
    font-weight: bold;
    font-size: 16px;
    line-height: 24px;
    text-align: center;
    letter-spacing: 0.05em;
    color: var(--textcolor);
}

.viewmore-btn__img {

    background-size: cover;
}

@media (max-width: 767px) {
    .mw_wp_form_complete {
        margin-bottom: 60px;
    }
    .mw_wp_form_complete .complete-text {
        margin-bottom: 50px;
        font-size: 15px;
        line-height: 22px;
    }
}

/*menu*/

.menu {
    margin-bottom: 0;
}

.contact .entry_job select, .contact .entry_category select, .contact .year select {
    padding: 0 15px;
    line-height: 40px;
    background: #FFFFFF;
    border: 1px solid #727171;
    box-sizing: border-box;
    border-radius: 3px;
    width: 100%;
}

.select-contents {
    position: relative;
}

.year .select-contents {
    width: calc((100% - 80px) /2);
    display: inline-block;
}

.year p {
    display: inline-block;
    line-height: 100%;
    font-weight: 500;
    font-size: 16px;
}

.year td p:nth-child(3) {
    margin-right: 30px;
}

.select-contents::before {
    position: absolute;
    content: "â–¼";
    font-size: 8px;
    top: 16px;
    right: 16px;
    color: var(--textcolor);
}

.mw_wp_form_confirm .select-contents::before {
    display: none;
}

.mw_wp_form_confirm .select-contents {
    display: inline;
}



[type="file"] {
    display: none!important;
}



.mwform-file-delete {
    position: absolute;
    left: 0;
    top: 9px;
}

.file__name {
    display: inline-block;
    margin-left: 15px;
    line-height: 40px;
}

.file__text {
    margin-top: 10px;
    font-size: 12px;
    line-height: 19px;
    color: var(--textcolor);
}

.mw_wp_form_confirm .file__name {
    margin-left: 0;
}

.mw-wp-form_file {
    left: 0;
    position: absolute;
    display: inline-block;
    text-align: left;
    line-height: 40px;
    height: 40px;
    font-size: 16px;
    background-color: #fff;
    color: var(--textcolor);
}

.mw_wp_form_confirm .file__text {
    display: none;
}

.mw_wp_form_complete {
    margin-top: -120px;
    margin-bottom: -60px;
}

.mw_wp_form_complete .viewmore-btn__img{
    background-image: none;
}

@media (max-width: 767px) {
    .mw_wp_form_complete {
        margin-top: -90px;
        margin-bottom: -120px;
    }
}
</style>
