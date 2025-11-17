<?php $__empty_1 = true; $__currentLoopData = $bookmarks->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="bookmarkHolder row">
        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bookmarkGroup col-md-<?php echo e($chunk->count() == 1 ? '12' : '6'); ?>">
                <div class="bookmarkGroupInner">
                    <h4>
                        <?php if($group->first()->type->icon_image): ?>
                            <img src="<?php echo e($group->first()->type->icon_image); ?>">
                        <?php else: ?>
                            <i class="<?php echo e($group->first()->type->icon_font); ?>"></i>
                        <?php endif; ?>
                        <?php echo e($group->first()->type->label); ?>

                    </h4>
                    <?php if($component = ($group->count() ? $group->first()->type->view_component : '')): ?>
                        <?php $__env->startComponent($component, ['data' => $group]); ?> <?php echo $__env->renderComponent(); ?>
                    <?php else: ?>
                        <ul class="bookmarkList <?php echo e($type); ?>">
                            <?php $__empty_2 = true; $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                <li><?php echo e($item->label); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                <div class="noBookmarks">
                                    <i class="fa fa-exclamation"></i><?php echo e(_t('misc.no_bookmarks_found_in_this_group')); ?>

                                </div>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="noBookmarks">
        <i class="fa fa-exclamation"></i><?php echo e(_t('misc.no_bookmarks_found')); ?>

    </div>
<?php endif; ?>
<script type="text/javascript">
    "use strict";

    $(function () {
        Ladda.bind('.ladda-button');

        $('body').on('click', '.bookmarkItem', function (e) {
            e.stopPropagation();
        });

        $('body')
            .off('click', '.bookmarkItem .deleteBookmark')
            .on('click', '.bookmarkItem .deleteBookmark', function (e) {
                e.preventDefault();

                var bookmarkItem = $(this).closest('.bookmarkItem');

                bookmarkItem.addClass('removing');

                removeBookmark(bookmarkItem.data('id'), bookmarkItem.data('type'));
            });
    });
</script><?php /**PATH /app/app/Components/Themes/Base/Templates/Misc/Bookmarks/manager.blade.php ENDPATH**/ ?>