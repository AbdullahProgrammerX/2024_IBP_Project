<?php $__env->startSection('title', 'user page'); ?>

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
                        <h1>Hoş geldiniz <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
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
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="row justify-content-star">
                    <div class="col-md-8">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/admin/img/4.jpg"
                                         alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/admin/img/5.jpg"
                                         alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/admin/img/6.jpg"
                                         alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/admin/img/7.jpg"
                                         alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/admin/img/8.jpg"
                                         alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!-- /.card-footer-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12" style="overflow: auto; height: 500px">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-bullhorn"></i>
                                        Duyurular
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duyuru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="callout callout-danger">
                                            <h5><?php echo e($duyuru->title); ?></h5>

                                            <p><?php echo e($duyuru->description); ?></p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
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
    <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/user/index.blade.php ENDPATH**/ ?>