        <footer class="bg-secondary-black ">
            <div></div>
            <div class="px-[5%]
                        phone:flex phone:flex-col
                        md:grid-cols-4 md:grid md:gap-[3rem]
            ">
                <div class="phone:row-span-1
                            md:col-span-1">
                    <img class="w-full object-contain
                                phone:h-[15rem]
                                md:h-full
                    " src="<?php the_field("footer_image")?>" alt="">
                </div>
                <div class="grid items-start text-main-white gap-[3rem] p-[10%]
                            phone:row-span-1 phone:grid-rows-3
                            md:col-span-3 md:row-span-1 md:grid-cols-3 md:grid-rows-1
                ">
                    <div class="footer-menu ">
                        <h3 class="text-[2rem]">خدماتنا</h3>
                        <?php  wp_nav_menu(array("theme_location"=>"footer_menu_1")) // to add the footter menu 1?>
                    </div>
                    <div class="footer-menu ">
                        <h3 class="text-[2rem]">روابط تهمك</h3>
                        <?php  wp_nav_menu(array("theme_location"=>"footer_menu_2")) // to add the footter menu 2?>
                    </div>
                    <div class="footer-menu ">
                        <h3 class="text-[2rem]">معلومات الاتصال</h3>
                        <?php  wp_nav_menu(array("theme_location"=>"footer_menu_3")) // to add the footter menu 3?>
                    </div>
                </div>
            </div>
            <div class="relative text-[0.8rem] text-main-white text-center pb-[2rem] opacity-40
                        before:absolute before:h-[2px] before:w-[70%] before:bg-main-white before:rounded-3xl
                        before:right-[50%] before:translate-x-[50%] before:-top-[10%] 
            ">
            حقوق الطبع والنشر © 2024 التصميم والتحميل بواسطة شركة حمادة هلال الدولية 
            </div>
        </footer>
        <?php wp_footer()?>
    </body>
</html>