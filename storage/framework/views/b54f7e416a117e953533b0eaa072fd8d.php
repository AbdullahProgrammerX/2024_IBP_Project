<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Yeni mesaj</h3>
                </div>
                <div class="card-body">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <?php echo e($message); ?>

                        </div>
                    <?php endif; ?>
                    <form id="messageForm" role="form" action="<?php echo e(route('user.message.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="sendedMessage" class="col-sm-2 col-form-label">Mesaj yaz</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="sendedMessage" id="sendedMessage">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" >Gönder</button>

                    </form>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        function myFunction() {
            var txt;
            if (confirm("Gönderilsin mi?")) {
                txt = "Gönderildi!";
            } else {
                txt = "Gönderilmedi!";
            }
            document.getElementById("demo").innerHTML = txt;
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userbase2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/user/message/create.blade.php ENDPATH**/ ?>