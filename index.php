<?php get_header(); ?>

<div class="container">
  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>