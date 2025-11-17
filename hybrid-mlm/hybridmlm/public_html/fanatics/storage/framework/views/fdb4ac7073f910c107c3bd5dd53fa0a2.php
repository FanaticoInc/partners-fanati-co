<?php echo $__env->make('Admin.Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- BEGIN HEADER CLEARFIX-->
<div class="clearfix"></div>
<div class="page-container">
<?php echo $__env->make('Admin.Layout.sideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height: 1001px;">
            <div class="row mainBreadcrumb">
                <div class="col-sm-12">
                    <div class="col-sm-5 BreadcrumbLeft">
                        <?php $__env->startSection('pageTitle'); ?>
                            <h1 class="page-title"> <?php if(isset($heading_text)): ?><?php echo e($heading_text); ?><?php endif; ?></h1>
                        <?php echo $__env->yieldSection(); ?>
                        <?php if(isset($breadcrumbs)): ?>
                            <div class="page-bar">
                                <ul class="page-breadcrumb">
                                    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php if(isset($value)  && $value != '#'): ?> <?php if(is_array($value)): ?> <?php echo e(route($value['name'],$value['params'])); ?> <?php else: ?><?php echo e(route($value)); ?> <?php endif; ?> <?php endif; ?>"><?php echo e($key); ?></a>

                                            <?php if($loop->iteration!=count($breadcrumbs)): ?>
                                                <i class="fa fa-angle-right"></i>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-7 BreadcrumbRight">
                        <div class="pageTitleRight"></div>
                    </div>
                </div>
            </div>
            <?php $__env->startSection('notification'); ?>
            <?php echo $__env->yieldSection(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <?php echo $__env->make('Admin.Layout.quickSideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php echo $__env->make('Admin.Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END FOOTER -->
<?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Layout/master.blade.php ENDPATH**/ ?>