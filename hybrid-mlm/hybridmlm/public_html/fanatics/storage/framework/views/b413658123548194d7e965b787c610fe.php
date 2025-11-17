<meta charset="utf-8"/>
<title><?php echo getConfig('company_information','company_name'); ?> <?php if(isset($title)): ?> -  <?php echo e($title); ?><?php endif; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="<?php echo $__env->yieldContent('metaDescription'); ?>" name="description"/>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php if(isset($jsVariables) && $jsVariables): ?>
    <script type="text/javascript">
        "use strict";
        let loggedId = '<?php echo e(session('loggedIdEncrypted')); ?>';
                <?php $__currentLoopData = defineFilter('jsvars', $jsVariables, 'header'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        let <?php echo e($key); ?> = '<?php echo e($variable); ?>';
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>
<link rel="shortcut icon" href="<?php echo asset('global/plugins/highcharts/highcharts.js'); ?>" type="image/x-icon" />
<script src="<?php echo e(asset('global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/main.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('global/plugins/highcharts/highcharts.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('global/plugins/highcharts/highcharts-3d.js')); ?>" type="text/javascript"></script>
<?php if(isset($headScripts) && $headScripts): ?>
	<?php $__currentLoopData = $headScripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<script src="<?php echo e($script); ?>" type="text/javascript"></script>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php echo defineFilter('scriptInjections', '', 'header'); ?>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php echo $__env->make('Admin.Layout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('styles'); ?>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo e(asset(getConfig('company_information', 'favicon'))); ?>"/>
<?php echo defineFilter('styleInjections', '', 'header'); ?>

<?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Layout/head.blade.php ENDPATH**/ ?>