<?php
/*
Bloque: Social media
*/
$title = get_field('titulo_social');
$socials = get_field('social_media_slider');
?>

<section class="block-c__social-media">
    <div class="social-container">
        <h2><?php echo esc_html($title); ?></h2>
        <hr>
        <div class="social-icons">
            <?php if ($socials && is_array($socials)): ?>
                <?php foreach ($socials as $social): ?>
                    <a href="<?php echo esc_url($social['url']); ?>" target="_blank">
                        <?php echo $social['icono']; ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
