<?php

while(have_posts()): the_post();

?>
    <div style="
    position: relative;
    background-image: url('<?php echo the_post_thumbnail_url(); ?>');
    background-size: cover;
    background-position: center;
    height: 300px;
    color: white; 
    text-align: center;
    ">
    <div class="banner-content">
        <h2><?php echo get_the_title() ?></h2>
        <p><?php echo get_the_author() ?></p>
    </div>
</div>

    <article class='clase-text'>
    <?php echo the_content() ?>
    </article>
<?php
    
endwhile;

?>