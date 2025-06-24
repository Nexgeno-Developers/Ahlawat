
<!-- ================== Header Start =========================== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="#" class="logo-light">
                                <span class="logo-lg">
                                    <img src="/assets/images/logo.png" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-sm.png" alt="small logo">
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="#" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-dark.png" alt="dark logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-dark-sm.png" alt="small logo">
                                </span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                        <!-- Topbar Search Form -->
                
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                    
                    

                    

                    

                    
                        <li class="d-sm-inline-block">
                            <a href="<?php echo e(url(route('clear-cache'))); ?>" class="btn btn-success">Clear Cache</a>
                        </li>

                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Theme Mode" data-bs-original-title="Theme Mode">
                                <i class="ri-moon-line font-22"></i>
                            </div>
                        </li>
                    


                        <li class="d-none d-md-inline-block">
                            <a class="nav-link" href="" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line font-22"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="/assets/images/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                                </span>
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <h5 class="my-0"><?php echo e(auth()->user()->name); ?></h5>
                                    <h6 class="my-0 fw-normal">Superadmin</h6>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                            
                                <!-- item-->
                                <a onclick="smallModal('<?php echo e(url(route('user.edit',['id' => auth()->user()->id]))); ?>', 'Edit Profile')" class="dropdown-item">
                                    <i class="mdi mdi-square-edit-outline"></i>
                                    <span>Profile</span>
                                </a>
                                <a onclick="smallModal('<?php echo e(url(route('user.password',['id' => auth()->user()->id]))); ?>', 'Reset Password')" class="dropdown-item">
                                    <i class="mdi mdi-square-edit-outline"></i>
                                    <span>Reset Password</span>
                                </a>
                                <a href="<?php echo e(route('backend.logout')); ?>" class="dropdown-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
<!-- ================================== Header End ================================ --><?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/backend/partials/header.blade.php ENDPATH**/ ?>