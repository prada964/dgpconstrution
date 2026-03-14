<?php
/**
 * Block: Hybrid Transformation (Slider + Video)
 * Branding: DGP CONSTRUCTION LLC
 */
$title = get_field('section_title') ?: 'The Transformation Process';
$description = get_field('section_description') ?: 'Witness our structural excellence from framing to final build.';
?>

<section class="before-after-section seccion-trama">
    <div class="container">
        <div class="section-header">
            <h2><?php the_field('section_title'); ?></h2>
            <p><?php the_field('section_description'); ?></p>
        </div>

        <div class="projects-grid">
            <?php if( have_rows('transformation_projects') ): ?>
                <?php while( have_rows('transformation_projects') ): the_row(); 
                    $before = get_sub_field('before_image');
                    $after = get_sub_field('after_image');
                    $video = get_sub_field('project_video');
                    $p_title = get_sub_field('project_title');
                ?>
                    <div class="project-card">
                        <div class="project-info">
                            <h3><?php echo esc_html($p_title); ?></h3>
                            <div class="blueprint-line"></div>
                        </div>

                        <div class="slider-wrapper">
                            <div class="juxtapose" data-startingposition="50%" data-showlabels="true" data-showcredits="false">
                                <img src="<?php echo esc_url($before['url']); ?>" data-label="BEFORE" />
                                <img src="<?php echo esc_url($after['url']); ?>" data-label="AFTER" />
                            </div>
                        </div>

                        <?php if( $video ): ?>
                            <div class="video-wrapper">
                                <div class="video-overlay-tags">
                                    <span class="dot"></span> LIVE ACTION: PROJECT RECAP
                                </div>
                                <video autoplay muted loop playsinline src="<?php echo esc_url($video['url']); ?>"></video>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>