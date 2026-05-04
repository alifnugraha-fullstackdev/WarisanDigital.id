<?php
/**
 * Template Name: Tentang Saya
 */
get_header(); ?>

<style>
    /* Tech Stack Marquee Animation */
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-200px * 18)); }
    }
    .marquee-container {
        overflow: hidden;
        position: relative;
        width: 100%;
        background: rgba(255, 255, 255, 0.02);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        padding: 40px 0;
    }
    .marquee-content {
        display: flex;
        width: calc(200px * 36);
        animation: scroll 60s linear infinite;
    }
    .marquee-item {
        width: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        filter: grayscale(1) opacity(0.5);
        transition: all 0.3s ease;
    }
    .marquee-item:hover {
        filter: grayscale(0) opacity(1);
        transform: scale(1.1);
    }
    .marquee-item img, .marquee-item .tech-icon {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }
    .marquee-item span {
        font-family: 'Inter', sans-serif;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.2em;
        color: #71717a;
        text-transform: uppercase;
    }
    .social-btn svg {
        transition: all 0.3s ease;
    }
    .social-btn:hover svg {
        transform: translateY(-3px);
        filter: drop-shadow(0 0 8px #C9A84C);
    }
</style>

<main class="pt-32 pb-48">
    <section class="px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 items-start">
            
            <!-- Left Column: Profile Card -->
            <div class="lg:col-span-4 space-y-12 reveal">
                <div class="relative group">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden bg-surface-container relative border border-white/5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alif.jpg" alt="Muhammad Alif Maulana Nugraha" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent opacity-60"></div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-tertiary/5 rounded-full blur-3xl -z-10"></div>
                </div>

                <div class="bg-surface-container border border-white/5 p-8 rounded-2xl space-y-6">
                    <div class="space-y-2">
                        <h2 class="font-display text-2xl text-white">Muhammad Alif Maulana Nugraha</h2>
                        <div class="flex items-center gap-2">
                            <span class="font-mono text-[10px] text-tertiary uppercase tracking-widest">Web Developer</span>
                            <span class="w-1 h-1 bg-zinc-700 rounded-full"></span>
                            <span class="font-mono text-[10px] text-emerald-500 uppercase tracking-widest">Vibe Coder</span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Github -->
                        <a href="https://github.com/alifnugraha-fullstackdev" target="_blank" class="social-btn flex items-center gap-3 bg-white/5 border border-white/10 p-3 rounded-xl hover:border-tertiary group transition-all">
                            <svg class="w-4 h-4 fill-[#C9A84C]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                            <span class="text-[9px] font-mono text-zinc-400 group-hover:text-tertiary">GITHUB</span>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/alif-nugraha-full-stack-developer-vibe-coder-437a3a407/" target="_blank" class="social-btn flex items-center gap-3 bg-white/5 border border-white/10 p-3 rounded-xl hover:border-tertiary group transition-all">
                            <svg class="w-4 h-4" viewBox="0 0 382 382" xmlns="http://www.w3.org/2000/svg">
                                <path style="fill:#C9A84C;" d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889 C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056 H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806 c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1 s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73 c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079 c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426 c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472 L341.91,330.654L341.91,330.654z"></path>
                            </svg>
                            <span class="text-[9px] font-mono text-zinc-400 group-hover:text-tertiary">LINKEDIN</span>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/alifnugraha.studio/" target="_blank" class="social-btn flex items-center gap-3 bg-white/5 border border-white/10 p-3 rounded-xl hover:border-tertiary group transition-all">
                            <svg class="w-4 h-4 fill-[#C9A84C]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c.796 0 1.441.645 1.441 1.44s-.645 1.44-1.441 1.44-1.44-.645-1.44-1.44.645-1.44 1.44-1.44z"/></svg>
                            <span class="text-[9px] font-mono text-zinc-400 group-hover:text-tertiary">INSTAGRAM</span>
                        </a>

                        <!-- WhatsApp -->
                        <a href="https://wa.me/62895402254310" target="_blank" class="social-btn flex items-center gap-3 bg-white/5 border border-white/10 p-3 rounded-xl hover:border-tertiary group transition-all">
                            <svg class="w-4 h-4 fill-[#C9A84C]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.894 4.44-9.899 9.891-.001 2.15.636 3.791 1.615 5.407l-1.188 4.335 4.072-1.067zm12.58-4.387c.359.18 2.112 1.042 2.442 1.162.33.12.551.181.791.541.24.36.24 2.041-.359 3.721-.599 1.681-3.059 1.561-4.139 1.561-1.08 0-3.239-1.321-5.758-3.541-2.52-2.221-4.2-4.801-4.2-4.801s-.12-.12-.12-.24.12-.36.36-.6.479-.6.719-.841c.24-.24.359-.36.479-.6.12-.24.12-.48 0-.72-.12-.24-1.079-2.521-1.439-3.481-.359-.96-.719-.841-1.079-.841s-.719 0-1.079.12c-.36.12-1.079.48-1.439 1.08-.36.6-1.559 1.561-1.559 3.841s1.679 4.561 1.919 4.921c.24.36 3.239 5.041 8.038 7.081 1.141.484 2.032.774 2.72.991.688.217 1.312.186 1.808.112.552-.083 2.112-.841 2.412-1.681.3-.841.3-1.561.21-1.711-.09-.15-.3-.24-.659-.421z"/></svg>
                            <span class="text-[9px] font-mono text-zinc-400 group-hover:text-tertiary">WHATSAPP</span>
                        </a>
                    </div>
                </div>

                <div class="bg-tertiary/5 border-l-4 border-tertiary p-6 space-y-2">
                    <div class="font-display italic text-white text-sm">"Teknologi bukan hanya soal kode, tapi soal cerita yang kita tinggalkan."</div>
                </div>
            </div>

            <!-- Right Column: Content -->
            <div class="lg:col-span-8 space-y-24">
                
                <!-- Bio -->
                <article class="space-y-8 reveal" data-delay="0.2">
                    <div class="space-y-4">
                        <span class="font-mono text-tertiary text-[10px] uppercase tracking-[0.5em]">PERSONAL ARCHIVE</span>
                        <h2 class="font-display text-4xl md:text-5xl font-black text-white leading-tight">Membangun Jembatan Antara <br>Kode, Sejarah, dan Vibe.</h2>
                    </div>

                    <div class="font-body text-on-surface-variant text-lg leading-relaxed space-y-6">
                        <p>Halo, saya adalah <strong>Muhammad Alif Maulana Nugraha</strong>, seorang pengembang web dan <strong>Vibe Coder</strong> yang memiliki ketertarikan mendalam pada sejarah teknologi Indonesia. Website ini lahir dari kegelisahan saya melihat betapa sedikitnya dokumentasi populer mengenai perjalanan panjang pemrograman di tanah air.</p>
                        <p>Dari era mainframe yang eksklusif hingga era startup yang inklusif, setiap dekade menyimpan cerita perjuangan para pionir yang jarang terdengar. Proyek ini adalah upaya kecil saya untuk memberikan penghormatan kepada mereka.</p>
                        <p>Saya percaya bahwa dengan memahami dari mana kita berasal, kita bisa menentukan arah yang lebih bijak untuk masa depan digital Indonesia.</p>
                    </div>
                </article>

                <!-- Technical Skills: Rolling Tech Stack -->
                <section class="space-y-12 reveal" data-delay="0.4">
                    <div class="space-y-4">
                        <span class="font-mono text-tertiary text-[10px] uppercase tracking-[0.5em]">KEAHLIAN TEKNIS</span>
                        <h2 class="font-display text-3xl font-bold text-white text-center md:text-left">Tech Stack & AI Tools</h2>
                    </div>

                    <div class="marquee-container rounded-2xl">
                        <div class="marquee-content">
                            <?php
                            $techs = array(
                                array('name' => 'React', 'slug' => 'react'),
                                array('name' => 'Angular', 'slug' => 'angular'),
                                array('name' => 'Vue.js', 'slug' => 'vuedotjs'),
                                array('name' => 'TypeScript', 'slug' => 'typescript'),
                                array('name' => 'Astro', 'slug' => 'astro'),
                                array('name' => 'Bootstrap', 'slug' => 'bootstrap'),
                                array('name' => 'Tailwind CSS', 'slug' => 'tailwindcss'),
                                array('name' => 'PHP', 'slug' => 'php'),
                                array('name' => 'WordPress', 'slug' => 'wordpress'),
                                array('name' => 'MySQL', 'slug' => 'mysql'),
                                array('name' => 'Node.js', 'slug' => 'nodedotjs'),
                                array('name' => 'Antigravity', 'slug' => 'antigravity', 'custom' => true),
                                array('name' => 'Openclaw', 'slug' => 'openclaw', 'custom' => true),
                                array('name' => 'Gemini', 'slug' => 'googlegemini'),
                                array('name' => 'Claude', 'slug' => 'claude', 'custom' => true),
                                array('name' => 'Vite', 'slug' => 'vite'),
                                array('name' => 'Git', 'slug' => 'git'),
                                array('name' => 'JavaScript', 'slug' => 'javascript'),
                            );
                            
                            $display_techs = array_merge($techs, $techs);
                            foreach ($display_techs as $tech) :
                                $icon_url = "https://cdn.simpleicons.org/" . $tech['slug'] . "/white";
                                
                                if ($tech['slug'] == 'antigravity') {
                                    $icon_url = get_template_directory_uri() . "/assets/img/antigravity.png";
                                } elseif ($tech['slug'] == 'claude') {
                                    $icon_url = "https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/claude-ai.svg";
                                } elseif ($tech['slug'] == 'openclaw') {
                                    $icon_url = "https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/openclaw-dark.svg";
                                }
                            ?>
                            <div class="marquee-item">
                                <img src="<?php echo $icon_url; ?>" alt="<?php echo $tech['name']; ?>" style="<?php echo ($tech['slug'] == 'openclaw') ? 'filter: invert(1);' : ''; ?>">
                                <span><?php echo $tech['name']; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

                <!-- Collaboration CTA -->
                <section class="bg-surface-container p-12 rounded-2xl text-center space-y-8 reveal" data-delay="0.6">
                    <h3 class="font-display text-3xl text-white">Tertarik berkolaborasi dengan saya?</h3>
                    <p class="font-body text-zinc-400 max-w-xl mx-auto">Saya selalu terbuka untuk diskusi mengenai pengembangan web, sejarah teknologi, atau ide-ide kreatif lainnya.</p>
                    <div class="flex justify-center pt-4">
                        <a href="https://wa.me/62895402254310" class="btn-gold px-12 py-5 flex items-center gap-4">
                            HUBUNGI SAYA VIA WHATSAPP <span class="material-symbols-outlined text-sm">chat</span>
                        </a>
                    </div>
                </section>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
