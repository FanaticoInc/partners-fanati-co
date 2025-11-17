<!-- END PAGE CONTAINER -->
</div>
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        <?php echo date('Y') ?> &copy; <?php echo getConfig('company_information','company_name'); ?>

    </div>
    <div class="page-footer-tools">
        <span class="go-top">
        <i class="fa fa-angle-up"></i>
        </span>
    </div>
</div>
<!-- END FOOTER -->

<!-- END THEME SCRIPTS -->
<?php echo $__env->make('Admin.Layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
<!-- END THEME SCRIPTS -->
<?php echo defineFilter('homeBottom', '', 'root'); ?>

</div>
</body>
</html><?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Layout/footer.blade.php ENDPATH**/ ?>