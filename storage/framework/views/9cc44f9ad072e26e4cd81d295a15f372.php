<?php $__env->startSection('title','Create Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mesajlar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Mesajlar</li>
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
                    <h3 class="card-title">Mesajlar listesi</h3>
                </div>
                <div class="card-body">
                    <!-- /.card-header -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="m-2">
                            <tr class="table-primary">
                                <th style="width: 25px;">id</th>
                                <th style="width: 25px;">Sender</th>
                                <th style="width: 25px;">Reciver</th>
                                <th>Gonderilen mesaj</th>
                                <th>Cevap verilen mesaj</th>
                                <th>Tarih/Saat</th>
                                <th style="width: 120px;">Cevap ver</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($rs->id); ?></td>
                                    <td><?php echo e($rs->sender->name); ?></td>
                                    <td>
                                        <?php if($rs->receiver && $rs->receiver->name): ?>
                                            <?php echo e($rs->receiver->name); ?>

                                        <?php else: ?>
                                            New
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($rs->sendedMessage); ?></td>
                                    <td><?php echo e($rs->receivedMessage); ?></td>
                                    <td><?php echo e($rs->created_at); ?></td>
                                    <td>
                                        <?php if($rs->receivedMessage): ?>

                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled  style="margin-left: 10px; color: blue">
                                       <?php else: ?>
                                            <a href="<?php echo e(route('admin.message.show',['id'=>$rs->id])); ?>"
                                               class="btn btn-outline-success" data-toggle="tooltip"
                                               title="Cevap ver"><i class="bi bi-pencil-fill"></i></a>
                                       <?php endif; ?>
                                    </td>
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




<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/admin/message/index.blade.php ENDPATH**/ ?>