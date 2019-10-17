<?php
//Adds contact details option page
if (function_exists('acf_add_options_page')) {
  $page = acf_add_options_page([
    'page_title' => 'Contact Details',
    'capability' => 'edit_posts',
  ]);
}
