<?php
/* BLoque de configuración Services */
$background_image = get_field('background_image');
$title_services = get_field('title_services');
$description_services = get_field('description_services');
$items_services     = get_field('items_services');
?>
<section>
    <div class="services-section" style="background-image: url(<?php echo esc_url($background_image['url']); ?>);">
        <div class=" services-container">
            <div class="row">
                <div class="services-container-header col-12">
                    <div style =" width: fit-content;">
                        <h1 class="services-container-header-title">
                        <?php echo $title_services; ?>
                        </h1>
                    <hr>
                    </div>
                    
                    <p class="services-container-header-description">
                        <?php echo $description_services; ?>
                    </p>
                </div>
                <div class="services-container-body col-12">
                    <div class="row">
                        <?php if ($items_services): ?>
                            <?php foreach ($items_services as $item): ?>
                                <div class="services-container-body-item col-12 col-md-1 col-lg-3">
                                    <div class="services-container-body-item-icon">
                                        <?php  if(!empty($item['icon']['url'])): ?>
                                        <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="icono servicio" width="100" height="100">
                                        <?php endif; ?>    
                                    </div>
                                    <h2 class="services-container-body-item-title">
                                        <?php echo $item['name']; ?>
                                    </h2>
                                    
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>