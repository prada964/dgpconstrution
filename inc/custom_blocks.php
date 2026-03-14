<?php
define('VS_BLOCK_CATEGORY', 'ln-blocks');

function optimun_home_category($categories)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => VS_BLOCK_CATEGORY,
                'title' => __('MEC Forklifts', VS_BLOCK_CATEGORY),
            )
        )
    );
}
add_filter('block_categories', 'optimun_home_category', 10, 2);

add_theme_support('align-wide');

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

    acf_register_block_type(
        array(
            'name' => 'Banner main',
            'title' => __('Banner with video'),
            'description' => __('Banner with video'),
            'render_template' => 'templates/blocks/banner_main.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'cover-image',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    //social media
    acf_register_block_type( 
        array(
            'name' => 'Social media',
            'title' => __('Social Media'),
            'description' => __('Block to configure social media links'),
            'render_template' => 'templates/blocks/social_media.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'share',
            'align' => 'full',
            'post_types' => array('post', 'page'),
           
        )
    );
    acf_register_block_type(
        array(
            'name' => 'About us',
            'title' => __('About Us'),
            'description' => __('Block to configure the about us section'),
            'render_template' => 'templates/blocks/about.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'businessperson',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    //services in english
    acf_register_block(
        array(
            'name' => 'Services',
            'title' => __('Services'),
            'description' => __('Block to configure the services section'),
            'render_template' => 'templates/blocks/services.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'businessperson',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    //testimonials
    acf_register_block(
        array(
            'name' => 'Testimonials',
            'title' => __('Testimonials'),
            'description' => __('Block to configure the testimonials section'),
            'render_template' => 'templates/blocks/testimonials.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'format-quote',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    //slider logos
    acf_register_block_type(
        array(
            'name' => 'Slider logos',
            'title' => __('Slider logos'),
            'description' => __('Block to configure a logos slider'),
            'render_template' => 'templates/blocks/slider_logos.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'images-alt2',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Emergency service',
            'title' => __('Emergency Service'),
            'description' => __('Block to configure the emergency service section'),
            'render_template' => 'templates/blocks/emergency.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'admin-tools',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Cards with main title',
            'title' => __('Cards with main title'),
            'description' => __('Block to configure cards with a main title'),
            'render_template' => 'templates/blocks/cards.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'index-card',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Contact form with contact information',
            'title' => __('Contact form with contact information'),
            'description' => __('Block to configure contact information'),
            'render_template' => 'templates/blocks/contact.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'forms',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Block with image, description, title and button',
            'title' => __('Block with image, description, title and button'),
            'description' => __('Block to configure an image, description, title and button'),
            'render_template' => 'templates/blocks/block_img_tit_desc_boton.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'welcome-widgets-menus',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Tabs block',
            'title' => __('Tabs block'),
            'description' => __('Block to configure tabs'),
            'render_template' =>'templates/blocks/tabs.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'table-row-after',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Products grid block',
            'title' => __('Products grid block'),
            'description' => __('Block to configure a products grid'),
            'render_template' =>'templates/blocks/grid_products.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'table-col-after',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Social media block',
            'title' => __('Social media block'),
            'description' => __('Block to configure social media links'),
            'render_template' =>'templates/blocks/redes_sociales.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'table-col-after',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Sliders block',
            'title' => __('Sliders block'),
            'description' => __('Block to configure a slider'),
            'render_template' =>'templates/blocks/slider.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'table-col-after',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    //content_highlight
    acf_register_block_type(
        array(
            'name' => 'Content Highlight',
            'title' => __('Content Highlight'),
            'description' => __('A customizable section for emphasizing key content, including title, subtitle, description, icons with text (via repeater), images, and an optional experience counter. Ideal for highlighting company story, mission, or vision.'),
            'render_template' => 'templates/blocks/content_highlight.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'star-filled',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    //experts team
    acf_register_block_type(
        array(
            'name' => 'Experts Team',
            'title' => __('Experts Team'),
            'description' => __('Block to showcase a team of experts with images, names, roles, and social media links. Perfect for introducing key team members and building trust with visitors.'),
            'render_template' => 'templates/blocks/experts_team.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'groups',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );

    // Services content
    acf_register_block_type(
        array(
            'name' => 'Services Content',
            'title' => __('Services Content'),
            'description' => __('A versatile block for detailing services offered, featuring titles, descriptions, images, and optional links for more information. Ideal for service-oriented businesses.'),
            'render_template' => 'templates/blocks/services_content.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'admin-tools',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );

    // Antes y después
    acf_register_block_type(
        array(
            'name' => 'Before and After',
            'title' => __('Before and After'),
            'description' => __('A dynamic block for showcasing transformations or comparisons with side-by-side images and descriptions. Perfect for demonstrating the impact of products or services.'),
            'render_template' => 'templates/blocks/before_after.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'format-image',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
   
}
