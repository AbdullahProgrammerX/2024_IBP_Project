<?php $__env->startSection('title','Create Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kitaplar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kitaplar</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kitaplar listesi</h3>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                        <a href="<?php echo e(route('admin.books.create')); ?>" class="btn btn-primary me-md-2 mb-1"><i class="bi bi-plus-lg"></i> Add books</a>
                        <div class="card-tools">
                            <form action="<?php echo e(route('admin.books.searchBooks')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="input-group input-group-md">
                                    <input type="text" class="form-control" placeholder="Search book" name="query">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                </div>

                            </form>

                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="m-2">
                            <tr class="table-primary">
                                <th style="width: 25px;">id</th>
                                <th>Parent id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th style="width: 50px;">Edit</th>
                                <th style="width: 50px;">Delete</th>
                                <th style="width: 50px;">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($rs->id); ?></td>
                                    <td><?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)); ?></td>
                                    <td><?php echo e($rs->name); ?></td>
                                    <td><?php echo e($rs->description); ?></td>
                                    <td style="width: 65px">
                                        <?php if($rs->image): ?>
                                            <img src="<?php echo e(Storage::url($rs->image)); ?>" class="img1 rounded m-0" style="width: 70px; height: 50px">
                                        <?php endif; ?>
                                    </td>
                                    <td><a href="<?php echo e(route('admin.books.edit',['id'=>$rs->id])); ?>" class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a></td>
                                    <td><a href="<?php echo e(route('admin.books.destroy',['id'=>$rs->id])); ?>" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                                    <td><a href="<?php echo e(route('admin.books.show',['id'=>$rs->id])); ?>" class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/admin/books/index.blade.php ENDPATH**/ ?>