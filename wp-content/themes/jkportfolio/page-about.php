
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">

			<?php 

				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
			?>

					<div class="interior-header">
						<div class="col-33 centered interior-header__left">
							<a href="<?php echo get_home_url(); ?>" class="bck-arw"><i class="fas fa-arrow-left fa-2x"></i></a>
						</div>
						<div class="col-33 centered interior-header__mid">
							<h1><?php the_title(); ?></h1> 
						</div>
					</div>

					<div class="container about">
			<?php

					the_content();

				endwhile;
				endif; 

			?>

						<p>
							Hello, I’m Jaydon. Designing and developing websites is one of my favorite things to do. I live in Happy Valley in the beautiful state of Oregon. I have been designing and developing websites for 3-4 years. I recently graduated from Oregon City’s Clackamas Community College with an AAS degree (Associate of Applied Science) in Web Design and Development.
						</p>

						<p>
							As long as I can remember, I have always been passionate about creating. I’m always interested in and enthusiastic about learning new skills. When I discovered design aesthetics and the science of programming, I found my passion and calling. I am looking forward to a long career of using creativity and web development.
						</p>

						<p>
							I love design and strategy because it is the creative side of developing a new product. Designing a new product unleashes creativity, commutates a strategic message and results in an experience for the end user.
						</p>

						<p>
							I love programming because it is the development side of forming a new product. Through it you have the power to bring the design, message and experience together forming a useful product solution in a challenging and rewarding way.
						</p>

						<p>
							When combined, creative programming and design skills are extremely powerful resulting in a seamless connection between the arrangement and the code. I love the challenge to create. Web design and development is an excellent way to combine both the art and science of creating, which is why I am a web designer and developer.
						</p>

						<p>
							Over the last 3-4 years, I have gained a considerable amount of design and programming skills that I can help others with. I am competent with the following technologies, software, content management systems and operating systems.
						</p>

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

						<p>
							Let’s create a solution together!
						</p>
						<p>
							You can connect with me at: jaydon.kerr@gmail.com
						</p>
						<p><a href="mailto:&#106;&#097;&#121;&#100;&#111;&#110;&#046;&#107;&#101;&#114;&#114;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;"><i class="fas fa-envelope-square"></i> Email</a></p>
						<p><a href="https://www.linkedin.com/in/jaydon-kerr/"><i class="fab fa-linkedin"></i> LinkedIn</a></p>
					</div>
		</main>
	</div>
<?php get_footer(); ?>