<div class="pageHeader">
  <h1><?php the_field("header"); ?></h1>
</div>

<div class="row">
  <?php if( have_rows('person') ):
    while ( have_rows('person') ) : the_row(); ?>
      <div class="personContainer col-sm-6 col-md-4 col-lg-3">
        <?php if( get_sub_field('img') ): ?>
          <?php echo '<div class="imgBox--person" style="background-image:url('.get_sub_field('img').');"></div>' ?>
        <?php endif; ?>
        <h2><?php echo get_sub_field('name'); ?></h2>
        <p><?php echo get_sub_field('text'); ?></p>
      </div>
    <?php endwhile;
  endif; ?>
</div>