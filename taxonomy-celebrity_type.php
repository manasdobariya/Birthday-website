<?php get_header(); ?>

<main id="main-content" class="max-w-5xl mx-auto px-4 py-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="bg-white shadow-md rounded-xl overflow-hidden flex flex-col md:flex-row items-start gap-6 p-6">
            <!-- Thumbnail -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="w-full md:w-1/3">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-auto object-cover rounded-lg']); ?>
                </div>
            <?php endif; ?>

            <!-- Info Section -->
            <div class="w-full md:w-2/3 space-y-4">
                <!-- Name and Occupation -->
                <div>
                    <h1 class="text-3xl font-bold uppercase"><?php the_title(); ?></h1>
                    <?php if (get_field('profession')) : ?>
                        <p class="text-lg text-gray-600"><?php the_field('profession'); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Birthday Info Grid -->
                <div class="grid grid-cols-2 md:grid-cols-2 gap-y-2 gap-x-8 text-sm">
                    <?php if (get_field('birthday')) : ?>
                        <div>
                            <p class="font-bold uppercase text-xs text-gray-500">Birthday</p>
                            <p class="text-base"><?php the_field('birthday'); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('birthsign')) : ?>
                        <div>
                            <p class="font-bold uppercase text-xs text-gray-500">Birth Sign</p>
                            <p class="text-base"><?php the_field('birthsign'); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('birthplace')) : ?>
                        <div>
                            <p class="font-bold uppercase text-xs text-gray-500">Birthplace</p>
                            <p class="text-base"><?php the_field('birthplace'); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('age')) : ?>
                        <div>
                            <p class="font-bold uppercase text-xs text-gray-500">Age</p>
                            <p class="text-base"><?php the_field('age'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Popularity Badge and Boost Button -->
                <?php if (get_field('popularity_rank')) : ?>
                    <div class="flex items-center gap-4 bg-pink-100 text-pink-800 px-4 py-2 rounded-md w-fit">
                        <span class="text-xl font-bold">#<?php the_field('popularity_rank'); ?></span>
                        <div class="text-sm text-gray-700">
                            Most Popular
                        </div>
                        <button class="ml-auto text-sm bg-white border border-pink-500 text-pink-500 px-3 py-1 rounded hover:bg-pink-500 hover:text-white transition flex items-center">
                            <svg class="w-4 h-4 fill-current mr-1 text-pink-500" viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.45 13.97 5.82 21z"/>
                            </svg>
                            Boost
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </article>

        <!-- About Section -->
        <div class="mt-8 max-w-5xl mx-auto px-4">
            <h2 class="text-lg font-bold uppercase mb-2">About</h2>
            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
