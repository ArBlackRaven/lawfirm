<?php 
get_header();
?>
<div class="fron-page-wrapper bg-white overflow-hidden">
    <section class="
                    phone:h-fit phone:pb-[100px] lg:pb-[200px] xl:h-[110vh]
                    before:bg-law-library before:absolute before:top-0 before:bottom-0 before:right-0 
                    before:left-0 before:opacity-85 before:bg-no-repeat before:bg-cover
                    relative bg-main-white w-full phone:pt-[5rem] pt-32"> <!--this the face section-->


        <div class="relative z-10 m-auto xl:w-70% phone:w-90% md:w-90%
                    text-center items-center text-main-white
                    py-28 phone:py-[4rem] px-14 bg-black bg-opacity-70 rounded-2xl
                    backdrop-blur-sm
        "><!--the interducing square in the middle ig the swction -->

            <h1 class="phone:text-[1.3rem] lg:text-[2rem]  font-medium mb-10"><?php the_field("face_main_txt")?></h1>
            <h3 class="phone:text-[1.1rem] lg:text-[1.5rem] opacity-80 font-normal mb-10"><?php the_field("face_secondary_txt")?></h3>
            <div class="xl:w-30% phone:w-[70%] m-auto grid grid-rows-2 grid-cols-3 g">

                <a href="#" class="col-span-3 lg:text-[1.5rem] m-1 py-3 px-5 rounded-lg border-4 border-secondary-gold bg-secondary-gold">احجز الان</a>
                <a href="#" class="col-span-3 lg:text-[1.5rem] m-1 py-3 px-5 rounded-lg border-4 border-main-black bg-main-black">تواصل معنا</a>  

            </div>


        </div>


    </section>


    <!-- ============================================================================================================================================================ -->


    <section class="h-fit bg-main-black"> <!--this is the who is us section-->
        <div class="w-90% lg:h-screen m-auto bg-secondary-black relative -top-20 rounded-xl
                    lg:grid lg:grid-cols-2 lg:grid-rows-4 phone:h-fit 
                    "><!--this is the content wrapper-->


            <div class="text-center max-[1279px]:px-[30px]
                        row-span-2 text-white flex flex-col gap-2 justify-center
                        relative lg:-end-10 "> <!-- text wrapper  -->

                <h2 class="phone:text-[1.5rem] lg:text-[2rem] py-5 opacity-80 font-medium"> <?php the_field("who_is_us_txt")?></h2>

                <h1 class="phone:text-[1.8rem] lg:text-[2.5rem] text-main-gold font-medium"><?php the_field("who_is_us_golden_txt")?></h1>

                <img class="lg:hidden phone:block phone:w-[50%] phone:h-[50%] phone:m-auto" src="<?php the_field("who_is_us_main_image")?>" alt="">

                <h1 class="phone:text-[1.1rem] lg:text-[1.2rem] py-5 tracking-wider"><?php the_field("who_is_us_main_content")?></h1>

            </div>


            <div class="lg:row-span-2"><!-- image wrapper  -->
                <img class="object-contain phone:hidden lg:block
                phone:w-50% phone:h-50% phone:m-auto
                lg:h-full lg:w-full lg:scale-[1.3] lg:-translate-x-16 lg:-translate-y-16" src="<?php the_field("who_is_us_main_image")?>" alt="">
            </div>


            <div class="lg:col-span-2 lg:row-span-2 text-main-white lg:grid lg:grid-cols-3
                        phone:py-[50px] phone:px-20px"><!-- three feachers wrapper  -->


                <div class="lg:px-0 md:px-[12rem] phone:p-0 phone:m-[20px] flex flex-col justify-center items-center px-16"> <!--  feacher one  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_1_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="phone:text-[1.7rem] mb-5"><?php the_field("feacher_1_title_text")?></h3>
                        <h4 class="phone:text-[1.2rem]"><?php the_field("feacher_1_content")?></h4>
                    </div>
                </div>

                <div class="lg:px-0 md:px-[12rem] phone:p-0 phone:m-[20px] flex flex-col justify-center items-center px-16"> <!--  feacher two  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_2_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="phone:text-[1.7rem] mb-5"><?php the_field("feacher_2_title_text")?></h3>
                        <h4 class="phone:text-[1.2rem]"><?php the_field("feacher_2_content")?></h4>
                    </div>
                </div>

                <div class="lg:px-0 md:px-[12rem] phone:p-0 phone:m-[20px] flex flex-col justify-center items-center px-16"> <!--  feacher three  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_3_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="phone:text-[1.7rem] mb-5"><?php the_field("feacher_3_title_text")?></h3>
                        <h4 class="phone:text-[1.2rem]"><?php the_field("feacher_3_content")?></h4>
                    </div>

                </div>


            </div>
        </div>
    </section>


    <!-- ============================================================================================================================================================ -->
    
    
    <section  class="h-fit py-[100px] px-[20px] text-main-white bg-main-black text-center flex flex-col justify-center items-center"> <!-- why us is the best section -->
        <p class="phone:text-[2.5rem] mb-16 font-semibold lg:text-[3rem]">
            لماذا نحن الافضل
        </p>
        <p class="phone:text-[1.5rem] lg:text-[2rem]">
            حلول قانونية مبتكرة: نقدم حلولًا قانونية إبداعية وفعالة لقضاياك القانونية 
        </p>
        <div class="mt-10 grid lg:w-[70%] xl:w-auto lg:grid-rows-1 lg:grid-cols-3 phone:grid-rows-3 phone:grid-cols-1"> <!-- here is the three cards -->
            <div class=" bg-spicial-1 phone:w-full lg:-w-[30vw] xl:w-20vw px-[1rem] py-[5rem] phone:rounded-tl-3xl 
                            phone:rounded-tr-3xl phone:rounded-br-none lg:rounded-tl-none lg:rounded-br-3xl ">
                <p class="phone:text-[1.7rem] lg:text-[1.7rem] pb-12">التواصل</p><!-- card title -->
                <p class="phone:text-[1.2rem] lg:text-[1.2rem]">شراكة مع العملاء : نحن نقدم خدمة شخصية ونبني علاقات طويلة الامد مع عملائنا</p><!-- card content -->
            </div>
            <div class="bg-spicial-2 phone:w-full lg:-w-[30vw] xl:w-20vw px-[1rem] py-[5rem] ">
                <p class="phone:text-[1.7rem] lg:text-[1.7rem] pb-12">التواصل</p><!-- card title -->
                <p class="phone:text-[1.2rem] lg:text-[1.2rem]">شراكة مع العملاء : نحن نقدم خدمة شخصية ونبني علاقات طويلة الامد مع عملائنا</p><!-- card content -->
            </div>
            <div class="bg-spicial-3 phone:w-full lg:-w-[30vw] xl:w-20vw px-[1rem] py-[5rem] 
                            phone:rounded-br-3xl phone:rounded-bl-3xl lg:rounded-br-none lg:rounded-tl-3xl ">
                <p class="phone:text-[1.7rem] lg:text-[1.7rem] pb-12">التواصل</p><!-- card title -->
                <p class="phone:text-[1.2rem] lg:text-[1.2rem]">شراكة مع العملاء : نحن نقدم خدمة شخصية ونبني علاقات طويلة الامد مع عملائنا</p><!-- card content -->
            </div>
        </div>
    </section>
    
    
    <!-- ============================================================================================================================================================ -->

</div>
<?php 
get_footer();
?>