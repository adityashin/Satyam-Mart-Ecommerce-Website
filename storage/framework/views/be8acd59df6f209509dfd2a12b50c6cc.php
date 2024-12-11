
<?php $__env->startSection('content'); ?>

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Categories</h5>
              <div class="card">
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Categories Id</th>
      <th scope="col">Categories Name</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($cat->id); ?></td>
      <td><?php echo e($cat->Cname); ?></td>
      <td>
        <a href="<?php echo e(route('category.edit',$cat->id)); ?>" class="btn btn-success text-decoration-none">Update</a>
      </td>
      <td>
        <form method="post" action="<?php echo e(route('category.destroy',$cat->id)); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="delete" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<a href="<?php echo e(route('category.create')); ?>" class="btn btn-success float-end text-decoration-none">Add Category</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Ecommerce_satyamMart\resources\views/dashboard/view_category.blade.php ENDPATH**/ ?>