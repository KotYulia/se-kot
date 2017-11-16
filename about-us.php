<?php
/*
 * Template Name: About us
 */

get_header(); ?>

<main class="about-main">
    <div class="container">
        <section class="row d-flex align-items-start about-us-info">
            <div class="col-md-6 col-lg-8 about-content">
                <?php if ( have_posts() ) : ?>
                    <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif; ?>
            </div>
            <aside class="col-md-6 col-lg-4 about-aside">
                <?php if( get_field('choose_us') ):
                    the_field('choose_us');
                endif; ?>
            </aside>
        </section>

        <section class="team-block">
            <?php if( get_field('we_are_speakeasy') ):
                the_field('we_are_speakeasy');
            endif; ?>
            <ul class="row team-content">
                <?php
                $query = new WP_Query( array('post_type' => 'team') );
                if ($query->have_posts()):?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <li class="col-sm-6 col-md-4 team-info">
                            <div class="team-photo">
                                <?php the_post_thumbnail('full'); ?>
                                <div class="d-flex justify-content-between social-list">
                                    <span>Follow:</span>
                                    <ul class="d-flex justify-content-end">
                                        <li class="d-flex flex-column social-icon-twitter">
                                            <a href="<?php echo get_theme_mod('social_links_twitter'); ?>" class="fa fa-twitter icon-start"></a>
                                            <a href="<?php echo get_theme_mod('social_links_twitter'); ?>" class="fa fa-twitter icon-end"></a>
                                        </li>
                                        <li class="d-flex flex-column social-icon-facebook">
                                            <a href="<?php echo get_theme_mod('social_links_facebook'); ?>" class="fa fa-facebook icon-start"></a>
                                            <a href="<?php echo get_theme_mod('social_links_facebook'); ?>" class="fa fa-facebook icon-end"></a>
                                        </li>
                                        <li class="d-flex flex-column social-icon-linkedin">
                                            <a href="<?php echo get_theme_mod('social_links_linkedin'); ?>" class="fa fa-linkedin icon-start"></a>
                                            <a href="<?php echo get_theme_mod('social_links_linkedin'); ?>" class="fa fa-linkedin icon-end"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo replace_excerpt(get_the_excerpt()); ?></p>
                        </li>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </ul>
        </section>
    </div>
</main>

<?php get_footer(); ?>
