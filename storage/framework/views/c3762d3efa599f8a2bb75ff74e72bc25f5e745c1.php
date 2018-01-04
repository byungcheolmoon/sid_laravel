<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->
      <a class="navbar-brand" href="<?php echo e(auth()->check() ? route('home') : route('root')); ?>">
        <?php echo e(config('app.name', 'Laravel')); ?>

      </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        &nbsp;<li <?php echo str_contains(request()->path(), 'docs') ? 'class="active"' : ''; ?>>
          <a href="<?php echo e(url('docs')); ?>">
            <?php echo e(trans('docs.title')); ?>

          </a>
        </li>
        &nbsp;<li <?php echo str_contains(request()->path(), ['tags', 'articles']) ? 'class="active"' : ''; ?>>
           <a href="<?php echo e(route('articles.index')); ?>">
             <?php echo e(trans('forum.title')); ?>

           </a>
        </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        <?php if(Auth::guest()): ?>
          <li>
            <a href="<?php echo e(route('sessions.create', ['return' => urlencode($currentUrl)])); ?>">
              <?php echo e(trans('auth.sessions.title')); ?>

            </a>
          </li>
          <li>
            <a href="<?php echo e(route('users.create', ['return' => urlencode($currentUrl)])); ?>">
              <?php echo e(trans('auth.users.title')); ?>

            </a>
          </li>
        <?php else: ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="<?php echo e(route('sessions.destroy')); ?>">
                  <?php echo e(trans('auth.sessions.destroy')); ?>

                </a>
              </li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>