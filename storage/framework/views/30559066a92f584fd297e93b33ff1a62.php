<?php $__env->startSection('page.name', 'Dashboard'); ?>

<?php $__env->startSection('page.content'); ?>
<div class="col-12">
   <div class="card widget-inline">
      <div class="card-body p-0">
         <div class="row g-0">
            <div class="col-sm-6 col-lg-3">
               <div class="card rounded-0 shadow-none m-0">
                  <div class="card-body text-center">
                     <i class="ri-suitcase-line text-muted font-24"></i>
                     <h3><span><?php echo e($practiceAreaCount); ?></span></h3>
                     <p class="text-muted font-15 mb-0">Practice Areas</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="card rounded-0 shadow-none m-0 border-start border-light">
                  <div class="card-body text-center">
                     <i class="ri-article-line text-muted font-24"></i>
                     <h3><span><?php echo e($postCount); ?></span></h3>
                     <p class="text-muted font-15 mb-0">Posts</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="card rounded-0 shadow-none m-0 border-start border-light">
                  <div class="card-body text-center">
                     <i class="ri-group-2-line text-muted font-24"></i>
                     <h3><span><?php echo e($teamCount); ?></span></h3>
                     <p class="text-muted font-15 mb-0">Team Members</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="card rounded-0 shadow-none m-0 border-start border-light">
                  <div class="card-body text-center">
                     <i class="ri-bar-chart-2-line text-muted font-24"></i>
                     <h3><span><?php echo e($contactCount); ?></span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                     <p class="text-muted font-15 mb-0">Leads</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- end row -->
      </div>
   </div>
   <!-- end card-box-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/backend/pages/dashboard/index.blade.php ENDPATH**/ ?>