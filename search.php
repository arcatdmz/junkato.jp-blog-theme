<?php get_header(); ?>
      
      <div class="container">
      
        <div id="content" class="clearfix row">
        
          <div id="main" class="col col-md-8 clearfix" role="main">
          
            <ol class="breadcrumb"><li><a href="https://junkato.jp/ja/blog">Home</a></li><li>「<?php echo esc_attr(get_search_query()); ?>」<span><?php _e("の検索結果","bonestheme"); ?></span></li></ol>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
              
              <header class="article-header">
                
                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                
                <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
              
              </header> <!-- end article header -->
            
              <section class="post_content entry-content" style="padding-bottom: 0">
                <?php the_excerpt('<span class="read-more">' . __("続きを読む <i class=\"fa fa-arrow-circle-right\"></i>","bonestheme") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
            
              </section> <!-- end article section -->
              
              <footer>
            
                
              </footer> <!-- end article footer -->
            
            </article> <!-- end article -->
            
            <?php endwhile; ?>  
            
            <?php if (function_exists("emm_paginate")) { ?>
              <?php emm_paginate(); ?>

            <?php } else { // if it is disabled, display regular wp prev & next links ?>
              <nav class="wp-prev-next">
                <ul class="clearfix">
                  <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
                  <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
                </ul>
              </nav>
            <?php } ?>      
            
            <?php else : ?>
            
            <!-- this area shows up if there are no results -->
            
            <article id="post-not-found">
            <!--
                <header>
                  <h2><?php _e("見つかりませんでした", "bonestheme"); ?></h2>
                </header>
            -->
                <section class="post_content">
                  <p><?php _e("検索結果が見つかりませんでした。違う検索ワードで試してみてください。", "bonestheme"); ?></p>
                </section>
                <footer>
                </footer>
            </article>
            
            <?php endif; ?>
        
          </div> <!-- end #main -->
            
            <?php get_sidebar(); // sidebar 1 ?>
      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

<?php get_footer(); ?>