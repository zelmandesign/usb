@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container pb-5">
      @include('partials.page-header')
    </div>

    <div class="map">
      @php echo get_field('google_maps_iframe_code'); @endphp
    </div>

    <div class="container" id="contact-us-container">
      <div class="row">
        <div class="col-md contact-us-form">
          <h3>Enquiry</h3>
          @php echo do_shortcode('[contact-form-7 id="580" title="Contact Us - Enquiry"]') @endphp

        </div>
        <div class="col-md">
          <div class="p-4">
            @php echo get_field('verbiage'); @endphp

            <div class="row mt-4 mb-4">
              <div class="col-md-2 col-3 text-center">
                <img src="@asset('images/Contact-Us-Icon.png')" class="mt-1 lozad">
              </div>
              <div class="col">
                <b>Got a question? </b><br>
                <a href="mailto:@php the_field('email', 'option'); @endphp">@php the_field('email', 'option'); @endphp<br></a>
              </div>
            </div>

            <div class="row mt-4 mb-4">
              <div class="col-md-2 col-3 text-center">
                <img src="@asset('images/Call-Us-Icon.png')" class="lozad">
              </div>
              <div class="col">
                <b>Give us a call</b><br>
                <a href="tel:@php the_field('telephone', 'option'); @endphp">@php the_field('telephone', 'option'); @endphp</a><br>
              </div>
            </div>

            <div class="row mt-4 mb-4">
              <div class="col-md-2 col-3 text-center">
                <img src="@asset('images/Address-Icon.png')" class="lozad">
              </div>
              <div class="col">
                <b>Pop it in the post</b><br>
                @php the_field('address', 'option'); @endphp
              </div>
            </div>

            <div class="row mt-4 mb-4">
              <div class="col-md-2 col-3 text-center">
                <img src="@asset('images/Social-Thumb-Icon.png')" class="lozad">
              </div>
              <div class="col d-inline-block">
                <b>Lets get social</b><br>
                <a href="@php the_field('facebook', 'option'); @endphp" target="_blank"><img src="@asset('images/USB-Flash-Facebook-Icon.svg')" width="40" height="40" class="mt-2 mr-1 lozad"></a>
                <a href="@php the_field('twitter', 'option'); @endphp" target="_blank"><img src="@asset('images/USB-Flash-Twitter-Icon.svg')" width="40" height="40" class="mt-2 mr-1 lozad"></a>
                <a href="@php the_field('instagram', 'option'); @endphp" target="_blank"><img src="@asset('images/USB-Flash-Instagram-Icon.svg')" width="40" height="40" class="mt-2 mr-1 lozad"></a>
              </div>
            </div>
          </div>    
        </div>
      </div>

      @include('partials.content-page')
    </div>
  @endwhile
@endsection
