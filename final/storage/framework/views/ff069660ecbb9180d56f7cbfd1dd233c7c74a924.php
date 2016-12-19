<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('description', 'This is the dashboard'); ?>

<?php $__env->startSection('content'); ?>
			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
							<?php if(Auth::guest()): ?>
							Admin <small>Dashboard</small>
							<?php else: ?>
							<?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?>'s <small>Dashboard</small>
							<?php endif; ?>

                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
						<?php echo $__env->make('notifications.status_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo $__env->make('notifications.errors_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <p>You are now in the administrator section. This is the dashboard and nothing works but you are logged-in as an admin <i class="fa fa-smile-o fa"></i>. Once you are done looking around, you can <a href="<?php echo e(url('/logout')); ?>"
								onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
								<i class="fa fa-fw fa-power-off"></i> Log Out
							</a> by clicking  <a href="<?php echo e(url('/logout')); ?>"
								onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">here</a> or by hovering over your name and selecting logout on the dropdown menu on the top-right corner.</p>
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>