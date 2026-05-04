<section class="relative min-h-[50vh] flex items-center justify-center pt-24 <?php echo $args['bg'] ?? 'bg-bg-dark'; ?>">
    <div class="container mx-auto px-6 relative z-10 text-center">
        <?php if (isset($args['breadcrumb'])): ?>
        <nav class="reveal mb-8 font-mono text-xs uppercase tracking-widest text-text-muted" data-delay="0.1">
            <a href="<?php echo home_url(); ?>" class="hover:text-gold transition-colors">Home</a>
            <span class="mx-3 opacity-30">/</span>
            <span class="text-gold"><?php echo $args['breadcrumb']; ?></span>
        </nav>
        <?php endif; ?>

        <h1 class="reveal font-playfair text-6xl md:text-8xl font-black <?php echo $args['text_color'] ?? 'text-white'; ?> mb-8 leading-none" data-delay="0.3">
            <?php echo $args['title']; ?>
        </h1>

        <?php if (isset($args['subtitle'])): ?>
        <p class="reveal max-w-2xl mx-auto text-text-muted text-xl font-inter leading-relaxed mb-12" data-delay="0.5">
            <?php echo $args['subtitle']; ?>
        </p>
        <?php endif; ?>
    </div>
</section>
