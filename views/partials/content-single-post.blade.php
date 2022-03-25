<div class="container">
  
  <div class="row pageHeader justify-content-around">
    <div class="col-md-10 col-sm-12">
      <a href="/utblick" alt="tillbaka"><img src="@asset('images/icons/close.svg')" alt="tillbaka"></a>
    </div>
  </div>
  
  <div class="row justify-content-around">
    <div class="col-md-10 col-sm-12">
      <div class="heroContent" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
    </div>
  </div>
  
  <div class="row justify-content-around">
    <div class="postContent col-md-8 col-sm-12">
      <h1><?php the_title(); ?></h1>
      <div class="postContent--text">
        <?php the_content(); ?>
      </div>
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