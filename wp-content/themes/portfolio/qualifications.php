<?php /*Template Name: Qualifications*/ ?>
<?php get_header(); ?>

<?php
$args = array(
  'post_type' => 'qualifications',
  'numberposts' => -1,
  'meta_key' => 'category',
  'meta_value' => 'GCSES'
);
$gcses = get_posts($args);
?>
<?php if($gcses){?>
  <div class="expandingSection">
    <button class="link--icon">
      <h3 class="subheading">
        GCSES
      </h3>
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
    </button>
    <div class='expandingSection--child'>
      <?php foreach($gcses as $gcse){?>
        <div class="qualification">
          <p class="qualification__title"><?= get_field('title', $gcse); ?></p>
          <p class="qualification__grade"><?= get_field('grade', $gcse); ?>
        </div>
      <?php } ?>
    </div>
  </div>
<?php } ?>

<?php
$args = array(
  'post_type' => 'qualifications',
  'numberposts' => -1,
  'meta_key' => 'category',
  'meta_value' => 'Software Development Training'
);
$softwares = get_posts($args);
?>
<?php if($softwares){?>
  <div class="expandingSection">
    <button class="link--icon">
      <h3 class="subheading">
        Software development training
      </h3>
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
    </button>
    <div class='expandingSection--child'>
      <?php foreach($softwares as $software){?>
        <div class="qualification">
          <p class="qualification__title"><?= get_field('title', $software); ?></p>
          <p class="qualification__grade"><?= get_field('grade', $software); ?>
        </div>
      <?php } ?>
    </div>
  </div>
<?php } ?>

<?php
$args = array(
  'post_type' => 'qualifications',
  'numberposts' => -1,
  'meta_key' => 'category',
  'meta_value' => 'Other'
);
$others = get_posts($args);
?>
<?php if($others){?>
  <div class="expandingSection">
    <button class="link--icon">
      <h3 class="subheading">
        Other
      </h3>
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
    </button>
    <div class='expandingSection--child'>
      <?php foreach($others as $other){?>
        <div class="qualification">
          <p class="qualification__title"><?= get_field('title', $other); ?></p>
          <p class="qualification__grade"><?= get_field('grade', $other); ?>
        </div>
      <?php } ?>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>
