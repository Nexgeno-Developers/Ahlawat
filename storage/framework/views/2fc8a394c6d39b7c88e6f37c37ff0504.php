<form id="edit_practicearea_form" action="<?php echo e(url(route('practicearea.update'))); ?>" method="post" enctype="multipart/form-data"> <?php echo csrf_field(); ?>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h4 class="header-title"><b>Overview</b></h4>
							<hr> </div>
						<input type="hidden" name="id" value="<?php echo e($practicearea->id); ?>">
						<div class="col-sm-6">
							<div class="form-group mb-3">
								<label>Title <span class="red">*</span></label>
								<input type="text" class="form-control" name="title" value="<?php echo e($practicearea->title); ?>" required> </div>
						</div>
						<div class="col-sm-6">
							<div class="form-group mb-3">
								<label>Short Description <span class="red">*</span></label>
								<input type="text" class="form-control" name="short_description" value="<?php echo e($practicearea->short_description); ?>" required> </div>
						</div>
						<div class="col-sm-6">
							<div class="form-group mb-3">
								<label>Slug <span class="red">*</span></label>
								<input type="text" class="form-control" name="slug" value="<?php echo e($practicearea->slug); ?>" required> </div>
						</div>
						<div class="col-sm-6">
							<div class="form-group mb-3">
								<label>Main Practice Area</label>
								<select class="form-select select2" name="parent_id">
									<option value="">--Select--</option> 
									<?php $__currentLoopData = $allpracticearea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($row->id); ?>" <?php if( $row->id == $practicearea->parent_id ): ?> selected <?php endif; ?>><?php echo e($row->title); ?></option> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-3">
								<label>Content <span class="red">*</span></label>
								<textarea class="form-control trumbowyg" name="content" rows="5" required><?php echo e($practicearea->content); ?></textarea>
							</div>
						</div>
						<div class="col-sm-12 d-none">
							<div class="form-group mb-3">
								<label>Focus Area</label>
								<input type="hidden" class="form-control" name="focus_area" value="<?php echo e($practicearea->focus_area); ?>"> </div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-3">
								<label>Focus Area <span class="red">*</span></label>
								<select class="form-select select2" name="focus_area[]" multiple>
									<option value="" disabled>Select Focus Area</option>
									<?php $__currentLoopData = $allpracticearea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($row->id); ?>" <?php if(in_array($row->id, json_decode($practicearea->focus_area, true))): ?> selected <?php endif; ?>>
											<?php echo e($row->title); ?>

										</option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select> 
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-3">
								<label>Why Choose Us </label>
								<textarea class="form-control trumbowyg" name="why_choose_us" rows="5"><?php echo e($practicearea->why_choose_us); ?></textarea>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group mb-3">
								<label>FAQs</label>
								<div id="faq_add_more" style="margin: 10px;"> <?php $i = 1; $faq = json_decode($practicearea->faq); if (!empty($faq)) { foreach ($faq as $fkey => $fvalue) { $farr_value = (array)$fvalue; foreach ($farr_value as $fkey1 => $fvalue1) { ?>
									<div class="faq">
										<div class="form-group">
											<div class="row">
												<div class="col-md-11">
													<div class="row">
														<input type="text" style="margin-bottom: 3px;" class="form-control" name="faq[]" placeholder="Enter Question here..." value="<?php echo e($fkey1); ?>"> <span class="glyphicon form-control-feedback"></span>
														<textarea class="form-control trumbowyg" name="faq_description[]" rows="5" placeholder="Enter Answer here..."><?php echo e($fvalue1); ?></textarea>
													</div>
												</div>
												<div class="col-md-1"> <?php if($i == 1): ?> <i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;" class="ri-add-circle-fill" id="add_faq"></i> <?php else: ?> <i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_faq($(this));"></i> <?php endif; ?> </div>
											</div>
										</div>
										</br>
									</div> <?php $i++; } ?> <?php } ?> <?php } else { ?>
									<div class="form-group">
										<div class="row">
											<div class="col-md-11">
												<div class="row">
													<input type="text" style="margin-bottom: 3px;" class="form-control" name="faq[]" placeholder="Enter Question here..."> <span class="glyphicon form-control-feedback"></span>
													<textarea class="form-control trumbowyg" name="faq_description[]" rows="5" placeholder="Enter Answer here..."></textarea>
												</div>
											</div>
											<div class="col-md-1"> <i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;" class="ri-add-circle-fill" id="add_faq"></i> </div>
										</div>
										</br>
									</div> <?php } ?> </div>
							</div>
						</div>
						<div class="col-sm-12">
						    <div class="form-group mb-3">
						        <label>Popup Content </label>
						        <br />
						        <span>Please remain empty to set default</span>
						        <textarea class="form-control trumbowyg" name="popup_content" rows="2" ><?php echo e($practicearea->popup_content); ?></textarea> 
						    </div>
						</div>
						<div class="col-sm-6">
							<div class="form-group mb-3">
								<label>Breadcrumb Title <span class="red">*</span></label>
								<input type="text" class="form-control" name="breadcrumb_title" value="<?php echo e($practicearea->breadcrumb_title); ?>" required> </div>
						</div>
						<div class="col-sm-6">
							<div class="form-group mb-3">
								<label>Breadcrumb Subtitle <span class="red">*</span></label>
								<input type="text" class="form-control" name="breadcrumb_subtitle" value="<?php echo e($practicearea->breadcrumb_subtitle); ?>" required> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="col-md-12">
						<h4 class="header-title">SEO</h4>
						<hr> </div>
					<div class="col-sm-12">
						<div class="form-group mb-3">
							<label>Meta Title <span class="red">*</span></label>
							<input type="text" class="form-control" name="meta_title" value="<?php echo e($practicearea->meta_title); ?>" required> </div>
					</div>
					<div class="col-sm-12">
						<div class="form-group mb-3">
							<label>Meta Description <span class="red">*</span></label>
							<textarea class="form-control" name="meta_description" rows="3" required><?php echo e($practicearea->meta_description); ?></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h4 class="header-title"><b>Image</b></h4>
							<hr> </div>
						<div class="col-sm-9">
							<div class="form-group mb-3">
								<label>Breadcrumb Image </span><span class="font-size11">(Max file size 80kb - 1125*196)</label>
								<input class="form-control mb-1" type="file" id="breadcrumb_image" name="breadcrumb_image">
							    <?php if($practicearea->breadcrumb_image): ?> 
							    	<input id="breadcrumb_image_check" type="checkbox" name="breadcrumb_image_check" value="1"> <label for="breadcrumb_image_check">Remove breadcrumb image</label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-3">
					    	<?php if($practicearea->breadcrumb_image): ?> 
					    		<img src="<?php echo e(asset('storage/' . $practicearea->breadcrumb_image)); ?>" class="img-thumbnail"> 
							<?php endif; ?>
						</div>
						<div class="col-sm-9">
							<div class="form-group mb-3">
								<label>Thumnail Icon <span class="font-size11">(Max file size 5kb - 70*70)</span></label>
								<input class="form-control mb-1" type="file" id="image" name="image">
								<?php if($practicearea->thumnail_image): ?>
							    	<input id="image_check" type="checkbox" name="image_check" value="1"> <label for="image_check">Remove thumnail icon</label>
							    <?php endif; ?>
							</div>
						</div>
						<div class="col-md-3">
					    	<?php if($practicearea->thumnail_image): ?> 
					    		<img src="<?php echo e(asset('storage/' . $practicearea->thumnail_image)); ?>" class="img-thumbnail"> 
							<?php endif; ?>
						</div>
						<div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Alt Thumnail Image</label>
                                <input type="text" class="form-control" name="alt_thumnail_image" value="<?php echo e($practicearea->alt_thumnail_image); ?>">
                            </div>
                        </div>						
						<div class="col-sm-9">
							<div class="form-group mb-3">
								<label>Section Image <span class="font-size11">(Max file size 80kb - 1125*460)</span></label>
								<input class="form-control mb-1" type="file" id="section_image" name="section_image">
								<?php if($practicearea->section_image): ?>
							    	<input id="section_image_check" type="checkbox" name="section_image_check" value="1"> <label for="section_image_check">Remove section image</label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-3">
					    	<?php if($practicearea->section_image): ?> 
					    		<img src="<?php echo e(asset('storage/' . $practicearea->section_image)); ?>" class="img-thumbnail"> 
							<?php endif; ?>
						</div>
						<div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Alt Section Image</label>
                                <input type="text" class="form-control" name="alt_section_image" value="<?php echo e($practicearea->alt_section_image); ?>">
                            </div>
                        </div>
						<div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Section Image Link</label>
                                <input type="text" class="form-control" name="section_link" value="<?php echo e($practicearea->section_link); ?>">
                            </div>
                        </div>
						<div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Special Service</label>
                                <select class="form-select" name="special_service">
                                    <option value="0" <?php if( $practicearea->special_service == '0'): ?> selected <?php endif; ?>>--Select--</option>
                                    <option value="1" <?php if( $practicearea->special_service == '1'): ?> selected <?php endif; ?>>Specialised Services</option>
                                    <option value="2" <?php if( $practicearea->special_service == '2'): ?> selected <?php endif; ?>>Page</option>
									<option value="3" <?php if( $practicearea->special_service == '3'): ?> selected <?php endif; ?>>Inner Page</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Attach PDF <span class="font-size11">&nbsp;</span></label>
                                <input class="form-control" type="file" id="pdf_path" name="pdf_path">
                            	<?php if($practicearea->pdf_path): ?>
	                            	<a href="<?php echo e(asset('storage/' . $practicearea->pdf_path)); ?>" class="btn btn-large pull-right" target="_blank">
	                            	    <i class="icon-download-alt"></i> Download Attached PDF
	                            	</a>
	                            	<br />
                                	<input id="pdf_path_check" type="checkbox" name="pdf_path_check" value="1" > <label for="pdf_path_check">Remove PDF file</label>
                                	<label>Please use ##LOAD_PDF## keyword to show in 'Content'.</label>
                                	<label>Note: It will work when PDF uploaded</label>
                            	<?php endif; ?>
                            </div>
                        </div> 
                        <div class="col-sm-9"> 
                        	<div class="form-group mb-3"> 
                        		<label>Info Image <span class="font-size11">(Max file size 80kb - 1125*460)</span></label>
                        		<input class="form-control mb-1" type="file" id="info_image" name="info_image">
                        		<br /> 
                        		<input id="info_image_cta" type="checkbox" name="info_image_cta" value="1" <?php if( $practicearea->info_image_cta == '1'): ?> checked <?php endif; ?> > <label for="info_image_cta">Use as button</label> 
                        		<?php if($practicearea->info_image): ?>
                        			<br />
                        	    	<input id="info_image_check" type="checkbox" name="info_image_check" value="1"> <label for="info_image_check">Remove Info image</label> 
                        		<?php endif; ?>
                        	</div>
                        </div>
                        <div class="col-md-3">
                        	<?php if($practicearea->info_image): ?> 
                        		<img src="<?php echo e(asset('storage/' . $practicearea->info_image)); ?>" class="img-thumbnail"> 
                        	<?php endif; ?>
                        </div> 
                        <div class="col-sm-12">
                        	<div class="form-group mb-3">
                    			<?php if($practicearea->info_image): ?> 
                    		    	<label>Please use ##INFO_IMAGE## keyword to show in 'Content'.</label>
                    		    	<label>Note: It will show when Info Image uploaded</label> 
                    			<?php endif; ?>
                    		</div>
                    	</div>
                        <div class="col-sm-12">
                        	<div class="form-group mb-3">
                        	    <label>Info Image Link</label>
                        	    <input type="text" class="form-control" name="info_image_url" value="<?php echo e($practicearea->info_image_url); ?>">
                        	</div>
                        </div>  					
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group d-grid mb-2 text-end">
								<button type="submit" class="btn btn-block btn-primary">Update</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script>
