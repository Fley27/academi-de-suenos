<header class = "header">
        <div class = "primary-menu">
            <div class = "header-logo">
                <a href = "#" >Academia <br/> De Sueños</a>
            </div>

            <?php
                // Output a primary navigation menu
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'navbar',
                ) );
            ?>
            
            <div class = "right-nav">
                <div class = "lang-options">
                    <span class = "option">ENG</span>
                </div>
                <?php if(is_user_logged_in()): ?>
                    <a href = "/account" class = "user-account">My Account</a>
                <?php else: ?>
                    <a href = "/login" class = "join-now">Join Now!</a>
                <?php endif; ?>
            </div>
            <div class = "secondary-menu-button">
                <div class = "hamburger-icon">
                    <div class = "bar-0"></div>
                    <div class = "bar-1"></div>
                    <div class = "bar-2"></div>
                </div>
                <div class = "s-m-x-icon">
                    <i class="fa-solid fa-x" style="color: #000000;"></i>
                </div>
            </div>
        </div>
</header> 