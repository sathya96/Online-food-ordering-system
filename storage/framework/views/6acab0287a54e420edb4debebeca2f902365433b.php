<?php /* C:\xampp\htdocs\FYP\laravel\resources\views/admin_account.blade.php */ ?>
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
                <form method="GET" action="/search" class="form-inline mt-2 mt-md-0" style="padding-top: 8px;">
              <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
              <button type="submit" class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <br>
                <div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->password); ?></td>
                        <td><a href="/vieweditadmin/<?php echo e($value->id); ?>"> Edit</a></td>
                        <td><a href="/deleteadmin/<?php echo e($value->id); ?>"> Add</a></td>
                        <td><a href="/deleteadmin/<?php echo e($value->id); ?>"> Delete</a></td>
                      </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>