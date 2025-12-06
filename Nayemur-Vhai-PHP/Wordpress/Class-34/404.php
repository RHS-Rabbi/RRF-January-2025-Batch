<?php get_header(); ?>
    <section class="page-not-found py-40">
        <div class="container">
            <div class="w-full text-center flex flex-col gap-8">
                <h1 class="text-[100px] leading-20 font-bold">404</h1>
                <p>Page Not Found</p>
               <div class="">
                    <a class="service-btn" href="<?php echo home_url('/'); ?>">Go Home</a>
               </div>
            </div>
        </div>
    </section>
<?php get_footer();?>