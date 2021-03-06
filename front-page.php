<?php get_header(); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>-child/img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                    <hr class="small">
                    <span class="subheading"> <?php echo $description; ?> </span>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="content" class="site-content">
<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

				<?php if (is_home()) : ?>
				<?php if (have_posts()) : ?>
				<?php query_posts("showposts=5"); // show one latest post only ?>
							<?php	while ( have_posts() ) : the_post(); ?>
								<div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
													<?php the_excerpt(); ?>
                        </h3>
                    </a>
                    <p class="post-meta"> <?php the_date(); ?> </p>
                </div>
                <hr>
							<?php	endwhile;	?>
						<?php endif; ?>
					<?php endif; ?>




                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                       <?php
													the_posts_pagination( array(
														'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
														'next_text'          => __( 'Next page', 'twentyfifteen' ),
														'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
													) );
												?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>


<?php get_footer(); ?>
