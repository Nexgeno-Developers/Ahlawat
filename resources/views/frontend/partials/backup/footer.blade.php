@php
$practice_Area = DB::table('practice_areas')
->whereIn('id', ['7', '9', '11', '8', '10', '12', '13', '14'])
->orderByRaw("FIELD(id, '7', '9', '11', '8', '10', '12', '13', '14')")
->get();
@endphp
<!--------------------footer start----------------------------->
<!------------------ Contact Start -------------------------->

<section class="contact">

   

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
                    <p class="mb-md-0 mb-2">2023 Ahlawat. All Rights Reserved. </p>
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
                            <a href="{{ get_settings('facebook') }}" target="_blank" aria-label="Facebook Link"><img
                                    src="assets/frontend/images/facebook.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{ get_settings('twitter') }}" target="_blank" aria-label="Twitter Link"><img
                                    src="assets/frontend/images/twitter.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{ get_settings('linkedin') }}" target="_blank" aria-label="Twitter Link"><img
                                    src="assets/frontend/images/linkedin_1.png" alt="" /></a>
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





<!------------------ footer End -------------------------->


<!--start cookies code-->
<div class="cookies_section">
    <div class="title-box">
        <i class="bx bx-cookie"></i>
        <h3> <img src="/assets/frontend/images/cookie_image.png" alt="" /> Cookies Consent</h3>
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

<div class="cookies_section">
    <div class="title-box">
        <i class="bx bx-cookie"></i>
        <h3> <img src="/assets/frontend/images/cookie_image.png" alt="" /> Cookies Consent</h3>
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
.wcs_fixed_right{bottom: -33px!important;}
.telegram{ position: fixed; z-index: 1000; bottom: 26px; left: 16px; font-size: 46px; opacity: 1; color: #29a9ea;}
.telegram span{margin-top: 13px; vertical-align: middle; cursor: pointer; display: inline-block; font-size: 11px; margin-left: 55px; background: #d4f3e6; padding: 5px 6px; border-radius: 4px; -webkit-transition: .3s ease all; -moz-transition: .3s ease all; transition: .3s ease all; position:absolute; color:#000; width:145px;}
.telegram a{color: #29a9ea;  animation-name: pulse; animation-duration: 1.5s; animation-timing-function: ease-out; animation-iteration-count: infinite; border-radius: 50%; width: 46px; height: 46px; display: flex; text-decoration: none;}
.telegram .fa{color: #29a9ea;}
.telegram a:hover{color: #29a9ea;}
.telegram .fa:hover{color: #29a9ea;}
</style>
<div class="telegram d-none d-md-block"><a href="https://t.me/ahlawatassociates" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i><span>Need Help? Chat with us</span></a></div>
