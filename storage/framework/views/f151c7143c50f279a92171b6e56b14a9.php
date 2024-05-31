<?php $__env->startSection('title','Kitap'); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make("user.layout.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make("user.layout.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kitap detayı</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('user.books')); ?>">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Kitap detayı</li>
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
                    <h3 class="card-title">Kitap listesi</h3>
                </div>
                <div class="card-body">
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <aside class="col-lg-4">
                                    <div class="gallery-wrap">
                                        <div class="img-big-wrap img-thumbnail d-block my-auto">
                                            <a href="<?php echo e(Storage::url($data->image)); ?>" data-type="image" data-fslightbox="mygallery" target="_blank">
                                                <img class="img1 img-thumbnail d-block" src="<?php echo e(Storage::url($data->image)); ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </aside>
                                <main class="col-lg-8">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <td><?php echo e($data->id); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td><?php echo e($data->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Keyword</th>
                                            <td><?php echo e($data->keywords); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Author</th>
                                            <td><?php echo e($data->author); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Publisher</th>
                                            <td><?php echo e($data->publisher); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td><?php echo e($data->price); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Created Date</th>
                                            <td><?php echo e($data->created_at); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Updated Date</th>
                                            <td><?php echo e($data->updated_at); ?></td>
                                        </tr>
                                    </table>
                                </main>
                            </div>
                        </div>
                    </section>
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





<?php echo $__env->make('layouts.userbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/user/showBooks.blade.php ENDPATH**/ ?>