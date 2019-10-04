<div class="page-header">
  <div id="breadcrumbs">
    <?php
    if(function_exists('bcn_display'))
    {
    bcn_display();
    }
    ?>
  </div>

  <h1>{!! App::title() !!}</h1>

  <?php if( get_field('subtitle') ): ?>
    <h2><?php the_field('subtitle'); ?></h2>
  <?php endif; ?>
  
</div>
