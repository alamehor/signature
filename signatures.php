<?php
/*
Plugin Name: Signature
Description: Plugin for signatures
Author:MB
Version: 0.1
 */

//main signature plugin file - without table wp_signature & wp_signature_variables - to do
add_action('admin_menu', 'test_plugin_setup_menu');

function test_plugin_setup_menu()
{
    add_menu_page('Signature page', 'Signature', 'manage_options', 'signature-plugin', 'test_init');
    add_submenu_page('signature-plugin', 'Setup', 'Setup', 'signature-plugin', 'test_init2');
    add_submenu_page('signature-plugin', 'General Settings', 'General', 'manage_options', 'general-settings', 'general_settings');
    //  add_submenu_page( signature-plugin, 'Plugin Name Settings', 'Settings', 'administrator', 'signature-plugin-settings', 'displayPluginAdminSettings' );
}

function test_init()
{
    include 'editor.php';
}
function general_settings()
{
    include 'setup.php';
}
function example()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Example', 'Post Type General Name', 'twentythirteen'),
        'singular_name' => _x('Example', 'Post Type Singular Name', 'twentythirteen'),
        'menu_name' => __('Example', 'twentythirteen'),
        'parent_item_colon' => __('Parent Example', 'twentythirteen'),
        'all_items' => __('All Post', 'twentythirteen'),
        'view_item' => __('View Post', 'twentythirteen'),
        'add_new_item' => __('Add New Post', 'twentythirteen'),
        'add_new' => __('Add Post', 'twentythirteen'),
        'edit_item' => __('Edit Post', 'twentythirteen'),
        'update_item' => __('Update Post', 'twentythirteen'),
        'search_items' => __('Search Post', 'twentythirteen'),
        'not_found' => __('Not Found', 'twentythirteen'),
        'not_found_in_trash' => __('Not found in Trash', 'twentythirteen'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('Example', 'twentythirteen'),
        'description' => __('Example', 'twentythirteen'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('category', 'post_tag'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 4,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering your Custom Post Type
    register_post_type('example', $args);
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

add_action('init', 'example', 'example', 1);

add_action('after_setup_theme', 'example_featured_image');
function example_featured_image()
{
    add_theme_support('post-thumbnails', array('post', 'page', 'production_firm', 'example'));
}

add_filter('attachment_fields_to_edit', function ($form_fields, $post) {
    // Nothing to do if the attachment isn't an image
    if (!wp_attachment_is('image', $post)) {
        return $form_fields;
    }

    // First option
    $options = sprintf(
        '<option value="">%s</option>',
        esc_html__('Select', 'wpse-image-size-url')
    );

    // Generate options for all image sizes
    foreach ((array) get_intermediate_image_sizes() as $size) {
        // Fetch image url, width and height for the given size
        $src = wp_get_attachment_image_src($post->ID, $size);

        if (!is_array($src)) {
            continue;
        }

        // Generate a single option's value
        $value = sprintf(
            '%s %dx%d',
            esc_html($size),
            $src[1],
            $src[2]
        );

        // Generate HTML for a single option
        $options .= sprintf(
            '<option value="%s">%s</option>',
            esc_url($src[0]),
            $value
        );

    }

    // Generate HTML for the select box and input text    ---readonly
    $html = sprintf(
        '<select id="wpse-image-sizes" >%s</select>
         <input type="text" id="wpse-image-url" >',
        $options
    );

    // Handle the select box change
    $html .= '<script>
        (function($){
            $( "#wpse-image-sizes" ).on( "change", function(e) {
                $( "#wpse-image-url" ).val( this.value );
            });
        })(jQuery);
    </script>';

    // Setup our custom form field
    $form_fields['wpse-image-sizes'] = [
        'label' => esc_html__('URL Per Size', 'wpse-url-per-size'),
        'input' => 'html',
        'html' => $html,
    ];

    return $form_fields;

}, 10, 2);

function PHP_Include($params = array())
{

    extract(shortcode_atts(array(
        'file' => 'default',
    ), $params));

    ob_start();
    //include(get_theme_root() . '/' . get_template() . "/$file.php");
    include ABSPATH . 'wp-content/plugins/signaturez/' . $file . '.php';
    return ob_get_clean();
}
add_shortcode('phpinclude', 'PHP_Include');

add_filter('page_template', 'wpa3396_page_template');
function wpa3396_page_template($page_template)
{
    if (is_page('sample-page')) {
        $page_template = dirname(__FILE__) . '/utm.php';
    }
    return $page_template;
}   ?>
