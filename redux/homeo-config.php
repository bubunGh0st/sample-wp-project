<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if ( ! class_exists( 'Redux' ) ) {
	return null;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'homeo_chakra';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// REQUIRED!!  Change these values as you need/desire.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	'menu_title'                => esc_html__( 'Homeochakra Settings', 'homeo' ),
	'page_title'                => esc_html__( 'Homeochakra Settings', 'homeo' ),

	// Disable this in case you want to create your own google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Choose an icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Choose an priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Set a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc.
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => null,

	// For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel.
	'page_slug'                 => '_options',

	// On load save the defaults to DB before user clicks save or not.
	'save_defaults'             => true,

	// If true, shows the default value next to each field that is not the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default. Suggested: *.
	'default_mark'              => '',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// CAREFUL -> These options are for advanced use only.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
	'output_tag'                => true,

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',

	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	'use_cdn'                   => true,
	'compiler'                  => true,

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => esc_html__( 'Documentation', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => esc_html__( 'Support', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-extensions',
	'href'  => 'redux.io/extensions',
	'title' => esc_html__( 'Extensions', 'your-textdomain-here' ),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
	'url'   => '//github.com/ReduxFramework/ReduxFramework',
	'title' => 'Visit us on GitHub',
	'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
	'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
	'title' => esc_html__( 'Like us on Facebook', 'your-textdomain-here' ),
	'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
	'url'   => '//twitter.com/reduxframework',
	'title' => esc_html__( 'Follow us on Twitter', 'your-textdomain-here' ),
	'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
	'url'   => '//www.linkedin.com/company/redux-framework',
	'title' => esc_html__( 'FInd us on LinkedIn', 'your-textdomain-here' ),
	'icon'  => 'el el-linkedin',
);

// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '<p>' . sprintf( __( '', 'homeo' ) . '</p>', '<strong>' . $v . '</strong>' );
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( '', 'homeo' ) . '</p>';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> BEGIN HELP TABS
 */

$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),

	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
);

Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';
Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> BEGIN SECTIONS
 *
 */

/* As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for. */

/* -> START Basic Fields. */

$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
);

/*===Header Settings Main Section===*/
$section = array(
	'title'  => esc_html__( 'Header Settings', 'homeo' ),
	'id'     => 'header-settings',
	'icon'   => 'el el-cog',
);
Redux::set_section( $opt_name, $section );

