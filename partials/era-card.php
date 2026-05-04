<div class="reveal flex flex-col md:flex-row md:items-center gap-8 group" data-delay="<?php echo $args['delay'] ?? '0.1'; ?>">
    <div class="md:w-1/4 text-right">
        <span class="font-mono text-gold text-2xl">ERA <?php echo $args['number']; ?></span>
        <div class="text-text-muted text-4xl font-black opacity-10"><?php echo $args['years']; ?></div>
    </div>
    <div class="md:w-3/4 card-era <?php echo ($args['reverse'] ?? false) ? 'border-l-0 border-r-4 rounded-r-none rounded-l-xl text-right' : ''; ?>">
        <h3 class="font-playfair text-2xl font-bold mb-4"><?php echo $args['title']; ?></h3>
        <p class="text-text-muted font-inter leading-relaxed">
            <?php echo $args['content']; ?>
        </p>
    </div>
</div>
