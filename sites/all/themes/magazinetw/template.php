<?php 
global $base_url;

function magazinetw_preprocess_html(&$variables) {
	global $base_url;
	
	drupal_add_css(base_path().path_to_theme().'/css/bbpress.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/style.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/symple_shortcodes_styles.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/font-awesome.min.css', array('type' => 'external'));
	
	drupal_add_css(base_path().path_to_theme().'/css/thumbs-rating.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/checkbox.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/form.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/style_awesome.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/jquery.bxslider.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/swipebox.css', array('type' => 'external'));
	
	drupal_add_css(base_path().path_to_theme().'/css/style_magazine2.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/style_tab.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/style480_mobile.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/style320_mobile.css', array('type' => 'external'));
	
	drupal_add_css(base_path().path_to_theme().'/css/custom_css.css', array('type' => 'external'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&#038;subset=latin%2Clatin-ext%2Cgreek%2Cgreek-ext%2Cvietnamese%2Ccyrillic%2Ccyrillic-ext&#038;ver=3.9.1', array('type' => 'external'));
	drupal_add_css("http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A300%2C300italic%2C700&#038;subset=latin%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%2Cgreek-ext%2Cgreek%2Cvietnamese&#038;ver=3.9.1");
	drupal_add_css('http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C100%2C300%2C700&#038;subset=latin%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%2Cgreek-ext%2Cgreek%2Cvietnamese&#038;ver=3.9.1');
	
	
	//Skin default
	drupal_add_css(base_path().path_to_theme().'/css/skins/default.css', array('type' => 'external'));
	
	drupal_add_css(base_path().path_to_theme().'/css/update.css', array('type' => 'external'));
	
	
	drupal_add_js(base_path().path_to_theme().'/js/jquery.js?ver=1.11.0', array(
	  'type' => 'external',
	  'scope' => 'header',
	  'group' => JS_THEME,
	  'weight' => 1,
	));
	drupal_add_js(base_path().path_to_theme().'/js/jquery-migrate.min.js?ver=1.2.1', array(
	  'type' => 'external',
	  'scope' => 'header',
	  'group' => JS_THEME,
	  'weight' => 1,
	));
	drupal_add_js(base_path().path_to_theme().'/js/general.js?ver=4.0.1', array(
	  'type' => 'external',
	  'scope' => 'header',
	  'group' => JS_THEME,
	  'weight' => 1,
	));
	
	
	//JS Footer
	drupal_add_js(base_path().path_to_theme().'/js/editor.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery.bxslider.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/menu.navigation.js', array('type' => 'file', 'scope' => 'footer'));
	//drupal_add_js(base_path().path_to_theme().'/js/jquery.ticker.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery.swipebox.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/swipebox-ios-orientationchange-fix.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery.menuscrolltofixed.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/customs.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/symple_skillbar.js', array('type' => 'file', 'scope' => 'footer'));

	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/jquery.ui.core.min.js?ver=1.10.4', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/jquery.ui.widget.min.js?ver=1.10.4', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/jquery.ui.tabs.min.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/jquery.ui.accordion.min.js?ver=1.10.4', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/symple_accordion.js?ver=1.0', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/update.js', array('type' => 'file', 'scope' => 'footer'));
}



function magazinetw_form_comment_form_alter(&$form, &$form_state) {
  $form['comment_body']['#after_build'][] = 'magazinetw_customize_comment_form';
}

function magazinetw_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

function magazinetw_preprocess_page(&$vars) {
	
	if (isset($vars['node'])) {  
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
	}
	
	//404 page
	$status = drupal_get_http_header("status");  
	if($status == "404 Not Found") {      
		$vars['theme_hook_suggestions'][] = 'page__404';
	}
	if (isset($vars['node'])) :
        if($vars['node']->type == 'page'):
            $node = node_load($vars['node']->nid);
            $output = field_view_field('node', $node, 'field_show_page_title', array('label' => 'hidden'));
            $vars['field_show_page_title'] = $output;
			//sidebar
			$output = field_view_field('node', $node, 'field_sidebar', array('label' => 'hidden'));
            $vars['field_sidebar'] = $output;
        endif;
    endif;
	
	
}


// Remove superfish css files.
function magazinetw_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
	
//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}

function magazinetw_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		//disabled submit button
		//unset($form['actions']['submit']);
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	}
	if($form_id == 'contact_site_form'){
		$form['mail']['#attributes']['class'] = array("input-contact-form");
		$form['name']['#attributes']['class'] = array("input-contact-form");
		$form['subject']['#attributes']['class'] = array("input-contact-form");
		$form['message']['#attributes']['class'] = array("message-contact-form");
		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button'); 
	}
	if ($form_id == 'comment_form') {
		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments
	}
}
function magazinetw_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}
function magazinetw_breadcrumb($variables) {
	$crumbs ='';
	$breadcrumb = $variables['breadcrumb'];
	if (!empty($breadcrumb)) {
		
		foreach($breadcrumb as $value) {
			$crumbs .= '&nbsp;'.$value.' » ';
		}
		return $crumbs;
	}else{
		return NULL;
	}
}
//custom main menu
function magazinetw_menu_tree__main_menu($variables) {
	$str = '';
	$str .= '	<ul id="menu-main-menu" class="nav-menu">';
		$str .= $variables['tree'];
	$str .= '</ul>';
	
	return $str;
}
//custom top menu
function magazinetw_menu_tree__menu_top_menu($variables) {
	$str = '';
	$str .= '<div class="tm_top_menu_title">';
		$str .= '<ul class="top-menu">';
			$str .= $variables['tree'];
		$str .= '</ul>';
	$str .= '</div>';
	return $str;
}
//custom footer menu
function magazinetw_menu_tree__menu_footer_menu($variables) {
	$str = '';
	$str .= '<div class="footerin_1">';
		$str .= '<ul class="footer-menu">';
			$str .= $variables['tree'];
		$str .= '</ul>';
	$str .= '</div>';
	return $str;
}
function hook_preprocess_page(&$variables) {
       if (arg(0) == 'node' && is_numeric($nid)) {
    if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
      $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
      if (empty($variables['node_content']['field_show_page_title'])) {
        $variables['node_content']['field_show_page_title'] = NULL;
      }
    }
  }
}
