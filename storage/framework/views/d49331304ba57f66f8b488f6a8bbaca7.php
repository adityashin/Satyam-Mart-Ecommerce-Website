
<?php $__env->startSection('content'); ?>
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Product</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?php echo e(route('product.store')); ?>" enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Product Category / Type</label>
                      <select name="category" class="form-control">
                        <option value="Select Category" hidden selected>Select Category👜</option>
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->Cname); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Description</label>
                      <textarea rows="" cols="" class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Price</label>
                      <input type="Number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                    <a href="<?php echo e(route('product.index')); ?>" class="btn btn-success text-right">View Products</a>
                  </form>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Ecommerce_satyamMart\resources\views/dashboard/add_product.blade.php ENDPATH**/ ?>