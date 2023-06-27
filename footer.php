<footer class="main-footer" id="footer">
	<div class="container">
		<div class="footer">
			<div>
				<?php if (get_field('quick_links_title', 'option')) : ?>
					<h3 class="footer-subheading"><?php the_field('quick_links_title', 'option'); ?></h3>
				<?php endif; ?>
				<div class="menu-wrapper">
					<nav class="navbar navbar-expand-md p-0" id="menu">
						<div id="navbarCollapse">
							<?php
							$defaults = array(
								'menu'            => 'Footer Menu',
								'container'       => false,
								'menu_class'      => 'menu',
								'echo'            => true,
								'fallback_cb'     => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>',
								'depth'           => 0
							);
							wp_nav_menu($defaults);
							?>
						</div>
					</nav>
				</div>
			</div>

			<div>
				<?php if (get_field('office_hours_title', 'option')) : ?>
					<h3 class="footer-subheading"><?php the_field('office_hours_title', 'option'); ?></h3>
				<?php endif; ?>
				<?php while (have_rows('office_hours', 'option')) : the_row(); ?>
					<?php if (get_sub_field('office_day') && get_sub_field('office_time')) : ?>
						<div class="content-wrapper">
							<p class="footer-days"><?php the_sub_field('office_day'); ?> <span><?php the_sub_field('office_time'); ?></span></p>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>

			<div class="work-address">
				<?php if (get_field('contact_us_title', 'option')) : ?>
					<h3 class="footer-subheading"><?php the_field('contact_us_title', 'option'); ?></h3>
				<?php endif; ?>
				<?php if (get_field('address_1', 'option')) : ?>
					<?php $address = nl2br(get_field('address_1', 'option')); ?>
					<p><?php echo $address; ?></p>
				<?php endif; ?>
				<?php if (get_field('address_2', 'option')) : ?>
					<?php $address = nl2br(get_field('address_2', 'option')); ?>
					<p><?php echo $address; ?></p>
				<?php endif; ?>
			</div>

			<div>
				<?php if (get_field('connect_with_us_title', 'option')) : ?>
					<h3 class="footer-subheading"><?php the_field('connect_with_us_title', 'option'); ?></h3>
				<?php endif; ?>
				<?php get_template_part('templates/social', 'media'); ?>
				<div class="maya">
					<p class="maya-wrapper"><a href="https://www.maya.lk/" target="_blank">Website By <img src="<?php echo THEME_IMAGES; ?>logo-2.png" alt="Maya.lk"></a></p>
					<div class="copyrights">
						<p class="copyrights-text"><?php echo str_replace('[year]', date('Y'), get_field('copyrights_text', 'option')); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>