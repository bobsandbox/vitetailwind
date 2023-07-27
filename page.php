<?php get_header() ?>

    <?php include get_template_directory() . '/template-parts/pagetop.php' ?>

    <article class="max-w-screen-lg mx-auto ">

        <h1 class="text-3xl font-semibold"><?php the_title() ?></h1>
        <div class="mt-4">
            <?php the_content() ?>
        </div>

    </article>

    <?php include get_template_directory() . '/template-parts/cta.php' ?>

<?php get_footer() ?>