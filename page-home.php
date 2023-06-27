<?php /* Template Name: Home */ ?>
<?php get_header();
?>

<section class="banner-section" id="contact">
    <?php getImage(get_field('banner_background_image'), 'full-image bg'); ?>
    <div class="container" id="schedule">
        <div class="content-wrapper">
            <?php the_field('banner_content'); ?>
        </div>
        <?php get_template_part('templates/social', 'media'); ?>
    </div>
</section>

<?php if (get_field('welcome_content')) : ?>
    <section class="welcome-section" id="welcome">
        <div class="container">
            <div class="img-left">
                <?php getImage(get_field('image_left'), 'full-image bg'); ?>
                <div class="circle-white"></div>
            </div>

            <div class="content-wrapper">
                <?php the_field('welcome_content'); ?>

                <?php if ($link = get_field('welcome_button')) : ?>
                    <a href="<?php echo $link['url']; ?>" class="theme-btn call-link"><?php echo $link['title']; ?></a>
                <?php endif; ?>
            </div>

            <div class="img-right">
                <?php getImage(get_field('image_right'), 'full-image bg'); ?>
                <div class="circle-pink"></div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('services')) : ?>
    <section class="services-section" id="our-prices">
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('service_content'); ?>
            </div>

            <div class="row">
                <?php while (have_rows('services')) : the_row(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="item">
                            <div class="image">
                                <?php echo wp_get_attachment_image(get_sub_field('image'), 'full-image'); ?>
                            </div>
                            <div class="circle">
                                <h3><?php the_sub_field('title'); ?></h3>
                            </div>
                            <?php if (get_sub_field('link')) : ?>
                                <a href="<?php the_sub_field('link'); ?>" target="_blank" class="full-link"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>


            <div class="content-wrapper">
                <?php if ($link = get_field('service_btn')) : ?>
                    <a href="<?php echo $link['url']; ?>" class="theme-btn call-link"><?php echo $link['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('testimonials')) : ?>
    <section class="testimonials-section" id="what-they-say">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 position-relative">
                    <img src="<?php echo THEME_IMAGES; ?>quottation-1.png" alt="Maya.lk" class="quottation-left">
                    <?php if (get_field('testimonials_title')) : ?>
                        <div class="content-wrapper"><?php the_field('testimonials_title'); ?></div>
                    <?php endif; ?>
                    <div class="swiper testimonial" id="testimonialsSwiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('testimonials')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="content-wrapper">
                                            <h2><?php the_sub_field('title'); ?></h2>
                                            <p><?php the_sub_field('testimonial'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <img src="<?php echo THEME_IMAGES; ?>quottation-1.png" alt="Maya.lk" class="quottation-right">
                </div>

                <div class="testimonial-image col-sm-12 col-md-6 col-lg-6">
                    <div class="swiper name name-swiper" id="testimonialsSwiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('testimonials')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="circle">
                                        <p><?php the_sub_field('name'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="image">
                        <?php
                        $image = get_field('testimonials_image');
                        $attachment = wp_get_attachment_image_src($image, 'full-image');
                        if ($attachment) :
                            $image_url = $attachment[0];
                        ?>
                            <img src="<?php echo $image_url; ?>" alt="" class="full-image">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('options')) : ?>
    <section class="options-section" id="what-they-say">
        <?php
        $image = get_field('option_image');
        $attachment = wp_get_attachment_image_src($image, 'full-image');
        if ($attachment) :
            $image_url = $attachment[0];
        ?>
            <img src="<?php echo $image_url; ?>" alt="" class="full-image">
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 position-relative">
                    <?php if (get_field('options_title')) : ?>
                        <div class="content-wrapper">
                            <?php the_field('options_title'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('option_highlighter')) : ?>
                        <?php $name = nl2br(get_field('option_highlighter')); ?>
                        <p class="circle name"><?php echo $name; ?></p>
                    <?php endif; ?>

                    <div class="swiper" id="testimonialsSwiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('options')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="content-wrapper">
                                            <h2><?php the_sub_field('option_name'); ?></h2>
                                            <p><?php the_sub_field('option_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="content-wrapper">
                            <?php if ($link = get_field('option_btn')) : ?>
                                <a href="<?php echo $link['url']; ?>" class="theme-btn call-link"><?php echo $link['title']; ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if (get_field('consultant')) : ?>
    <section class="consultant-section" id="consultant">
        <div class="consultant">
            <?php getImage(get_field('consultant_image')); ?>
        </div>
        <div class=" circle-white"></div>

        <div class="container">
            <div class="content-wrapper">
                <?php the_field('consultant'); ?>
                <div class="content-wrapper">
                    <?php if ($link = get_field('consultant_btn')) : ?>
                        <a href="<?php echo $link['url']; ?>" class="theme-btn call-link"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="circle-pink"></div>
    </section>
<?php endif; ?>



<?php if (have_rows('team')) : ?>
    <section class="team-section">
        <div class="container">
            <?php if (get_field('content')) : ?>
                <div class="content-wrapper"><?php the_field('content'); ?></div>
            <?php endif; ?>
            <div class="row">
                <?php while (have_rows('team')) : the_row(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="item">
                            <div class="image">
                                <?php getImage(get_sub_field('image'), 'full-image'); ?>
                            </div>
                            <h4><?php the_sub_field('name'); ?></h4>
                            <h5><?php the_sub_field('position'); ?></h5>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('contact_us_form')) : ?>
    <section class="contact-section">
        <?php
        $image = get_field('contact_us_image');
        $attachment = wp_get_attachment_image_src($image, 'full-image');
        if ($attachment) :
            $image_url = $attachment[0];
        ?>
            <img src="<?php echo $image_url; ?>" alt="" class="full-image">
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5 position-relative">
                    <?php if (get_field('option_highlighter')) : ?>
                        <?php $name = nl2br(get_field('option_highlighter')); ?>
                        <p class="circle name"><?php echo $name; ?></p>
                    <?php endif; ?>
                    <?php if (get_field('form_title')) : ?>
                        <div class="content-wrapper">
                            <?php the_field('form_title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($formID = get_field('contact_us_form')) : ?>
                        <div class="contact-form">
                            <?php if (get_field('banner_form_title')) : ?>
                                <div class="content-wrapper"><?php the_field('banner_form_title'); ?></div>
                            <?php endif; ?>
                            <?php echo do_shortcode('[forminator_form id="' . $formID . '"]'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('instagram_name')) : ?>
    <section class="instagram-section" id="instagram">
        <div class="container">
            <div class="insta-parent">
                <div class="full-image-parent">
                    <?php getImage(get_field('image_1'), 'full-image bg'); ?>
                </div>
                <div class="full-image-parent">
                    <?php getImage(get_field('image_2'), 'full-image bg'); ?>
                </div>
                <div class="insta-name-parent">
                    <?php if ($link = get_field('instagram_name')) : ?>
                        <i class="fab fa-instagram"></i>
                        <a href="<?php echo $link['url']; ?>" class="insta-name full-link"></a>
                        <p><?php echo $link['title']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="full-image-parent">
                    <?php getImage(get_field('image_3'), 'full-image bg'); ?>
                </div>
                <div class="full-image-parent">
                    <?php getImage(get_field('image_4'), 'full-image bg'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php get_footer(); ?>