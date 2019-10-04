<article @php post_class() @endphp>
  <div class="single-wrapper">
    <div class="container">
      <header>

        <div id="breadcrumbs">
          <?php
          if(function_exists('bcn_display'))
          {
          bcn_display();
          }
          ?>
        </div>
        
        <h1 class="entry-title text-center">{{ get_the_title() }}</h1>
        
        <?php if( get_field('usb_prod_subtitle') ): ?>
          <h2 class="entry-subtitle text-center"><?php the_field('usb_prod_subtitle'); ?></h2>
        <?php endif; ?>
        
        <div class="hero text-center mt-5 pb-5">
          <?php 
            $image = get_field('hero_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid lozad" />
          <?php endif; ?>
        </div>
      </header>
    </div>
  </div>

  <div class="thumbs">
    <div class="container">
      <div class="row">
        <?php if( have_rows('thumbs') ): ?>
          <?php while( have_rows('thumbs') ): the_row(); 
            // vars
            $image = get_sub_field('product_image');
          ?>

            <div class="col-md mb-5 text-center">
              <div class="thumb-ins">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid lozad" />
              </div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>      
  </div>

  <div class="quote">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="quote-text">
          <h4>DESCRIPTION</h4>
           
            <?php if( get_field('product_description') ): ?>
              <?php the_field('product_description'); ?></h2>
            <?php endif; ?>

            <div class="row technical">
              <div class="col-md-8">
                <h4>TECHNICAL</h4>
                <hr>

                @php if( have_rows('technical') ): @endphp
                  @php while( have_rows('technical') ): the_row(); @endphp

                    <div class="row">
                      <div class="col-5">
                        Minimum Order
                      </div>
                      <div class="col">
                        @php the_sub_field('minimum_order'); @endphp
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-5">
                        Leadtime
                      </div>
                      <div class="col">
                        @php the_sub_field('leadtime'); @endphp
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-5">
                        Branding
                      </div>
                      <div class="col">
                        @php the_sub_field('branding'); @endphp
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-5">
                        Print Area
                      </div>
                      <div class="col">
                        @php the_sub_field('print_area'); @endphp
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-5">
                        Colours
                      </div>
                      <div class="col">

                        <?php

                        // vars 
                        $colors = get_sub_field('colors');


                        // check
                        if( $colors ): ?>
                        
                          <?php foreach( $colors as $color ): ?>
                            <div class="color <?php echo $color; ?>"></div>
                          <?php endforeach; ?>
                        
                        <?php endif; ?>
                      </div>
                    </div>
                    <hr>

                  @php endwhile; @endphp
                @php endif; @endphp

                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="quote-form">
            <h3>QUICK QUOTE</h3>

              <?php 
              if( get_post_type() == 'usb-product' ) {
                   echo do_shortcode('[contact-form-7 id="581" title="USB Product"]');
              } else {
                  echo "Wrong Product type";
              }
              ?>

          </div>
        </div>
      </div>
    </div>
  </div>

</article>
