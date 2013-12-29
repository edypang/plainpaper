<?php if ( post_password_required() ) { return; } ?>

<section id="comments" class="comments main-wrap">
  
  <?php if ( have_comments() ) : global $wp_query; ?>
  
    <h3><?php comments_number( __( 'No Responses', 'plainpaper' ), __( '1 Response', 'plainpaper' ), __( '% Responses', 'plainpaper' ) ); ?></h3>
  
    <?php if ( ! empty( $comments_by_type['comment'] ) ) { ?>
      
      <ol class="commentlist">
        <?php wp_list_comments( 'avatar_size=32&type=comment' ); ?> 
      </ol><!--/.commentlist-->
      
      <?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
      <nav class="comments-nav group">
        <div class="nav-previous"><?php previous_comments_link(); ?></div>
        <div class="nav-next"><?php next_comments_link(); ?></div>
      </nav><!--/.comments-nav-->
      <?php endif; ?>

    <?php } ?>
    
    <?php if ( ! empty( $comments_by_type['pings'] ) ) { ?>      
      <ol class="pinglist">
        <?php // not calling wp_list_comments twice, as it breaks pagination
        $pings = $comments_by_type['pings'];
        foreach ($pings as $ping) { ?>
          <li class="ping">
            <div class="ping-link"><?php comment_author_link($ping); ?></div>
            <div class="ping-meta"><?php comment_date( get_option( 'date_format' ), $ping ); ?></div>
            <div class="ping-content"><?php comment_text($ping); ?></div>
          </li>
        <?php } ?>
      </ol><!--/.pinglist-->
    <?php } ?>

  <?php else: // if there are no comments yet ?>

    <?php if (comments_open()) : ?>
      <!-- comments open, no comments -->
    <?php else : ?>
      <!-- comments closed, no comments -->
    <?php endif; ?>
  
  <?php endif; ?>
  
  <?php if ( comments_open() ) { ?>
  <?php comment_form(); ?>
  <?php } ?>

</section><!--/#comments-->