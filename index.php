  <?php get_header(); ?>

  <div class="container">
    <div class="main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <article <?php post_class(); ?>>
            <h2>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>

            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php endif; ?>
            <?php the_excerpt(); ?>
            <br>
            <a class="button" href="<?php the_permalink(); ?>">Read More</a>
          </article>

        <?php endwhile; ?>

        <div class="nav nav-post nav-archive">
          <div class="prev">
            <?php next_posts_link(); ?>
          </div>
          <div class="next">
            <?php previous_posts_link(); ?>
          </div>
        </div>

      <?php else: ?>
        <?php get_template_part('not-found'); ?>
      <?php endif; ?>

    </div><!--.main-->

  <?php get_footer(); ?>
