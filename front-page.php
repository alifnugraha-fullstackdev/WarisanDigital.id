<?php get_header(); ?>

<!-- SECTION A: HERO -->
<section class="relative min-h-screen flex flex-col justify-center items-center px-6 overflow-hidden pt-20">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-tertiary/10 via-background/50 to-background z-0"></div>
    
    <!-- Archipelago Silhouette -->
    <div class="absolute inset-0 opacity-[0.04] bg-center bg-no-repeat bg-contain z-0" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 1000 400\'%3E%3Cpath fill=\'%23C9A84C\' d=\'M100,200 Q150,150 200,200 T300,200 T400,200 T500,200 T600,200 T700,200 T800,200 T900,200\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'2\' /%3E%3Ctext x=\'500\' y=\'230\' font-family=\'Newsreader\' font-size=\'150\' text-anchor=\'middle\' opacity=\'0.2\' fill=\'%23C9A84C\'%3EINDONESIA%3C/text%3E%3C/svg%3E');"></div>

    <div class="relative z-10 max-w-5xl mx-auto text-center flex flex-col items-center gap-8">
        <div class="reveal inline-flex items-center gap-2 border border-tertiary/30 bg-tertiary/5 px-6 py-2 rounded-full font-mono text-[10px] text-tertiary tracking-[0.3em]" data-delay="0.1">
            ✦ DIDEDIKASIKAN UNTUK SELURUH PROGRAMMER INDONESIA ✦
        </div>

        <div class="reveal min-h-[1.5em]" data-delay="0.3">
            <h2 id="typewriter" class="font-mono text-on-surface-variant text-xs md:text-sm uppercase tracking-[0.4em]" 
                data-phrases='["Kita Menulis Kode.", "Kita Membangun Bangsa.", "Kita Meninggalkan Warisan."]'>
            </h2>
        </div>

        <h1 class="reveal font-display text-5xl md:text-8xl lg:text-9xl font-black tracking-tight text-white leading-[1.1] mb-4" data-delay="0.5">
            50 Tahun Pemrograman <br/>
            <span class="italic text-tertiary text-glow">Indonesia</span>
        </h1>

        <p class="reveal font-label text-on-surface-variant text-lg md:text-xl max-w-2xl mx-auto leading-relaxed mb-8" data-delay="0.7">
            Dari mesin kartu plong di BAPPENAS hingga unicorn senilai miliaran dolar — ini adalah sejarah kita, ditulis dalam kode.
        </p>

        <div class="reveal flex flex-col sm:flex-row gap-10 mt-16 mb-20" data-delay="0.9">
            <a href="#timeline" class="btn-gold group">
                Mulai Perjalanan ↓
            </a>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'sisi-terang' ) ) ); ?>" class="btn-outline">
                Lihat Sisi Terang →
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-12 text-tertiary animate-bounce z-10">
        <span class="material-symbols-outlined text-3xl">expand_more</span>
    </div>
</section>

<!-- SECTION B: DEDICATION QUOTE -->
<section class="py-60 px-6 bg-surface-container-lowest relative overflow-hidden">
    <div class="absolute top-10 left-10 text-[20rem] text-white/5 font-display select-none leading-none pointer-events-none">"</div>
    
    <div class="max-w-4xl mx-auto relative z-10 text-center flex flex-col items-center gap-12">
        <blockquote class="reveal font-display italic text-3xl md:text-5xl lg:text-6xl text-white leading-tight">
            " Untuk mereka yang mengetik dimana saja, yang begadang tanpa bayaran, yang percaya bahwa kode bisa mengubah Indonesia. "
        </blockquote>
        
        <div class="reveal font-mono text-tertiary tracking-[0.4em] text-xs uppercase" data-delay="0.3">
            — WARISANDIGITAL, 2026
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 w-full mt-24 pt-24 border-t border-white/5">
            <div class="reveal" data-delay="0.4">
                <div class="counter font-display text-4xl md:text-5xl text-white mb-2" data-target="50" data-suffix="+ Tahun">0</div>
                <div class="font-label text-on-surface-variant text-[10px] uppercase tracking-widest">Perjalanan Teknologi</div>
            </div>
            <div class="reveal" data-delay="0.5">
                <div class="counter font-display text-4xl md:text-5xl text-white mb-2" data-target="10000" data-suffix="+">0</div>
                <div class="font-label text-on-surface-variant text-[10px] uppercase tracking-widest">Developer Indonesia Aktif</div>
            </div>
            <div class="reveal" data-delay="0.6">
                <div class="counter font-display text-4xl md:text-5xl text-white mb-2" data-target="1" data-suffix=" Tujuan">0</div>
                <div class="font-label text-on-surface-variant text-[10px] uppercase tracking-widest">Indonesia Digital Unggul</div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION C: PETA INDONESIA INTERAKTIF -->
