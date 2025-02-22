<?php get_header() ?>

<div class="container mx-auto">
    <h1 class="text-3xl text-center my-6"><?php single_post_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover rounded">
                        <?php endif; ?>
                        <h2 class="text-xl font-bold mt-2"><?php the_title(); ?></h2>
                        <p class="text-gray-600"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:underline">Read More</a>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="pagination mt-8">
            <?php
            echo paginate_links(array(
                'prev_text' => '« Prev',
                'next_text' => 'Next »',
            ));
            ?>
        </div>
    <?php else : ?>
        <p class="text-center text-red-500">No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer() ?>