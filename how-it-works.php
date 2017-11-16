<?php
/*
 * Template Name: How it works
 */

get_header(); ?>

<div class="title-section" style=" background: url('<?php echo get_theme_mod('background-page-works', ''); ?>') left/cover no-repeat;">

</div>

<main class="container how-it-works-content">
    <?php if ( have_posts() ) : ?>
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif; ?>

    <section class="start-variants-content">
        <ul class="row start-info">
            <?php
            $query = new WP_Query( array('post_type' => 'start-variants', 'posts_per_page' => 3 ) );
            if ($query->have_posts()):?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li class="col-md-4 start-variant">
                        <?php the_post_thumbnail('full'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <a href="templates.php" class="start-link">Get started</a>
                    </li>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </ul>
    </section>
</main>

<?php get_footer(); ?>
