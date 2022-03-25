
<div class="container">

  <div class="row pageHeader justify-content-around">
    <div class="col-md-11 col-sm-12">
      <a href="/platser" alt="tillbaka"><img src="@asset('images/icons/close.svg')" alt="tillbaka"></a>
    </div>
  </div>
  
  <?php if( have_rows('images') ): ?>
    <section class="desktop-only" id="slider">
      <div class="Ccontainer">
        <div class="subcontainer">
          <div class="slider-wrapper">
            <ul class="controls" id="customize-controls">
              <li class="prev">
                <button class="previous"><img src="@asset('images/icons/back.svg')" alt="bakåt"></button>
              </li>
              <li class="next">
                <button class="next"><img src="@asset('images/icons/forward.svg')" alt="frammåt"></button>
              </li>
            </ul>
            <div class="desktop-slider">
              <div>
                <div class="slide">
                  <div class="slide-img" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
                </div>
              </div>
              <?php while ( have_rows('images') ) : the_row(); ?>
                <div>
                  <div class="slide">
                    <div class="slide-img" style="background-image: url('<?php echo get_sub_field('image'); ?>');"></div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mobile-only" id="slider">
      <div class="Ccontainer">
        <div class="subcontainer">
          <div class="slider-wrapper">
            <div class="mobile-slider">
              <div>
                <div class="slide">
                  <div class="slide-img" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
                </div>
              </div>
              <?php while ( have_rows('images') ) : the_row(); ?>
                <div>
                  <div class="slide">
                    <div class="slide-img" style="background-image: url('<?php echo get_sub_field('image'); ?>');"></div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php else: ?>
    <div class="header-img">
      <div class="slide-img" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
    </div>
  <?php endif; ?>
  
  
  <div class="row justify-content-around">
    <div class="postContent col-md-8 col-sm-12">
      <h1><?php the_title(); ?></h1>
      <?php echo get_field('content'); ?>
      <?php if( have_rows('info') ): ?>
        <ul class="postInfo list-unstyled">
          <?php while ( have_rows('info') ) : the_row(); ?>
            <?php if( get_sub_field('type') ): ?>
              <li>Typ: <?php echo get_sub_field('type'); ?></li>
            <?php endif; ?>
            <?php if( get_sub_field('size') ): ?>
              <li>Storlek: <?php echo get_sub_field('size'); ?></li>
            <?php endif; ?>
            <?php if( get_sub_field('status') ): ?>
              <li>År, Status: <?php echo get_sub_field('status'); ?></li>
            <?php endif; ?>
            <?php if( get_sub_field('asignee') ): ?>
              <li>Uppdragsgivare: <?php echo get_sub_field('assignee'); ?></li>
            <?php endif; ?>
            <?php if( get_sub_field('role') ): ?>
              <li>TAMs roll: <?php echo get_sub_field('role'); ?></li>
            <?php endif; ?>
            <?php if( have_rows('file') ): ?>
              <?php while ( have_rows('file') ) : the_row(); ?>
                <?php if( get_sub_field('url') ): ?>
                  <li>Bifogad fil: <a href="<?php echo get_sub_field('url'); ?>" alt="<?php echo get_sub_field('text'); ?>"><?php echo get_sub_field('text'); ?></a></li>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      
      <?php $post_object = get_field('contact'); ?>
      <?php if( $post_object ): ?>
        <?php $post = $post_object; ?>
        <?php setup_postdata( $post ); ?>
        <?php
          $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_object->ID), 'thumbnail' );
          $url = $thumb['0'];
          $phone = get_field( 'phone', $post_object->ID );
          $email = get_field( 'email', $post_object->ID );
        ?>
        <div class="postContact">
          <h2>KONTAKTPERSON:</h2>
          <div class="contactContainer">
            <?php echo '<div class="contactContainer--img" title="'.$post_object->post_title.'" style="background-image:url('.$url.');"></div>' ?>
            <div class="contactContainer--meta">
              <ul class="list-unstyled">
                <li><?php echo $post_object->post_title; ?></li>
                <li><a href="mailto:<?php echo esc_html( $email ); ?>" alt="<?php echo esc_html( $email ); ?>"><?php echo esc_html( $email ); ?></a></li>
                <li><a href="tel:<?php echo esc_html( $phone ); ?>" alt="<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <?php if( have_rows('related') ): ?>
        <div class="postRelated">
          <h2>RELATERAT:</h2>
          <div class="postRelated--content">
            <?php while ( have_rows('related') ) : the_row(); ?>
              <?php $post_object = get_sub_field('related_post'); ?>
              <?php if( $post_object ): ?>
                <?php $post = $post_object; ?>
                <?php setup_postdata( $post ); ?>
                <?php
                  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_object->ID), 'thumbnail' );
                  $url = $thumb['0'];
                ?>
                <a href="<?php the_permalink($post_object->ID); ?>" title="<?php echo $post_object->post_title; ?>">
                  <div class="postRelated--item">
                    <?php echo '<div class="postRelated--img" title="'.$post_object->post_title.'" style="background-image:url('.$url.');"></div>' ?>
                    <h3><?php echo $post_object->post_title; ?></h3>
                  </div>
                </a>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

</div>