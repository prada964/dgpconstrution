<?php
/*
Bloque: Testimonials
*/
$title_testimonials = get_field('tittle_testimonial');
$testimonials = get_field('testimonial');
$id_section_testimonials = get_field('id_testimonials');


?>
<section class="block-c__testimonials" id="<?php echo ($id_section_testimonials); ?>">
    <div class="testimonials-container">
   
        <h1><?php echo esc_html($title_testimonials); ?></h1>
        <hr>
        <div class="testimonials-slider">
            <?php if ($testimonials && is_array($testimonials)): ?>
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="testimonial-item">
                        <h2><?php echo $testimonial['phrase']; ?></h2>
                        <div>
                            <img src="<?php echo esc_url($testimonial['img_perfil']['url']); ?>" alt="">
                            <div>
                                <strong><?php echo $testimonial['name']; ?></strong>
                                <p><?php echo $testimonial['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
 
    <div class="counters" id="counters">
    <div>
        <div class="counter" data-target="200">+0</div>
        <div class="label">Satisfied Clients</div>
    </div>
    <div>
        <div class="counter" data-target="300">+0</div>
        <div class="label">Successful Projects</div>
    </div>
    <div>
        <div class="counter" data-target="100">+0</div>
        <div class="label">Positive Reviews</div>
    </div>
    </div>

 </section>   