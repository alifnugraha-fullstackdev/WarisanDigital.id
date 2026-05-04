<?php 
/**
 * Template Name: Sisi Terang
 */
get_header(); ?>

<script>
    // Paksa hapus class 'dark' agar tidak ada gaya gelap yang bocor
    document.documentElement.classList.remove('dark');
</script>

<style>
    /* FORCED LIGHT MODE FOR SISI TERANG */
    :root, html, body {
        background-color: #FDFCF8 !important;
        color: #18181b !important;
    }
    .dark body { 
        background-color: #FDFCF8 !important;
        color: #18181b !important;
    }
    .noise-overlay {
        opacity: 0.02 !important;
        background-color: #FDFCF8 !important;
    }
    header#main-nav, #main-nav {
        background-color: transparent !important;
        background: transparent !important;
    }
    #main-nav > div { 
        background-color: rgba(255, 255, 255, 0.8) !important; 
        border-color: rgba(0,0,0,0.1) !important; 
        backdrop-filter: blur(20px) !important;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05) !important;
    }
    /* Pastikan div di dalamnya tidak ikut jadi putih */
    #main-nav div div {
        background-color: transparent !important;
        background: transparent !important;
        border-color: transparent !important;
    }
    #main-nav a { color: #18181b !important; }
    #main-nav .text-tertiary { color: #C9A84C !important; }
    #main-nav .text-zinc-400 { color: #71717a !important; }
    #main-nav span { color: #C9A84C !important; }
    
    .text-glow-sun {
        text-shadow: 0 0 40px rgba(231, 195, 101, 0.4);
    }
</style>

<!-- SECTION 1: HERO "CAHAYA" -->
<section class="relative min-h-screen flex flex-col justify-center items-center px-6 overflow-hidden pt-32 pb-20 text-center bg-[#FDFCF8]">
    <!-- Background Grid Subtleness -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#C9A84C 1px, transparent 1px); background-size: 40px 40px;"></div>
    
    <div class="relative z-10 max-w-6xl mx-auto w-full flex flex-col items-center">
        <div class="flex flex-col md:flex-row items-center md:items-end justify-center gap-8 mb-16">
            <h1 class="reveal font-display text-7xl md:text-[10rem] font-black tracking-tight text-zinc-200 leading-none">
                Sisi <span class="text-tertiary italic">Terang</span>
            </h1>
            <div class="reveal text-tertiary animate-pulse mb-4" data-delay="0.3">
                <span class="material-symbols-outlined text-8xl md:text-[12rem] text-glow-sun">light_mode</span>
            </div>
        </div>

        <blockquote class="reveal font-display italic text-2xl md:text-3xl text-zinc-400 max-w-4xl leading-tight border-t border-zinc-100 pt-12" data-delay="0.5">
            " Teknologi tidak harus selalu canggih, tetapi harus bisa membantu menyelesaikan persoalan masyarakat dengan cara paling menguntungkan. "
        </blockquote>
    </div>
    
    <!-- Background Star Element -->
    <div class="absolute right-[-10%] top-1/2 -translate-y-1/2 opacity-5 pointer-events-none">
        <span class="material-symbols-outlined text-[40rem] text-tertiary">star</span>
    </div>
</section>

<!-- SECTION 2: WHITE QUOTE BOX (HABIBIE) -->
<section class="py-32 px-6 bg-[#FDFCF8] relative overflow-hidden">
    <div class="max-w-6xl mx-auto">
        <div class="reveal bg-white p-12 md:p-24 rounded-none border-l-[12px] border-tertiary shadow-[0_50px_100px_rgba(201,168,76,0.05)]" data-delay="0.2">
            <p class="font-display italic text-3xl md:text-5xl text-zinc-800 leading-[1.1] mb-0">
                " Kalau bukan anak bangsa ini yang membangun bangsanya, siapa lagi? Jangan saudara mengharapkan orang lain yang datang membangun bangsa kita. "
            </p>
        </div>
    </div>
</section>

