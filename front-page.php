<?php
    get_header();
?>
<img class='banner' src="https://previews.dropbox.com/p/thumb/ACPYiSSCj597FDdSLiDHaDr68OeckOyK-0tz_a4fUe0yJ3m1FSk39l59eWFq0_QnMwR-wuUTwtB1lqnwr3nLnBgx7SEjR9ean37jV6PjwjibC3XVidM4sxmDFanhULlBB8FKJKuB5P35oRXFn65WKZfo5JqP0Evn6fQYemIFZnYF860ardLAbSw8HpPsrvEAZz_3gFsJNABgT8f1d0Ey9750Lp4sHSIu5l9snN9qcTlkRimDRrp_7N9vJ0RaJaXVrS5ujjAZPqBeoXOPhPaDkdQu0OCcZo0nXD9wvtAFcXyttyzkgA5q2qwBFQXvGJI8DW4Rvzgr0YY1JzerJZy-RduB/p.png">
<main class='frontpage-container'>

</main>

  <section class="menu-container">
        <?php
            get_template_part( 'template-parts/simple-menu-show');
        ?>
  </section>

  <section class="section-container">
    <h2 class='section-title'>Artículos recientes</h2>
    <?php
        get_template_part('template-parts/latest-blog-cards');
    ?>
  </section>

  <section class="section-container">
    <h2 class='section-title'>Cursos</h2>
    <?php
        get_template_part('template-parts/latest-clases-cards');
    ?>
  </section>
<?php
        get_footer();
    ?>