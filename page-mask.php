<?php
/*
Template Name: マスク動画
*/
?><?php get_header(); ?>
	<article class="gPage">
		<div class="gPageBody">
			<section class="modBlockSection mySection01" style="text-align: center; margin-top: 100px;">
				<?php
					if ( have_posts() ) : 
						while (have_posts()): the_post();
							the_content();
						endwhile;
					endif;
				?>
			</section>
		</div>
		<?php /* ?>
		<header class="gPageHeader">
			<div class="gPageHeaderTitle01">
				<div class="container">
					<div class="gPageHeaderTitle01__outer">
						<div class="gPageHeaderTitle01__inner">
							<h1 class="modTitle01" aria-hidden="false"><span class="modTitle01__inner">両備オリジナルマスクについて</span></h1>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="gPageBody">
			<section class="modBlockSection mySection01" style="text-align: center;">
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/50uy-IyyrPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</section>
		</div>
		<?php */ ?>
	</article>
<?php get_footer(); ?>
