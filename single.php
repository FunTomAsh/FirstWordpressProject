<?php get_header() ?>

<div class="w-full h-auto bg-gray-100 border-t-2 border-gray-500">
    <div class="container mx-auto py-0 md:py-12 flex items-center justify-center">
        <div class="w-full md:max-w-2/3 bg-white shadow-lg p-6">

            <?php if (!has_block('core/post-featured-image') && has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-auto mt-4">
            <?php endif; ?>
            
            <div class="content m-4 text-xs md:text-base">
                <?php the_content(); ?>
            </div>
            
        </div>
    </div>
</div>

<?php get_footer() ?>