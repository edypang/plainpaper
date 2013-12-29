<?php get_header(); ?>

<div id="index" class="main clearfix">
  <?php if ( have_posts() ): ?>
  <?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
    <figure class="img-cover img-responsive">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </figure>
    <?php } ?>
    <header class="title">
      <h1 class="main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </header>
    <div class="time">
      <p class="sub"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>. <?php _e("By", "plainpaper"); ?> <?php the_author_posts_link(); ?> in <?php echo get_the_category_list( ', '); ?></p>
    </div>
    <div class="excerpt">
      <p><?php echo(get_the_excerpt()); ?></p>
    </div>
    <div class="continue">
      <p><a href="<?php the_permalink(); ?>">Continue reading</a></p>
    </div>
  </article>
  <?php endwhile; ?>
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