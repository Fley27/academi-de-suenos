<footer  class = "footer">
        <div class = "f-container">
            <div class = "f-item">
                <div class = "f-i-title">Academia De Sueños</div>
                <div class = "f-i-links">
                    <div class = "f-i-link"><a href = "/">Home</a></div>
                    <div class = "f-i-link"><a href = "/about-us/">About</a></div>
                    <div class = "f-i-link"><a href = "/courses/">Courses</a></div>
                    <div class = "f-i-link"><a href = "/contact-us/">Contact</a></div>
                </div>
            </div>

            <div class = "f-item">
                <div class = "f-i-title"> Contact Information</div>
                <div class = "f-i-links">
                    <div class = "f-i-link"><a href = "#"><i class="fa-solid fa-location-dot"></i><span>Office Address: <br/> 2930 S. Yale Avenue <br/>Tulsa, OK 74114</span></a></div>
                    <div class = "f-i-link"><a href = "tel:+19182362932"><i class="fa-solid fa-phone"></i><span>Phone: <br/> + 1 (918) 236-2932</span></a></div>
                    <div class = "f-i-link"><a href = "mailto:info@academiadesuenos.com"><i class="fa-solid fa-envelope"></i><span>Email: <br/> info@academiadesuenos.com</span></a></div>
                </div>
            </div>

            <div class = "f-item">
                <div class = "f-i-title">More</div>
                <div class = "f-i-links">
                    <div class = "f-i-link"><a href = "/courses/naturalization/">Naturalization Courses</a></div>
                    <div class = "f-i-link"><a href = "/why-us">Why choose Academia De Sueños</a></div>
                </div>
            </div>
        </div>
        <div class = "f-bar"></div>
        <div class = "f-bottom">
            <div class = "f-copyright">© 2023 <span>Academia de Sueños.</span> All rights reserved.</div>
            <div class = "f-social-media">
                <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                <i class="fa-brands fa-linkedin" style="color: #fcfcfc;"></i>
                <i class="fa-brands fa-tiktok" style="color: #ffffff;"></i>
            </div>
        </div>
    </footer>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "252466904956995");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

        <!-- Your SDK code -->
        <script>
        window.fbAsyncInit = function() {
            FB.init({
            xfbml            : true,
            version          : 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

    <?php
        wp_footer();
    ?>

</html>