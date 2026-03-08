<?php
/* Block: Highlight Section */

$label = get_field('top_label');
$title = get_field('main_title');
$description = get_field('description');
$items = get_field('items_about'); // repeater con icono, título, descripción
$main_image = get_field('main_image');
?>

<section class="highlight-section">
  <div class="container">
    <div class="highlight-section__content">

      <!-- Columna izquierda -->
      <div class="highlight-section__text">
        <?php if ($label): ?>
          <span class="highlight-section__label">
            <?php echo esc_html($label); ?>
          </span>
        <?php endif; ?>

        <?php if ($title): ?>
          <h2 class="highlight-section__title">
            <?php echo wp_kses_post($title); ?>
          </h2>
        <?php endif; ?>

        <?php if ($description): ?>
          <div class="highlight-section__description">
            <?php echo wp_kses_post($description); ?>
          </div>
        <?php endif; ?>

        <?php if ($items): ?>
          <div class="highlight-section__items">
            <?php foreach ($items as $item): ?>
              <div class="highlight-section__item">
                <?php if (!empty($item['icon'])): ?>
                  <img class="highlight-section__item-icon"
                       src="<?php echo esc_url($item['icon']['url']); ?>"
                       alt="<?php echo esc_attr($item['title']); ?>">
                <?php endif; ?>
                <div class="highlight-section__item-content">
                  <?php if (!empty($item['title'])): ?>
                    <h4><?php echo esc_html($item['title']); ?></h4>
                  <?php endif; ?>
                  <?php if (!empty($item['description'])): ?>
                    <p><?php echo esc_html($item['description']); ?></p>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Columna derecha -->
      <div class="highlight-section__image">
        <?php if ($main_image): ?>
          <img src="<?php echo esc_url($main_image['url']); ?>"
               alt="<?php echo esc_attr($main_image['alt']); ?>">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
