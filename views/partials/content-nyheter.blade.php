<div class="pageHeader">
  <h1><?php the_title(); ?></h1>
</div>
<div class="newsletterContainer">
  <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
    <a class="newsletterSignup" href="">Subscribe to our Newsletter</a>
  <?php else: ?>
    <a class="newsletterSignup" href="">Anmäl dig till vårt nyhetsbrev</a>
  <?php endif; ?>
</div>

  <?php $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'date', 
    'order' => 'DESC'
  ); ?>
  <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="newsItem">
        <div class="row">
          <div class="col-md-8">
            <p class="newsDate"><?php echo get_the_date(); ?></p>
            <h1><a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <?php the_excerpt(); ?>
          </div>
          <div class="col-md-4">
            <a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>">
              <div class="imgBox" style="background-image:url('<?php the_post_thumbnail_url() ?>');"></div>
            </a>
          </div>
        </div>
      </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
