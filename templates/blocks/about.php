<?php
/* BLoque de configuración About Us */

$title_about = get_field('titulo');
$description_about = get_field('descripcion');
$image_about = get_field('imagen');
$position = get_field('posicion');
$text_button = get_field('button_about');
$link_button = get_field('url_button_about');
?>
<section class="about-section">
    <div class="container about-container">
          <div class="row" style="position:relative">
        <?php if ($position == 'left'): ?>
            <div class="about-container-image col-12 col-xl-4">
              <figure class="about-container-image-img">
                    <div class="about-container-image-img-container">
                        <img src="<?php echo esc_url($image_about['url']); ?>" alt="sobre nosotros" class="img-left" width="100" height="100">
                    </div>
                </figure>
            </div>
            <div class="about-container-body col-12 col-xl-8">
                <div class="about-us-text">
                    <p>ABOUT US</p>
                </div>
                <div style="z-index: 99; position: relative;">
                    <h1 class="about-container-body-title">
                        <?php echo $title_about; ?>
                    </h1>
                    <hr>
                    <p class="about-container-body-description">
                        <?php echo $description_about; ?>
                    </p>
                        <a href="<?php echo $link_button; ?>" target="_Blank" class="mt-5 mec-button register-button menu-button"><?php echo $text_button; ?>
                    </a>

                </div>
              
            </div>
        <?php else: ?>
            <div class="about-container-body col-12 col-xl-6">
                 <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Logo-all-white.png'); ?>"
                    alt="" width="340px" height="340px"
                    class="about-container-image-watermark about-container-image-watermark-right">
                <h1 class="about-container-body-title">
                    <?php echo $title_about; ?>
                </h1>
                <hr>
                <p class="about-container-body-description">
                    <?php echo $description_about; ?>
                </p>
            </div>
            <div class="about-container-image col-12 col-xl-6">
            

                <figure class="about-container-image-img">
                    <div class="about-container-image-img-container">
                        <img src="<?php echo esc_url($image_about['url']); ?>" alt="sobre nosotros" class="img-right" width="100" height="100">
                    </div>
                </figure>
            </div>
        <?php endif; ?>
    </div>
    </div>
  
</section>
