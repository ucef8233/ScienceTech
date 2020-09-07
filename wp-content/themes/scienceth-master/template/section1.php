<?php
$args_post = [
  'post_type' => 'post',
  'posts_per_page' => 5
];
$last_post = new WP_Query($args_post);
?>
<section class="news">
  <div class="news__bar">
    <h4>last articles</h4>
  </div>
  <div class="news__articles">
    <?php
    if ($last_post->have_posts()) : ?>
      <?php $pos = 0;
      while ($last_post->have_posts()) : $last_post->the_post();
        if ($pos == 0) : ?>
          <article class="news__article news__article--big">
            <div class="news__img">
              <a class="news_link" href="<?php the_permalink() ?>">
                <?php the_post_thumbnail(['alt' => 'images d\'article']) ?></a>
            </div>
            <h5><?php the_category('&bull;') ?></h5><br>
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            <p><small><?php the_time(get_option('date_format')); ?> - Par <?php the_author() ?></small> </p>
          </article>
          <div class="news__article--flex">
          <?php else : ?>
            <article class="news__article">
              <div class="news__img">
                <a class="news_link" href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail(['alt' => 'images d\'article']) ?></a>
              </div>
              <h5><?php the_category('&bull;') ?></h5><br>
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              <p><small><?php the_time(get_option('date_format')); ?> - Par <?php the_author() ?></small> </p>
            </article>
          <?php endif; ?>
          <?php $pos++ ?>
        <?php endwhile; ?>
          </div>
        <?php endif; ?>
</section>