<?PHP


function my_theme_enqueue_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css.css', array(), filemtime(get_template_directory() . '/assets/css.css'));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function register_footer_menus() {
    register_nav_menus(
        array(
            'footer-links-menu' => __( 'Footer Links Menu' ),
        )
    );
}
add_action( 'init', 'register_footer_menus' );
function my_theme_setup() {
    // Register navigation menus
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
        
    ));
}
add_action('after_setup_theme', 'my_theme_setup');


// Register Custom Post Type
function create_project_post_type() {
    $labels = array(
        'name' => __('Projects', 'Post Type General Name', 'Dynamic'),
        'singular_name' => __('Project', 'Post Type Singular Name', 'Dynamic'),
        'menu_name' => __('Projects', 'Dynamic'),
        'all_items' => __('All Projects', 'Dynamic'),
        'view_item' => __('View Project', 'Dynamic'),
        'add_new_item' => __('Add New Project', 'Dynamic'),
        'add_new' => __('Add New', 'Dynamic'),
        'edit_item' => __('Edit Project', 'Dynamic'),
        'update_item' => __('Update Project', 'Dynamic'),
        'search_items' => __('Search Project', 'Dynamic'),
        'not_found' => __('Not Found', 'Dynamic'),
        'not_found_in_trash' => __('Not found in Trash', 'Dynamic'),
    );

    $args = array(
        'label' => __('projects', 'Dynamic'),
        'description' => __('Project news and reviews', 'Dynamic'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );

    register_post_type('project', $args);
}

add_action('init', 'create_project_post_type', 0);