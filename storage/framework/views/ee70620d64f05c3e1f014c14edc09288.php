<?php $__env->startSection('content'); ?>
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add category</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?php echo e(route('category.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category Name</label>
                      <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Re-Enter Category Name</label>
                      <input type="text" name="name2"class="form-control" id="exampleInputPassword1">
                    </div>
                   
                    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                  </form>
                  <a href="<?php echo e(route('category.index')); ?>" class=" btn btn-primary float-end">View Categories</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Ecommerce_satyamMart\resources\views/dashboard/Category_forms.blade.php ENDPATH**/ ?>