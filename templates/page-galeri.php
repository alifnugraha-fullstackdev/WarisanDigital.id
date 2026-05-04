<?php
/**
 * Template Name: Galeri Sejarah
 */
get_header(); ?>

<main class="pt-32 pb-48 bg-background">
    <section class="px-8 max-w-7xl mx-auto mb-24">
        <div class="reveal max-w-3xl">
            <span class="font-mono text-tertiary text-xs uppercase tracking-[0.5em] mb-4 block">ARSIP VISUAL</span>
            <h1 class="font-display text-5xl md:text-7xl font-black text-white mb-8 leading-tight">Galeri Sejarah</h1>
            <p class="font-label text-on-surface-variant text-lg md:text-xl leading-relaxed">
                Dokumentasi visual perjalanan pemrograman Indonesia — dari gambar kartu plong hingga screenshot startup unicorn.
            </p>
        </div>
    </section>

    <!-- Filter Bar -->
    <section class="px-8 max-w-7xl mx-auto mb-16 reveal" data-delay="0.2">
        <div class="flex flex-wrap gap-4 font-mono text-[10px] uppercase tracking-widest">
            <button class="gallery-filter active bg-tertiary text-on-tertiary px-6 py-2.5 rounded-full" data-filter="all">Semua</button>
            <button class="gallery-filter border border-white/10 text-zinc-500 hover:text-white hover:border-white/30 px-6 py-2.5 rounded-full transition-all" data-filter="era-70-80">70-80an</button>
            <button class="gallery-filter border border-white/10 text-zinc-500 hover:text-white hover:border-white/30 px-6 py-2.5 rounded-full transition-all" data-filter="era-90">90an</button>
            <button class="gallery-filter border border-white/10 text-zinc-500 hover:text-white hover:border-white/30 px-6 py-2.5 rounded-full transition-all" data-filter="era-2000">2000an</button>
            <button class="gallery-filter border border-white/10 text-zinc-500 hover:text-white hover:border-white/30 px-6 py-2.5 rounded-full transition-all" data-filter="era-2010">2010an</button>
            <button class="gallery-filter border border-white/10 text-zinc-500 hover:text-white hover:border-white/30 px-6 py-2.5 rounded-full transition-all" data-filter="era-2020">2020an</button>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="px-8 max-w-7xl mx-auto">
        <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 auto-rows-[250px]">
            <?php
            $items = array(
                array(
                    'title' => 'Mainframe IBM BAPPENAS', 
                    'year' => '1974', 
                    'era' => 'era-70-80', 
                    'span' => 'col-span-2 row-span-2', 
                    'img' => 'mainframe-1974.png'
                ),
                array(
                    'title' => 'Warnet Pertama Jakarta', 
                    'year' => '1995', 
                    'era' => 'era-90', 
                    'span' => 'col-span-1 row-span-1', 
                    'img' => 'warnet-1995.png'
                ),
                array(
                    'title' => 'Tampilan Awal DetikCom', 
                    'year' => '1998', 
                    'era' => 'era-90', 
                    'span' => 'col-span-1 row-span-2', 
                    'img' => 'detik-1998.png'
                ),
                array(
                    'title' => 'Server Kaskus Awal', 
                    'year' => '2000', 
                    'era' => 'era-2000', 
                    'span' => 'col-span-1 row-span-1', 
                    'img' => 'kaskus-2000.png'
                ),
                array(
                    'title' => 'Revolusi Gojek', 
                    'year' => '2010', 
                    'era' => 'era-2010', 
                    'span' => 'col-span-2 row-span-1', 
                    'img' => 'gojek-2010.png'
                ),
                array(
                    'title' => 'Talenta Global ID', 
                    'year' => '2023', 
                    'era' => 'era-2020', 
                    'span' => 'col-span-1 row-span-2', 
                    'img' => 'github-2023.png'
                ),
                array(
                    'title' => 'Infrastruktur PDNS', 
                    'year' => '2022', 
                    'era' => 'era-2020', 
                    'span' => 'col-span-1 row-span-1', 
                    'img' => 'pdns-2022.png'
                ),
                array(
                    'title' => 'Startup Hackathon', 
                    'year' => '2012', 
                    'era' => 'era-2010', 
                    'span' => 'col-span-1 row-span-1', 
                    'img' => 'hackathon-2012.png'
                ),
            );

            foreach ( $items as $index => $item ) :
                $delay = ( $index % 4 ) * 0.1;
                $img_url = get_template_directory_uri() . '/assets/gallery/' . $item['img'];
                ?>
                <div class="gallery-item reveal <?php echo $item['span'] . ' ' . $item['era']; ?> relative group overflow-hidden rounded-xl bg-zinc-900" data-delay="<?php echo $delay; ?>">
                    <!-- Image Background -->
                    <img src="<?php echo $img_url; ?>" alt="<?php echo $item['title']; ?>" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-110 transition-all duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent translate-y-[60%] group-hover:translate-y-0 transition-transform duration-500 flex flex-col justify-end p-8 pointer-events-none">
                        <span class="font-mono text-tertiary text-[10px] uppercase tracking-widest mb-2"><?php echo $item['year']; ?></span>
                        <h3 class="font-display text-2xl text-white mb-2"><?php echo $item['title']; ?></h3>
                        <p class="font-body text-zinc-400 text-[10px] leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity delay-200">Momen bersejarah yang membentuk ekosistem digital Indonesia.</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Archive Note -->
    <section class="mt-32 px-8 text-center reveal">
        <p class="font-mono text-[10px] text-zinc-600 italic uppercase tracking-widest">
            * Seluruh visual dalam galeri ini adalah bagian dari dokumentasi sejarah digital Indonesia yang direkayasa oleh AI Generatif.
        </p>
    </section>
</main>

<?php get_footer(); ?>
