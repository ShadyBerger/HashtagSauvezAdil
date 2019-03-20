<?php
$bannerColor = get_theme_mod('bannerColor', __('Banner Color'));
$text_column_left = get_theme_mod('coding-about-text-left', __('Texte about gauche'));
$text_column_right = get_theme_mod('coding-about-text-right', __('Texte about Droit'));
?>
  <!-- About Section -->
  <section class="page-section bg-primary" id="about" style="background-color:<?= $bannerColor; ?> !important">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0"><?= $text_column_left ?></h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4"><?= $text_column_right ?></p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>