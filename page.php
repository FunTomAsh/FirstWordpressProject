<?php get_header() ?>

    <div class="bg-gray-400 w-full h-[80px] md:h-[300px] flex items-center justify-center">
        <h1 class="text-white text-xl md:text-4xl"><?php echo get_the_title(); ?></h1>
    </div>
    <div class="content"> 
        <?php the_content() ?>
    </div>

<?php get_footer() ?>