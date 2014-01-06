<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol clearfix" role="main">

							<section id="top" >
								<img id="duxFamily" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/ducksColor.png" alt="Ducks on bikes" width="883" height="372">
								<div class="into">
									<span><?php the_field('title') ?></span>
									<?php the_field('intro') ?>
								</div>
							</section>
							
							<hr>

							<section id="about" class="clearfix">
								<div class="twelvecol">
									<?php while(has_sub_field('about_section')): ?>
										<div class="threecol first">
											<h2><?php the_sub_field('title') ?></h2>
										</div>
										<div class="sub-content ninecol">
											<?php the_sub_field('content') ?>
										</div>
									<?php endwhile; ?>
								</div>
							</section>
							
							<hr>

							<section id="blog" class="clearfix">
								<div class="twelvecol">

									<?php query_posts("posts_per_page=2"); ?>

									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

										<header class="article-header threecol first">

											<h2 class="clearfix"><?php the_title(); ?></h2>
											<p class="byline vcard"><?php
												printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time><br>by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link() );
											?></p>

										</header>

										<section class="sub-content ninecol entry-content clearfix" itemprop="articleBody">
											<?php the_content(); ?>
										</section>

									</article>

									<?php endwhile; else : ?>

											<article id="post-not-found" class="hentry clearfix">
													<header class="article-header">
														<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
												</header>
													<section class="entry-content">
														<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
												</section>
												<footer class="article-footer">
														<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
												</footer>
											</article>
									<?php endif; ?>

								<p class="more-posts"><a href="/blog">Read more posts...</a></p>
								<?php // reset parameters for rest of page ?>
								<?php wp_reset_query(); ?>
								</div> <!-- /#blog -->
							</section>

							<hr>

							<section id="contact" class="clearfix">
								<div class="twelvecol">
									<div class="threecol first">
										<h2>Contact</h2>	
									</div>
									<div class="ninecol">
										<?php the_field('contact_form') ?>
									</div>
								</div>
							</section>

							<hr>

						</div> <!-- /.main -->
						
				</div>

			</div>

<?php get_footer(); ?>
