<?php


/* Login Form 
*/

function custom_login() { 
echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/login.css" />'; 
}
add_action('login_head', 'custom_login');

// Use your own external URL logo link

function wpc_url_login(){
	return "http://fullyvetted.co.uk/"; // your URL here
}
add_filter('login_headerurl', 'wpc_url_login');



//Surgery custom post type //

function surgery_post_type() {
  		$labels = array(
    		'name' => _x('Surgery', 'post type general name'),
    		'singular_name' => _x('Surgery', 'post type singular name'),
    		'add_new' => _x('Add New', 'surgery'),
    		'add_new_item' => __('Add New Veterinary Surgery'),
    		'edit_item' => __('Edit Surgery'),
    		'new_item' => __('New Surgery'),
    		'all_items' => __('All Surgeries'),
    		'view_item' => __('View Surgery'),
    		'search_items' => __('Search Surgery'),
    		'not_found' =>  __('No surgery found'),
    		'not_found_in_trash' => __('No surgeries found in Trash'), 
		    'parent_item_colon' => '',
    		'menu_name' => __('Surgeries')
			);
 		 $args = array(
    		'labels' => $labels,
    		'public' => true,
    		'publicly_queryable' => true,
    		'show_ui' => true, 
    		'show_in_menu' => true, 
    		'query_var' => true,
    		'rewrite' => true,
    		'capability_type' => 'post',
    		'has_archive' => true, 
    		'hierarchical' => true,
    		'menu_position' => 4,
    		'supports' => array( 'title')
  			);
  register_post_type('surgery',$args);
}

add_action( 'init', 'surgery_post_type' );


//add filter to ensure the surgery is displayed when user updates

