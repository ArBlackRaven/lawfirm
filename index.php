<?php 
get_header();
?>
<div class="fron-page-wrapper bg-white overflow-hidden">
    <section class="
    before:bg-law-library before:absolute before:top-0 before:bottom-0 before:right-0 before:left-0 before:opacity-85 before:bg-no-repeat before:bg-cover
    relative bg-main-white w-full h-120vh pt-32"> <!--this the face section-->


        <div class="relative z-10 m-auto w-70%
                    text-center items-center text-main-white
                    py-28 px-14 bg-black bg-opacity-70 rounded-2xl
                    backdrop-blur-sm
        "><!--the interducing square in the middle ig the swction -->

            <h1 class="text-4xl font-medium mb-10"><?php the_field("face_main_txt")?></h1>
            <h3 class="text-2xl opacity-80 font-normal mb-10"><?php the_field("face_secondary_txt")?></h3>
            <div class="w-30% m-auto grid grid-rows-2 grid-cols-3 text-lg">

                <a href="#" class="col-span-3 text-lg m-1 py-3 px-5 rounded-lg border-4 border-secondary-gold bg-secondary-gold">احجز الان</a>
                <a href="#" class="col-span-3 text-lg m-1 py-3 px-5 rounded-lg border-4 border-main-black bg-main-black">تواصل معنا</a>  

            </div>


        </div>


    </section>


    <!-- ============================================================================================================================================================ -->


    <section class="h-screen bg-main-black"> <!--this is the who is us section-->
        <div class="w-80% h-full m-auto bg-secondary-black relative -top-20 rounded-xl grid grid-cols-2 grid-rows-4"><!--this is the content wrapper-->
            <div class="row-span-2 text-white flex flex-col gap-2 justify-center
            relative -end-10
            "> <!-- text wrapper  -->
            <h2 class="text-4xl py-5 opacity-80 font-medium"> <?php the_field("who_is_us_txt")?></h2>
            <h1 class="text-3xl text-main-gold font-medium"><?php the_field("who_is_us_golden_txt")?></h1>
            <h1 class="text-xl py-5 tracking-wider"><?php the_field("who_is_us_main_content")?></h1>
            </div>
            <div class="row-span-2"><!-- image wrapper  -->
                <img class="object-contain h-full w-full scale-150 -translate-x-16 -translate-y-28" src="<?php the_field("who_is_us_main_image")?>" alt="">
            </div>
            <div class="col-span-2 row-span-2 text-main-white grid grid-cols-3"><!-- three feachers wrapper  -->
                <div class=" flex flex-col justify-center items-center px-16"> <!--  feacher one  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_1_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="text-2xl mb-5"><?php the_field("feacher_1_title_text")?></h3>
                        <h4 class="text-lg"><?php the_field("feacher_1_content")?></h4>
                    </div>
                </div>
                <div class=" flex flex-col justify-center items-center px-16"> <!--  feacher two  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_2_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="text-2xl mb-5"><?php the_field("feacher_2_title_text")?></h3>
                        <h4 class="text-lg"><?php the_field("feacher_2_content")?></h4>
                    </div>
                </div>
                <div class=" flex flex-col justify-center items-center px-16"> <!--  feacher three  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_3_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="text-2xl mb-5"><?php the_field("feacher_3_title_text")?></h3>
                        <h4 class="text-lg"><?php the_field("feacher_3_content")?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================================================================================================================================ -->
    
    
    <section> <!-- why us is the best section -->

    </section>
    
    
    <!-- ============================================================================================================================================================ -->

</div>
<?php 
get_footer();
?>