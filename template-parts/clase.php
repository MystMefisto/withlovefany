<?php
    while(have_posts()): the_post();

    the_title('<h1 class="page-title">','</h1>');
    if(has_post_thumbnail()){
        the_post_thumbnail('full', array('class'=>'imagen-destacada'));
    }

        ?>
        <p><?php the_field('duracion_curso')?> - <?php the_field('precio_curso')?></p>
        <?php
    the_content();

endwhile;