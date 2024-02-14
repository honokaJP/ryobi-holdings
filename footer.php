		</main>
		<div class="snsicon-1"><a href="https://www.facebook.com/GroupRyobi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns/icon-1.png"></a></div>
		<div class="snsicon-2"><a href="https://www.instagram.com/GroupRyobi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns/icon-2.png"></a></div>
		<div class="snsicon-3"><a href="https://twitter.com/GroupRyobi" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns/icon-3.png"></a></div>
		<div class="snsicon-4"><a href="https://www.youtube.com/channel/UCMJ3RxPgYKI866h5-9xgF1Q" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns/icon-4.png"></a></div>
		<footer id="footer" class="gFoot">
			<div class="gFootBanner">

				<?php /*--- バナー 開始 ---*/ ?>
				<?php if ( $my_posts = get_posts(array('post_type' => 'banner', 'posts_per_page' => -1)) ) : ?>

				<div class="gFootBannerSlider">
					<div class="jsFootBannerSlider">
				<?php   foreach ( $my_posts as $post ) : setup_postdata( $post ); ?>
				<?php     $_img   = get_field('image');   ?>
						<div class="gFootBannerSlider__item">
							<a href="<?php echo get_field('link'); ?>" <?php echo (get_field('target') == 'same') ? '' : 'target="_blank"'; ?>>
								<img src="<?php echo $_img["url"] ?>" width="290" height="70" alt="">
								<span><?php echo get_field('title'); ?></span>
							</a>
						</div>
				<?php   endforeach; ?>
					</div>
					<div class="gFootBannerButton">
						<a href="#" class="jsFootBannerButton" role="button">バナーをすべて見る</a>
					</div>
				</div>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				<?php /*--- バナー 終了 ---*/ ?>
			</div>

			<div class="gFootMain">
				<div class="container">
					<div class="gFootNav">
						<div class="gFootNav__inner">
							<div class="gFootNav__item">
								<?php /* <dl class="gFootNavList">
									<dt class="gFootNavList__header"><span>新着情報</span><span class="gFootNavList__toggle" role="button"></span></dt>
									<dd class="gFootNavList__body">
										<ul>
											<li><a href="https://ryobi.gr.jp/news/" target="_blank">ニュースリリース</a></li>
											<li><a href="https://ryobi.gr.jp/message/" target="_blank">代表メッセージ</a></li>
											<li><a href="https://ryobi.gr.jp/news/ryobinews/topics/" target="_blank">トピックス</a></li>
										</ul>
									</dd>
								</dl> */ ?>
								<dl class="gFootNavList">
									<dt class="gFootNavList__header"><a href="<?php echo home_url();?>/about/">会社概要</a><span class="gFootNavList__toggle" role="button"></span></dt>
									<dd class="gFootNavList__body">
										<ul>
											<li><a href="<?php if(!is_page('about')){ ?><?php echo home_url();?>/about/<?php } ?>#section02">経営理念・経営方針</a></li>
											<li><a href="<?php if(!is_page('about')){ ?><?php echo home_url();?>/about/<?php } ?>#section03">社内カンパニー</a></li>
											<li><a href="<?php if(!is_page('about')){ ?><?php echo home_url();?>/about/<?php } ?>#section04">沿革</a></li>
										</ul>
									</dd>
								</dl>
							</div>
							<div class="gFootNav__item">
								<dl class="gFootNavList">
									<dt class="gFootNavList__header"><a href="<?php echo home_url();?>/company/">カンパニー紹介</a><span class="gFootNavList__toggle" role="button"></span></dt>
									<dd class="gFootNavList__body -column">
										<ul>
											<li><span style="color: rgba(255,255,255,.7);">両備経営サポートカンパニー</span></li>
											<li><span style="color: rgba(255,255,255,.7);">バスユニット統括カンパニー</span></li>
											<li><a href="https://www.ryobi-holdings.jp/bus/" target="_blank">両備バスカンパニー</a></li>
											<li><a href="http://ryobitransport.com/" target="_blank">両備トランスポートカンパニー</a></li>
											<!-- <li><a href="https://www.ryobi-holdings.jp/ship/" target="_blank">両備フェリーカンパニー</a></li> -->
											<li><a href="https://www.ryobi-holdings.jp/sky/" target="_blank">両備スカイサービスカンパニー</a></li>
										</ul>
										<ul>
											<li><a href="http://ryobi-techno.com/" target="_blank">両備テクノモビリティーカンパニー</a></li>
											<li><a href="http://www.ryobi-store.jp/" target="_blank">両備ストアカンパニー</a></li>
											<li><a href="http://www.rrr.gr.jp/" target="_blank">まちづくりカンパニー</a></li>
											<li><span>両備不動産東京カンパニー</span></li>
											<!-- <li><a href="http://rrr.gr.jp/hiroshima/" target="_blank">両備不動産広島カンパニー</a></li> -->
										</ul>
									</dd>
								</dl>
							</div>
							<div class="gFootNav__item">
								<dl class="gFootNavList">
									<dt class="gFootNavList__header"><a href="<?php echo home_url();?>/csr/">CSR</a><span class="gFootNavList__toggle" role="button"></span></dt>
									<dd class="gFootNavList__body">
										<ul>
											<li><a href="<?php echo home_url();?>/csr/environment/">環境への取り組み</a></li>
											<li><a href="<?php echo home_url();?>/csr/safety/">安全マネジメント</a></li>
											<li><a href="<?php echo home_url();?>/csr/work/">行動計画</a></li>
										</ul>
									</dd>
								</dl>
							</div>
							<div class="gFootNav__item">
								<dl class="gFootNavList">
									<dt class="gFootNavList__header"><a href="https://ryobi.gr.jp/saiyo/" target="_blank">採用情報</a></dt>
								</dl>
								<dl class="gFootNavList">
									<dt class="gFootNavList__header"><a href="https://ryobi.gr.jp/andproject/" target="_blank">&amp;プロジェクト</a><span class="gFootNavList__toggle" role="button"></span></dt>
									<dd class="gFootNavList__body">
										<ul>
											<li><a href="https://ryobi.gr.jp/andproject/#about" target="_blank">&amp;プロジェクトについて</a></li>
											<li><a href="https://ryobi.gr.jp/andproject/#media" target="_blank">&amp;ムービー</a></li>
										</ul>
									</dd>
								</dl>
							</div>
						</div>
						<div class="gFootNav__bottom">
							<ul>
								<li><a href="https://www.ryobi-holdings.jp/master/wp-content/uploads/2024/01/中小MAガイドライン（第2版）遵守の宣言について.pdf" target="_blank">中小M&Aガイドライン(第2版)遵守の宣言</a></li>
								<li><a href="<?php echo home_url();?>/contact/">お問い合わせ</a></li>
								<li><a href="<?php echo home_url();?>/privacy/">プライバシーポリシー </a></li>
							</ul>
						</div>
					</div>
					<div class="gFootMap">
						<div class="gFootMap__inner">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6465.865205778355!2d133.91447576598708!3d34.65844458083912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355407c44b96f89d%3A0x36c41a5d16aea52!2z5p2c44Gu6KGX44Kw44Os44O844K5IOOCquODleOCo-OCuSDjgrnjgq_jgqjjgqI!5e0!3m2!1sja!2sjp!4v1637541752927!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
					<div class="gFootLogo">
						<div class="gFootLogo__logo">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_hd_ja_w_sp.png" media="(max-width:768px)">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_hd_ja_w.png" alt="両備ホールディングス株式会社">
							</picture>
						</div>
						<div class="gFootLogo__text">
							<p>〒700-8518　岡山県岡山市北区下石井二丁目10番12号 杜の街グレース オフィススクエア5階<br>
							TEL 086-232-2118</p>
						</div>
					</div>
				</div>
			</div>
			<div class="gFootCopyright">
				<div class="container">
					<p class="gFootCopyright__text">&copy;2019 Ryobi Holdings Co.,Ltd</p>
				</div>
			</div>
		</footer>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" defer></script>
	<?php wp_footer(); ?>
</body>
</html>
