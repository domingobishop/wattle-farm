<?php get_header(); ?>

<main id="main" class="bc-main" role="main">
<div id="content">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/home.jpg" class="img-responsive" alt="Wattle Farm vineyard">-->
                </div>
            </div>
        </div>
    </section>
    <section class="feature-boxes">
        <div class="container">
            <div class="row">
                <?php
                $query = new WP_Query( array(
                    'post_type' => 'page',
                    'category_name' => 'home',
                    // 'cat' => 34
                ) );
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-md-4">
                    <div class="bc-box">
                        <article>
                            <h3 class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="entry-summary">
                                <?php echo excerpt(14); ?>
                            </div>
                        </article>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</div>
<!-- #content -->
</main>

<?php get_footer(); ?>
