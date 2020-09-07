
<!-- breadcrumb -->
<?php 
/**
 *  
 * in case the post in assigned to multipe categories we 
 * will take just the first category in breadcrumb
 * 
 * 
 */
    $category = get_the_category()[0];
?>

<div class="breadcrumb-container">
  <nav aria-label="breadcrumb" class="breadcrumb-nav">
    <ol class="custombreadcrumb">
      <li class="custombreadcrumb-item">
            <a href="<?php echo esc_url(get_home_url());?>">
                ACCEUIL
            </a>
        </li>
        <i class="fas fa-chevron-right"></i>
      <li class="custombreadcrumb-item">
        <a href="<?php echo esc_url(get_category_link($category->term_id));?>">
            <?php echo strtoupper(esc_html($category->name));?>
        </a></li>
    </ol>
  </nav>
</div>

