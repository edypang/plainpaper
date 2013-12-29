<?php get_header(); ?>

<div id="article" class="main clearfix">
  <?php if ( have_posts() ): ?>
  <?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
    <figure class="img-cover img-responsive">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </figure>
    <?php } ?>
    <header class="title">
      <h1 class="main-title"><?php the_title(); ?></h1>
    </header>
    <div class="time">
      <p class="sub"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>. <?php _e("By", "plainpaper"); ?> <?php the_author_posts_link(); ?> <?php edit_post_link(); ?></p>
    </div>
    <div class="content img-responsive">
      <?php the_content(); ?>
    </div>
  </article>
  <?php endwhile; ?>
  <nav id="action" class="main-wrap">
    <ul id="navigate-action">
      <li class="prev btn-wrap">
        <?php next_post_link('%link', '<i class="picon-arrow-left"></i> Previous page'); ?>
      </li>
      <li class="next btn-wrap">
        <?php previous_post_link('%link', 'Next page <i class="picon-arrow-right"></i>'); ?>
      </li>
    </ul>
  </nav><!-- /#action -->
  <?php endif; ?>
  <?php comments_template( '', true ); ?>
</div>

<?php get_footer(); ?>