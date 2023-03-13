<a href="<?php echo esc_url(home_url($args['slug'])) ?>" class="flex items-center gap-3 transition-opacity duration-300 hover:opacity-50">
  <div class="arrow"><?php get_template_part( 'snippets/icon', null, [ 'icon' => 'button-arrow-circle' ] ); ?></div>
  <div class="text-[15px] text-white border-b border-solid border-white"><?php echo $args['text']; ?></div>
</a>
