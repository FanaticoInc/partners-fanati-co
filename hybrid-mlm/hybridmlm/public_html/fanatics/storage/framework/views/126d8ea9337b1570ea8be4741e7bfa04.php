<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <?php echo $__env->make('Admin.Layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<?php echo defineFilter('notifier', '', 'header'); ?>

<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="<?php echo e(scopeRoute('home')); ?>">
                    <img src="<?php echo e(logo()); ?>" alt="logo" style="width: 136px;padding-left: 13px;" class="logo-default">
                </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <button class="topMenuButton"><i class="fa fa-user"></i></button>
            <li class="timePieceHolder">
                <div class="month"><?php echo e(date('M')); ?><span><?php echo e(date('Y')); ?></span></div>
                <div class="icon">
                    <i class="fa fa-clock-o"></i>
                    <span class="day">
                        <span class="string"><?php echo e(date('D')); ?></span>
                        <span class="numeric"><?php echo e(date('d')); ?></span>
                    </span>
                </div>
                <div class="local timePiece">
                    <div class="tag"><?php echo e(_t('general.Local')); ?></div>
                    <div class="innerContainer">
                        <div class="hours">00</div>
                        <div class="separator">:</div>
                        <div class="minutes">00</div>
                        <div class="seconds">00</div>
                        <div class="ampm"><?php echo e(_t('general.AM')); ?></div>
                    </div>
                </div>
                <div class="server timePiece">
                    <div class="tag"><?php echo e(_t('general.Server')); ?></div>
                    <div class="innerContainer">
                        <div class="hours">00</div>
                        <div class="separator">:</div>
                        <div class="minutes">00</div>
                        <div class="seconds">00</div>
                        <div class="ampm"><?php echo e(_t('general.PM')); ?></div>
                    </div>
                </div>
            </li>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <span class="quickSidebarSwitch fa fa-ellipsis-v"></span>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="bookmarks dropdown">
                        <button type="button" class="btn btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            <a href="#">
                                <span> <i class="fa fa-bookmark"></i><?php echo e(_t('general.Bookmarks')); ?>

                                    <i class="fa fa-angle-down"></i></span>
                            </a>
                        </button>
                        <div class="dropdown-menu bookMarks pull-right">
                            <div class="bookmarkContainer">
                                <h2 class="head">
                                    <i class="fa fa-star-half-full"></i><?php echo e(_t('general.Bookmark_manager')); ?>

                                </h2>
                                <div class="bookmarksBody"></div>
                            </div>
                        </div>
                    </li>
                    <li class="currencyPicker header"> <?php $__env->startComponent('Components.selectCurrency'); ?> 16 <?php echo $__env->renderComponent(); ?></li>
                    <li class="languagePicker header"> <?php $__env->startComponent('Components.selectLocal'); ?> 16 <?php echo $__env->renderComponent(); ?></li>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                    <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                    <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-default unReadNotification"> <?php echo e(loggedUser()->unreadNotifications()->count()); ?> </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>
                                    <span class="bold"> <?php echo e(_t('general.notifications')); ?></span>
                                    <label class="btn btn-outline viewBtn markAllAsRead"><a href="#"><i
                                                    class="fa fa-check-square-o"></i><?php echo e(_t('general.mark_as_read')); ?>

                                        </a></label>
                                </h3>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller notificationHolder" data-handle-color="#637283"
                                    data-initialized="1">
                                    <?php $__empty_1 = true; $__currentLoopData = loggedUser()->unreadNotifications()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li data-toggle="modal" data-target="#notificationModal"
                                            class="eachNotification" data-id="<?php echo e($notification->id); ?>">
                                            <a href="javascript:">
                                                <span class="time"><?php echo e($notification->created_at->diffForHumans()); ?></span>
                                                <span class="details">
                                                    <span class="label label-sm label-success">
                                                        <?php if(collect($notification->data)->get('icon')): ?>
                                                            <i class="<?php echo e(collect($notification->data)->get('icon')); ?>"
                                                               style="color: <?php echo e(collect($notification->data)->get('iconColor')); ?>"></i>
                                                        <?php else: ?>
                                                            <i class="fa fa-bell"></i>
                                                        <?php endif; ?>
                                                    </span>
                                                    <span class="notSub"><?php echo e(collect($notification->data)->get('subject')); ?> </span>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="noNotification">
                                            <i class="fa fa-exclamation-circle"></i><?php echo e(_t('general.No_notifications')); ?>

                                        </div>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            <li class="notificationFooter">
                                <a href="<?php echo e(scopeRoute('notification.list')); ?>"
                                   class="viewAllNotifications"><?php echo e(_t('general.view_all')); ?></a>
                            </li>
                        </ul>
                    </li>
                    <div class="notificationModal modal fade" id="notificationModal" tabindex="-1" role="dialog"
                         aria-labelledby="notificationModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content notificationContent"></div>
                        </div>
                    </div>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->








































                    <li class="dropdown dropdown-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle"
                                 src="<?php echo e(getProfilePic(loggedUser())); ?>">
                            <span class="username username-hide-on-mobile"> <?php echo e(loggedUser()->username); ?> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="<?php echo e(scopeRoute('profile')); ?>">
                                    <i class="icon-user"></i> <?php echo e(_t('general.My_Profile')); ?> </a>
                            </li>





                            <li>
                                <a href="<?php echo e(scopeRoute('logout')); ?>">
                                    <i class="icon-key"></i> <?php echo e(_t('general.Log_Out')); ?> </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        
                        
                        
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <script>
        $(document).ready(function () {
           /* setInterval(function () {
                $.get("<?php echo e(scopeRoute('notification.count')); ?>", function (response) {
                    $('.unReadNotification').html(response);
                });
            }, 2000);*/

            $("button.topMenuButton").click(function () {
                $(".top-menu").toggle();
            });

            $('.markAllAsRead').click(function () {
                $.post("<?php echo e(scopeRoute('notification.read')); ?>");
            });

            $('.eachNotification').click(function () {
                var id = $(this).data('id');
                $.post("<?php echo e(scopeRoute('notification.view')); ?>", {id: id}, function (response) {
                    $('.notificationContent').replaceWith(response);
                    $.post("<?php echo e(scopeRoute('notification.read')); ?>", {id: id});
                });
            });
        });
    </script>
</div>
<?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Layout/header.blade.php ENDPATH**/ ?>