<header class = "header">
        <div class = "primary-menu">
            <div class = "header-logo">
                <a href = "/" >
                    <img class="ads-logo" src="https://academiadesuenos.com/wp-content/uploads/2023/10/academia-3.2.png" alt="Academia De Sueños" loading="lazy">
                </a>
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
