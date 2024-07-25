<?php
get_header();
?>

<div class="bg-main-black py-[5rem] px-[5%] grid grid-cols-3 gap-[3rem]">   <!--this is the posts holder-->
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
    ?>


        <div class="relative p-[1rem] pb-[3rem] bg-secondary-black rounded-xl"><!--this is the singel post card holder-->

                <div class="h-[15rem]
                "> 
                    <img class="h-full w-full object-cover rounded-xl" src="<?php the_post_thumbnail_url()?>" alt="">
                </div>
                <div>
                <div class="text-secondary-gold text-[1.8rem] font-semibold mb-[1rem]
                "><h1><?php the_title()?></h1></div>
                <div class="text-main-white text-[1.2rem]
                "><p><?php the_excerpt()?></p></div>
                </div>
                <div class="h-fit w-fit absolute right-[50%] translate-x-[50%] bottom-0 translate-y-[50%]
                "><a class="w-fit px-[3rem] py-[1rem] bg-secondary-gold block rounded-2xl" href="<?php the_permalink()?>"> قراءة المزيد ...</a>
                </div>

        </div>


    <?php
            }
        }
    ?>
</div>

<?php
get_footer();
?>

