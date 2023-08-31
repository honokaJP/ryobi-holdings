<?php get_header(); ?>

	<div class="myVisual jsTopVisual">
		<div class="myVisualMovie jsTopVisualMovie">
			<div id="player"></div>
		</div>
		<a href="#scrollPos" class="myVisual__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/icon_mv.svg" alt=""></a>
		<div id="scrollPos" class="myVisual__target"></div>
	</div>
	<div class="myContentArea">
		<section class="mySection01 modBlockNews jsFadeUp">
			<div class="mySection01__bgparts -parts01 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart01.png" alt="" class="jsFadeUp"></div>
			<div class="mySection01__bgparts -parts02 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart02.png" alt="" class="jsFadeUp"></div>
			<div class="container">
				<div class="modBlockNewsMain">
					<header class="modBlockNewsMain__header">
						<h2 class="modBlockNewsMain__headerTtl">what’s new</h2>
						<ul class="modBlockNewsMain__headerBtn">
							<li><a href="https://ryobi.gr.jp/news/" target="_blank">ニュースリリース</a></li>
							<li><a href="https://ryobi.gr.jp/message/" target="_blank">代表メッセージ</a></li>
							<li><a href="https://ryobi.gr.jp/news/ryobinews/topics/" target="_blank">トピックス</a></li>
						</ul>
					</header>
					<div class="modBlockNewsMain__body">
						<ul class="modListNews">
						<?php /*--- 両備グループRSSフィード 開始 ---*/ ?>
						<?php $rss_list   = my_front_ryobi_rss(); ?>
						<?php $rss_count  = 0; ?>
						<?php foreach ($rss_list as $rss) : ?>
						<?php   $rss_count++; ?>
						<?php   if ($rss_count > 5 ) break; ?>
							<li class="item">
								<a href="<?php echo $rss['link']; ?>" target="_blank">
									<span class="cat"><?php echo ($rss['type'] == "message"?"代表メッセージ":"ニュースリリース"); ?></span>
									<span class="date"><?php echo date('Y年n月j日', strtotime($rss['pubDate'])); ?></span>
									<span class="name"><?php echo $rss['title']; ?></span>
								</a>
							</li>
						<?php endforeach; ?>
						<?php /*--- 両備グループRSSフィード 終了 ---*/ ?>
						</ul>
					</div>
				</div>
				<div class="modBlockNewsSub">
					
						<div style="text-align: center; margin-bottom: 40px;">
			<!--<a href="<?php echo get_template_directory_uri(); ?>/assets/img/top/HP公表内容.jpg" target="_blank"><img src="https://www.ryobi-holdings.jp/master/wp-content/uploads/2021/08/2021y08m04d_170728224.png"></a>-->
		</div></div>						
				<!-- <div class="modBlockNewsSub">
					<div class="modBlockBox01">
						<div class="modBlockBox01__text">
							<p>地方バス路線網維持・発展に向けた<br class="modSpOnly">特設情報サイトを公開しました。</p>
						</div>
						<div class="modBlockBox01__button">
							<a href="https://www.ryobi-holdings.jp/rosenbus-okayama/" target="_blank" class="modBtn01">チェックする</a>
						</div>	
					</div><br>
					<div class="modBlockNewsSub">
					<div class="modBlockBox01">
						<div class="modBlockBox01__text">
							<p>政治資金の寄附に関するご報告</p>
						</div>
						<div class="modBlockBox01__button">
							<a href="https://www.ryobi-holdings.jp/master/wp-content/uploads/2021/02/news.pdf" target="_blank" class="modBtn01">チェックする</a>
						</div>					
					</div>
				</div>
			</div> -->
		</section>
		<section class="mySection02">
			<div class="container">
				<header class="mySection02__header">
					<h2 class="mySection02__ttl modTxtVertical jsTopTtlVertical01">
						<span class="column">
							<span class="charWrap">
								<span class="char">両</span>
								<span class="char">備</span>
								<span class="char">
									<span class="hd">
										<span class="main">HD</span>
										<span class="sub">
											<span class="vertical">ホ</span>
											<span class="vertical">ー</span>
											<span class="vertical">ル</span>
											<span class="vertical">デ</span>
											<span class="vertical">ィ</span>
											<span class="vertical">ン</span>
											<span class="vertical">グ</span>
											<span class="vertical">ス</span>
										</span>
									</span>
								</span>
								<span class="char">は</span>
							</span>
							<span class="charWrap">
								<span class="char">ひ</span>
								<span class="char">と</span>
								<span class="char">味</span>
								<span class="char">違</span>
								<span class="char">う</span>
								<span class="char">ん</span>
								<span class="char">で</span>
								<span class="char">す</span>
								<span class="char vertical">。</span>
							</span>
						</span>
					</h2>
				</header>
				<div class="mySection02__body">
					<div class="mySection02__bgparts -parts01 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart03.png" alt="" class="jsFadeUp"></div>
					<div class="mySection02__bgparts -parts02 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart04.png" alt="" class="jsFadeUp"></div>
					<div class="mySection02__button jsFadeUp">
						<a href="<?php echo home_url();?>/about/" class="modBtn01">違いを知る</a>
					</div>
					<div class="mySection02__navi">
						<ul class="list ">
							<li class="item jsFadeUp">
								<a href="<?php echo home_url();?>/about/#section02">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_sc2_navi01.png" alt="">
									<h3 class="txt">経営理念・経営方針</h3>
								</a>
							</li>
							<li class="item jsFadeUp">
								<a href="<?php echo home_url();?>/about/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_sc2_navi02.png" alt="">
									<h3 class="txt">会社概要</h3>
								</a>
							</li>
							<li class="item jsFadeUp">
								<a href="https://ryobi.gr.jp/message/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_sc2_navi03.png" alt="">
									<h3 class="txt">小嶋代表メッセージ</h3>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<div class="mySection03">
			<div class="mySection03__bgparts -parts01 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart05.png" alt="" class="jsFadeUp"></div>
			<div class="mySection03__bgparts -parts02 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart06.png" alt="" class="jsFadeUp"></div>
			<div class="mySection03__bgparts -parts03 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart07.png" alt="" class="jsFadeUp"></div>
			<div class="mySection03__bgparts -parts04 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart08.png" alt="" class="jsFadeUp"></div>
			<div class="container">
				<p class="mySection03__ttl modTxtVertical jsTopTtlVertical02">
					<span class="column">
						<span class="charWrap">
							<span class="char">両</span>
							<span class="char">備</span>
							<span class="char">ホ</span>
							<span class="char vertical">ー</span>
							<span class="char">ル</span>
							<span class="char">デ</span>
							<span class="char vertical point">ィ</span>
							<span class="char">ン</span>
							<span class="char">グ</span>
							<span class="char">ス</span>
							<span class="char">株</span>
							<span class="char">式</span>
							<span class="char">会</span>
							<span class="char">社</span>
							<span class="char">は</span>
						</span>
						<span class="charWrap">
							<span class="char">両</span>
							<span class="char">備</span>
							<span class="char">グ</span>
							<span class="char">ル</span>
							<span class="char vertical">ー</span>
							<span class="char">プ</span>
							<span class="char">の</span>
							<span class="char">な</span>
							<span class="char">か</span>
							<span class="char">の</span>
							<span class="char">1</span>
							<span class="char">社</span>
							<span class="char">で</span>
							<span class="char">す</span>
							<span class="char vertical">。</span>
						</span>
					</span>
				</p>
			</div>
		</div>
		
		<section class="mySection04">
			<div class="mySection04__bgparts -parts01 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart09.png" alt="" class="jsFadeUp"></div>
			<div class="mySection04__bgparts -parts02 jsBgParts"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart10.png" alt="" class="jsFadeUp"></div>
			<div class="container">
				<header class="mySection04__header">
					<h2 class="mySection04__ttl"><a href="<?php echo home_url();?>/company/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_company.gif" alt="カンパニー紹介"></a></h2>
				</header>
				<div class="mySection04__body">
					<div class="mySection04__box">
						<div class="item -text">
							<p class="modTxtVertical jsTopTtlVertical03">
								<span class="column">
									<span class="charWrap">
										<span class="char">社</span>
										<span class="char">会</span>
										<span class="char">は</span>
										<span class="char">常</span>
										<span class="char">に</span>
										<span class="char point">変</span>
										<span class="char">化</span>
										<span class="char">し</span>
										<span class="char">て</span>
										<span class="char">い</span>
										<span class="char">ま</span>
										<span class="char">す</span>
										<span class="char vertical">。</span>
									</span>
									<span class="charWrap">
										<span class="char">両</span>
										<span class="char">備</span>
										<span class="char">も</span>
										<span class="char">常</span>
										<span class="char">に</span>
										<span class="char">変</span>
										<span class="char">化</span>
										<span class="char">し</span>
										<span class="char">て</span>
										<span class="char">い</span>
										<span class="char">ま</span>
										<span class="char">す</span>
										<span class="char vertical">。</span>
									</span>
								</span>
							</p>
							<div class="bg jsBgParts">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_bgpart11.png" alt="" class="jsFadeUp">
							</div>
						</div>
						<div class="item -photo">
							<div class="jsFadeUp">
								<a href="https://ryobi.gr.jp/andproject/" target="_blank">
									<picture>
										<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_sc4_img01_sp.gif" media="(max-width:768px)">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_sc4_img01.gif" alt="つながる。ひろがる。つたえる。両備の&">
									</picture>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php get_footer(); ?>