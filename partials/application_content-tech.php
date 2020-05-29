<?php 

    $data = [
        'action' => 'approve',
        'author_id' => 0,
        'post_id' => 0,
        'application_no' => '',
        'pref_center' => '',
        'stand_type' => '',
        'land_use' => '',
    ];

    while(have_posts()) : 
        the_post();?>
        <p><h3><?php the_title(); ?></h3></p><?php

        $data['post_id'] = get_the_ID();
        $data['application_no'] = get_the_title();

        $meta_fields = [
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'id_number' => 'ID No.',
            'date_of_birth' => 'Date of Birth',
            'marital_status' => 'Marital Status',
            'marriage_certificate_no' => 'Mariage Cettificate No.',
            'date_of_issue' => 'Date of Issue',
            'spouse_name' => 'Spouse Name',
            'spouse_surname' => 'Spouse Name',
            'spouse_id_no' => 'Spouse ID No.',
            'spouse_dob' => 'Spouse DOB',
            'postal_address' => 'Postal Address',
            'residential_address' => 'Residential',
            'mobile_number' => 'Mobile Number',
            'occupation' => 'Occupation',
            'monthly_income' => 'Mothly Income',
            'business_address' => 'Business Address',
            'no_of_dependants' => 'No. of Dependants',
            'no_of_years_resident' => 'No. Of Years Residant',
        ];

        $data['author_id'] = get_the_author_meta('ID');
    
        echo '<dl class="row">';

            foreach ($meta_fields as $key => $value) {
                $user_meta = get_user_meta((int)$data['author_id'], $key,true);
                if (!empty($user_meta)) {
                    echo '<dt class="col-sm-3">' . $value . '</dt><dd class ="col-sm-9">' . $user_meta . '</dd>';
                } 
            }
        echo '</dl>';
        

        $post_meta_fields = [
            'stand_type' => 'Land Use',
            'res_stand_type' => 'Stand Type',
            'non_stand_type' => 'Stand Type',
            'center' => 'Center',
            'other_stands' => 'Other Stands',
            'dev_capital' => 'Development Capital',
            'referee_name' => 'Referee Name',
            'referee_relationship' => 'Referee Relationship',
            'referee_address' => 'Referee Address',
            'application_status' => 'Application Status',
        ];

        echo '<dl class="row">';

        foreach ($post_meta_fields as $key => $value) {
            $post_meta = get_post_meta(get_the_ID(), $key, true);
            if(!empty($post_meta)) {
                echo '<dt class="col-sm-3">' . $value . '</dt><dd class ="col-sm-9">' . $post_meta . '</dd>';;
                switch ($key) {
                    
                    case 'stand_type':
                        $data['land_use'] = $post_meta;
                        break;
                    
                    case 'res_stand_type':
                    $data['stand_type'] = $post_meta;
                        break;
                    
                    case 'non_stand_type':
                    $data['stand_type'] = $post_meta;
                        break;

                    case 'center':
                    $data['pref_center'] = $post_meta;
                        break;

                    default:
                        # code...
                        break;
                }
            }
        }

        echo '</dl>';


    endwhile;


    $admin_url = admin_url('admin-post.php');

    $admin_post_url = add_query_arg( $data, $admin_url );

    ?><p><a class="btn btn-primary" href="<?php echo $admin_post_url; ?>">Approve Application</a></p><?php
            
?>