
<?php $__env->startSection('content'); ?>

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Categories</h5>
              <div class="card">
                <div class="card-body">
                <table class="table table-dark table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($pro->id); ?></td>
                      <td><?php echo e($pro->Cname); ?></td>
                      <td><?php echo e($pro->pname); ?></td>
                      <td><?php echo e($pro->pdescription); ?></td>
                      <td><?php echo e($pro->price); ?></td>
                      <td>
                     <img src="<?php echo e(asset('images/'. $pro->image)); ?>" alt="" height=150 width=150>
                      </td>
                      <td>
                        <a href="<?php echo e(route('product.edit',$pro->id)); ?>" class="btn btn-primary">Update</a>
                      </td>
                      <td>
                        <form method="post" action="<?php echo e(route('product.destroy',$pro->id)); ?>">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
                          <button type="delete" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
<a href="<?php echo e(route('product.create')); ?>" class="btn btn-success float-end text-decoration-none">Add Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Ecommerce_satyamMart\resources\views/dashboard/view_product.blade.php ENDPATH**/ ?>