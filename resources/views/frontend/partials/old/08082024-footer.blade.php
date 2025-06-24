@php
$practice_Area = DB::table('practice_areas')
->whereIn('id', ['7', '9', '11', '8', '10', '12', '13', '14'])
->orderByRaw("FIELD(id, '7', '9', '11', '8', '10', '12', '13', '14')")
->get();
@endphp
<!--------------------footer start----------------------------->
<!------------------ Contact Start -------------------------->

<section class="contact">

    <!-- <div class="mobile_whatsapp">
        <div class="whatsapp_chat_support wcs_fixed_right" id="example_1">

            <div class="wcs_button wcs_button_circle">
                <div class="whatsapp_blink">
                    <span href="" class="btn-whatsapp-pulse">
                        <span class="fa fa-whatsapp"></span>
                    </span>
                </div>
            </div>
            <div class="wcs_button_label">
                Need Help? Chat with us
            </div>

            <div class="wcs_popup">
                <div class="wcs_popup_close">
                    <span class="fa fa-close"></span>
                </div>
                <div class="wcs_popup_header">
                    <strong>Need Help? Chat with us</strong>
                    <br>
                    <div class="wcs_popup_header_description">Click one of our representatives below</div>
                </div>
                <div class="wcs_popup_person_container">
                    <div class="wcs_popup_person" data-number="+91 8882400643">
                        <div class="wcs_popup_person_img"><img src="/assets/frontend/images/whats_icon1.png" alt="" />
                        </div>
                        <div class="wcs_popup_person_content">
                            <div class="wcs_popup_person_name">Ahlawat & Associates</div>
                            <div class="wcs_popup_person_description">Ahlawat & Associates</div>
                            <div class="wcs_popup_person_status">I'm Online</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="contact_info_box d-flex  flex-column">
                    <img loading="lazy" src="/assets/frontend/images/footer_logo.png" alt=""/>
                    <a href="tel:{{ get_settings('mobile') }}" class="mobile">{{ get_settings('mobile') }}</a>
                    <a href="mailto:{{ get_settings('email') }}" class="email">{{ get_settings('email') }}</a>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="right_push_mob">
                    <div class="quick_links_box">
                        <h6 class="q_links_heading">Quick Links</h6>
                        <ul>
                            <li><a href="{{ url(route('about')) }}">Our
                                    Journey</a>
                            </li>
                            <li >
                                <a href="{{ url(route('practicearea')) }}">Our Expertise</a>
                            </li>
                            <li><a href="{{ url(route('career')) }}">Career </a>
                            </li>
                            <li><a href="{{ url(route('team')) }}">Our
                                    Professionals </a>
                            </li>
                            <li>
                                <a href="{{ url(route('contact')) }}">Contact Us </a>
                            </li>
                            <li><a href="{{ url(route('blog')) }}">Blogs </a>
                            </li>
                            <li><a href="{{ url(route('faq')) }}">FAQs </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                @include('frontend.component.footer_form')
            </div>
            <div class="col-md-4 mt-md-4 col-12">
                <a href="https://www.google.com/maps/place/%23TheHub/@28.5495141,77.2648649,17z/data=!3m1!4b1!4m6!3m5!1s0x390ce362dba5bca1:0x191c6dd29ebbec30!8m2!3d28.5495094!4d77.2674398!16s%2Fg%2F11h18n3l7n"
                    class="address_box">
                    <p class="title">Delhi (Head Office)</p>
                    <p>
                        {{ get_settings('delhi_address') }}
                    </p>
                </a>
            </div>
            <div class="col-md-4 mt-md-4 col-12">
                <a href="https://maps.app.goo.gl/RcJ5axxjePFqYTX68" class="address_box">
                    <p class="title">Mumbai</p>
                    <p>
                        {{ get_settings('mumbai_address') }}
                    </p>
                </a>
            </div>
            <div class="col-md-4 mt-md-4">
                <a href="https://maps.app.goo.gl/NGnUVsVvMeb6ERFv7" class="address_box">
                    <p class="title">Chandigarh</p>
                    <p >
                        {{ get_settings('chandigarh_address') }}
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>

<hr />

<!------------------ Contact End -------------------------->
<!------------------ footer Start -------------------------->

