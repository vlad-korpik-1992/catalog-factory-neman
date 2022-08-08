<?php

get_header('single');?>

<section class="error-page">
	<div class="wrapper">
		<div class="error-page__inner">
			<h1 class="error-page__title">404</h1>
			<h2 class="error-page__subtitle">Ой! Эта страница не может быть найдена.</h2>
			<a class="error-page__link" href="<?php echo site_url(); ?>">Перейти на главную</a>
		</div>
	</div>
</section>

<?php get_footer();?>
