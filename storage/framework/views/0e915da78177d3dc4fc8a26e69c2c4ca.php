<?php
$media = DB::table('media_coverage')->where('status', 1)->orderBy('created_at', 'desc')->take(12)->get();
?>
<!---========= Media coverage ==========--------------->

<section class="media">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underline_heading d-flex align-items-center justify-content-center mt-5">
                    <h5 class="main_heading text-center" >Media</h5>
                </div>
                <h6 class="main_heading mb-md-2 text-center" >Media Coverages</h6>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="media_slider_carousel">
                    <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <a href="<?php echo e($row->url); ?>" class="media_link">
                            <div class="media_box" >
                                <img loading="lazy" src="<?php echo e(asset('storage/' . $row->image)); ?>" alt="<?php echo e(htmlspecialchars_decode($row->title)); ?>" />
                                <h4 class="title"><?php echo e(htmlspecialchars_decode($row->title)); ?></h4>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-center mt-3">
                    <a class="common_btn" href="<?php echo e(url(route('media-coverage'))); ?>">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---========= End Media coverage ==========---------------><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/frontend/component/media_coverage.blade.php ENDPATH**/ ?>