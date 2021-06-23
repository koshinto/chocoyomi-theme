<?php get_header(); ?>

<div class="container main">
  <div class="contents">
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <a class="postlink" href="<?php the_permalink(); ?>">
          <article <?php post_class(); ?>>
            <?php if(has_post_thumbnail()): ?>
              <p class="thumbnailparagraph"><?php the_post_thumbnail(array(350, 240)); ?></p>
            <?php else: ?>
              <p style="width: 350px; height: 240px;"></p>
            <?php endif; ?>
            <div class="excerpt">
              <!-- 記事の投稿日と投稿者情報 -->
              <p class="postinfo">
                <span class="postdate">
                  <i class="far fa-calendar-alt"></i>  <?php the_time('Y年m月d日'); ?>
                </span> 
                <span class="postauthor">
                  <i class="fas fa-user-alt">  </i><?php the_author(); ?>
                </span>
              </p>
              <h1><?php the_title(); ?></h1>
              <p><?php the_excerpt(); ?></p>
            </div>
          </article>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="side">
    <?php get_search_form(); ?>
    <div class="ad"></div>
  </div>
</div>
<?php get_footer(); ?>