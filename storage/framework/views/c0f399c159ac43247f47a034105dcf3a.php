<?php
$practice_Area = DB::table('practice_areas')
->whereIn('id', ['7', '9', '11', '8', '10', '12', '13', '14'])
->orderByRaw("FIELD(id, '7', '9', '11', '8', '10', '12', '13', '14')")
->get();
?>
<!--------------------footer start----------------------------->
<!------------------ Contact Start -------------------------->

<section class="contact">

   

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="contact_info_box d-flex  flex-column">
                    <img loading="lazy" src="/assets/frontend/images/footer_logo.png" alt="" height="200" width="200"/>
                    <a href="tel:<?php echo e(get_settings('mobile')); ?>" class="mobile"><?php echo e(get_settings('mobile')); ?></a>
                    <a href="mailto:<?php echo e(get_settings('email')); ?>" class="email"><?php echo e(get_settings('email')); ?></a>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="right_push_mob">
                    <div class="quick_links_box">
                        <h6 class="q_links_heading">Quick Links</h6>
                        <ul>
                            <li><a href="<?php echo e(url(route('about'))); ?>">Our
                                    Journey</a>
                            </li>
                            <li >
                                <a href="<?php echo e(url(route('practicearea'))); ?>">Our Expertise</a>
                            </li>
                            <li><a href="<?php echo e(url(route('career'))); ?>">Career </a>
                            </li>
                            <li><a href="<?php echo e(url(route('team'))); ?>">Our
                                    Professionals </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url(route('contact'))); ?>">Contact Us </a>
                            </li>
                            <li><a href="<?php echo e(url(route('blog'))); ?>">Blogs </a>
                            </li>
                            <li><a href="<?php echo e(url(route('faq'))); ?>">FAQs </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo $__env->make('frontend.component.footer_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-4 mt-md-4 col-12">
                <a href="https://www.google.com/maps/place/%23TheHub/@28.5495141,77.2648649,17z/data=!3m1!4b1!4m6!3m5!1s0x390ce362dba5bca1:0x191c6dd29ebbec30!8m2!3d28.5495094!4d77.2674398!16s%2Fg%2F11h18n3l7n"
                    class="address_box">
                    <p class="title">Delhi (Head Office)</p>
                    <p>
                        <?php echo e(get_settings('delhi_address')); ?>

                    </p>
                </a>
            </div>
            <div class="col-md-4 mt-md-4 col-12">
                <a href="https://maps.app.goo.gl/RcJ5axxjePFqYTX68" class="address_box">
                    <p class="title">Mumbai</p>
                    <p>
                        <?php echo e(get_settings('mumbai_address')); ?>

                    </p>
                </a>
            </div>
            <div class="col-md-4 mt-md-4">
                <a href="https://maps.app.goo.gl/NGnUVsVvMeb6ERFv7" class="address_box">
                    <p class="title">Chandigarh</p>
                    <p >
                        <?php echo e(get_settings('chandigarh_address')); ?>

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

            <?php $__currentLoopData = $practice_Area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $subcategory = DB::table('practice_areas')->where('parent_id', $row->id)->get(); ?>

            <?php if(!$subcategory->isEmpty()): ?>
            <div class="footer_colums">
                <h6><?php echo e($row->title); ?></h6>
                <ul>
                    <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e($item->special_service == '1' ? 
                                    url(route('practicearea-detail-specialised', ['slug' => $item->slug] )) :
                                    (
                                        $item->special_service == '2' ?
                                            url(route('practicearea-detail-page', ['slug' => $item->slug] )) :
                                            (
                                                $item->special_service == '3' ?
                                                    url(route('practicearea-detail-extra', ['slug1' => $item->slug] )) :
                                                    url(route('practicearea-detail', ['slug' => $item->slug] ))
                                            )
                                    )); ?>"><?php echo e($item->title); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row">
            <div class="col-md-12 mt-4">
                <p class="footer_text">
                    <?= nl2br(get_settings('footer_content')) ?>
                </p>
                <div
                    class="footer_bottom d-flex align-items-center text-md-start text-center justify-content-md-between  justify-content-center flex-md-row flex-column mb-md-0 ">
                    <p class="mb-md-0 mb-2">2025 Ahlawat. All Rights Reserved. </p>
                    <ul class="d-flex align-items-center gap-md-5 gap-3  mb-md-0 mb-2">
                        <li><a href="<?php echo e(url(route('terms-conditions'))); ?>">Terms & Conditions </a></li>
                        <li><a href="<?php echo e(url(route('privacy-policy'))); ?>">Privacy Policy </a></li>

                        <?php if(!empty(get_settings('cookie_content'))): ?>
                        <li><a href="<?php echo e(url(route('cookie-policy'))); ?>">Cookie Policy</a></li>
                        <?php endif; ?>
                    </ul>
                    <ul class="d-flex align-items-center gap-3 mb-md-0 mb-3">
                        
                        <li>
                            <a href="<?php echo e(get_settings('facebook')); ?>" target="_blank" aria-label="Facebook Link"><img loading="lazy" src="assets/frontend/images/facebook.png" alt="" width="20" height="21" /></a>
                        </li>
                        <li>
                            <a href="<?php echo e(get_settings('twitter')); ?>" target="_blank" aria-label="Twitter Link"><img loading="lazy" src="assets/frontend/images/twitter.png" alt="" width="23" height="21" /></a>
                        </li>
                        <li>
                            <a href="<?php echo e(get_settings('linkedin')); ?>" target="_blank" aria-label="Twitter Link"><img loading="lazy" src="assets/frontend/images/linkedin_1.png" width="22" height="22" alt="" /></a>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="fix_footer">
        <a href="mailto:<?php echo e(get_settings('email')); ?>">
            <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
            <span>
                Mail
            </span>
        </a>
        <a href="tel:+<?php echo e(get_settings('mobile')); ?>">
            <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
            <span>
                Call
            </span>
        </a>
        <a href="https://api.whatsapp.com/send?phone=<?php echo e(get_settings('whatsapp')); ?>">
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
<!-- <div class="cookies_section" width="376" height="276">
    <div class="title-box">
        <i class="bx bx-cookie"></i>
        <h3> <img src="/assets/frontend/images/cookie_image.png" alt="" width="46" height="46" /> Cookies Consent</h3>
    </div>
    <div class="info">
        <p>
            We use cookies to help you navigate efficiently and perform certain functions. You will find detailed
            information about all cookies under each consent category below.
            <a href="<?php echo e(url(route('cookie-policy'))); ?>"> Read more...</a>
        </p>
    </div>
    <div class="buttons">
        <button class="cookies_button" id="cookieAccept">Accept</button>
        <button class="cookies_button">Decline</button>
    </div>
</div> -->
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
.blog_big_box .blog_content img[alt="author"]{width: auto; height: auto;}
.blog_big_box .blog_content img[alt="calender"]{width: auto; height: auto;}
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
.about .about_img {width: 100%; height: auto;}
.news img {width: 100%; height: auto;}
.about_counter_icon{text-align: center; display: table; margin: 0 auto;}
.about_counter_img{width: 60px; height: 60px; padding: 0px 0px 0px 0px; margin: 0 auto !important; line-height: normal; vertical-align: middle; display: table-cell;}
.about_counter_img img{width: auto; height: auto; margin: 0px !important;}
.news.contentjstfy.row{margin: 0px; padding: 10px;}
.about.row{margin: 0px; padding: 10px;}
.row.main-frame{margin: 0px;}
}
</style>

<?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/partials/footer.blade.php ENDPATH**/ ?>