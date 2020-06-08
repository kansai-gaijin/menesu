<?php

namespace Menesu\Theme\App\Structure;

/*
|--------------------------------------------------------------------------
| Custom Shortcodes
|--------------------------------------------------------------------------
|
| This file is for registering your shortcodes. Shortcodes allows to facade
| a code logic behind readable piece of text. Below you have an example
| which facilitates outputing markup with template() helper function.
|
*/

use function Menesu\Theme\App\template;

/**
 * Renders a [button] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_button_shortcode($atts, $content)
{
    $attributes = shortcode_atts([
        'href' => '#'
    ], $atts);

    ob_start();

    template('shortcodes/button', compact('attributes', 'content'));

    return ob_get_clean();
}
add_shortcode('button', 'Menesu\Theme\App\Structure\render_button_shortcode');



/**
 * Renders a [therapist_list] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_therapist_list_shortcode($atts, $content)
{
    $attributes = shortcode_atts([
        
    ], $atts);

    ob_start();

    template('shortcodes/therapist-list', compact('attributes', 'content'));

    return ob_get_clean();
}
add_shortcode('therapist_list', 'Menesu\Theme\App\Structure\render_therapist_list_shortcode');

/**
 * Renders a [therapist_waiting] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_therapist_waiting_shortcode($atts, $content)
{
    $attributes = shortcode_atts([
        
    ], $atts);

    ob_start();

    template('shortcodes/waiting-list', compact('attributes', 'content'));

    return ob_get_clean();
}
add_shortcode('therapist_waiting', 'Menesu\Theme\App\Structure\render_therapist_waiting_shortcode');

/**
 * Renders a [therapist_schedule] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_therapist_schedule_shortcode($atts, $content)
{
    $attributes = shortcode_atts([
        
    ], $atts);

    ob_start();

    template('shortcodes/therapist-schedule', compact('attributes', 'content'));

    return ob_get_clean();
}
add_shortcode('therapist_schedule', 'Menesu\Theme\App\Structure\render_therapist_schedule_shortcode');
