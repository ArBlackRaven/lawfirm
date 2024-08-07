<?php
/*
Template Name: Posts
*/
?>


<?php
get_header();
?>
<div class="mt-[3rem] bg-main-black"> <!--location holder-->
    <p class="text-main-white text-[1.5rem] px-[5%]"><a href="http://localhost:8080/lawfirm">الرئيسية</a> / <sapn class="text-main-gold">المدونات</sapn></p>
</div>
<div class="bg-main-black py-[5rem] px-[5%] grid gap-[3rem]
            phone:grid-cols-1
            md:grid-cols-2
            lg:grid-cols-3
            ">   <!--this is the posts holder-->
            <?php
    // Custom query to fetch posts
$args = array(
    'post_type' => 'post', // Fetch posts
    'posts_per_page' => 9 // Number of posts to display
);

$custom_query = new WP_Query($args);


    if($custom_query->have_posts()){
        while($custom_query->have_posts()){
            $custom_query->the_post();
?>



        <div class="relative p-[1rem] pb-[3rem] bg-secondary-black rounded-xl
                    duration-200 hover:scale-[1.05] hover:z-10
        "><!--this is the singel post card holder-->

                <div class="h-[15rem]
                "> 
                    <img class="h-full w-full object-cover rounded-xl" src="<?php the_post_thumbnail_url()?>" alt="">
                </div>
                <div>
                <div class="text-secondary-gold font-semibold mb-[1rem]
                            phone:text-[1.3rem]
                            md:text-[1.5]
                            lg:text-[1.8rem]
                "><h1><?php the_title()?></h1></div>
                <div class="text-main-white
                            phone:text-[1rem]
                            md:text-[1.1rem]
                            lg:text-[1.2rem]
                "><p><?php the_excerpt()?></p></div>
                </div>
                <div class="h-fit w-fit absolute right-[50%] translate-x-[50%] bottom-0 translate-y-[50%]
                "><a class="w-fit py-[1rem] bg-secondary-gold block rounded-2xl text-main-white
                            phone:px-[1rem] phone:text-nowrap
                            md:px-[3rem] 
                            " href="<?php the_permalink()?>"> قراءة المزيد ...</a>
                </div>

        </div>


    <?php
            }
        }
    ?>
</div>
<div class="px-[5%] grid grid-cols-2 text-main-white my-[2rem]"> <!--this is the navigation menu-->
    <div class="pagination w-full h-full flex justify-center">
        <?php // this code to show the pagination buttons with css style 
        if(get_previous_posts_link()){
            previous_posts_link("الاحدث");
        } else {
            echo "لا توجد منشورات بعد ذلك";
        }
        ?>
    </div>
    <div class="pagination w-full h-full flex justify-center">
        <?php
            if(get_next_posts_link()){
                next_posts_link("الاقدم");
            } else {
                echo "لا توجد منشورات قبل ذلك";
            }
        ?>
    </div>
</div>

<?php
get_footer();
?>

