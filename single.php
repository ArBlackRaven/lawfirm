<?php
get_header();
?>

<div id="images-conatiner" class="px-[5%] bg-main-black py-[3rem]"> <!-- this is he holder of the sinle post-->

<div class="fullscreen-overlay" id="fullscreenOverlay">
    <img id="fullscreenImage" src="" alt="Fullscreen Image">
</div><!-- this is the image viewer -->

<?php // start with the loop
if(have_posts()){
    while(have_posts()){
        the_post()
        // that was the loop start
        ?> 
            <div>
        <!-- this is the title and post information holder -->
        <div class="my-[2rem]"> <!--location holder-->
            <p class="text-main-white text-[1.5rem]"><a href="http://localhost:8080/lawfirm">الرئيسية</a> / <a href="http://localhost:8080/lawfirm/category/all/">المدونات</a> / <span class="text-main-gold"><?php the_title()?></span></p>
        </div>
        <div><!--title holder-->
            <h1 class="text-[3rem] text-main-gold"><?php the_title()?></h1>
        </div>
        <div class="text-main-white text-[1.3rem]"><!--post info holder-->
            <?php the_time('F jS, Y')?> | <?php the_author()?>
        </div>
    </div>

    <div>
        <!--this id the image holder-->
        <div class="p-[1rem] ">
            <img class="h-full w-full object-cover image-item" src="<?php the_post_thumbnail_url()?>" alt="">
        </div>

    </div>

    <div class="text-wrap-tar edit-post-content text-[1.2rem] text-main-white px-[5%]">
        <!-- this is the post content holder  -->
         <pre>
             <?php the_content()?>
         </pre>
         <div class="w-full relative
                    after:absolute after:w-full after:right-0 after:bg-main-white after:h-[1px] after:bottom-[1rem] after:opacity-60 
         "> <!--tags holder-->
            <?php the_category()?>
         </div>

         <div class="px-[5%] grid gap-[2rem]
                     phone:grid-rows-2
                     md:grid-cols-2 grid-rows-1
         "> <!--this is the navigation menu-->
            <div class="pagination w-full h-full flex justify-center items-center">
                <?php // this code to show the pagination buttons with css style 
                if(get_previous_post_link()){
                    previous_post_link('%link',"%title");
                } else {
                    echo "لا توجد منشورات قبل ذلك";
                }
                ?>
            </div>
            <div class="pagination w-full h-full flex justify-center items-center">
                <?php
                    if(get_next_post_link()){
                        next_post_link('%link',"%title");
                    } else {
                        echo "لا توجد منشورات بعد ذلك";
                    }
                ?>
            </div>
         </div>
    </div>


        <?php
    }
}
//this is the loop end
?>


</div>

<?php
get_footer();
?>