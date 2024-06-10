<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>CONTACT US</h3>
            <ul>
                    <li><a href="#"> PO Box 25446 Overland Park, KS 66225</a></li>
                    <li><a href="#">Email: info@SRD.ngo</a></li>
                    <li><a href="#">913-522-3184</a></li>
                    <li><a href="#">Tax ID: 45-3737015</a></li>



                </ul>
        </div>

        <div class="footer-column">
            <h3>QUICK LINKS</h3>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-links-menu',
                'container' => false,
                'menu_class' => 'footer-menu'
            ));
            ?>
        </div>

        <div class="footer-column">
            <h3>INSTAGRAM FEEDS</h3>
            <ul>
                    <li><a href="#">example.example</a>
                    </li>
                    <li><a href="#">Policy on Medical Neutrality and Impartiality</a> </li>
                </ul>
        </div>
    </div>

    <div class="icons-footer">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook-icon.png" alt="Facebook" style="width: 30px;"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram-icon.png" alt="Instagram" style="width: 30px;"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter-icon.png" alt="Instagram" style="width: 30px;"></a>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 Syria Relief & Development Privacy Policy</p>
    </div>
</footer>


