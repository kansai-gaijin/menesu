<?php

namespace Menesu\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Templates Actions
|-----------------------------------------------------------
|
| This file purpose is to include your templates rendering
| actions hooks, which allows you to render specific
| partials at specific places of your theme.
|
*/

use function Menesu\Theme\App\template;

/**
 * Renders post thumbnail by its formats.
 *
 * @see resources/templates/index.tpl.php
 */
function render_post_thumbnail()
{
    template(['partials/post/thumbnail', get_post_format()]);
}
add_action('theme/index/post/thumbnail', 'Menesu\Theme\App\Structure\render_post_thumbnail');

/**
 * Renders empty post content where there is no posts.
 *
 * @see resources/templates/index.tpl.php
 */
function render_empty_content()
{
    template(['partials/index/content', 'none']);
}
add_action('theme/index/content/none', 'Menesu\Theme\App\Structure\render_empty_content');

/**
 * Renders post contents by its formats.
 *
 * @see resources/templates/single.tpl.php
 */
function render_post_content()
{
    template(['partials/post/content', get_post_format()]);
}
add_action('theme/single/content', 'Menesu\Theme\App\Structure\render_post_content');

/**
 * Renders sidebar content.
 *
 * @uses resources/templates/partials/sidebar.tpl.php
 * @see resources/templates/index.tpl.php
 * @see resources/templates/single.tpl.php
 */
function render_sidebar()
{
    get_sidebar();
}
add_action('theme/index/sidebar', 'Menesu\Theme\App\Structure\render_sidebar');
add_action('theme/single/sidebar', 'Menesu\Theme\App\Structure\render_sidebar');

/**
 * Renders [button] shortcode after homepage content.
 *
 * @uses resources/templates/shortcodes/button.tpl.php
 * @see resources/templates/partials/header.tpl.php
 */
function render_documentation_button()
{
    echo do_shortcode("[button href='https://github.com/tonik/tonik']Checkout documentation →[/button]");
}
add_action('theme/header/end', 'Menesu\Theme\App\Structure\render_documentation_button');

/**
 * Renders page contents by its formats.
 *
 * @see resources/templates/page-single.tpl.php
 */
function render_page_content()
{
    template('partials/page/content');
}
add_action('theme/page/content', 'Menesu\Theme\App\Structure\render_page_content');

/**
 * Renders page title
 *
 * @see resources/templates/page-single.tpl.php
 */
function render_page_title()
{
    template('partials/page/page-title');
}
add_action('theme/page/title', 'Menesu\Theme\App\Structure\render_page_title');

/**
 * Renders page contents by its formats.
 *
 * @see resources/templates/page-single.tpl.php
 */
function render_therapist_content()
{
    template('partials/therapist/content');
}
add_action('theme/therapist/content', 'Menesu\Theme\App\Structure\render_therapist_content');

/**
 * Renders page title
 *
 * @see resources/templates/page-single.tpl.php
 */
function render_therapist_title()
{
    template('partials/therapist/page-title');
}
add_action('theme/therapist/title', 'Menesu\Theme\App\Structure\render_therapist_title');