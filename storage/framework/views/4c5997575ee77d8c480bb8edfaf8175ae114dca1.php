<?php /* C:\xampp\htdocs\FYP\laravel\resources\views/view_edit_admin.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                <form method="post" action="/editadmin">
                <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" value=" <?php echo e($value->email); ?> ">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Name</label>
                    <input type="text" name="name" class="form-control" id="pwd" value=" <?php echo e($value->name); ?>">
                  </div>
                  <input type="hidden" name="id" class="form-control" id="pwd" value=" <?php echo e($value->id); ?>">
                  <button type="submit" class="btn btn-default">SAVE</button>

            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>