<?php
get_header();

if (!is_product()) {
    echo '<div class="row">';
    echo hivetheme()->template->render_part('sidebar', ['sidebar' => 'shop']);
}

echo '<main';

if (!is_product()) {
    echo ' class="col-sm-8 col-xs-12';

    if (!is_active_sidebar('shop')) {
        echo ' col-sm-offset-2';
    }
    
    echo '"';
}

echo '>';

woocommerce_content();

echo '</main>';

if (!is_product()) {
    echo '</div>';
}

get_footer();
?>
