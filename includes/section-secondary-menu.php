<div class = "secondary-menu">
    <div class = "s-m-container">
        <?php
            // Output a primary navigation menu
            wp_nav_menu( array(
                'theme_location' => 'secondary',
                'menu_class'     => 'secondary-navbar',
            ) );
        ?>
        <div class = "s-m-bottom">
            <div class = "s-m-b-item">
                ENG <i class="fa-solid fa-angle-down" style="color: #000000;"></i>
            </div>
            <button class = "phone">(919) 505-4870</button>
        </div>
    </div>
</div>