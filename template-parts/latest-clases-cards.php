<?php

// Definir los parámetros de la consulta
$args = array(
    'post_type' => 'fabyoc_clases', // Tipo de publicación: entrada de blog
    'posts_per_page' => 6, // Número de entradas a mostrar
    'order' => 'DESC', // Ordenar las entradas de más reciente a más antigua
);

// Obtener las publicaciones
$posts = get_posts($args);

// Comprobar si hay publicaciones
if ($posts) {
    // Iterar sobre las publicaciones
    foreach ($posts as $post) {
        setup_postdata($post);
        // Mostrar el título de la entrada
        // Mostrar el contenido de la entrada
        //URL de la foto del post
        $postImage =  get_the_post_thumbnail_url();
        echo '
                <div class="blog" style="
                background: url('.$postImage.') no-repeat;
                background-size: 40em 25em;
                box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
                margin: auto;
                -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC);
                overflow: hidden;
                ">

                
                    <div class="title-box">
                    <a href="'.get_the_permalink().'">
                        <h3>
                            '. get_the_title() .'
                        </h3>
                    </div>  
                    <div class="info">
                        <span>'.get_the_excerpt().'</span>
                    </div>
                    <div class="blog-footer">
                        <div class="icon-holder">
                            <span>
                            <span>'.get_field('duracion_curso').'</span>
                            </span>
                            
                        <div class="intro">
                        <span>
                        '.get_field('precio_curso').'
                        </span>
                    </div>
                    </div>
                    </div>

                    <div class="color-overlay"></div>
                </div>';
    }
    // Restaurar datos de la publicación original
    wp_reset_postdata();
} else {
    // No se encontraron publicaciones
    echo 'No hay publicaciones disponibles.';
}