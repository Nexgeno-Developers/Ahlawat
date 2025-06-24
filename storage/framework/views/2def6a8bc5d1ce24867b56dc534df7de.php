<?php $__env->startSection('page.title', 'Ahlawat Associates: Top Lawyers & Law Firms in Delhi, India'); ?>

<?php $__env->startSection('page.description', 'Ahlawat & Associates is one of the best law firms in Delhi, India. We provide legal
assistance for startups, FDI, Property law, IP, and more'); ?>

<?php $__env->startSection('page.type', 'website'); ?>

<?php $__env->startSection('page.content'); ?>

<!-----===== home content start============---->

<?php
    $banner = json_decode(get_settings('Banner_1'));

    if(count($banner) != 1){
        $banner1 = array_shift($banner);
    } else {
        $banner1 = $banner[0];
    }

    function minify_html($input) {
    if(trim($input) === "") return $input;
    
    // Remove extra white spaces
    $search = [
        '/\>[^\S ]+/s',   // Strip whitespaces after tags, except space
        '/[^\S ]+\</s',   // Strip whitespaces before tags, except space
        '/(\s)+/s'        // Shorten multiple whitespace sequences
    ];

    $replace = [
        '>',
        '<',
        '\\1'
    ];

    $output = preg_replace($search, $replace, $input);

    return $output;
}

?>

<?php if(!empty($banner)): ?> 
    <section class="banner_section">
    
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
        <img src="<?php echo e(asset('storage/' . $banner1)); ?>" class="d-block w-100" alt="..." width="1200" height="345" style="aspect-ratio: 1200 / 345;">
        </div>

        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item">
            <img src="<?php echo e(asset('storage/' . $row)); ?>" class="d-block w-100" alt="..." width="1200" height="345" style="aspect-ratio: 1200 / 345;">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </section>
<?php endif; ?>

<!------------------ Banner End -------------------------->

<!------------------ awards_section Start -------------------------->
<?php echo $__env->make('frontend.component.awards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!------------------ awards_section End -------------------------->

<!------------------ About Start -------------------------->

<section class="about row">
	<div class="col-lg-6 px0">
		<div class="underline_heading">
			<h4 class="main_heading">Our Journey</h4>
		</div>
		<h2 class="main_heading mb-lg-4 mb-2"><?php echo e(get_settings('oj_home')); ?></h2>
		<?php
            $content = get_settings('oj_content');
            echo html_entity_decode(minify_html($content));
        ?>
	</div>

	<div class="col-md-6 px0">
        <!-- Preload and lazy load About Us image with reserved space -->
        <img rel="preload" loading="lazy" src="" data-src="/assets/frontend/images/about_us_img_new.jpg" alt="About Us" class="about_img" width="597" height="398" style="aspect-ratio: 597 / 398; height:auto!important;" />
	</div>
</section>

<!------------------ About End -------------------------->

<!-- -------------------- service counter start ---------------------- -->
<?php echo $__env->make('frontend.component.service_counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- -------------------- service counter  end ---------------------- -->

<!------------------ practice Start -------------------------->

<?php echo $__env->make('frontend.component.award_practice_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!------------------ practice End -------------------------->

<!------------------ news Start -------------------------->

<section class="news contentjstfy row">
    <div class="col-md-12 px0">
        <div class="news_box">
            <h1 class="main_heading mb-md-4 mb-2"><?php echo e(get_settings('ana_home')); ?></h1>
        </div>
    </div>
    
    <div class="col-lg-6 px0">
        <div class="news_box">
            <!-- Preload and lazy load news image with reserved space -->
            <img rel="preload" loading="lazy" src="" data-src="/assets/frontend/images/india_law.jpg" alt="India Law" width="597" height="249" style="aspect-ratio: 597 / 249; height:auto!important;" />
        </div>
    </div>
    
    <div class="col-lg-6 px0">
        <div class="news_box">
            <?php echo html_entity_decode(get_settings('ana_content')) ?>
        </div>
    </div>
</section>

<!------------------ news End -------------------------->

<!------------------ Team Start -------------------------->

<?php echo $__env->make('frontend.component.team_member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!------------------ Team End -------------------------->

<!------------------ media Start -------------------------->

<?php echo $__env->make('frontend.component.media_coverage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!------------------ media End -------------------------->

<!------------------ blog Start -------------------------->

<?php echo $__env->make('frontend.component.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!------------------ blog End -------------------------->

<!----------------------- home content end --------------->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/frontend/pages/home/index.blade.php ENDPATH**/ ?>