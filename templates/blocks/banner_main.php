<?php
/* BLoque de configuración del banner principal*/
$tipo_contenido = get_field('tipo_de_contenido');
$imagen_banner = get_field('imagen_banner');
$video_banner = get_field('video_banner');
$call_to_action = get_field('call_to_action');
$boton_call_to_action = get_field('boton_call_to_action');
$url_boton = get_field('url_boton');
apply_filters(
    'wp_preload_resources',
    array(
        $video_banner,
        'video',
    )
);
?>
<div class="banner-video <?php echo $tipo_contenido == 'imagen' ? 'height-img' : ' ' ?>">
    <div class="container">
        <?php if ($tipo_contenido == 'video'): ?>
            <video autoplay muted loop class="banner-video__video">
                <source src="<?php echo $video_banner; ?>" type="video/mp4" >
            </video>
        <?php elseif ($tipo_contenido == 'imagen' && $imagen_banner): ?>
            <div class="banner-video__video"
                style="background-image: url('<?php echo esc_url($imagen_banner['url']); ?>');"></div>
        <?php endif; ?>

        <div class="banner-video__contenido <?php echo $tipo_contenido == 'imagen' ? 'title-banner-main' : ' ' ?>">
            <?php if ($tipo_contenido == 'imagen'): ?>
                <?php echo $call_to_action; ?>
                <?php if ($tipo_contenido == 'imagen'): ?>
                <div class="container d-flex justify-content-center">
                    <div class="breadcrumb mec-button register-button menu-button">
                        <?php echo crear_breadcrumbs(); ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php endif; ?>
            
            <?php if ($tipo_contenido == 'video'): ?>
                <a href="<?php echo esc_url($url_boton); ?>" target='_Blank' class="mec-button register-button menu-button">
                    <?php _e($boton_call_to_action, 'Optimun'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
