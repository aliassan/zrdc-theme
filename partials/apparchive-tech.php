<?php 
                $args = [
                    'post_type' => 'application',
                    'meta_query' => [
                        [
                            'key' => 'application_status',
                            'value' => 'pending',
                            //'compare' => '=',
                        ],
                    ],
                    'tax_query' => [
                        [
                            'taxonomy' => 'application_type',
                            'field' => 'slug',
                            'terms' => 'wl',
                        ],
                    ],
                ];
                
                $zr_query = new WP_Query($args);

                if($zr_query->have_posts()) : ?>

                    <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Pending Applications</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                        <th>Applicaton No.</th>
                                        <th>Application Date</th>
                                        <th>Application Made By</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php

                    while($zr_query->have_posts()) : 
                        $zr_query->the_post();?>

                        
                                        <tr>
                                        <td><?php the_title(); ?></td>
                                        <td><?php the_time('F jS, Y') ?></td>
                                        <td><?php the_author(); ?></td>
                                        <td>
                                            
                                            <a class="badge badge-success" href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"> 
                                                View   
                                            </a>
                                        </td>
                                        </tr>
                        <?php
                    endwhile;
                    wp_reset_postdata();?>
                </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                            <!-- /.row--><?php

                else:?>
                <p>Nothing Found</p><?php
                endif;
            ?>