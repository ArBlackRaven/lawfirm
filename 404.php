<?php 
get_header();
?>
<div class="m-auto py-[3rem] flex flex-col items-center
            phone:w-[90] 
            lg:w-[60%]
            xl:w-[50%]
">
<h1 class="text-[3rem] text-main-gold mb-[3rem] text-center">
    عزيزنة العميل يبدو ان الصفحة التي طلبتها غير موجودة بالموقع .. الرجاء العودة الي الصفحة الرئيسية
</h1>
<a class="col-span-3 lg:text-[1.5rem] m-auto py-3 px-5 rounded-lg border-4 text-main-white
        border-secondary-gold bg-secondary-gold duration-300
        hover:text-secondary-gold hover:bg-main-black hover:rounded-3xl hover:scale-[1.1]
" href="<?php echo home_url()?>">الصفحة الرئيسية</a>
</div>
<?php 
get_footer();
?>