<?php

$cacheKey = "awards";

// Check if the value is already in the cache
if (Cache::has($cacheKey)) {
    $awards =Cache::get($cacheKey);
    $awards = json_decode($awards);
}
else {
    $awards = DB::table('awards')->where('status', 1)->orderBy('series', 'asc')->get();
    Cache::put($cacheKey, json_encode($awards), now()->addMinutes(60));
}

?>

<!--------=========== Awards =========================------------------------>
<?php if(count($awards) >= 1): ?>
<section class="awards_section about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 px0">
                <div class="underline_heading d-flex align-items-center justify-content-center mb-md-0 mb-3">
                    <h2 class="main_heading text-center " >Awards &
                    Recognitions</h2>
                </div>

                <div class="owl-carousel owl-theme" id="awards_slider">

                    <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="item" >
                        <div class="awards_box">
                            <h4><?php echo e($row->title); ?></h4>
                            <img class="lazyload" src="<?php echo e(asset('storage/'. $row->image)); ?>" alt="<?php echo e($row->title); ?>"  width="160" height="48"/>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<!--------------================= end Awards ================------------------->
<?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/component/awards.blade.php ENDPATH**/ ?>