<footer class="footer">
    <div class="container">
        <div class="footer_count">

            @foreach($practice_Area as $row)
            @php $subcategory = DB::table('practice_areas')->where('parent_id', $row->id)->get(); @endphp

            @if(!$subcategory->isEmpty())
            <div class="footer_colums">
                <h6>{{ $row->title }}</h6>
                <ul>
                    @foreach($subcategory as $item)
                    <li><a href="{{ 
                                $item->special_service == '1' ? 
                                    url(route('practicearea-detail-specialised', ['slug' => $item->slug] )) :
                                    (
                                        $item->special_service == '2' ?
                                            url(route('practicearea-detail-page', ['slug' => $item->slug] )) :
                                            (
                                                $item->special_service == '3' ?
                                                    url(route('practicearea-detail-extra', ['slug1' => $item->slug] )) :
                                                    url(route('practicearea-detail', ['slug' => $item->slug] ))
                                            )
                                    )
                            }}">{{ $item->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12 mt-4">
                <p class="footer_text">
                    <?= nl2br(get_settings('footer_content')) ?>
                </p>
                <div
                    class="footer_bottom d-flex align-items-center text-md-start text-center justify-content-md-between  justify-content-center flex-md-row flex-column mb-md-0 ">
                    <p class="mb-md-0 mb-2">2024 Ahlawat. All Rights Reserved. </p>
                    <ul class="d-flex align-items-center gap-md-5 gap-3  mb-md-0 mb-2">
                        <li><a href="{{ url(route('privacy-policy')) }}">Privacy Policy </a></li>

                        @if(!empty(get_settings('cookie_content')))
                        <li><a href="{{ url(route('cookie-policy')) }}">Cookie Policy</a></li>
                        @endif
                    </ul>
                    <ul class="d-flex align-items-center gap-3 mb-md-0 mb-3">
                        <!-- <li>
                            <a href="{{ get_settings('instagram') }}"><img src="assets/frontend/images/instagram.png" alt="" /></a>
                        </li> -->
                        <li>
                            <a href="{{ get_settings('facebook') }}" target="_blank" aria-label="Facebook Link"><img src="assets/frontend/images/facebook.png" alt="" width="20" height="21" /></a>
                        </li>
                        <li>
                            <a href="{{ get_settings('twitter') }}" target="_blank" aria-label="Twitter Link"><img src="assets/frontend/images/twitter.png" alt="" width="23" height="21" /></a>
                        </li>
                        <li>
                            <a href="{{ get_settings('linkedin') }}" target="_blank" aria-label="Twitter Link"><img src="assets/frontend/images/linkedin_1.png" width="22" height="22" alt="" /></a>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="fix_footer">
        <a href="mailto:{{ get_settings('email') }}">
            <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
            <span>
                Mail
            </span>
        </a>
        <a href="tel:+{{ get_settings('mobile') }}">
            <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
            <span>
                Call
            </span>
        </a>
        <a href="https://api.whatsapp.com/send?phone={{ get_settings('whatsapp') }}">
            <span>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </span>
            <span>
                Whatsapp
            </span>
        </a>
		<a href="https://t.me/ahlawatassociates">
            <span>
                <i class="fa fa-telegram" aria-hidden="true"></i>
            </span>
            <span>
                Telegram
            </span>
        </a>


    </div>

    <div class="text-center">
        <button type="button" data-bs-toggle="modal" data-bs-target="#contact" class="menu_btn fix_btn">Contact Us
            Now</button>
    </div>
</footer>

