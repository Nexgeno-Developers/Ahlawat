<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Preload critical banner image -->
     <link rel="preload" as="image" href="https://www.ahlawatassociates.com/storage/assets/image/banner/JEu9A1FuWu0DMXR2UmwYXkeCL4y9777ARGLdwoqt.webp" fetchpriority="high" >
    <!----------Meta Information---------->
    <?php echo $__env->make('frontend.partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-----------Stylesheets------------>
    <?php echo $__env->make('frontend.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?= get_settings('header_script') ?>

</head>

<body>

    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T93DNMW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 

    <!----=========topbar=========----->

    <?php echo $__env->make('frontend.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!----=========End topbar=========----->


            <div class="row main-frame">

                <!---========sidebar======----->

                <?php echo $__env->make('frontend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!---========end sidebar======----->

                <div class="col-lg-10 col-12 pd-0">

                    <!---========Header======----->

                    <?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!---========end Header======----->

                    <!---======== page content ====-------->

                    <?php echo $__env->yieldContent('page.content'); ?>

                    <!---======== page content ===== -------->

                    <!--------------------------Footer Start---------------------------------------------------------->

                    <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!--Footer Ends-->

                </div>
            </div>
	
    <!--javascript-->
    <?php echo $__env->make('frontend.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('page.scripts'); ?>
    <?php echo $__env->yieldContent('component.scripts'); ?>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
            var lazyImages = document.querySelectorAll('img');

            lazyImages.forEach(function(img) {
                var tempImg = new Image();
                tempImg.onload = function() {
                    // Calculate aspect ratio
                    var aspectRatio = tempImg.naturalWidth / tempImg.naturalHeight;

                    // Get the computed style of the image
                    var width = img.clientWidth || img.parentElement.clientWidth;
                    var height = width / aspectRatio;

                    // Set width and height attributes
                    img.setAttribute('width', Math.round(width));
                    img.setAttribute('height', Math.round(height));

                    // Set the src attribute to start loading the image
                    img.src = img.getAttribute('data-src');
                };
                tempImg.src = img.getAttribute('data-src');
            });
        });
	</script>
</body>

</html><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>