<?php
$title = get_field('title');
$list = get_field('list');
?>

<div class="container mx-auto">
    <div class="w-full h-auto">
        <h2 class="text-2sm md:text-3xl mb-8 flex items-center justify-center h-[200px]">
            <?php if (isset($title)): echo esc_html($title); endif; ?>
        </h2>
        <div class="w-full flex flex-wrap">
            <?php if (have_rows('list')) : ?>
                <?php while (have_rows('list')) : the_row(); ?>
                <div class="w-full md:w-1/2 p-6 md:p-3 text-white">
                    <?php 
                    $bg_image = get_sub_field('background_image'); 
                    $bg_url = is_array($bg_image) ? $bg_image['url'] : '';
                    ?>
                    <div class="h-80 px-6 py-8" 
                    <?php if (isset($bg_url)) : ?> 
                        style="background-image: url('<?php echo esc_url($bg_url); ?>'); background-size: cover;"
                    <?php endif; ?>>
                        <h3 class="text-xl">
                            <?php echo esc_html(get_sub_field('blog_title')); ?>
                        </h3>
                        <br>
                        <p style="line-height: 1.8;"><?php echo esc_html(get_sub_field('blog_description')); ?> </p>
                        <br>
                        <?php 
                        $button_text = get_sub_field('button_text');
                        $button_link = get_sub_field('button_link');
                        if (isset($button_text) && isset($button_link)) : ?>
                        <a href="<?php echo esc_url($button_link); ?>"
                        class="bg-red-800 px-10 py-2.5 text-white">
                            <?php echo esc_html($button_text); ?>
                        </a>
                        <?php endif; ?>
                    </div>                    
                </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p style="color:red;">Repeater field is empty or not found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>