<section class="py-32 px-6 relative bg-background">
    <div class="max-w-7xl mx-auto flex flex-col gap-16">
        <div class="text-center reveal">
            <h2 class="font-display text-3xl md:text-5xl text-white">Klik Wilayah untuk Melihat Sejarahnya</h2>
            <div class="h-px w-24 bg-tertiary mx-auto mt-8"></div>
        </div>
        
        <div class="reveal relative w-full aspect-[2/1] bg-surface-container-low rounded-2xl border border-white/5 overflow-hidden flex items-center justify-center p-8" data-delay="0.2">
            <div class="absolute inset-0 bg-cover bg-center opacity-40 mix-blend-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/map-indonesia.png')"></div>
            
            <!-- NODE: MEDAN -->
            <div class="absolute top-[31.6%] left-[12.6%] group z-20">
                <div class="w-3 h-3 bg-tertiary rounded-full shadow-[0_0_15px_#e7c365] animate-pulse cursor-pointer"></div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-surface-container-highest/95 backdrop-blur-xl border border-tertiary/50 p-6 rounded-xl shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="font-display text-lg text-white">Medan</h3>
                        <span class="font-mono text-[9px] bg-tertiary/20 text-tertiary px-2 py-0.5 rounded">1985</span>
                    </div>
                    <p class="font-body text-xs text-on-surface-variant leading-relaxed">
                        Pintu masuk perangkat keras komputer di Sumatra Utara dan pusat komunitas BBS awal di luar Jawa.
                    </p>
                </div>
            </div>

            <!-- NODE: JAKARTA -->
            <div class="absolute top-[71.1%] left-[27.6%] group z-20">
                <div class="w-4 h-4 bg-tertiary rounded-full shadow-[0_0_20px_#e7c365] animate-pulse cursor-pointer" style="animation-delay: 0.2s"></div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-surface-container-highest/95 backdrop-blur-xl border border-tertiary/50 p-6 rounded-xl shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="font-display text-lg text-white">Jakarta</h3>
                        <span class="font-mono text-[9px] bg-tertiary/20 text-tertiary px-2 py-0.5 rounded">1970</span>
                    </div>
                    <p class="font-body text-xs text-on-surface-variant leading-relaxed">
                        Pemasangan mainframe IBM pertama di BAPPENAS. Titik nol komputasi modern Indonesia.
                    </p>
                </div>
            </div>

            <!-- NODE: BANDUNG -->
            <div class="absolute top-[74.2%] left-[29.1%] group z-20">
                <div class="w-3 h-3 bg-tertiary rounded-full shadow-[0_0_15px_#e7c365] animate-pulse cursor-pointer" style="animation-delay: 0.4s"></div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-surface-container-highest/95 backdrop-blur-xl border border-tertiary/50 p-6 rounded-xl shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="font-display text-lg text-white">Bandung</h3>
                        <span class="font-mono text-[9px] bg-tertiary/20 text-tertiary px-2 py-0.5 rounded">1980</span>
                    </div>
                    <p class="font-body text-xs text-on-surface-variant leading-relaxed">
                        Lahirnya Paguyuban Network di ITB, cikal bakal jaringan internet independen Indonesia.
                    </p>
                </div>
            </div>

            <!-- NODE: SURABAYA -->
            <div class="absolute top-[75.9%] left-[39.0%] group z-20">
                <div class="w-3 h-3 bg-tertiary rounded-full shadow-[0_0_15px_#e7c365] animate-pulse cursor-pointer" style="animation-delay: 0.6s"></div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-surface-container-highest/95 backdrop-blur-xl border border-tertiary/50 p-6 rounded-xl shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="font-display text-lg text-white">Surabaya</h3>
                        <span class="font-mono text-[9px] bg-tertiary/20 text-tertiary px-2 py-0.5 rounded">1990</span>
                    </div>
                    <p class="font-body text-xs text-on-surface-variant leading-relaxed">
                        Pusat inovasi perangkat lunak dan komunitas pengembang yang solid di Jawa Timur.
                    </p>
                </div>
            </div>

            <!-- NODE: MAKASSAR -->
            <div class="absolute top-[65.6%] left-[53.4%] group z-20">
                <div class="w-3 h-3 bg-tertiary rounded-full shadow-[0_0_15px_#e7c365] animate-pulse cursor-pointer" style="animation-delay: 0.8s"></div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-surface-container-highest/95 backdrop-blur-xl border border-tertiary/50 p-6 rounded-xl shadow-2xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="font-display text-lg text-white">Makassar</h3>
                        <span class="font-mono text-[9px] bg-tertiary/20 text-tertiary px-2 py-0.5 rounded">2000</span>
                    </div>
                    <p class="font-body text-xs text-on-surface-variant leading-relaxed">
                        Gerbang utama digitalisasi Indonesia Timur dan pusat pertumbuhan talenta teknologi baru.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION D: TIMELINE ERA -->
