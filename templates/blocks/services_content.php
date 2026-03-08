<?php
/*
Block: Service Overview
*/

$content_positioning = get_field('content_positioning'); // left | right
$service_image = get_field('service_image');
$number_plus = get_field('number_plus');
$name_number_plus = get_field('name_number_plus');
$number_percentage = get_field('number_percentege');
$name_number_percentege = get_field('name_number_percentege');
$label_service = get_field('label_service');
$title_service = get_field('title_service');
$description = get_field('description');
$url_button_service = get_field('url_button_service');
$name_button = get_field('name_button');
$id_services  = get_field('id_services');



// clase dinámica para invertir orden
$position_class = ($content_positioning === 'right') ? 'service-section--reverse' : '';
?>

<section  id="<?php echo $id_services; ?>" class="container service-section <?php echo $position_class; ?>">
    <div class="service-section__container">

        <!-- Imagen + Números -->
        <div class="service-section__media fade-up">
            <?php if ($service_image): ?>
                <div class="service-section__image">
                    <img src="<?php echo esc_url($service_image['url']); ?>"
                        alt="<?php echo esc_attr($service_image['alt']); ?>">
                </div>
            <?php endif; ?>

           <div class="service-section__numbers servicesblock__numbers ">
                <?php if ($number_plus): ?>
                    <div class="service-section__number mec-button register-button menu-button">
                        <span class="servicesblock__counter number" data-target="<?php echo esc_attr($number_plus); ?>">0+</span>
                        <p><?php echo $name_number_plus; ?></p>
                    </div>
                <?php endif; ?>

                <?php if ($number_percentage): ?>
                    <div class="service-section__number mec-button register-button menu-button">
                        <span class="servicesblock__counter number" data-target="<?php echo esc_attr($number_percentage); ?>">0%</span>
                        <p><?php echo $name_number_percentege; ?></p>
                    </div>
                <?php endif; ?>
            </div>


        </div>

        <!-- Contenido -->
        <div class="service-section__content fade-up">
            <?php if ($label_service): ?>
                <span class="service-section__label"><?php echo esc_html($label_service); ?></span>
            <?php endif; ?>

            <?php if ($title_service): ?>
                <h2 class="service-section__title"><?php echo esc_html($title_service); ?></h2>
            <?php endif; ?>

            <?php if ($description): ?>
                <p class="service-section__description"><?php echo esc_html($description); ?></p>
            <?php endif; ?>

            <?php if ($url_button_service && $name_button): ?>
                <a href="<?php echo esc_url($url_button_service); ?>"
                    class="service-section__button mec-button register-button menu-button">
                    <?php echo esc_html($name_button); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>