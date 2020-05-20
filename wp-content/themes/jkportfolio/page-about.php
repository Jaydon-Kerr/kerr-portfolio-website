
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">

			<?php 

				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
			?>

					<div style="height: 8em;">
						<div class="col-33 centered" style="padding-top: 2em;">
							<a href="<?php echo get_home_url(); ?>" class="bck-arw"><i class="fas fa-arrow-left fa-2x"></i></a>
						</div>
						<div class="col-33 centered" style="padding-top: 2.8em;">
							<h1><?php the_title(); ?></h1> 
						</div>
					</div>

					<div class="container about">
			<?php

					the_content();

				endwhile;
				endif; 

			?>

						<ul>
							<li>
								<span class="highlight">Programming Technologies</span>:
								<ul>
									<li>HTML</li>
									<li>CSS</li>
									<li>Less CSS</li>
									<li>BEM CSS Naming Convention</li>
									<li>JavaScript</li>
									<li>jQuery</li>
									<li>PHP</li>
									<li>C Sharp</li>
									<li>SQL</li>
								</ul>
							</li>
						</ul>
						<ul>
							<li>
								<span class="highlight">Repositories</span>:
								<ul>
									<li>GitHub</li>
								</ul>
							</li>
						</ul>
						<ul>
							<li>
								<span class="highlight">Database Software</span>:
								<ul>
									<li>MySQL</li>
									<li>Microsoft Access</li>
									<li>XAMPP</li>
									<li>MAMP</li>
									<li>Local by Flywheel </li>
								</ul>
							</li>
						</ul>
						<ul>
							<li>
								<span class="highlight">Operating Systems</span>:
								<ul>
									<li>MacOS X</li>
									<li>Windows 10</li>
									<li>Linux Ubuntu</li>
								</ul>
							</li>
						</ul>
						<ul>
							<li>
								<span class="highlight">Server Software</span>:
								<ul>
									<li>Apache2</li>
									<li>Microsoft IIS</li>
								</ul>
							</li>
						</ul>
						<ul>
							<li>
								<span class="highlight">Content Management Systems</span>:
								<ul>
									<li>WordPress</li>
									<li>Drupal</li>
								</ul>
							</li>
						</ul>
						<ul>
							<li>
								<span class="highlight">Software Applications</span>:
								<ul>
									<li>Adobe Photoshop</li>
									<li>Adobe Illustrator</li>
									<li>Adobe InDesign</li>
									<li>Adobe Animate</li>
									<li>Adobe Premiere Pro</li>
									<li>Microsoft Office Suite</li>
									<li>Affinity Photo</li>
									<li>Affinity Designer</li>
									<li>Affinity Publisher</li>
									<li>Final Cut Pro</li>
									<li>Logic Pro X</li>
								</ul>
							</li>
						</ul>

						<p>Reach out to me at sample@example.com, I would love to hear from you!</p>
					</div>
		</main>
	</div>
<?php get_footer(); ?>