<div class="pageHeader">
  <h1><?php the_field("header"); ?></h1>
</div>

<div class="row">
  <div class="col-lg">
    <?php the_field("text"); ?>
    
    <div class="filterContainer">
      <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
        <h3>FILTER:</h3>
      <?php else: ?>
        <h3>FILTRERA:</h3>
      <?php endif; ?>
      <div class="filterButtons">
        <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
          <a href="" class="filter-btn active" id="all">Show all</a>
        <?php else: ?>
          <a href="" class="filter-btn active" id="all">Visa alla</a>
        <?php endif; ?>
        <?php
          $terms = get_terms( array(
            'taxonomy' => 'filter',
            'hide_empty' => true,
          ) );
          foreach ($terms as $term){
            echo '<a href="" class="filter-btn" id="terms-' . $term->slug . '">' . $term->name . '</a>';
          }
        ?>
      </div>
    </div>

    <?php
      $member_group_terms = get_terms( 'type' );
      foreach ( $member_group_terms as $member_group_term ) {
        $member_group_query = new WP_Query( array(
          'post_type' => 'arkiv',
          'tax_query' => array(
            array(
              'taxonomy' => 'type',
              'field' => 'slug',
              'terms' => array( $member_group_term->slug ),
              'operator' => 'IN'
            )
          )
        ) 
      ); 
    ?>
    
    <div class="filterGroup <?php echo $member_group_term->slug; ?>">
      <h2><?php echo $member_group_term->name; ?></h2>
      <ul class="list-arkiv list-unstyled">
        <?php if ( $member_group_query->have_posts() ) : while ( $member_group_query->have_posts() ) : $member_group_query->the_post(); ?>
          <li class="item <?php get_terms_tag( 'filter' ) ?>"><a href="<?php the_field("url"); ?>" alt="<?php echo the_title(); ?>" target="_blank"><?php echo the_title(); ?></a></li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    
    <?php
      $member_group_query = null;
      wp_reset_postdata();
      } 
    ?>

  </div>
  <div class="col-lg">
    <?php if( have_rows('images') ):
      while ( have_rows('images') ) : the_row(); ?>
        <?php echo '<div class="imgBox" style="background-image:url('.get_sub_field('img').');"></div>' ?>
      <?php endwhile;
    endif; ?>
  </div>
</div>