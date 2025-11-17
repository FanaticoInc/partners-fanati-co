<div class="portlet light portlet-fit userListPortlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-directions font-green hide"></i>
            <span class="caption-subject bold font-dark uppercase "><?php echo e(_t('index.recent_activities')); ?></span>
            <span class="caption-helper"><?php echo e(_t('index.showing_last_10')); ?></span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="activitiesWrapper">
            <?php $__empty_1 = true; $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if(!$history->activity): ?>
                    <?php continue; ?>
                <?php endif; ?>
                <div class="eachActivity">
                    <div class="activityHeader">
                        <?php if($history->user_id): ?>
                            <div class="profilePic">
                                <img src="<?php echo e(getProfilePic($history->user)); ?>">
                            </div>
                        <?php endif; ?>
                        <span class="timestamp"><?php echo e($history->created_at->format('H:i A')); ?></span>
                    </div>
                    <div class="activityCircleHolder">
                    <span class="activityCircle"
                          <?php if($history->activity->color): ?> style="border-color: <?php echo e($history->activity->color); ?>" <?php endif; ?>>
                        <i class="<?php echo e($history->activity->icon); ?>"></i>
                    </span>
                    </div>
                    <div class="activityBody">
                        <?php echo e(str_replace('%user%', $history->user->username, $history->activity->description[currentLocal()])); ?>

                        <span class="timestamp"><?php echo e($history->created_at->format('D Y H:i A')); ?>

                            <span>(<?php echo e($history->created_at->diffForHumans()); ?>)</span></span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="noActivity"><?php echo e(_t('index.there_are_no_activities')); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>
    "use strict";

    $(function () {
        let check = setInterval(function () {
            if ($('.userDetailsHolder').length) {
                clearInterval(check);
                <?php if($activities->count() > 5): ?>
                $('.activitiesWrapper').slimScroll({height: $('.userListPane.latestJoinings').outerHeight() - $('.activitiesHolder .portlet-title').outerHeight() + 'px'});
                <?php endif; ?>
            }
        }, 1000);
    });
</script>
<style>
    .row.lastJoiningsAndActivities .activitiesHolder .portlet-body {
        height: 300px;
        overflow-y: scroll !important;
    }
</style><?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Dashboard/Partials/activities.blade.php ENDPATH**/ ?>