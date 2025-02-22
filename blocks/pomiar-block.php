<?php
$background_image = get_field('background_image');
$header_text = get_field('header_text'); 
$li_texts = get_field('li_texts');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$picture1 = get_field('picture1');
$picture2 = get_field('picture2');
$left = get_field('left');
?>

<div class="w-full h-auto md:h-screen bg-cover bg-no-repeat bg-center"
    <?php if (isset($background_image['url'])) : ?> style= "background-image: url('<?php echo esc_url($background_image['url']); ?>');" <?php endif; ?>>
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="w-full h-2/3 flex flex-col items-center justify-center md:flex-row">
        <?php if ($left == true) : ?>
            <div class="w-full flex flex-col items-end md:w-1/2 mx-8">
                <?php if (isset($picture1['url'])) : ?>
                    <img src="<?php echo esc_url($picture1['url']); ?>" class="h-auto w-full py-5">
                <?php endif; ?>
                <?php if (isset($picture2['url'])) : ?>
                    <img src="<?php echo esc_url($picture2['url']); ?>" class="h-auto w-full py-5">
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="w-full flex flex-col md:w-1/2 justify-center items-center h-2/3 text-center md:text-left text-white">
                <div class="h-full md:h-2/3 flex flex-col justify-end items-center md:items-start">
                    <h2 class="text-2sm md:text-3xl mb-8"><?php echo esc_html($header_text); ?></h2>
                    <hr class="border border-red-500 w-[20%]">
                    <ul class="list-disc text-xs md:text-base py-5 mb-8">  
                        <?php if (have_rows('li_texts')) : ?>
                            <?php while (have_rows('li_texts')) : the_row(); ?>
                                <li class="mb-4"><?php echo esc_html(get_sub_field('li_line')); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <?php if (isset($button_text['url']) && isset($button_link['url'])) : ?>
                        <a href="<?php echo esc_url($button_link); ?>"
                        class="px-8 py-2 text-white bg-transparent border-5">
                            <?php echo esc_html($button_text); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($left == false) : ?>
            <div class="w-full flex flex-col h-full md:w-1/2 mx-8">
                <?php if (isset($picture1['url'])) : ?>
                    <img src="<?php echo esc_url($picture1['url']); ?>" class="h-auto w-full pb-5">
                <?php endif; ?>
                <?php if (isset($picture2['url'])) : ?>
                    <img src="<?php echo esc_url($picture2['url']); ?>" class="h-auto w-full pb-5">
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>