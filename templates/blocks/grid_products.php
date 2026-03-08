<?php
/* BLoque de configuración Grid Products */
$background_img_value = get_field('background_img_value');
$titulo_principal_products = get_field('titulo_principal_products');
$grids_products = get_field('grids_products');
$id_section_products = get_field('id_grid');
?>

<section class="grid-products" style ="" id = "<?php echo ($id_section_products); ?>">
    <div class="container">
        <h1 class="grid-products__title">
            <?php echo $titulo_principal_products; ?>
        </h1>
        <hr>
        <div class="grid-products__content">
            <?php foreach ($grids_products as $item): ?>
                <div class="grid-products__content--card">
                    <img src="<?php echo esc_url($item['imagen_de_fondo']['url']); ?>" alt="" class="">
                    <div class="grid-products__content--card--text">
                        <h2 class="mb-3"><?php echo $item['titulo']; ?></h2>
                        <p class="mb-4"><?php echo $item['description']; ?></p>
                        <!-- <a href="<?php echo esc_url($item['link_boton']); ?>" class="mec-button register-button menu-button">
                            <?php _e('Ver más', 'Optimun Home'); ?>
                        </a> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</section>