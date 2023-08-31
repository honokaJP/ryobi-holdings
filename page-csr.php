<?php
/*
Template Name: 両備ホールディングスのCSR
*/
?><?php get_header(); ?>
	<article class="gPage">
		<header class="gPageHeader">
			<div class="modBlockEllipse">
				<div class="modBlockEllipse__outer">
					<div class="modBlockEllipse__inner jsBackgroundParallax myTitleBg">
						<h1 class="modBlockEllipse__title">両備ホールディングスのCSR</h1>
					</div>
				</div>
			</div>
		</header>
		<div class="gPageBody">
			<div class="container">
				<ul class="modListTile jsFadeUpList">
					<li>
						<a href="<?php echo home_url();?>/csr/environment/">
							<figure>
								<span class="photo">
									<picture>
										<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/csr/img_navi_01_sp.jpg" media="(max-width:768px)">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/csr/img_navi_01_pc.jpg" alt="">
									</picture>
								</span>
								<figcaption>環境への取り組み</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url();?>/csr/safety/">
							<figure>
								<span class="photo">
									<picture>
										<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/csr/img_navi_02_sp.jpg" media="(max-width:768px)">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/csr/img_navi_02_pc.jpg" alt="">
									</picture>
								</span>
								<figcaption>安全への取り組み</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url();?>/csr/work/">
							<figure>
								<span class="photo">
									<picture>
										<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/csr/img_navi_03_sp.jpg" media="(max-width:768px)">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/csr/img_navi_03_pc.jpg" alt="">
									</picture>
								</span>
								<figcaption>行動計画</figcaption>
							</figure>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</article>
<?php get_footer(); ?>