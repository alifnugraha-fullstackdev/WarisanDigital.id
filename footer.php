    </main><!-- #content -->

    <footer class="bg-surface-container-lowest border-t border-white/5 py-24 px-8 mt-auto">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="space-y-6">
                <div class="font-display text-2xl text-white font-bold">
                    WARISAN <span class="text-tertiary">DIGITAL</span>.ID
                </div>
                <p class="font-display italic text-on-surface-variant leading-relaxed">
                    Monumen digital yang didedikasikan untuk mendokumentasikan perjalanan panjang pemrograman di Indonesia — dari kartu plong hingga decacorn.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h4 class="font-mono text-[10px] uppercase tracking-[0.3em] text-tertiary mb-6">Navigasi</h4>
                    <ul class="space-y-3 font-label text-sm text-on-surface-variant">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'sisi-terang' ) ) ); ?>" class="hover:text-white transition-colors">Sisi Terang</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'sisi-gelap' ) ) ); ?>" class="hover:text-white transition-colors">Sisi Gelap</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'galeri' ) ) ); ?>" class="hover:text-white transition-colors">Galeri</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-mono text-[10px] uppercase tracking-[0.3em] text-tertiary mb-6">Sosial</h4>
                    <ul class="space-y-3 font-label text-sm text-on-surface-variant">
                        <li><a href="https://github.com/alifnugraha-fullstackdev" target="_blank" class="hover:text-white transition-colors">GitHub</a></li>
                        <li><a href="https://www.linkedin.com/in/alif-nugraha-full-stack-developer-vibe-coder-437a3a407/" target="_blank" class="hover:text-white transition-colors">LinkedIn</a></li>
                        <li><a href="https://www.instagram.com/alifnugraha.studio/" target="_blank" class="hover:text-white transition-colors">Instagram</a></li>
                        <li><a href="https://wa.me/62895402254310" target="_blank" class="hover:text-white transition-colors">WhatsApp</a></li>
                    </ul>
                </div>
            </div>

            <div class="space-y-6">
                <h4 class="font-mono text-[10px] uppercase tracking-[0.3em] text-tertiary mb-6">Arsip</h4>
                <p class="font-body text-xs text-on-surface-variant leading-relaxed">
                    Proyek ini merupakan bagian dari Web Design Competition 2026 - IDwebhost. Seluruh konten didasarkan pada data publik dan arsip sejarah teknologi Indonesia.
                </p>
                <div class="flex items-center gap-4 pt-4">
                    <span class="material-symbols-outlined text-tertiary">history_edu</span>
                    <span class="font-mono text-[10px] text-on-surface-variant tracking-widest uppercase">Legacy Since 2026</span>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto mt-24 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-center">
            <p class="font-mono text-[10px] text-on-surface-variant uppercase tracking-widest">
                © <?php echo date('Y'); ?> WARISANDIGITAL.ID — Dibuat dengan ❤️ untuk Programmer Indonesia
            </p>
            <button id="scroll-top" class="group flex items-center gap-2 font-mono text-[10px] text-tertiary uppercase tracking-widest hover:text-white transition-colors">
                Kembali ke Atas
                <span class="material-symbols-outlined text-sm group-hover:-translate-y-1 transition-transform">arrow_upward</span>
            </button>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
