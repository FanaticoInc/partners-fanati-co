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
<body class="login standard-login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="<?php echo e(route('user.login')); ?>">
        <img src="<?php echo e(logo()); ?>" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <?php echo Form::open(['route' => 'user.login','class' => 'login-form','id' => 'login_form']); ?>

    <?php $__env->startComponent('Components.selectLocal'); ?> 16 <?php echo $__env->renderComponent(); ?>
    <h3 class="form-title font-green"><?php echo e(_t('auth.sign_in')); ?></h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> <?php echo e(_t('auth.enter_any_user_name_password')); ?>.  </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9"><?php echo e(_t('auth.username')); ?></label>
        <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"
               placeholder="<?php echo e(_t('auth.username')); ?>" name="username"/></div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9"><?php echo e(_t('auth.password')); ?></label>
        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"
               placeholder="<?php echo e(_t('auth.password')); ?>" name="password"/></div>
    <?php echo defineFilter('loginBottom', '', 'root'); ?>

    <div class="form-actions">
        <button type="button" data-style="contract"
                class="btn dark ladda-button loggMe uppercase"><?php echo e(_t('auth.login')); ?></button>
        <label class="rememberme check mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="remember" value="1"/><?php echo e(_t('auth.remember_me')); ?>

            <span></span>
        </label>
        <a href="javascript:" id="forget-password" class="forget-password"><?php echo e(_t('auth.forgot_your_password')); ?></a>
    </div>
    
    <div class="create-account">
        <p>
            <a href="<?php echo e(route('shared.register')); ?>" id="register-btn"
               class="uppercase"><?php echo e(_t('auth.create_an_account')); ?></a>
        </p>
    </div>
    <?php echo Form::close(); ?>

<!--</form>-->
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <!--  <form class="forget-form" action="javascript:;" method="post" style="display:none;">-->
    <?php echo Form::open(['route' => 'user.password.email','class' => 'forget-form','id' => 'forget_form']); ?>

    <?php $__env->startComponent('Components.selectLocal'); ?> 16 <?php echo $__env->renderComponent(); ?>
    <div class="requestPassWrap">
        <h3 class="font-green"><?php echo e(_t('auth.forgot_your_password')); ?></h3>
        <p><?php echo e(_t('auth.enter_email_to_reset_password')); ?> </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off"
                   placeholder="<?php echo e(_t('auth.e-mail')); ?>" name="email"/>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn"
                    class="btn dark btn-outline backToLogin"><?php echo e(_t('auth.back')); ?></button>
            <button type="button"
                    class="btn dark btn-success uppercase pull-right ladda-button requestPassword"
                    data-style="contract"><?php echo e(_t('auth.submit')); ?></button>
        </div>
    </div>
    <div class="requestSent">
        <?php $__env->startComponent('Components.selectLocal'); ?> 16 <?php echo $__env->renderComponent(); ?>
        <h3><i class="fa fa-check"></i><?php echo e(_t('auth.check_inbox')); ?></h3>
        <p><?php echo e(_t('auth.password_mail_text')); ?></p>
        <button type="button" class="btn blue backToLogin fromReset"><?php echo e(_t('auth.back')); ?></button>
    </div>
<?php echo Form::close(); ?>

<!-- END FORGOT PASSWORD FORM -->
</div>
<div class="login-footer">
    <div class="row bs-reset" style="margin: 0px;">
        <div class="col-xs-12 bs-reset">
            <div class="login-copyright text-center">
                <p><?php echo e(_t('auth.copyright')); ?> &copy; <?php echo date("Y"); ?></p>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('GuestLayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/app/Components/Themes/Base/Templates/Auth/userLoginStandard.blade.php ENDPATH**/ ?>