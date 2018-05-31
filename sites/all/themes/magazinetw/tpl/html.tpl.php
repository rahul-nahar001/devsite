<?php

/**
 * @file html.tpl.php
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see nucleus_preprocess_html()
 */
 
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php print $head_title; ?></title>
<?php print $styles; ?><?php print $scripts; ?><?php print $head; ?>
<?php
	//Tracking code
	$tracking_code = theme_get_setting('general_setting_tracking_code', 'magazinetw');
	print $tracking_code;
	//Custom css
	$custom_css = theme_get_setting('custom_css', 'magazinetw');
	if(!empty($custom_css)):
?>
<style type="text/css" media="all">
<?php print $custom_css;
 ?>
</style>
<?php
	endif;
	$color_scheme = theme_get_setting('color_scheme', 'magazinetw');
	if(empty($color_scheme))
		$color_scheme = '#ff8100';
	if(isset($color_scheme) && !empty($color_scheme)){
?>
	<style type="text/css" media="all">
.tmtagline_about_us_title a:hover, .tmtagline_about_us_desc a:hover, .footerin_1 a:hover, .widget_tm_related_post ul li a:hover, .tm_sidebar_headline_titles a:hover, .type-post .blogin_titles_dark a:hover, .tm_recent_news_title a:hover, .tm_bricknews_1_titles a:hover, .tm_catsidebar_titles a:hover, .tm_authors_list_user a:hover, .tm_fourbox_titles a:hover, .type-post .blogin_titles a:hover, .tm_bricknews_2_titles a:hover, .tm_catpost_titles h1:hover, .widget_archive ul li a:hover, .widget_categories ul li a:hover, .widget_pages li a:hover, .widget_meta li a:hover, .widget_recent_comments li a:hover, .widget_recent_entries li a:hover, .widget_rss li a:hover, .widget_nav_menu li a:hover, .widget_nav_menu .menu li .sub-menu li a:hover, .tm_top_menu_title a:hover, .tm_top_menu_social a:hover, #forum a:hover, .ticker-content a:hover, .tm_sidebar_headline_gray_titles a:hover {
	color:<?php print $color_scheme;?>;
}
.tm_header, .override-background-color{ background-color:<?php print $color_scheme;?>!important; }
	</style>
<?php
	}
?>
</head>
<body class="home page page-id-8 page-template page-template-home_index_2-php <?php print $classes;?>" data-twttr-rendered="true" <?php print $attributes;?>>
<div id="skip-link"><a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>
<div id="tm_container"><?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?></div>
</body>
</html>
