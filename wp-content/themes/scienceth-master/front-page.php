<?php get_header() ?>
<?php if (have_rows('slides')) :
  get_template_part('template/carousel');
else : //show nothing
endif; ?>
<?php get_template_part('template/section1') ?>
<?php get_template_part('template/section2') ?>
<div class="row ">
  <?php
  dynamic_sidebar('compteur')
  ?>
</div>
<?php get_footer() ?>