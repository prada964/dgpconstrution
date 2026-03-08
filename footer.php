<?php
$social_networks = get_field('social_networks', 'option');
$description = get_field('description', 'option');
$copyright = get_field('copyright', 'option');
$crete_by = get_field('create_by', 'option');
$servicios_footer = get_field('servicios_footer', 'option');
$contact_footer = get_field('contact_footer', 'option');
$products_footer = get_field('productos_footer', 'option');
$background_image = get_field('background_image', 'option');
?>

<footer class="footer" >
    <div
        style="background:url('<?php echo esc_url($background_image['url']) ?>');background-repeat: no-repeat;background-position: center center; background-size: cover;">
        <div class="container footer-content d-flex ">
            <div class="footer-content__main">
                <div>
                    <a href="<?php echo esc_url(site_url('/')) ?>">
                        <?php $logo = get_field('logo_principal', 'options'); ?>
                        <?php if (!empty($logo)): ?>
                            <img class="" src="<?php echo esc_url($logo['url']) ?>"
                                alt="<?php echo esc_attr($logo['alt']); ?>" widht="100%" height="auto">
                        <?php endif ?>
                    </a>
                </div>
               
                <div class="footer-content__social-media">
                    <?php if (is_array($social_networks)): ?>
                        <?php foreach ($social_networks as $icon): ?>
                            <a href="<?php echo $icon['url_icon'] ?>">
                                <?php echo $icon['icon'] ?>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No se encontraron iconos de redes sociales.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-content__contact servicios">
                <p>
                    <?php _e('Why Optimum Home ', 'Optimun Home') ?>
                </p>
                <ul>
                    <?php if (is_array($servicios_footer)): ?>
                        <?php foreach ($servicios_footer as $item_services): ?>
                            <li>
                                <a href="<?php echo  $item_services['enlace_servicio'] ?>">
                                    <?php echo $item_services['item_servicios'] ?>
                                 </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="footer-content__contact products">
                <p>
                    <?php _e('Services', 'Optimun Home') ?>
                </p>
                <ul>
                    <?php if (is_array($products_footer)): ?>
                        <?php foreach ($products_footer as $item_products): ?>
                            <li>
                                <a href="<?php echo $item_products['enlace_producto'] ?>">
                                    <?php echo $item_products['item_productos'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
           
            <div class="footer-content__contact contact">
                <p>
                    <?php _e('Contact us', 'Optimun Home') ?>
                </p>
                <ul>
                    <?php if (is_array($contact_footer)): ?>
                        <?php foreach ($contact_footer as $item_contact): ?>
                            <li>
                                <?php echo $item_contact['item_contact'] ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>

