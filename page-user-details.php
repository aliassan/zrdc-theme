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
    
    default:
        get_sidebar();
        break;
}
?>

<main class="main">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">User Details</div>
                            <div class="card-body">

                                <?php 
                                    //get_template_part('content', 'home');
                                    echo Caldera_Forms::render_form( 'CF5c7e926ea9c35' );
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> <!-- /#maincontentcontainer -->

<?php get_sidebar('aside'); ?>

<?php get_footer(); ?>
