


<?php $__env->startSection('title', 'Список пользователей'); ?>
<div class="content-wrapper">
<ul>
  <div class="card card-primary card-outline col-lg-6">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-body box-profile">
      <div class="text-center">
        <img class="profile-user-img img-fluid img-circle"
             src="/admin/dist/img/user4-128x128.jpg"
             alt="User profile picture">
      </div>
      <h3 class="profile-username text-center"><?php echo e($user->name); ?></h3>
      <ul class="list-group list-group-unbordered mb-3">
        <li class="list-group-item">
          <b>ID</b> <a class="float-right"><?php echo e($user->id); ?></a>
        </li>
        <li class="list-group-item">
          <b>Email</b> <a class="float-right"><?php echo e($user->email); ?></a>
        </li>
        <li class="list-group-item">
          <b>Friends</b> <a class="float-right">13,287</a>
        </li>
      </ul>

      <a href="#" class="btn btn-danger col-lg3">Блокировать</a>
      <a href="#" class="btn btn-success col-lg3"><b>Администратор</b></a>
      <a href="#" class="btn btn-primary col-lg3"><b>Follow</b></a>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

</div>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\devit\resources\views/admin/home/list.blade.php ENDPATH**/ ?>