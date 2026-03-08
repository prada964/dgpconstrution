<?php
/* BLoque de configuración de contacto */

$imagen_fondo_contacto = get_field('imagen_de_fondo_contacto');
$titulo_contacto = get_field('titulo_informacion_contacto');
$informacion_contacto = get_field('informacion_de_contacto');
$titulo_formulario = get_field('titulo_formulario');
$formulario_contacto = get_field('formulario_contacto');
$id_section_contact = get_field('id_contacto');

?>
<section id="<?php echo ($id_section_contact); ?>" class="container-contact-main"
    style="background-image:url('<?php echo esc_url($imagen_fondo_contacto['url']) ?>');background-repeat: no-repeat;background-position: center center; background-size:cover;">
    <div class="container container-contact-main__content">
        <div class="row  container-contact-main__content-row">
            <div class="col-12 col-md-6 container-contact-main__content-description">
                <h1>
                    <?php echo $titulo_contacto; ?>
                </h1>
                <hr>
                <?php if ($informacion_contacto && is_array($informacion_contacto)): ?>
                    <?php foreach ($informacion_contacto as $item): ?>
                        <div class="d-flex mt-5 align-items-start">
                            <img src="<?php echo esc_url($item['icono']['url']); ?>" alt="" widht="100%" height="auto">
                            <div class="" style="margin-left:1rem;">
                                <?php echo $item['descripcion_de_contacto']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay información de contacto disponible.</p>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 container-contact-main__content-form">
                <h3>
                    <?php echo $titulo_formulario; ?>
                </h3>
                <?php echo $formulario_contacto; ?>
            </div>
        </div>
    </div>
</section>