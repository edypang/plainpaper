<?php get_header(); ?>

<div id="index" class="main clearfix">
  
  <?php if ( have_posts() ): ?>

  <section class="featured featured-none main-wrap">
      <header class="title">
          <h1 class="main-title">
          <?php if( is_author() ): ?>
            <i class="picon-user"></i> <?php echo $author_name ?>
          <?php elseif( is_category() ): ?>
            <i class="picon-folder-open"></i> <?php single_cat_title(); ?>
          <?php elseif( is_tag() ): ?>
            <i class="picon-tag"></i> <?php single_tag_title(); ?>
          <?php elseif( is_year() ): ?>
            <i class="picon-calendar"></i> <?php the_time('Y'); ?>
          <?php elseif( is_month() ): ?>
            <i class="picon-calendar"></i> <?php the_time('F Y'); ?>
          <?php else: ?>
            Archive
          <?php endif; ?>
          </h1>
          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s">
            <input type="submit" class="search-submit" value="Search">
          </form>
      </header>
  </section>

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
  <article id="post-error post-404 main-wrap">
    <header class="title">
        <h1 class="title-with-search">Nothing's here</h1>
        <form role="search" method="get" class="search-form" action=" ">
            <label>
                <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>
        <h3 class="sub-title">Posts not found.</h3>
    </header>
  </article><!-- /#post-error -->
  <?php endif; ?>
</div>

<?php get_footer(); ?>