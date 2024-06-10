<?php get_header(); ?>
<br>
<main>
    <section class="projects">
        <h2>Explore Our Latest Post </h2>
        <div class="projects-container">
            <?php
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 10
            );
            $projects = new WP_Query($args);
            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post();
            ?>
                        <div class="project">
                           
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="project-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="project-content">
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
            <?php
                endwhile;
            else :
                echo '<p>No projects found</p>';
            endif;
            ?>
        </div>
    </section>
</main>
<br><br><br><br>


<?php get_footer(); ?>