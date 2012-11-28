<?php


// Custom meta-box function //

//We create an array called $meta_box and set the array key to the relevant post type
$meta_box['page'] = array( 
    
    //This is the id applied to the meta box
    'id' => 'post-format-meta',   
    
    //This is the title that appears on the meta box container
    'title' => 'Surgery Information',    
    
    //This defines the part of the page where the edit screen section should be shown
    'context' => 'normal',    
    
    //This sets the priority within the context where the boxes should show
    'priority' => 'high', 
    
    //Here we define all the fields we want in the meta box
    'fields' => array(
        array(
            'name' => 'Surgery Name',
            'tel' => 'Telephone number',
            'open' => 'Opening hours',
            'facilities' => 'Surgery facilities',
            'desc' => 'Description of the surgery',
            'default' => ''
        ),
        array(
            'name' => 'Meet the team',
            'picture' => 'Picture file name',
            'fullname' => 'Full Name of staff member',
            'creds' => 'Staff Credentials',
            'position' => 'Position',
            'pets' => 'Pets owned',
            'default' => ''
        )
    )
);

add_action('admin_menu', 'plib_add_box');

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
              '<th style="width:20%"><label for="'. $field['id'] .'">'. $field['name']. '</label></th>'.
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
      echo     '<td>'.'</tr>';
  }
 
  echo '</table>';
 
}




?>