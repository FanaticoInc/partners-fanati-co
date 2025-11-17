<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <?php echo $__env->make('GuestLayout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="<?php echo e(route('admin.login')); ?>">
        <img src="<?php echo e(logo()); ?>"  alt=""/> </a>
</div>
<!-- END LOGO -->
<div class="content loginPortion">
    <?php $__env->startComponent('Components.selectLocal'); ?> 16 <?php echo $__env->renderComponent(); ?>
    <?php echo Form::open(['route' => $action,'class' => 'login-form','id' => 'login_form']); ?>

    <h3 class="form-title"><?php echo e(_t('auth.login_to_your_account')); ?></h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> <?php echo e(_t('auth.enter_username_password')); ?> </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9"><?php echo e(_t('auth.username')); ?></label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off"
                   placeholder="<?php echo e(_t('auth.username')); ?>"
                   name="username"/></div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9"><?php echo e(_t('auth.password')); ?></label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                   placeholder="<?php echo e(_t('auth.password')); ?>"
                   name="password"/></div>
    </div>
        <?php echo defineFilter('loginBottom', '', 'root'); ?>

    <div class="form-actions">
        <label class="rememberme mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="remember" value="1"><?php echo e(_t('auth.remember_me')); ?>

            <span></span>
        </label>
        <button type="submit" class="btn dark pull-right ladda-button loggMe"
                data-style="contract"> <?php echo e(_t('auth.login')); ?></button>
        <div class="forget-password">
            <h4><?php echo e(_t('auth.forgot_your_password')); ?></h4>
        </div>
    </div>
    <?php echo Form::close(); ?>


    <?php echo Form::open(['route' => 'admin.password.email','class' => 'forget-form','id' => 'forget_form']); ?>

    <div class="requestPassWrap">
        <h3><?php echo e(_t('auth.forgot_password')); ?></h3>
        <p> <?php echo e(_t('auth.enter_email_to_reset_password')); ?> </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off"
                       placeholder="<?php echo e(_t('auth.e-mail')); ?>"
                       name="email"></div>
        </div>
        <div class="form-actions row">
            <button type="button" class="btn green pull-right ladda-button requestPassword" data-style="contract"
                    data-spinner-color="#FFF">
                <?php echo e(_t('auth.submit')); ?>

            </button>
            <button type="button" class="btn blue pull-right backToLogin">
                <?php echo e(_t('auth.back')); ?>

            </button>
        </div>
    </div>
    <div class="requestSent">
        <h3><i class="fa fa-check"></i><?php echo e(_t('auth.check_inbox')); ?></h3>
        <p><?php echo e(_t('auth.password_mail_text')); ?></p>
        <button type="button" class="btn blue backToLogin fromReset"><?php echo e(_t('auth.back')); ?></button>
    </div>
    <?php echo Form::close(); ?>

</div>
<?php echo $__env->make('GuestLayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /app/app/Components/Themes/Base/Templates/Auth/adminLoginStandard.blade.php ENDPATH**/ ?>