<section id="timeline" class="py-32 px-6 bg-background relative">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-32 reveal">
            <span class="font-mono text-tertiary text-xs uppercase tracking-[0.5em] mb-4 block">GARIS WAKTU SEJARAH</span>
            <h2 class="font-display text-4xl md:text-6xl font-bold text-white leading-tight">Enam Era yang Membentuk Kita</h2>
        </div>

        <div class="relative flex flex-col gap-12 before:content-[''] before:absolute before:inset-y-0 before:left-4 md:before:left-1/2 before:-translate-x-1/2 before:w-[2px] before:bg-gradient-to-b before:from-transparent before:via-tertiary/30 before:to-transparent">
            
            <?php
            $eras = array(
                array(
                    'year' => '1970 — 1979',
                    'title' => 'Benih Ditanam',
                    'icon' => '<path d="M6 19v-3h12v3c0 1.1-.9 2-2 2H8c-1.1 0-2-.9-2-2zm12-9V5c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v5h12zm-3-3h-2V5h2v2zm-4 0H9V5h2v2z"/>',
                    'desc' => 'Komputer mainframe IBM pertama masuk ke BAPPENAS. Titik nol sejarah di mana mahasiswa Indonesia mulai dikirim ke luar negeri untuk mempelajari ilmu komputer.',
                    'align' => 'right'
                ),
                array(
                    'year' => '1980 — 1989',
                    'title' => 'Tunas Tumbuh',
                    'icon' => '<path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/>',
                    'desc' => 'Komputer Apple II mulai masuk ke sekolah-sekolah. Program studi Teknik Informatika pertama di Indonesia dibuka secara resmi di UI dan ITS.',
                    'align' => 'left'
                ),
                array(
                    'year' => '1990 — 1999',
                    'title' => 'Gelombang Pertama',
                    'icon' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>',
                    'desc' => '1994: Internet masuk melalui IPTEK-net. Fenomena Warnet memicu ledakan budaya coding dan lahirnya forum-forum programmer lokal pertama.',
                    'align' => 'right'
                ),
                array(
                    'year' => '2000 — 2009',
                    'title' => 'Kebangkitan Digital',
                    'icon' => '<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>',
                    'desc' => 'Era Kaskus, Friendster, dan Detik.com. Startup teknologi pertama mulai bermunculan di tengah masa pemulihan digital pasca krisis.',
                    'align' => 'left'
                ),
                array(
                    'year' => '2010 — 2019',
                    'title' => 'Revolusi Startup',
                    'icon' => '<path d="M12 2.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V3a.5.5 0 0 1 .5-.5zm0 18a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 .5-.5zm9.5-9.5a.5.5 0 0 1 .5.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm-18 0a.5.5 0 0 1 .5.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>',
                    'desc' => 'Lahirnya Gojek, Tokopedia, dan Bukalapak. Komunitas pengembang meledak dan developer Indonesia mulai diperhitungkan di kancah global.',
                    'align' => 'right'
                ),
                array(
                    'year' => '2020 — SEKARANG',
                    'title' => 'Warisan Diwariskan',
                    'icon' => '<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>',
                    'desc' => 'Era AI, Cloud-Native, dan Web3. Indonesia masuk Top 10 negara dengan developer terbanyak di GitHub. Generasi baru mulai membangun legasinya sendiri.',
                    'align' => 'left'
                ),
            );

            foreach ( $eras as $index => $era ) :
                $is_right = $era['align'] == 'right';
                $delay = $index * 0.1;
                ?>
                <div class="reveal relative flex flex-col md:flex-row items-center justify-center w-full group" data-delay="<?php echo $delay; ?>">
                    
                    <!-- Content Wrapper -->
                    <div class="w-full flex <?php echo $is_right ? 'md:justify-start flex-row-reverse' : 'md:justify-end'; ?> items-center">
                        
                        <!-- Left Side (Empty on Right Align, Content on Left Align) -->
                        <div class="hidden md:block w-1/2 <?php echo $is_right ? 'order-2 pl-16' : 'order-1 pr-16 text-right'; ?>">
                            <?php if (!$is_right) : ?>
                                <div class="bg-surface-container/30 backdrop-blur-md border border-white/5 p-8 rounded-2xl hover:border-tertiary/30 transition-all duration-500">
                                    <div class="flex items-center gap-4 mb-4 justify-end">
                                        <div class="w-10 h-10 rounded-lg bg-tertiary/10 flex items-center justify-center text-tertiary">
                                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><?php echo $era['icon']; ?></svg>
                                        </div>
                                        <div class="font-mono text-tertiary text-xs uppercase tracking-widest"><?php echo $era['year']; ?></div>
                                    </div>
                                    <h3 class="font-display text-2xl text-white mb-3"><?php echo $era['title']; ?></h3>
                                    <p class="font-body text-on-surface-variant text-sm leading-relaxed"><?php echo $era['desc']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Center Dot -->
                        <div class="absolute left-4 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-tertiary bg-background z-20 group-hover:scale-125 transition-transform duration-300 shadow-[0_0_15px_#e7c365]">
                            <div class="absolute inset-1 rounded-full bg-tertiary animate-pulse"></div>
                        </div>

                        <!-- Right Side (Content on Right Align, Empty on Left Align) -->
                        <div class="w-full md:w-1/2 pl-12 md:pl-16 <?php echo $is_right ? 'order-1' : 'order-2'; ?>">
                            <?php if ($is_right) : ?>
                                <div class="bg-surface-container/30 backdrop-blur-md border border-white/5 p-8 rounded-2xl hover:border-tertiary/30 transition-all duration-500">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-10 h-10 rounded-lg bg-tertiary/10 flex items-center justify-center text-tertiary">
                                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><?php echo $era['icon']; ?></svg>
                                        </div>
                                        <div class="font-mono text-tertiary text-xs uppercase tracking-widest"><?php echo $era['year']; ?></div>
                                    </div>
                                    <h3 class="font-display text-2xl text-white mb-3"><?php echo $era['title']; ?></h3>
                                    <p class="font-body text-on-surface-variant text-sm leading-relaxed"><?php echo $era['desc']; ?></p>
                                </div>
                            <?php endif; ?>

                            <!-- Mobile Only Content for Left-Aligned Eras -->
                            <?php if (!$is_right) : ?>
                                <div class="md:hidden bg-surface-container/30 backdrop-blur-md border border-white/5 p-8 rounded-2xl">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-10 h-10 rounded-lg bg-tertiary/10 flex items-center justify-center text-tertiary">
                                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><?php echo $era['icon']; ?></svg>
                                        </div>
                                        <div class="font-mono text-tertiary text-xs uppercase tracking-widest"><?php echo $era['year']; ?></div>
                                    </div>
                                    <h3 class="font-display text-2xl text-white mb-3"><?php echo $era['title']; ?></h3>
                                    <p class="font-body text-on-surface-variant text-sm leading-relaxed"><?php echo $era['desc']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SECTION D: DUAL PATH TEASER -->
