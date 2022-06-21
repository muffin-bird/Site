<?php get_header() ;?>

<div id="content" class="w_inner">
          <ul>
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
             <li>
                <a href="<?php the_permalink() ;?>">
                  <div class="date"><?php echo get_the_date("Y.m.d") ;?></div>
                  <div class="ttl"><?php the_title() ;?></div>
                </a>
             </li>
             <?php endwhile; endif; ?><!-- /ループ終わり -->
          </ul>

</div>

<?php get_footer() ;?>