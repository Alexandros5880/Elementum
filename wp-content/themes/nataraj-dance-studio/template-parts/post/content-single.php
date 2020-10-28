<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage nataraj-dance-studio
 * @since 1.0
 * @version 1.4
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">   
    <div class="article-text">
      <h1><?php esc_html(the_title()); ?></h1>
      <?php the_post_thumbnail(); ?>
      <div class="metabox"> 
        <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><i class="far fa-calendar-alt"></i><span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="screen-reader-text"><?php the_time( get_option( 'date_format' ) ); ?></span></a><span>|</span>
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><i class="fas fa-user"></i><span class="entry-author"><?php esc_html(the_author()); ?></span></a><span>|</span>
        <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','nataraj-dance-studio'), __('0 Comments','nataraj-dance-studio'), __('% Comments','nataraj-dance-studio') ); ?></span>
      </div>    
      <div class="text-content"><p><?php the_content(); ?></p></div>
    </div>
    <div class="clearfix"></div> 
  </div>
</div>


