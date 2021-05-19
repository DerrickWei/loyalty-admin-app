<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      <?php echo e(__('CT')); ?>

    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      <?php echo e(__('Creative Tim')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="<?php if($activePage == 'home'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('home')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Dashboard')); ?></p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="fab fa-laravel"></i>
          <p>
            <?php echo e(__("Laravel Examples")); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="<?php if($activePage == 'profile'): ?> active <?php endif; ?>">
              <a href="<?php echo e(route('profile.edit')); ?>">
                <i class="now-ui-icons users_single-02"></i>
                <p> <?php echo e(__("User Profile")); ?> </p>
              </a>
            </li>
            <li class="<?php if($activePage == 'users'): ?> active <?php endif; ?>">
              <a href="<?php echo e(route('user.index')); ?>">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> <?php echo e(__("User Management")); ?> </p>
              </a>
            </li>
          </ul>
        </div>
      <li class="<?php if($activePage == 'icons'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','icons')); ?>">
          <i class="now-ui-icons education_atom"></i>
          <p><?php echo e(__('Icons')); ?></p>
        </a>
      </li>
      <li class = "<?php if($activePage == 'maps'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','maps')); ?>">
          <i class="now-ui-icons location_map-big"></i>
          <p><?php echo e(__('Maps')); ?></p>
        </a>
      </li>
      <li class = " <?php if($activePage == 'notifications'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','notifications')); ?>">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p><?php echo e(__('Notifications')); ?></p>
        </a>
      </li>
      <li class = " <?php if($activePage == 'table'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','table')); ?>">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p><?php echo e(__('Table List')); ?></p>
        </a>
      </li>
      <li class = "<?php if($activePage == 'typography'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','typography')); ?>">
          <i class="now-ui-icons text_caps-small"></i>
          <p><?php echo e(__('Typography')); ?></p>
        </a>
      </li>
      <li class = "">
        <a href="<?php echo e(route('page.index','upgrade')); ?>" class="bg-info">
          <i class="now-ui-icons arrows-1_cloud-download-93"></i>
          <p><?php echo e(__('Upgrade to PRO')); ?></p>
        </a>
      </li>
    </ul>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\loyalty-admin-app\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>