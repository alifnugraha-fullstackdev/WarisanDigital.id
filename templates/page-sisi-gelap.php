<?php
/**
 * Template Name: Sisi Gelap
 */
get_header(); ?>

<main class="bg-[#050508] relative overflow-hidden">
    <!-- Atmospheric Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(139,0,0,0.15)_0%,transparent_70%)] pointer-events-none"></div>

    <!-- Hero Section -->
    <section class="relative min-h-[80vh] flex flex-col justify-center px-8 py-20">
        <div class="max-w-4xl mx-auto text-center relative z-10 space-y-12">
            <div class="reveal inline-flex items-center gap-3 px-6 py-2 border border-error/30 bg-error/10 rounded-full text-[10px] font-mono text-error uppercase tracking-widest">
                <span class="material-symbols-outlined text-sm">warning</span>
                ⚠ KONTEN BERDASARKAN FAKTA DAN DATA PUBLIK
            </div>
            
            <h1 class="reveal font-display text-7xl md:text-9xl font-bold tracking-tight text-white leading-none">
                Sisi <span class="text-error shadow-glow italic">Gelap</span>
            </h1>
            
            <p class="reveal font-display text-xl md:text-2xl text-on-surface-variant max-w-2xl mx-auto leading-relaxed italic" data-delay="0.2">
                " Sejarah yang jujur tidak hanya merayakan kemenangan. Ia juga berani menatap luka — agar luka yang sama tidak terulang kembali. "
            </p>
        </div>
    </section>

    <!-- Manifesto Section -->
    <section class="px-8 py-32">
        <div class="reveal max-w-4xl mx-auto bg-[#0A0A10] border-l-8 border-error p-12 md:p-20 shadow-2xl relative overflow-hidden group" data-delay="0.4">
            <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                <span class="material-symbols-outlined text-[10rem]">policy</span>
            </div>
            <p class="font-display text-2xl md:text-4xl text-on-surface italic leading-relaxed relative z-10">
                " Kita tidak bisa membangun warisan yang kuat di atas pondasi yang retak dan disembunyikan. Inilah bagian sejarah yang sering kita abaikan — tapi tidak seharusnya kita lupakan. "
            </p>
        </div>
    </section>

    <!-- Dark Chapters -->
    <section class="px-8 py-32 max-w-7xl mx-auto">
        <div class="flex items-center gap-6 mb-24 reveal">
            <div class="h-px w-16 bg-error/30"></div>
            <h2 class="font-mono text-xs uppercase tracking-[0.5em] text-error">Lembaran Kelam</h2>
            <div class="h-px flex-grow bg-error/30"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            <?php
            $chapters = array(
                array(
                    'title' => 'Tragedi PDNS 2024',
                    'status' => 'KRITIS',
                    'color' => 'error',
                    'desc' => 'Serangan ransomware yang melumpuhkan Pusat Data Nasional Sementara. Tidak ada backup. Hilangnya kedaulatan data nasional di era digital.',
                    'stat' => '282',
                    'stat_label' => 'Instansi Terdampak'
                ),
                array(
                    'title' => 'Brain Drain',
                    'status' => 'SERIUS',
                    'color' => 'tertiary',
                    'desc' => 'Eksodus talenta terbaik Indonesia ke luar negeri. Paradoks menyakitkan: kita mencetak developer hebat, tapi negara lain yang memetik hasilnya.',
                    'stat' => '3-10x',
                    'stat_label' => 'Perbedaan Kompensasi'
                ),
                array(
                    'title' => 'E-KTP Gate',
                    'status' => 'KRITIS',
                    'color' => 'error',
                    'desc' => 'Megakorupsi proyek identitas digital yang merugikan triliunan rupiah. Fondasi digitalisasi dihancurkan oleh ketamakan.',
                    'stat' => '2.3T',
                    'stat_label' => 'Dana Korupsi (IDR)'
                ),
                array(
                    'title' => 'Sirekap 2024',
                    'status' => 'PERHATIAN',
                    'color' => 'zinc-500',
                    'desc' => 'Kegagalan sistem rekapitulasi pemilu di momen krusial. Membuktikan bahwa teknologi tanpa audit publik adalah bahaya bagi demokrasi.',
                    'stat' => '204JT',
                    'stat_label' => 'Data Pemilih Terancam'
                ),
                array(
                    'title' => 'Pinjol Ilegal',
                    'status' => 'SERIUS',
                    'color' => 'error',
                    'desc' => 'Penyalahgunaan teknologi untuk menjerat masyarakat rentan. Ketika kode digunakan sebagai senjata pemerasan.',
                    'stat' => '3000+',
                    'stat_label' => 'Aplikasi Diblokir'
                ),
                array(
                    'title' => 'Digital Divide',
                    'status' => 'PERHATIAN',
                    'color' => 'zinc-500',
                    'desc' => 'Jurang antara kota besar dan pelosok. Warisan digital belum benar-benar dirasakan oleh seluruh rakyat Indonesia.',
                    'stat' => '30%',
                    'stat_label' => 'Wilayah Belum Terkoneksi'
                ),
            );

            foreach ( $chapters as $index => $chapter ) :
                $delay = ( $index % 3 ) * 0.1;
                ?>
                <article class="reveal bg-[#0A0A10] border border-white/5 rounded-2xl p-8 hover:border-error/50 transition-all duration-500 group relative overflow-hidden flex flex-col h-full" data-delay="<?php echo $delay; ?>">
                    <div class="absolute top-0 left-0 w-full h-1 bg-<?php echo $chapter['color']; ?>"></div>
                    
                    <div class="flex justify-between items-start mb-8">
                        <span class="px-3 py-1 bg-<?php echo $chapter['color']; ?>/10 text-<?php echo $chapter['color']; ?> text-[10px] font-mono border border-<?php echo $chapter['color']; ?>/30 rounded uppercase tracking-widest"><?php echo $chapter['status']; ?></span>
                        <span class="material-symbols-outlined text-<?php echo $chapter['color']; ?> opacity-30 group-hover:opacity-100 transition-opacity">warning</span>
                    </div>

                    <h3 class="font-display text-2xl font-bold text-white mb-4 group-hover:text-error transition-colors"><?php echo $chapter['title']; ?></h3>
                    <p class="font-body text-on-surface-variant text-sm mb-12 flex-grow leading-relaxed"><?php echo $chapter['desc']; ?></p>
                    
                    <div class="mt-auto border border-white/5 bg-white/[0.02] p-6 rounded-xl">
                        <div class="font-display text-4xl text-error font-bold shadow-glow mb-1"><?php echo $chapter['stat']; ?></div>
                        <div class="font-mono text-[10px] text-on-surface-variant uppercase tracking-widest"><?php echo $chapter['stat_label']; ?></div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Reflection Section -->
    <section class="py-40 bg-[#030305] border-y border-white/5 relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-8 text-center relative z-10">
            <p class="reveal font-display text-3xl md:text-5xl text-white font-medium leading-tight mb-20 italic">
                " Kita menceritakan kegelapan ini bukan untuk menyalahkan, bukan untuk menyerah, dan bukan untuk malu. Kita menceritakannya agar generasi berikutnya bisa membangun lebih bijak, lebih kuat, lebih jujur. "
            </p>
            
            <div class="reveal w-full max-w-2xl mx-auto space-y-4" data-delay="0.3">
                <div class="flex justify-between font-mono text-[10px] text-zinc-500 uppercase tracking-widest">
                    <span>Luka Masa Lalu</span>
                    <span>Harapan Masa Depan</span>
                </div>
                <div class="h-1 w-full bg-white/5 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-error via-tertiary to-white w-[60%]"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-32 px-8 flex justify-center reveal">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'galeri' ) ) ); ?>" class="btn-gold group">
            ABADIKAN SEJARAH DI GALERI →
        </a>
    </section>
</main>

<?php get_footer(); ?>
