<?php $__env->startSection('page.title', 'Ahlawat Associates: Top Lawyers &amp; Law Firms in Delhi, India'); ?>

<?php $__env->startSection('page.description', 'Ahlawat &amp; Associates is one of the best law firms in Delhi, India. We provide legal
assistance for startups, FDI, Property law, IP, and more'); ?>

<?php $__env->startSection('page.type', 'website'); ?>

<?php $__env->startSection('page.content'); ?>

<!-- -------------------- About banner start ---------------- -->

<section class="about_page_banner breadcrumes_padd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h4 class="heading">Our Journey</h4>
                    <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item home">
                                <a href="<?php echo e(url(route('index'))); ?>" data-aos="fade-up" data-aos-once="true">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Our Journey
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- -------------------- About banner end   ---------------- -->

<!-- -------------------- About Content start ---------------- -->

<section class="about_page_content pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 padd00mb">

                <?php echo html_entity_decode(get_settings('about_us_content1')) ?>
                
            </div>
        </div>
    </div>
</section>

<!-- -------------------- About Content end   ---------------- -->

<!------ counter_section Start -------------------------->

<?php echo $__env->make('frontend.component.service_counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!---------- counter_section End -------------------------->
<!-- -------------------- About Content start ---------------- -->

<section class="about_page_content_2 pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 padd00mb">
                <?php echo html_entity_decode(get_settings('about_us_content2')) ?>
            </div>
        </div>
    </div>
</section>

<!-- -------------------- About Content end   ---------------- -->
<!-- ---------- service get in touch  start ---------------------- -->

<?php echo $__env->make('frontend.component.get_in_touch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- -------------- service get in touch  end ---------------------- -->

<!------------------ awards_section Start -------------------------->
<?php echo $__env->make('frontend.component.awards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!------------------ awards_section End -------------------------->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/pages/about/index.blade.php ENDPATH**/ ?>