<?php
  include('data/nav.php');
?>
    <footer class="l-footer py-10 bg-gray-100">
      <nav class="px-5 md:px-10 pb-10 border-b border-solid border-gray-300">
        <ul class="flex flex-col md:flex-row md:flex-wrap md:justify-center gap-5">
          <?php foreach ( $nav as $index => $item ) : ?>
            <li>
              <a href="<?php echo esc_url(home_url($item['slug'])); ?>" class="inline-block font-noto-sans text-[14px] md:text-[15px] transition-opacity duration-300 hover:opacity-50"><?php echo $item['title'] ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <div class="px-5 md:px-10 mt-10 md:flex md:items-center md:justify-between">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-logo.png" alt="有限会社 富士川産業" width="258" height="20" class="w-52 md:w-64 mx-auto md:m-0">
        <div class="mt-12 md:mt-0 font-noto-sans text-center"><small>© 富士川産業 All Rights Reserved. </small></div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>