function surgery_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['surgery'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Surgery updated. <a href="%s">View surgery</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Surgery updated.'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Surgery restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Surgery published. <a href="%s">View surgery</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Surgery saved.'),
    8 => sprintf( __('Surgery submitted. <a target="_blank" href="%s">Preview surgery</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Surgery scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview surgery</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Surgery draft updated. <a target="_blank" href="%s">Preview surgery</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $messages;
}
add_filter( 'post_updated_messages', 'surgery_updated_messages' );

//Staff custom post type //

function staff_post_type() {
  		$labels = array(
    		'name' => _x('Staff', 'post type general name'),
    		'singular_name' => _x('Staff members', 'post type singular name'),
    		'add_new' => _x('Add New', 'staff member'),
    		'add_new_item' => __('Add New Staff Member'),
    		'edit_item' => __('Edit Staff Member'),
    		'new_item' => __('New Staff Member'),
    		'all_items' => __('All Staff'),
    		'view_item' => __('View Staff Member'),
    		'search_items' => __('Search Staff Members'),
    		'not_found' =>  __('No staff members found'),
    		'not_found_in_trash' => __('No staff members found in Trash'), 
		    'parent_item_colon' => '',
    		'menu_name' => __('Staff Members')
			);
 		 $args = array(
    		'labels' => $labels,
    		'public' => true,
    		'publicly_queryable' => true,
    		'show_ui' => true, 
    		'show_in_menu' => true, 
    		'query_var' => true,
    		'rewrite' => true,
    		'capability_type' => 'post',
    		'has_archive' => true, 
    		'hierarchical' => true,
    		'menu_position' => 5,
    		'supports' => array( 'title','page-attributes','thumbnail'),
    		'taxonomies' => array('location')
  			);
  register_post_type('staff',$args);

}

add_action( 'init', 'staff_post_type' );


//add filter to ensure the surgery is displayed when user updates

function staff_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['staff'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Staff member updated. <a href="%s">View staff member</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Staff member updated.'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Staff member restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Staff member published. <a href="%s">View staff member</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Staff member saved.'),
    8 => sprintf( __('Staff member submitted. <a target="_blank" href="%s">Preview staff member</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Staff member scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview staff member</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Staff member draft updated. <a target="_blank" href="%s">Preview staff member</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $messages;
}
add_filter( 'post_updated_messages', 'staff_updated_messages' );

//Petcare custom post type //

function petcare_post_type() {
  		$labels = array(
    		'name' => _x('Pet Care', 'post type general name'),
    		'singular_name' => _x('Pet Care', 'post type singular name'),
    		'add_new' => _x('Add New', 'Pet Care Article'),
    		'add_new_item' => __('Add Pet Care Article'),
    		'edit_item' => __('Edit Pet Care Article'),
    		'new_item' => __('New Pet Care Article'),
    		'all_items' => __('All Pet Care Articles'),
    		'view_item' => __('View Pet Care Article'),
    		'search_items' => __('Search Pet Care Articles'),
    		'not_found' =>  __('No Pet Care Articles found'),
    		'not_found_in_trash' => __('No Pet Care Articles found in Trash'), 
		    'parent_item_colon' => '',
    		'menu_name' => __('Pet Care')
			);
 		 $args = array(
    		'labels' => $labels,
    		'public' => true,
    		'publicly_queryable' => true,
    		'show_ui' => true, 
    		'show_in_menu' => true, 
    		'query_var' => true,
        'rewrite' => true,	
        'capability_type' => 'post',
    		'has_archive' => true, 
    		'hierarchical' => true,
    		'menu_position' => 4,
        'supports' => array( 'title','editor', 'excerpt' ),
    		'taxonomies' => array('subjects') // this is IMPORTANT
  			);
  register_post_type('petcare', $args);
}

add_action( 'init', 'petcare_post_type' );



//add filter to ensure the surgery is displayed when user updates

function petcare_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['petcare'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Pet care article updated. <a href="%s">View article</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Pet care article updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Article restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Pet care article published. <a href="%s">View article</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Pet care article saved.'),
    8 => sprintf( __('Article submitted. <a target="_blank" href="%s">Preview surgery</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Article scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview article</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Article draft updated. <a target="_blank" href="%s">Preview article</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $messages;
}
add_filter( 'post_updated_messages', 'petcare_updated_messages' );



//Surgery page meta box

$meta_box['surgery'] = array(

    	'id' => 'surgery_details',   
    	'title' => 'Surgery details',    
    	'context' => 'normal',    
    	'priority' => 'high', 
    	'fields' => array(
        	array(
            	'name' => 'Surgery name',
     	        'desc' => 'Name of veterinary surgery',
    	        'id' => 'vet_name',
        	    'type' => 'text',
            	'default' => ''
        		),
	        array(
            	'name' => 'Telephone number',
	            'desc' => 'Surgery Telephone number',
    	        'id' => 'vet_tel',
        	    'type' => 'text',
            	'default' => ''
    	    	),
	        array(
            	'name' => 'Address line 1',
	            'desc' => '1st line of address',
    	        'id' => 'vet_address1',
        	    'type' => 'text',
            	'default' => ''
            	),
	        array(
            	'name' => 'Address line 2',
	            'desc' => '2nd line of address',
    	        'id' => 'vet_address2',
        	    'type' => 'text',
            	'default' => ''
            	),	
			array(
            	'name' => 'Postcode',
	            'desc' => 'Postcode',
    	        'id' => 'vet_Postcode',
        	    'type' => 'text',
            	'default' => ''
            	),        
        	array(
 	           'name' => 'Opening hours',
    	        'desc' => 'Opening hours',
        	    'id' => 'vet_hours',
            	'type' => 'text',
	            'default' => ''
    	    	),
	        array(
	            'name' => 'Surgery facilities',
    	        'desc' => 'A list of facilities seperated with commas',
        	    'id' => 'vet_facilities',
            	'type' => 'text',
	            'default' => ''
    		    ),
        	array(
  	          'name' => 'Surgery description',
    	        'desc' => 'A paragraph about the surgery',
        	    'id' => 'vet_desc',
            	'type' => 'textarea',
	            'default' => ''
		        ),
       	    array(
	            'name' => 'How to find us',
    	        'desc' => 'A paragraph of how to find the surgery',
        	    'id' => 'vet_find',
            	'type' => 'textarea',
	            'default' => ''
    	    	),        
	        array(
 	           'name' => 'Parking',
    	        'desc' => 'Instructions of where to park',
        	    'id' => 'vet_parking',
            	'type' => 'textarea',
	            'default' => ''
    		    )        
    		)
	);

//Staff page meta box
$meta_box['staff'] = array(

    	'id' => 'staff_members',   
    	'title' => 'Staff member details',    
    	'context' => 'normal',    
    	'priority' => 'high', 
    	'fields' => array(
        	array(
            	'name' => 'Full name',
     	        'desc' => 'Enter full name to appear',
    	        'id' => 'staff_name',
        	    'type' => 'text',
            	'default' => ''
        		),
	        array(
            	'name' => 'Credentials/Letters',
	            'desc' => 'Enter any letters that follow the name',
    	        'id' => 'staff_creds',
        	    'type' => 'text',
            	'default' => ''
    	    	),
        	array(
 	           'name' => 'Position / Job title',
    	        'desc' => 'Enter position / job title',
        	    'id' => 'staff_title',
            	'type' => 'text',
	            'default' => ''
    	    	),
	        array(
	            'name' => 'Pets',
    	        'desc' => 'A list of pets seperated with commas',
        	    'id' => 'staff_pets',
            	'type' => 'text',
	            'default' => ''
    		    )
    		)
	);

add_action('admin_menu', 'plib_add_box');

//Add thumbnail support

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 98, 98 );
}

//Add meta boxes to post types
function plib_add_box() {
    global $meta_box;
    
    foreach($meta_box as $post_type => $value) {
        add_meta_box($value['id'], $value['title'], 'plib_format_box', $post_type, $value['context'], $value['priority']);
    }
}

//Format meta boxes
function plib_format_box() {
  global $meta_box, $post;
 
  // Use nonce for verification
  echo '<input type="hidden" name="plib_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
  echo '<table class="form-table">';
 
  foreach ($meta_box[$post->post_type]['fields'] as $field) {
      // get current post meta data
      $meta = get_post_meta($post->ID, $field['id'], true);
 
      echo '<tr>'.
              '<th style="width:20%; font-weight:bold; font-size:1.2em;" ><label for="'. $field['id'] .'">'. $field['name']. '</label></th>'.
              '<td>';
      switch ($field['type']) {
          case 'text':
              echo '<input type="text" name="'. $field['id']. '" id="'. $field['id'] .'" value="'. ($meta ? $meta : $field['default']) . '" size="30" style="width:97%" />'. '<br />'. $field['desc'];
              break;
          case 'textarea':
              echo '<textarea name="'. $field['id']. '" id="'. $field['id']. '" cols="60" rows="4" style="width:97%">'. ($meta ? $meta : $field['default']) . '</textarea>'. '<br />'. $field['desc'];
              break;
          case 'select':
              echo '<select name="'. $field['id'] . '" id="'. $field['id'] . '">';
              foreach ($field['options'] as $option) {
                  echo '<option '. ( $meta == $option ? ' selected="selected"' : '' ) . '>'. $option . '</option>';
              }
              echo '</select>';
              break;
          case 'radio':
              foreach ($field['options'] as $option) {
                  echo '<input type="radio" name="' . $field['id'] . '" value="' . $option['value'] . '"' . ( $meta == $option['value'] ? ' checked="checked"' : '' ) . ' />' . $option['name'];
              }
              break;
          case 'checkbox':
              echo '<input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '"' . ( $meta ? ' checked="checked"' : '' ) . ' />';
              break;
      }
      echo     '<td>'.'</tr>';
  }
 
  echo '</table>';
 
}

// Save data from meta box
function plib_save_data($post_id) {
    global $meta_box,  $post;
    
    //Verify nonce
    if (!wp_verify_nonce($_POST['plib_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
 
    //Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
 
    //Check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    
    foreach ($meta_box[$post->post_type]['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }
}
 
add_action('save_post', 'plib_save_data');



// Customise menu items //

function remove_menu_items() {
  global $menu;
  $restricted = array(__('Links'), __('Comments'), __('Tools'), __('Appearance'));
  end ($menu);
  while (prev($menu)){
    $value = explode(' ',$menu[key($menu)][0]);
    if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
      unset($menu[key($menu)]);}
    }
  }

add_action('admin_menu', 'remove_menu_items');




/* Removes 28px margin at the top of the page */

add_action('get_header', 'my_filter_head');

function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */


function add_custom_taxonomies() {
	// Add new "Petcare-Subjects" taxonomy to Pet Care
	register_taxonomy('subjects', 'petcare', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'Pet Care Categories', 'taxonomy general name' ),
			'singular_name' => _x( 'Pet Care Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Pet Care Categories' ),
			'all_items' => __( 'All Pet Care Categories' ),
			'parent_item' => __( 'Parent Pet Care Category' ),
			'parent_item_colon' => __( 'Parent Pet Care Category:' ),
			'edit_item' => __( 'Edit Pet Care Category' ),
			'update_item' => __( 'Update Pet Care Category' ),
			'add_new_item' => __( 'Add New Pet Care Category' ),
			'new_item_name' => __( 'New Pet Care Category' ),
			'menu_name' => __( 'Pet Care Categories' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'pet-care', // This controls the base slug that will display before each term
			'with_front' => false , // Don't display the category base before 
			'hierarchical' => false // This will allow URL's like 
		),
	));

  register_taxonomy('location', 'staff', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Staff Location', 'taxonomy general name' ),
      'singular_name' => _x( 'Staff Location', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Staff Locations' ),
      'all_items' => __( 'All Staff Locations' ),
      'parent_item' => __( 'Parent Staff Location' ),
      'parent_item_colon' => __( 'Parent Staff Location:' ),
      'edit_item' => __( 'Edit Staff Location' ),
      'update_item' => __( 'Update Staff Locationt' ),
      'add_new_item' => __( 'Add New Staff Location' ),
      'new_item_name' => __( 'New Staff Location' ),
      'menu_name' => __( 'Staff Locations' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'staff', // This controls the base slug that will display before each term
      'with_front' => true , // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
 


// Change the Excerpt Length //

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

