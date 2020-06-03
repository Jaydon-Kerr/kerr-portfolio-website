
<?php get_header(); ?>

		<!-- right float content -->
		<main id="right-bar">
			<script type="text/javascript" src="<?php echo get_field("code_link"); ?>"></script>
			<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>

				<?php
					the_post();
					?>
					<div class="interior-header">
						<div class="col-33 centered interior-header__left">
							<a href="<?php echo get_home_url(); ?>" class="bck-arw"><i class="fas fa-arrow-left fa-2x"></i></a>
						</div>
						<div class="col-33 centered interior-header__mid">
							<h1><?php the_title(); ?></h1> 
						</div>
					</div>
					
					<div class="content-project content-project--green container txt-lft">
						<input type="text" name="userInput" id="userInput" placeholder="Type Something:" class="textbox">

						<p class="pad-bot"><?php echo get_field("description"); ?></p>

						<div class="output" id="output">
						</div>
		                
		                <div class="button__wrapper">
		                	<a href="<?php echo get_field("github_link"); ?>">
		                		<button class="button">See the code</button>
		                	</a>
		                </div>
					</div>
		</main>
	</div>
<?php get_footer(); ?>