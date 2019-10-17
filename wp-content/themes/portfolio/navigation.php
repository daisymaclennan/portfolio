<?php /*Template Name: Navigation*/ ?>
<?php
  $url = $_SERVER['REQUEST_URI'];
  $sub = false;
  $project = false;
  $home = false;
  if(strpos($url, 'work')){
    $my_work = true;
  }else if(strpos($url, 'qualifications')){
    $qualifications = true;
  }else if(strpos($url, 'contact')){
    $contact_details = true;
  }else if($url == '/'){
    $personal_statement = true;
  }
?>
<nav>
  <ul>
    <li class="<?php echo $personal_statement ? 'link--active' : 'link--inactive' ?>">
      <a href="<?= get_home_url(); ?>">
        <h3>
          personal statement
        </h3>
      </a>
    </li>
    <li class="<?php echo $my_work ? 'link--active' : 'link--inactive' ?>">
      <a href="/my-work">
        <h3>
          my work
        </h3>
      </a>
    </li>
    <li class="<?php echo $qualifications ? 'link--active' : 'link--inactive' ?>">
      <a href="/qualifications">
        <h3>
          qualifications
        </h3>
      </a>
    </li>
    <li class="<?php echo $contact_details ? 'link--active' : 'link--inactive' ?>">
      <a href="/contact-details">
        <h3>
          contact details
        </h3>
      </a>
    </li>
  </ul>
</nav>
