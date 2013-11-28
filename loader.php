<?php

$view = (isset($_GET['p']) && $_GET['p'] != '' )  ? $_GET['p'] : 'index';

if ( $view === 'index' ) {
    include('views/layout/header_big.phtml');
} else {
    include('views/layout/header_small.phtml');
}


$template = file_exists('views/' . $view . '/index.phtml') ? $view : '404';

echo '<div class="main">';

include('views/' . $template . '/index.phtml');

echo '</div>';

include('views/layout/footer.phtml');