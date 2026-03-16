<?php
/* BLoque de configuración About Us */

$redes_sociales = get_field('redes');
?>
<div class="redes-sociales">
    <?php foreach($redes_sociales as $icon): ?>
        <div class="redes-sociales__content">
            <a href="<?php echo $icon['enlace'] ?>" target="_blank" aria-label="Contácto whatsapp">
                <?php echo $icon['icono'] ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>
