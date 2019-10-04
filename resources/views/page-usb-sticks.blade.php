@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
      @include('partials.page-header')

      <h1 id="cat-h1" class="mt-2">CHOOSE A USB CATEGORY</h1>
      
      <?php if( have_rows('add_new_usb_category') ): 
          while( have_rows('add_new_usb_category') ): the_row(); ?>
          <div class="grey-inside mb-2 container">
          <?php if ( get_sub_field( 'image_right' ) ): ?>
            <div class="row">
              <div class="col-lg text-right d-block d-lg-none" id="img-cat">
                @php $image = get_sub_field('category_thumb'); @endphp
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid lozad">
              </div>
              <div class="col-lg d-flex justify-content-center align-items-center">
                <div class="cat-wrap">
                  <p id="par-40"><?php echo get_sub_field('heading'); ?></p>
                  <h2><?php echo get_sub_field('subheading'); ?></h2>
                  <div class="cat-page-desc mt-4 mb-4"><?php echo get_sub_field('description'); ?></div>
                  <a href="<?php echo get_sub_field('category_url'); ?>" class="btn btn-danger">More Info</a>
                </div>
              </div>
              <div class="col-lg text-right d-none d-lg-block" id="img-cat">
                @php $image = get_sub_field('category_thumb'); @endphp
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid lozad">
              </div>
            </div>
            <?php else: ?>
            <div class="row">
              <div class="col-lg" id="img-cat">
                @php $image = get_sub_field('category_thumb'); @endphp
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid lozad">
              </div>
              <div class="col-lg d-flex justify-content-center align-items-center">
                <div class="cat-wrap">
                  <p id="par-40"><?php echo get_sub_field('heading'); ?></p>
                  <h2><?php echo get_sub_field('subheading'); ?></h2>
                  <div class="cat-page-desc mt-4 mb-4"><?php echo get_sub_field('description'); ?></div>
                  <a href="<?php echo get_sub_field('category_url'); ?>" class="btn btn-danger">More Info</a>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      
      @include('partials.content-page')
    </div>
  @endwhile
@endsection
