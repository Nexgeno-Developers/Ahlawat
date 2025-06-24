<!DOCTYPE html>
<!-- saved from url=(0047)https://coderthemes.com/hyper/modern/index.html -->
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true" style="transition: background-color 0.15s ease 0s;" data-bs-theme="light" data-layout-position="fixed" data-sidenav-size="default" class="menuitem-active">


<head>
    
    <!-----Meta Information-------->
    <?php echo $__env->make('backend.partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--Stylesheets-->
    <?php echo $__env->make('backend.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Theme Config Js -->
    <script src="/assets/backend/js/hyper-config.js"></script>

</head>

    <body class="show">
        <!-- Begin page -->
        <div class="wrapper">

            
            <!----------------------header-------------------->
            <?php echo $__env->make('backend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!----------------------Navbar--------------------->
            <?php echo $__env->make('backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!---------page header------->
                        <div class="row">
                        <?php echo $__env->make('backend.component.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <!-------Page contain---------->
                        <div class="row">
                            <?php echo $__env->yieldContent('page.content'); ?>
                        </div> <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <?php echo $__env->make('backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!----------------------theme settings--------------------->
        <?php echo $__env->make('backend.component.theme_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--bootstrap modals-->
        <?php echo $__env->make('backend.component.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    

        <!--javascript-->
        <?php echo $__env->make('backend.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('page.scripts'); ?>   
        <?php echo $__env->yieldContent('component.scripts'); ?>

</body>

</html><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/backend/layouts/app.blade.php ENDPATH**/ ?>