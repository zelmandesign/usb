<article @php post_class() @endphp>
  <header class="text-center">
    <a href="{{ get_permalink() }}">
      <div class="zoom">
        @php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class'  => 'img-fluid grow lozad' ) ); } @endphp
      </div>
    <h4 class="entry-title">{{ get_the_title() }}</h4></a>
  </header>
  <div class="entry-summary text-center">
    <div class="container">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