<section class="flex flex-col md:flex-row border-y border-white/5">
    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'sisi-terang' ) ) ); ?>" 
       class="flex-1 relative group bg-[#0A1A15] hover:bg-[#0E261E] transition-colors duration-500 overflow-hidden flex flex-col justify-center items-center py-32 px-12 text-center border-b md:border-b-0 md:border-r border-white/5">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(201,168,76,0.1)_0%,transparent_70%)] opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
        <div class="relative z-10 flex flex-col items-center gap-6">
            <span class="font-mono text-[10px] tracking-widest text-[#a3dcb4] uppercase">PRESTASI & KEJAYAAN</span>
            <h2 class="font-display text-4xl md:text-6xl text-white">Sisi Terang</h2>
            <div class="flex items-center gap-2 text-tertiary font-label mt-4 group-hover:translate-x-2 transition-transform duration-300">
                JELAJAHI CAHAYA <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </div>
        </div>
    </a>

    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'sisi-gelap' ) ) ); ?>" 
       class="flex-1 relative group bg-[#1A0A0A] hover:bg-[#260E0E] transition-colors duration-500 overflow-hidden flex flex-col justify-center items-center py-32 px-12 text-center">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(139,0,0,0.1)_0%,transparent_70%)] opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
        <div class="relative z-10 flex flex-col items-center gap-6">
            <span class="font-mono text-[10px] tracking-widest text-error uppercase">LUKA & PELAJARAN</span>
            <h2 class="font-display text-4xl md:text-6xl text-white">Sisi Gelap</h2>
            <div class="flex items-center gap-2 text-error font-label mt-4 group-hover:translate-x-2 transition-transform duration-300">
                HADAPI KEGELAPAN <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </div>
        </div>
    </a>
</section>

<?php get_footer(); ?>
