<?php
/**
 * The template for displaying search results pages
 */
get_header(); ?>

<main class="pt-32 pb-48">
    <section class="px-8 max-w-7xl mx-auto mb-24">
        <div class="reveal">
            <span class="font-mono text-tertiary text-xs uppercase tracking-[0.5em] mb-4 block">HASIL PENCARIAN</span>
            <h1 class="font-display text-5xl md:text-7xl font-black text-white mb-8 leading-tight">
                <?php printf( esc_html__( 'Menampilkan: %s', 'themes-competition' ), '<span class="text-tertiary">' . get_search_query() . '</span>' ); ?>
            </h1>
            <p class="font-label text-on-surface-variant text-lg md:text-xl leading-relaxed max-w-2xl">
                Ditemukan <?php echo $wp_query->found_posts; ?> entitas yang berkaitan dengan kata kunci Anda dalam arsip digital kami.
            </p>
        </div>
    </section>

    <section class="px-8 max-w-7xl mx-auto">
        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="reveal group bg-surface-container border border-white/5 p-8 rounded-2xl hover:border-tertiary transition-all duration-500 flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="flex justify-between items-start">
                                <span class="font-mono text-[10px] text-tertiary uppercase tracking-widest bg-tertiary/10 px-3 py-1 rounded-full">
                                    <?php echo get_post_type(); ?>
                                </span>
                                <span class="font-mono text-[10px] text-zinc-500 uppercase">
                                    <?php echo get_the_date(); ?>
                                </span>
                            </div>
                            <h2 class="font-display text-2xl text-white group-hover:text-tertiary transition-colors leading-tight">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="font-body text-zinc-400 text-sm leading-relaxed line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        
                        <div class="pt-8">
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-3 font-mono text-[10px] text-white uppercase tracking-widest group/btn">
                                TELUSURI LEBIH JAUH 
                                <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-2 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-24 flex justify-center">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<span class="material-symbols-outlined">chevron_left</span>',
                    'next_text' => '<span class="material-symbols-outlined">chevron_right</span>',
                    'class'     => 'pagination-custom'
                ) );
                ?>
            </div>

        <?php else : ?>
            <div class="text-center py-24 bg-surface-container rounded-3xl border border-dashed border-white/10 reveal">
                <span class="material-symbols-outlined text-8xl text-zinc-800 mb-8">search_off</span>
                <h3 class="font-display text-3xl text-white mb-4">Arsip Tidak Ditemukan</h3>
                <p class="font-body text-zinc-500 max-w-md mx-auto">
                    Mohon maaf, kata kunci yang Anda cari tidak tersedia dalam dokumentasi kami saat ini. Coba gunakan kata kunci lain.
                </p>
                <div class="mt-12">
                    <button onclick="document.getElementById('search-open').click()" class="btn-gold-sm inline-flex items-center gap-3">
                        COBA LAGI <span class="material-symbols-outlined text-sm">refresh</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
