<section class="section2">
  <?php $categories = get_categories(array(
    'orderby' => 'name',
    'order' => 'ASC'
  )); ?>
  <div class="section2__nav">
    <div class="section2__humberger">
      <img src="http://localhost/wordpress/wp-content/themes/scienceth-master/assets/images/icone.png" alt="icone">
    </div>
    <ul class="tabs display__tabs clearfix" data-tabgroup="first-tab-group">
      <?php foreach ($categories as $id => $category) : ?>
        <li><a href="#tab<?= $id + 1 ?>" class="<?php if ($id == 0) echo 'active' ?>"> <?= esc_html($category->name); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="section2__parts">
    <div id="first-tab-group" class="tabgroup">
      <?php foreach ($categories as $id => $category) : ?>
        <?php
        $test_args = [
          'post_type' => 'post',
          'posts_per_page' => 7,
          'category_name' => $category->name
        ];
        $test_post = new WP_Query($test_args);
        ?>
        <div id="tab<?= $id + 1 ?>">
          <?php $id_image = 0; ?>
          <?php if ($test_post->have_posts()) : ?>
            <?php while ($test_post->have_posts()) : $test_post->the_post() ?>
              <?php if ($id_image == 0) : ?>
                <article class="first__article">
                  <div class="img">
                    <?php the_post_thumbnail('news2_large', ['alt' => 'images d\'article']) ?>
                  </div>
                  <div class="text">
                    <h3> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    <small><?php the_time(get_option('date_format')); ?> - Par <?php the_author() ?></small>
                  </div>
                </article>
                <div class="mini__article">
                <?php else : ?>
                  <article>
                    <div class="img">
                      <?php the_post_thumbnail('news2_large', ['alt' => 'images d\'article']) ?>
                    </div>
                    <div class="text">
                      <h3> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                      <small><?php the_time(get_option('date_format')); ?> - Par <?php the_author() ?></small>
                    </div>
                  </article>
                <?php endif; ?>
                <?php $id_image++ ?>
              <?php endwhile; ?>
                </div>
              <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="section2__part2">
      <div class="social__media">
        <h2>Suivez Nous</h2>
        <div class="social__icones">
          <a href=""> <i class="fab fa-facebook"></i></a>
          <a href=""> <i class="fab fa-twitter"></i></a>
          <a href=""> <i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="comments">
        <h4>the most viewed lists</h4>
        <div class="comments__articles">
          <?php
          $views_args = [
            'order' => 'ASC',
            'orderby' => 'comment_count',
            'posts_per_page' => 4
          ];
          $views_post = new WP_Query($views_args); ?>
          <?php if ($views_post->have_posts()) : ?>
            <?php while ($views_post->have_posts()) : $views_post->the_post() ?>
              <div class="comments__article">
                <h5><?php the_category('&bull;') ?></h5><br>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                <p><small><?php the_time(get_option('date_format')); ?> - Par <?php the_author() ?></small> </p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
</section>