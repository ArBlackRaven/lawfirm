<?php
/*
Template Name: Survice
*/
?>
<?php 
get_header();
?>
<div class="flex flex-col justify-center items-center py-[10rem] gap-[3rem]
            phone:px-[1rem]
            md:px-[3rem]
            lg:px-[5rem]
            xl:px-[10rem]
"><!--this is the main container-->

<h1 class="phone:text-[3rem] md:text-[5rem] text-main-gold "><?php the_title()?></h1> <!--whitch can be written in the dashboard-->

<pre class="phone:text-[1.2rem] md:text-[2rem] text-main-white"><?php the_content()?></pre>

</div>
<?php 
get_footer();
?>