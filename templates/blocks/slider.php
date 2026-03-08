<?php
/*
Bloque: Slider
*/
$sliders = get_field('slider');

?>

<section class="splide splide-cards-a slider_principal">
 
    <div class="splide__track">
        <div class="splide__list block-c__logos">
            <?php if ($sliders && is_array($sliders)): ?>
                <?php foreach ($sliders as $slider): ?>
                    <div class="splide__slide">
                        <div class="d-flex slider_principal"
                            style="background-image: url('<?php echo esc_url($slider['imagen_de_fondo']['url']); ?>');
                           justify-content: <?php echo ($slider['posicionamiento_contenido'] === 'izquierda') ? 'left' : (($slider['posicionamiento_contenido'] === 'derecha') ? 'right' : 'center'); ?>; ">
                            <div class="contenido-slider "
                                style=" align-items: <?php echo ($slider['posicionamiento_contenido'] === 'izquierda') ? 'flex-start' : (($slider['posicionamiento_contenido'] === 'derecha') ? 'flex-start' : 'center'); ?>; ">
                                <?php echo $slider['titulo']; ?>
                                <?php if (!empty($slider['botones']) && is_array($slider['botones'])): ?>
                                    <div class="d-flex gap-3 mt-5">
                                        <?php foreach ($slider['botones'] as $boton): ?>
                                            <a href="<?php echo esc_url($boton['url']); ?>" target="_blank" class="mec-button register-button menu-button <?php echo $boton['class']; ?>">
                                                <?php echo esc_html($boton['nombre_boton']); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
    </div>
     
</section>