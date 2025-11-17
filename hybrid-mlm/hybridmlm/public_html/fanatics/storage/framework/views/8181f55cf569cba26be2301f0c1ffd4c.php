<div class="btn-group localSwitcher">
    
    <a class="btn btn-circle btn-default btn-sm" href="javascript:" data-toggle="dropdown"
       aria-expanded="false">
        <img src="<?php echo e(asset('images/flags/flags_iso/' .$slot. '/' .LaravelLocalization::getCurrentLocale(). '.png' )); ?>">
        <?php echo e(LaravelLocalization::getCurrentLocaleNative()); ?>

        <?php if(getLanguage()->count() > 1): ?> <i class="fa fa-angle-down"></i> <?php endif; ?>
    </a>
    <?php if(getLanguage()->count() > 1): ?>
        <ul class="dropdown-menu" role="menu">
            <?php $__currentLoopData = getLanguage(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $local): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(LaravelLocalization::getCurrentLocale()!= $local->code /*&& in_array($local->code, $lang)*/): ?>
                    <li>
                        <a rel="alternate" hreflang="<?php echo e($local->code); ?>"
                           href="<?php echo e(LaravelLocalization::getLocalizedURL($local->code, null, [], true)); ?>">
                            <img src="<?php echo e(asset('images/flags/flags_iso/' .$slot. '/' .$local->code. '.png' )); ?>">
                            <?php echo e($local->native); ?>

                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</div><?php /**PATH /app/app/Components/Themes/Base/Templates/Components/selectLocal.blade.php ENDPATH**/ ?>