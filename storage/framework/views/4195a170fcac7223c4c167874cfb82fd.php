<?php
    $practice_Area = DB::table('practice_areas')
        ->whereIn('id', ['7', '9', '11', '8', '10', '12', '116', '13'])
        ->orderByRaw("FIELD(id, '7', '9','13', '12', '11',  '10','116','8')")
        ->get();

?>

<!--------------Header start----------------->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 px0">
                <div class="nav_bar d-flex align-items-center justify-content-between">
                    <div>
                        <div class="bottom_nav_links d-flex align-items-center gap-4">
                            <ul class="nav_links d-flex align-items-start gap-4 list-unstyled mb-0" style="margin-left: -33px;
    margin-right: 27px;
}">
                                <?php $__currentLoopData = $practice_Area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $subcategory = DB::table('practice_areas')->where('parent_id', $row->id)->get();
                                ?>
<link rel=""alternate"" hreflang=""en-us"" href=""https://www.ahlawatassociates.com/"" />
<link rel=""alternate"" hreflang=""en-ru"" href=""https://www.ahlawatassociates.com/"" />
<link rel=""alternate"" hreflang=""en-ae"" href=""https://www.ahlawatassociates.com/"" />
                                <li>
                                    <a href="<?php echo e($row->special_service == '1' ? 
                                            url(route('practicearea-detail-specialised', ['slug' => $row->slug] )) :
                                            (
                                                $row->special_service == '2' ?
                                                    url(route('practicearea-detail-page', ['slug' => $row->slug] )) :
                                                    (
                                                        $row->special_service == '3' ?
                                                            url(route('practicearea-detail-extra', ['slug1' => $row->slug] )) :
                                                            url(route('practicearea-detail', ['slug' => $row->slug] ))
                                                    )
                                            )); ?>">
                                        <span><?php echo e($row->title); ?></span>
                                        <?php if(!$subcategory->isEmpty()): ?>
                                        <img src="/assets/frontend/images/arrow_icon.png" alt="down Arrow" width="17"
                                            height="8" rel="preload" />
                                        <?php endif; ?>
                                    </a>
                                    <?php if(!$subcategory->isEmpty()): ?>
                                    <?php
                                    // Sorting the subcategory collection by the 'title' attribute
                                    $sortedSubcategory = $subcategory->sortBy('title');
                                    ?>
                                    <ul class="dropdown" style="column-count: 1 !important; ">
                                        <?php $__currentLoopData = $sortedSubcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($item->special_service == '1' ? 
                                                    url(route('practicearea-detail-specialised', ['slug' => $item->slug] )) :
                                                    (
                                                        $item->special_service == '2' ?
                                                            url(route('practicearea-detail-page', ['slug' => $item->slug] )) :
                                                            (
                                                                $item->special_service == '3' ?
                                                                    url(route('practicearea-detail-extra', ['slug1' => $item->slug] )) :
                                                                    url(route('practicearea-detail', ['slug' => $item->slug] ))
                                                            )
                                                    )); ?>"><?php echo e($item->title); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ------------------------ Mobile Menu ------------------------ -->

                <div class="wrapper">
                    <nav>

                        <div class="logo">
                            <a href="<?php echo e(url(route('index'))); ?>"><img src="/assets/frontend/images/header_logo.webp"
                                    alt="logo" width="164" height="164" rel="preload" /></a>
                        </div>
                        <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox" />
                        <label class="m-menu__toggle" for="menu">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                stroke-linecap="butt" stroke-linejoin="arcs">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </label>
                        <label class="m-menu__overlay" for="menu"></label>

                        <div class="m-menu">
                            <div class="m-menu__header">
                                <div class="logo">
                                    <a href="<?php echo e(url(route('index'))); ?>"><img src="/assets/frontend/images/logo.png"
                                            alt="logo" width="80" height="80" rel="preload" /></a>
                                </div>
                                <label class="m-menu__toggle" for="menu">
                                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                        stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </label>
                            </div>
                            <ul>
                                <li><a href="<?php echo e(url(route('practicearea'))); ?>">Our Expertise</a></li>
                                <li><a href="<?php echo e(url(route('team'))); ?>">Our Professionals</a></li>
                                <li>
                                    <label class="a-label__chevron" for="blog">Insights</label>
                                    <input type="checkbox" id="blog" name="blog" class="m-menu__checkbox" />
                                    <div class="m-menu">
                                        <div class="m-menu__header">
                                            <label class="m-menu__toggle" for="blog">
                                                <img class="width25" src="/assets/frontend/images/nex_arrow1.png"
                                                    alt="logo" width="25" height="25" rel="preload" />
                                            </label>
                                            <span>Insights</span>
                                        </div>
                                        <ul>
                                            <li class="sub-menu" style="display: block;">

                                            </li>


                                            <li> <a href="<?php echo e(url(route('blog'))); ?>">Blogs</a>
                                            </li>
                                            <li> <a href="<?php echo e(url(route('news'))); ?>">A&amp;A Newscast</a>
                                            </li>
                                            <li> <a href="<?php echo e(url(route('media-coverage'))); ?>">Media Coverages</a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li><a href="<?php echo e(url(route('contact'))); ?>">Contact Us</a></li>
                                <li><a href="<?php echo e(url('/specialised-services/general-counsel-services-in-house-legal-services')); ?>">General Counsel Services</a></li>

                                <?php $i = 1 ?>
                                <?php $__currentLoopData = $practice_Area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $subcategory = DB::table('practice_areas')->where('parent_id', $row->id)->get();
                                                        ?>

                                                        <?php if(!$subcategory->isEmpty()): ?>
                                                                            <li>
                                                                                <label class="a-label__chevron" for="item-<?php echo e($i); ?>"><?php echo e($row->title); ?></label>
                                                                                <input type="checkbox" id="item-<?php echo e($i); ?>" name="item-<?php echo e($i); ?>"
                                                                                    class="m-menu__checkbox" />
                                                                                <div class="m-menu">
                                                                                    <div class="m-menu__header">
                                                                                        <label class="m-menu__toggle" for="item-<?php echo e($i); ?>">
                                                                                            <img class="width25" src="/assets/frontend/images/nex_arrow1.png"
                                                                                                alt="logo" width="25" height="25" rel="preload" />
                                                                                        </label>
                                                                                        <span><?php echo e($row->title); ?></span>
                                                                                    </div>
                                                                                    <ul>

                                                                                        <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                        <li><a
                                                                                                                                href="<?php echo e($item->special_service == '1' ?
                                                                                            url(route('practicearea-detail-specialised', ['slug' => $item->slug])) :
                                                                                            (
                                                                                                $item->special_service == '2' ?
                                                                                                url(route('practicearea-detail-page', ['slug' => $item->slug])) :
                                                                                                (
                                                                                                    $item->special_service == '3' ?
                                                                                                    url(route('practicearea-detail-extra', ['slug1' => $item->slug])) :
                                                                                                    url(route('practicearea-detail', ['slug' => $item->slug]))
                                                                                                )
                                                                                            )); ?>"><?php echo e($item->title); ?></a>
                                                                                                                        </li>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                    </ul>
                                                                                </div>
                                                                            </li>
                                                                            <?php $i++ ?>
                                                        <?php else: ?>
                                                                                <li>
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
                                                            )); ?>">
                                                                                        <span> <?php echo e($row->title); ?> </span>
                                                                                    </a>

                                                                                </li>
                                                        <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>





<!--------------header end--------------------><?php /**PATH C:\Users\Admin\Desktop\Ahlawat\Ahlawat\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>