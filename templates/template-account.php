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
    $user_data = wp_get_current_user();

    echo $user_data;

/*

<div class="account">
    <div class="account-container">
        <div class="account-header">
            <h1>My Account</h1>   
        </div>
        <div class="account-content">
            <div class="account-content-row">
                <div class="account-label">First Name</div>
                <div class="account-content-value"><?php echo $user_data->meta_firstname; ?></div>
            </div>
            <div class="account-content-row">
                <div class="account-content-label">Last Name</div>
                <div class="account-content-value"><?php echo $user_data->meta_lastname; ?></div>
            </div>
            <div class="account-content-row">
                <div class="account-content-label">Email</div>
                <div class="account-content-value"><?php echo $user_data->user_email; ?></div>
            </div>
        </div>
    </div>
</div>


*/

?>

<?php get_footer(); ?>