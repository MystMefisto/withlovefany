<?php
    /*
        Template Name: Listado de clases
    */
    get_header();
?>
<main class="container section">
    <?php
        get_template_part('template-parts/page');
    ?>

    <ul class='listed-grid'>
        <?php
            $args = array(
                'post_type' => 'fabyoc_clases'
            );

            $clases = new WP_Query($args);

            while($clases->have_posts()){
                $clases->the_post();
        ?>
        <li class="card">
        <?php the_post_thumbnail();?>
            <div class="content">
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
                    <p><?php the_field('duracion_curso')?></p>
                    <!-- Se usa para manejar en codigo ese valor < ?php get_field('duracion_curso')?> -->
                    <p><?php the_field('precio_curso')?></p>
            </div>
        </li>
        <?php
            }
            wp_reset_postdata();
         ?>
    </ul>

</main>

<?php
        get_footer();
    ?>