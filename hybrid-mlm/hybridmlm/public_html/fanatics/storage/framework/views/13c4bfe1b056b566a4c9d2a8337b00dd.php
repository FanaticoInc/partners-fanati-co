<?php
$currency = currency()->getCurrency();
$symbol = $currency ? $currency["symbol"] : "$";  
$code = $currency ? $currency["code"] : "USD";
$currencies = currency()->getCurrencies() ?: [];
?>
<div class="row">
    <div class="col-md-12">
        <div class="btn-group localSwitcher">
            <a class="btn btn-circle btn-default btn-sm" href="javascript:" data-toggle="dropdown"
               aria-expanded="false">
                <?php echo e($symbol); ?>

                <?php echo e($code); ?>

                <?php if(count($currencies) > 1): ?> <i class="fa fa-angle-down"></i><?php endif; ?>
            </a>
            <?php if(count($currencies) > 1): ?>
            <ul class="dropdown-menu pull-right">
                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="javascript:" class="changeCurrency" data-currency="<?php echo e($curr["code"]); ?>">
                            <?php echo e($curr["symbol"]); ?> <?php echo e($curr["code"]); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /app/app/Components/Themes/Base/Templates/Components/selectCurrency.blade.php ENDPATH**/ ?>