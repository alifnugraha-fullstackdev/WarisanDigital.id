<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php 
    global $post;
    $is_terang = (is_page('sisi-terang') || (isset($post->post_name) && $post->post_name === 'sisi-terang') || is_page_template('page-sisi-terang.php'));
    echo $is_terang ? 'light-mode' : 'dark'; 
?> scroll-smooth transition-colors duration-700">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white dark:bg-background text-zinc-900 dark:text-on-surface font-body relative min-h-screen selection:bg-tertiary selection:text-on-tertiary antialiased transition-colors duration-700' ); ?>>
    <div class="noise-overlay"></div>

    <!-- Navigation -->
    <nav id="main-nav" class="fixed top-0 w-full z-50 transition-all duration-500 py-6 px-4 md:px-12">
        <div class="max-w-[1400px] mx-auto bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl px-8 py-4 flex justify-between items-center shadow-2xl shadow-black/50">
            <div class="flex items-center gap-16">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-display text-xl tracking-[0.2em] text-white font-black group uppercase">
                    WARISAN<span class="text-tertiary group-hover:text-gold-glow transition-colors ml-2">DIGITAL</span>
                </a>
                
                <div class="hidden lg:flex gap-10 font-label uppercase tracking-[0.3em] text-[9px]">
                    <?php
                    $menu_items = array(
                        'Beranda' => home_url( '/' ),
                        'Sisi Terang' => get_permalink( get_page_by_path( 'sisi-terang' ) ),
                        'Sisi Gelap' => get_permalink( get_page_by_path( 'sisi-gelap' ) ),
                        'Galeri' => get_permalink( get_page_by_path( 'galeri' ) ),
                        'About' => get_permalink( get_page_by_path( 'about' ) ),
                    );

                    $i = 1;
                    foreach ( $menu_items as $name => $url ) :
                        $is_active = ( trailingslashit( $url ) == trailingslashit( get_permalink() ) ) || ( is_front_page() && $name == 'Beranda' );
                        ?>
                        <a href="<?php echo esc_url( $url ); ?>" class="group relative py-2 <?php echo $is_active ? 'text-tertiary' : 'text-zinc-400 hover:text-white'; ?> transition-colors">
                            <span class="block font-mono text-[7px] text-tertiary/50 mb-1"><?php echo str_pad($i++, 2, '0', STR_PAD_LEFT); ?></span>
                            <?php echo esc_html( $name ); ?>
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-px bg-tertiary transition-all duration-300 group-hover:w-full <?php echo $is_active ? 'w-full' : ''; ?>"></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="flex items-center gap-8">
                <div class="hidden md:flex items-center gap-4 border-r border-white/10 pr-8 mr-2">
                    <button id="search-open" class="text-zinc-400 hover:text-white transition-colors group">
                        <span class="material-symbols-outlined text-lg group-hover:scale-110 transition-transform">search</span>
                    </button>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'galeri' ) ) ); ?>" class="text-zinc-400 hover:text-white transition-colors group">
                        <span class="material-symbols-outlined text-lg group-hover:scale-110 transition-transform">history_edu</span>
                    </a>
                </div>

                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>" class="btn-gold-sm hidden sm:flex items-center gap-2">
                    <span class="text-[9px] uppercase tracking-[0.2em] font-black">✦ DEDIKASI</span>
                </a>
                
                <!-- Mobile Toggle -->
                <button id="nav-toggle" class="lg:hidden text-white hover:text-tertiary transition-colors">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Search Overlay -->
    <div id="search-overlay" class="fixed inset-0 z-[70] bg-background/95 backdrop-blur-3xl flex items-center justify-center opacity-0 pointer-events-none transition-all duration-500">
        <button id="search-close" class="absolute top-10 right-10 text-white/50 hover:text-white hover:rotate-90 transition-all duration-300">
            <span class="material-symbols-outlined text-4xl">close</span>
        </button>
        
        <div class="w-full max-w-4xl px-8">
            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="relative group">
                <span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-4xl text-tertiary group-focus-within:scale-110 transition-transform">search</span>
                <input type="search" name="s" id="search-input" placeholder="Cari sejarah digital..." class="w-full bg-transparent border-b-2 border-white/10 py-6 pl-16 text-4xl md:text-6xl text-white font-display placeholder:text-white/10 focus:outline-none focus:border-tertiary transition-all">
                <p class="mt-8 font-mono text-[10px] text-zinc-500 uppercase tracking-[0.3em]">Tekan ENTER untuk mencari atau ESC untuk keluar</p>
            </form>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-background/98 backdrop-blur-2xl flex flex-col items-center justify-center space-y-10 opacity-0 pointer-events-none transition-all duration-500">
        <button id="nav-close" class="absolute top-10 right-10 text-white hover:rotate-90 transition-transform duration-300">
            <span class="material-symbols-outlined text-4xl">close</span>
        </button>
        <?php 
        $i = 1;
        foreach ( $menu_items as $name => $url ) : ?>
            <a href="<?php echo esc_url( $url ); ?>" class="group flex flex-col items-center">
                <span class="font-mono text-xs text-tertiary mb-2"><?php echo str_pad($i++, 2, '0', STR_PAD_LEFT); ?></span>
                <span class="font-display text-5xl text-white group-hover:text-tertiary transition-colors"><?php echo esc_html( $name ); ?></span>
            </a>
        <?php endforeach; ?>
    </div>

    <main id="content" class="site-content">
