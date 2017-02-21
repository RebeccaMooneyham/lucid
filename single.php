<?php get_header(); ?>

<div class="container">
  <div class="main">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2>
            <?php the_title(); ?>
          </h2>
          <div class="meta">
            <p>by <?php the_author_posts_link(); ?> &bull; <?php the_category(', '); ?> &bull; <?php the_time('F j, Y'); ?></p>
          </div>
          <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <?php the_content(); ?>
        </article>

      <?php endwhile; ?>

      <div class="nav nav-post nav-single">
        <?php previous_post_link('<div class="prev">' . __('Previous entry: ', 'lucid') . '%link</div>', '%title'); ?>
        <?php next_post_link('<div class="next">' . __('Next entry: ', 'lucid') . '%link</div>', '%title'); ?>
      </div>
  

    <?php else: ?>
      <?php get_template_part('not-found'); ?>
    <?php endif; ?>

    <?php comments_template(); ?>

  </div><!--.main-->

<?php get_footer(); ?>
