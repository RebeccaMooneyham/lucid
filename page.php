  <?php get_header(); ?>

  <div class="container">
    <div class="main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <article <?php post_class(); ?>>
            <h2>
              <?php the_title(); ?>
            </h2>

            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php endif; ?>
            <?php the_content(); ?>
          </article>

        <?php endwhile; ?>

      <?php else: ?>
        <?php get_template_part('not-found'); ?>
      <?php endif; ?>
    </div><!--.main-->

  <?php get_footer(); ?>