<!--<style>
	h3 .load_pdf{background: #e73f3a; color: #fff !important; padding: 5px 15px 5px 50px; border-radius: 5px; font-weight: 400; display: table; font-size: 15px; margin: 10px auto; position: relative;}
	h3 .load_pdf span{display: table; width: 100%; font-size: 12px;}
	h3 .load_pdf:before{content: "\f019"; position: absolute; font-family: FontAwesome; font-size: 22px; color: #fff; left: 10px; top: 8px; font-weight: 300; border-right: solid 1px #fff; padding-right: 8px;}
    h3 .popup-outer{background: rgb(248,198,196); background: linear-gradient(0deg, rgba(248,198,196,1) 0%, rgba(255,255,255,1) 100%); width:750px; margin:0 auto; border-radius:15px; display:table;}

	.service_title_desc p .load_pdf{background: #e73f3a; color: #fff !important; padding: 5px 15px 5px 50px; border-radius: 5px; font-weight: 400; display: table; font-size: 15px; margin: 10px auto; position: relative; font-family: merriweather, serif !important;}
	.service_title_desc p .load_pdf span{display: table; width: 100%; font-size: 12px;}
	.service_title_desc p .load_pdf:before{    content: "\f019"; position: absolute; font-family: FontAwesome; font-size: 22px; color: #fff; left: 6px; top: 8px; font-weight: 300; border-right: solid 1px #fff; padding-right: 8px; padding: 5px 8px 5px 5px;}
    .popup-outer{background: rgb(248,198,196); background: linear-gradient(0deg, rgba(248,198,196,1) 0%, rgba(255,255,255,1) 100%); width:750px; margin:0 auto; border-radius:15px; display:table; border:solid 1px #f8c6c4}

	#download_pdf_id .modal-header{border: 0px; padding: 0px;}
	#download_pdf_id .modal-header .btn-close{right: 30px; top: 30px; position: absolute; z-index: 100;}
	#download_pdf_id .modal-content{max-width: 800px !important;}
	#download_pdf_id .modal-body{padding: 0px;}
	#download_pdf_id .modal-body .popup-outer{display: table; background: #fff; border-radius: 20px; width:100%;}
    .popup-outer .img{padding:40px 20px 40px 40px; float:left;}
    .popup-outer .field-area{padding:40px 20px; float:left; width:calc(100% - 280px)}
    .popup-outer .field-area .text{padding:10px 20px 0px 20px; font-family: "Merriweather", serif; !important; font-size:16px;}
    .popup-outer .field-area .text span{font-size:28px; font-weight:600; display:table;}
    .popup-outer .field-area .text-2{padding:0px 20px 10px 20px; font-family: "Merriweather", serif; !important; font-size:13px; color:#737373}
    .popup-outer .field-area .field{padding:0px 20px; display:inline-block; width:100%;}
    .popup-outer .field-area .field input{width:calc(100% - 101px); border:solid 1px #959595; border-radius:5px 0px 0px 5px; padding:10px; border-right:0px;}
    .popup-outer .field-area .field button{width:100px; background:#e73f3a; border:solid 1px #e73f3a; color:#fff; border-radius:0px 5px 5px 0px; padding:11px; border:0px;}
	.popup-outer .field-area .alert-success{top: 0px; text-align: center; padding: 10px; font-size: 13px; border-radius: 10px;}
	.popup-outer .field-area .alert-danger{top: 0px; text-align: center; padding: 10px; font-size: 13px; border-radius: 10px;}

	@media screen and (min-width: 300px) and (max-width: 991px) {
		.popup-outer{width:100%;}
		.popup-outer .field-area .text{padding: 10px 10px 0px 10px;}
		.popup-outer .field-area .text-2{padding: 0px 10px 10px 10px;}
		.popup-outer .field-area .field{padding:0px 10px 20px 10px;}
		#download_pdf_id .modal-body .popup-outer{display: grid;}
		.popup-outer .img{padding: 10px; width: 100%; float: unset; text-align:center; order:2}
		.popup-outer .field-area{float: unset; width: 100%; padding: 10px; order:1;}
		h3 .load_pdf{line-height: 18px;}
		h3 .load_pdf:before{padding: 7px 8px 7px 0px;}
		.popup-outer .field-area .alert-danger{border-radius: 5px; border: solid 1px #e73f3a; color: #000;}
	}
</style>  

<div class="modal" tabindex="-1" role="dialog" id="download_pdf_id">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="popup-outer">
                    <div class="img"><img src="https://www.ahlawatassociates.com/assets/frontend/images/popup-photo.png" alt="logo"></div>
                    <div class="field-area">
                        <div id="error_pdf_email"></div>
                        <div class="text">Are you looking to<span>set up a company in India?</span></div>
                        <div class="text-2">To know about the documentation requirement for setting up a company in India, please enter the following details and we will drop an "Incorporation Checklist" in your inbox.</div>
                        <div class="field"><input type="text" placeholder="Enter your email id" id="pdf_email"><button id="send_pdf">Submit</button></div> 
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>-->



<!------------------ footer End -------------------------->


<!--start cookies code-->
<div class="cookies_section" width="376" height="276">
    <div class="title-box">
        <i class="bx bx-cookie"></i>
        <h3> <img src="/assets/frontend/images/cookie_image.png" alt="" width="46" height="46" /> Cookies Consent</h3>
    </div>
    <div class="info">
        <p>
            We use cookies to help you navigate efficiently and perform certain functions. You will find detailed
            information about all cookies under each consent category below.
            <a href="{{url(route('cookie-policy'))}}"> Read more...</a>
        </p>
    </div>
    <div class="buttons">
        <button class="cookies_button" id="cookieAccept">Accept</button>
        <button class="cookies_button">Decline</button>
    </div>
</div>
<!--end cookies code-->
<style>
.desktop_whatsapp{position: fixed; bottom: 10px;}
.wcs_fixed_right{bottom: unset!important; left: 16px;}
.telegram{position: relative; bottom: unset; left: 16px; font-size: 46px; opacity: 1; color: #29a9ea; margin-top: 25px;}
.telegram span{margin-top: 13px; vertical-align: middle; cursor: pointer; display: inline-block; font-size: 11px; margin-left: 55px; background: #d4f3e6; padding: 5px 6px; border-radius: 4px; -webkit-transition: .3s ease all; -moz-transition: .3s ease all; transition: .3s ease all; position:absolute; color:#000; width:145px;}
.telegram a{color: #29a9ea;  animation-name: pulse; animation-duration: 1.5s; animation-timing-function: ease-out; animation-iteration-count: infinite; border-radius: 50%; width: 46px; height: 46px; display: flex; text-decoration: none;}
.telegram .fa{color: #29a9ea;}
.telegram a:hover{color: #29a9ea;}
.telegram .fa:hover{color: #29a9ea;}
.banner_section{max-height:307px;}
.info_image_cl{width:100%; height:auto;}
.team-member p{margin:0px; padding:0px;}
.about {padding-bottom:0px;}
.about .desc{text-align:justify;}
#awards_slider .awards_box img {height: auto !important; width: auto !important;}
@media screen and (min-width: 1150px) and (max-width: 1280px) {

}

@media screen and (min-width: 1024px) and (max-width: 1149.9px) {

}
@media screen and (min-width: 991px) and (max-width: 1023.9px) {

}

@media screen and (min-width: 768px) and (max-width: 990.9px) {
	.info_image_cl{width:100%; height:auto;}
    header {top: 35px;}
	.wrapper {width: 100%;}
	.wrapper nav {align-items: center; display: flex; height: 70px; justify-content: space-between;}
	.wrapper nav .m-menu__checkbox {display: none;}
	.wrapper nav label.m-menu__toggle {cursor: pointer;}
	.wrapper nav .m-menu__overlay {background-color: rgba(103, 103, 103, .5); position: absolute; top: 0; width: 100%; height: 100vh; bottom: 0; z-index: 1; display: none;}
	.wrapper nav .m-menu {background-color: #fff; height: 100vh; left: 0; max-width: 450px; overflow: hidden; position: absolute; top: 0; -webkit-transform: translate3d(-450px, 0, 0); transform: translate3d(-450px, 0, 0); transition: -webkit-transform .35s; transition: transform .35s; transition: transform .35s, -webkit-transform .35s; width: calc(100vw - 30px); z-index: 99999;}
	.wrapper nav .m-menu__header {padding: 0 16px; height: 70px; display: -ms-flexbox; display: -webkit-box; display: -webkit-flex; display: flex; -webkit-justify-content: space-around; justify-content: space-between; -ms-flex-pack: space-around; -webkit-align-items: center; align-items: center; border-bottom: 1px solid #e8e8e8;}
	.wrapper nav label.m-menu__toggle {cursor: pointer;}
	.wrapper nav .m-menu ul {height: 400px; overflow-y: auto; padding: 0;}
	.wrapper nav .m-menu ul li a, .wrapper nav .m-menu ul li label {display: block; text-align: left; padding: 0 15px; line-height: 47px; text-decoration: none; color: #333; cursor: pointer; font-size: 1rem; border-bottom: 1px solid #e8e8e8; position: relative;}
	.fix_footer {background: #fff; padding: 10px 20px; position: fixed; bottom: 0; width: 100%; left: 0; z-index: 9; display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #d3d3d394;}
	.fix_footer a {color: #000; display: flex; align-items: center; flex-direction: column; text-decoration: none; font-size: 14px;}
	.footer_bottom {margin-bottom: 83px !important;}
	.fix_btn {position: fixed; bottom: 70px; right: 10px; z-index: 99;}
	.logo img {width: 84px;}
}
@media screen and (min-width: 540px) and (max-width: 767.9px) {

}

@media screen and (min-width: 320px) and (max-width: 539.9px) {
.info_image_cl{width:100%; height:auto;}
}
</style>

