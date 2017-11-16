<?php
function replace_excerpt($content) {
    $more = str_replace('[...]', '<span>...</span>', $content);
    $moreLink =  str_replace('<p><a class="btn btn-secondary understrap-read-more-link" href="'. get_permalink() .'">Read More...</a></p>',
        '<div class="more-link"><a href="'. get_permalink() .'">View profile</a></div>',
        $more);
    return $moreLink;
}
add_filter('the_excerpt', 'replace_excerpt');

