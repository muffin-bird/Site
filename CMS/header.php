<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/sanitize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/style.css">
  <link rel="preconnect" href="<?php bloginfo('template_url') ;?>/https://fonts.googleapis.com">
  <link rel="preconnect" href="<?php bloginfo('template_url') ;?>/https://fonts.gstatic.com" crossorigin>
  <link href="<?php bloginfo('template_url') ;?>/https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <title>ホームページ制作会社</title>
  <?php wp_head(); ?>
</head>

<body>
  <header><!-- ここから ヘッダー -->
    <div class="w_inner">
      <div id="top">
        <div class="tagline">企業のホームページ制作</div>
      </div>
      <nav id="main_menu" class="w_inner">
        <ul>
          <li><a href="<?php bloginfo('url') ;?>">トップ</a></li>
          <li><a href="<?php bloginfo('url') ;?>/service">サービス</a></li>
          <li><a href="<?php bloginfo('url') ;?>/price">料金案内</a></li>
          <li><a href="<?php bloginfo('url') ;?>/news">ニュース</a></li>
          <li><a href="<?php bloginfo('url') ;?>/company">会社概要</a></li>
          <li><a href="<?php bloginfo('url') ;?>/contact">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <?php if(is_front_page()){ ?>
    <div class="header_img"><!-- TOPページ用 -->
      <img src="<?php bloginfo('template_url') ;?>/img/header_img.jpg" alt="image">
    </div>
    <?php }else if(is_page('service')){ ?>
    <div class="header_img"><!-- サービス用 -->
      <img src="<?php bloginfo('template_url') ;?>/img/header_service.jpg" alt="image">
    </div>
    <?php }else if(is_page('price')){ ?>
    <div class="header_img"><!-- 料金案内用 -->
      <img src="<?php bloginfo('template_url') ;?>/img/header_price.jpg" alt="image">
    </div>
    <?php }else if(is_page('company')){ ?>
    <div class="header_img"><!-- 会社概要用 -->
      <img src="<?php bloginfo('template_url') ;?>/img/header_company.jpg" alt="image">
    </div>
    <?php }else if(is_page('contact')){ ?>
    <div class="header_img"><!-- お問い合わせ用 -->
      <img src="<?php bloginfo('template_url') ;?>/img/header_contact.jpg" alt="image">
    </div>
    <?php }else if(is_post_type_archive('works')){ ?>
    <div class="header_img"><!-- 制作実績用 -->
      <img src="<?php bloginfo('template_url') ;?>/img/header_works.jpg" alt="image">
    </div>
    <?php }else if(is_archive()){ ?>
    <div class="header_img"><!-- ニュース用 -->
      <img src="<?php bloginfo('template_url') ;?>/img/header_news.jpg" alt="image">
    </div>
    <?php }else{} ?>

  </header><!-- ここまで ヘッダー -->
  
  <div id="wrap">   