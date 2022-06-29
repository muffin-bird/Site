<?php get_header() ;?>
<div id="content" class="page_front w_inner">
      <section class="front_service">
        <div class="sec_head">サービス</div>
        <div class="lead">ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</div>
        <ul class="s_box">
          <li>
            <div class="ttl">ホームページ制作</div>
            <div class="descri">ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</div>
          </li>
          <li>
            <div class="ttl">ランディングページ</div>
            <div class="descri">ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</div>
          </li>
          <li>
            <div class="ttl">SEOコンサルティング</div>
            <div class="descri">ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</div>
          </li>
        </ul>
      </section>
      <section class="works_list">
        <div class="sec_head">制作実績</div>
        <div class="new_list">
          <?php
          $args = array(
            'post_type' => 'works',
            'posts_per_page' => 3
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
          ?>
          <ul>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink() ;?>">
                <div class="img"><img src="<?php echo CFS()->get('thumbnail') ;?>" width="350" height="200" alt=""></div>
                <div class="type">業種 : <?php echo CFS()->get('type') ;?></div>
                <div class="client">クライアント : <?php echo CFS()->get('client') ;?></div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <?php endif; ?>  
          <div class="btn_stn"><a href="<?php bloginfo('url') ;?>/works">一覧をみる</a></div>
        </div>
      </section>
      <section class="front_news">
        <div class="sec_head">お知らせ</div>
        <div class="news_list">
          <ul>
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
             <li>
                <a href="<?php the_permalink() ;?>">
                  <div class="date"><?php echo get_the_date("Y.m.d") ;?></div>
                  <div class="ttl"><?php the_title() ;?></div>
                </a>
             </li>
             <?php endwhile; endif; ?><!-- /ループ終わり -->
            <div class="btn_stn"><a href="<?php bloginfo('url') ;?>/news">一覧をみる</a></div>
          </ul>
        </div>
      </section>
    </div>
<?php get_footer() ;?>