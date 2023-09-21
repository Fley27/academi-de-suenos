<?php
    /* Template Name: My Account */
?>


<?php
    if(!is_user_logged_in()){
        wp_redirect('/login');
        exit;
    }
?>

<?php get_header('account'); ?>

<?php
    $user_data = get_userdata(get_current_user_id());

    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;

    // Get user meta data
    $user_meta = get_user_meta($user_id);


    echo "<pre>"; // Use <pre> for better formatting
    print_r($user_data);
    echo "</pre>";

?>

<div class="account">
    <div class="account-container">
        <div class="account-header">
            <h1>My Account</h1>   
        </div>
        <div class="account-content">
            <div class="account-content-row">
                <div class="account-content-label">Full Name:</div>
                <div class="account-content-value"><?php echo $user_data->display_name; ?></div>
            </div>
            <div class="account-content-row">
                <div class="account-content-label">Email</div>
                <div class="account-content-value"><?php echo $user_data->user_email; ?></div>
            </div>

            <?php 
                foreach ($user_meta as $key => $value) {
                    # code...
                }
            ?>
            <div class="account-content-row">
                <div class="account-content-label">Phone Number</div>
                <div class="account-content-value"><?php echo $user_meta->phone-1; ?></div>
            </div>
            <div class="account-content-row">
                <div class="account-content-label">Address</div>
                <div class="account-content-value"><?php echo $user_meta->address-1-street_address; ?></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>3