@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
      @include('partials.page-header')
    </div>

    <div class="featured-image text-right">
      <img src="@php the_field('hero_image'); @endphp" class="lozad" alt="">
    </div>
    
    <div class="container" id="boxes">
      <div class="row">
        <?php if( have_rows('cards') ): ?>
          <?php while( have_rows('cards') ): the_row(); ?>

              <div class="col-md-4">
                <div><img src="@asset('images/Tick-Icon.svg')" width="" height="" class="img-fluid lozad" alt="tick icon"><strong><?php echo get_sub_field('heading'); ?></strong></div>
                <?php echo get_sub_field('text'); ?>
              </div>
                  
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="design-carousel">
      <div class="container">
        <div id="design-slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <?php if( have_rows('carousel') ): ?>
              <?php while( have_rows('carousel') ): the_row(); ?>
              
                <div class="carousel-item w-100">
                  <div class="row">
                    <div class="col">
                      <img src="<?php echo get_sub_field('picture1'); ?>" class="img-fluid lozad">
                    </div>
                    <div class="col">
                      <img src="<?php echo get_sub_field('picture2'); ?>" class="img-fluid lozad">
                    </div>
                    <div class="col">
                      <img src="<?php echo get_sub_field('picture3'); ?>" class="img-fluid lozad">
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>
          <a class="carousel-control-prev" href="#design-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#design-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
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
              @php echo do_shortcode('[contact-form-7 id="579" title="Design Your Own"]') @endphp
            </div>
          </div>
        </div>
      </div>
    </div>

  @endwhile
@endsection
