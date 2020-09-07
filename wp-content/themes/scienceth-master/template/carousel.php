<section class="page-wrap">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php while(have_rows('slides')): the_row();  ?>
    <?php $counter =get_row_index(); ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $counter-1;?>" class="<?php if (get_row_index() ==1) echo 'active';?>"></li>
    <?php endwhile;?>

  </ol>
  <div class="carousel-inner">
  <!-- if we have content in the page backend"admin" check if the fields of slider not empty -->
  <!-- for each row we have this item down  -->
    <?php while(have_rows('slides')): the_row();  ?>
    <div class="carousel-item <?php if (get_row_index() ==1) echo 'active';?>">
      <?php
        $image=get_sub_field('image');
        //print_r($image);
        $image_url= $image['sizes']['sliders'];
        $image_alt=$image['caption'];
      
      ?>
      <img src="<?php echo $image_url; ?>" class="d-block w-100" alt="<?php echo $image_alt; ?>">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php the_sub_field('title');?></h5>
        <a href="<?php the_sub_field('button') ?>" class="btn btn-dark"> READ MORE</a>
      </div>
    </div>
    <?php endwhile;?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<?php 
//$count_posts = wp_count_posts()->publish;
// echo $count_posts;
?>

</section>