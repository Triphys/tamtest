<?php if( have_rows('sections') ): ?>
	<?php while( have_rows('sections') ): the_row(); ?>
		<?php if( get_row_layout() == 'img_left' ): ?>
					
			<section class="infoSegment container">
				<div class="infoSegment--container img-left row">
					<div class="infoSegment--img" style="background-image: url('<?php echo get_sub_field('bild'); ?>');"></div>
					<div class="infoSegment--content">
						<h2><?php echo get_sub_field('header'); ?></h2>
						<?php echo get_sub_field('text'); ?>
						<?php if( have_rows('lank') ): ?>
							<?php while ( have_rows('lank') ) : the_row(); ?>
								<a href="<?php echo get_sub_field('link'); ?>" alt="<?php echo get_sub_field('text'); ?>"><img src="@asset('images/icons/arrow.svg')"><?php echo get_sub_field('text'); ?></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
			
		<?php elseif( get_row_layout() == 'img_right' ): ?>
			<section class="infoSegment container">
				<div class="infoSegment--container img-right row">
					<div class="infoSegment--content">
						<h2><?php echo get_sub_field('header'); ?></h2>
						<?php echo get_sub_field('text'); ?>
						<?php if( have_rows('lank') ): ?>
							<?php while ( have_rows('lank') ) : the_row(); ?>
								<a href="<?php echo get_sub_field('link'); ?>" alt="<?php echo get_sub_field('text'); ?>"><img src="@asset('images/icons/arrow.svg')"><?php echo get_sub_field('text'); ?></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="infoSegment--img" style="background-image: url('<?php echo get_sub_field('bild'); ?>');"></div>
				</div>
			</section>
						
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>