<!-- <?php $__env->startSection('page.title', 'Practice Areas | Leading Law firms in India – Ahlawat & Associates'); ?> -->
<?php $__env->startSection('page.title', 'Practice Areas-Leading Law firms in India'); ?>

<?php $__env->startSection('page.description', 'Ahlawat & Associates is one of the leading law firms in India having expertise in diverse
legal areas including corporate law, intellectual property, litigation, and real estate.'); ?>

<?php $__env->startSection('page.type', 'practice area'); ?>

<?php $__env->startSection('page.content'); ?>


<!-------===========practicearea list start===================------------>
<section class="faq_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="heading">Our Expertise</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item home">
                                <a href="<?php echo e(url(route('index'))); ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Our Expertise
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------- practice area box start ---------------- -->
<section class="practice_w_box">
    <div class="container">
        <div class="row">
            <?php
                // Sorting the subcategory collection by the 'title' attribute
                $sortedPracticearea = $practiceAreas->sortBy('title');
            ?>
            <?php $__currentLoopData = $sortedPracticearea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-2 px0">
                        <a href="<?php echo e($row->special_service == '1' ?
                url(route('practicearea-detail-specialised', ['slug' => $row->slug])) :
                (
                    $row->special_service == '2' ?
                    url(route('practicearea-detail-page', ['slug' => $row->slug])) :
                    (
                        $row->special_service == '3' ?
                        url(route('practicearea-detail-extra', ['slug1' => $row->slug])) :
                        url(route('practicearea-detail', ['slug' => $row->slug]))
                    )
                )); ?>" class="btn_hover btn-3 hover-border-5 text-center ">
                            <span><?php echo e($row->title); ?></span>
                        </a>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- ------------------- practice area box end ---------------- -->

<!-- ---------- service get in touch  start ---------------------- -->

<?php echo $__env->make('frontend.component.get_in_touch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- -------------- service get in touch  end ---------------------- -->

<!------------------ awards_section Start -------------------------->
<?php echo $__env->make('frontend.component.awards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!------------------ awards_section End -------------------------->

<!-------===========practicearea end===================------------>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/pages/practicearea/index.blade.php ENDPATH**/ ?>