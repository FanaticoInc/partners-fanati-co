<?php $__env->startSection('content'); ?>
    <div class="row profileBanner" style="background: url('<?php echo e(asset("images/profileBanner.jpg")); ?>');">
        <div class="profileHeader">
            <h3 class="profileName"><?php echo e($profile->MetaData->firstname.' '. $profile->MetaData->lastname); ?> </h3>
            
            <div class="profileButton">
                <button class="btn white btn-outline btn-circle profileEdit ProfilemeuItem" data-action="editProfile">
                    <i class="fa fa-edit"></i> <?php echo e(_t('profile.profile')); ?>

                </button>
                
            </div>
        </div>
    </div>
    <div class="row profileContact">
        <div class="col-md-12">
            <div class="profile-sidebar">
                <div class="portlet light profile-sidebar-portlet">
                    <div class="profile-userpic mt-element-overlay mt-scroll-right">
                        <div class="userPicInner mt-overlay-1">
                            <div class="mt-overlay">
                                <ul class="mt-info">
                                    <li>
                                        <a class="btn default btn-outline fmTrigger uploadProPic"
                                           data-input="proPicInput" data-preview="proPicImg" href="javascript:"
                                           id="fmTrigger">
                                            <i class="fa fa-upload"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="proPicInput" id="proPicInput">

                            <img id="proPicImg"
                                 <?php if(isset($profile->MetaData->profile_pic) && $profile->MetaData->profile_pic != null ): ?>
                                 src="<?php echo e(asset($profile->MetaData->profile_pic)); ?>"
                                 <?php else: ?>
                                 src="<?php echo e(asset('photos/maleUser.jpg')); ?>"
                                 <?php endif; ?>
                                 class="img-responsive">
                        </div>
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> <?php echo e($profile->MetaData->firstname.' '. $profile->MetaData->lastname); ?> </div>
                    </div>
                    <div class="profile-userbuttons saveProfilePic" style="display: none">
                        <button type="button"
                                class="btn btn-circle green btn-sm ladda-button"><?php echo e(_t('profile.save')); ?></button>
                    </div>
                    <div class="profile-usermenu">
                        <ul class="nav profileMenu">
                            <li class="ProfilemeuItem active Overview" data-action="overview">
                                <a><i class="icon-home viewProfile"></i> <?php echo e(_t('profile.overview')); ?></a>
                            </li>
                            <li class="ProfilemeuItem" data-action="editProfile">
                                <a><i class="icon-settings"></i> <?php echo e(_t('profile.edit_profile')); ?></a>
                            </li>
                            <li class="ProfilemeuItem active Overview" data-action="securityPIN">
                                <a><i class="icon-lock"></i> <?php echo e(_t('profile.security_PIN')); ?></a>
                            </li>
                            <li class="ProfilemeuItem active Overview" data-action="setDefault">
                                <a><i class="fa fa-globe"></i> <?php echo e(_t('profile.setDefault')); ?></a>
                            </li>
                            <?php echo defineFilter('profileMenuItem', '', 'adminProfile'); ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="partialContent" name="partialContent" id="partialContent" style="overflow: hidden;"></div>
        </div>
    </div>

    <script type="text/javascript">"use strict";
        $(function () {
            Ladda.bind('.ladda-button');

            $(".ProfilemeuItem").click(function () {
                $(".ProfilemeuItem").removeClass("active");
                $(this).addClass("active");
                simulateLoading('.partialContent');
                var unitAction = $(this).attr('data-action');
                $.post('<?php echo e(scopeRoute('profile.requestUnit')); ?>', {unit: unitAction}, function (data) {
                    $('.partialContent').html(data);
                });
            });

            //trigger overview
            $('.viewProfile').trigger('click');

            //Initialize file manager

            var domain = '<?php echo e(asset('filemanage')); ?>';

            $('.uploadProPic').filemanager('image', {prefix: domain});

            $('.uploadProPic').click(function () {
                $('.saveProfilePic').show();
            });


        });

        //save profile pic

        $('.saveProfilePic').click(function () {
            if ($('#proPicInput').val()) {
                $.post('<?php echo e(scopeRoute('profile.saveProfileImage')); ?>', {proPicInput: $('#proPicInput').val()}, function () {
                    toastr.success("<?php echo e(_t('profile.profile_picture_saved_successfully')); ?>");
                    $('.saveProfilePic').hide();
                });
            }

        });

    </script>
    <style>
        .page-content {
            background: #f4f6fb !important;
            padding: 0px 0 0px 0px !important;
        }

        .row.mainBreadcrumb {
            display: none;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(ucfirst(getScope()).'.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Profile/UserProfile.blade.php ENDPATH**/ ?>