function remove_faq(_this) { 
	_this.closest(".faq").remove();
}
$(document).ready(function() {
	initValidate('#edit_practicearea_form');
	initTrumbowyg('.trumbowyg');
	initSelect2('.select2');
});
$("#edit_practicearea_form").submit(function(e) {
	var form = $(this);
	ajaxSubmit(e, form, responseHandler);
});
var responseHandler = function(response) {
	location.reload();
}
var textareaIdCounter = 0;
$("#add_faq").on("click", function() {
	textareaIdCounter++;
	var newFaq = `
        <div class="faq form-group">
            <div class="row" data-id="${textareaIdCounter}">
                <div class="col-md-11">
                    <div class="row">
                        <input type="text" style="margin-bottom: 3px;" class="form-control" name="faq[]" placeholder="Enter Question here...">
                        <span class="glyphicon form-control-feedback"></span>
                        <textarea id="trumbowyg_${textareaIdCounter}" class="trumbowyg form-control" name="faq_description[]" rows="5" placeholder="Enter Answer here..."></textarea>
                    </div>
                </div>
                <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_faq($(this));"></i></div>
            </div>
            </br>
        </div>
    `;
	$("#faq_add_more").append(newFaq);
	initTrumbowyg(`#trumbowyg_${textareaIdCounter}`);
});
</script><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/backend/pages/practicearea/edit.blade.php ENDPATH**/ ?>