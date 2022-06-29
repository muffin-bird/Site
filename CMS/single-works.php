<?php get_header(); ?>

  <div id="content" class="w_inner single_works_container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="thumb">
      <img src="<?php echo CFS()->get('thumbnail') ;?>" width="450" height="300" alt="">
    </div>
    <div class="works_txt">
      <div class="info">
        <div class="type">業種 : <?php echo CFS()->get('type') ;?></div>
        <div class="client">クライアント : <?php echo CFS()->get('client') ;?></div>
      </div>
      <div class="workflow">
        <div class="head">ワークフロー</div>
        <div class="con"><?php echo CFS()->get('workflow') ;?></div>
      </div>
      <div class="outcome">
        <div class="head">成果</div>
        <div class="con"><?php echo CFS()->get('result') ;?></div>
      </div>
      <div class="btn_link"><?php echo CFS()->get('link') ;?></div>
    </div>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>