<?php
get_header();

// Custom Query to get all posts from CPT 'celebrity'
$custom_query = new WP_Query(array(
    'post_type'      => 'celebrity',
    'posts_per_page' => -1,
));
?>

<div class="bg-white p-6 font-sans">
    <h1 class="text-2xl font-bold mb-6">TODAY'S BIRTHDAYS</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

        <?php if ( $custom_query->have_posts() ) : ?>
            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                
                <div class="flex flex-col items-center text-center h-full">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', [
                                'class' => 'rounded-2xl w-64 h-64 object-cover mx-auto'
                            ]); ?>
                        </a>
                    <?php endif; ?>

                    <p class="mt-2 font-semibold text-sm">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </p>

                    <?php if ($occupation = get_field('occupation')) : ?>
                        <p class="text-xs text-gray-600"><?php echo esc_html($occupation); ?></p>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No birthdays found.</p>
        <?php endif; ?>

        <!-- Optional 'More' Card -->
        <div class="flex flex-col items-center justify-center rounded-2xl bg-pink-200 text-black font-bold text-lg w-64 h-64">
            <span>More</span>
        </div>

    </div>
</div>

<?php get_footer(); ?>
