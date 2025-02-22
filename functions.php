<?php
function enqueue_tailwind(){
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), '1.0', 'all');
    //wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind');

function adder(){
    add_theme_support('title-tag');  // adds the tag at the card
    add_theme_support('post-thumbnails'); //adds thumbnail after tag
}
add_action('after_setup_theme', 'adder');

function myblocks_init() {
	register_block_type( __DIR__ . '/build/blockzero' );
    register_block_type( __DIR__ . '/build/blockone' );
}
add_action( 'init', 'myblocks_init' );

add_theme_support('post-thumbnails');

set_post_thumbnail_size(300, 200, true);
add_image_size('custom-size', 600, 400, true);


function register_custom_menu() {
    register_nav_menu('primary', __('Primary Menu', 'tailwind'));
}
add_action('after_setup_theme', 'register_custom_menu');

function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/your-example-block' );
}
add_action( 'init', 'register_acf_blocks' );

function register_entry_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'entry_content',
            'title'             => __('Entry Content'),
            'description'       => __('A block for the top of the front page.'),
            'render_template'   => get_template_directory() . '/blocks/entry-block.php',
            'category'          => 'layout',
            'icon'              => 'menu',
            'keywords'          => array('body', 'front_page', 'entry'),
            'supports'          => array('align' => true),
        ));
    }
}
add_action('acf/init', 'register_entry_block');

function register_custom_fp_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'front_page_content',
            'title'             => __('Front Page Content'),
            'description'       => __('A block for front page descriptions.'),
            'render_template'   => get_template_directory() . '/blocks/fpcontent-block.php',
            'category'          => 'layout',
            'icon'              => 'menu',
            'keywords'          => array('body', 'front_page'),
            'supports'          => array('align' => true),
        ));
    }
}
add_action('acf/init', 'register_custom_fp_block');

function register_pomiar_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'Pomiar_content',
            'title'             => __('Pomiar Content'),
            'description'       => __('A block with pomiars.'),
            'render_template'   => get_template_directory() . '/blocks/pomiar-block.php',
            'category'          => 'layout',
            'icon'              => 'menu',
            'keywords'          => array('body', 'front_page'),
            'supports'          => array('align' => true),
        ));
    }
}
add_action('acf/init', 'register_pomiar_block');

function register_publishes_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'publishes',
            'title'             => __('Publishes'),
            'description'       => __('A block of publishes.'),
            'render_template'   => get_template_directory() . '/blocks/publishes-block.php',
            'category'          => 'layout',
            'icon'              => 'menu',
            'keywords'          => array('body', 'page'),
            'supports'          => array('align' => true),
        ));
    }
}
add_action('acf/init', 'register_publishes_block');

function register_audit_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'audit',
            'title'             => __('Audit'),
            'description'       => __('A block of our audits.'),
            'render_template'   => get_template_directory() . '/blocks/audit-block.php',
            'category'          => 'layout',
            'icon'              => 'menu',
            'keywords'          => array('body', 'contact'),
            'supports'          => array('align' => true),
        ));
    }
}
add_action('acf/init', 'register_audit_block');

function register_messg_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'contact',
            'title'             => __('Contact'),
            'description'       => __('A block for front page to sent the message.'),
            'render_template'   => get_template_directory() . '/blocks/contact-block.php',
            'category'          => 'layout',
            'icon'              => 'menu',
            'keywords'          => array('body', 'contact'),
            'supports'          => array('align' => true),
        ));
    }
}
add_action('acf/init', 'register_messg_block');

function remove_duplicates($content) {
    if (is_single() && has_post_thumbnail()) {
        $post_thumbnail = get_the_post_thumbnail(get_the_ID(), 'large');
        $content = str_replace($post_thumbnail, '', $content);
    }
    return $content;
}
add_filter('the_content', 'remove_duplicates');

include_once(ABSPATH . 'wp-content/plugins/advanced-custom-fields-pro/acf.php');