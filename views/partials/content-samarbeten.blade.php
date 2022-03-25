<div class="pageHeader">
  <h1><?php the_field("header"); ?></h1>
</div>

<div class="row">
  <div class="col-lg">
    <?php the_field("text"); ?>
    <?php if( have_rows('content') ):
      while ( have_rows('content') ) : the_row(); ?>
        <div class="contentContainer">
          <h2><?php echo get_sub_field('header'); ?></h2>
          <?php echo get_sub_field('text'); ?>
        </div>
      <?php endwhile;
    endif; ?>    
  </div>
  <div class="col-lg">
    <?php if( have_rows('content') ):
      while ( have_rows('content') ) : the_row(); ?>
        <?php echo '<div class="imgBox" style="background-image:url('.get_sub_field('img').');"></div>' ?>
      <?php endwhile;
    endif; ?>
  </div>
</div>
