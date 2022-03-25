<div class="container">
  <div class="row pageHeader justify-content-around">
    <div class="col-md-12 col-sm-12">
      <a href="/medarbetare" alt="tillbaka"><img src="@asset('images/icons/close.svg')" alt="tillbaka"></a>
    </div>
  </div>
  
  <div class="workContent row">
    <div class="col-md-4 col-sm-12">
      <img src="<?php the_post_thumbnail_url() ?>" alt="">
    </div>
    <div class="col-md-8 col-sm-12">
      <ul class="workContent--list list-unstyled">
        <li><?php the_title(); ?></li>
        <li><?php the_field('role'); ?></li>
        <li><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></li>
        <li><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
      </ul>
      <div class="workContent--container">
        <?php the_field('about'); ?>
      </div>
      <div class="workContent--container">
        <h3>Erfarenheter</h3>
        <?php the_field('experience'); ?>
      </div>
      <div class="workContent--container">
        <h3>Utbildning</h3>
        <?php the_field('education'); ?>
      </div>
      <ul class="workContent--list list-unstyled">
        <li><a href="<?php the_field('cv'); ?>">CV</a></li>
        <?php if( have_rows('social') ): ?>
          <?php while ( have_rows('social') ) : the_row(); ?>
            <?php if( have_rows('link') ): ?>
              <?php while( have_rows('link') ): the_row(); ?>
                <li><a href="<?php the_sub_field('url'); ?>" alt="<?php the_sub_field('name'); ?>"><?php the_sub_field('name'); ?></a></li>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>