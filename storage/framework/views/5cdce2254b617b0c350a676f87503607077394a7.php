<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?> alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button><?php echo e(session('msg')); ?></div>
<?php endif; ?><?php /**PATH /opt/lampp/htdocs/users/shariqq/power-people-hrm/public_html/resources/views/shared/flash_message.blade.php ENDPATH**/ ?>