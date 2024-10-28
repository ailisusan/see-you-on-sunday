<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Hoppsan, den här sidan finns inte!'); ?></h1>
				</header>
				<div class="page-content">
					<p><?php esc_html_e( 'Den här sidan finns inte. Prova att söka istället?' ); ?></p>

					<?php get_search_form(); ?>

				</div>
			</section>
		</main>
	</div>
<?php
get_footer();
