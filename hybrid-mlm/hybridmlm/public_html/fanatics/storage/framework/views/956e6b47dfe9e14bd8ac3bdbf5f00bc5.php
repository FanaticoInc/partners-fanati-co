<div class="col-lg-4 col-xs-12 col-sm-12 columns overview">
    <div class="portlet light systemModulesPortlet">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject bold uppercase font-dark"><?php echo e(_t('index.system_modules')); ?></span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title=""
                   title=""> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="moduleOverview">
                <div class="modulesCount">
                    <i class="fa fa-cube"></i>
                    <?php echo e(_t('index.total')); ?> <span><?php echo e($totalModules); ?> <?php echo e(_t('index.modules')); ?></span>
                </div>
            </div>
            <div class="section pools mfkToggleWrap" data-toggle-type="class">
                <h3 class="mfkToggle">
                    <?php echo e(_t('index.pools')); ?>

                    <span class="iconGroup">
                        <i class="fa fa-angle-up on"></i>
                        <i class="fa fa-angle-down off"></i>
                    </span>
                </h3>
                <div class="sectionBody toggleBody hidden">
                    <div class="box all">
                        <div class="meta">
                            <i class="ico"></i> <?php echo e(_t('index.total')); ?>

                        </div>
                        <span class="total"><?php echo e(count($pools)); ?></span>
                    </div>
                    <div class="box empty">
                        <div class="meta">
                            <i class="ico"></i><?php echo e(_t('index.empty')); ?>

                        </div>
                        <span class="total"><?php echo e($emptyPools); ?></span>
                    </div>
                </div>
            </div>
            <div class="section class mfkToggleWrap" data-toggle-type="class">
                <h3 class="mfkToggle">
                    <?php echo e(_t('index.class')); ?>

                    <span class="iconGroup">
                        <i class="fa fa-angle-up on"></i>
                        <i class="fa fa-angle-down off"></i>
                    </span>
                </h3>
                <div class="sectionBody toggleBody hidden">
                    <div class="box premium">
                        <div class="meta">
                            <i class="ico"></i><?php echo e(_t('index.premium')); ?>

                        </div>
                        <span class="total"><?php echo e(count($premiumModules)); ?></span>
                    </div>
                    <div class="box free">
                        <div class="meta">
                            <i class="ico"></i><?php echo e(_t('index.free')); ?>

                        </div>
                        <span class="total"><?php echo e($totalModules - count($premiumModules)); ?></span>
                    </div>
                </div>
            </div>
            <div class="section status mfkToggleWrap" data-toggle-type="class">
                <h3 class="mfkToggle open">
                    <?php echo e(_t('index.status')); ?>

                    <span class="iconGroup">
                        <i class="fa fa-angle-up on"></i>
                        <i class="fa fa-angle-down off"></i>
                    </span>
                </h3>
                <div class="sectionBody toggleBody">
                    <div class="box active">
                        <div class="meta">
                            <i class="ico"></i><?php echo e(_t('index.active')); ?>

                        </div>
                        <span class="total"><?php echo e($totalModules - count($inactiveModules) - count($modulesToBeInstalled)); ?></span>
                    </div>
                    <div class="box inactive">
                        <div class="meta">
                            <i class="ico"></i><?php echo e(_t('index.inactive')); ?>

                        </div>
                        <span class="total"><?php echo e(count($inactiveModules)); ?></span>
                    </div>
                    <div class="box toInstall">
                        <div class="meta">
                            <i class="ico"></i><?php echo e(_t('index.not_installed')); ?>

                        </div>
                        <span class="total"><?php echo e(count($modulesToBeInstalled)); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-xs-12 col-sm-12 columns activeInactiveGraph">
    <div class="portlet light systemModulesPortlet">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject bold uppercase font-dark"><?php echo e(_t('index.module_status_chart')); ?></span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title=""
                   title=""> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="moduleStatusChartHolder"></div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-xs-12 col-sm-12 columns premiumModulesList">
    <div class="portlet light systemModulesPortlet">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject bold uppercase font-dark"><?php echo e(_t('index.premium_modules')); ?></span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title=""
                   title=""> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="listHolder">
                <?php $__empty_1 = true; $__currentLoopData = $premiumModules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="each">
                        <span class="counter"><?php echo e($key+1); ?>)</span>
                        <h3><?php echo e(app($module)->getRegistry()['name']); ?>

                            <span class="author">by <i><?php echo e(app($module)->getRegistry()['author']); ?></i></span>
                        </h3>
                        <div class="info">
                            <div class="eachInfo">
                                <label><?php echo e(_t('index.version')); ?></label>
                                <span class="value"><?php echo e(app($module)->getRegistry()['version']); ?></span>
                            </div>
                            <div class="eachInfo">
                                <label><?php echo e(_t('index.support_status')); ?></label>
                                <span class="value expired"><?php echo e(_t('index.expired')); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="noModules"><?php echo e(_t('index.no_premium_modules')); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<script>
    "use strict";

    $(function () {
        setupModulesComparisonGraph('.moduleStatusChartHolder');
    });

    function setupModulesComparisonGraph(element) {
        jQuerize(element).highcharts({
            chart: {
                height: 265,
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                }
            },
            title: {
                text: ''
            },
            plotOptions: {
                pie: {
                    innerSize: 50,
                    depth: 30
                }
            },
            series: [{
                name: '<?php echo e(_t('index.no_of_modules')); ?>',
                data: <?php echo json_encode($statusComparisonGraph); ?>,
                showInLegend: true
            }]
        });
    }
</script><?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Dashboard/Partials/systemModules.blade.php ENDPATH**/ ?>