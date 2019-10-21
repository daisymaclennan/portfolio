<?php /*Template Name: Contact details*/ ?>
<?php get_header(); ?>

<?php
$email = get_field('email_address', 'option');
$phone_number = get_field('phone_number', 'option');
$instagram = get_field('instagram_name', 'option');
$linked_in = get_field('linkedin_name', 'option');
?>

<?php if($email){?>
  <div class="contact-field">
    <h5>Email address</h5>
    <a href="mailto:<?= $email ?>">
      <h3><?= $email ?></h3>
    </a>
  </div>
<?php } ?>

<?php if($phone_number){?>
  <div class="contact-field">
    <h5>Phone number</h5>
    <a href="tel:<?= $phone_number ?>">
      <h3><?= $phone_number ?></h3>
    </a>
  </div>
<?php } ?>

<?php if($instagram){?>
  <div class="contact-field">
    <h5>Instagram</h5>
    <a href="<?= get_field('instagram_link', 'option'); ?>">
      <h3><?= $instagram ?></h3>
    </a>
  </div>
<?php } ?>

<?php if($linked_in){?>
  <div class="contact-field">
    <h5>LinkedIn</h5>
    <a href="<?= get_field('linkedin_link', 'option'); ?>">
      <h3><?= $linked_in ?></h3>
    </a>
  </div>
<?php } ?>

<?php get_footer(); ?>
 
