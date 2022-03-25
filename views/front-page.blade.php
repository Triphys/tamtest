@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

	<?php if( have_rows('hero') ): ?>
		<?php while ( have_rows('hero') ) : the_row(); ?>
			<section class="heroSegment">
				<div class="heroSegment--meta_container">
  				<div class="container">
  					<div class="row">
  						<h1><?php echo get_sub_field('header'); ?></h1>
  					</div>
  				</div>
				</div>
				<?php if( have_rows('images') ): ?>
					<div class="hero-slider desktop-only">
						<?php while ( have_rows('images') ) : the_row(); ?>
							<div>
  	    				<div class="slide">
  	      				<div class="slide-img" style="background-image: url('<?php echo get_sub_field('image'); ?>');"></div>
  	    				</div>
  	  				</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php if( have_rows('mobile_images') ): ?>
					<div class="hero-mobile-slider mobile-only">
						<?php while ( have_rows('mobile_images') ) : the_row(); ?>
							<div>
								<div class="slide">
  								<div class="slide-img" style="background-image: url('<?php echo get_sub_field('image'); ?>');"></div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if( have_rows('textbox') ): ?>
		<?php while ( have_rows('textbox') ) : the_row(); ?>
			<section class="flavourSegment">
				<div class="container">
					<div class="row justify-content-md-center">
						<p><?php echo get_sub_field('text'); ?></p>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>

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

  @endwhile
@endsection
