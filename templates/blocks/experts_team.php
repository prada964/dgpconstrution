<?php
/*
Block: Experts Team
*/
$top_label_team = get_field('top_label_team');
$title_team = get_field('title_team');
$subtitle_team = get_field('subtitle_team');
$experts = get_field('experts');
?>

<section class="block-c__experts-team">
    <div class="experts-container">
        <?php if ($top_label_team): ?>
            <div class="top-label"><?php echo esc_html($top_label_team); ?></div>
        <?php endif; ?>

        <?php if ($title_team): ?>
            <h2 class="experts-title"><?php echo esc_html($title_team); ?></h2>
        <?php endif; ?>

        <?php if ($subtitle_team): ?>
            <p class="experts-subtitle"><?php echo esc_html($subtitle_team); ?></p>
        <?php endif; ?>

        <div class="experts-grid">
            <?php if ($experts && is_array($experts)): ?>
                <?php foreach ($experts as $expert): ?>
                    <div class="expert-card">
                        <?php if (!empty($expert['image'])): ?>
                            <div class="expert-image">
                                <img src="<?php echo esc_url($expert['image']['url']); ?>" alt="<?php echo esc_attr($expert['name']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="expert-info">
                            <?php if (!empty($expert['name'])): ?>
                                <h3 class="expert-name"><?php echo esc_html($expert['name']); ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($expert['description'])): ?>
                                <p class="expert-description"><?php echo esc_html($expert['description']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
