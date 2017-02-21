  <div class="sidebar">
    <?php if(is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div>

  <div class="clr"></div>
  </div><!--.container-->

    <footer>
      <div class="container">
        <p>&copy; <?php the_time('Y'); ?>
          <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </p>
      </div>

    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
