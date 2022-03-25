<div class="container">
  <div class="row pageHeader justify-content-around">
    <div class="col-12">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  
  <div class="placeGallery row">
    <?php $args = array(
      'post_type' => 'project',
      'post_status' => 'publish',
      'posts_per_page' => -1, 
      'orderby' => 'date', 
      'order' => 'DESC'
    ); ?>
    <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="placeItem">
          <a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>">
            <div class="placeImg" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
            <h2><?php the_title(); ?></h2>
            <p><?php echo get_field('excerpt'); ?></p>
            <span><img src="@asset('images/icons/arrow.svg')"> Läs mer</span>
          </a>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <div class="placeItem item-empty">hidden</div>
  </div>
</div>