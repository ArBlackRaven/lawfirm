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
            <div class="m-auto grid grid-rows-2 grid-cols-3 
                        phone:w-[70%]
                        lg:w-30%">

                <a href="#" class="col-span-3 lg:text-[1.5rem] m-1 py-3 px-5 rounded-lg border-4 border-secondary-gold bg-secondary-gold">احجز الان</a>
                <a href="#" class="col-span-3 lg:text-[1.5rem] m-1 py-3 px-5 rounded-lg border-4 border-main-black bg-main-black">تواصل معنا</a>  

            </div>


        </div>


    </section>


    <!-- ============================================================================================================================================================ -->


    <section class="h-fit bg-main-black"> <!--this is the who is us section-->
        
        <div class="w-90%  m-auto bg-secondary-black relative -top-20 rounded-xl
                    phone:h-fit 
                    "><!--this is the content wrapper-->

            <div class="grid grid-cols-2">
                <div class="relative text-center phone:px-[30px] text-white flex flex-col gap-2 justify-center
                            phone:col-span-2
                             lg:-end-10 lg:col-span-1"> <!-- text wrapper  -->

                    <h2 class="phone:text-[1.5rem] lg:text-[2rem] py-5 opacity-80 font-medium"> <?php the_field("who_is_us_txt")?></h2>

                    <h1 class="phone:text-[1.8rem] lg:text-[2.5rem] text-main-gold font-medium"><?php the_field("who_is_us_golden_txt")?></h1>

                    <img class="lg:hidden phone:block phone:w-[50%] phone:h-[50%] phone:m-auto" src="<?php the_field("who_is_us_main_image")?>" alt="">

                    <h1 class="phone:text-[1.1rem] lg:text-[1.2rem] py-5 tracking-wider"><?php the_field("who_is_us_main_content")?></h1>

                </div>


                <div class=""><!-- image wrapper  -->
                    <img class="object-contain 
                    phone:w-50% phone:h-50% phone:m-auto  phone:hidden
                    lg:block lg:w-full lg:h-[30rem] lg:-translate-x-16 lg:-translate-y-16" 

                    src="<?php the_field("who_is_us_main_image")?>" alt="">
                </div>
            </div>

            <div class=" text-main-white lg:grid lg:grid-cols-3
                        phone:py-[50px] phone:px-20px"><!-- three feachers wrapper  -->


                <div class="lg:px-0 md:px-[12rem] phone:p-0 phone:m-[20px] flex flex-col justify-start items-center px-16"> <!--  feacher one  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_1_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="phone:text-[1.7rem] mb-5"><?php the_field("feacher_1_title_text")?></h3>
                        <h4 class="phone:text-[1.2rem]"><?php the_field("feacher_1_content")?></h4>
                    </div>
                </div>

                <div class="lg:px-0 md:px-[12rem] phone:p-0 phone:m-[20px] flex flex-col justify-start items-center px-16"> <!--  feacher two  -->
                    <div>
                        <img class="m-auto object-contain h-32 w-32" src="<?php the_field("feacher_2_image")?>" alt="">
                    </div>
                    <div class="text-center mt-5">
                        <h3 class="phone:text-[1.7rem] mb-5"><?php the_field("feacher_2_title_text")?></h3>
                        <h4 class="phone:text-[1.2rem]"><?php the_field("feacher_2_content")?></h4>
                    </div>
                </div>

                <div class="lg:px-0 md:px-[12rem] phone:p-0 phone:m-[20px] flex flex-col justify-start items-center px-16"> <!--  feacher three  -->
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
                <p class="phone:text-[1.7rem] lg:text-[1.7rem] pb-12"><?php the_field("why_us_title_1")?></p><!-- card title -->
                <p class="phone:text-[1.2rem] lg:text-[1.2rem]"><?php the_field("why_us_content_1")?></p><!-- card content -->
            </div>
            <div class="bg-spicial-2 phone:w-full lg:-w-[30vw] xl:w-20vw px-[1rem] py-[5rem] ">
                <p class="phone:text-[1.7rem] lg:text-[1.7rem] pb-12"><?php the_field("why_us_title_2")?></p><!-- card title -->
                <p class="phone:text-[1.2rem] lg:text-[1.2rem]"><?php the_field("why_us_content_2")?></p><!-- card content -->
            </div>
            <div class="bg-spicial-3 phone:w-full lg:-w-[30vw] xl:w-20vw px-[1rem] py-[5rem] 
                            phone:rounded-br-3xl phone:rounded-bl-3xl lg:rounded-br-none lg:rounded-tl-3xl ">
                <p class="phone:text-[1.7rem] lg:text-[1.7rem] pb-12"><?php the_field("why_us_title_3")?></p><!-- card title -->
                <p class="phone:text-[1.2rem] lg:text-[1.2rem]"><?php the_field("why_us_content_3")?></p><!-- card content -->
            </div>
        </div>
    </section>
    
    
    <!-- ============================================================================================================================================================ -->
    
    
    <section class="relative h-fit w-screen bg-main-black flex items-center py-[5%] 
                    phone:items-end phone:justify-center 
                    md:justify-start
                     "><!--this is the section with the photo and statistcs-->

        <div class="h-[120%] text-main-black bg-main-white relative 
                    phone:w-[90%] phone:rounded-3xl phone:pb-[1rem]
                    md:w-[60%] md:rounded-tr-none md:rounded-br-none md:pr-[5%]
                    
                    "><!--this is the white square-->

                    <h2 class="font-semibold p-[1rem] 
                                phone:text-[2rem] 
                                md:pl-[15%]
                                lg:text-[1.7rem] lg:pl-[10%]">لمحة عن اهم انجازاتنا ببعض الارقام والاحصائيات</h2>

                    <p class="px-[1rem]
                                phone:text-[1.1rem] 
                                md:pl-[25%] 
                                lg:text-[1.5rem] lg:pl-[10%]"> نفخر في مكتب الحارثى بتقديم أعلى مستوى من جودة الخدمات القانونية في مختلف المجالات. حيث تخطينا حاجز الألف عملية توثيق وتعاملنا مع العديد من القاضايا المالية التي تجاوزت إجمالي قيمتها المليار ريال سعودي! </p>

                    <div class="relative bg-secondary-gold
                                phone:bottom-[0] phone:w-[85%] phone:h-[15rem] phone:mt-[8.5rem] phone:right-[50%] phone:rounded-3xl phone:translate-x-[50%]
                                md:right-[100%] md:w-[80%] md:bottom-[10%] md:h-[25rem] md:mt-[1rem]
                                lg:mb-[3rem] lg:right[100%]
                                xl:w-[55%]
                                "><!--the golden square-->
            
                                <img class="absolute bottom-0 phone:h-[155%] right-[50%] translate-x-[50%]" src="http://localhost:8080/lawfirm/wp-content/uploads/2024/07/businessman.png" alt="">
            
                                <div class="absolute h-[20vh] bg-main-black bg-opacity-85 w-[55%] right-[8%] bottom-[15%] rounded-3xl
                                            phone:bottom-[0] phone:right-[50%] phone:translate-x-[50%] phone:w-[100%] phone:h-[10vh]
                                            md:-right-[70%] md:translate-x-[0] md:-translate-y-[30px] md:h-[30%] md:w-[125%] md:bottom[0]
                                            xl:-right-[125%] xl:h-40% xl:w-[150%]
                                            "><!--the black square-->

                                            <ul class="w-full h-full 
                                                        grid grid-cols-4 grid-rows-2 items-center
                                                        text-main-white text-center
                                                        phone:py-[5px]
                                                        lg:p-[20px]">

                                                <li class="phone:text-[1rem] md:text-[2rem] font-bold">50</li>

                                                <li class="phone:text-[1rem] md:text-[2rem] font-bold">150</li>

                                                <li class="phone:text-[1rem] md:text-[2rem] font-bold">100</li>

                                                <li class="phone:text-[1rem] md:text-[2rem] font-bold">250</li>

                                                <li class="phone:text-[0.7rem] md:text-[1.1rem] lg:text[1.5rem] px-[5px]">محامون مؤهلون</li>

                                                <li class="phone:text-[0.7rem] md:text-[1.1rem] lg:text[1.5rem] px-[5px]">قطية ناجحة</li>

                                                <li class="phone:text-[0.7rem] md:text-[1.1rem] lg:text[1.5rem] px-[5px]">استفسار واجابة</li>

                                                <li class="phone:text-[0.7rem] md:text-[1.1rem] lg:text[1.5rem] px-[5px]">عملاء سعيدين</li>

                                            </ul>

                                </div>
                    </div>
        </div>

    </section>


    <!-- ============================================================================================================================================================ -->
    

    <section>
        
    </section>


    <!-- ============================================================================================================================================================ -->
</div>
<?php 
get_footer();
?>