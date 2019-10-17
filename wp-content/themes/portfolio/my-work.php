<?php /*Template Name: My work */ ?>
<?php get_header(); ?>
<?php
$args = array(
  'post_type' => 'projects',
  'numberposts' => -1
);
$projects = get_posts($args);
if($projects){
  foreach($projects as $project){ ?>
    <div class="project">
      <h3 class="subheading">
        <?= get_field('title', $project); ?>
      </h3>
      <h5>
        <?= get_field('start_date', $project); ?> to <?= get_field('end_date', $project); ?>
      </h5>

      <?php $description = get_field('description', $project);
      if($description){ ?>
        <div class="expandingSection">
          <button class="link--icon">
            Read more
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
          </button>
          <div class='expandingSection--child'>
            <p>
              <?= $description ?>
            </p>
          </div>
        </div>
      <?php } ?>

      <?php $screenshots = get_field('screenshots', $project);
      if($screenshots.length > 0){?>
        <div class="expandingSection">
          <button class="link--icon">
            Gallery
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
          </button>
        </div>
      <?php } ?>

    </div>
<?php }
}?>
<?php get_footer(); ?>
