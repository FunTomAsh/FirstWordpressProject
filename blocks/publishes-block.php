<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => $paged,
);
$posts_query = new WP_Query($args);
?>

<div class="container mx-auto">
    <div class="w-full h-auto bg-cover bg-no-repeat bg-center">
        <h2 class="text-2sm md:text-3xl mb-8 flex items-center justify-center h-[80px] md:h-[200px]">
            Lorem Ipsum
        </h2>
        <div class="w-full flex flex-wrap mb-12">
            <?php if ($posts_query->have_posts()) : ?>
                <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                <div class="w-full md:w-1/2 p-6 md:p-3 text-white">
                    <?php 
                    $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    ?>
                    <div class="h-auto md:h-80 px-6 py-8" 
                    <?php if ($bg_image) : ?> 
                        style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-size: cover; background-position: center;"
                        <?php else: ?>
                            style="background-color:black;"
                    <?php endif; ?>>
                        <h3 class="text-xl">
                            <a href="<?php the_permalink(); ?>" class="text-white">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <br>
                        <p style="line-height: 1.8;"><?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?> </p>
                        <br>
                        <a href="<?php the_permalink(); ?>" class="bg-red-800 px-10 py-2.5 text-white">
                            Więcej
                        </a>
                    </div>                    
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata();?>
                <div class="pagination text-center my-8">
                    <?php
                    echo paginate_links(array(
                        'total' => $posts_query->max_num_pages,
                        'prev_text' => __('« Prev'),
                        'next_text' => __('Next »'),
                    ));
                    ?>
                </div>
            <?php else: ?>
                <p style="color:red;">Nie znaleziono publikacji.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
