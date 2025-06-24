<?php
$blog = DB::table('blogs')->where('status', 1)->whereJsonContains('blog_category_ids',
'3')->limit(6)->orderBy('created_at', 'desc')->get();
$right_news = DB::table('blogs')->where('status', 1)->whereJsonContains('blog_category_ids',
'4')->limit(10)->orderBy('created_at', 'desc')->get();
?>
<?php if(count($blog) > 1): ?>
<!-------============= blog ================---------------------->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 px0">
                <div class="underline_heading" >
                    <h6 class="main_heading">Latest Blogs</h6>
                </div>
                <h1 class="main_heading mb-4" >
                    Enhance your legal knowledge <br> with <a href="<?php echo e(url(route('blog'))); ?>" class="main_heading_color text-decoration-none cursor-pointer">Blogs</a>
                </h1>
                <div class="row">
					<div class="col-md-12">
                        <div class="owl-carousel owl-theme" id="blog_slider">
                            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="blog_big_box" >
										<img loading="lazy" src="" data-src="<?php echo e(asset('storage/' .$row->main_image)); ?>" alt="<?php echo e($row->title); ?>" class="blog_img" width="390" height="116" />
										<div class="blog_content">
											<p>
												<?php echo e($row->title); ?>

											</p>
											<a href="<?php echo e(url(route('blog.detail', ['category' =>'blog', 'slug' => strtolower(str_replace(' ', '-',$row->slug))] ))); ?>">View More</a>
										</div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px0 ">
                <h2 class="heading mb-4 mt-4">
                    Get yourself updated with A&amp;A
                    <a href="<?php echo e(url(route('news'))); ?>"
                        class="main_heading_color text-decoration-none cursor-pointer">Newscast!</a>
                </h2>
				<div class="marquee main_marque ">
					<?php $__currentLoopData = $right_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="item">
						<div class="blog_right_box">
							<img loading="lazy" src="" data-src="<?php echo e(asset('storage/' .$row->main_image)); ?>" alt="<?php echo e($row->title); ?>"  width="160" height="47" />
							<div>
								<p class="desc">
									<?php echo e($row->title); ?>

								</p>
								<a href="<?php echo e(url(route('blog.detail', ['category' =>'news', 'slug' => strtolower(str_replace(' ', '-',$row->slug))] ))); ?>">View More</a>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!----------============== blog =============-------------><?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/component/blog.blade.php ENDPATH**/ ?>