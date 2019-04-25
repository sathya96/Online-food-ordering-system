<style>
    
</style>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in as <strong>ADMIN</strong>
                </div>
                <div>
                    <a class="btn btn-User Account " href="/usersaccount">User Account</a>
                    <a class="btn btn-Admin Account" href="/adminsaccount">Admin Account</a>
                    <a class="btn btn-Staff Account" href="/staffsaccount">Staff Account</a>
                     <a class="btn btn-Admin Products" href="/adminproduct">Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FYP\laravel\resources\views/admin.blade.php ENDPATH**/ ?>