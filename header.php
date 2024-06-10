<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<section class="top-bar">
            <div class="icons">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svgexport-6-3.svg" alt="Facebook"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svgexport-17-8.svg" alt="Instagram"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svgexport-17-9.svg" alt="LinkedIn"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/svgexport-17-10.svg" alt="Twitter"></a>
            </div>
        </section>
        <section class="headers" id="header">
            <div class="header-content">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/sasa.jpg" alt="Syria Relief & Development">
                </div>
    <nav>   
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => false,
            'menu_class' => 'header-menu'
        ));
        ?>
    </nav>
    <button class="donate"><a href="#">DONATE NOWS</a></button>
            </div>
        </section>
    </div>

</header>
<br>

</body>

 
