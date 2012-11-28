<?php

if (is_page('2') ) {
include(TEMPLATEPATH . '/headerBurghfield.php');
}

elseif (is_page('5') ) {
include(TEMPLATEPATH . '/headerGoring.php');
}

else (is_home() )  {
include(TEMPLATEPATH . '/headerHome.php');
}

?>