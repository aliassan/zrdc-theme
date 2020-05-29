<?php
	add_action( 'wp_enqueue_scripts', 'sitepointbase_scripts_styles'  );

	function sitepointbase_scripts_styles() {
		wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/vendors/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_style( 'simple-line-icons', get_stylesheet_directory_uri() . '/vendors/simple-line-icons/css/simple-line-icons.css' );
		wp_enqueue_style( 'coreui-bootstrap', get_stylesheet_directory_uri() . '/css/coreui-bootstrap.min.css'  );
		wp_enqueue_style( 'pace-progress', get_stylesheet_directory_uri() . '/css/pace.min.css' );
		wp_enqueue_style( 'zrdc-style', get_stylesheet_directory_uri() . '/css/zrdc.css', array('coreui-bootstrap'), 1.1);
		wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/js/popper.min.js', array('jquery'), 1.1, true );
		wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('popper'), 4.3, true );
		wp_enqueue_script( 'pace', get_stylesheet_directory_uri() . '/js/pace.min.js', array('bootstrap'), 1.1, true );
		wp_enqueue_script( 'perfect-scrollbar', get_stylesheet_directory_uri() . '/js/perfect-scrollbar.min.js', array('pace'), 1.1, true );
		wp_enqueue_script( 'coreui', get_stylesheet_directory_uri() . '/js/coreui.min.js', array('perfect-scrollbar'), 2.1, true  );
		wp_enqueue_script( 'zrdc-main', get_stylesheet_directory_uri() . '/js/main.js', array('coreui'), 1.1, true  );
	}

	add_filter('show_admin_bar', '__return_false');

	function my_login_logo() { ?>
		<style type="text/css">
			#login h1 a, .login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/zrdc.jpeg);
			height:150px;
			width:150px;
			background-size: 150px 150px;
			background-repeat: no-repeat;
				padding-bottom: 20px;
			}
		</style>
	<?php }
	
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	
?>
