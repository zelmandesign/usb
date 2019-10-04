@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    
    <section id="slider">

      <div id="home-slider" class="carousel slide" data-ride="carousel">
        <?php if( have_rows('slider') ): $i = 0; ?>
          <ol class="carousel-indicators">
            <?php while ( have_rows('slider') ): the_row(); ?>
              <li data-target="#home-slider" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) echo 'active'; ?>"></li>
            <?php $i++; endwhile; ?>  
          </ol>
        <?php endif; ?>
        <?php if( have_rows('slider') ): ?>
          <div class="carousel-inner">
            <?php while( have_rows('slider') ): the_row(); ?>
            <div class="carousel-item" style="background: url('<?php echo get_sub_field('slide_image'); ?>')" class="lozad">
              <div class="carousel-caption">
                <p><?php echo get_sub_field('slide_heading'); ?></p>
                <?php echo get_sub_field('slide_subheading'); ?>
                <?php $link = get_sub_field('slide_link'); ?>
                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-danger text-uppercase"><?php echo $link['title']; ?></a>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <a class="carousel-control-prev" href="#home-slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="our-products" class="text-center">
      <div class="container">
        <p id="par-40">@php echo get_field('sec2_heading'); @endphp</p>
        <h3 id="h-15">@php echo get_field('sec2_subheading'); @endphp</h3>

        <div class="row mt-5">
          <?php if( have_rows('icons') ): ?>
            <?php while( have_rows('icons') ): the_row(); ?>
              <div class="col-md">
                <a href="<?php echo get_sub_field('link'); ?>">
                  <?php $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['url']; ?>" width="62" height="62" class="lozad icon-bounce" alt="<?php echo $image['alt']; ?>"><br>
                  <h2 id="h-17" class="mb-2"><?php echo get_sub_field('heading'); ?></h2>
                </a>
                <?php echo get_sub_field('text'); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

      </div>
    </section>

    <section id="featured">
      <div class="wrapper-grey">
        <div class="container" id="badge">
          <div class="row">
            <div class="col-md d-block d-lg-none">
              <?php $home_featured_image = get_field('home_featured_image'); ?>
              <img src="<?php echo $home_featured_image['url']; ?>" alt="<?php echo $home_featured_image['alt']; ?>" width="" height="" class="img-fluid wow fadeInUp lozad float-right">
            </div>
            <div class="col-lg-5 d-flex align-items-center" id="fix">
              <div class="wrapper">
                <p id="par-40">@php echo get_field('feat_main_title'); @endphp</p>
                <h3 id="h-15">@php echo get_field('home_featured_name'); @endphp</h3><br>
                @php echo get_field('home_featured_description'); @endphp
                <br><br>
                <?php 

                $link = get_field('home_featured_link');

                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  
                <a class="btn btn-danger" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md d-none d-lg-block">
              <?php $home_featured_image = get_field('home_featured_image'); ?>
              <img src="<?php echo $home_featured_image['url']; ?>" alt="<?php echo $home_featured_image['alt']; ?>" width="" height="" class="img-fluid wow fadeInUp lozad float-right">
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <?php if( have_rows('home_featured_products_bottom') ): ?>
          <?php while( have_rows('home_featured_products_bottom') ): the_row(); ?>
            
            <div class="col-xl mt-2 mb-2">
              <div class="inside">
                <div class="row">
                  <div class="col text-center">
                    <?php $boxes_image = get_sub_field('image'); ?>
                    <img src="<?php echo $boxes_image['url']; ?>" width="" alt="<?php echo $boxes_image['alt']; ?>" height="" class="img-fluid lozad">
                  </div>
                  <div class="col d-flex align-items-center">
                    <div class="wrap text-left">
                      <div class="title-big"><?php echo get_sub_field('title_feat'); ?></div>
                      <div class="title-sub mb-3"><?php echo get_sub_field('name'); ?></div>

                      <?php echo get_sub_field('description'); ?>
                      <a class="btn btn-danger mt-3" href="<?php echo get_sub_field('url'); ?>">More Info</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

        
      </div>
      <div class="blue">
        <div class="container">
          @php echo get_field('bottom_banner_text'); @endphp
        </div>
      </div>
    </section>

    <section id="work-with-us" style="background: url('<?php echo get_field('work_background_image'); ?>') top right no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-12">
            <p id="par-40">@php echo get_field('work_heading'); @endphp</p>
            <h3 id="h-15">@php echo get_field('work_subheading'); @endphp</h3><br>
            @php echo get_field('work_description'); @endphp
          </div>
        </div>
        <div class="row">
          <?php if( have_rows('boxes') ): ?>
            <?php while( have_rows('boxes') ): the_row(); ?>
              <div class="col-md-4 mb-4">
                <div><img src="@asset('images/Tick-Icon.svg')" alt="tick icon" width="" height="" class="img-fluid lozad"><strong><?php echo get_sub_field('title'); ?></strong></div>
                <?php echo get_sub_field('verbiage'); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section id="unlimited-possibilities">
      <div class="container">
        <p id="par-40" class="text-center">@php echo get_field('un_heading'); @endphp</p>
        <h3 id="h-15" class="text-center">@php echo get_field('un_subheading'); @endphp</h3>

        <div class="row">
          <div class="col-md text-center d-block d-md-none">
            <?php $boxes_image = get_field('un_image'); ?>
            <img src="<?php echo $boxes_image['url'] ?>" alt="<?php echo $boxes_image['alt'] ?>" width="195" height="455" class="img-fluid mb-5 wow fadeInUp lozad">
          </div>
          <div class="col-md text-right">
            <?php if( have_rows('un_text_left') ): ?>
              <?php while( have_rows('un_text_left') ): the_row(); ?>

                  <div class="par"><div class="title"><img src="@asset('images/Tick-Icon.svg')" alt="tick icon" width="" height="27" class="img-fluid d-inline d-md-none"><strong><?php echo get_sub_field('title'); ?></strong><img src="@asset('images/Tick-Icon.svg')" alt="tick icon" width="" height="27" class="img-fluid d-none d-md-inline lozad"></div>
                  <?php echo get_sub_field('text'); ?></div>
                      
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="col-md text-center d-none d-md-block">
            <img src="<?php echo $boxes_image['url'] ?>" width="" height="" class="img-fluid wow fadeInUp lozad" alt="<?php echo $boxes_image['alt'] ?>">
          </div>
          <div class="col-md">
            <?php if( have_rows('un_text_right') ): ?>
              <?php while( have_rows('un_text_right') ): the_row(); ?>

                  <div class="par"><div class="title"><img src="@asset('images/Tick-Icon.svg')" alt="tick icon" width="" height="" class="img-fluid lozad"><strong><?php echo get_sub_field('title'); ?></strong></div>
                  <?php echo get_sub_field('text'); ?></div>
                      
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section id="industry-experts" style="background: url('@php echo get_field('ind_background_image'); @endphp') center no-repeat;">
      <div class="container">
        <div class="col-md-10 offset-md-1">
          <p id="par-40" class="text-white">@php echo get_field('ind_heading'); @endphp</p>
          <h2 id="h-15" class="mb-4">@php echo get_field('ind_subheading'); @endphp</h2>
          @php echo get_field('ind_verbiage'); @endphp
          <br><br>
          <div class="row mt-5">
            <?php if( have_rows('ind_logos') ): ?>
              <?php while( have_rows('ind_logos') ): the_row(); ?>
                <div class="col mb-3 text-center">
                  <?php 
                    $image = get_sub_field('logo');
                    if( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid wow fadeInDown lozad" width="150" />
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials">
      <div class="container mb-5">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <p id="par-40">@php echo get_field('tes_heading'); @endphp</p id="par-40">
            <h3 id="h-15" class="mb-5">@php echo get_field('tes_subheading'); @endphp</h3>
            <div class="row mt-5">
              <?php if( have_rows('testimonials') ): ?>
                <?php while( have_rows('testimonials') ): the_row(); ?>
                  <div class="col-md-3 mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><br>
                    <strong><?php echo get_sub_field('title'); ?></strong><br>
                    <?php echo get_sub_field('verbiage'); ?>
                    <br>
                    <strong><div class="mt-2"><?php echo get_sub_field('name'); ?></div></strong>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="bottom mt-4">
          <a href="https://www.trustpilot.com/review/www.usbflash.co.uk?utm_medium=Trustbox&utm_source=MicroReviewCount" target="_blank"> See our reviews on <img src="@asset('images/trustpilot.png')" width="80" height="25" class="img-fluid lozad"></a>
        </div>
      </div>
    </section>

  @endwhile
@endsection
