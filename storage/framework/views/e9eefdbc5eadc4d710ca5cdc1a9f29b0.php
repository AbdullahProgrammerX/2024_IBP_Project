<?php $__env->startSection('title','User List'); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make("user.layout.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make("user.layout.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kitaplar sayfası</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Ansayfa</a></li>
                            <li class="breadcrumb-item active">Kitaplar</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>
                            <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                                <div class="card-tools">
                                    <form action="<?php echo e(route('user.searchBooks')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="input-group input-group-md">
                                            <input type="text" class="form-control" placeholder="Search book" name="query">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 25px;">id</th>
                                    <th>Parent id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Author</th>
                                    <th>Image</th>
                                    <th style="width: 60px;">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($rs->id); ?></td>
                                        <td><?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)); ?></td>
                                        <td><?php echo e($rs->name); ?></td>
                                        <td><?php echo e($rs->price); ?></td>
                                        <td><?php echo e($rs->author); ?></td>
                                        <td style="width: 65px">
                                            <?php if($rs->image): ?>
                                                <img src="<?php echo e(Storage::url($rs->image)); ?>" class="img1 rounded m-0"
                                                     style="width: 70px; height: 50px">
                                            <?php endif; ?>
                                        </td>
                                        <td><a href="<?php echo e(route('user.showBooks',['id'=>$rs->id])); ?>"
                                               class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i
                                                    class="bi bi-eye-fill"></i></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- partial -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/user/books.blade.php ENDPATH**/ ?>