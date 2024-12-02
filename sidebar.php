  <!-- the sidebar - in WordPress this will be populated with widgets -->
  <aside class="sidebar widget-area one-third right" role="complementary">

    <div class="widget-container">	
      <h3 class="widget-title">최근 공지</h3>
        <?php
        query_posts( array(
          'category_name'  => 'notice',
          'posts_per_page' => 3
        ) );
        ?>
        <ul>
          <?php
          while ( have_posts() ) : the_post();
          ?>
          <li><a href="<?php the_permalink();?> </a>
          the_title();
          </li>
          
          <a href="<?php ?>"> </a>

          <?php
          endwhile;
          ?>

      <p>This is a sidebar widget - in your WordPress theme you can set these up to display across your site.</p>
    </div><!-- .widget-container -->

    <div class="widget-container">	
      <h3 class="widget-title"3>Another sidebar widget</h3>
      <p>A second sidebar widget - maybe you could use a plugin to display a social media feed, or simply list your most recent posts.</p>
    </div><!-- .widget-container -->

  </aside>