<!-- SECTION 3: AULA CAHAYA (GRID) -->
<section class="py-40 px-6 bg-white relative">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-8 mb-24 reveal">
            <div class="h-px flex-1 bg-zinc-100"></div>
            <h2 class="font-mono text-xs tracking-[0.6em] text-zinc-300 uppercase">AULA CAHAYA</h2>
            <div class="h-px flex-1 bg-zinc-100"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <?php
            $items = array(
                array(
                    'year' => '1999',
                    'tag' => 'KOMUNITAS',
                    'title' => 'Kaskus',
                    'desc' => 'Andrew Darwis dkk membuktikan bahwa forum lokal bisa menyatukan jutaan netizen, membentuk kultur internet awal di nusantara.'
                ),
                array(
                    'year' => '2010',
                    'tag' => 'DECACORN',
                    'title' => 'Gojek',
                    'desc' => 'Dari call center menjadi super-app yang merevolusi transportasi dan ekonomi digital di Asia Tenggara.'
                ),
                array(
                    'year' => '2009',
                    'tag' => 'UNICORN',
                    'title' => 'Tokopedia',
                    'desc' => 'Mendemokratisasi perdagangan bagi jutaan UMKM, membangun infrastruktur digital untuk memberdayakan ekonomi rakyat.'
                ),
                array(
                    'year' => 'Global',
                    'tag' => 'TALENT',
                    'title' => 'FAANG Talents',
                    'desc' => 'Ratusan engineer Indonesia berkarir di Google, Meta, dan Apple. Bukti kualitas talenta kita setara dengan yang terbaik di dunia.'
                ),
                array(
                    'year' => '2020',
                    'tag' => 'RESPON',
                    'title' => 'PeduliLindungi',
                    'desc' => 'Di tengah krisis pandemi, developer Indonesia bergerak cepat membangun sistem kesehatan digital nasional berskala masif.'
                ),
                array(
                    'year' => 'Ongoing',
                    'tag' => 'OPEN SOURCE',
                    'title' => 'Open Source',
                    'desc' => 'Kontribusi tak henti dari programmer Indonesia di GitHub, ikut membangun framework yang digunakan dunia.'
                ),
            );

            foreach ($items as $index => $item) :
                $delay = $index * 0.1;
            ?>
            <div class="reveal bg-[#FDFCF8] p-12 rounded-[2rem] border border-zinc-100 group hover:scale-[1.02] hover:shadow-2xl hover:shadow-tertiary/5 transition-all duration-500" data-delay="<?php echo $delay; ?>">
                <div class="flex justify-between items-center mb-12">
                    <span class="bg-[#E2F3EB] text-[#2D8B5D] font-mono text-[10px] px-4 py-1.5 rounded-full"><?php echo $item['year']; ?></span>
                    <span class="font-mono text-[9px] text-[#C9A84C] tracking-widest uppercase border border-[#C9A84C]/30 px-3 py-1 rounded"><?php echo $item['tag']; ?></span>
                </div>
                <h3 class="font-display text-5xl text-zinc-900 mb-6"><?php echo $item['title']; ?></h3>
                <p class="font-body text-zinc-500 text-lg leading-relaxed">
                    <?php echo $item['desc']; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SECTION 4: BJ HABIBIE FINAL QUOTE -->
<section class="py-40 px-6 bg-[#FDFCF8] relative overflow-hidden text-center">
    <div class="max-w-5xl mx-auto relative z-10">
        <div class="reveal text-[#2D8B5D] text-6xl mb-12" data-delay="0.1">"</div>
        <h2 class="reveal font-display text-4xl md:text-6xl text-zinc-800 leading-tight mb-16" data-delay="0.3">
            " Jadilah mata air. Berperilakulah seperti mata air yang memberikan kehidupan bagi banyak orang. "
        </h2>
        <div class="reveal flex flex-col items-center gap-4" data-delay="0.5">
            <div class="w-10 h-px bg-[#2D8B5D]"></div>
            <span class="font-mono text-xs tracking-[0.4em] text-[#2D8B5D]">B.J. HABIBIE</span>
        </div>
    </div>
</section>

<!-- SECTION 5: FOOTER SISI GELAP -->
<section class="py-60 px-6 bg-gradient-to-b from-[#FDFCF8] to-zinc-900 text-center">
    <div class="max-w-4xl mx-auto">
        <h2 class="reveal font-display text-4xl md:text-7xl text-zinc-800 dark:text-white mb-16" data-delay="0.2">
            Masih ada sisi lain dari sejarah ini.
        </h2>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'sisi-gelap' ) ) ); ?>" class="reveal inline-flex items-center gap-4 bg-[#F8A3A3] text-zinc-900 font-label px-12 py-6 rounded-xl hover:scale-110 transition-all duration-300 group" data-delay="0.4">
            HADAPI SISI GELAP <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
        </a>
    </div>
</section>

<?php get_footer(); ?>
