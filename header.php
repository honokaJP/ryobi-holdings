<?php

//デフォルトディスクリプション(All in One SEO Pack対応) functions-front.php内で参照
global $gDescription;
$gDescription  = get_bloginfo('description');

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="岡山,両備ホールディングス,両備グループ,バス,トラック,タクシー,フェリー,ホテル,スーパー,不動産,ボウリング,自動車整備,セキュリティ,観光,旅行">
	<?php if(is_home()): ?>
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo home_url('/') ?>">
	<meta property="og:title" content="<?php bloginfo('name') ?>">
	<meta property="og:description" content="<?php bloginfo('description') ?>">
	<?php else: ?>
	<meta property="og:type" content="article">
	<meta property="og:url" content="<?php the_permalink() ?>">
	<meta property="og:title" content="<?php echo get_post_meta($post->ID, _aioseop_title, true); ?> | <?php bloginfo('name') ?>">
	<meta property="og:description" content="<?php echo get_post_meta($post->ID, _aioseop_description, true); ?>">
	<?php endif; ?>
	<meta property="og:locale" content="ja_JP">
	<meta property="og:site_name" content="<?php bloginfo() ?>">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/ogimage.jpg">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/android-chrome-256x256.png">
	<?php wp_head(); ?>
</head>
<body <?php if ( is_home() || is_front_page() ) : ?>id="top"<?php else : ?>id="<?php $post = get_page($page_id); echo $post->post_name; ?>"<?php endif; ?>>
	<?php /* <div id="loading"></div>*/?>
	<div id="wrapper">
		<header id="header" class="gHead <?php if ( is_home() || is_front_page() ) : ?>-top<?php endif; ?>">
			<div class="gHead__inner">
				<div class="gHead__logo">
					<h1><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_hd.svg" alt="RYOBI HOLDINGS"></a></h1>
				</div>
				<div class="gNavToggle">
					<a href="" role="button" aria-expanded="true">
						<span class="bar"></span>
					</a>
				</div>
				<nav class="gHead__navi gNav">
					<div class="gNav__inner">
						<div class="gNav__list">
							<ul class="gNav__listInner">
								<?php /*<li class="gNav__listItem">
									<span><span>新着情報</span></span>
									<ul>
										<li><a href="https://ryobi.gr.jp/news/" target="_blank">ニュースリリース</a></li>
										<li><a href="https://ryobi.gr.jp/message/" target="_blank">代表メッセージ</a></li>
										<li><a href="https://ryobi.gr.jp/news/ryobinews/topics/" target="_blank">トピックス</a></li>
									</ul>
								</li> */ ?>
								<li class="gNav__listItem">
									<a href="<?php echo home_url();?>/about/" <?php if(is_page('about')){ ?>aria-current="page"<?php } ?>><span>会社概要</span></a>
									<ul>
										<li><a href="<?php if(!is_page('about')){ ?><?php echo home_url();?>/about/<?php } ?>#section02">経営理念・経営方針</a></li>
										<li><a href="<?php if(!is_page('about')){ ?><?php echo home_url();?>/about/<?php } ?>#section03">社内カンパニー</a></li>
										<li><a href="<?php if(!is_page('about')){ ?><?php echo home_url();?>/about/<?php } ?>#section04">沿革</a></li>
									</ul>
								</li>
								<li class="gNav__listItem"><a href="<?php echo home_url();?>/company/" <?php if(is_page('company')){ ?>aria-current="page"<?php } ?>>カンパニー紹介</a></li>
								<li class="gNav__listItem">
									<a href="<?php echo home_url();?>/csr/" <?php if(is_page('csr') || is_page('environment') || is_page('safety') || is_page('work')){ ?>aria-current="page"<?php } ?>><span>CSR</span></a>
									<ul>
										<li><a href="<?php echo home_url();?>/csr/environment/">環境への取り組み</a></li>
										<li><a href="<?php echo home_url();?>/csr/safety/">安全への取り組み</a></li>
										<li><a href="<?php echo home_url();?>/csr/work/">行動計画</a></li>
									</ul>
								</li>
								<li class="gNav__listItem"><a href="<?php echo home_url();?>/contact/" <?php if(is_page('contact')){ ?>aria-current="page"<?php } ?>><span>お問い合わせ</span></a></li>
								<li class="gNav__listItem"><a href="https://ryobi.gr.jp/saiyo/" target="_blank"><span>採用情報</span></a></li>
								<li class="gNav__listItem">
									<a href="https://ryobi.gr.jp/andproject/" target="_blank"><span>&amp;プロジェクト</span></a>
									<ul>
										<li><a href="https://ryobi.gr.jp/andproject/#about" target="_blank">&amp;プロジェクトについて</a></li>
										<li><a href="https://ryobi.gr.jp/andproject/#media" target="_blank">&amp;ムービー</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="gNav__logo">
							<a href="https://ryobi.gr.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_ryobi.svg" alt="両備グループ"></a>
						</div>
					</div>
				</nav>
			</div>
		</header><!--header-->
		<main id="contents">
