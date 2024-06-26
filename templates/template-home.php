<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<main>
    <section>
        <div class="container py-20">
            <h1 class="text-4xl">Testing</h1>
            <p class="text-xl">Lorem ipsum</p>
        </div>
    </section>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>