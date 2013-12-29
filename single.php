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
      <p class="sub"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>. <?php _e("By", "plainpaper"); ?> <?php the_author_posts_link(); ?> in <?php echo get_the_category_list( ', '); ?> <?php edit_post_link('edit','(',')'); ?></p>
    </div>
    <div class="content img-responsive">
      <?php the_content(); ?>
    </div>
  </article>
  <?php endwhile; ?>
  <nav id="action" class="main-wrap">
    <p class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Add your response', 'plainpaper' ) . '</span>', __( 'One response', 'plainpaper' ), __( '% responses', 'plainpaper' ) ); ?></p>
    <?php echo get_the_tag_list('<p class="tags">Tagged in ',', ','</p>'); ?>
    <ul id="navigate-action">
      <li class="prev btn-wrap">
        <?php next_post_link('%link', '<i class="picon-arrow-left"></i> Newer'); ?>
      </li>
      <li class="next btn-wrap">
        <?php previous_post_link('%link', 'Older <i class="picon-arrow-right"></i>'); ?>
      </li>
    </ul>
  </nav><!-- /#action -->
  <?php endif; ?>
  <?php comments_template( '', true ); ?>
</div>

<?php get_footer(); ?>