<div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url();?>">
              <i class="nav-icon fa fa-home"></i> Home
              </a>
            </li>
            <li class="nav-title">Users</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url() . '/new-user'; ?>">
                <i class="nav-icon fa fa-user-plus"></i> New User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url() . '/all-users'; ?>">
                <i class="nav-icon fa fa-users"></i> All Users</a>
            </li>
            <li class="nav-title">Profile</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url() . '/user-details'; ?>">
                <i class="nav-icon fa fa-pencil"></i> Edit</a>
            </li>
           
            
            <li class="nav-item mt-auto">
              <a class="nav-link nav-link-success" href="<?php echo wp_logout_url( home_url() ); ?>" target="_top">
                <i class="nav-icon fa fa-sign-out"></i> Logout</a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>