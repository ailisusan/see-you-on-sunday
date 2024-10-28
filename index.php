<?php get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<section id="intro" class="content-wrapper">
	
	<div class="article-container">

		<article class="article">

			<h2>Hjärtligt välkommen</h2>
						
			<p>
			Vi är en församling belägen i centrala Nyköping vid Tingshusplatsen. Vi vill vara en levande församling som med hjälp av den Helige Andes kraft och kärlek får vara en plats för läkedom till hela människan. Vi vill att alla i Nyköpingsbygden (och utanför) ska känna Guds kärlek och tror att en väsentlig del av församlingens uppdrag är att reflektera det.</p>
			
			<p>Varmt välkommen till oss!</p>
			
			
			<button class="transparent"><a href="/om">Vill du veta mer?</a></button>
	
		</article>
		
		<article class="article">
 
			<h2>Vi ses i kyrkan!</h2>
						
			<p><b>Familjegrupp</b></br>Första tisdagen i månaden kl. 17:00</p>
			<p><b>Bön i kyrkan</b></br>Varje torsdag kl. 10:00 och 19:00</p>
			<p><b>Tweenies för mellanstadiebarn</b></br>Fredag jämna veckor kl. 18:00</p>
			<p><b>Gudstjänst och gemenskap</b></br>Varje söndag kl. 15:00</p>
			
	
			<button class="transparent"><a href="/kalender">Gå till kalender</a></button>
  
		</article>

		<article class="article">

			<h2>Behöver du prata med någon?</h2>
	
			<p>Du är välkommen att höra av dig till oss och boka en tid för ett själavårdande samtal, oavsett om du är medlem eller inte. Med själavård menar vi omsorg om människans existentiella, mentala och andliga hälsa.</p>
			
			<p>Vi tror att det själavårdande samtalet kan vara till hjälp även om man inte är troende. Samtalet kan ske i kyrkan, hemma hos dig eller hos själavårdaren, via telefon eller i under en promenad.</p>
	

			<button class="transparent"><a href="/om#sjalavard">Mer om själavård</a></button>

		</article>
		
	</div>
         
	</section> <!--- Slut på introavsnitt -->

		<section id="aktuellt" class="content-wrapper">
		<h1>Aktuellt</h1>
			
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'components/post/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'components/content', 'none' );

		endif; ?>

		</section>

		<section class="kors" class="content-wrapper">
	
	<div class="content-container">
	
		<p>&#10013;</p>
        
	</div>
	
    </section>
	
	<section id="mellanbild-1" class="content-wrapper mellanbild">
	
	</section>

		

		</main>
	</div>
<?php

get_footer();
