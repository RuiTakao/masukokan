<?php if ($args['bg'] == 'black') : ?>
  <a href="<?php echo esc_url(home_url($args['slug'])) ?>" class="c-button relative block w-full max-w-sm px-8 py-4 text-[14px] md:text-[15px] text-white text-center bg-black transition-opacity duration-300 hover:opacity-50">
    <span><?php echo $args['text']; ?></span>
    <span class="absolute top-1/2 right-3 -translate-y-1/2"><?php get_template_part( 'snippets/icon', null, [ 'icon' => 'button-arrow' ] ); ?></span>
  </a>
<?php else : ?>
  <a href="<?php echo esc_url(home_url($args['slug'])) ?>" class="c-button relative block w-full max-w-sm px-8 py-4 text-[14px] md:text-[15px] text-black text-center bg-white transition-opacity duration-300 hover:opacity-50">
    <span><?php echo $args['text']; ?></span>
    <span class="absolute top-1/2 right-3 -translate-y-1/2"><?php get_template_part( 'snippets/icon', null, [ 'icon' => 'button-arrow-black' ] ); ?></span>
  </a>
<?php endif; ?>