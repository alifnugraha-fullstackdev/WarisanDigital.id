<?php get_header(); ?>

<section class="min-h-screen flex items-center justify-center pt-24">
    <div class="container mx-auto px-6 text-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="prose prose-invert prose-gold mx-auto">
                <h1 class="font-playfair text-4xl mb-8"><?php the_title(); ?></h1>
                <div class="font-inter">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p class="font-mono text-gold uppercase tracking-widest">Konten Tidak Ditemukan</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
