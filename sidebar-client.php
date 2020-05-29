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
              <a class="nav-link" href="<?php if(zr_is_details_entered())
                echo home_url() . '/new-application';
              else
                echo home_url() . '/user-details'; ?>">
                <i class="nav-icon fa fa-asterisk"></i> New</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_post_type_archive_link( 'application' ); ?>">
                <i class="nav-icon fa fa-history"></i> Pending</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Approved</a>
            </li>-->
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