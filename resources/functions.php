<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

// Include custom navwalker
require_once('bs4navwalker.php');

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

/* Begin custom code */

/*******  ADD CSS TO ASSETS ADDED THROUGH CUSTOMIZER  *******/

add_action('wp_head', 'mytheme_customize_css');

function mytheme_customize_css() {
?>
    <style type="text/css">
<?php
    //If a logo has been set in customizer, use it as the background for .navbar-brand
    if ( get_theme_mod( 'your_theme_logo' ) ) { ?>
        header.banner .container .navbar .navbar-brand {
            background: url(<?php echo get_theme_mod( 'your_theme_logo' ); ?>);
        }
<?php
   }
?>
    </style>
<?php
}

/*******  ADD NEW CONTROLS TO CUSTOMIZER  *******/

add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_register( $wp_customize ) {

    $wp_customize->add_setting('your_theme_logo');
    // Add a control to upload the logo
    $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
            array(
                'label' => 'Upload Logo',
                'section' => 'title_tagline',
                'settings' => 'your_theme_logo',
            )
        )
    );

    $wp_customize->add_setting('schema_json');
    // Add a control to input JSON Schema
    $wp_customize->add_control('schema_json',
        array (
            'label' => __('Schema JSON'),
            'section' => 'title_tagline',
            'setting' => 'schema_json',
            'type' => 'textarea'
        )
    );
}

/*******  GET JSON SCHEMA FROM CUSTOMIZER AND ADD TO HEAD  *******/

add_action('wp_head', 'addCustomSchema');

function addCustomSchema() {
    if(get_theme_mod('schema_json')) {
?>
        <script type='application/ld+json'>
            <?= get_theme_mod('schema_json'); ?>
        </script>
<?php
    }
}

/*******  Remove Yoast Schema  *******/

function bybe_remove_yoast_json($data){
    $data = array();
    return $data;
}
if(get_theme_mod('schema_json')) {
    add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);
}