<div class="container">
    
  <div class="row pageHeader justify-content-around">
    <div class="col-12">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  
  <div class="workContent row">
    <?php
    $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'medarbetare',
      'meta_key'      => 'department',
      'meta_value'    => 'am'
    );
    $the_query = new WP_Query( $args );
    ?>
    <?php if( $the_query->have_posts() ): ?>
      <h1>Asset Management</h1>
      <div class="workGallery">
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="workItem">
            <a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>">
              <div class="workImg" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
            </a>
            <ul class="list-unstyled">
              <li><a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></li>
              <li><?php the_field('role'); ?></li>
              <li><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></li>
              <li><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
            </ul>
          </div>
        <?php endwhile; ?>
        <div class="workItem item-empty">hidden</div>
      </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <?php
    $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'medarbetare',
      'meta_key'      => 'department',
      'meta_value'    => 'dp'
    );
    $the_query = new WP_Query( $args );
    ?>
    <?php if( $the_query->have_posts() ): ?>
      <h1>Development</h1>
      <div class="workGallery">
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="workItem">
            <a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>">
              <div class="workImg" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
            </a>
            <ul class="list-unstyled">
              <li><a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></li>
              <li><?php the_field('role'); ?></li>
              <li><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></li>
              <li><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
            </ul>
          </div>
        <?php endwhile; ?>
        <div class="workItem item-empty">hidden</div>
      </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <?php
    $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'medarbetare',
      'meta_key'      => 'department',
      'meta_value'    => 'rt'
    );
    $the_query = new WP_Query( $args );
    ?>
    <?php if( $the_query->have_posts() ): ?>
      <h1>Retail</h1>
      <div class="workGallery">
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="workItem">
            <a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>">
              <div class="workImg" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
            </a>
            <ul class="list-unstyled">
              <li><a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></li>
              <li><?php the_field('role'); ?></li>
              <li><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></li>
              <li><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
            </ul>
          </div>
        <?php endwhile; ?>
        <div class="workItem item-empty">hidden</div>
      </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>