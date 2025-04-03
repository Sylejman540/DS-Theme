<?php get_header(); ?>

<!-- Hero Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="side-main">
            <section class="services">
                Made By Sylejman
            </section>

            <section class="home-blog">
                <div class="container">
                    <div class="blog-items">
                        <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : 
                                the_post();
                        ?>
                            <article>
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <?php 
                                if ( has_post_thumbnail() ) : 
                                    the_post_thumbnail('large'); 
                                else: 
                                    ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/sky.jpg" alt="<?php the_title(); ?>">
                                <?php endif; ?>

                                <div class="meta-info">
                                    <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                    <p>Categories: <?php the_category(', '); ?></p>
                                    <p>Tags: <?php the_tags('', ', '); ?></p>
                                </div>
                                <?php the_content(); ?>
                            </article>
                        <?php 
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>
