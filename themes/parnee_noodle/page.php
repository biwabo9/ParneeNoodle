<?php

get_header();

while(have_posts()) {
  the_post(); ?>

  <h2 class="text-light text-center font-weight-bold display-2 my-5" id="amatic"><?php the_title();?></h2>


  <?php the_content(); 
  
 }

get_footer();
?>