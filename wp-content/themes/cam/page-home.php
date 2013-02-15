<?php
/*
Template Name: Home Template
*/

get_header(); ?>


<div class="span1"></div>
<div class="span6">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>

 
		 <div id="primary" class="row" >
			
		  <?php the_content(); ?>
		 
		</div>


 <?php endwhile; endif; ?>
</div>

<?php 

get_footer();


/* End of file page.php */
/* Location: ./wp-content/themes/the-bootstrap/page.php */