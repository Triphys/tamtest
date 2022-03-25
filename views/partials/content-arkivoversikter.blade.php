<div class="pageHeader">
  <h1><?php the_title(); ?></h1>
</div>

<?php $args = array( 
  'post_type' => 'arkivoversikt', 
  'post_status' => 'publish',
  'posts_per_page' => -1, 
  'orderby' => 'date', 
  'order' => 'DESC'
);
$the_query = new WP_Query( $args ); ?>
<div class="row">
  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
      
      <div class="pubItem col-md-6">
        <div class="pubItem--img">
          <img src="<?php echo get_field('img'); ?>" alt="">
        </div>
        <div class="pubItem--content">
          <h2><?php the_title(); ?></h2>
          <h2 class="subHeader"><?php echo get_field('author'); ?></h2>
          <p><?php echo get_field('info'); ?></p>
          <div class="pubItem--footer">
            <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
              <a href="<?php echo get_field('download'); ?>">DOWNLOAD PDF</a>
            <?php else: ?>
              <a href="<?php echo get_field('download'); ?>">LADDA NER PDF</a>
            <?php endif; ?>
          </div>
        </div>
      </div>


  <?php endwhile;
  wp_reset_postdata(); ?>
<?php endif; ?>
</div>
