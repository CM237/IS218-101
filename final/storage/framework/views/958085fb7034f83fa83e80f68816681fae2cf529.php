<?php $__env->startSection('title', 'Register'); ?>
<?php $__env->startSection('description', 'Register to the admin area'); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="card-container text-center">
			<h1>Create Your Account</h1>
		</div>
	</div>
    <div class="container">

		<div class="row">
		  <?php echo $__env->make('notifications.status_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		  <?php echo $__env->make('notifications.errors_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		  <div class="col-md-6">
			<div class="card-container text-center">
				<img src="" alt="">
			</div>
		  </div>
		  <div class="col-md-6">
			<div class="card card-container">
				<form class="form-signin" method="POST" action="<?php echo e(url('/register')); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?php echo e(old('username')); ?>" required autofocus>
					<?php if($errors->has('username')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('name')); ?></strong>
						</span>
					<?php endif; ?>
					<input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" value="<?php echo e(old('first_name')); ?>"  required autofocus>
					<?php if($errors->has('first_name')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('name')); ?></strong>
						</span>
					<?php endif; ?>
					<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" value="<?php echo e(old('last_name')); ?>" required autofocus>
					<?php if($errors->has('last_name')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('name')); ?></strong>
						</span>
					<?php endif; ?>
					<input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="<?php echo e(old('email')); ?>" required autofocus>
					<?php if($errors->has('email')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('email')); ?></strong>
						</span>
					<?php endif; ?>
					<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
					<?php if($errors->has('password')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('password')); ?></strong>
						</span>
					<?php endif; ?>
					<input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>

					<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign up</button>
				</form><!-- /form -->
				<a href="<?php echo e(url('/password/forget')); ?>" class="forgot-password">Forgot password?</a> or <a href="<?php echo e(url('/username/forget')); ?>" class="forgot-password">Forgot username?</a>
			</div><!-- /card-container -->
		  </div>
		</div>


		<div class="card-container text-center">
			<a href="<?php echo e(url('/')); ?>" class="new-account">Back to Home page</a> or <a href="<?php echo e(url('/login')); ?>" class="new-account">Login</a>
		</div>

    </div><!-- /container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>