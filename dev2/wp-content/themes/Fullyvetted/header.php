<?php

/* test for Burghfield page */
if (is_page('2') ) {
include(TEMPLATEPATH . '/shared/headerBurghfield.php');
}

/* test for Goring page */
elseif (is_page('5') ) {
include(TEMPLATEPATH . '/shared/headerGoring.php');
}

/* test for Blog page */
elseif (is_page('11') ) {
include(TEMPLATEPATH . '/shared/headerBlog.php');
}

/* test for Blog posts */
elseif ( 'post' == get_post_type() ) {
include(TEMPLATEPATH . '/shared/headerBlog.php');
}

/* test for Pet care posts */
elseif ( 'petcare' == get_post_type() ) {
include(TEMPLATEPATH . '/shared/headerPetcare.php');
}

elseif (is_page('9') ) {
include(TEMPLATEPATH . '/shared/headerPetcare.php');
}

/* test for Pet Health page */
elseif (is_page('106') ) {
include(TEMPLATEPATH . '/shared/headerPetHealth.php');
}

/* test for Homepage */
elseif (is_page('200') )  {
include(TEMPLATEPATH . '/shared/headerHome.php');
}

/* Display this as fallback */
else {
include(TEMPLATEPATH . '/shared/headerOther.php');
}

?>