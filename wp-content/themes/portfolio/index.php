<?php get_header(); ?>

<div class="content-box">
<?php get_template_part('Navigation');?>
  <div class="content">
    <?php
    if(have_posts()):
      while(have_posts()):
        the_post();
        ?>
        <?php the_content(); ?>
        <?php
      endwhile;
    endif;?>
  </div>
</div>
<?php get_footer(); ?>
