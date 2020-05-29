<div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url();?>">
                <i class="nav-icon fa fa-home"></i> Home
              </a>
            </li>
            <li class="nav-title">Applications</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_post_type_archive_link( 'application' ); ?>">
                <i class="nav-icon fa fa-history"></i> Pending Applications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_post_type_archive_link( 'application' ); ?>">
                <i class="nav-icon fa fa-clipboard"></i> All</a>
            </li>
            

            <li class="nav-title">Stands</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url() . '/new-stand'; ?>">
                <i class="nav-icon fa fa-asterisk"></i> Create New</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_post_type_archive_link( 'stand' ); ?>">
                <i class="nav-icon fa fa-map-o"></i> All Stands</a>
            </li>
            
            <!--<li class="nav-title">Profile</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url() . '/?page_id=15'; ?>">
                <i class="nav-icon icon-pencil"></i> Edit</a>
            </li>-->
           
            <li class="nav-item mt-auto">
              <a class="nav-link nav-link-success" href="<?php echo wp_logout_url( home_url() ); ?>" target="_top">
                <i class="nav-icon fa fa-sign-out"></i> Logout</a>
            </li>
          
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>