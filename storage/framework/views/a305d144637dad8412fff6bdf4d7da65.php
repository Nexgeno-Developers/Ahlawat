<?php
//$team = DB::table('teams')->where('is_home', 1)->orderBy('series', 'asc')->get();

$cacheKey = "team_member";

// Check if the value is already in the cache
if (Cache::has($cacheKey)) {
    $team =Cache::get($cacheKey);
    $team = json_decode($team);
}
else {
    $team = DB::table('teams')->where('status', 1)->limit(6)->orderBy('series', 'asc')->get();
    
    Cache::put($cacheKey, json_encode($team), now()->addMinutes(60));
}

?>
<!----------------================= Team start =======================-------------->
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12  px0">
                <div class="underline_heading d-flex align-items-center justify-content-center mb-md-0 mb-3">
                    <h5 class="main_heading text-center" >Our <span class="main_heading_color">Professionals</span></h5>
                </div>
                
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="banner_slider_carousel">

                    <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="item" >
                        <a href="<?php echo e(url(route('team.detail', ['slug' => strtolower(str_replace(' ', '-',$row->name))] ))); ?>"
                            class="text-decoration-none">
                            <div class="team_box">
                                <div class="hover_img">
                                    <img loading="lazy" src="<?php echo e(asset('storage/' . $row->image)); ?>" alt="<?php echo e(ucfirst($row->name)); ?>" class="team_img" width="100%" height="430"/>
                                </div>

                                <div class="d-flex align-items-center justify-content-center team_bio_container">
                                    <p class="team_bio_box">
                                        <span class="name text-decoration-none"><?php echo e(ucfirst($row->name)); ?></span>
                                        <span class="role text-decoration-none"><?php echo e(ucfirst($row->designation)); ?></span>
                                    </p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!----------------================= Team start =======================-------------->
<?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/component/team_member.blade.php ENDPATH**/ ?>