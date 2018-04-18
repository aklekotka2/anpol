

<?php get_header(); ?>
    <section  class="slider">
        <ul id="slide-list">
          <li style="background-image: url('<?php echo ANPOL_THEME_URL; ?>img/4b.jpg') no-repeat; ">
            <a href="#slide1">
              <img src="<?php echo ANPOL_THEME_URL; ?>img/4b.jpg" 			  
			  	<?php if(get_bloginfo('language')=='pl-PL'):?>
					alt="Spokój i bezpieczeństwo finansowo-ksiegowe"
				<?php else: ?>
					alt="Calmness and financial and accounting security"
				<?php endif; ?>				  
			  >
            </a>
          </li>
        </ul>
    </section>
	<?php $search = getQuerySingleParam('search'); ?>
    <section class="content-wrapper">
        <header>
		<?php if(isset($search)):?>
            <h2><?php echo $search; ?></h2>
			<?php 
					
			
			$query = new WP_Query( array( 's' => $search ) ); ?>
		<?php else: ?>
            <h2>Aktualności</h2>
			<?php $query = new WP_Query( 'cat=27,30' ); ?>
		<?php endif; ?>
        </header>
		<div class="pos-center">
			<div class="content">
			
			
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="post-container">
				 
					 <!-- Display the Title as a link to the Post's permalink. -->
					 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

					
					 
					  <div class="entry">
						<?php echo get_the_excerpt(); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="more">  [...]</a>
					  </div>
															
				</div>
					<?php endwhile; 
					wp_reset_postdata();
					else : ?>
					<p><?php /*esc_html_e( 'Sorry, no posts matched your criteria.' );*/ esc_html_e( 'Brak postów spełniających podane kryteria.' );?></p>
					<?php endif; ?>
			</div>
			<div class="sidebar">
				<?php get_sidebar();?>
			</div>
		</div>
    </section>




<?php get_footer(); ?>