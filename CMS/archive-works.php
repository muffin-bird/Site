<?php get_header() ;?>

<div id="content" class="page_wrap w_inner">
<div class="sec_head">制作実績</div>
        <div class="archive_list">
          <?php
          $args = array(
            'post_type' => 'works',
            'posts_per_page' => 6
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
          ?>
          <ul>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink() ;?>">
                <div class="img"><img src="<?php echo CFS()->get('thumbnail') ;?>" width="300" height="180" alt=""></div>
                <div class="type">業種 : <?php echo CFS()->get('type') ;?></div>
                <div class="client">クライアント : <?php echo CFS()->get('client') ;?></div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <?php endif; ?>  
</div>

<?php get_footer() ;?>