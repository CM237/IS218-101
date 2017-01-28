<?php $__env->startSection('content'); ?>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"></h1>
                <hr>
				<?php echo $__env->make('notifications.status_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->make('notifications.errors_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <p></a>  <a href="">WELCOME TO LARAVEL</a>.</p>
                <a href="<?php echo e(url('/login')); ?>" class="btn btn-primary btn-xl page-scroll">Login</a>  <a href="<?php echo e(url('/register')); ?>" class="btn btn-danger btn-xl page-scroll">Register</a>
            </div>
        </div>
    </header>

	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"></h2>
                    <hr class="primary">
                    <p></a></p>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="<?php echo e(url('/login')); ?>" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-user sr-contact"></i> Login</a>
					<a href="<?php echo e(url('/register')); ?>" class="btn btn-danger btn-xl page-scroll"><i class="fa fa-user-plus  sr-contact"></i> Register</a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>
            </div>
        </div>
    </aside>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>