<div class="container">
  
  <div class="row pageHeader justify-content-around">
    <div class="col-12">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="contactContent">
    <div class="row">
      <?php if( have_rows('info') ): ?>
        <?php while ( have_rows('info') ) : the_row(); ?>
          <div class="contactContent--info">
            <div>
              <h3>Kontakt:</h3>
              <ul class="list-unstyled">
                <?php if( get_sub_field('email') ): ?>
                  <li><a href="mailto:<?php echo get_sub_field('email'); ?>"><?php echo get_sub_field('email'); ?></a></li>
                <?php endif; ?>
                <?php if( get_sub_field('phone') ): ?>
                  <li><a href="tel:<?php echo get_sub_field('phone'); ?>"><?php echo get_sub_field('phone'); ?></a></li>
                <?php endif; ?>
              </ul>
              <?php if( have_rows('links') ): ?>
                <?php while ( have_rows('links') ) : the_row(); ?>
                  <ul class="list-unstyled">
                    <?php if( have_rows('link') ): ?>
                      <?php while ( have_rows('link') ) : the_row(); ?>
                        <li><a href="<?php echo get_sub_field('url'); ?>" alt="<?php echo get_sub_field('text'); ?>"><?php echo get_sub_field('text'); ?></a></li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div>
              <?php if( get_sub_field('career') ): ?>
                <h3>Karriär</h3>
                <p><?php echo get_sub_field('career'); ?></p>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <?php if( have_rows('offices') ): ?>
        <div class="contactPlaces">
          <h3>Våra kontor:</h3>
          <ul class="contactPlaces--nav list-unstyled">
            <?php while ( have_rows('offices') ) : the_row(); ?>
              <?php if( have_rows('office') ): ?>
                <?php while ( have_rows('office') ) : the_row(); ?>
                  <?php if( get_sub_field('active') ) { ?>
                    <li class="contactPlaces--item active" id="<?php echo get_sub_field('id'); ?>"><span><?php echo get_sub_field('name'); ?></span><img src="@asset('images/icons/marker.svg')" alt="marker"></li>
                  <?php } else { ?>
                    <li class="contactPlaces--item" id="<?php echo get_sub_field('id'); ?>"><span><?php echo get_sub_field('name'); ?></span><img src="@asset('images/icons/marker.svg')" alt="marker"></li>
                  <?php } ?>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      <?php endif; ?>
      <?php if( have_rows('offices') ): ?>
        <?php while ( have_rows('offices') ) : the_row(); ?>
          <?php if( have_rows('office') ): ?>
            <?php while ( have_rows('office') ) : the_row(); ?>
              <?php if( get_sub_field('active') ) { ?>
                <div class="contactPlace active" data-instructor="<?php echo get_sub_field('id'); ?>">
                  <h3 class="contactPlace--name"><?php echo get_sub_field('name'); ?></h3>
                  <div class="contactPlace--info">
                    <div>
                      <h3>Besöksadress:</h3>
                      <?php echo get_sub_field('visit'); ?>
                    </div>
                    <div>
                      <h3>Postadress:</h3>
                      <?php echo get_sub_field('post'); ?>
                    </div>
                  </div>
                  <div class="contactPlace--meta">
                    <?php
                      $location = get_sub_field('map');
                      if( $location ): ?>
                        <div class="acf-map" data-zoom="16">
                            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_sub_field('image') ) { ?>
                      <div class="contactContent--img" style="background-image: url('<?php echo get_sub_field('image'); ?>');"></div>
                    <?php } ?>
                  </div>
                </div>
              <?php } else { ?>
                <div class="contactPlace" data-instructor="<?php echo get_sub_field('id'); ?>">
                  <h3 class="contactPlace--name"><?php echo get_sub_field('name'); ?></h3>
                  <div class="contactPlace--info">
                    <div>
                      <h3>Besöksadress:</h3>
                      <?php echo get_sub_field('visit'); ?>
                    </div>
                    <div>
                      <h3>Postadress:</h3>
                      <?php echo get_sub_field('post'); ?>
                    </div>
                  </div>
                  <div class="contactPlace--meta">
                    <?php
                      $location = get_sub_field('map');
                      if( $location ): ?>
                        <div class="acf-map" data-zoom="16">
                            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_sub_field('image') ) { ?>
                      <div class="contactContent--img" style="background-image: url('<?php echo get_sub_field('image'); ?>');"></div>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            <?php endwhile; ?>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</div>