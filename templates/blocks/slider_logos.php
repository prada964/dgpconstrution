<?php
/* BLoque de configuración Slider logos */
$tile_section_logos = get_field('title_section_logos');
$partners = get_field('partners');

?>
<section class="slider-logos">
    <div class="container">
        <h1 class="slider-logos__title">
            <?php echo $tile_section_logos; ?>
        </h1>
        <hr>
        <!-- Slider de logos con splide js -->
        <div class="slider-logos__content">
            <div class="splide logos-slider" aria-label="Logos Slider">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php if ($partners && is_array($partners)): ?>
                            <?php foreach ($partners as $partner): ?>
                                <div class="splide__slide">
                                    <div class="slider-logos__content--card">
                                        <img src="<?php echo esc_url($partner['url_logo']['url']); ?>" width="150" height="100">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
   <div class="splide__arrows splide__arrows--ltr">
  <button
    class="splide__arrow splide__arrow--prev"
    type="button"
    aria-label="Previous slide"
    aria-controls="splide01-track"
  >
    <svg>...</svg>
  </button>
  <button
    class="splide__arrow splide__arrow--next"
    type="button"
    aria-label="Next slide"
    aria-controls="splide01-track"
  >
    <svg>...</svg>
  </button>
</div>
</section>