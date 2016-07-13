<?php
if (have_posts()):
    while(have_posts()) : the_post();
    endwhile;
    else:
        echo'<p>no content found</p>'
?>