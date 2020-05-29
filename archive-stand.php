<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Sitepoint Base
 * @since Sitepoint Base 1.0
 */
$user_role = zr_get_user_role();

get_header(); 

switch ($user_role) {
    case 'zr_client':
        get_sidebar('client');
        break;

    case 'zr_admin':
        get_sidebar('admin');
    break;

    case 'zr_tech':
        get_sidebar('tech');
    break;
    
    default:
        get_sidebar();
    break;
}
?>

<main class="main">
    <div class="container-fluid">
        <div class="animated fadeIn">
            
            

            <?php 
                switch ($user_role) {
                    case 'zr_client':
                        get_template_part('partials/apparchive', 'client');
                    break;

                    case 'zr_tech':
                        get_template_part('partials/apparchive', 'tech');
                    break;

                    default:
                        get_template_part('partials/apparchive', 'tech');
                    break;
                }
            ?>



        </div>
    </div>
</main> <!-- /#maincontentcontainer -->

<?php get_sidebar('aside'); ?>

<?php get_footer(); ?>
