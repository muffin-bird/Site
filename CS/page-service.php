?php get_header() ;?>
<?php
/*
Template Name: サービスページ
*/
?>
<div id="content" class="page_wrap page_service w_inner">

  <div id="main">
    <div class="page_head"><?php the_title() ;?></div>
    <ul class="s_list">
      <li>
        <div class="txt">
          <div class="ttl">1. <?php echo CFS()->get('s_title_1'); ?></div>
          <div class="head"><?php echo CFS()->get('s_head_1'); ?></div>
          <div class="descri"><?php echo CFS()->get('s_descri_1'); ?></div>
        </div>
        <div class="img">
          <img src="<?php echo CFS()->get('img'); ?>" width="300" height="200" alt="">
        </div>
      </li>
      <li>
      <div class="txt">
          <div class="ttl">2. <?php echo CFS()->get('s_title_2'); ?></div>
          <div class="head"><?php echo CFS()->get('s_head_2'); ?></div>
          <div class="descri"><?php echo CFS()->get('s_descri_2'); ?></div>
        </div>
        <div class="img">
          <img src="<?php echo CFS()->get('img_2'); ?>" width="300" height="200" alt="">
        </div>
      </li>
      <li>
      <div class="txt">
          <div class="ttl">3. <?php echo CFS()->get('s_title_3'); ?></div>
          <div class="head"><?php echo CFS()->get('s_head_3'); ?></div>
          <div class="descri"><?php echo CFS()->get('s_descri_3'); ?></div>
        </div>
        <div class="img">
          <img src="<?php echo CFS()->get('img_3'); ?>" width="300" height="200" alt="">
        </div>
      </li>
    </ul>
  </div>
</div>

<?php get_footer() ;?>