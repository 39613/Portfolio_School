<?php
get_header();
?>
<main class="container">
    <section class="page-intro">
        <p class="eyebrow">Pagina</p>
        <h1><?php the_title(); ?></h1>
    </section>
    <article class="content-card">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </article>
</main>
<?php get_footer(); ?>
