<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php wp_title(); ?></title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">

        <a href="<?php echo esc_url(site_url('/')) ?>" class="header__logo-link" aria-label="Logo">
            <?php
            
            if (is_single()) {
                $logo = get_field('logo_secundadrio', 'options');
            } else {
                $logo = get_field('logo_principal', 'options');
            }
            
            if (!empty($logo)): ?>
                <img class="header__logo" src="<?php echo esc_url($logo['url']) ?>"
                    alt="<?php echo esc_attr($logo['alt']); ?>" widht="100" height="100" >
            <?php endif; ?>
        </a>
        <div class="header__content-menu">
            <div class="header__container-menu">
                <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'header__nav',
                        'menu_class' => 'header__nav-li'
                    );
                    $menu = wp_nav_menu($args);
                    _e($menu,'CES talentum'); ?>
                <?php $url_boton_contacto = get_field('url_boton_contacto','options'); ?>
                <a style="font-family: Onest-Bold;" href="<?php echo $url_boton_contacto; ?>" target="_Blank" class="mec-button register-button menu-button"><?php _e('Contact Us', 'Optimun Home'); ?></a>
                <div class="header__close-responsive" id="header__close-btn">
                     <img src="<?php echo get_template_directory_uri() . '/assets/images/xmark-solid.svg'; ?>" alt="" class="w-100">
                </div>
            </div>
        </div>
        <div class="header__responsive">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 header__menu-icon" width="64" height="64"
                viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </div>
    </header>

