<?php get_header(); ?>

<div id="index" class="main clearfix">
  

  <section class="featured featured-none main-wrap">
      <header class="title">
          <h1 class="main-title">
          Search
          </h1>
          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <input type="search" class="search-field active" placeholder="Search &hellip;" value="<?php echo get_search_query();?>" name="s">
            <input type="submit" class="search-submit" value="Search">
          </form>
      </header>
  </section>

  <?php if ( have_posts() ): ?>
  <section class="post-lists clearfix">

  <?php while (have_posts()) : the_post(); ?>

   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h3 class="list-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p class="sub"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>. <?php _e("By", "plainpaper"); ?> <?php the_author_posts_link(); ?> in <?php echo get_the_category_list( ', '); ?></time></p>
   </article>

  <?php endwhile; ?>
  
  </section>
  <nav id="action" class="main-wrap">
    <ul id="navigate-action">
      <li class="next btn-wrap">
        <?php previous_posts_link( __( '<i class="picon-arrow-left"></i> Newer' ) ); ?>
      </li>
      <li class="prev btn-wrap">
        <?php next_posts_link( __( 'Older <i class="picon-arrow-right"></i>' ) ); ?>
      </li>
    </ul>
  </nav><!-- /#action -->
  <?php else: ?>

  <section id="post-lists clearfix">
    <article id="post-xxx" class="post-item main-wrap">
    <p>Nothing match with the keyword. Try <a href="#" class="do-search">another</a> key</p>
    </article>
  </section><!-- /#post-error -->

  <?php endif; ?>
</div>

<?php get_footer(); ?>