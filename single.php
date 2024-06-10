<?php get_header(); ?>

<main>
    <section class="single-project">
        <?php
        while (have_posts()) : the_post();
            ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="project-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <div class="project-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
</main>

<?php get_footer(); ?>