<?php
$background_image = get_field('background_image');
$header_text = get_field('header_text'); 
$paragraph_text1 = get_field('paragraph_text1');
$paragraph_text2 = get_field('paragraph_text2');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$picture1 = get_field('picture1');
$picture2 = get_field('picture2');
$left = get_field('left');
?>

<div class="relative w-full h-auto md:h-screen bg-cover bg-no-repeat bg-center"
    <?php if (isset($background_image['url'])) : ?> style= "background-image: url('<?php echo esc_url($background_image['url']); ?>');" <?php endif; ?>>
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="flex flex-col my-4 md:my-0 mx-4 md:mx-0 md:flex-row md:max-h-[600px] max-w-[1200px]">
        <?php if ($left == true) : ?>
            <div class="w-full flex flex-col h-full md:w-1/2 px-8">
                <?php if (isset($picture1['url'])) : ?>
                    <img src="<?php echo esc_url($picture1['url']); ?>" class="h-auto w-full pb-5">
                <?php endif; ?>
                <?php if (isset($picture2['url'])) : ?>
                    <img src="<?php echo esc_url($picture2['url']); ?>" class="h-auto w-full pb-5">
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="w-full flex flex-col md:w-1/2 justify-center md:max-h-[600px] text-center md:text-left text-white">
                <div class="h-full md:h-2/3 flex flex-col justify-end items-center md:items-start">
                    <?php if (isset($background_image['url']) == false) : ?> <hr class="border border-red-500 w-[10%]"> <?php endif; ?>
                    <h2 class="text-2sm md:text-3xl mb-8"><?php echo esc_html($header_text); ?></h2>
                    <p class="text-xs md:text-base py-5 mb-8"><?php echo esc_html($paragraph_text1); ?></p>
                    <?php if (isset($button_text['url']) && isset($button_link['url'])) : ?>
                        <a href="<?php echo esc_url($button_link); ?>"
                        class="px-8 py-2 text-white bg-transparent border-5">
                            <?php echo esc_html($button_text); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($left == false) : ?>
            <div class="w-full flex flex-col h-full md:w-1/2 px-8">
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