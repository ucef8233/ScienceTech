<?php 
	function disable_default_dashboard_widgets() { 
 
	remove_meta_box('dashboard_right_now', 'dashboard', 'core'); 
	remove_meta_box('dashboard_activity', 'dashboard', 'core'); 
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); 
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core'); 
	remove_meta_box('dashboard_plugins', 'dashboard', 'core'); 
 
	remove_meta_box('dashboard_quick_press', 'dashboard', 'core'); 
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core'); 
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core'); 
} 
// add_action('admin_menu', 'disable_default_dashboard_widgets'); 
// disable those value for non admin users
if (!current_user_can('manage_options')) { 
    // add_action('wp_dashboard_setup', 'disable_default_dashboard_widgets'); 
    add_action('admin_menu', 'disable_default_dashboard_widgets'); 
}

// replace howdy
function replace_howdy_with_your_text( $wp_admin_bar ) { 
	$account_info=$wp_admin_bar->get_node('my-account'); 
	$your_title = str_replace( 'Howdy,', '', $account_info->title ); 
	$wp_admin_bar->add_node( array( 
    	'id' => 'my-account', 
    	'title' => $your_title, 
	) ); 
} 
add_filter( 'admin_bar_menu', 'replace_howdy_with_your_text', 25 );



// Change wordpress dashboard footer text.
function custom_footer_admin_text () { 
    echo ""; 
} 
add_filter('admin_footer_text', 'custom_footer_admin_text'); 

?>