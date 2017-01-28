<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('description', 'Login to the admin area'); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="card-container text-center">
			<h1>Login</h1>
			<h2>Please login to your account</h2>
			<?php echo $__env->make('notifications.status_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		    <?php echo $__env->make('notifications.errors_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?php echo e(old('username')); ?>" required autofocus>
				<?php if($errors->has('username')): ?>
					<span class="help-block">
						<strong><?php echo e($errors->first('username')); ?></strong>
					</span>
				<?php endif; ?>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
				<?php if($errors->has('password')): ?>
					<span class="help-block">
						<strong><?php echo e($errors->first('password')); ?></strong>
					</span>
				<?php endif; ?>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember"> Remember Me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="<?php echo e(url('/password/reset')); ?>" class="forgot-password">Forgot password?</a> or <a href="<?php echo e(url('/username/reminder')); ?>" class="forgot-password">Forgot username?</a>
        </div><!-- /card-container -->
		<div class="card-container text-center">
			<a href="<?php echo e(url('/register')); ?>" class="new-account">Create an account</a> or <a href="<?php echo e(url('/activation/resend')); ?>" class="new-account">Resend activation code</a>
		</div>
		
    </div><!-- /container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>