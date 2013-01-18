<?php

if (is_page('2') ) {
include(TEMPLATEPATH . '/headerBurghfield.php');
}

elseif (is_page('5') ) {
include(TEMPLATEPATH . '/headerGoring.php');
}

elseif (is_home() )  {
include(TEMPLATEPATH . '/headerHome.php');
}

else {
include(TEMPLATEPATH . '/headerOther.php');
}

?>clude(TEMPLATEPATH . '/shared/headerBlog.php');
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