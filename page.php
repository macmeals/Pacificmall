<?php get_header(); ?>
  <div class="page-main">
    <div class="lead-inner">
    <!-- 固定ページ用のメインループ -->
    <?php if ( have_posts()) : 
      while ( have_posts()) :  the_post();
        the_content();
      endwhile;
    endif;
    ?>
    <!-- 固定ページ用のメインループ -->
    </div>  
  </div>
<?php get_footer(); ?>