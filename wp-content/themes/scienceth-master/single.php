<?php get_header() ?>

<div class="single-post">
    <?php include_once(get_template_directory() . '/inc/breadcrumb.php'); ?>

    <!-- post main content -->
    <?php if (have_posts()) : $main_category = get_the_category()[0]->name; ?>

        <div class="container main-single-post">
            <div class="row">
                <div class="col-md-8">
                    <?php the_post(); ?>
                    <h1 class="single-post-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="single-post-info">
                        <p class="single-post-date time"><i class="fas fa-clock"></i> <?php the_time('F, j, Y'); ?> </p>
                        <p class="single-post-author">By
                            <?php
                            echo "<strong>" . get_the_author_firstname() . " " . get_the_author_lastname() . "</strong>";
                            ?>
                        </p>
                    </div>
                    <div class="text-center">
                        <?php the_post_thumbnail('', ["class" => "single-post-image"]); ?>
                    </div>

                    <!-- the post content -->
                    <div class="single-post-content">
                        <?php the_content(); ?>
                        <hr style="margin: 56px 0px;">
                    </div>
                    <!-- author info here -->
                    <div class="user-info-container">
                        <!-- display author info -->
                        <div class="user-info d-flex">
                            <div class="user-photo-container">
                                <?php echo get_avatar(get_the_author_meta("ID"), 64); ?>
                            </div>
                            <div class="my-auto user-info-description">
                                <p>
                                    <?php echo "<strong>" . get_the_author_firstname() . " " . get_the_author_lastname() . "</strong> " . get_the_author_meta("description"); ?>
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- end author info -->

                    <!-- commentaire part -->
                    <?php comments_template(); ?>

                </div>
                <!-- side bar article (see also)-->
                <div class="col-md-3 mx-auto side-bar-posts-container">

                    <h6>See also</h6>
                    <?php //print_r(wp_get_post_categories(get_queried_object_id())); *
                    $random_post_arguments = array(
                        "posts_per_page"   => 10,
                        "orderby"          => "rand",
                        "exclude"          => [get_the_ID()]

                    );
                    // array hold the id to excluded when we search for related arlicle in the posts;
                    $excluded_id = [];
                    $excluded_id[] = get_the_ID();

                    $posts = get_posts($random_post_arguments); ?>

                    <?php if (count($posts) > 0) : ?>
                        <div class="side-bar-posts my-auto">
                            <?php foreach ($posts as $post) :
                                if ($main_category == get_the_category($post->ID)[0]->name) {
                                    $excluded_id[] = $post->ID;
                                }
                            ?>
                                <div class="single-side-post">
                                    <a href="<?php echo  esc_url(get_category_link(get_the_category($post->ID)[0]->term_id)); ?>" class="single-side-post-category">
                                        <?php echo get_the_category($post->ID)[0]->name; ?>
                                    </a>
                                    <a href="<?php echo the_permalink(); ?>" class="single-side-post-link">
                                        <?php the_post_thumbnail('thumbail', ["class" => "single-post-image img-thumbnail"]); ?>
                                        <h3>
                                            <?php echo $post->post_title; ?>
                                        </h3>
                                    </a>
                                    <div class="single-side-post-date time"><i class="fas fa-clock"></i> <?php the_time('F, j, Y'); ?> </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php wp_reset_postdata();
                    endif; ?>
                </div>
                <!-- end side bar article (see also) -->
            </div>
        </div>

        <!-- end main-single-post -->



        <div class="related-topics-to-container">
            <div class="container related-topics-container">
                <!-- related article  -->
                <?php
                $related_args = array(
                    'numberposts' => 8,
                    "category"    => wp_get_post_categories($post->ID)[0],
                    "exclude"          => $excluded_id
                );

                $related_posts = get_posts($related_args);
                if (count($related_posts) > 0) :
                    echo "<h3>Related Articles </h3>";
                    echo "<hr class='yellow-line'/>";
                    echo '<div class="related-post-cardDeck row">';
                    foreach ($related_posts as $related_post) : ?>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="related-post card">
                                <a href="<?php echo esc_url(the_permalink($related_post->ID)); ?>" class="single-side-post-link">
                                    <?php if (has_post_thumbnail()) {
                                        if (get_the_post_thumbnail($related_post->ID, array(375, 250), array('class' => 'card-img-top'))) {
                                            echo get_the_post_thumbnail($related_post->ID, array(375, 250), array('class' => 'card-img-top'));
                                        } else {
                                    ?>
                                            <img src="<?php bloginfo('template_url') ?>/assets/images/defau.jpg" />
                                    <?php
                                        }
                                    }
                                    // else {
                                    //     // display defaylt image
                                    //     echo "<img src='".get_template_directory()."'";
                                    //     echo get_template_directory();
                                    //     echo "hello world";
                                    // }
                                    ?>
                                    <div class="card-body">
                                        <h6 class="card-title related-post-title">
                                            <?php echo title_substring($related_post->post_title); ?>
                                        </h6>
                                    </div>
                                </a>
                                <div class="single-side-post-date card-footer time"><i class="fas fa-clock"></i> <?php the_time('F, j, Y'); ?> </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <!-- end related article -->

        </div>
</div>
<?php endif; ?>
</div>

<!-- end post main content -->
<?php get_footer() ?>