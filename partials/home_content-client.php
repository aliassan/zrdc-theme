<div class="card">
    <div class="card-body">
        <h1>Welcome</h1>
        <h4>Get started:</h4>
        <?php 
            if(zr_is_details_entered()):?>
                <p>You can now make an application.</p>
                <p>Click here to create a new application.</p>
                <a class="btn btn-primary" href="<?php echo home_url() . '/new-application'; ?>">Make Application</a><?php
            else :?>
                <p>You have not entered any user details yet, you need to complete your profile before you can make an application.</p>
                <p>Click here to complete your profile.</p>
                <a class="btn btn-primary" href="<?php echo home_url() . '/user-details'; ?>">Complete Profile</a><?php
            endif;
        ?>
    </div>
</div>
