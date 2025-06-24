<?php $__env->startSection('page.name', 'Practice Area'); ?>

<?php $__env->startSection('page.content'); ?>
<div class="card">
   <div class="card-body">
      <div class="row mb-2">
         <div class="col-sm-5">
            
         </div>
         <div class="col-sm-7">
            <div class="text-sm-end">
                <a href="javascript:void(0);" class="btn btn-danger mb-2" onclick="largeModal('<?php echo e(url(route('practicearea.add'))); ?>', 'Add Practice Area')"><i class="mdi mdi-plus-circle me-2"></i> Add Practice Area</a>
            </div>
         </div>
         <!-- end col-->
      </div>
      <div class="table-responsive">
      <table id="basic-datatable" class="table dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php $__currentLoopData = $practicearea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($row->title); ?></td>
                <td>
                    <a target="_blank" href="<?php echo e($row->special_service == '1' ? 
                            url(route('practicearea-detail-specialised', ['slug' => $row->slug] )) :
                            (
                                $row->special_service == '2' ?
                                    url(route('practicearea-detail-page', ['slug' => $row->slug] )) :
                                    (
                                        $row->special_service == '3' ?
                                            url(route('practicearea-detail-extra', ['slug1' => $row->slug] )) :
                                            url(route('practicearea-detail', ['slug' => $row->slug] ))
                                    )
                            )); ?>"><?php echo e($row->slug); ?></a>
                </td>                
                <td>
                    <?php if($row->status): ?>
                    <span class="badge bg-success">Active</span>
                    <?php else: ?>
                    <span class="badge bg-danger">Inctive</span>
                    <?php endif; ?>
                </td>
                <td><?php echo e(datetimeFormatter($row->created_at)); ?></td>
                <td>
                    <a href="<?php echo e(url(route('practicearea.status', ['id' => $row->id, 'status' => ($row->status == '1') ? '0' : '1']))); ?>" class="action-icon">
                        <?php if($row->status == '1'): ?>
                            <i class="ri-eye-off-fill" title="Inactive"></i>
                        <?php else: ?>
                            <i class="ri-eye-fill" title="Active"></i>
                        <?php endif; ?>
                    </a>

                    <a href="javascript:void(0);" class="action-icon" onclick="largeModal('<?php echo e(url(route('practicearea.view',['id' => $row->id]))); ?>', 'View Practice Area')"> <i class="mdi mdi-account-eye" title="View"></i></a>

                    <a href="javascript:void(0);" class="action-icon" onclick="largeModal('<?php echo e(url(route('practicearea.edit',['id' => $row->id]))); ?>', 'Edit Practice Area')"> <i class="mdi mdi-square-edit-outline" title="Edit"></i></a>

                    <a href="javascript:void(0);" class="action-icon" onclick="confirmModal('<?php echo e(url(route('practicearea.delete', $row->id))); ?>', responseHandler)"><i class="mdi mdi-delete" title="Delete"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
      </div>
   </div>
   <!-- end card-body-->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page.scripts"); ?>
<script>
    var responseHandler = function(response) {
        location.reload();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/backend/pages/practicearea/index.blade.php ENDPATH**/ ?>