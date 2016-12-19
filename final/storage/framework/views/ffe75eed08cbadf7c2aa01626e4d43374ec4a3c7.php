<?php $__env->startSection('title', 'This is a blank page'); ?>
<?php $__env->startSection('description', 'This is a blank page that needs to be implemented'); ?>

<?php $__env->startSection('content'); ?>
			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin <small>Blank Page</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Blank Page
                            </li>
                        </ol>
						<?php echo $__env->make('notifications.status_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo $__env->make('notifications.errors_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <p>You are now in the administrator section. This is a blank page and nothing works but you are logged-in as an admin <i class="fa fa-smile-o fa"></i>. Once you are done looking around, you can <a href="<?php echo e(url('/logout')); ?>"
								onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
								<i class="fa fa-fw fa-power-off"></i> Log Out
							</a> by clicking <a href="<?php echo e(url('/logout')); ?>"
								onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">here</a> or by hovering over your name and selecting logout on the dropdown menu on the top-right corner.</p>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>