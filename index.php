<?php get_header(); ?>
<main>
    <h1 class="text-6xl">Testing</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h2>', '</h2>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>