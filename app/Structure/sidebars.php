<?php

namespace Menesu\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Sidebars
|-----------------------------------------------------------
|
| This file is for registering your theme sidebars,
| Creates widgetized areas, which an administrator
| of the site can customize and assign widgets.
|
*/

use function Menesu\Theme\App\config;

/**
 * Registers the widget areas.
 *
 * @return void
 */
function register_widget_areas()
{
    register_sidebar([
        'id' => 'sidebar',
        'name' => __('Sidebar', config('textdomain')),
        'description' => __('Left Sidebar', config('textdomain')),
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
}
add_action('widgets_init', 'Menesu\Theme\App\Structure\register_widget_areas');
