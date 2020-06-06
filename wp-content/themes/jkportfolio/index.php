
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">
			<div id="top" class="content-header container">
				<h1>Hello, I'm <span class="highlight">Jaydon</span>.</h1>
				<h1>I'm a <span class="highlight">web designer</span> and <span class="highlight">developer</span>.</h1>
				<br>
				<video width="1280" height="720" controls>
					<source src="" type="video/mp4">
					Your browser does not support video tags - sad day :(
				</video>
				<!-- downward arrow icon goes here -->
				<div class="centered pad-bot">
					<h3 class="pad-top pad-bot">See what I've made.</h3>
					<i class="fas fa-long-arrow-alt-down fa-4x"></i>
				</div>
				

				<div class="book-nav centered">
					<ul class="book-nav__list">
						<li><a href="#websites" class="book-nav__link">Websites</a></li>
						<li><a href="#javascript" class="book-nav__link">JavaScript</a></li>
						<li><a href="#graphics" class="book-nav__link">Graphics</a></li>
					</ul>
				</div>
				<a href="https://github.com/Jaydon-Kerr/kerr-portfolio-website">
					<div class="button__wrapper">
		           		<button class="button button--dark button--big">See this website's code</button>
			        </div>
		        </a>
			</div>
			<div>
				<div id="websites" class="content-project content-project--teal container">
					<h1>Websites</h1>

					<?php 
						
						$websites = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'website',
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);

						while ($websites->have_posts())
						{

							$websites->the_post();
							// fetch the featured image
							$featured_image = get_field('featured_image');
							$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)
							?> 
							<a href="<?php the_permalink(); ?>">
							<div class="content-project__container content-project__container--teal">
								<div class="content-project__overlay"></div>
								<img class="content-project__image" src="<?php echo esc_url($featured_image_url); ?>">
								<h2 class="pad-top content-project__title"><?php the_title(); ?></h2> 
							</div>
							</a>
							<?php
						}

						wp_reset_postdata();
						
					?>

				</div>
				<div id="javascript" class="content-project content-project--green container">
					<h1>JavaScript</h1>
					<?php 
						
						$javascript = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'javascript',
							'orderby' => 'date',
							'order' => 'ASC'
							)
						);

						while ($javascript->have_posts())
						{

							$javascript->the_post();
							// fetch the featured image
							$featured_image = get_field('featured_image');
							$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)
							?> 
							<a href="<?php the_permalink(); ?>">
								<div class="content-project__container content-project__container--green">
									<div class="content-project__overlay"></div>
									<img class="content-project__image" src="<?php echo esc_url($featured_image_url); ?>">
									<h2 class="pad-top content-project__title"><?php the_title(); ?></h2> 
								</div>
							</a>
							<?php
						}

						wp_reset_postdata();
						
					?>
				</div>
				<div id="graphics" class="content-project content-project--yellow container">
					<h1>Graphics</h1>
					<?php 
						
						$graphics = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'graphic',
							'orderby' => 'date',
							'order' => 'DESC'
							)
						);

						while ($graphics->have_posts())
						{

							$graphics->the_post();
							// fetch the featured image
							$featured_image = get_field('featured_image');
							$featured_image_url = $featured_image['sizes']['large']; // (thumbnail, medium, large, full or custom size)
							?> 
							<a href="<?php the_permalink(); ?>">
								<div class="content-project__container content-project__container--yellow">
									<div class="content-project__overlay"></div>
									<img class="content-project__image content-project__image--graphics" src="<?php echo esc_url($featured_image_url); ?>">
									<h2 class="pad-top content-project__title"><?php the_title(); ?></h2> 
								</div>
							</a>
							<?php
						}

						wp_reset_postdata();
						
					?>
				</div>
				<div class="color color-dark-blue">
					<p class="pad-top pad-bot centered"><a href="#top">Back to top</a></p>
				</div>
			</div>
		</main>
	</div>



<?php get_footer(); ?>