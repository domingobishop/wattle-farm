<?php get_header(); ?>

<div id="banner" class="bc-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center home-title">
                <h1>
                    <?php echo get_bloginfo('name'); ?>
                </h1>
                <h3>
                    <?php echo get_bloginfo('description'); ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<main id="main" class="main" role="main">
    <div id="content">
        <?php
        $query = new WP_Query( array(
            'post_type' => 'page',
            'category_name' => 'home',
            'orderby' => 'menu_order title',
            'order'   => 'ASC'
            // 'cat' => 34
        ) );
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <section class="feature-panels">
                <div class="container">
                    <div class="row">
                        <article id="post-<?php the_ID(); ?>">
                            <div class="col-md-3">
                                <div class="entry-thumbnail">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <?php the_post_thumbnail('full', array('class' => 'img-responsive img-circle')); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <div class="entry-summary">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-sm btn-default pull-right">Read more</a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <!-- #content -->
</main>

<?php get_footer(); ?>
