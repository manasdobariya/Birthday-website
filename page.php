<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
            <div class="prose">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    endwhile;
else :
    ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'birthdays'); ?></p>  
<?php
endif;

get_footer();
