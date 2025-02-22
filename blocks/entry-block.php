<?php
$background_image = get_field('background_image');
$header_text = get_field('header_text'); 
$paragraph_text1 = get_field('paragraph_text1');
$paragraph_text2 = get_field('paragraph_text2');
?>
<div class="mt-[-112px]">
    <div class="w-full h-auto md:h-screen bg-cover bg-no-repeat bg-center"
        <?php if (isset($background_image['url'])) : ?> style= "background-image: url('<?php echo esc_url($background_image['url']); ?>');" <?php endif; ?>>
        <div class="container mx-auto flex items-center justify-center h-full relative">
            <div class="flex flex-col mt-[112px] md:mt-0 text-left text-white">
                <div class="w-full md:w-3/5">
                    <hr class="border border-red-500 w-[10%] m-8">
                    <h1 class="text-2base md:text-4xl font-bold m-8"><?php echo esc_html($header_text); ?></h2>
                    <p class="font-semibold text-2xs md:text-2xl m-8"><?php echo esc_html($paragraph_text1); ?></p>
                    <p class="font-semibold text-2xs md:text-2xl m-8"><?php echo esc_html($paragraph_text2); ?></p>
                </div>
                <div class="w-full md:w-2/5"></div>    
            </div>
        </div>
    </div> 
</div>