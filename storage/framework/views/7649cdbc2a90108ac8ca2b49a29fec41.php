<?php $__env->startSection('page.title', 'Ahlawat Associates: Top Lawyers &amp; Law Firms in Delhi, India'); ?>

<?php $__env->startSection('page.description', 'Ahlawat &amp; Associates is one of the best law firms in Delhi, India. We provide legal assistance for startups, FDI, Property law, IP, and more'); ?>

<?php $__env->startSection('page.type', 'website'); ?>

<?php $__env->startSection('page.content'); ?>



<!--  ----------------- 404 start --------------------- -->


<section class="404">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container_404 d-flex align-items-center justify-content-center flex-column">
                    <h2>404</h2>
                    <h4>Something’s missing.</h4>
                    <p>This page is missing or you assembled the link incorrectly.</p>
                    <a href="<?php echo e(url(route('index'))); ?>"><button>Go to Website</button></a>
                </div>
            </div>
        </div>
    </div>
</section>




<!--  ----------------- 404 End --------------------- -->







<!-- -------------- service get in touch  start ---------------------- -->


<?php echo $__env->make('frontend.component.get_in_touch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- -------------- service get in touch  end ---------------------- -->

<!------------------ awards_section Start -------------------------->
<?php echo $__env->make('frontend.component.awards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!------------------ awards_section End -------------------------->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/pages/404/index.blade.php ENDPATH**/ ?>