/*===Headeer Settings Sub Section===*/
$section = array(
	'title'			=> esc_html__('Top Buttons', 'homeo'),			//Header Top Section Buttons & Links
	'id'			=> 'top-buttons',
	'icon'			=> 'el el-link',
	'subsection'	=> true,
	'fields' 		=> array(
		array(
			'id'       => 'login-label',
			'type'     => 'text',
			'title'    => esc_html__( 'Login Label:', 'homeo' ),		
		),
		array(
			'id'       => 'login-link',
			'type'     => 'text',
			'title'    => esc_html__( 'Login Link:', 'homeo' ),	
		),
		array(
			'id'       => 'register-label',
			'type'     => 'text',
			'title'    => esc_html__( 'Register Label:', 'homeo' ),		
		),
		array(
			'id'       => 'register-link',
			'type'     => 'text',
			'title'    => esc_html__( 'Register Link:', 'homeo' ),			
		),
		array(
			'id'       => 'tc-label',
			'type'     => 'text',
			'title'    => esc_html__( 'T&C Label:', 'homeo' ),		
		),
		array(
			'id'       => 'tc-link',
			'type'     => 'text',
			'title'    => esc_html__( 'T&C Link:', 'homeo' ),			
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Top Logo', 'homeo'),			//Logo Settings
	'id'			=> 'top-logo',
	'icon'			=> 'el el-camera',
	'subsection'	=> true,
	'fields' 		=> array(
		array(
			'id'       => 'header-logo',
			'type'     => 'media',
			'title'    => esc_html__( 'Upload Logo', 'homeo' ),
			'compiler' => true,			
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Video Slider', 'homeo'),			//Home Video Slider Settings
	'id'			=> 'top-video',
	'icon'			=> 'el el-camera',
	'subsection'	=> true,
	'fields' 		=> array(
		array(
			'id'       => 'header-video',
			'type'     => 'text',
			'title'    => esc_html__( 'Insert Video Link:', 'homeo' ),
			'compiler' => true,			
		),
	),
);
Redux::set_section( $opt_name, $section );


/*===Body Settings Main Section===*/
$section = array(
	'title'  => esc_html__( 'Body Settings', 'homeo' ),
	'id'     => 'body-settings',
	'icon'   => 'el el-cog',
);
Redux::set_section( $opt_name, $section );

/*===Body Settings Sub Section===*/
$section = array(
	'title'  		=> esc_html__( 'Section Headings', 'homeo' ),			//Body Sections Heading
	'id'    		=> 'section-headings',
	'icon'  		=> 'el el-lines',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'       => 'section-headings-1',
			'type'     => 'text',
			'title'    => esc_html__( 'Section Heading 1:', 'homeo' ),			
		),
		array(
			'id'       => 'section-headings-2',
			'type'     => 'text',
			'title'    => esc_html__( 'Section Heading 2:', 'homeo' ),			
		),
		array(
			'id'       => 'section-headings-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Section Heading 3:', 'homeo' ),			
		),
		array(
			'id'       => 'section-headings-4',
			'type'     => 'text',
			'title'    => esc_html__( 'Section Heading 4:', 'homeo' ),			
		),
		array(
			'id'       => 'section-headings-5',
			'type'     => 'text',
			'title'    => esc_html__( 'Section Heading 5:', 'homeo' ),			
		),
		array(
			'id'       => 'section-headings-6',
			'type'     => 'text',
			'title'    => esc_html__( 'Section Heading 6:', 'homeo' ),			
		),
		array(
			'id'       => 'section-headings-7',
			'type'     => 'text',
			'title'    => esc_html__( 'Section Heading 7:', 'homeo' ),			
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__( 'Vision', 'homeo' ),						//The Vision Section
	'id'			=> 'vision',
	'icon'			=> 'el el-eye-open',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'vision-id',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'The Vision:', 'homeo' ),
		),
		array(
			'id'		=> 'vision-btn-txt',
			'type'		=> 'text',
			'title'		=> esc_html__( 'Button Text:', 'homeo' ),
		),
		array(
			'id'		=> 'vision-btn-link',
			'type'		=> 'text',
			'title'		=> esc_html__( 'Button Link:', 'homeo' ),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'  		=> esc_html__( 'Terms & Condition', 'homeo' ),			//Body T&C Section
	'id'    		=> 'body-tc',
	'icon'  		=> 'el el-check',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'       => 'tc-heading',
			'type'     => 'text',
			'title'    => esc_html__( 'T&C Heading:', 'homeo' ),			
		),
		array(
			'id'       => 'tc-icon',
			'type'     => 'media',
			'title'    => esc_html__( 'T&C Icon:', 'homeo' ),
			'compiler' => true,			
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__( 'Work Section', 'homeo' ),				//How to Work Section
	'id'			=> 'wrk-sec',
	'icon'			=> 'el el-wrench',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'wrk-sec-icn1',
			'type'		=> 'media',
			'title'		=> esc_html__( 'Section Icon-1:', 'homeo' ),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'wrk-sec-desc1',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Description-1:', 'homeo' ),
		),
		array(
			'id'		=> 'wrk-sec-icn2',
			'type'		=> 'media',
			'title'		=> esc_html__( 'Section Icon-2:', 'homeo' ),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'wrk-sec-desc2',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Description-2:', 'homeo' ),
		),
		array(
			'id'		=> 'wrk-sec-icn3',
			'type'		=> 'media',
			'title'		=> esc_html__( 'Section Icon-3:', 'homeo' ),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'wrk-sec-desc3',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Description-3:', 'homeo' ),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__( 'Registration Info', 'homeo' ),				//Registration Info Section
	'id'			=> 'reg-info',
	'icon'			=> 'el el-key',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'reg-info-icn1',
			'type'		=> 'media',
			'title'		=> esc_html__( 'Section Icon-1:', 'homeo' ),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'reg-info-desc1',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Description-1:', 'homeo' ),
		),
		array(
			'id'		=> 'reg-info-icn2',
			'type'		=> 'media',
			'title'		=> esc_html__( 'Section Icon-2:', 'homeo' ),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'reg-info-desc2',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Description-2:', 'homeo' ),
		),
		array(
			'id'		=> 'reg-info-icn3',
			'type'		=> 'media',
			'title'		=> esc_html__( 'Section Icon-3:', 'homeo' ),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'reg-info-desc3',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Description-3:', 'homeo' ),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__( 'Disclaimer', 'homeo' ),							//Body Disclaimer Section
	'id'			=> 'disclaim',
	'icon'			=> 'el el-warning-sign',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'disclaim-id',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Disclaimer:', 'homeo' ),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__( 'What is Homeopathy', 'homeo' ),					//Body What is Homeopathy & Homeopathy Can Help Section
	'id'			=> 'wt-homeopathy',
	'icon'			=> 'el el-plus-sign',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'homeopathy-img',
			'type'		=> 'media',
			'title'		=> esc_html__( 'Uplaod Image:', 'homeo' ),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'wt-homeopathy-desc',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'What is Homeopathy:', 'homeo' ),
		),
		array(
			'id'		=> 'help-homeopathy-desc',
			'type'		=> 'textarea',
			'title'		=> esc_html__( 'Homeopathy Can Help:', 'homeo' ),
		),
	),
);
Redux::set_section( $opt_name, $section );


