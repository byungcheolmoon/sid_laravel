<?php $__env->startSection('content'); ?>
  <form action="<?php echo e(route('sessions.store')); ?>" method="POST" role="form" class="form__auth">
    <?php echo csrf_field(); ?>


    <?php if($return = request('return')): ?>
      <input type="hidden" name="return" value="<?php echo e($return); ?>">
    <?php endif; ?>

    <div class="page-header">
      <h4>
        <?php echo e(trans('auth.sessions.title')); ?>

      </h4>
      <p class="text-muted">
        <?php echo e(trans('auth.sessions.description')); ?>

      </p>
    </div>

    <div class="form-group">
      <a class="btn btn-default btn-lg btn-block" href="<?php echo e(route('social.login', ['github'])); ?>">
        <strong>
          <i class="fa fa-github"></i>
          <?php echo e(trans('auth.sessions.login_with_github')); ?>

        </strong>
      </a>
    </div>

    <div class="login-or">
      <hr class="hr-or">
      <span class="span-or">or</span>
    </div>

    <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
      <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('auth.form.email')); ?>" value="<?php echo e(old('email')); ?>" autofocus/>
      <?php echo $errors->first('email', '<span class="form-error">:message</span>'); ?>

    </div>

    <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
      <input type="password" name="password" class="form-control" placeholder="<?php echo e(trans('auth.form.password')); ?>">
      <?php echo $errors->first('password', '<span class="form-error">:message</span>'); ?>

    </div>

    <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember" value="<?php echo e(old('remember', 1)); ?>" checked>
          <?php echo e(trans('auth.sessions.remember')); ?>

          <span class="text-danger">
            <?php echo e(trans('auth.sessions.remember_help')); ?>

          </span>
        </label>
      </div>
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-lg btn-block" type="submit">
        <?php echo e(trans('auth.sessions.title')); ?>

      </button>
    </div>

    <div>
      <p class="text-center">
        <?php echo trans('auth.sessions.ask_registration', ['url' => route('users.create')]); ?>

      </p>
      <p class="text-center">
        <?php echo trans('auth.sessions.ask_forgot', ['url' => route('remind.create')]); ?>

      </p>
      <p class="text-center">
        <small class="help-block">
          <?php echo e(trans('auth.sessions.caveat_for_social')); ?>

        </small>
      </p>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>