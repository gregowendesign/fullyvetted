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

?>