/*===Footer Settings Main Section===*/
$section = array(
	'title'  => esc_html__( 'Footer Settings', 'homeo' ),
	'id'     => 'footer-settings',
	'icon'   => 'el el-cog',
);
Redux::set_section( $opt_name, $section );

/*===Footer Settings Sub Section===*/
$section = array(
	'title'			=> esc_html__('Footer Logo', 'homeo'),			//Logo Sections 
	'id'			=> 'ft-logo-settings',
	'icon'			=> 'el el-camera',
	'subsection'	=> true,
	'fields' => array(
		array(
			'id'       => 'footer-logo',
			'type'     => 'media',
			'title'    => esc_html__( 'Footer Logo', 'homeo' ),
			'compiler' => true,			
		),
		array(
			'id'		=> 'footer-text',
			'type'		=> 'textarea',
			'title'		=> esc_html__('Footer Description', 'homeo'),
		),
		
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Disclaimer Logo', 'homeo'),			//Disclaimer Sections 
	'id'			=> 'disclaim-settings',
	'icon'			=> 'el el-camera',
	'subsection'	=> true,
	'fields' => array(
		array(
			'id'       => 'disclaimer-logo',
			'type'     => 'media',
			'title'    => esc_html__( 'Disclaimer Logo:', 'homeo' ),
			'compiler' => true,			
		),
		array(
			'id'		=> 'disclaimer-link',
			'type'		=> 'text',
			'title'		=> esc_html__('Disclaimer Link:', 'homeo'),
		),
		array(
			'id'		=> 'disclaimer-btn-txt',
			'type'		=> 'text',
			'title'		=> esc_html__('Disclaimer Button Text:', 'homeo'),
		),
		
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Copyright Settings', 'homeo'),			//Copyright Section
	'id'			=> 'copyright-set',
	'icon'			=> 'el el-ban-circle',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'copyright-txt',
			'type'		=> 'text',
			'title'		=> esc_html__('Copyright Message:', 'homeo'),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__( 'Social Settings', 'homeo' ),		//Socical Sections
	'id'			=> 'ft-social-setting',
	'icon'			=> 'el el-facebook',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'fb-icn',
			'title'		=> esc_html__( 'FB Icon Class:', 'homeo' ),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'fb-link',
			'title'		=> esc_html__( 'Fb Link:', '' ),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'twit-icn',
			'title'		=> esc_html__( 'Twitter Icon Class:', 'homeo' ),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'twit-link',
			'title'		=> esc_html__( 'Twitter Link:', '' ),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'yt-icn',
			'title'		=> esc_html__( 'YT Icon Class:', 'homeo' ),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'yt-link',
			'title'		=> esc_html__( 'YT Link:', '' ),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'insta-icn',
			'title'		=> esc_html__( 'Insta Icon Class:', 'homeo' ),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'insta-link',
			'title'		=> esc_html__( 'Insta Link:', '' ),
			'type'		=> 'text',
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Contact Settings', 'homeo'),				//Contact Area Main Section
	'id'			=> 'contact-set',
	'desc'			=> esc_html__('Footer Contact Settings Goes Here'),
	'icon'			=> 'el el-address-book',
	'subsection'	=> true,
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Address Settings', 'homeo'),
	'id'			=> 'address-set',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'address-icon',
			'type'		=> 'media',
			'title'		=> esc_html__('Adress Icon:', 'homeo'),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'address-details',
			'type'		=> 'text',
			'title'		=> esc_html__('Adress:', 'homeo'),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Phone Settings', 'homeo'),
	'id'			=> 'phone-set',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'phone-icon',
			'type'		=> 'media',
			'title'		=> esc_html__('Phone Icon:', 'homeo'),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'phone-number',
			'type'		=> 'text',
			'title'		=> esc_html__('Phone Number:', 'homeo'),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'			=> esc_html__('Email Settings', 'homeo'),
	'id'			=> 'email-set',
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'id'		=> 'email-icon',
			'type'		=> 'media',
			'title'		=> esc_html__('Email Icon:', 'homeo'),
			'compiler'	=> true,
		),
		array(
			'id'		=> 'email-address',
			'type'		=> 'text',
			'validate' => 'email',
			'default'  => 'test@test.com',
			'title'		=> esc_html__('Email Address:', 'homeo'),
		),
	),
);
Redux::set_section( $opt_name, $section );

/*
 * <--- END SECTIONS
 */
