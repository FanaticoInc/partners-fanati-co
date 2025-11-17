<?php $menuFactory = app('App\Blueprint\Services\MenuServices'); ?>
<?php $userServices = app('App\Blueprint\Services\UserServices'); ?>

<ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true"
    data-slide-speed="200">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
        <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
        <form class="sidebar-search" action="#" method="POST">
            <a href="javascript:" class="remove">
                <i class="icon-close"></i>
            </a>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo e(_t('layout.search')); ?>">
                <span class="input-group-btn">
                    <div class="btn">
                        <i class="icon-magnifier"></i>
                    </div>
                </span>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <?php echo $menuFactory->renderLeftMenu(); ?>

</ul>
<?php if($lastLoggedInfo = $userServices->getLastLoggedInfo()): ?>
    <div class="lastLogg">
        <div class="icon"><i class="fa fa-desktop"></i></div>
        <label><?php echo e(_t('layout.last_login')); ?></label>
        <div class="lastDetail">
            <span><?php echo e($lastLoggedInfo->ip); ?></span>
            <span><?php echo e($lastLoggedInfo->created_at); ?></span>
        </div>
    </div>
<?php endif; ?>

<script type="text/javascript">
    "use strict";

    $(function () {
        $('.page-sidebar-menu > li span.favourite').click(function (e) {
            e.stopPropagation();
            e.preventDefault();
            var me = $(this);
            var parentLi = me.closest('li.nav-item');
            me.find('i').addClass('fa-spin');

            if (!me.hasClass('bookmarked')) {
                var clone = parentLi.clone();
                var floatingConfig = {
                    float: clone,
                    startPoint: parentLi,
                    width: parentLi.outerWidth(),
                    enableFloat: true
                };
                var bookmarkAttributes = {
                    type: 'leftMenu',
                    entity_id: parentLi.data('id'),
                    data: {
                        id: parentLi.data('id')
                    }
                };
                addToBookMarks(bookmarkAttributes, floatingConfig).done(function (response) {
                    me.addClass('bookmarked').find('i').removeClass('fa-star-o fa-spin').addClass('fa-star');
                    parentLi.attr('data-bookmarkid', response.bookmark['id']);
                }).fail(function () {
                    me.find('i').removeClass('fa-spin');
                });
            } else
                removeBookmark(parentLi.attr('data-bookmarkid'), 'leftMenu').done(function () {
                    parentLi.removeAttr('data-bookmarkid');
                });
        });

        window.leftMenuBookmarkRemovalCallback = function (id) {
            $('.page-sidebar .page-sidebar-menu > li[data-bookmarkid="' + id + '"]')
                .removeAttr('data-bookmarkid').find('span.favourite').removeClass('bookmarked')
                .find('i').addClass('fa-star-o').removeClass('fa-star fa-spin');
        }
    });
</script><?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Layout/verticalMenu.blade.php ENDPATH**/ ?>